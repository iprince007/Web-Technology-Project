<?php
	require "includes/dbconn.inc.php";
	session_start();

	$uid=$_POST['delete'];

	$sqldelete = "delete from user_info where UserID = '$uid';";
	mysqli_query($conn, $sqldelete);

	header('Location: uduser.php');
?>