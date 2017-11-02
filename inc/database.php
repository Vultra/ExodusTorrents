<?php
define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_NAME", "exodus");

$con = mysqli_connect(DB_HOST , DB_USER, DB_PASSWORD, DB_NAME);

if(mysqli_connect_errno())
{
	die("Not Connection To MySQL Database " . mysqli_connect_error());
}
?>