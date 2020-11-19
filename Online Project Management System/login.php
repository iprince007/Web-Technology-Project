<?php

  require "includes/dbconn.inc.php";

  session_start();

  $UID = $Pass = $PassInDB = $utype = "";
  $UIDErr = $PassErr = "";

  if($_SERVER["REQUEST_METHOD"]=="POST"){

    if(empty($_POST['uid'])){
      $UIDErr = "Username cannot be empty!";
    }else{
      $UID = $_POST['uid'];
    }

    if(empty($_POST['pwd'])){
      $PassErr = "Password cannot be empty!";
    }else{
      $Pass = $_POST['pwd'];
    }

    if(!empty($UID) && !empty($Pass)){
      $sqlUserCheck = "select Password from user_info where UserID = '$UID';";

      $resultUserCheck = mysqli_query($conn, $sqlUserCheck);
      $userCount = mysqli_num_rows($resultUserCheck);

      if($userCount < 1){
        $UIDErr = "User does not exist";
      }else{

        while($row = mysqli_fetch_assoc($resultUserCheck)){
          $PassInDB = $row['Password'];
        }

        if(password_verify($Pass, $PassInDB)){
          $_SESSION['user']= $UID;
          $sql="select UserType from user_info where UserID = '$UID';";
          $result=mysqli_query($conn, $sql);
          while($row=mysqli_fetch_assoc($result))
          {
              $utype=$row['UserType'];

          }

          if($utype=='Admin')
          {
          header("Location: homeadmin.php");
          }
          elseif($utype=='Project Manager')
          {
            header("Location: homeprojman.php");
          }
          elseif($utype=='Chief Programmer')
          {
            header("Location: homecprog.php");
          }
        }else{
          $PassErr = "Wrong password!";
        }
      }
    }
  }

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="CSS/style.css">
    <meta charset="utf-8">
    <title>Log In</title>
  </head>
  <body>

    <div align="center" rel="stylesheet">


      <h2 style="color:blue;">User Login</h2>
      <!--<img src="resource/aiub.png" alt="AIUB_LOGO" height="120">-->
      <br>

      <form class="box" name="myForm" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" onsubmit="return validated()">
      <h1>User Login</h1>
        <table>
          <tr>
            <td><label>User ID: </label></td>
            <td>
              <input type="text" name="uid" value="<?php echo $UID; ?>">
              <span style="color:red;"><?php echo $UIDErr; ?></span>
            </td>
          </tr>
          <tr>
            <td><label>Password: </label></td>
            <td>
              <input type="password" name="pwd">
              <span style="color:red;"><?php echo $PassErr; ?></span>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <input name="lgin_btn" type="submit" value="Log In">
              <!--or, <a href="registration.php" target="_blank">Register</a>  relative anchoring -->
              <!-- <input type="submit" value="Log In"> -->
            </td>
          </tr>
        </table>

      </form>
      <script src="JS/valid.js"> </script>

  </body>

</html>
