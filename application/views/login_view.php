<!DOCTYPE html>
<html lang="en">
<head>

	
	<meta charset="utf-8">
	<title>Login View</title>

	<style type="text/css">

	::selection{ background-color: #E13300; color: white; }
	::moz-selection{ background-color: #E13300; color: white; }
	::webkit-selection{ background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body{
		margin: 0 15px 0 15px;
	}
	
	p.footer{
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}
	
	#container{
		margin: 10px;
		border: 1px solid #D0D0D0;
		-webkit-box-shadow: 0 0 8px #D0D0D0;
	}
	
	
	/*jy added login css*/
	#login{
		width: 260px;
	}
	
	input.txt, textarea {
		border-radius: 5px;
		-webkit-border-radius: 5px;
		-moz-border-radius: 5px;
		border: 1px solid #999;
		background: #ffffff;
		padding: 5px 2px;
	}
	
	.button {
		border: 1px solid #00487a;
		-moz-border-radius: 5px;
		text-align: center;
		-webkit-border-radius: 5px;
		border-radius: 5px;
		background: #0567ad;
		padding: 8px 9px 8px;
		text-shadow: #00487a 1px 1px 0;
		color: #fff;
		cursor: pointer;
	}
	
	.msg-error {
		border-color: #f3abab;
		background: #f9c9c9;
		color: #8d0d0d;
	}
	
	
	.msg {
		width: 300px;
		border-radius: 5px;
		-webkit-border-radius: 5px;
		-moz-border-radius: 5px;
		border: 1px solid;
		margin: 0 0;
		padding: 8px 10px 0 10px;
		margin-bottom: 10px;
	}
	
	</style>
</head>
<body>




<div id="container">
	<h1>Login - UML Class Diagram Generator</h1>

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



</body>
</html>