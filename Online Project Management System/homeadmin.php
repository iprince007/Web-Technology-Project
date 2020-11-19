<?php

  require "includes/dbconn.inc.php";

  session_start();


?>
<head>
<html lang="en" dir="ltr">
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/style2.css">
    <meta charset="utf-8">
    <title>Home</title>
  </head>
  <body>
  

    <div align="center">
      <h1> Home: Admin</h1>
     <button onclick="window.location.href='usermanagement.php';">User Management</button>

     <button onclick="window.location.href='projectmanagement.php';">Project Management</button>
     <br>
     <br>
     <br>
     <button onclick="window.location.href='logout.php';">Log Out</button>

    </div>

      
  </body>

</html>
