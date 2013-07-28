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
	
	var t = $('title').html();
	//console.log("Page Title: " + t);
	
	var c = $("ul.main-nav li");
	
	//removing the active side bar
	for (var x = 0; x < c.length; x++) {
		//console.log("[" + x + "]  = " + $(c[x]).attr("class"));
		$(c[x]).removeClass();
	}
	
	//logic tree deciding which sidebar element should be highlighted
	if (t == "Dashboard") {
		highlight_this(0, c);
	} else if (t == "Uploader") {
		highlight_this(1, c);
	} else if (t == "User Management") {
		highlight_this(2, c);
	} else if (t == "User Preferences") {
		highlight_this(3, c);
	} else if (t == "UML Diagrams") {
		highlight_this(4, c);
	}
	
	//used to high the element, c is the array, e is the index
	function highlight_this(e, c) {
		$(c[e]).addClass('active');
	}

	// $("ul.main-nav li").click(function(e){
	// 	
	// 	var c = $("ul.main-nav li");
	// 	//var elements = document.getElementsByTagName('div');
	// 	for (var x = 0; x < c.length; x++) {
	// 		console.log("[" + x + "]  = " + $(c[x]).attr("class"));
	// 		$(c[x]).removeClass();
	// 	}
	// 	$(this).addClass('active');
	// 	//return false;
	// });
	

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