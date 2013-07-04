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
		<div style="margin-left: 30px; width: 300px;">
			<h3 style="color: white; font-size: 21px; font-weight: bold;">UML_Gen</h3>
		</div>
		<div style="position:absolute; top: 16px; right: 40px;">
		    <img src="<? echo base_url(); ?>assets/img/top_right_bigger.png" border="0" usemap="#Map">
			<p style="position:absolute; left: 47px; top: 1px;">Username: <?php echo $this->session->userdata('username'); ?></p>
			<map name="Map">
		      <area shape="rect" coords="10,4,41,35" href="#" alt="user profile link">
		      <area shape="rect" coords="210,5,240,36" href="<?php echo base_url(); ?>" alt="logout button">
		    </map>
		</div>
	</div>  <!-- end div main-nav -->

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
				<th>State</th>
				<th>Zip</th>
				<th>Email</th>
				<th>User Type</th>
			</tr>
			  <?php foreach($user_info as $row): ?>
				<tr>
					<td><?php echo $row->u_id; ?></td>
					<td><?php echo $row->u_username; ?></td>
					<td><?php echo $row->u_name; ?></td>
					<td><?php echo $row->u_address; ?></td>
					<td><?php echo $row->u_city; ?></td>
					<td><?php echo $row->u_state; ?></td>
					<td><?php echo $row->u_zip; ?></td>
					<td><?php echo $row->u_email; ?></td>
					<td><?php echo $row->user_type; ?></td>
				</tr>
			  <?php endforeach; ?>
			
		</table>
		
<!-- link that takes the user back to the welcome_message view page -->
<p><?php echo anchor('welcome', 'Return to the Home Page.'); ?></p>

	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>

</div> <!-- end of outerWrapper div -->

</body>
</html>

  