<?php if (!defined('IN_PHPBB')) exit; $this->_tpl_include('overall_header.html'); ?>

<div id="pagecontent">

	<form name="confirm" action="<?php echo (isset($this->_rootref['S_CONFIRM_ACTION'])) ? $this->_rootref['S_CONFIRM_ACTION'] : ''; ?>" method="post">
	
	<table class="tablebg" width="100%" cellspacing="1">
	<tr>
		<th><?php echo (isset($this->_rootref['MESSAGE_TITLE'])) ? $this->_rootref['MESSAGE_TITLE'] : ''; ?></th>
	</tr>
	<tr>
		<td class="row1" align="center">
			<?php if ($this->_rootref['ADDITIONAL_MSG']) {  ?>
				<span class="gen error"><?php echo (isset($this->_rootref['ADDITIONAL_MSG'])) ? $this->_rootref['ADDITIONAL_MSG'] : ''; ?></span><br />
			<?php } if ($this->_rootref['S_NOTIFY_POSTER']) {  ?>
				<input type="checkbox" class="radio" name="notify_poster" checked="checked" /><span class="gen"><?php if ($this->_rootref['S_APPROVE']) {  echo ((isset($this->_rootref['L_NOTIFY_POSTER_APPROVAL'])) ? $this->_rootref['L_NOTIFY_POSTER_APPROVAL'] : ((isset($user->lang['NOTIFY_POSTER_APPROVAL'])) ? $user->lang['NOTIFY_POSTER_APPROVAL'] : '{ NOTIFY_POSTER_APPROVAL }')); } else { echo ((isset($this->_rootref['L_NOTIFY_POSTER_DISAPPROVAL'])) ? $this->_rootref['L_NOTIFY_POSTER_DISAPPROVAL'] : ((isset($user->lang['NOTIFY_POSTER_DISAPPROVAL'])) ? $user->lang['NOTIFY_POSTER_DISAPPROVAL'] : '{ NOTIFY_POSTER_DISAPPROVAL }')); } ?></span><br />
			<?php } if (! $this->_rootref['S_APPROVE']) {  ?>
				<br />
				<table border="0" width="90%" cellspacing="2" cellpadding="1">
				<tr>
					<td class="row1" width="22%"><b class="gen"><?php echo ((isset($this->_rootref['L_DISAPPROVE_REASON'])) ? $this->_rootref['L_DISAPPROVE_REASON'] : ((isset($user->lang['DISAPPROVE_REASON'])) ? $user->lang['DISAPPROVE_REASON'] : '{ DISAPPROVE_REASON }')); ?>:</b></td>
					<td class="row1" width="78%"><select name="reason_id"><?php $_reason_count = (isset($this->_tpldata['reason'])) ? sizeof($this->_tpldata['reason']) : 0;if ($_reason_count) {for ($_reason_i = 0; $_reason_i < $_reason_count; ++$_reason_i){$_reason_val = &$this->_tpldata['reason'][$_reason_i]; ?><option value="<?php echo $_reason_val['ID']; ?>"<?php if ($_reason_val['S_SELECTED']) {  ?> selected="selected"<?php } ?>><?php echo $_reason_val['DESCRIPTION']; ?></option><?php }} ?></select></td>
				</tr>
				<tr>
					<td class="row1" valign="top"><span class="gen"><b><?php echo ((isset($this->_rootref['L_MORE_INFO'])) ? $this->_rootref['L_MORE_INFO'] : ((isset($user->lang['MORE_INFO'])) ? $user->lang['MORE_INFO'] : '{ MORE_INFO }')); ?>:</b></span><br /><span class="gensmall"><?php echo ((isset($this->_rootref['L_CAN_LEAVE_BLANK'])) ? $this->_rootref['L_CAN_LEAVE_BLANK'] : ((isset($user->lang['CAN_LEAVE_BLANK'])) ? $user->lang['CAN_LEAVE_BLANK'] : '{ CAN_LEAVE_BLANK }')); ?></span></td>
					<td class="row1"><textarea class="post" style="width:500px" name="reason" rows="10" cols="40"><?php echo (isset($this->_rootref['REASON'])) ? $this->_rootref['REASON'] : ''; ?></textarea></td>
				</tr>
				</table>
				<br />
			<?php } ?>
			<br /><?php echo (isset($this->_rootref['S_HIDDEN_FIELDS'])) ? $this->_rootref['S_HIDDEN_FIELDS'] : ''; ?><span class="gen"><?php echo (isset($this->_rootref['MESSAGE_TEXT'])) ? $this->_rootref['MESSAGE_TEXT'] : ''; ?></span><br /><br />
			<input type="submit" name="confirm" value="<?php echo (isset($this->_rootref['YES_VALUE'])) ? $this->_rootref['YES_VALUE'] : ''; ?>" class="btnmain" />&nbsp;&nbsp;<input type="submit" name="cancel" value="<?php echo ((isset($this->_rootref['L_NO'])) ? $this->_rootref['L_NO'] : ((isset($user->lang['NO'])) ? $user->lang['NO'] : '{ NO }')); ?>" class="btnlite" /></span>
		</td>
	</tr>
	</table>
	<?php echo (isset($this->_rootref['S_FORM_TOKEN'])) ? $this->_rootref['S_FORM_TOKEN'] : ''; ?>
	</form>
	
</div>

<br clear="all" />

<?php $this->_tpl_include('breadcrumbs.html'); ?>

<br clear="all" />

<?php $this->_tpl_include('overall_footer.html'); ?>