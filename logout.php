<?php
session_start();
unset($_SESSION['slogin']);
header("location: /eleclogbook/login.php");
?>