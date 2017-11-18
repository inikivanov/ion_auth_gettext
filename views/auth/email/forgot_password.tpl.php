<html>
<body>
	<h1><?php echo sprintf(__('Reset Password for %s'), $identity);?></h1>
	<p><?php echo sprintf(__('Please click this link to %s.'), anchor('auth/reset_password/'. $forgotten_password_code, __('Reset Your Password')));?></p>
</body>
</html>