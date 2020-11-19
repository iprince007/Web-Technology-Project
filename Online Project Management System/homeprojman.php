<?php

  require "includes/dbconn.inc.php";

  session_start();


?>

<html lang="en" dir="ltr">
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/style2.css">
    <meta charset="utf-8">
    <title>Home</title>
  </head>
  <body>
  <head>

    <div align="center">
      <h1> Home: Project Manager</h1>
     <button onclick="window.location.href='promanusermanagement.php';">View Users</button>

     <button onclick="window.location.href='promanprojectmanagement.php';">Project Management</button>
     <br>
     <br>
     <br>
     <button onclick="window.location.href='logout.php';">Log Out</button>

    </div>

      
  </body>

</html>
