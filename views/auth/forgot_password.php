<h1><?php _e('Forgot Password'); ?></h1>
<p><?php echo sprintf(__('Please enter your %s so we can send you an email to reset your password.'), $identity_label);?></p>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open("auth/forgot_password");?>

      <p>
      	<label for="identity"><?php echo (($type=='email') ? sprintf(__('%s:'), $identity_label) : sprintf(__('Identity'), $identity_label));?></label> <br />
      	<?php echo form_input($identity);?>
      </p>

      <p><?php echo form_submit('submit', __('Submit'));?></p>

<?php echo form_close();?>
