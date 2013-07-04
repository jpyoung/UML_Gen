<!DOCTYPE html>
<html lang="en">
<head>
	
	<meta charset="utf-8">
	<title>Welcome to BuyAnA.com! We will help you solve your programming needs!</title>

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

</div>

<div id="container">
	<h1>User Management</h1>

	<div id="body">
		
		<p>User Management Page. Authorized users only.</p>
		
		<!-- link that takes the user the create a new user page form page -->
		<p><?php echo anchor('welcome/create_new_user', 'Create New User'); ?></p>
		
	
	
		<h1>Registered Users</h1>
		
		
		<table border="1">
			<tr>
				<th>User id</th>
				<th>Username</th>
				<th>Name</th>
				<th>Address</th>
				<th>City</th>
				<th>S</th>
				<th>User id</th>
			</tr>
		</table>
		
		<?php

// usermanagement.php - The purpose of this file is to efficiently add, delete, and view different users to and from the database called UML_Gen

// Displays users in a table
		
		

	echo "<table border='1'>";
	echo "<tr><th>User id</th><th>Username</th><th>Name</th><th>Address</th><th>City</th><th>S</th><th>User id</th></tr>";
	foreach ($user_info->result() as $row)
	{
		echo "<tr>";
		echo "<td>" . $row->u_id . "</td>";
		echo "<td>" . $row->u_username . "</td>";
		echo "<td>" . $row->u_name . "</td>";
		echo "<td>" . $row->u_address . "</td>";
		echo "<td>" . $row->u_city . "</td>";
		echo "<td>" . $row->u_state . "</td>";
		echo "<td>" . $row->u_zip . "</td>";
		echo "</tr>";
	
	}
	echo "</table>";


?> 


<!-- link that takes the user back to the welcome_message view page -->
<p><?php echo anchor('welcome', 'Return to the Home Page.'); ?></p>

	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>

</div> <!-- end of outerWrapper div -->

</body>
</html>

  