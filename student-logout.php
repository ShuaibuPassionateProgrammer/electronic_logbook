<?php
session_start();
unset($_SESSION['st_login']);
header('location: /eleclogbook');
?>