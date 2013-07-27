<!-- start: header section -->
<?php include('common/header.php'); ?>	
<!-- end: header section	 -->

<div class="row-fluid">
	<div class="span5 offset3">
		<div class="box">
			<div class="box-head">
				<h3>Login</h3>
			</div>
			<div class="box-content">
				
					<form action="<?php echo base_url(); ?>index.php/login/login_verification" method="post" style="" class="form-horizontal">

						<?php if($warn != '') { ?>
								<div class="msg msg-error">
									<p><strong>Incorrect</strong> username or password. Please try again.</p> 
								</div>
						<?php } if ($message != '') { ?>
				             	<div class="msg msg-error">
									<p>Username or Password are required. Please try again.</p> 
								</div>
				        <?php } ?>

					<div class="control-group">
						<label for="basic" class="control-label">Username:</label>
						<div class="controls">
							<input id="login" class="txt" type="text" name="l_username">
						</div>  <!-- end div controls -->
					</div>  <!-- end div control-group -->
					<div class="control-group">
						<label for="basic" class="control-label">Password:</label>
						<div class="controls">
							<input id="login" class="txt" type="text" name="l_password">
						</div>  <!-- end div controls -->
					</div>  <!-- end div control-group -->
					<div class="submit">
								<?=anchor('login/forgot_password/', 'Forgot password?');?>
								<button type="submit" value="Submit" style="float:right;" class="btn btn-blue5">Login</button>
					</div>
					
					</form>
				
			</div>  <!-- end div box-content	 -->
		</div>  <!-- end box div -->
	</div>  <!-- end span div -->
</div>  <!-- end row-fluid div -->


<!-- start: footer section -->
	<?php include('common/footer.php'); ?>
<!-- end: footer section -->