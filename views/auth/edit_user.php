<h1><?php echo __('Edit User');?></h1>
<p><?php echo __('Please enter the user\'s information below.');?></p>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open(uri_string());?>

      <p>
            <?php echo __('First Name:');?> <br />
            <?php echo form_input($first_name);?>
      </p>

      <p>
            <?php echo __('Last Name:');?> <br />
            <?php echo form_input($last_name);?>
      </p>

      <p>
            <?php echo __('Company Name:');?> <br />
            <?php echo form_input($company);?>
      </p>

      <p>
            <?php echo __('Phone:');?> <br />
            <?php echo form_input($phone);?>
      </p>

      <p>
            <?php echo __('Password: (if changing password)') ?> <br />
            <?php echo form_input($password);?>
      </p>

      <p>
            <?php echo __('Confirm Password: (if changing password)');?><br />
            <?php echo form_input($password_confirm);?>
      </p>

      <?php if ($this->ion_auth->is_admin()): ?>

          <h3><?php echo __('Member of groups');?></h3>
          <?php foreach ($groups as $group):?>
              <label class="checkbox">
              <?php
                  $gID=$group['id'];
                  $checked = null;
                  $item = null;
                  foreach($currentGroups as $grp) {
                      if ($gID == $grp->id) {
                          $checked= ' checked="checked"';
                      break;
                      }
                  }
              ?>
              <input type="checkbox" name="groups[]" value="<?php echo $group['id'];?>"<?php echo $checked;?>>
              <?php echo htmlspecialchars($group['name'],ENT_QUOTES,'UTF-8');?>
              </label>
          <?php endforeach?>

      <?php endif ?>

      <?php echo form_hidden('id', $user->id);?>
      <?php echo form_hidden($csrf); ?>

      <p><?php echo form_submit('submit', __('Save User'));?></p>

<?php echo form_close();?>
