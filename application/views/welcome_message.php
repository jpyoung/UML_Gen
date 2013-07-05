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
	
		
		/*the below styles are for the table, same style used on the usermanagement page table*/
		#newspaper-b
		{
			font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
			font-size: 12px;
			margin: 45px;
			/*width: 600px;*/
			text-align: left;
			border-collapse: collapse;
			border: 1px solid #69c;
		}
		#newspaper-b th
		{
			padding: 15px 10px 10px 10px;
			font-weight: normal;
			font-size: 14px;
			color: #039;
		}
		#newspaper-b tbody
		{
			background: #e8edff;
		}
		#newspaper-b td
		{
			padding: 10px;
			color: #669;
			border-top: 1px dashed #fff;
		}
		#newspaper-b tbody tr:hover td
		{
			color: #339;
			background: #d0dafd;
		}
	
		
		
		/*fixing page layout and adding side bar*/
		
		html,body {
			min-height: 100%;
		    
		}
		
		#belowNavWrapper {
			height: 100%;
			/*min-height:100%;*/
		}
		
		#wrapper {
			/*background-color: yellow;*/
			background: #d7d7d7;
		    width: 100%;
		    height: 100%;
		}
		
		#sidebar {
			/*background-color: orange;*/
		    float:left;
		    width:300px;
			height: 100%;
		}
		
		#content {
			/*background-color: blue;*/
			background-color: white;
			
			/*40 px from top nav bar to content box and 300 px(same size as sidebar width) from left.*/
		    margin: 0 0 0 300px;
			padding-top: 10px;
			padding-bottom: 100px;
		}
		
		#containerr{
			background: white;
			margin-top: 10px;
			margin-left: 40px;
			border: 1px solid #D0D0D0;
			-webkit-box-shadow: 0 0 8px #D0D0D0;
		}
		
		#side_buffer_top {
			/*background: aqua;*/
			/*background: url(http://localhost/~youngbuck14188/UML_Gen/assets/img/sidebar.png) left repeat-y;*/
			
			background: #d7d7d7;
			height: 30px;
		}
		
		li {
			line-height: 50px;
			list-style: none;
			border: 1px solid black;
			
			border-radius: 5px;
			-webkit-border-radius: 5px;
			-moz-border-radius: 5px;
			
			margin-bottom: 15px;	
		}
		
		ul, ol {
			padding: 0;
			margin: 5px 10px 20px 25px;
		}
		
		li:hover {
			background-color: #0088cc;    
		}
		
		li a {
			font-size: 15px;
			text-decoration:none;
			color: black;
			padding-left: 15px;
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


<div id="belowNavWrapper">
	<div id="wrapper">
		<div id="sidebar">
			
			<div id="side_buffer_top"></div>
			
			<ul>
				<li><?php echo anchor('welcome/goto_user_management_page', 'User Management'); ?></li>
				<li><?php echo anchor('welcome/goto_user_preferences', 'User Preferences'); ?></li>
			</ul>
			
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