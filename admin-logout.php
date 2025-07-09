<?php
session_start();
unset($_SESSION['ad_login']);
header('location: index.php');
?>