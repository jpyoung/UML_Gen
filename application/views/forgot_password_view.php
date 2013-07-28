<!-- start: header section -->
<?php include('common/header.php'); ?>	
<!-- end: header section	 -->

<div class="row-fluid">
	<div class="span5 offset3">
		<div class="box">
			<div class="box-head">
				<h3>Forgot Password</h3>
			</div>
			<div class="box-content">
				<form action="<?php echo base_url(); ?>index.php/login/lookup_password" method="post" class="form-horizontal">

					<div class="control-group">
						<label for="basic" class="control-label">Username or Email: </label>
						<div class="controls">
							<input id="login" class="txt" type="text" name="forgot_entertext">
						</div>  <!-- end div controls -->
					</div>  <!-- end div control-group -->
			
					<?php
					$logged_in = 0;

					if ($return_result != null)
					{
						// if ($return_result) {
							$stringbb = $return_result->u_password;

							echo "<strong>The password is: " .  $stringbb . "</strong><br /><br />";
					} 

					if ($is_error == true) {
						echo "<p>" . $forgot_error_message . "</p>";
					}

					?>
					
					<button type="submit" value="Lookup" style="float:right;" class="btn btn-blue5">Lookup</button>
					
				</form>
			
				
			</div>  <!-- end div box-content	 -->
		</div>  <!-- end box div -->
	</div>  <!-- end span div -->
</div>  <!-- end row-fluid div -->


<!-- start: footer section -->
	<?php include('common/footer.php'); ?>
<!-- end: footer section -->






