<?php

  require "includes/dbconn.inc.php";

  session_start();


?>

<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/style2.css">
    <meta charset="utf-8">
    <title>Project Management</title>
  </head>
  <body>

    <div align="center">
      <h1 class="text-warning text-center" > Project Management </h1>
     <button onclick="window.location.href='promancreateproj.php';">Create New Project</button>
<br>
<br>
     <button onclick="window.location.href='promanassignproj.php';">View Assigned Projects</button>
<br>
<br>
<br>
     <br>
     <br>
     <button onclick="window.location.href='logout.php';">Log Out</button>
     <button onclick="window.location.href='homeprojman.php';">Back</button>
    </div>

      
  </body>

</html>
