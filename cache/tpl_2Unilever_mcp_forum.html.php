<?php if (!defined('IN_PHPBB')) exit; $this->_tpl_include('mcp_header.html'); if ($this->_rootref['S_MERGE_SELECT']) {  ?><div style="float: <?php echo (isset($this->_rootref['S_CONTENT_FLOW_END'])) ? $this->_rootref['S_CONTENT_FLOW_END'] : ''; ?>;"><?php $this->_tpl_include('jumpbox.html'); ?></div><?php } if ($this->_rootref['U_VIEW_FORUM_LOGS']) {  ?><a href="<?php echo (isset($this->_rootref['U_VIEW_FORUM_LOGS'])) ? $this->_rootref['U_VIEW_FORUM_LOGS'] : ''; ?>"><?php echo ((isset($this->_rootref['L_VIEW_FORUM_LOGS'])) ? $this->_rootref['L_VIEW_FORUM_LOGS'] : ((isset($user->lang['VIEW_FORUM_LOGS'])) ? $user->lang['VIEW_FORUM_LOGS'] : '{ VIEW_FORUM_LOGS }')); ?></a><?php } if ($this->_rootref['S_MERGE_SELECT']) {  ?><br clear="<?php echo (isset($this->_rootref['S_CONTENT_FLOW_END'])) ? $this->_rootref['S_CONTENT_FLOW_END'] : ''; ?>" /><?php } ?>

<form method="post" id="mcp" action="<?php echo (isset($this->_rootref['S_MCP_ACTION'])) ? $this->_rootref['S_MCP_ACTION'] : ''; ?>">

<table class="tablebg" width="100%" cellspacing="1">
<tr>
	<td class="cat" colspan="6" align="center"><span class="gensmall"><?php echo ((isset($this->_rootref['L_DISPLAY_TOPICS'])) ? $this->_rootref['L_DISPLAY_TOPICS'] : ((isset($user->lang['DISPLAY_TOPICS'])) ? $user->lang['DISPLAY_TOPICS'] : '{ DISPLAY_TOPICS }')); ?>:</span> <?php echo (isset($this->_rootref['S_SELECT_SORT_DAYS'])) ? $this->_rootref['S_SELECT_SORT_DAYS'] : ''; ?>&nbsp;<span class="gensmall"><?php echo ((isset($this->_rootref['L_SORT_BY'])) ? $this->_rootref['L_SORT_BY'] : ((isset($user->lang['SORT_BY'])) ? $user->lang['SORT_BY'] : '{ SORT_BY }')); ?></span> <?php echo (isset($this->_rootref['S_SELECT_SORT_KEY'])) ? $this->_rootref['S_SELECT_SORT_KEY'] : ''; ?> <?php echo (isset($this->_rootref['S_SELECT_SORT_DIR'])) ? $this->_rootref['S_SELECT_SORT_DIR'] : ''; ?>&nbsp;<input class="btnlite" type="submit" name="sort" value="<?php echo ((isset($this->_rootref['L_GO'])) ? $this->_rootref['L_GO'] : ((isset($user->lang['GO'])) ? $user->lang['GO'] : '{ GO }')); ?>" /></td>
</tr>
<tr>
	<th width="4%" nowrap="nowrap">&nbsp;</th>
	<th nowrap="nowrap">&nbsp;<?php echo ((isset($this->_rootref['L_TOPICS'])) ? $this->_rootref['L_TOPICS'] : ((isset($user->lang['TOPICS'])) ? $user->lang['TOPICS'] : '{ TOPICS }')); ?>&nbsp;</th>
	<th width="8%" nowrap="nowrap">&nbsp;<?php echo ((isset($this->_rootref['L_REPLIES'])) ? $this->_rootref['L_REPLIES'] : ((isset($user->lang['REPLIES'])) ? $user->lang['REPLIES'] : '{ REPLIES }')); ?>&nbsp;</th>
	<th width="17%" nowrap="nowrap">&nbsp;<?php echo ((isset($this->_rootref['L_LAST_POST'])) ? $this->_rootref['L_LAST_POST'] : ((isset($user->lang['LAST_POST'])) ? $user->lang['LAST_POST'] : '{ LAST_POST }')); ?>&nbsp;</th>
	<th width="5%" nowrap="nowrap">&nbsp;<?php echo ((isset($this->_rootref['L_MARK'])) ? $this->_rootref['L_MARK'] : ((isset($user->lang['MARK'])) ? $user->lang['MARK'] : '{ MARK }')); ?>&nbsp;</th>
</tr>
<?php $_topicrow_count = (isset($this->_tpldata['topicrow'])) ? sizeof($this->_tpldata['topicrow']) : 0;if ($_topicrow_count) {for ($_topicrow_i = 0; $_topicrow_i < $_topicrow_count; ++$_topicrow_i){$_topicrow_val = &$this->_tpldata['topicrow'][$_topicrow_i]; ?>
	<tr>
		<td class="row1" width="25" align="center"><?php echo $_topicrow_val['TOPIC_FOLDER_IMG']; ?></td>
		<?php if ($this->_rootref['S_TOPIC_ICONS']) {  ?><!-- td class="row1" width="25" align="center"><?php echo $_topicrow_val['TOPIC_ICON_IMG']; ?></td --><?php } ?>
		<td class="row1">
			<?php if ($_topicrow_val['S_SELECT_TOPIC']) {  ?>
				<span class="genmed">[ <a href="<?php echo $_topicrow_val['U_SELECT_TOPIC']; ?>"><?php echo ((isset($this->_rootref['L_SELECT_MERGE'])) ? $this->_rootref['L_SELECT_MERGE'] : ((isset($user->lang['SELECT_MERGE'])) ? $user->lang['SELECT_MERGE'] : '{ SELECT_MERGE }')); ?></a> ]&nbsp;</span>
			<?php } ?>
			<p class="topictitle"><?php echo (isset($this->_rootref['NEWEST_POST_IMG'])) ? $this->_rootref['NEWEST_POST_IMG'] : ''; ?> <?php echo $_topicrow_val['ATTACH_ICON_IMG']; ?> <a href="<?php echo $_topicrow_val['U_VIEW_TOPIC']; ?>"><?php echo $_topicrow_val['TOPIC_TITLE']; ?></a>
			<?php if ($_topicrow_val['S_TOPIC_UNAPPROVED'] || $_topicrow_val['S_POSTS_UNAPPROVED']) {  ?>
				<a href="<?php echo $_topicrow_val['U_MCP_QUEUE']; ?>"><?php echo $_topicrow_val['UNAPPROVED_IMG']; ?></a>&nbsp;
			<?php } if ($_topicrow_val['S_TOPIC_REPORTED'] && $_topicrow_val['U_MCP_REPORT']) {  ?>
				<a href="<?php echo $_topicrow_val['U_MCP_REPORT']; ?>"><?php echo (isset($this->_rootref['REPORTED_IMG'])) ? $this->_rootref['REPORTED_IMG'] : ''; ?></a>&nbsp;
			<?php } if ($_topicrow_val['S_MOVED_TOPIC'] && $this->_rootref['S_CAN_DELETE']) {  ?>
				[ <a href="<?php echo $_topicrow_val['U_DELETE_TOPIC']; ?>"><?php echo ((isset($this->_rootref['L_DELETE_SHADOW_TOPIC'])) ? $this->_rootref['L_DELETE_SHADOW_TOPIC'] : ((isset($user->lang['DELETE_SHADOW_TOPIC'])) ? $user->lang['DELETE_SHADOW_TOPIC'] : '{ DELETE_SHADOW_TOPIC }')); ?></a> ]&nbsp;
			<?php } ?>
			</p>
		</td>
		<td class="row1" width="50" align="center"><p class="topicdetails"><?php echo $_topicrow_val['REPLIES']; ?></p></td>
		<td class="row1" width="120" align="center"><p class="topicdetails"><?php echo $_topicrow_val['LAST_POST_TIME']; ?></p></td>
		<td class="row2" align="center">
			<?php if (! $_topicrow_val['S_MOVED_TOPIC'] && ! $this->_rootref['S_MERGE_SELECT']) {  ?><input type="checkbox" class="radio" name="topic_id_list[]" value="<?php echo $_topicrow_val['TOPIC_ID']; ?>"<?php if ($_topicrow_val['S_TOPIC_CHECKED']) {  ?> checked="checked"<?php } ?> /><?php } else { ?>&nbsp;<?php } ?>
		</td>
	</tr>
<?php }} else { ?>
	<tr>
		<td class="row1" colspan="8" align="center"><p class="gen"><?php echo ((isset($this->_rootref['L_NO_TOPICS'])) ? $this->_rootref['L_NO_TOPICS'] : ((isset($user->lang['NO_TOPICS'])) ? $user->lang['NO_TOPICS'] : '{ NO_TOPICS }')); ?></p></td>
	</tr>
<?php } if (! $this->_rootref['S_MERGE_SELECT']) {  ?>
<tr>
	<td class="cat" colspan="6" align="<?php echo (isset($this->_rootref['S_CONTENT_FLOW_END'])) ? $this->_rootref['S_CONTENT_FLOW_END'] : ''; ?>">
		<select name="action">
			<option value="" selected="selected"><?php echo ((isset($this->_rootref['L_SELECT_ACTION'])) ? $this->_rootref['L_SELECT_ACTION'] : ((isset($user->lang['SELECT_ACTION'])) ? $user->lang['SELECT_ACTION'] : '{ SELECT_ACTION }')); ?></option>
			<?php if ($this->_rootref['S_CAN_DELETE']) {  ?><option value="delete_topic"><?php echo ((isset($this->_rootref['L_DELETE'])) ? $this->_rootref['L_DELETE'] : ((isset($user->lang['DELETE'])) ? $user->lang['DELETE'] : '{ DELETE }')); ?></option><?php } if ($this->_rootref['S_CAN_MERGE']) {  ?><option value="merge_topics"><?php echo ((isset($this->_rootref['L_MERGE'])) ? $this->_rootref['L_MERGE'] : ((isset($user->lang['MERGE'])) ? $user->lang['MERGE'] : '{ MERGE }')); ?></option><?php } if ($this->_rootref['S_CAN_MOVE']) {  ?><option value="move"><?php echo ((isset($this->_rootref['L_MOVE'])) ? $this->_rootref['L_MOVE'] : ((isset($user->lang['MOVE'])) ? $user->lang['MOVE'] : '{ MOVE }')); ?></option><?php } if ($this->_rootref['S_CAN_FORK']) {  ?><option value="fork"><?php echo ((isset($this->_rootref['L_FORK'])) ? $this->_rootref['L_FORK'] : ((isset($user->lang['FORK'])) ? $user->lang['FORK'] : '{ FORK }')); ?></option><?php } if ($this->_rootref['S_CAN_LOCK']) {  ?><option value="lock"><?php echo ((isset($this->_rootref['L_LOCK'])) ? $this->_rootref['L_LOCK'] : ((isset($user->lang['LOCK'])) ? $user->lang['LOCK'] : '{ LOCK }')); ?></option><option value="unlock"><?php echo ((isset($this->_rootref['L_UNLOCK'])) ? $this->_rootref['L_UNLOCK'] : ((isset($user->lang['UNLOCK'])) ? $user->lang['UNLOCK'] : '{ UNLOCK }')); ?></option><?php } if ($this->_rootref['S_CAN_SYNC']) {  ?><option value="resync"><?php echo ((isset($this->_rootref['L_RESYNC'])) ? $this->_rootref['L_RESYNC'] : ((isset($user->lang['RESYNC'])) ? $user->lang['RESYNC'] : '{ RESYNC }')); ?></option><?php } if ($this->_rootref['S_CAN_MAKE_NORMAL']) {  ?><option value="make_normal"><?php echo ((isset($this->_rootref['L_MAKE_NORMAL'])) ? $this->_rootref['L_MAKE_NORMAL'] : ((isset($user->lang['MAKE_NORMAL'])) ? $user->lang['MAKE_NORMAL'] : '{ MAKE_NORMAL }')); ?></option><?php } if ($this->_rootref['S_CAN_MAKE_STICKY']) {  ?><option value="make_sticky"><?php echo ((isset($this->_rootref['L_MAKE_STICKY'])) ? $this->_rootref['L_MAKE_STICKY'] : ((isset($user->lang['MAKE_STICKY'])) ? $user->lang['MAKE_STICKY'] : '{ MAKE_STICKY }')); ?></option><?php } if ($this->_rootref['S_CAN_MAKE_ANNOUNCE']) {  ?>
				<option value="make_announce"><?php echo ((isset($this->_rootref['L_MAKE_ANNOUNCE'])) ? $this->_rootref['L_MAKE_ANNOUNCE'] : ((isset($user->lang['MAKE_ANNOUNCE'])) ? $user->lang['MAKE_ANNOUNCE'] : '{ MAKE_ANNOUNCE }')); ?></option>
				<option value="make_global"><?php echo ((isset($this->_rootref['L_MAKE_GLOBAL'])) ? $this->_rootref['L_MAKE_GLOBAL'] : ((isset($user->lang['MAKE_GLOBAL'])) ? $user->lang['MAKE_GLOBAL'] : '{ MAKE_GLOBAL }')); ?></option>
			<?php } ?>
		</select>
		<input class="btnmain" type="submit" value="<?php echo ((isset($this->_rootref['L_SUBMIT'])) ? $this->_rootref['L_SUBMIT'] : ((isset($user->lang['SUBMIT'])) ? $user->lang['SUBMIT'] : '{ SUBMIT }')); ?>" />
	</td>
</tr>
<?php } ?>
</table>
<?php echo (isset($this->_rootref['S_FORM_TOKEN'])) ? $this->_rootref['S_FORM_TOKEN'] : ''; ?>
</form>

<?php if (! $this->_rootref['S_MERGE_SELECT']) {  ?>
<table width="100%" cellspacing="2" cellpadding="2" border="0" align="center">
<tr>
	<td align="<?php echo (isset($this->_rootref['S_CONTENT_FLOW_END'])) ? $this->_rootref['S_CONTENT_FLOW_END'] : ''; ?>" valign="top" nowrap="nowrap"><b class="gensmall"><a href="#" onclick="marklist('mcp', 'topic_id_list', true); return false;"><?php echo ((isset($this->_rootref['L_MARK_ALL'])) ? $this->_rootref['L_MARK_ALL'] : ((isset($user->lang['MARK_ALL'])) ? $user->lang['MARK_ALL'] : '{ MARK_ALL }')); ?></a> :: <a href="#" onclick="marklist('mcp', 'topic_id_list', false); return false;"><?php echo ((isset($this->_rootref['L_UNMARK_ALL'])) ? $this->_rootref['L_UNMARK_ALL'] : ((isset($user->lang['UNMARK_ALL'])) ? $user->lang['UNMARK_ALL'] : '{ UNMARK_ALL }')); ?></a></b></td>
</tr>
</table>
<?php } $this->_tpl_include('mcp_footer.html'); ?>