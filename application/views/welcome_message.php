<!DOCTYPE html>
<html lang="en">
<head>

	
	<meta charset="utf-8">
	<title>Welcome to BuyAnA.com! We will help you solve your programming needs!</title>

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
	</style>
</head>
<body>


<div style="float:right;">

<!-- <a href="/welcome/goto_user_management_page">User Management</a> -->
<!-- <a href="http://localhost/xampp/CodeIgniter/welcome/goto_user_management_page/">User Management</a> -->
<?php 
echo anchor('welcome/goto_user_management_page', 'User Management');
?>

</div>

<div id="container">
	<h1>UML Class Diagram Generator</h1>

	<div id="body">
		
		<p>This is the site where you can upload your .java files and have a UML class diagram generated for you.</p>
		<p>We know it can be a hassle to create a UML class diagram. That's why we created this generator for you to use!</p> 
		<!-- This is the form to upload a file. -->
	 <form enctype="multipart/form-data" action="application/views/upload.php" method="POST">
 Please choose a file: <input name="uploaded" type="file" /><br />
 <input type="submit" value="Upload" />
 </form>
	</div>
	
	<div id="body">
	<h2>Paste in your existing Java file.</h2><br />
	<textarea rows="4" cols="50">
	Insert your text here...
	</textarea> <br />
	<!--  Generate Button -->
	<input type="submit" value="Generate" /> <br /><hr />
	
	<?php include('directory.php'); ?>
	
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>



</body>
</html>