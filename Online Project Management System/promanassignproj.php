<?php 
	require "includes/dbconn.inc.php";

  	session_start();

    $user = $_SESSION['user'];


?>

<!DOCTYPE html>
<html lang='en' dir='ltr' align='center'>
<head>
  <link rel="stylesheet" href="CSS/style.css">
  <meta charset="utf-8">
  <title>Assigned Projects</title>
  <style>
table, th, td {
    border: 1px solid black;
}
</style>
</head>
<body>

<div>
  <h1 class="text-warning text-center" >Assigned Projects for User: <?php echo $user; ?></h1>

  <form method="POST" action="openproj.php">
  <?php 
    $sql="select * from projects where Manager='$user';";
    $result=mysqli_query($conn, $sql);

  if(mysqli_num_rows($result) > 0)
  {  
    echo $user;
    echo "<table align='center'><tr><th>Project ID</th><th>Project Name</th><th>Open Project</th></tr>";

    while($row = mysqli_fetch_assoc($result))
    {
      echo "<tr><td>"; echo $row["ProjectID"];
      echo "</td><td>"; echo $row["ProjectName"];
      echo "</td><td><button type='submit' name=open formaction='openproj.php' value='".$row["ProjectID"]." '>Open</button></td></tr>";
    }
    echo "</table>";
  } 
  ?>
  </form>
  <br>
     <br>
     <br>
     <button onclick="window.location.href='logout.php';">Log Out</button>
     <button onclick="window.location.href='promanprojectmanagement.php';">Back</button>
</div>

</body>
</html>