<?php session_start(); ?>
<?php require_once('cnx.php'); ?>
<?php
session_start();
unset($_SESSION);
unset($_COOKIE);
$_SESSION["email"] = "";
$_SESSION = array();
session_destroy();

$page = "index";
$sec = "1";
die('<META HTTP-equiv="refresh" content=0;URL='.$page.'>');
?>

