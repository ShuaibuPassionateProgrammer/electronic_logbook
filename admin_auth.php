<?php
if(isset($_SESSION['ad_login']) !== true)
{
    header('location: admin-login.php');
}
?>