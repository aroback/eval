<<<<<<< HEAD
<?php if (!defined('IN_PHPBB')) exit; ?><form method="post" action="<?php echo (isset($this->_rootref['U_QR_ACTION'])) ? $this->_rootref['U_QR_ACTION'] : ''; ?>">

	<table class="tablebg" width="100%" cellspacing="1">
		<tr>
			<th align="center" colspan="2"><?php echo ((isset($this->_rootref['L_QUICKREPLY'])) ? $this->_rootref['L_QUICKREPLY'] : ((isset($user->lang['QUICKREPLY'])) ? $user->lang['QUICKREPLY'] : '{ QUICKREPLY }')); ?></th>
		</tr>
		<tr>
			<td class="row1" width="22%"><b class="genmed"><?php echo ((isset($this->_rootref['L_SUBJECT'])) ? $this->_rootref['L_SUBJECT'] : ((isset($user->lang['SUBJECT'])) ? $user->lang['SUBJECT'] : '{ SUBJECT }')); ?>:</b></td>
			<td  class="row2" width="78%"><input class="post" style="width:450px" type="text" name="subject" size="45" maxlength="64" tabindex="2" value="<?php echo (isset($this->_rootref['SUBJECT'])) ? $this->_rootref['SUBJECT'] : ''; ?>" /></td>
		</tr>
		<tr>
			<td class="row1" width="22%"><b class="genmed"><?php echo ((isset($this->_rootref['L_MESSAGE'])) ? $this->_rootref['L_MESSAGE'] : ((isset($user->lang['MESSAGE'])) ? $user->lang['MESSAGE'] : '{ MESSAGE }')); ?>:</b></td>
			<td class="row2" valign="top" align="left" width="78%"><textarea name="message" rows="7" cols="76" tabindex="3"  style="width: 98%;"></textarea> </td>
		</tr>
		<tr>
			<td class="cat" colspan="2" align="center">
				<input class="btnmain" type="submit" accesskey="s" tabindex="6" name="post" value="<?php echo ((isset($this->_rootref['L_SUBMIT'])) ? $this->_rootref['L_SUBMIT'] : ((isset($user->lang['SUBMIT'])) ? $user->lang['SUBMIT'] : '{ SUBMIT }')); ?>" />&nbsp;
				<input class="btnlite" type="submit" accesskey="f" tabindex="7" name="full_editor" value="<?php echo ((isset($this->_rootref['L_FULL_EDITOR'])) ? $this->_rootref['L_FULL_EDITOR'] : ((isset($user->lang['FULL_EDITOR'])) ? $user->lang['FULL_EDITOR'] : '{ FULL_EDITOR }')); ?>" />

				<?php echo (isset($this->_rootref['S_FORM_TOKEN'])) ? $this->_rootref['S_FORM_TOKEN'] : ''; ?>

				<?php echo (isset($this->_rootref['QR_HIDDEN_FIELDS'])) ? $this->_rootref['QR_HIDDEN_FIELDS'] : ''; ?>

			</td>
		</tr>
	</table>
	
</form>
=======
<?php if (!defined('IN_PHPBB')) exit; ?><form method="post" action="<?php echo (isset($this->_rootref['U_QR_ACTION'])) ? $this->_rootref['U_QR_ACTION'] : ''; ?>">

	<table class="tablebg" width="100%" cellspacing="1">
		<tr>
			<th align="center" colspan="2"><?php echo ((isset($this->_rootref['L_QUICKREPLY'])) ? $this->_rootref['L_QUICKREPLY'] : ((isset($user->lang['QUICKREPLY'])) ? $user->lang['QUICKREPLY'] : '{ QUICKREPLY }')); ?></th>
		</tr>
		<tr>
			<td class="row1" width="22%"><b class="genmed"><?php echo ((isset($this->_rootref['L_SUBJECT'])) ? $this->_rootref['L_SUBJECT'] : ((isset($user->lang['SUBJECT'])) ? $user->lang['SUBJECT'] : '{ SUBJECT }')); ?>:</b></td>
			<td  class="row2" width="78%"><input class="post" style="width:450px" type="text" name="subject" size="45" maxlength="64" tabindex="2" value="<?php echo (isset($this->_rootref['SUBJECT'])) ? $this->_rootref['SUBJECT'] : ''; ?>" /></td>
		</tr>
		<tr>
			<td class="row1" width="22%"><b class="genmed"><?php echo ((isset($this->_rootref['L_MESSAGE'])) ? $this->_rootref['L_MESSAGE'] : ((isset($user->lang['MESSAGE'])) ? $user->lang['MESSAGE'] : '{ MESSAGE }')); ?>:</b></td>
			<td class="row2" valign="top" align="left" width="78%"><textarea name="message" rows="7" cols="76" tabindex="3"  style="width: 98%;"></textarea> </td>
		</tr>
		<tr>
			<td class="cat" colspan="2" align="center">
				<input class="btnmain" type="submit" accesskey="s" tabindex="6" name="post" value="<?php echo ((isset($this->_rootref['L_SUBMIT'])) ? $this->_rootref['L_SUBMIT'] : ((isset($user->lang['SUBMIT'])) ? $user->lang['SUBMIT'] : '{ SUBMIT }')); ?>" />&nbsp;
				<input class="btnlite" type="submit" accesskey="f" tabindex="7" name="full_editor" value="<?php echo ((isset($this->_rootref['L_FULL_EDITOR'])) ? $this->_rootref['L_FULL_EDITOR'] : ((isset($user->lang['FULL_EDITOR'])) ? $user->lang['FULL_EDITOR'] : '{ FULL_EDITOR }')); ?>" />

				<?php echo (isset($this->_rootref['S_FORM_TOKEN'])) ? $this->_rootref['S_FORM_TOKEN'] : ''; ?>
				<?php echo (isset($this->_rootref['QR_HIDDEN_FIELDS'])) ? $this->_rootref['QR_HIDDEN_FIELDS'] : ''; ?>
			</td>
		</tr>
	</table>
	
</form>
>>>>>>> 101f016215bd2b584385c709916ead5a447eb00d
<br clear="all" />