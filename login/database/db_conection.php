<?php
/**
 * Created by PhpStorm.
 * User: Ehtesham Mehmood
 * Date: 11/21/2014
 * Time: 1:13 AM
 */

$dbcon=mysqli_connect("localhost","root","a");

mysqli_select_db($dbcon,"users");


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

/* This functin handles input parameters making sure nothing dangerous is passed in */
function input($in) {
$out = htmlentities(stripslashes($in));
$out = str_replace(array('/','\\'), '', $out);
return $out;
}

?>
