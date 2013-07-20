<!DOCTYPE html>
<html lang="en">
<head>
	<title>Detailed Diagrams</title>

	<link href="<?php echo base_url(); ?>assets/css/style.css" rel='stylesheet' type='text/css'>

	<link href="<?php echo base_url(); ?>assets/css/main_page_layout.css" rel='stylesheet' type='text/css'>

	<link href="<?php echo base_url(); ?>assets/css/sidebarStyle.css" rel='stylesheet' type='text/css'>

</head>
<body>

	<div class="main-nav">
		<!-- loading the partial topNavBar_loggedIn view -->
		<?php include('common/topNavBar_loggedIn.php'); ?>
	</div>  <!-- end div main-nav -->

	
<h3>UML Generate View</h3>


<div style="background-color: blue; width: 400px;">
	<pre>
public class diagram {
	
}
	</pre>
</div>


<?php

echo "<p> The File ID is: " . $select_file_id . "</p>";

?>



</body>
</html>