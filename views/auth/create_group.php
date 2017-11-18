<h1><?php echo __('Create Group');?></h1>
<p><?php echo __('Please enter the group information below.');?></p>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open("auth/create_group");?>

      <p>
            <?php echo __('Group Name:');?> <br />
            <?php echo form_input($group_name);?>
      </p>

      <p>
            <?php echo __('Description:');?> <br />
            <?php echo form_input($description);?>
      </p>

      <p><?php echo form_submit('submit', __('Create Group'));?></p>

<?php echo form_close();?>