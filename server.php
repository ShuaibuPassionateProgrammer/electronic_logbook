<?php
session_start();
error_reporting(0);
include('includes/config.php');

$errors = array();
$success = array();
$s_msg = array();

//Reset Student Password
if(isset($_POST['sturespass']))
{
	?>
	<script>
		alert("Initializing Student Password...");
	</script>
	<?php
}

//Change Student Password
if(isset($_POST['cpsswd']))
{
	?>
	<script>
		alert("Initializing Password recovery...");
	</script>
	<?php
}

//Delete Student completely
if(isset($_GET['stu_del']))
{
    $del_stu = $_GET['stu_del'];
}