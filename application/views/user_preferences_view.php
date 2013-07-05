<!DOCTYPE html>
<html lang="en">
<head>
	
	<meta charset="utf-8">
	<title>User Preferences</title>

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
	<?php 
		$background = "white";
		$panelBackground = "black";
		$textColor = "black";

	?>

	<div id="outerWrapper">


	<div id="container" style="min-width: 960px;">

			<h1 style="background: #0567ad; color: white; font-size: 21px; font-weight: bold;">User Preferences</h1>
		<div id "body">
			<div align="center">
		<?php echo form_open_multipart('dashboard/update_user_preferences');?>

			<table>
			<tr>
				<th>Name</th>
				<th>Current Color</th>
				<th>Select a Color</th>
			</tr>
			<tr>
				<td>Set Background Color</td>
				<td><?php echo $background ?></td>
				<td><input type="text" name="backgroundColor" id="backgroundColor" /></td>
			</tr>
			<tr>
				<td>Panel Background</td>
				<td><?php echo $panelBackground ?></td>
				<td><input type="text" name="panelColor" id="panelColor" /></td>
			</tr>
			<tr>
				<td>Header Color</td>
				<td><?php echo $textColor ?></td>
				<td><input type="text" name="headerColor" id="headerColor" /></td>
			</tr>
				<tr>
     			<td></td>
     			<td></td>
     			<td> <input class="button" type="submit" value="Update"> </td>
  			</tr>

			</table>	
		</form>


	</div>  <!-- end div container -->
		
		
		<!-- </div> -->
			<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
			</div>
		</div> <!-- end div content -->
	</div>  <!-- end div wrapper -->
</div>  <!-- end div belowNavWrapper -->


</body>
</html>