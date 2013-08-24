<?php

/////////////////////////////////////////////////////////////////////////////
//
// lazy_scripting.php
//
// Brian McVeigh <bmcveigh@gmail.com>
//
// Used to speed up php outputting
//
/////////////////////////////////////////////////////////////////////////////

// Takes a string and puts it in paragraph form.
  function p($vv){
      echo "<p>" . $vv . "</p>";
  }
  
  function p_b($desc, $val) {
    echo "<p><b>" . $desc. ": </b>" . $val . "</p>";
  }

  // h1 text
  function h1($vv) {
     echo "<h1>" . $vv . "</h1>";
  }
  // h1 text with background color passed in
  function h1_c($vv, $color) {
     echo "<h1 style='background-color:" . $color . "'>" . $vv . "</h1>";
  }
  // h2 text
  function h2($vv) {
     echo "<h2>" . $vv . "</h2>";
  }
  // h2 text with background color passed in
  function h2_c($vv, $color) {
     echo "<h2 style='background-color:" . $color . "'>" . $vv . "</h1>";
  }
  // h3 text
  function h3($vv) {
     echo "<h3>" . $vv . "</h3>";
  }
  // h3 text with background color passed in
  function h3_c($vv, $color) {
     echo "<h3 style='background-color:" . $color . "'>" . $vv . "</h1>";
  }
  // h4 text
  function h4($vv) {
     echo "<h4>" . $vv . "</h4>";
  }
  // h4 text with background color passed in
  function h4_c($vv, $color) {
     echo "<h4 style='background-color:" . $color . "'>" . $vv . "</h4>";
  }
  // h5 text
  function h5($vv) {
     echo "<h5>" . $vv . "</h5>";
  }
  // h5 text with background color passed in
  function h5_c($vv, $color) {
     echo "<h5 style='background-color:" . $color . "'>" . $vv . "</h5>";
  }
  // h6 text
  function h6($vv) {
     echo "<h6>" . $vv . "</h6>";
  }
  // h6 text with background color passed in
  function h6_c($vv, $color) {
     echo "<h6 style='background-color:" . $color . "'>" . $vv . "</h6>";
  }
  // bold text
  function strong($vv) {
  	echo "<strong>" . $vv . "</strong>";
  }
  // underlined text
  function u($vv) {
     echo "<u>" . $vv . "</u>";
  }
 


?>