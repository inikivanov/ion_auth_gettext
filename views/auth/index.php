<h1><?php _e('Users') ?></h1>
<p><?php _e('Below is a list of the users.') ?></p>

<div id="infoMessage"><?php echo $message;?></div>

<table cellpadding=0 cellspacing=10>
	<tr>
		<th><?php _e('First Name') ?></th>
		<th><?php _e('Last Name') ?></th>
		<th><?php _e('Email') ?></th>
		<th><?php _e('Group') ?></th>
		<th><?php _e('Status') ?></th>
		<th><?php _e('Edit') ?></th>
	</tr>
	<?php foreach ($users as $user):?>
		<tr>
            <td><?php echo htmlspecialchars($user->first_name,ENT_QUOTES,'UTF-8');?></td>
            <td><?php echo htmlspecialchars($user->last_name,ENT_QUOTES,'UTF-8');?></td>
            <td><?php echo htmlspecialchars($user->email,ENT_QUOTES,'UTF-8');?></td>
			<td>
				<?php foreach ($user->groups as $group):?>
					<?php echo anchor("auth/edit_group/".$group->id, htmlspecialchars($group->name,ENT_QUOTES,'UTF-8')) ;?><br />
                <?php endforeach?>
			</td>
			<td><?php echo ($user->active) ? anchor("auth/deactivate/".$user->id, __('Active')) : anchor("auth/activate/". __('Deactive'));?></td>
			<td><?php echo anchor("auth/edit_user/".$user->id, 'Edit') ;?></td>
		</tr>
	<?php endforeach;?>
</table>

<p><?php echo anchor('auth/create_user', __('Create new user'))?> | <?php echo anchor('auth/create_group', __('Create New Group'))?></p>