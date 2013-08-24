<!-- start: header section -->
<?php include('common/header.php'); ?>	
<!-- end: header section	 -->

<div class="row-fluid">
	<div class="box">
		<div class="box-head tabs">
			<h3>Detailed File View</h3>
		</div>  <!-- end div box-head tabs -->
		<div class="box-content box-nomargin">

				<table class='table table-striped dataTable dataTable-noheader dataTable-nofooter table-bordered'>
					<thead>
						<tr>
							<th>File ID</th>
							<th>User ID</th>
							<th>File Name</th>
							<th>Upload Date</th>
							<th>Last Modified</th>
							<th>Line Count</th>
						</tr>
					</thead>
					<tbody>
						
						<tr>
							<td><?php echo $file->f_id; ?></td>
							<td><?php echo $file->u_id; ?></td>
							<td><?php echo $file->f_name; ?></td>
							<td><?php echo $file->f_upload_date; ?></td>
							<td><?php echo $file->f_last_modified; ?></td>
							<td><?php echo count($file_read_in); ?></td>
						</tr>
					  	
					</tbody>
					</table>
					
				<div class="table_border_top"></div>
				
				<div class="box-content">
				<p>File Contents - source code</p>
						<?php
						echo "<pre>";
						for ($x = 0; $x < count($file_read_in); $x++) {
							echo $file_read_in[$x] . "<br/>";
						}
						echo "</pre>";
						?>
				</div>			
				
				<div class="box-content">
				<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
				</div>  <!-- end div box-content -->
		</div>  <!-- end div box-content box-nomargin -->
	</div>  <!-- end div box -->
</div>  <!-- end div row-fluid -->


<!-- start: footer section -->
	<?php include('common/footer.php'); ?>
<!-- end: footer section -->