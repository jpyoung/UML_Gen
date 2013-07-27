<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title><?php echo $title; ?></title>
<meta name="description" content="">

<meta name="viewport" content="width=device-width">

<link rel="stylesheet" href="<?php echo base_url(); ?>/theme/css/bootstrap.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>/theme/css/bootstrap-responsive.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>/theme/css/jquery.fancybox.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>/theme/css/style.css">
<script src="<?php echo base_url(); ?>/theme/js/jquery.js"></script>

<script>

$(document).ready(function() {
	
	//on document load, set the body background to retina-wood.
	$('body').removeClass().addClass("retina-wood");

});


</script>

</head>
<body>


<!-- top navigation bar -->
	<?php include('topbar.php'); ?>
<!-- end top navigation bar -->

<?php if ($title != 'Login' && $title != 'Forgot Password') { ?>
<!-- Main side by nav -->
	<?php include('sidebar.php'); ?>
<!-- end of side bar -->
<?php } ?>

<div class="content">