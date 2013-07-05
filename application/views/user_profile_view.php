<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<title>User Profile View</title>

	<link href="<?php echo base_url(); ?>assets/css/style.css" rel='stylesheet' type='text/css'>

	<link href="<?php echo base_url(); ?>assets/css/main_page_layout.css" rel='stylesheet' type='text/css'>

	<link href="<?php echo base_url(); ?>assets/css/sidebarStyle.css" rel='stylesheet' type='text/css'>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>
	
	
	
	<script>

		$(function() {

			//hiding all the positions when the page loads. 
			$("div.toggler").hide();

			//setting the default button text
			$("#editProfileButton").text('Edit');

			// call the effect when view all positions is clicked
			$( "#editProfileButton" ).click(function() {
				
				var temp = $("#editProfileButton").text();
				
				if (temp == "Edit") {
					$("#editProfileButton").text('Done Editing');
				} else {
					//when the Done Editing button is clicked again, the button text
					//is changed back to edit. 
					$("#editProfileButton").text('Edit');
				}
				
				//run the effect
		 		$("div.toggler").toggle();

		    return false;

		  });
		
		  $("#resetPB").click(function() {
		
				var username = $("input#pro_username").val();
				var newPass = $("input#pro_password").val();
				var confirmPass = $("input#pro_confirm_password").val();
		
				var holder = 'username=' +  username + '&newPass=' + newPass + '&confirmPass=' + confirmPass;
		
				$.ajax({		
					   url: 'http://localhost/~youngbuck14188/UML_Gen/index.php/dashboard/change_password',
				            data: holder,
				            type:'POST',
							dataType: 'text',
				            success : function(data){                
				            	console.log("successfully ajax call : " + data);			               
							},
							error: function (XHR, status, response) {
						        alert('fail');
						    }
				});
			
		});
		
		

		});
		
		function save_profile_changes() {
			alert("Save Changes button was pressed");
		}
		
		// function reset_password() {
		// 	
		// 	var username = $("input#pro_username").val();
		// 	var newPass = $("input#pro_password").val();
		// 	var confirmPass = $("input#pro_confirm_password").val();
		// 	
		// 	var holder = {username: username, pass: newPass, confirmPass: confirmPass};
		// 	
		// 	$.ajax({		
		// 		   url: '<?php echo base_url();?>index.php/dashboard/change_password',
		// 	            data: holder,
		// 	            type:'POST',
		// 				dataType: 'json',
		// 				cache: false,
		// 	            success : function(){                
		// 	            	alert("YOLO");			               
		// 			}
		// 			
		// 	});
		// }

	</script>

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
	
	
	/*profile editing css*/
	#edit-profile-card {
		background-color: white;
		width: 646px;
		padding-bottom: 20px;
		border: 1px dashed black;
		margin-left: 190px;
	}
	
	fieldset.profile {
		width: 450px;
		border: 1px solid #CCCCCC;
		border-radius: 12px;
		/*padding: 16px 15px 15px 15px;*/
		/*margin: -6px 0 0 0;*/
		background: url(http://localhost/~youngbuck14188/UML_Gen/assets/img/back.png);
		padding-left: 40px;
		margin-left: 50px;
	}
	
	.edit_p {
	width: 260px;
	}
	
	.tb_pad_left {
		padding-left: 12px;
		padding-top: 8px;
	}
	
	.change_pass tr {
		
	}
	
	input.txt, textarea {
		border-radius: 5px;
		-webkit-border-radius: 5px;
		-moz-border-radius: 5px;
		border: 1px solid #999;
		background: #ffffff;
		padding: 5px 2px;
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
		                    <button class="button" id="editProfileButton">Edit</button>
		                </div><!-- end div member-connections -->
		            </div><!-- end div profile-aux -->
		        </div><!-- end div profile-overview -->
		    </div><!-- end div profile-card -->		
		

			<br/><br/>

			<div class="toggler">
			<div id="edit-profile-card">
			<!-- <form> -->
				<fieldset class="profile">
					<legend><h3>Change Password</h3></legend>
						<table id="change_pass">
							<tr>
								<td>Username</td>
								<td class="tb_pad_left">
									<input class="edit_p txt" id="pro_username" type="text" name="profile_username">
								</td>
							</tr>
							<tr>
								<td>New Password</td>
								<td class="tb_pad_left">
									<input class="edit_p txt" id="pro_password" type="text" name="profile_password">
								</td>
							</tr>
							<tr>
								<td>Confirm</td>
								<td class="tb_pad_left">
									<input class="edit_p txt" id="pro_confirm_password" type="text" name="confirm_profile_password">
								</td>
							</tr>
						</table>
						<button class="button" id="resetPB">Reset Password</button>
				</fieldset>
			<!-- </form> -->

			<br/>
			<hr>

			<!-- <form> -->
				<fieldset class="profile">
					<legend><h3>Your Information</h3></legend>
						<table id="change_pass">
							<tr>
								<td>Name</td>
								<td class="tb_pad_left">
									<input class="edit_p txt" type="text" name="profile_name" value="<?php echo $user_info->u_name; ?>">
								</td>
							</tr>
							<tr>
								<td>Email</td>
								<td class="tb_pad_left">
									<input class="edit_p txt" type="text" name="profile_email" value="<?php echo $user_info->u_email; ?>">
								</td>
							</tr>
							<tr>
								<td>Address</td>
								<td class="tb_pad_left">
									<input class="edit_p txt" type="text" name="profile_address" value="<?php echo $user_info->u_address; ?>">
								</td>
							</tr>
							<tr>
								<td>City</td>
								<td class="tb_pad_left">
									<input class="edit_p txt" type="text" name="profile_city" value="<?php echo $user_info->u_city; ?>">
								</td>
							</tr>
							<tr>
								<td>State</td>
								<td class="tb_pad_left">
									<input class="edit_p txt" type="text" name="profile_state" value="<?php echo $user_info->u_state; ?>">
								</td>
							</tr>
							<tr>
								<td>Zip</td>
								<td class="tb_pad_left">
									<input class="edit_p txt" type="text" name="profile_zip" value="<?php echo $user_info->u_zip; ?>">
								</td>
							</tr>

						</table>
						<button class="button" onclick="save_profile_changes();">Save Changes</button>
				</fieldset>
			<!-- </form> -->

			</div>  <!-- end div edit-profile-card -->


			</div>  <!-- end div toggler -->

				

			
		</div> <!-- end div content -->
	</div>  <!-- end div wrapper -->

</div>  <!-- end div belowNavWrapper -->


</body>
</html>
