<div class="topbar">
	<div class="container-fluid">
		
		<?php if ($title != 'Login' && $title != 'Forgot Password') { ?>
			<a href="<?php echo base_url();?>index.php/dashboard/" class='company'>UML_Gen</a>
		<?php } else { ?>
			<?php if ($title == 'Forgot Password') { ?>
				<a href="<?php echo base_url();?>" class='company'>UML_Gen</a>	
			<?php } else { ?>
				<a href="#" class='company'>UML_Gen</a>	
			<?php } ?>
		<?php } ?>

		<?php if ($title != 'Login' && $title != 'Forgot Password') { ?>
		<ul class='mini'>
			<li>
				<a href="<?php echo base_url();?>index.php/dashboard/goto_user_profile_view">
					<img src="<?php echo base_url(); ?>/theme/img/icons/fugue/gear.png" alt="">
					Profile Settings
				</a>
			</li>
			<li>
				<a href="<?php echo base_url(); ?>">
					<img src="<?php echo base_url(); ?>/theme/img/icons/fugue/control-power.png" alt="">
					Logout
				</a>
			</li>
		</ul>
		<?php } ?>
		
	</div>
</div>
<?php if ($title != 'Login' && $title != 'Forgot Password') { ?>
<div class="breadcrumbs">
	<div class="container-fluid">
		<ul class="bread pull-left">
			<li>
				<a href="dashboard.html"><i class="icon-home icon-white"></i></a>
			</li>
			<li>
				<a href="<?php echo base_url(); ?>index.php/dashboard">
					Dashboard
				</a>
			</li>
			<?php
				if ( isset($bread_crumb) ) {
					if ( count($bread_crumb) > 0 ) {
						for ( $x = 0; $x < count($bread_crumb); $x++ ) {
							echo '<li><a href="' . base_url() . 'index.php/dashboard/' . $bread_crumb[$x][1] . '">' . $bread_crumb[$x][0] . '</a></li>';
						}
					}
					//echo '<li><a href="dashboard.html">Yes</a></li>';
				} else {
					echo '<li><a href="dashboard.html">No</a></li>';
				}
			?>
		</ul>
	</div>  <!-- end div container-fluid -->
</div>  <!-- end div breadcrumbs -->
<?php } ?>