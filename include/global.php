<?php
	/*ini_set("display_errors", 0);
	error_reporting(0);*/

	$base_path		= "http://localhost/Flexcode/";
	$db_name		= "demo_flexcodesdk";
	$db_user		= "root";
	$db_pass		= "";
	$db_host		= "127.0.0.1:3306";
	$time_limit_reg = "15";
	$time_limit_ver = "10";

	$con = mysqli_connect($db_host, $db_user, $db_pass);
	if (!$con) die("Connection for user $db_user refused!");
	mysqli_select_db($con,$db_name) or die("Can not connect to database!");
?>