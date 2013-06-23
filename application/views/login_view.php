<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<title>Login View</title>

	<link href="<?php echo base_url(); ?>assets/css/style.css" rel='stylesheet' type='text/css'>
	
</head>
<body>

	<div class="main-nav">
	asdf
	</div>

<div id="outerWrapper">

<div id="container">
	<h1 style="background: #0567ad; color: white; font-size: 21px; font-weight: bold;">Login - UML Class Diagram Generator</h1>

	<div id="body">
		
	<!-- <form action="http://localhost/xampp/CodeIgniter/index.php/login/login_verification" method="post" style="padding-left: 30%;"> -->
		
	<form action="<?php echo base_url(); ?>index.php/login/login_verification" method="post" style="padding-left: 30%;">
		
		<?php if($warn != '') { ?>
				<div class="msg msg-error">
					<p><strong>Incorrect</strong> username or password. Please try again.</p> 
				</div>
		<?php } if ($message != '') { ?>
             	<div class="msg msg-error">
					<p>Username or Password are required. Please try again.</p> 
				</div>
        <?php } ?>
		
		
		Username: <input id="login" class="txt" type="text" name="l_username"><br/><br/>
		Password: <input id="login" class="txt" type="text" name="l_password"><br/><br/>
		
		<input class="button" type="submit" value="Submit">
	</form>
	
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>

</div> <!-- end of outerWrapper div -->

</body>
</html>