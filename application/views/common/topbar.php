<div class="topbar">
	<div class="container-fluid">
		
		<?php if ($title != 'Login') { ?>
			<a href="<?php echo base_url();?>index.php/dashboard/" class='company'>UML_Gen</a>
		<?php } else { ?>
			<a href="#" class='company'>UML_Gen</a>	
		<?php } ?>

		<?php if ($title != 'Login') { ?>
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
<?php if ($title != 'Login') { ?>
<div class="breadcrumbs">
	<div class="container-fluid">
		<ul class="bread pull-left">
			<li>
				<a href="dashboard.html"><i class="icon-home icon-white"></i></a>
			</li>
			<li>
				<a href="dashboard.html">
					Dashboard
				</a>
			</li>
		</ul>
	</div>  <!-- end div container-fluid -->
</div>  <!-- end div breadcrumbs -->
<?php } ?>