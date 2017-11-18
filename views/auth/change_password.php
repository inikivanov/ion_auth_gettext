<h1><?php echo __('Change Password');?></h1>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open("auth/change_password");?>

      <p>
            <?php echo __('Old Password:');?> <br />
            <?php echo form_input($old_password);?>
      </p>

      <p>
            <label for="new_password"><?php echo sprintf(__('New Password (at least %s characters long):'), $min_password_length);?></label> <br />
            <?php echo form_input($new_password);?>
      </p>

      <p>
            <?php echo __('Confirm New Password:');?> <br />
            <?php echo form_input($new_password_confirm);?>
      </p>

      <?php echo form_input($user_id);?>
      <p><?php echo form_submit('submit', __('Change'));?></p>

<?php echo form_close();?>
