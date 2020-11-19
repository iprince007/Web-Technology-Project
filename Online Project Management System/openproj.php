<?php 
	require "includes/dbconn.inc.php";

  	session_start();

  	$pid = $_POST['open'];

  	$sql="select * from projects where ProjectID='$pid';";
  	$result=mysqli_query($conn, $sql);
  	$pname = $desc = $status = "";

  	if(mysqli_num_rows($result) > 0)
  {
    $row = mysqli_fetch_assoc($result);
    $pname = $row['ProjectName']; 
    $desc = $row['Description']; 
    $status = $row['Status'];

  }
?>

<!DOCTYPE html>
<html lang='en' dir='ltr' align='center'>
<head>
  <meta charset="utf-8">
  <title>Project</title>
  <style>
</style>
</head>
<body>

<div>
  <h1 class="text-warning text-center" > Project: <?php echo $pname; ?> </h1>

  <table align='center'>
    <tr><th>Project ID:</th><th><?php echo $pid; ?></th></tr>
    <tr><th>Project Name:</th><th><?php echo $pname; ?></th></tr>
    <tr><th>Project Description:</th><th><?php echo $desc; ?></th></tr>
    <tr><th>Project Status:</th><th><?php echo $status; ?></th></tr>

  </table>
  
</div>

</body>
</html>