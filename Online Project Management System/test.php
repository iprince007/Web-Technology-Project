<?php
  require "includes/dbconn.inc.php";

  session_start();

  



?>



<!DOCTYPE html>
<html lang='en' dir='ltr' align='center'>
<head>
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
  <h1 class="text-warning text-center" > Display Table Data </h1>

  <table align='center'>
    <tr><th>User ID</th><th>Delete</th></tr>

  </table>
  <form method="POST" action="delete.php">
  <?php 
    $sqlSelectUser = "select * from user_info;";
  $result = mysqli_query($conn, $sqlSelectUser);

  if(mysqli_num_rows($result) > 0)
  {
    echo "<table align='center'><tr><th>User ID</th><th>Delete User</th></tr>";

    while($row = mysqli_fetch_assoc($result))
    {
      echo "<tr><td>"; echo $row["UserID"];
      echo "</td><td><button type='submit' name=delete value='".$row["UserID"]."'>Delete</button></td></tr>";
    }
    echo "</table>";
  } 
  ?>
  </form>
</div>

</body>
</html>