<!DOCTYPE html>
<html lang="en">
<head>

	
	<meta charset="utf-8">
	<title>Diagrams View</title>

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
		
		
			<div  style="margin-right:40px;" id="containerr">
				<!-- <h1 style="background: #0567ad; color: white; font-size: 21px;">Uploaded Files</h1> -->
				<h1 class="containerHeader">Uploaded Files</h1>

				<div id="body">


					<?php
					 	$path = getcwd() . "/uploaded_files/";
						echo "<p style='padding-left: 45px;'><b>Upload Directory Path:</b> " . $path . "</p>";
					?>

					<!-- <table id="newspaper-b"> -->
						<table border="1">
					    <thead>
						<tr>
							<th>File ID</th>
							<th>User ID</th>
							<th>File Name</th>
							<th>Upload Date</th>
							<th>Last Modified</th>
							<th>Actions</th>
						</tr>
						</thead>
						    <tfoot>
					    	<tr>
					        	<td colspan="6"><em>File Count: <?php echo count($files_info); ?></em></td>
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
								<td>
									<?php echo form_open('dashboard/goto_detailed_diagrams/' . $row->f_id);?>
								
									<input style="margin-left: 15px; margin-right: 15px;" type="submit" value="Generate UML <?php echo $row->f_id; ?>">
									
									</form>
									
									<!-- <img src="<?php echo base_url(); ?>assets/img/glyphicons/png/glyphicons_086_display.png"> -->
								</td>
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