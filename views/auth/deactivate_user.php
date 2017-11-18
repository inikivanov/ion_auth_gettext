<h1><?php echo __('Deactivate User');?></h1>
<p><?php echo sprintf(__('Are you sure you want to deactivate the user \'%s\''), $user->username);?></p>

<?php echo form_open("auth/deactivate/".$user->id);?>

  <p>
  	<?php echo __('Yes:');?>
    <input type="radio" name="confirm" value="yes" checked="checked" />
    <?php echo __('No:');?>
    <input type="radio" name="confirm" value="no" />
  </p>

  <?php echo form_hidden($csrf); ?>
  <?php echo form_hidden(array('id'=>$user->id)); ?>

  <p><?php echo form_submit('submit', __('Submit'));?></p>

<?php echo form_close();?>