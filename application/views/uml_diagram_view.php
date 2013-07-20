<!DOCTYPE html>
<html lang="en">
<head>

	
	<meta charset="utf-8">
	<title>Dashboard View</title>

	<link href="<?php echo base_url(); ?>assets/css/style.css" rel='stylesheet' type='text/css'>

	<link href="<?php echo base_url(); ?>assets/css/main_page_layout.css" rel='stylesheet' type='text/css'>

	<link href="<?php echo base_url(); ?>assets/css/sidebarStyle.css" rel='stylesheet' type='text/css'>

</head>
<body>

	<div class="main-nav">
		<!-- loading the partial topNavBar_loggedIn view -->
		<?php include('common/topNavBar_loggedIn.php'); ?>
	</div>  <!-- end div main-nav -->


<div id="belowNavWrapper">
	<div id="wrapper">
		
		
		<div id="sidebar">
			<div id="side_buffer_top"></div>
			<!-- loading the partial sidebar_nav view -->
			<?php include('common/sidebar_nav.php'); ?>
		</div>  <!-- end div sidebar -->
		
		<!-- Main content area -->
		
		<div id="content">
		
		
				<div style="width: 630px" id="containerr">
					<h1 class="containerHeader">UML File Generator</h1>

					<div id="body">

						<p>Hello and welcome to the Java UML parser.</p>
						<p><strong>Instructions step by step: </strong></p>
						<p>1. Load your java file as a .txt, or .doc, or .docx file. </p>
						<p>2. Press upload!</p>
						<p>3. See your results!</p>
						<!-- This is the form to upload a file. -->

						<?php echo form_open_multipart('upload/do_upload');?>

							Please choose a file: <input type="file" name="userfile" size="20" />
								<input type="submit" value="upload" />
				 		</form>
						<h3>Paste in your existing Java file.</h3><br />
						<textarea rows="4" cols="50">
						Insert your text here...
						</textarea> <br />
						<!--  Generate Button -->
						<input type="submit" value="Generate" /> <br /><hr />
					</div>  <!-- end div body -->

					<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
				</div>  <!-- end div container -->

		</div> <!-- end div content -->
	</div>  <!-- end div wrapper -->

</div>  <!-- end div belowNavWrapper -->


</body>
</html>
