<?php 
 
session_start();
$_SESSION["username"];
$_SESSION["pass"];

unset($_SESSION["username"]);
unset($_SESSION["pass"]);

session_unset();
session_destroy();
 
echo"<script> window.alert('Berhasil Logout')
    window.location='sign-in.php'</>"
 
?>
 
