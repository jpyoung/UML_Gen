<!-- start: header section -->
<?php include('common/header.php'); ?>	
<!-- end: header section	 -->





<div class="row-fluid">
	<div class="span6">
		<div class="box">
			<div class="box-head">
				<h3>Source Code</h3>
			</div>
			
			<div class="box-content">
				<p>Selected File: <?php echo $select_file_id; ?> </p>
				<?php
				echo "<pre>";
				for ($x = 0; $x < count($file_read_in); $x++) {
					echo $file_read_in[$x] . "<br/>";
				}
				echo "</pre>";
				?>
			</div>  <!-- end div box-content -->
				
		</div>  <!-- end box div -->
	</div>  <!-- end span div -->
	
	<div class="span6">
		<div class="box">
			<div class="box-head">
				<h3>Generated UML Diagram</h3>
			</div>  <!-- end div box-head -->
			
			<div class="box-content">
					<?php echo $produced_uml_table; ?>
			</div>  <!-- end div box-content -->
				
		</div>  <!-- end box div -->
	</div>  <!-- end span div -->	
</div>  <!-- end row-fluid div -->




<!-- start: footer section -->
	<?php include('common/footer.php'); ?>
<!-- end: footer section -->