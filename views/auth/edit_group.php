<h1><?php _e('Edit Group');?></h1>
<p><?php _e('Please enter the group information below.');?></p>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open(current_url());?>

      <p>
            <?php echo __('Group Work Name:');?> <br />
            <?php echo form_input($group_name);?>
      </p>

      <p>
            <?php echo __('Name:');?> <br />
            <?php echo form_input($group_description);?>
      </p>
      
      <p>
            <?php echo __('Description:');?> <br />
            <?php echo form_textarea($group_description_permissions);?>
      </p>

      <p><?php echo form_submit('submit', __('Save Group'));?></p>

<?php echo form_close();?>