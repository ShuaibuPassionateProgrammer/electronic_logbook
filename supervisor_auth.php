<?php
if(isset($_SESSION['sp_login']) !== true)
{
    header('location: supervisor-login.php');
}
?>