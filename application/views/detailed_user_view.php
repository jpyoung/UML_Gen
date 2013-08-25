<!-- start: header section -->
<?php include('common/header.php'); ?>	
<!-- end: header section	 -->

<div class="row-fluid">
	<div class="span6">
		<div class="box">
			<div class="box-head">
				<h3>User's Information'</h3>
			</div>
			<div class="box-content">
				
					<table class="table table-striped table-detail">
								<tr>
									<th>U_ID: </th>
									<td><?php echo $user_info->u_id; ?></td>
								</tr>
								<tr>
									<th>Username:</th>
									<td><?php echo $user_info->u_username; ?></td>
								</tr>
								<tr>
									<th>Password:</th>
									<td><?php echo $user_info->u_password;?></td>
								</tr>
								<tr>
									<th>Name:</th>
									<td><?php echo $user_info->u_name; ?></td>
								</tr>
								<tr>
									<th>Address:</th>
									<td><?php echo $user_info->u_address; ?></td>
								</tr>
								<tr>
									<th>City:</th>
									<td><?php echo $user_info->u_city; ?></td>
								</tr>
								<tr>
									<th>State:</th>
									<td><?php echo $user_info->u_state; ?></td>
								</tr>
								<tr>
									<th>Email:</th>
									<td><?php echo $user_info->u_email; ?></td>
								</tr>
								<tr>
									<th>User Type</th>
									<td>
										<?php echo $user_info->user_type; ?>
									</td>
								</tr>
							
							</table>
				
			</div>  <!-- end div box-content	 -->
		</div>  <!-- end box div -->
	</div>  <!-- end span div -->
</div>  <!-- end row-fluid div -->


<div class="row-fluid">
	<div class="span9">
		<div class="box">
			<div class="box-head">
				<h3>Uploaded Files</h3>
			</div>
			
				<?php if ($user_files != ''): ?>
					<table class="table table-striped table-bordered">
							<thead>
								<tr>
									<th>File ID</th>
									<th>User ID</th>
									<th>File Name</th>
									<th>Upload Date</th>
									<th>Last Modified</th>
								</tr>
							</thead>
							<tbody>
									<?php foreach($user_files as $row): ?>
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
					<?php else:?>
						<h3>Did not find any files associated to this user.</h3>
					<?php endif; ?>
					
			<div class="box-content">
			<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
			</div>  <!-- end div box-content -->
		</div>  <!-- end box div -->
	</div>  <!-- end span div -->
</div>  <!-- end row-fluid div -->


<div class="row-fluid">
	<div class="span9">
		<div class="box">
			<div class="box-head">
				<h3>Account Activity</h3>
			</div>
				<?php if ($account_activity != ''): ?>
					<table class="table table-striped table-bordered">
							<thead>
								<tr>
									<th>ID</th>
									<th>Username</th>
									<th>Activity Type</th>
									<th>Time Stamp</th>
								</tr>
							</thead>
							<tbody>
									<?php foreach($account_activity as $row): ?>
									<tr>
										<td><?php echo $row->id; ?></td>
										<td><?php echo $row->username; ?></td>
										<td><?php echo $row->activity_type; ?></td>
										<td><?php echo $row->date; ?></td>
									</tr>
								  	<?php endforeach; ?>
							</tbody>
					</table>
					<?php else:?>
						<h3>Did not find any Account Activity associated to this user.</h3>
					<?php endif; ?>
					
			<div class="box-content">
			<p class="footer">Number of Results: <strong><?php echo count($account_activity); ?></strong></p>
			</div>  <!-- end div box-content -->
		</div>  <!-- end box div -->
	</div>  <!-- end span div -->
</div>  <!-- end div row-fluid -->

<!-- start: footer section -->
	<?php include('common/footer.php'); ?>
<!-- end: footer section -->
		
	
		
