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

</div>

<div id="container">
	<h1>User Management</h1>

	<div id="body">
		
		<p>User Management Page. Authorized users only.</p>
		<!-- <a href="http://localhost/xampp/CodeIgniter/application/views/createuser.php">Create a user</a> -->
		<a href="<?php echo base_url(); ?>/createuser.php">Create a user</a>
		
		<h1>Registered Users</h1>
		
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

	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>



</body>
</html>

  