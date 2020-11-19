<?php
  require "includes/dbconn.inc.php";

  session_start();

?>



<!DOCTYPE html>
<html lang='en' dir='ltr' align='center'>
<head>
  <link rel="stylesheet" href="CSS/style.css">
  <meta charset="utf-8">
  <title>Edit User Info</title>
  <style>
table, th, td {
    border: 1px solid black;
}
</style>
</head>
<body>

<div>
  <h1 class="text-warning text-center" > All Users </h1>

  <form method="POST" action="delete.php">
  <?php 
    $sqlSelectUser = "select * from user_info;";
  $result = mysqli_query($conn, $sqlSelectUser);

  if(mysqli_num_rows($result) > 0)
  {
    echo "<table align='center'><tr><th>User ID</th>";

    while($row = mysqli_fetch_assoc($result))
    {
      echo "<tr><td>"; echo $row["UserID"];
      echo "</td>";
    }
    echo "</table>";
  } 
  ?>
  </form>
       <br>
     <br>
     <br>
     <button onclick="window.location.href='logout.php';">Log Out</button>
     <button onclick="window.location.href='homecprog.php';">Back</button>
</div>

</body>
</html>