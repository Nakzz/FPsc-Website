<?php
///////////////////////////////////////////////////////////////////////////////////////////////
//
// Created  by  Ghaffar Khan
//
// Article’s Blog and support site :
//
// http://ghaffarkh.blogspot.com/2009/04/site-statistics-with-php-and-mysql_12.html
//
////////////////////////////////////////////////////////////////////////////////////////////////
	// SETUP YOUR COUNTER
		// URL of the folder where script is installed. INCLUDE a trailing "/" !!!
		$base_url = 'http://localhost/new_fpsc/Counter/';

		// database parameters
		$username="root";
		$password="a";
		$servername="localhost";
		$database="mysite";
		$tableName="countdetail";


	// Optional parameters, if bot sure leave with default values
		// Default image style (font)
		$default_style = 'web1';

		// Default counter image extension
		$default_ext = 'gif';

		// Minimum number of digits shown (zero-padding). Set to 0 to disable.
		$min_digits = 0;


	// Dont change anything below

	/* Turn error notices off */
		error_reporting(E_ALL ^ E_NOTICE);

	$con = mysql_connect($servername,$username,$password);
	if (!$con)
		 die('Cannot dadd comments at the moment');
	  else
	     @mysql_select_db($database) or die( "Unable to select database");

	/* This functin handles input parameters making sure nothing dangerous is passed in */
	function input($in) {
    $out = htmlentities(stripslashes($in));
    $out = str_replace(array('/','\\'), '', $out);
    return $out;
    }
?>
