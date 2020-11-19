<?php

  require "includes/dbconn.inc.php";

  session_start();


?>

<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/style2.css">
    <meta charset="utf-8">
    <title>User Management</title>
  </head>
  <body>

    <div align="center">
      <h1 class="text-warning text-center" > User Management </h1>
     <button onclick="window.location.href='registration.php';">Create New User</button>

     <button onclick="window.location.href='uduser.php';">View All User</button>
     <br>
     <br>
     <br>
     <button onclick="window.location.href='logout.php';">Log Out</button>
     <button onclick="window.location.href='homeadmin.php';">Back</button>

    </div>

      
  </body>

</html>
