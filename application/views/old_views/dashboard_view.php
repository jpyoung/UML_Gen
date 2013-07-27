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
				<div  style="width: 630px;" id="containerr">
					<!-- <h1 style="background: #0567ad; color: white; font-size: 21px;">Uploaded Files</h1> -->
					<h1 class="containerHeader">Uploaded Files</h1>

					<div id="body">


						<?php
						 	$path = getcwd() . "/uploaded_files/";
							echo "<p style='padding-left: 45px;'><b>Upload Directory Path:</b> " . $path . "</p>";
						?>

						<table id="newspaper-b">
						    <thead>
							<tr>
								<th>File ID</th>
								<th>User ID</th>
								<th>File Name</th>
								<th>Upload Date</th>
								<th>Last Modified</th>
							</tr>
							</thead>
							    <tfoot>
						    	<tr>
						        	<td colspan="5"><em>File Count: <?php echo count($files_info); ?></em></td>
						        </tr>
						    </tfoot>
							<tbody>
								<?php foreach($files_info as $row): ?>
								<tr>
									<td><?php echo $row->f_id; ?></td>
									<td><?php echo $row->u_id; ?></td>
									<td><?php echo $row->f_name; ?></td>
									<td><?php echo $row->f_upload_date; ?></td>
									<td><?php echo $row->f_last_modified; ?></td>
								</tr>
							  	<?php endforeach; ?>
							</tbody>
						</table>

					</div>  <!-- end div body -->

					<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
				</div>  <!-- end div container -->
				


			
		
		</div> <!-- end div content -->
	</div>  <!-- end div wrapper -->

</div>  <!-- end div belowNavWrapper -->


</body>
</html>
