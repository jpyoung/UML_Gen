<?php

	/**
	 * Change the path to your folder.
	 * This must be the full path from the root of your
	 * web space. If you're not sure what it is, ask your host.
	 *
	 * Name this file index.php and place in the directory.
	 */
	// Define the full path to your folder from root
	// $path = "/Applications/XAMPP/xamppfiles/htdocs/xampp/CodeIgniter/application/views/uploaded_files/";
	
	//path set for the uploaded_files folder in the directory outside of the application directory
	 $path = getcwd() . "/uploaded_files/";
	
	//path set for the uploaded files folder in the directory inside application/views directory
	//$path = getcwd() . "/application/views/uploaded_files/";
	
	
	echo $path;
	// echo "<p> cwd: " . getcwd() . "</p>";
	// echo "<br/><br/><p>Base URL: " . base_url() . "</p>";
	
	// Open the folder
	$dir_handle = @opendir($path) or die("Unable to open $path");
	
	
	$counter = 1; // Counter for the file number
	echo "<h2>Files Uploaded</h2><br />";
	// This will make a table of all the uploaded files.
	echo "<table border='1'>";
	// Loop through the files
	echo "<tr><th>File id</th><th>File name</th></tr>";
	while ($file = readdir($dir_handle)) {
		echo "<tr>";
		echo "<td>".$counter++."</td>";
		echo "<td><a href={$file}>{$file}</a></td>";
		echo "</tr>";
	}
	echo "</table><br />";
	--$counter;
	echo "There are {$counter} files in this directory.";
	// Close
	closedir($dir_handle);
?>