<?php
	require "includes/dbconn.inc.php";
	session_start();

	$pid=$_POST['delete'];

	$sqldelete = "delete from projects where ProjectID = '$pid';";
	mysqli_query($conn, $sqldelete);

	header('Location: udprojects.php');
?>