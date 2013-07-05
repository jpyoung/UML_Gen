<!DOCTYPE html>
<html lang="en">
<head>
	
	<meta charset="utf-8">
	<title>Welcome to BuyAnA.com! We will help you solve your programming needs!</title>

	<link href="<?php echo base_url(); ?>assets/css/style.css" rel='stylesheet' type='text/css'>

	<style>


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
		      <area shape="rect" coords="10,4,41,35" href="<?php echo base_url(); ?>index.php/welcome" alt="user profile link">
		      <area shape="rect" coords="210,5,240,36" href="<?php echo base_url(); ?>" alt="logout button">
		    </map>
		</div>
	</div>  <!-- end div main-nav -->

<div id="outerWrapper">

<div style="float:right;">

</div>

<div id="container">
	<h1>Detailed User View</h1>

	<div id="body">
		
		<p>Below provides a detailed view on the selected user from the user management page.</p>
		
		
		
		<table border="1">
			<tr>
				<th>u_id</th>
				<th>u_username</th>
				<th>u_password</th>
				<th>u_name</th>
				<th>u_address</th>
				<th>u_city</th>
				<th>u_state</th>
				<th>u_zip</th>
				<th>u_email</th>
				<th>user_type</th>
			</tr>
			<tr>
				<td><?php echo $user_info->u_id; ?></td>
				<td><?php echo $user_info->u_username; ?></td>
				<td><?php echo $user_info->u_password; ?></td>
				<td><?php echo $user_info->u_name; ?></td>
				<td><?php echo $user_info->u_address; ?></td>
				<td><?php echo $user_info->u_city; ?></td>
				<td><?php echo $user_info->u_state; ?></td>
				<td><?php echo $user_info->u_zip; ?></td>
				<td><?php echo $user_info->u_email; ?></td>
				<td><?php echo $user_info->user_type; ?></td>
			</tr>
		</table>
		
		<br/><hr><br/>
		<p>Files that were uploaded by this individual user</p>	
		
		
		<?php if ($user_files != ''): ?>
		<table border="1">
			<tr>
					<th>File ID</th>
					<th>User ID</th>
					<th>File Name</th>
					<th>Upload Date</th>
					<th>Last Modified</th>
			</tr>	
			<?php foreach($user_files as $row): ?>
			<tr>
				<td><?php echo $row->f_id; ?></td>
				<td><?php echo $row->u_id; ?></td>
				<td><?php echo $row->f_name; ?></td>
				<td><?php echo $row->f_upload_date; ?></td>
				<td><?php echo $row->f_last_modified; ?></td>
			</tr>
		  	<?php endforeach; ?>
		</table>
		<?php else:?>
			<h3>Did not find any files associated to this user.</h3>
		<?php endif; ?>
		
		<br/>
<!-- link that takes the user back to the welcome_message view page -->
<p><?php echo anchor('welcome/goto_user_management_page', 'Return to the Home Page.'); ?></p>

	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>

</div> <!-- end of outerWrapper div -->

</body>
</html>