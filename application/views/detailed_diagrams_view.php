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

<div style="margin-left: 20px; margin-right: 40px; background-color: yellow;">
	asdf
	
	<div style="background-color: green;">
		
	</div>
	
	<div style="background-color: blue;">
		
	</div>
	
</div>

<div style="margin-left: 20px; border: 3px solid green; width: 600px;">
	<pre>
		<!-- <?php
		
		$fta = array();
		
		$fh = fopen("/Users/youngbuck14188/Sites/UML_Gen/uploaded_files/outer.java", "r");
		while(! feof($fh)) {
			$fta[] = trim(fgets($fh));
		}
		fclose($fh);
		
		for ( $x = 0; $x < count($fta); $x++ ) {
			echo $fta[$x] . "<br/>";
		}
		
		 //print_r($fta);
		?> -->

public class Apple {
	private String name;
	private int age;
	
	public getAge() {
		return this.age;
	}
}

	</pre>
</div>


<?php

echo "<p> The File ID is: " . $select_file_id . "</p>";

?>

<div style="margin-left: 20px; border: 3px solid blue; width: 400px;">
    <table border="1"><tr><th>Outer</th></tr><tr><td><p>-name; String</p><p>+address; String</p></td></tr><tr><td><p>&lt;&lt;constructor&gt;&gt;Outer()</p><p>&lt;&lt;constructor&gt;&gt;Outer(name: String, address: String)</p><p style="text-decoration:underline">+getName(): String</p><p style="text-decoration:underline">+setName(name: String): void</p><p>+doMath(min: int, max: int, slope: int): String</p><p style="text-decoration:underline">-getMath(): void</p><p>#setAge(age: int, yearsOld: int): String</p></td></tr></table>  
</div>

</body>
</html>