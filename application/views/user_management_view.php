<!DOCTYPE html>
<html lang="en">
<head>
	
	<meta charset="utf-8">
	<title>User Management View</title>

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

<div id="outerWrapper">


<div id="container" style="min-width: 960px;">
	<h1>User Management</h1>

	<div id="body">
	
		<form method="post" action="<?php echo base_url();?>index.php/dashboard/create_new_user" >
			<button href="#" class="button">Create New User</button>       
		</form>
		
	
		<h1>Registered Users</h1>
		
		
		<table id="newspaper-b">
		    <thead>
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
			</thead>
			    <tfoot>
		    	<tr>
		        	<td colspan="9"><em>Above are all the users in the DB.</em></td>
		        </tr>
		    </tfoot>
			<tbody>
			  <?php foreach($user_info as $row): ?>
				<tr>
					<td><?php echo $row->u_id; ?></td>
					<td><?php echo anchor('dashboard/goto_detailed_user_view/' . $row->u_id , $row->u_username)?></td>
					<td><?php echo $row->u_name; ?></td>
					<td><?php echo $row->u_address; ?></td>
					<td><?php echo $row->u_city; ?></td>
					<td><?php echo $row->u_state; ?></td>
					<td><?php echo $row->u_zip; ?></td>
					<td><?php echo $row->u_email; ?></td>
					<td><?php echo $row->user_type; ?></td>
				</tr>
			  <?php endforeach; ?>
			</tbody>
		</table>
		


	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>

		</div> <!-- end div content -->
	</div>  <!-- end div wrapper -->
</div>  <!-- end div belowNavWrapper -->


</body>
</html>
  