<?php
if(isset($_SESSION['st_login']) !== true)
{
    header('location: student-login.php');
}
?>