<!-- start: header section -->
<?php include('common/header.php'); ?>	
<!-- end: header section	 -->

<div class="row-fluid">
	<div class="box">
		<div class="box-head tabs">
			<h3>Detailed File View</h3>
		</div>  <!-- end div box-head tabs -->
		<div class="box-content box-nomargin">
			Detailed FIle View
			<?php echo $selected_file_id; ?>	
				<br/>
				<div class="box-content">
				<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
				</div>  <!-- end div box-content -->
		</div>  <!-- end div box-content box-nomargin -->
	</div>  <!-- end div box -->
</div>  <!-- end div row-fluid -->


<!-- start: footer section -->
	<?php include('common/footer.php'); ?>
<!-- end: footer section -->