<!DOCTYPE html>
<head>
	<title>User Preferences</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css" />

</head>
<body>
	<?php 
		$background = "white";
		$panelBackground = "black";
		$textColor = "black";

	?>

	<div class="main-nav">
			<h3 style="margin-left: 30px; color: white; font-size: 21px; font-weight: bold;">User Preferences</h3>
		</div>

	<div style="float-right">
	</div>

	<div id="container">
			<h1 style="background: #0567ad; color: white; font-size: 21px; font-weight: bold;">User Preferences</h1>
		<div id "body">
			<div align="center">
		<?php echo form_open_multipart('welcome/update_user_preferences');?>

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


	</div>
		</div>
			<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
			</div>
</body>

</html>