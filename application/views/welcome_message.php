<!DOCTYPE html>
<html lang="en">
<head>

	
	<meta charset="utf-8">
	<title>Dashboard</title>

	<link href="<?php echo base_url(); ?>assets/css/style.css" rel='stylesheet' type='text/css'>



	<style type="text/css">
	
		body {
			background: <?php echo $background_color; ?>;
		}
	
		.containerHeader {
			/*background: #0567ad;*/
			background: <?php echo $container_header_color; ?>;
			color: white;
			font-size: 21px;
		}
	
		#container {
			background: <?php echo $panel_background_color; ?>;
		}
	
	</style>

</head>
<body>


	<div class="main-nav">
		<div style="margin-left: 30px; width: 300px;">
			<h3 style="color: white; font-size: 21px; font-weight: bold;">UML_Gen</h3>
		</div>
	
		<div style="position:absolute; top: 16px; right: 40px;">
		
		    <img src="<? echo base_url(); ?>assets/img/top_right_bigger.png" border="0" usemap="#Map">

			<p style="position:absolute; left: 47px; top: 1px;">Username: <?php echo $this->session->userdata('username'); ?></p>
			<map name="Map">
		      <area shape="rect" coords="10,4,41,35" href="#" alt="user profile link">
		      <area shape="rect" coords="210,5,240,36" href="http://localhost/~youngbuck14188/UML_Gen/" alt="logout button">
		    </map>	
		</div>
	</div>  <!-- end div main-nav -->

	<div id="outerWrapper">

<div style="float:right;">

<?php 
echo anchor('welcome/goto_user_management_page', 'User Management');
?>

<?php 
echo anchor('welcome/goto_user_preferences', 'User Preferences');
?>

</div>

	<div id="container">
		<h1 class="containerHeader">File Uploader</h1>

		<div id="body">
		
			<p>This is the site where you can upload your .java files and have a UML class diagram generated for you.</p>
			<p>We know it can be a hassle to create a UML class diagram. That's why we created this generator for you to use!</p> 
			<!-- This is the form to upload a file. -->
			
			<?php echo form_open_multipart('upload/do_upload');?>
		
				Please choose a file: <input type="file" name="userfile" size="20" />
				<input type="submit" value="upload" />

	 		</form>
		</div>  <!-- end div body -->
	
		<div id="body">
			<h2>Paste in your existing Java file.</h2><br />
			<textarea rows="4" cols="50">
			Insert your text here...
			</textarea> <br />
			<!--  Generate Button -->
			<input type="submit" value="Generate" /> <br /><hr />
		</div>  <!-- end div body -->

		<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
	</div>  <!-- end div container -->


	<!-- bottom div container -->
	
	<br/>
	<div id="container">
		<!-- <h1 style="background: #0567ad; color: white; font-size: 21px;">Uploaded Files</h1> -->
		<h1 class="containerHeader">Uploaded Files</h1>
		
		<div id="body">

			<?php include('directory.php'); ?>
	
		</div>  <!-- end div body -->

		<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
	</div>  <!-- end div container -->

</div> <!-- end of outerWrapper div -->

</body>
</html>