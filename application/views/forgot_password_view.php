<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<title>Forgot Password</title>

	<link href="<?php echo base_url(); ?>assets/css/style.css" rel='stylesheet' type='text/css'>
	
	<style>
	
	#container {
		margin-top: 10px;
		margin-bottom: 10px;
		margin-left: 20%;
		
		width: 700px;
		border: 1px solid #D0D0D0;
		-webkit-box-shadow: 0 0 8px #D0D0D0;
	}
	
	</style>
	
</head>
<body>

	<div class="main-nav">
		<h3 style="margin-left: 30px; color: white; font-size: 21px; font-weight: bold;">UML_Gen</h3>
	</div>

<div id="outerWrapper">

<div id="container">
	<h1 style="background: #0567ad; color: white; font-size: 21px; font-weight: bold;">Login</h1>

	<div id="body">
		
	<!-- <form action="http://localhost/xampp/CodeIgniter/index.php/login/login_verification" method="post" style="padding-left: 30%;"> -->
		
	<form action="<?php echo base_url(); ?>index.php/login/lookup_password" method="post" style="padding-left: 30%;">
		
		
		
		
		Username or email: <input id="login" class="txt" type="text" name="forgot_entertext"><br/><br/>
		
		<?php
		$logged_in = 0;
		
		
		
		
		if ($return_result != null)
		{
			// if ($return_result) {
				$stringbb = $return_result->u_password;
		
				echo "<strong>The password is: " .  $stringbb . "</strong><br /><br />";
		} 
		

		
		if ($is_error == true) {
			echo "<p>" . $forgot_error_message . "</p>";
		}
		
		
		
		
		?>
		
		<input class="button" type="submit" value="Lookup"><br /><br />
	</form>
	
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>

</div> <!-- end of outerWrapper div -->

</body>
</html>
