<!-- start: header section -->
<?php include('common/header.php'); ?>	
<!-- end: header section	 -->


<div class="row-fluid">
	<div class="span9">
		<div class="box">
			<div class="box-head">
				<h3>File Uploader</h3>
			</div>
			<div class="box-content">
				
					<p>This is the site where you can upload your .java files and have a UML class diagram generated for you.</p>
					<p>We know it can be a hassle to create a UML class diagram. That's why we created this generator for you to use!</p> 
					<!-- This is the form to upload a file. -->

					<?php echo form_open_multipart('upload/do_upload');?>

						Please choose a file: <input type="file" name="userfile" size="20" />
						<input type="submit" value="upload" />

			 		</form>
				
				
					<h2>Paste in your existing Java file.</h2><br />
					<textarea rows="4" cols="50">
					Insert your text here...
					</textarea> <br />
					<!--  Generate Button -->
					<input type="submit" value="Generate" /> <br /><hr />
				
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
									<?php foreach($files_info as $row): ?>
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
			<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
		</div>  <!-- end box div -->
	</div>  <!-- end span div -->
</div>  <!-- end row-fluid div -->

</div>
</div>


<!-- start: footer section -->
	<?php include('common/footer.php'); ?>
<!-- end: footer section -->