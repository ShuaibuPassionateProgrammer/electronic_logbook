<?php
//Connect to the database
$db = mysqli_connect("localhost", "root", "", "eleclogbook");
if(!$db) echo "<span style='color: red; font-weight: bold; font-size: 20px;'>Database connection failed!</span>";
?>