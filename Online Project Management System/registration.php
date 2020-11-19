<?php

  
  require "includes/dbconn.inc.php";

  $userIDErr = $nameErr = $uPassErr = $cPassErr = $dobErr = $genderErr = $emailErr = $phoneErr = $addressErr = $eduErr = $bloodErr = $userTypeErr = "";
  $userID = $name = $uPass = $cPass = $dob = $gender = $email = $phone = $address = $edu = $blood = $userType = "";
  $errExist = 0;
  $regSuccessful = "";

  if($_SERVER["REQUEST_METHOD"]=="POST")
{
    
if(empty($_POST['uid']))
    {
     $userIDErr = "User ID cannot be empty!";
     $errExist = 1;
    }else{
      $userID = mysqli_real_escape_string($conn, $_POST['uid']);
      
    }

if(empty($_POST['u_pwd']))
    {
      $uPassErr = "Password cannot be empty!";
      $errExist = 1;
    }else{
      $uPass = mysqli_real_escape_string($conn, $_POST['u_pwd']);
    }

if(empty($_POST['c_pwd']))
    {
      $cPassErr = "Password cannot be empty!";
      $errExist = 1;
    }else{
      $cPass = mysqli_real_escape_string($conn, $_POST['c_pwd']);
    }


    if($uPass != $cPass)
    {
      $cPassErr = "Password doesn't match!";
      $errExist = 1;
    }


$uPasstoDb = password_hash($uPass, PASSWORD_DEFAULT);

if(empty($_POST['name']))
    {
      $nameErr = "Name cannot be empty!";
      $errExist = 1;
    }else{
      $name = mysqli_real_escape_string($conn, $_POST['name']);
    }

if(empty($_POST['dob']))
    {
      $dobErr = "Date of birth cannot be empty!";
      $errExist = 1;
    }else{
      $dob = mysqli_real_escape_string($conn, $_POST['dob']);
    }


if(empty($_POST['gender']))
    {
      $genderErr = "Gender cannot be empty!";
      $errExist = 1;
    }else{
      $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    }

if(empty($_POST['email']))
    {
      $emailErr = "E-mail cannot be empty!";
      $errExist = 1;
    }else{
      $email = mysqli_real_escape_string($conn, $_POST['email']);
    }

if(empty($_POST['phn']))
    {
      $phoneErr = "Phone number cannot be empty!";
      $errExist = 1;
    }else{
      $phone = mysqli_real_escape_string($conn, $_POST['phn']);
    }

    if(empty($_POST['addr']))
    {
      $addressErr = "Address cannot be empty!";
      $errExist = 1;
    }else{
      $address = mysqli_real_escape_string($conn, $_POST['addr']);
    }

    if(empty($_POST['edu']))
    {
      $eduErr = "Education feild cannot be empty!";
      $errExist = 1;
    }else{
      $edu = mysqli_real_escape_string($conn, $_POST['edu']);
    }

    if(empty($_POST['bld']))
    {
      $bloodErr = "Blood group cannot be empty!";
      $errExist = 1;
    }else{
      $blood = mysqli_real_escape_string($conn, $_POST['bld']);
    }
 
    if(empty($_POST['utype']))
    {
      $userTypeErr = "User Type cannot be empty!";
      $errExist = 1;
    }else{
      $userType = mysqli_real_escape_string($conn, $_POST['utype']);
    }


  if($errExist == 0)
  {
    $sqlUsers = "select UserID from user_info where UserID = '$userID'";
    $results = mysqli_query($conn, $sqlUsers);

    $rowCount = mysqli_num_rows($results);

    if($rowCount > 0)
    {
      $userIDErr = "User already exist! Input different user ID";

    }
    else
    {
      $age='27';
       $sqlUserInsert = "insert into user_info (UserID, Password, Name, DoB, Gender, Email, Phone, Address, Education, BloodGroup, UserType) values ('$userID', '$uPasstoDb', '$name', '$dob', '$gender', '$email', '$phone', '$address', '$edu', '$blood', '$userType');";

      mysqli_query($conn, $sqlUserInsert);

      $regSuccessful = "Registration Successful";

    }
  }

}


?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <style>
.error {color: #FF0000;}
</style>
    <link rel="stylesheet" href="CSS/style.css">
    <meta charset="utf-8">
    <title>Registration Page</title>
  </head>
  <body>
    <div align="center">

      <h3 style="color:green;"><?php echo $regSuccessful; ?></h3>

      <h1>User Registration Form</h1>

      <form name="myForm" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" onsubmit="return validated()">

        <table>
          <!-- -->

          <tr>
            <td> <label>User ID: </label> </td>
            <td> <input type="text" name="uid" value="" required> <span style="color:red;"><?php echo $userIDErr; ?></span> </td>
          </tr>

          <tr>
            <td> <label>Password: </label> </td>
            <td> <input type="password" name="u_pwd" value="" required> <span style="color:red;"><?php echo $uPassErr; ?></span> </td>
          </tr>


          <tr>
            <td> <label>Confirm Password: </label> </td>
            <td> <input type="password" name="c_pwd" value="" required> <span style="color:red;"><?php echo $cPassErr; ?></span> </td>
          </tr>

          <tr>
            <td> <label>Name: </label> </td>
            <td> <input type="text" name="name" value="" required> <span style="color:red;"><?php echo $nameErr; ?></span> </td>
          </tr>

          <tr>
            <td> <label>Date of Birth: </label> </td>
            <td> <input type="date" name="dob" value="" required> </td>
            
          </tr>

          <tr>
            <td valign="top"> <label>Gender: </label> </td>
            <td>
                <input type="radio" name="gender" value="male" <?php if($gender == "Male") echo "checked"; ?>> Male <br>
                <input type="radio" name="gender" value="female" <?php if($gender == "female") echo "checked"; ?>> Female <br>
                <input type="radio" name="gender" value="others" <?php if($gender == "others") echo "checked"; ?>> Others <br>
                <span style="color:red"><?php echo $genderErr; ?></span>
            </td>
            
          </tr>

          <tr>
            <td> <label>E-mail:</label> </td>
            <td> <input type="email" name="email" value="" required> </td>
            
          </tr>

          <tr>
            <td> <label>Phone No: </label> </td>
            <td>+880 <input type="number" name="phn" value="" min="1" required> </td>
          </tr>
          <tr>

          <tr>
            <td valign="top"> <label>Address: </label> </td>
            <td> <textarea name="addr" rows="8" cols="80" required></textarea> </td>
          </tr>

          <tr>
            <td valign="top"> <label>Education & Qualification: </label> </td>
            <td> <textarea name="edu" rows="8" cols="80" required></textarea> </td>
          </tr>

          <tr>
            <td> <label>Blood Group: </label> </td>
            <td>
              <select name="bld">
                <option value="" disabled selected>Select blood group...</option>
                <option value="a+" <?php if($blood == "a+") echo "selected"; ?>>A+</option> 
                <option value="b+" <?php if($blood == "b+") echo "selected"; ?>>B+</option>
                <option value="o+" <?php if($blood == "o+") echo "selected"; ?>>O+</option>
              </select>
              <span style="color:red"><?php echo $bloodErr; ?></span>
            </td>
          </tr>
          <tr>

          <tr>
            <td> <label>User Type: </label> </td>
            <td>
              <select name="utype">
                <option value="" disabled selected>Select user type...</option>
                <option value="Admin" <?php if($userType == "Admin") ?>>Admin</option>
                <option value="Project Manager" <?php if($userType == "Project Manager")  ?>>Project Manager</option>
                <option value="Chief Programmer" <?php if($userType == "Chief Programmer")  ?>>Chief Programmer</option>
              </select>
              <span style="color:red"><?php echo $userTypeErr; ?></span>
            </td>
            
          </tr>

          <tr>
            <td colspan="2"> <br> <br> <input type="submit" name="btn_register" value="Register"> </td>
          </tr>
          
        </table>
        <br>
     <br>
     <br>
     <button onclick="window.location.href='logout.php';">Log Out</button>
     <button onclick="window.location.href='usermanagement.php';">Back</button>

      </form>
      <script src="JS/valid.js"> </script>

    </div>





  </body>
</html>
