<!-- start: header section -->
<?php include('common/header.php'); ?>	
<!-- end: header section	 -->
	
	
	<div class="row-fluid">
		<div class="box">
			<div class="box-head tabs">
				<h3>Uploaded Files</h3>
			</div>  <!-- end div box-head tabs -->
			<div class="box-content box-nomargin">
					<br/>
					<?php
					 	$path = getcwd() . "/uploaded_files/";
						echo "<p style='padding-left: 45px;'><b>Upload Directory Path:</b> " . $path . "</p>";
					?>
				<table class='table table-striped dataTable dataTable-noheader dataTable-nofooter table-bordered'>
					<thead>
						<tr>
							<th>File ID</th>
							<th>User ID</th>
							<th>File Name</th>
							<th>Upload Date</th>
							<th>Last Modified</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($files_info as $row): ?>
						<tr>
							<td><?php echo $row->f_id; ?></td>
							<td><?php echo $row->u_id; ?></td>
							<td><?php echo $row->f_name; ?></td>
							<td><?php echo $row->f_upload_date; ?></td>
							<td><?php echo $row->f_last_modified; ?></td>
							<td>
								<?php 
								$attributes = array('style' => 'margin: 0px;');
								echo form_open('dashboard/goto_detailed_diagrams/' . $row->f_id, $attributes);
								?>

								<input style="margin-left: 15px; margin-right: 15px;" type="submit" value="Generate UML <?php echo $row->f_id; ?>">

								</form>

							</td>
						</tr>
					  	<?php endforeach; ?>
					</tbody>
					</table>
					
					<br/>
					<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
					
			</div>  <!-- end div box-content box-nomargin -->
		</div>  <!-- end div box -->
	</div>  <!-- end div row-fluid -->
				


				


</div>
</div>
	<script src="<?php echo base_url(); ?>/theme/js/jquery.js"></script>
	<script src="<?php echo base_url(); ?>/theme/js/less.js"></script>
	<script src="<?php echo base_url(); ?>/theme/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>/theme/js/jquery.uniform.min.js"></script>
	<script src="<?php echo base_url(); ?>/theme/js/bootstrap.timepicker.js"></script>
	<script src="<?php echo base_url(); ?>/theme/js/bootstrap.datepicker.js"></script>
	<script src="<?php echo base_url(); ?>/theme/js/chosen.jquery.min.js"></script>
	<script src="<?php echo base_url(); ?>/theme/js/jquery.fancybox.js"></script>
	<script src="<?php echo base_url(); ?>/theme/js/plupload/plupload.full.js"></script>
	<script src="<?php echo base_url(); ?>/theme/js/plupload/jquery.plupload.queue/jquery.plupload.queue.js"></script>
	<script src="<?php echo base_url(); ?>/theme/js/jquery.cleditor.min.js"></script>
	<script src="<?php echo base_url(); ?>/theme/js/jquery.inputmask.min.js"></script>
	<script src="<?php echo base_url(); ?>/theme/js/jquery.tagsinput.min.js"></script>
	<script src="<?php echo base_url(); ?>/theme/js/jquery.mousewheel.js"></script>
	<script src="<?php echo base_url(); ?>/theme/js/jquery.dataTables.min.js"></script>
	<script src="<?php echo base_url(); ?>/theme/js/jquery.dataTables.bootstrap.js"></script>
	<script src="<?php echo base_url(); ?>/theme/js/jquery.textareaCounter.plugin.js"></script>
	<script src="<?php echo base_url(); ?>/theme/js/ui.spinner.js"></script>
	<script src="<?php echo base_url(); ?>/theme/js/jquery.cookie.js"></script>
	<script src="<?php echo base_url(); ?>/theme/js/tableTools/js/TableTools.min.js"></script>
	<script src="<?php echo base_url(); ?>/theme/js/custom.js"></script>
	<script src="<?php echo base_url(); ?>/theme/js/demo.js"></script>	

<!-- start: footer section -->
	<?php include('common/footer.php'); ?>
<!-- end: footer section -->