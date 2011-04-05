<?php if (!defined('IN_PHPBB')) exit; $this->_tpl_include('mcp_header.html'); ?>

<form name="mcp" id="mcp" method="post" action="<?php echo (isset($this->_rootref['S_MCP_ACTION'])) ? $this->_rootref['S_MCP_ACTION'] : ''; ?>">

<table width="100%" class="tablebg" cellspacing="1" cellpadding="4" border="0">
<tr>
	<th colspan="4" nowrap="nowrap"><?php echo ((isset($this->_rootref['L_DISPLAY_OPTIONS'])) ? $this->_rootref['L_DISPLAY_OPTIONS'] : ((isset($user->lang['DISPLAY_OPTIONS'])) ? $user->lang['DISPLAY_OPTIONS'] : '{ DISPLAY_OPTIONS }')); ?></th>
</tr>
<tr>
	<td colspan="4" class="cat" align="center"><span class="gensmall"><?php echo ((isset($this->_rootref['L_DISPLAY_ITEMS'])) ? $this->_rootref['L_DISPLAY_ITEMS'] : ((isset($user->lang['DISPLAY_ITEMS'])) ? $user->lang['DISPLAY_ITEMS'] : '{ DISPLAY_ITEMS }')); ?>:</span> <?php echo (isset($this->_rootref['S_SELECT_SORT_DAYS'])) ? $this->_rootref['S_SELECT_SORT_DAYS'] : ''; ?>&nbsp;<span class="gensmall"><?php echo ((isset($this->_rootref['L_SORT_BY'])) ? $this->_rootref['L_SORT_BY'] : ((isset($user->lang['SORT_BY'])) ? $user->lang['SORT_BY'] : '{ SORT_BY }')); ?></span> <?php echo (isset($this->_rootref['S_SELECT_SORT_KEY'])) ? $this->_rootref['S_SELECT_SORT_KEY'] : ''; ?> <?php echo (isset($this->_rootref['S_SELECT_SORT_DIR'])) ? $this->_rootref['S_SELECT_SORT_DIR'] : ''; ?>&nbsp;<span class="gensmall"><?php echo ((isset($this->_rootref['L_FORUM'])) ? $this->_rootref['L_FORUM'] : ((isset($user->lang['FORUM'])) ? $user->lang['FORUM'] : '{ FORUM }')); ?></span> <select name="f"><?php echo (isset($this->_rootref['S_FORUM_OPTIONS'])) ? $this->_rootref['S_FORUM_OPTIONS'] : ''; ?></select> &nbsp; <?php if ($this->_rootref['TOPIC_ID']) {  ?><input type="checkbox" class="radio" name="t" value="<?php echo (isset($this->_rootref['TOPIC_ID'])) ? $this->_rootref['TOPIC_ID'] : ''; ?>" checked="checked" />&nbsp; <b><?php echo ((isset($this->_rootref['L_ONLY_TOPIC'])) ? $this->_rootref['L_ONLY_TOPIC'] : ((isset($user->lang['ONLY_TOPIC'])) ? $user->lang['ONLY_TOPIC'] : '{ ONLY_TOPIC }')); ?></b> &nbsp; <?php } ?><input class="btnlite" type="submit" name="sort" value="<?php echo ((isset($this->_rootref['L_GO'])) ? $this->_rootref['L_GO'] : ((isset($user->lang['GO'])) ? $user->lang['GO'] : '{ GO }')); ?>" /></td>
</tr>
<tr> 
	<th>&nbsp;<?php if ($this->_rootref['S_TOPICS']) {  echo ((isset($this->_rootref['L_TOPIC'])) ? $this->_rootref['L_TOPIC'] : ((isset($user->lang['TOPIC'])) ? $user->lang['TOPIC'] : '{ TOPIC }')); } else { echo ((isset($this->_rootref['L_POST'])) ? $this->_rootref['L_POST'] : ((isset($user->lang['POST'])) ? $user->lang['POST'] : '{ POST }')); } ?>&nbsp;</th>
	<th>&nbsp;<?php echo ((isset($this->_rootref['L_AUTHOR'])) ? $this->_rootref['L_AUTHOR'] : ((isset($user->lang['AUTHOR'])) ? $user->lang['AUTHOR'] : '{ AUTHOR }')); ?>&nbsp;</th>
	<th>&nbsp;<?php echo ((isset($this->_rootref['L_POST_TIME'])) ? $this->_rootref['L_POST_TIME'] : ((isset($user->lang['POST_TIME'])) ? $user->lang['POST_TIME'] : '{ POST_TIME }')); ?>&nbsp;</th>
	<th width="5%">&nbsp;<?php echo ((isset($this->_rootref['L_SELECT'])) ? $this->_rootref['L_SELECT'] : ((isset($user->lang['SELECT'])) ? $user->lang['SELECT'] : '{ SELECT }')); ?>&nbsp;</th>
</tr>
<?php $_postrow_count = (isset($this->_tpldata['postrow'])) ? sizeof($this->_tpldata['postrow']) : 0;if ($_postrow_count) {for ($_postrow_i = 0; $_postrow_i < $_postrow_count; ++$_postrow_i){$_postrow_val = &$this->_tpldata['postrow'][$_postrow_i]; if (!($_postrow_val['S_ROW_COUNT'] & 1)  ) {  ?><tr class="row1"><?php } else { ?><tr class="row2"><?php } ?>
		<td style="padding: 4px;"><p class="topictitle"><a href="<?php echo $_postrow_val['U_VIEWPOST']; ?>"><?php echo $_postrow_val['POST_SUBJECT']; ?></a></p>
			<span class="gensmall"><?php if ($_postrow_val['U_VIEWFORUM']) {  echo ((isset($this->_rootref['L_FORUM'])) ? $this->_rootref['L_FORUM'] : ((isset($user->lang['FORUM'])) ? $user->lang['FORUM'] : '{ FORUM }')); ?>: <a href="<?php echo $_postrow_val['U_VIEWFORUM']; ?>"><?php echo $_postrow_val['FORUM_NAME']; ?></a><?php } else { echo $_postrow_val['FORUM_NAME']; } ?></span></td>
		<td style="padding: 4px;" align="<?php echo (isset($this->_rootref['S_CONTENT_FLOW_BEGIN'])) ? $this->_rootref['S_CONTENT_FLOW_BEGIN'] : ''; ?>" valign="top" nowrap="nowrap"><span class="gen"><?php echo $_postrow_val['POST_AUTHOR_FULL']; ?></span><br />
			<span class="gensmall">[ <a href="<?php echo $_postrow_val['U_VIEW_DETAILS']; ?>"><?php echo ((isset($this->_rootref['L_VIEW_DETAILS'])) ? $this->_rootref['L_VIEW_DETAILS'] : ((isset($user->lang['VIEW_DETAILS'])) ? $user->lang['VIEW_DETAILS'] : '{ VIEW_DETAILS }')); ?></a> ]</span></td>
		<td class="postdetails" style="padding: 4px;" align="<?php echo (isset($this->_rootref['S_CONTENT_FLOW_BEGIN'])) ? $this->_rootref['S_CONTENT_FLOW_BEGIN'] : ''; ?>" valign="top" nowrap="nowrap"><?php echo $_postrow_val['POST_TIME']; ?></td>
		<td align="center"><input type="checkbox" class="radio" name="post_id_list[]" value="<?php echo $_postrow_val['POST_ID']; ?>" /></td>
	</tr>
<?php }} else { ?>
	<tr>
		<td class="row1" colspan="4" height="30" align="center" valign="middle"><span class="gen"><?php if ($this->_rootref['S_TOPICS']) {  echo ((isset($this->_rootref['L_NO_TOPICS_QUEUE'])) ? $this->_rootref['L_NO_TOPICS_QUEUE'] : ((isset($user->lang['NO_TOPICS_QUEUE'])) ? $user->lang['NO_TOPICS_QUEUE'] : '{ NO_TOPICS_QUEUE }')); } else { echo ((isset($this->_rootref['L_UNAPPROVED_POSTS_ZERO_TOTAL'])) ? $this->_rootref['L_UNAPPROVED_POSTS_ZERO_TOTAL'] : ((isset($user->lang['UNAPPROVED_POSTS_ZERO_TOTAL'])) ? $user->lang['UNAPPROVED_POSTS_ZERO_TOTAL'] : '{ UNAPPROVED_POSTS_ZERO_TOTAL }')); } ?></span></td>
	</tr>
<?php } ?>
<tr>
	<td class="cat" colspan="4" align="center"><input class="btnmain" type="submit" name="action[approve]" value="<?php echo ((isset($this->_rootref['L_APPROVE'])) ? $this->_rootref['L_APPROVE'] : ((isset($user->lang['APPROVE'])) ? $user->lang['APPROVE'] : '{ APPROVE }')); ?>" />&nbsp;&nbsp;<input class="btnlite" type="submit" name="action[disapprove]" value="<?php echo ((isset($this->_rootref['L_DISAPPROVE'])) ? $this->_rootref['L_DISAPPROVE'] : ((isset($user->lang['DISAPPROVE'])) ? $user->lang['DISAPPROVE'] : '{ DISAPPROVE }')); ?>" /></td>
</tr>
</table>
<?php echo (isset($this->_rootref['S_FORM_TOKEN'])) ? $this->_rootref['S_FORM_TOKEN'] : ''; ?>
</form>

<table width="100%" cellspacing="2" cellpadding="2" border="0" align="center">
<tr>
	<td align="<?php echo (isset($this->_rootref['S_CONTENT_FLOW_END'])) ? $this->_rootref['S_CONTENT_FLOW_END'] : ''; ?>" valign="top" nowrap="nowrap"><b class="gensmall"><a href="#" onclick="marklist('mcp', '', true); return false;"><?php echo ((isset($this->_rootref['L_MARK_ALL'])) ? $this->_rootref['L_MARK_ALL'] : ((isset($user->lang['MARK_ALL'])) ? $user->lang['MARK_ALL'] : '{ MARK_ALL }')); ?></a> :: <a href="#" onclick="marklist('mcp', '', false); return false;"><?php echo ((isset($this->_rootref['L_UNMARK_ALL'])) ? $this->_rootref['L_UNMARK_ALL'] : ((isset($user->lang['UNMARK_ALL'])) ? $user->lang['UNMARK_ALL'] : '{ UNMARK_ALL }')); ?></a></b></td>
</tr>
</table>

<?php $this->_tpl_include('mcp_footer.html'); ?>