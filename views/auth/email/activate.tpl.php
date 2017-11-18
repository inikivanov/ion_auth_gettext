<html>
<body>
	<h1><?php echo sprintf(__('Activate account for %s'), $identity);?></h1>
	<p><?php echo sprintf(__('Please click this link to %s.'), anchor('auth/activate/'. $id .'/'. $activation, __('Activate Your Account')));?></p>
</body>
</html>