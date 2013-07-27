<!-- start: header section -->
<?php include('common/header.php'); ?>	
<!-- end: header section	 -->


		
	<div class="row-fluid">
			<div class="box">
				<div class="box-head tabs">
					<h3>User Management</h3>
				</div>
				<div class="box-content box-nomargin">
					<table class='table table-striped dataTable dataTable-noheader dataTable-nofooter table-bordered'>
						<thead>
							<tr>
								<th>User ID</th>
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
				
				<div class="dataTables_info" id="DataTables_Table_3_info">Result Count: <?php echo count($user_info); ?></div>
				</div>
				
			</div>
			
	</div>	


	
<!-- start: footer section -->
	<?php include('common/footer.php'); ?>
<!-- end: footer section -->
			 
	
  