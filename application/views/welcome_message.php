<!DOCTYPE html>
<html lang="en">
<head>

	
	<meta charset="utf-8">
	<title>Dashboard</title>

	<link href="<?php echo base_url(); ?>assets/css/style.css" rel='stylesheet' type='text/css'>

	<style type="text/css">


	</style>
</head>
<body>


<div class="main-nav">
	<h3 style="margin-left: 30px; color: white; font-size: 21px; font-weight: bold;">UML_Gen</h3>
</div>

	<div id="outerWrapper">

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
			
		<?php echo form_open_multipart('upload/do_upload');?>
		
			Please choose a file: <input type="file" name="userfile" size="20" />
			<input type="submit" value="upload" />

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

</div> <!-- end of outerWrapper div -->

</body>
</html>