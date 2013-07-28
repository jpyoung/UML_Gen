<!-- start: header section -->
<?php include('common/header.php'); ?>	
<!-- end: header section	 -->

<div class="row-fluid">
	<div class="span5 offset3">
		<div class="box">
			<div class="box-head">
				<h3>User's Preferences</h3>
			</div>
			<div class="box-content">
				
				<?php 
					$background = "white";
					$panelBackground = "black";
					$textColor = "black";

				?>


					<?php echo form_open_multipart('dashboard/update_user_preferences');?>

						<table>
						<tr>
							<th>Name</th>
							<th>Current Color</th>
							<th>Select a Color</th>
						</tr>
						<tr>
							<td>Set Background Color</td>
							<td><?php echo $background ?></td>
							<td><input type="text" name="backgroundColor" id="backgroundColor" /></td>
						</tr>
						<tr>
							<td>Panel Background</td>
							<td><?php echo $panelBackground ?></td>
							<td><input type="text" name="panelColor" id="panelColor" /></td>
						</tr>
						<tr>
							<td>Header Color</td>
							<td><?php echo $textColor ?></td>
							<td><input type="text" name="headerColor" id="headerColor" /></td>
						</tr>
							<tr>
			     			<td></td>
			     			<td></td>
			     			<td> <input class="button" type="submit" value="Update"> </td>
			  			</tr>

						</table>	
					</form>
				
			</div>  <!-- end div box-content	 -->
		</div>  <!-- end box div -->
	</div>  <!-- end span div -->
</div>  <!-- end row-fluid div -->





<!-- start: footer section -->
	<?php include('common/footer.php'); ?>
<!-- end: footer section -->
