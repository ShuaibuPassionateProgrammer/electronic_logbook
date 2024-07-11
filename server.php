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