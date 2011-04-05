<?php if (!defined('IN_PHPBB')) exit; $this->_tpl_include('mcp_header.html'); if ($this->_rootref['S_MCP_REPORT']) {  ?>
	<form method="post" name="mcp_report" action="<?php echo (isset($this->_rootref['S_CLOSE_ACTION'])) ? $this->_rootref['S_CLOSE_ACTION'] : ''; ?>">

	<table width="100%" cellpadding="3" cellspacing="1" border="0" class="tablebg">
	<tr>
		<th colspan="2" align="center"><?php if ($this->_rootref['S_PM']) {  echo ((isset($this->_rootref['L_PM_REPORT_DETAILS'])) ? $this->_rootref['L_PM_REPORT_DETAILS'] : ((isset($user->lang['PM_REPORT_DETAILS'])) ? $user->lang['PM_REPORT_DETAILS'] : '{ PM_REPORT_DETAILS }')); } else { echo ((isset($this->_rootref['L_REPORT_DETAILS'])) ? $this->_rootref['L_REPORT_DETAILS'] : ((isset($user->lang['REPORT_DETAILS'])) ? $user->lang['REPORT_DETAILS'] : '{ REPORT_DETAILS }')); } ?></th>
	</tr>
	<tr>
		<td class="row1"><b class="gen"><?php echo ((isset($this->_rootref['L_REPORT_REASON'])) ? $this->_rootref['L_REPORT_REASON'] : ((isset($user->lang['REPORT_REASON'])) ? $user->lang['REPORT_REASON'] : '{ REPORT_REASON }')); ?>: </b></td>
		<td class="row2"><span class="gen"><?php echo (isset($this->_rootref['REPORT_REASON_TITLE'])) ? $this->_rootref['REPORT_REASON_TITLE'] : ''; ?> &raquo; <?php echo (isset($this->_rootref['REPORT_REASON_DESCRIPTION'])) ? $this->_rootref['REPORT_REASON_DESCRIPTION'] : ''; ?></span></td>
	</tr>
	<tr>
		<td class="row1" width="20%"><b class="gen"><?php echo ((isset($this->_rootref['L_REPORTER'])) ? $this->_rootref['L_REPORTER'] : ((isset($user->lang['REPORTER'])) ? $user->lang['REPORTER'] : '{ REPORTER }')); ?>: </b></td>
		<td class="row2" width="80%"><span class="gen"<?php if ($this->_rootref['REPORTER_COLOUR']) {  ?> style="font-weight: bold; color: <?php echo (isset($this->_rootref['REPORTER_COLOUR'])) ? $this->_rootref['REPORTER_COLOUR'] : ''; ?>;"<?php } ?>><?php echo (isset($this->_rootref['REPORTER_NAME'])) ? $this->_rootref['REPORTER_NAME'] : ''; ?></span> &nbsp; <span class="gen">[ <?php if ($this->_rootref['U_VIEW_REPORTER_PROFILE']) {  ?><a href="<?php echo (isset($this->_rootref['U_VIEW_REPORTER_PROFILE'])) ? $this->_rootref['U_VIEW_REPORTER_PROFILE'] : ''; ?>"><?php echo ((isset($this->_rootref['L_READ_PROFILE'])) ? $this->_rootref['L_READ_PROFILE'] : ((isset($user->lang['READ_PROFILE'])) ? $user->lang['READ_PROFILE'] : '{ READ_PROFILE }')); ?></a><?php } if ($this->_rootref['S_USER_NOTES']) {  if ($this->_rootref['U_VIEW_REPORTER_PROFILE']) {  ?> | <?php } ?><a href="<?php echo (isset($this->_rootref['U_MCP_REPORTER_NOTES'])) ? $this->_rootref['U_MCP_REPORTER_NOTES'] : ''; ?>"><?php echo ((isset($this->_rootref['L_VIEW_NOTES'])) ? $this->_rootref['L_VIEW_NOTES'] : ((isset($user->lang['VIEW_NOTES'])) ? $user->lang['VIEW_NOTES'] : '{ VIEW_NOTES }')); ?></a> | <a href="<?php echo (isset($this->_rootref['U_MCP_WARN_REPORTER'])) ? $this->_rootref['U_MCP_WARN_REPORTER'] : ''; ?>"><?php echo ((isset($this->_rootref['L_WARN_USER'])) ? $this->_rootref['L_WARN_USER'] : ((isset($user->lang['WARN_USER'])) ? $user->lang['WARN_USER'] : '{ WARN_USER }')); ?></a><?php } ?> ]</span></td>
	</tr>
	<tr>
		<td class="row1"><b class="gen"><?php echo ((isset($this->_rootref['L_REPORTED'])) ? $this->_rootref['L_REPORTED'] : ((isset($user->lang['REPORTED'])) ? $user->lang['REPORTED'] : '{ REPORTED }')); ?>: </b></td>
		<td class="row2"><span class="postdetails"><?php echo (isset($this->_rootref['REPORT_DATE'])) ? $this->_rootref['REPORT_DATE'] : ''; ?></span></td>
	</tr>
	<?php if ($this->_rootref['REPORT_TEXT']) {  ?>
		<tr>
			<th colspan="2" align="center"><?php echo ((isset($this->_rootref['L_MORE_INFO'])) ? $this->_rootref['L_MORE_INFO'] : ((isset($user->lang['MORE_INFO'])) ? $user->lang['MORE_INFO'] : '{ MORE_INFO }')); ?></th>
		</tr>
		<tr>
			<td class="row1" colspan="2"><div class="gen" style="overflow: auto; width: 100%; height: 80pt; border: 1px;"><?php echo (isset($this->_rootref['REPORT_TEXT'])) ? $this->_rootref['REPORT_TEXT'] : ''; ?></div></td>
		</tr>
	<?php } ?>
	<tr>
		<td class="cat" align="center" colspan="2"><?php if ($this->_rootref['S_POST_REPORTED']) {  ?><input class="btnmain" type="submit" value="<?php echo ((isset($this->_rootref['L_CLOSE_REPORT'])) ? $this->_rootref['L_CLOSE_REPORT'] : ((isset($user->lang['CLOSE_REPORT'])) ? $user->lang['CLOSE_REPORT'] : '{ CLOSE_REPORT }')); ?>" name="action[close]" /><?php } else { echo ((isset($this->_rootref['L_REPORT_CLOSED'])) ? $this->_rootref['L_REPORT_CLOSED'] : ((isset($user->lang['REPORT_CLOSED'])) ? $user->lang['REPORT_CLOSED'] : '{ REPORT_CLOSED }')); } ?> &nbsp; <input class="btnlite" type="submit" value="<?php echo ((isset($this->_rootref['L_DELETE_REPORT'])) ? $this->_rootref['L_DELETE_REPORT'] : ((isset($user->lang['DELETE_REPORT'])) ? $user->lang['DELETE_REPORT'] : '{ DELETE_REPORT }')); ?>" name="action[delete]" /></td>
	</tr>
	</table>

	<input type="hidden" name="report_id_list[]" value="<?php echo (isset($this->_rootref['REPORT_ID'])) ? $this->_rootref['REPORT_ID'] : ''; ?>" />
	<?php echo (isset($this->_rootref['S_FORM_TOKEN'])) ? $this->_rootref['S_FORM_TOKEN'] : ''; ?>
	</form>

	<br clear="all"/>
<?php } if ($this->_rootref['S_MCP_QUEUE']) {  ?><form method="post" name="mcp_approve" action="<?php echo (isset($this->_rootref['U_APPROVE_ACTION'])) ? $this->_rootref['U_APPROVE_ACTION'] : ''; ?>"><?php } else { ?><form method="post" name="mcp_report_details" action="<?php echo (isset($this->_rootref['S_CLOSE_ACTION'])) ? $this->_rootref['S_CLOSE_ACTION'] : ''; ?>"><?php } ?>

<table width="100%" cellpadding="3" cellspacing="1" border="0" class="tablebg">
<tr>
	<th colspan="2" align="center"><?php if ($this->_rootref['S_PM']) {  echo ((isset($this->_rootref['L_PM'])) ? $this->_rootref['L_PM'] : ((isset($user->lang['PM'])) ? $user->lang['PM'] : '{ PM }')); } else { echo ((isset($this->_rootref['L_POST_DETAILS'])) ? $this->_rootref['L_POST_DETAILS'] : ((isset($user->lang['POST_DETAILS'])) ? $user->lang['POST_DETAILS'] : '{ POST_DETAILS }')); } ?></th>
</tr>
<tr>
	<td class="row3" colspan="2" align="center"><span class="gensmall"><?php if ($this->_rootref['S_MCP_QUEUE']) {  echo (isset($this->_rootref['RETURN_QUEUE'])) ? $this->_rootref['RETURN_QUEUE'] : ''; ?> | <?php echo (isset($this->_rootref['RETURN_TOPIC_SIMPLE'])) ? $this->_rootref['RETURN_TOPIC_SIMPLE'] : ''; ?> | <?php echo (isset($this->_rootref['RETURN_POST'])) ? $this->_rootref['RETURN_POST'] : ''; } else if ($this->_rootref['S_MCP_REPORT']) {  echo (isset($this->_rootref['RETURN_REPORTS'])) ? $this->_rootref['RETURN_REPORTS'] : ''; if (! $this->_rootref['S_PM']) {  ?> | <a href="<?php echo (isset($this->_rootref['U_VIEW_POST'])) ? $this->_rootref['U_VIEW_POST'] : ''; ?>"><?php echo ((isset($this->_rootref['L_VIEW_POST'])) ? $this->_rootref['L_VIEW_POST'] : ((isset($user->lang['VIEW_POST'])) ? $user->lang['VIEW_POST'] : '{ VIEW_POST }')); ?></a> | <a href="<?php echo (isset($this->_rootref['U_VIEW_TOPIC'])) ? $this->_rootref['U_VIEW_TOPIC'] : ''; ?>"><?php echo ((isset($this->_rootref['L_VIEW_TOPIC'])) ? $this->_rootref['L_VIEW_TOPIC'] : ((isset($user->lang['VIEW_TOPIC'])) ? $user->lang['VIEW_TOPIC'] : '{ VIEW_TOPIC }')); ?></a> | <a href="<?php echo (isset($this->_rootref['U_VIEW_FORUM'])) ? $this->_rootref['U_VIEW_FORUM'] : ''; ?>"><?php echo ((isset($this->_rootref['L_VIEW_FORUM'])) ? $this->_rootref['L_VIEW_FORUM'] : ((isset($user->lang['VIEW_FORUM'])) ? $user->lang['VIEW_FORUM'] : '{ VIEW_FORUM }')); ?></a><?php } } else { echo (isset($this->_rootref['RETURN_TOPIC'])) ? $this->_rootref['RETURN_TOPIC'] : ''; } ?></span></td>
</tr>
<tr>
	<td class="row1"><b class="gen"><?php if ($this->_rootref['S_PM']) {  echo ((isset($this->_rootref['L_PM_SUBJECT'])) ? $this->_rootref['L_PM_SUBJECT'] : ((isset($user->lang['PM_SUBJECT'])) ? $user->lang['PM_SUBJECT'] : '{ PM_SUBJECT }')); } else { echo ((isset($this->_rootref['L_POST_SUBJECT'])) ? $this->_rootref['L_POST_SUBJECT'] : ((isset($user->lang['POST_SUBJECT'])) ? $user->lang['POST_SUBJECT'] : '{ POST_SUBJECT }')); } ?>: </b></td>
	<td class="row2"><span class="gen"><?php echo (isset($this->_rootref['POST_SUBJECT'])) ? $this->_rootref['POST_SUBJECT'] : ''; ?></span> <?php if ($this->_rootref['S_POST_UNAPPROVED']) {  ?><span class="postapprove"><?php echo (isset($this->_rootref['UNAPPROVED_IMG'])) ? $this->_rootref['UNAPPROVED_IMG'] : ''; ?> <a href="<?php echo (isset($this->_rootref['U_MCP_APPROVE'])) ? $this->_rootref['U_MCP_APPROVE'] : ''; ?>"><?php echo ((isset($this->_rootref['L_POST_UNAPPROVED'])) ? $this->_rootref['L_POST_UNAPPROVED'] : ((isset($user->lang['POST_UNAPPROVED'])) ? $user->lang['POST_UNAPPROVED'] : '{ POST_UNAPPROVED }')); ?></a></span> <?php } if ($this->_rootref['S_POST_REPORTED'] && ! $this->_rootref['S_MCP_REPORT']) {  ?><span class="postreported"><?php echo (isset($this->_rootref['REPORTED_IMG'])) ? $this->_rootref['REPORTED_IMG'] : ''; ?> <a href="<?php echo (isset($this->_rootref['U_MCP_REPORT'])) ? $this->_rootref['U_MCP_REPORT'] : ''; ?>"><?php echo ((isset($this->_rootref['L_POST_REPORTED'])) ? $this->_rootref['L_POST_REPORTED'] : ((isset($user->lang['POST_REPORTED'])) ? $user->lang['POST_REPORTED'] : '{ POST_REPORTED }')); ?></a></span><?php } ?></td>
</tr>
<tr>
	<td class="row1" width="20%"><b class="gen"><?php if ($this->_rootref['S_PM']) {  echo ((isset($this->_rootref['L_PM_FROM'])) ? $this->_rootref['L_PM_FROM'] : ((isset($user->lang['PM_FROM'])) ? $user->lang['PM_FROM'] : '{ PM_FROM }')); } else { echo ((isset($this->_rootref['L_POSTER'])) ? $this->_rootref['L_POSTER'] : ((isset($user->lang['POSTER'])) ? $user->lang['POSTER'] : '{ POSTER }')); } ?>: </b></td>
	<td class="row2" width="80%"><span class="gen"<?php if ($this->_rootref['POST_AUTHOR_COLOUR']) {  ?> style="font-weight: bold; color: <?php echo (isset($this->_rootref['POST_AUTHOR_COLOUR'])) ? $this->_rootref['POST_AUTHOR_COLOUR'] : ''; ?>"<?php } ?>><?php echo (isset($this->_rootref['POST_AUTHOR'])) ? $this->_rootref['POST_AUTHOR'] : ''; ?></span><span class="gen"> &nbsp; [ <?php if ($this->_rootref['U_POST_AUTHOR']) {  ?><a href="<?php echo (isset($this->_rootref['U_POST_AUTHOR'])) ? $this->_rootref['U_POST_AUTHOR'] : ''; ?>"><?php echo ((isset($this->_rootref['L_READ_PROFILE'])) ? $this->_rootref['L_READ_PROFILE'] : ((isset($user->lang['READ_PROFILE'])) ? $user->lang['READ_PROFILE'] : '{ READ_PROFILE }')); ?></a><?php } if ($this->_rootref['S_USER_NOTES']) {  if ($this->_rootref['U_POST_AUTHOR']) {  ?> | <?php } ?><a href="<?php echo (isset($this->_rootref['U_MCP_USER_NOTES'])) ? $this->_rootref['U_MCP_USER_NOTES'] : ''; ?>"><?php echo ((isset($this->_rootref['L_VIEW_NOTES'])) ? $this->_rootref['L_VIEW_NOTES'] : ((isset($user->lang['VIEW_NOTES'])) ? $user->lang['VIEW_NOTES'] : '{ VIEW_NOTES }')); ?></a> <?php if ($this->_rootref['U_MCP_WARN_USER']) {  ?>| <a href="<?php echo (isset($this->_rootref['U_MCP_WARN_USER'])) ? $this->_rootref['U_MCP_WARN_USER'] : ''; ?>"><?php echo ((isset($this->_rootref['L_WARN_USER'])) ? $this->_rootref['L_WARN_USER'] : ((isset($user->lang['WARN_USER'])) ? $user->lang['WARN_USER'] : '{ WARN_USER }')); ?></a><?php } } ?> ]</span></td>
</tr>
<?php if ($this->_rootref['S_CAN_VIEWIP']) {  ?>
	<tr>
		<td class="row1"><b class="gen"><?php if ($this->_rootref['S_PM']) {  echo ((isset($this->_rootref['L_THIS_PM_IP'])) ? $this->_rootref['L_THIS_PM_IP'] : ((isset($user->lang['THIS_PM_IP'])) ? $user->lang['THIS_PM_IP'] : '{ THIS_PM_IP }')); } else { echo ((isset($this->_rootref['L_THIS_POST_IP'])) ? $this->_rootref['L_THIS_POST_IP'] : ((isset($user->lang['THIS_POST_IP'])) ? $user->lang['THIS_POST_IP'] : '{ THIS_POST_IP }')); } ?>: </b></td>
		<td class="row2"><span class="gen">
			<?php if ($this->_rootref['U_WHOIS']) {  ?>
				<a href="<?php echo (isset($this->_rootref['U_WHOIS'])) ? $this->_rootref['U_WHOIS'] : ''; ?>"><?php if ($this->_rootref['POST_IPADDR']) {  echo (isset($this->_rootref['POST_IPADDR'])) ? $this->_rootref['POST_IPADDR'] : ''; } else { echo (isset($this->_rootref['POST_IP'])) ? $this->_rootref['POST_IP'] : ''; } ?></a> (<?php if ($this->_rootref['POST_IPADDR']) {  echo (isset($this->_rootref['POST_IP'])) ? $this->_rootref['POST_IP'] : ''; } else { ?><a href="<?php echo (isset($this->_rootref['U_LOOKUP_IP'])) ? $this->_rootref['U_LOOKUP_IP'] : ''; ?>"><?php echo ((isset($this->_rootref['L_LOOKUP_IP'])) ? $this->_rootref['L_LOOKUP_IP'] : ((isset($user->lang['LOOKUP_IP'])) ? $user->lang['LOOKUP_IP'] : '{ LOOKUP_IP }')); ?></a><?php } ?>)
			<?php } else { if ($this->_rootref['POST_IPADDR']) {  echo (isset($this->_rootref['POST_IPADDR'])) ? $this->_rootref['POST_IPADDR'] : ''; ?> (<?php echo (isset($this->_rootref['POST_IP'])) ? $this->_rootref['POST_IP'] : ''; ?>)<?php } else { echo (isset($this->_rootref['POST_IP'])) ? $this->_rootref['POST_IP'] : ''; if ($this->_rootref['U_LOOKUP_IP']) {  ?> (<a href="<?php echo (isset($this->_rootref['U_LOOKUP_IP'])) ? $this->_rootref['U_LOOKUP_IP'] : ''; ?>"><?php echo ((isset($this->_rootref['L_LOOKUP_IP'])) ? $this->_rootref['L_LOOKUP_IP'] : ((isset($user->lang['LOOKUP_IP'])) ? $user->lang['LOOKUP_IP'] : '{ LOOKUP_IP }')); ?></a>)<?php } } } ?>
		</span></td>
	</tr>
<?php } ?>
<tr>
	<td class="row1"><b class="gen"><?php if ($this->_rootref['S_PM']) {  echo ((isset($this->_rootref['L_SENT_AT'])) ? $this->_rootref['L_SENT_AT'] : ((isset($user->lang['SENT_AT'])) ? $user->lang['SENT_AT'] : '{ SENT_AT }')); } else { echo ((isset($this->_rootref['L_POSTED'])) ? $this->_rootref['L_POSTED'] : ((isset($user->lang['POSTED'])) ? $user->lang['POSTED'] : '{ POSTED }')); } ?>: </b></td>
	<td class="row2"><span class="postdetails"><?php echo (isset($this->_rootref['POST_DATE'])) ? $this->_rootref['POST_DATE'] : ''; ?></span></td>
</tr>
<?php if ($this->_rootref['S_TO_RECIPIENT']) {  ?>
	<tr>
		<td class="row1" nowrap="nowrap" width="150"><b class="gen"><?php echo ((isset($this->_rootref['L_TO'])) ? $this->_rootref['L_TO'] : ((isset($user->lang['TO'])) ? $user->lang['TO'] : '{ TO }')); ?>:</b></td>
		<td class="row2 gen">
		<?php $_to_recipient_count = (isset($this->_tpldata['to_recipient'])) ? sizeof($this->_tpldata['to_recipient']) : 0;if ($_to_recipient_count) {for ($_to_recipient_i = 0; $_to_recipient_i < $_to_recipient_count; ++$_to_recipient_i){$_to_recipient_val = &$this->_tpldata['to_recipient'][$_to_recipient_i]; if ($_to_recipient_val['IS_GROUP']) {  ?><span class="sep"><a href="<?php echo $_to_recipient_val['U_VIEW']; ?>"><?php echo $_to_recipient_val['NAME']; ?></a></span><?php } else { echo $_to_recipient_val['NAME_FULL']; ?>&nbsp;<?php } }} ?>
		</td>
	</tr>
<?php } if ($this->_rootref['S_BCC_RECIPIENT']) {  ?>
	<tr>
		<td class="row1" nowrap="nowrap" width="150"><b class="gen"><?php echo ((isset($this->_rootref['L_BCC'])) ? $this->_rootref['L_BCC'] : ((isset($user->lang['BCC'])) ? $user->lang['BCC'] : '{ BCC }')); ?>:</b></td>
		<td class="row2 gen">
		<?php $_bcc_recipient_count = (isset($this->_tpldata['bcc_recipient'])) ? sizeof($this->_tpldata['bcc_recipient']) : 0;if ($_bcc_recipient_count) {for ($_bcc_recipient_i = 0; $_bcc_recipient_i < $_bcc_recipient_count; ++$_bcc_recipient_i){$_bcc_recipient_val = &$this->_tpldata['bcc_recipient'][$_bcc_recipient_i]; if ($_bcc_recipient_val['IS_GROUP']) {  ?><span class="sep"><a href="<?php echo $_bcc_recipient_val['U_VIEW']; ?>"><?php echo $_bcc_recipient_val['NAME']; ?></a></span><?php } else { echo $_bcc_recipient_val['NAME_FULL']; ?>&nbsp;<?php } }} ?>
		</td>
	</tr>
<?php } ?>
<tr>
	<th colspan="2" align="center"><?php echo ((isset($this->_rootref['L_PREVIEW'])) ? $this->_rootref['L_PREVIEW'] : ((isset($user->lang['PREVIEW'])) ? $user->lang['PREVIEW'] : '{ PREVIEW }')); ?></th>
</tr>
<tr>
	<td class="row1" colspan="2">
	<?php if ($this->_rootref['U_EDIT']) {  ?><div class="gen" style="float: <?php echo (isset($this->_rootref['S_CONTENT_FLOW_END'])) ? $this->_rootref['S_CONTENT_FLOW_END'] : ''; ?>;"><a href="<?php echo (isset($this->_rootref['U_EDIT'])) ? $this->_rootref['U_EDIT'] : ''; ?>"><?php echo (isset($this->_rootref['EDIT_IMG'])) ? $this->_rootref['EDIT_IMG'] : ''; ?></a></div><?php } ?>

	<div class="postbody"><?php echo (isset($this->_rootref['POST_PREVIEW'])) ? $this->_rootref['POST_PREVIEW'] : ''; ?></div>

	<?php if ($this->_rootref['S_HAS_ATTACHMENTS']) {  ?>
		<br clear="all" /><br />

		<table class="tablebg" width="100%" cellspacing="1">
		<tr>
			<td class="row3"><b class="genmed"><?php echo ((isset($this->_rootref['L_ATTACHMENTS'])) ? $this->_rootref['L_ATTACHMENTS'] : ((isset($user->lang['ATTACHMENTS'])) ? $user->lang['ATTACHMENTS'] : '{ ATTACHMENTS }')); ?>: </b></td>
		</tr>
		<?php $_attachment_count = (isset($this->_tpldata['attachment'])) ? sizeof($this->_tpldata['attachment']) : 0;if ($_attachment_count) {for ($_attachment_i = 0; $_attachment_i < $_attachment_count; ++$_attachment_i){$_attachment_val = &$this->_tpldata['attachment'][$_attachment_i]; ?>
			<tr>
				<?php if (!($_attachment_val['S_ROW_COUNT'] & 1)  ) {  ?><td class="row2"><?php } else { ?><td class="row1"><?php } echo $_attachment_val['DISPLAY_ATTACHMENT']; ?></td>
			</tr>
		<?php }} ?>
		</table>
	<?php } ?>

	</td>
</tr>
<?php if ($this->_rootref['S_POST_UNAPPROVED'] && $this->_rootref['S_MCP_QUEUE']) {  ?>
	<tr>
		<td class="cat" align="center" colspan="2"><input class="btnmain" type="submit" value="<?php echo ((isset($this->_rootref['L_APPROVE'])) ? $this->_rootref['L_APPROVE'] : ((isset($user->lang['APPROVE'])) ? $user->lang['APPROVE'] : '{ APPROVE }')); ?>" name="action[approve]" /> &nbsp; <input class="btnlite" type="submit" value="<?php echo ((isset($this->_rootref['L_DISAPPROVE'])) ? $this->_rootref['L_DISAPPROVE'] : ((isset($user->lang['DISAPPROVE'])) ? $user->lang['DISAPPROVE'] : '{ DISAPPROVE }')); ?>" name="action[disapprove]" /></td>
	</tr>
	<input type="hidden" name="post_id_list[]" value="<?php echo (isset($this->_rootref['POST_ID'])) ? $this->_rootref['POST_ID'] : ''; ?>" />
<?php } ?>
</table>
<?php echo (isset($this->_rootref['S_FORM_TOKEN'])) ? $this->_rootref['S_FORM_TOKEN'] : ''; ?>
</form>

<?php if ($this->_rootref['S_MCP_QUEUE']) {  ?>
	<br clear="all" />

	<?php if ($this->_rootref['S_TOPIC_REVIEW']) {  $this->_tpl_include('posting_topic_review.html'); } } else if ($this->_rootref['S_MCP_REPORT']) {  ?>
	<br clear="all" />

	<?php if ($this->_rootref['S_TOPIC_REVIEW']) {  $this->_tpl_include('posting_topic_review.html'); } } else { if ($this->_rootref['S_CAN_LOCK_POST'] || $this->_rootref['S_CAN_DELETE_POST'] || $this->_rootref['S_CAN_CHGPOSTER']) {  ?>
		<br /><a name="mod"></a>

		<table width="100%" cellpadding="3" cellspacing="1" border="0" class="tablebg">
		<tr>
			<th colspan="2" align="center"><?php echo ((isset($this->_rootref['L_MOD_OPTIONS'])) ? $this->_rootref['L_MOD_OPTIONS'] : ((isset($user->lang['MOD_OPTIONS'])) ? $user->lang['MOD_OPTIONS'] : '{ MOD_OPTIONS }')); ?></th>
		</tr>
		<?php if ($this->_rootref['S_CAN_CHGPOSTER']) {  ?>
			<tr>
				<td class="row1" valign="top"><b class="gen"><?php echo ((isset($this->_rootref['L_CHANGE_POSTER'])) ? $this->_rootref['L_CHANGE_POSTER'] : ((isset($user->lang['CHANGE_POSTER'])) ? $user->lang['CHANGE_POSTER'] : '{ CHANGE_POSTER }')); ?></b></td>
				<td class="row2"><form method="post" name="mcp_chgposter" action="<?php echo (isset($this->_rootref['U_POST_ACTION'])) ? $this->_rootref['U_POST_ACTION'] : ''; ?>"><input class="post" type="text" name="username" value="" /> <input class="btnmain" type="submit" value="<?php echo ((isset($this->_rootref['L_CONFIRM'])) ? $this->_rootref['L_CONFIRM'] : ((isset($user->lang['CONFIRM'])) ? $user->lang['CONFIRM'] : '{ CONFIRM }')); ?>" name="action[chgposter]" /><br /><span class="gensmall">[ <a href="<?php echo (isset($this->_rootref['U_FIND_USERNAME'])) ? $this->_rootref['U_FIND_USERNAME'] : ''; ?>" onclick="find_username(this.href); return false;"><?php echo ((isset($this->_rootref['L_FIND_USERNAME'])) ? $this->_rootref['L_FIND_USERNAME'] : ((isset($user->lang['FIND_USERNAME'])) ? $user->lang['FIND_USERNAME'] : '{ FIND_USERNAME }')); ?></a> ]</span><?php if ($this->_rootref['S_USER_SELECT']) {  ?><br /><select name="u"><?php echo (isset($this->_rootref['S_USER_SELECT'])) ? $this->_rootref['S_USER_SELECT'] : ''; ?></select> <input type="submit" class="btnmain" name="action[chgposter_ip]" value="<?php echo ((isset($this->_rootref['L_CONFIRM'])) ? $this->_rootref['L_CONFIRM'] : ((isset($user->lang['CONFIRM'])) ? $user->lang['CONFIRM'] : '{ CONFIRM }')); ?>" /><?php } echo (isset($this->_rootref['S_FORM_TOKEN'])) ? $this->_rootref['S_FORM_TOKEN'] : ''; ?></form></td>
			</tr>
		<?php } if ($this->_rootref['S_CAN_LOCK_POST'] || $this->_rootref['S_CAN_DELETE_POST']) {  ?>
			<tr>
				<td class="row1" valign="top"><b class="gen"><?php echo ((isset($this->_rootref['L_MOD_OPTIONS'])) ? $this->_rootref['L_MOD_OPTIONS'] : ((isset($user->lang['MOD_OPTIONS'])) ? $user->lang['MOD_OPTIONS'] : '{ MOD_OPTIONS }')); ?></b></td>
				<td class="row2"><form method="post" name="mcp" action="<?php echo (isset($this->_rootref['U_MCP_ACTION'])) ? $this->_rootref['U_MCP_ACTION'] : ''; ?>"><select name="action"><?php if ($this->_rootref['S_CAN_LOCK_POST']) {  if ($this->_rootref['S_POST_LOCKED']) {  ?><option value="unlock_post"><?php echo ((isset($this->_rootref['L_UNLOCK_POST'])) ? $this->_rootref['L_UNLOCK_POST'] : ((isset($user->lang['UNLOCK_POST'])) ? $user->lang['UNLOCK_POST'] : '{ UNLOCK_POST }')); ?> [<?php echo ((isset($this->_rootref['L_UNLOCK_POST_EXPLAIN'])) ? $this->_rootref['L_UNLOCK_POST_EXPLAIN'] : ((isset($user->lang['UNLOCK_POST_EXPLAIN'])) ? $user->lang['UNLOCK_POST_EXPLAIN'] : '{ UNLOCK_POST_EXPLAIN }')); ?>]</option><?php } else { ?><option value="lock_post"><?php echo ((isset($this->_rootref['L_LOCK_POST'])) ? $this->_rootref['L_LOCK_POST'] : ((isset($user->lang['LOCK_POST'])) ? $user->lang['LOCK_POST'] : '{ LOCK_POST }')); ?> [<?php echo ((isset($this->_rootref['L_LOCK_POST_EXPLAIN'])) ? $this->_rootref['L_LOCK_POST_EXPLAIN'] : ((isset($user->lang['LOCK_POST_EXPLAIN'])) ? $user->lang['LOCK_POST_EXPLAIN'] : '{ LOCK_POST_EXPLAIN }')); ?>]</option><?php } } if ($this->_rootref['S_CAN_DELETE_POST']) {  ?><option value="delete_post"><?php echo ((isset($this->_rootref['L_DELETE_POST'])) ? $this->_rootref['L_DELETE_POST'] : ((isset($user->lang['DELETE_POST'])) ? $user->lang['DELETE_POST'] : '{ DELETE_POST }')); ?></option><?php } ?></select> <input class="btnmain" type="submit" value="<?php echo ((isset($this->_rootref['L_SUBMIT'])) ? $this->_rootref['L_SUBMIT'] : ((isset($user->lang['SUBMIT'])) ? $user->lang['SUBMIT'] : '{ SUBMIT }')); ?>" />	<?php echo (isset($this->_rootref['S_FORM_TOKEN'])) ? $this->_rootref['S_FORM_TOKEN'] : ''; ?></form></td>
			</tr>
		<?php } ?>
		</table>
	<?php } if ($this->_rootref['S_CAN_VIEWIP']) {  ?>
		<br /><a name="ip"></a>

		<table width="100%" cellpadding="3" cellspacing="1" border="0" class="tablebg">
		<tr>
			<th colspan="2" align="center"><?php echo ((isset($this->_rootref['L_IP_INFO'])) ? $this->_rootref['L_IP_INFO'] : ((isset($user->lang['IP_INFO'])) ? $user->lang['IP_INFO'] : '{ IP_INFO }')); ?></th>
		</tr>
		<tr>
			<td colspan="2" class="cat"><b class="gen"><?php echo ((isset($this->_rootref['L_OTHER_USERS'])) ? $this->_rootref['L_OTHER_USERS'] : ((isset($user->lang['OTHER_USERS'])) ? $user->lang['OTHER_USERS'] : '{ OTHER_USERS }')); ?></b></td>
		</tr>
		<?php $_userrow_count = (isset($this->_tpldata['userrow'])) ? sizeof($this->_tpldata['userrow']) : 0;if ($_userrow_count) {for ($_userrow_i = 0; $_userrow_i < $_userrow_count; ++$_userrow_i){$_userrow_val = &$this->_tpldata['userrow'][$_userrow_i]; if (!($_userrow_val['S_ROW_COUNT'] & 1)  ) {  ?><tr class="row1"><?php } else { ?><tr class="row2"><?php } ?>
				<td><span class="gen"><?php if ($_userrow_val['U_PROFILE']) {  ?><a href="<?php echo $_userrow_val['U_PROFILE']; ?>"><?php echo $_userrow_val['USERNAME']; ?></a><?php } else { echo $_userrow_val['USERNAME']; } ?> [ <?php echo $_userrow_val['NUM_POSTS']; ?> <?php echo $_userrow_val['L_POST_S']; ?> ]</span></td>
				<td align="center"><a href="<?php echo $_userrow_val['U_SEARCHPOSTS']; ?>"><?php echo (isset($this->_rootref['SEARCH_IMG'])) ? $this->_rootref['SEARCH_IMG'] : ''; ?></a></td>
			</tr>
		<?php }} else { ?>
			<tr class="row1">
				<td colspan="2" align="center"><span class="gen"><?php echo ((isset($this->_rootref['L_NO_MATCHES_FOUND'])) ? $this->_rootref['L_NO_MATCHES_FOUND'] : ((isset($user->lang['NO_MATCHES_FOUND'])) ? $user->lang['NO_MATCHES_FOUND'] : '{ NO_MATCHES_FOUND }')); ?></span></td>
			</tr>
		<?php } ?>
		<tr>
			<td class="cat"><b class="gen"><?php echo ((isset($this->_rootref['L_IPS_POSTED_FROM'])) ? $this->_rootref['L_IPS_POSTED_FROM'] : ((isset($user->lang['IPS_POSTED_FROM'])) ? $user->lang['IPS_POSTED_FROM'] : '{ IPS_POSTED_FROM }')); ?></b></td>
			<td class="cat" width="10%" nowrap="nowrap"><?php if ($this->_rootref['U_LOOKUP_ALL']) {  ?><span class="gen">[ <a href="<?php echo (isset($this->_rootref['U_LOOKUP_ALL'])) ? $this->_rootref['U_LOOKUP_ALL'] : ''; ?>"><?php echo ((isset($this->_rootref['L_LOOKUP_ALL'])) ? $this->_rootref['L_LOOKUP_ALL'] : ((isset($user->lang['LOOKUP_ALL'])) ? $user->lang['LOOKUP_ALL'] : '{ LOOKUP_ALL }')); ?></a> ]</span><?php } ?></td>
		</tr>
		<?php $_iprow_count = (isset($this->_tpldata['iprow'])) ? sizeof($this->_tpldata['iprow']) : 0;if ($_iprow_count) {for ($_iprow_i = 0; $_iprow_i < $_iprow_count; ++$_iprow_i){$_iprow_val = &$this->_tpldata['iprow'][$_iprow_i]; if (!($_iprow_val['S_ROW_COUNT'] & 1)  ) {  ?>
				<tr class="row1">
			<?php } else { ?>
				<tr class="row2">
			<?php } ?>
				<td><span class="gen"><?php if ($_iprow_val['HOSTNAME']) {  ?><a href="<?php echo $_iprow_val['U_WHOIS']; ?>"><?php echo $_iprow_val['HOSTNAME']; ?></a> (<?php echo $_iprow_val['IP']; ?>)<?php } else { ?><a href="<?php echo $_iprow_val['U_WHOIS']; ?>"><?php echo $_iprow_val['IP']; ?></a><?php } ?> [ <?php echo $_iprow_val['NUM_POSTS']; ?> <?php echo $_iprow_val['L_POST_S']; ?> ]</span></td>
				<td align="center"><?php if ($_iprow_val['U_LOOKUP_IP']) {  ?><span class="gen">[ <a href="<?php echo $_iprow_val['U_LOOKUP_IP']; ?>"><?php echo ((isset($this->_rootref['L_LOOKUP_IP'])) ? $this->_rootref['L_LOOKUP_IP'] : ((isset($user->lang['LOOKUP_IP'])) ? $user->lang['LOOKUP_IP'] : '{ LOOKUP_IP }')); ?></a> ]</span><?php } ?></td>
			</tr>
		<?php }} else { ?>
			<tr class="row1">
				<td colspan="2" align="center"><span class="gen"><?php echo ((isset($this->_rootref['L_NO_MATCHES_FOUND'])) ? $this->_rootref['L_NO_MATCHES_FOUND'] : ((isset($user->lang['NO_MATCHES_FOUND'])) ? $user->lang['NO_MATCHES_FOUND'] : '{ NO_MATCHES_FOUND }')); ?></span></td>
			</tr>
		<?php } ?>
		</table>
	<?php } } $this->_tpl_include('mcp_footer.html'); ?>