<h1><?php echo lang('reset_password_heading');?></h1>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open('auth/reset_password/' . $code);?>

	<p>
		<label for="new_password"><?php echo sprintf(__('New Password (at least %s characters long):'), $min_password_length);?></label> <br />
		<?php echo form_input($new_password);?>
	</p>

	<p>
		<?php echo __('Confirm New Password:');?> <br />
		<?php echo form_input($new_password_confirm);?>
	</p>

	<?php echo form_input($user_id);?>
	<?php echo form_hidden($csrf); ?>

	<p><?php echo form_submit('submit', __('Change'));?></p>

<?php echo form_close();?>