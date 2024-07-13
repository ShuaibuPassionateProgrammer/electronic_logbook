<?php
if(isset($_SESSION['slogin']) !== true)
{
    header("location: login.php");
}
?>