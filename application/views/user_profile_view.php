<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<title>User Profile View</title>

	<link href="<?php echo base_url(); ?>assets/css/style.css" rel='stylesheet' type='text/css'>

	<link href="<?php echo base_url(); ?>assets/css/main_page_layout.css" rel='stylesheet' type='text/css'>

	<link href="<?php echo base_url(); ?>assets/css/sidebarStyle.css" rel='stylesheet' type='text/css'>

	<style>
	
	.profile-card {
		margin-left: 190px;
		margin-top: 40px;
		background-color: white;
		width: 646px;
		height: 325px;
		border: 1px dashed black;
	}
	
	.profile-card .profile-picture {
		position: relative;
		z-index: 1;
		background: #f4f4f4;
		float: left;
		width: 200px;
		height: 200px;
		line-height: 199px;
		text-align: center;
		margin-top: 20px;
		margin-bottom: 20px;
		overflow: hidden;
	}
	
	.profile-card .profile-overview {
		position: relative;
		z-index: 5;
		float: right;
		width: 405px;
		word-wrap: break-word;
		padding-left: 20px;
		padding-right: 20px;
		padding-top: 0px;
		padding-bottom: 20px;
	}
	
	.profile-card .profile-overview-content {
		min-height: 149px;
		height: auto;
		_height: 149px;
		padding-top: 20px;
		padding-bottom: 15px;
	}
	
	.profile-card h1 {
		font-size: 24px;
		font-weight: bold;
		line-height: 26px;
		color: #000;
	}
	
	
	/*table styling*/
	.profile-card th {	
		color: #999;
		vertical-align: top;
		padding: 4px 20px 0 0;
		white-space: nowrap;
	}
	
	#profile-table th, td {
		text-align: left;
		font-weight: normal;
		vertical-align: middle;
	}
	
	.button {
		border: 1px solid #00487a;
		-moz-border-radius: 5px;
		text-align: center;
		-webkit-border-radius: 5px;
		border-radius: 5px;
		background: #0567ad;
		padding: 8px 9px 8px;
		text-shadow: #00487a 1px 1px 0;
		color: #fff;
		cursor: pointer;
	}
	
	.member-connections {
		font-size: 11px;
		color: #999;
		float: right;
		padding: 7px 0 0 10px;
		line-height: 15px;
		vertical-align: bottom;
		text-align: right;
	}
	
	</style>


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

		    <div class="profile-card">
		        <div class="profile-picture">
					<img height="200px" src="<?php echo base_url();?>assets/img/ProfilePlaceholder.png" width="200px">
				</div><!-- end div profile-picture -->

		        <div class="profile-overview">
		            <div class="profile-overview-content">
		                <h1><?php echo $user_info->u_name; ?></h1>

		                <table id="profile-table">
		                    <tr>
		                        <th>username</th>

		                        <td><?php echo $user_info->u_username; ?></td>
		                    </tr>

		                    <tr>
		                        <th>password</th>

		                        <td><?php echo $user_info->u_password; ?></td>
		                    </tr>

		                    <tr>
		                        <th>email</th>

		                        <td><?php echo $user_info->u_email; ?></td>
		                    </tr>

		                    <tr>
		                        <th>Address</th>

		                        <td><?php echo $user_info->u_address; ?></td>
		                    </tr>

		                    <tr>
		                        <th>City</th>

		                        <td><?php echo $user_info->u_city; ?></td>
		                    </tr>

		                    <tr>
		                        <th>State</th>

		                        <td><?php echo $user_info->u_state; ?></td>
		                    </tr>

		                    <tr>
		                        <th>Zip</th>

		                        <td><?php echo $user_info->u_zip; ?></td>
		                    </tr>
		                </table>
		            </div><!-- end div profile-overview-content -->

		            <div class="profile-aux">
		                <div class="member-connections">
		                    <button class="button">Edit</button>
		                </div><!-- end div member-connections -->
		            </div><!-- end div profile-aux -->
		        </div><!-- end div profile-overview -->
		    </div><!-- end div profile-card -->		
		


				

			
		</div> <!-- end div content -->
	</div>  <!-- end div wrapper -->

</div>  <!-- end div belowNavWrapper -->


</body>
</html>
