<?php
include "dbconn.php";

$parent = $_POST['parent'];
$passwd = $_POST['password'];

$res = $mysqli->query("select * from parent where name='$parent' and password=md5('$passwd')");

if (($res->num_rows) > 0) {
   session_start();
   $_SESSION["name"] = $parent;
   header("location:index.php");
}?>

<html><head><title>Failed Login</title>
<link rel="stylesheet" type="text/css" href="desktop.css"></head><body>
Incorrect login, please <a href="login.php">try again</a></body></html>
