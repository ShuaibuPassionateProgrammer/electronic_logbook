<?php
session_start();
unset($_SESSION['sp_login']);
header('location: index.php');
?>