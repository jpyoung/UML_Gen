
<!-- // //var b = document.getElementById("rrr");
//   //alert(b.length);
// $(document).ready(function() {
//     $("ul.main-nav li").click(function() {
// 		//alert("Linked was clicked: " + $(this).html());
// 		
//         $(this).addClass('active').siblings().removeClass('active'); 
//         // $(".page_content").hide();
//         //         var activepage = $('a', this).attr("href");
//         //         $(activepage).show();                      
//         //return false;
//     });         
// }); -->


<div class="main">
	<div class="container-fluid">
	<div id="side_navi" class="navi">
		<ul class='main-nav'>
			<li class='active'>
			<!-- <li> -->
				<a href="<?php echo base_url(); ?>index.php/dashboard" class='light'>
					<div class="ico"><i class="icon-home icon-white"></i></div>
					Dashboard
					<span class="label label-warning">10</span>
				</a>
			</li>
			<li>
				<a href="<?php echo base_url(); ?>index.php/dashboard/goto_uploader_view" class='light'>
					<div class="ico"><i class="icon-th-large icon-white"></i></div>
					Uploader
					<span class="label label-info">1</span>
				</a>
			</li>
			<li>
				<a href="<?php echo base_url(); ?>index.php/dashboard/goto_user_management_page" class='light'>
					<div class="ico"><i class="icon-list icon-white"></i></div>
					User Management
					<span class="label label-info">1</span>
				</a>
			</li>
			<li>
				<a href="<?php echo base_url(); ?>index.php/dashboard/goto_user_preferences" class='light'>
					<div class="ico"><i class="icon-tag icon-white"></i></div>
					<span id="userPreferences">User Preferences</span>
					<span class="label label-info">1</span>
				</a>
			</li>
			
			<li>
				<a href="<?php echo base_url(); ?>index.php/dashboard/goto_uml_diagrams" class='light'>
					<div class="ico"><i class="icon-th-large icon-white"></i></div>
					UML Diagrams
					<span class="label label-info">1</span>
				</a>
			</li>
		</ul>
</div>  

