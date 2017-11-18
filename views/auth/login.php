<h1><?php _e('Login');?></h1>
<p><?php _e('Please login with your email/username and password below.') ?></p>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open("auth/login");?>

  <p>
    <?php echo __('Email/Username:');?>
    <?php echo form_input($identity);?>
  </p>

  <p>
    <?php _e('Password:') ?>
    <?php echo form_input($password);?>
  </p>

  <p>
    <?php _e('Remember Me:') ?>
    <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
  </p>


  <p><?php echo form_submit('submit', __('Login'));?></p>

<?php echo form_close();?>

<p><a href="forgot_password"><?php _e('Forgot your password?') ?></a></p>