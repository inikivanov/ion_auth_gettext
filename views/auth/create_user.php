<h1><?php echo __('Create User');?></h1>
<p><?php echo __('Please enter the user\'s information below.');?></p>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open("auth/create_user");?>

      <p>
            <?php echo __('First Name:');?> <br />
            <?php echo form_input($first_name);?>
      </p>

      <p>
            <?php echo __('Last Name:');?> <br />
            <?php echo form_input($last_name);?>
      </p>
      
      <?php
      if($identity_column!=='email') {
          echo '<p>';
          echo __('Identity:');
          echo '<br />';
          echo form_error('identity');
          echo form_input($identity);
          echo '</p>';
      }
      ?>

      <p>
            <?php echo __('Company Name:');?> <br />
            <?php echo form_input($company);?>
      </p>

      <p>
            <?php echo __('Email:');?> <br />
            <?php echo form_input($email);?>
      </p>

      <p>
            <?php echo __('Phone:');?> <br />
            <?php echo form_input($phone);?>
      </p>

      <p>
            <?php echo __('Password:');?> <br />
            <?php echo form_input($password);?>
      </p>

      <p>
            <?php echo __('Confirm Password:');?> <br />
            <?php echo form_input($password_confirm);?>
      </p>


      <p><?php echo form_submit('submit', __('Create User'));?></p>

<?php echo form_close();?>
