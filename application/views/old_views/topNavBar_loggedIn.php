<div style="margin-left: 30px; width: 300px;">
	<h3 style="color: white; font-size: 21px; font-weight: bold;"><a style="color: white;" href="<?php echo base_url();?>index.php/dashboard/">UML_Gen</a></h3>
</div>

<div style="position:absolute; top: 16px; right: 40px;">

    <img src="<? echo base_url(); ?>assets/img/top_right_bigger.png" border="0" usemap="#Map">

	<p style="position:absolute; left: 47px; top: 1px;">Username: <?php echo $this->session->userdata('username'); ?></p>
	<map name="Map">
      <area shape="rect" coords="10,4,41,35" href="<?php echo base_url();?>index.php/dashboard/goto_user_profile_view" alt="user profile link">
      <area shape="rect" coords="210,5,240,36" href="<?php echo base_url(); ?>" alt="logout button">
    </map>	
</div>
