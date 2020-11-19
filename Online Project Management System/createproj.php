<?php

  
  require "includes/dbconn.inc.php";

  session_start();

  $projectIDErr = $projectNameErr = $descriptionErr = $managerErr = $designerErr = $programmerErr = $qamErr = $uploadsErr = $commentsErr = $apprmanErr = $statusErr =  "";
  $projectID = $projectName = $description = $manager = $designer = $programmer = $qam = $uploads = $comments = $apprman = $status =  "";
  $errExist = 0;
  $regSuccessful = "";

  if($_SERVER["REQUEST_METHOD"]=="POST")
{

if(empty($_POST['projname']))
    {
      $projectNameErr = "Project name cannot be empty!";
      $errExist = 1;
    }else{
      $projectName = mysqli_real_escape_string($conn, $_POST['projname']);
    }

if(empty($_POST['desc']))
    {
      $descriptionErr = "Description cannot be empty!";
      $errExist = 1;
    }else{
      $description = mysqli_real_escape_string($conn, $_POST['desc']);
    }


if(empty($_POST['pman']))
    {
      $managerErr = "Project manager feild cannot be empty!";
      $errExist = 1;
    }else{
      $manager = mysqli_real_escape_string($conn, $_POST['pman']);
    }

if(empty($_POST['pdes']))
    {
      $designerErr = "Project designer field cannot be empty!";
      $errExist = 1;
    }else{
      $designer = mysqli_real_escape_string($conn, $_POST['pdes']);
    }


if(empty($_POST['pprg']))
    {
      $programmerErr = "Cheif Programmer feild cannot be empty!";
      $errExist = 1;
    }else{
      $programmer = mysqli_real_escape_string($conn, $_POST['pprg']);
    }

if(empty($_POST['pqam']))
    {
      $qamErr = "QAM feild cannot be empty!";
      $errExist = 1;
    }else{
      $qam = mysqli_real_escape_string($conn, $_POST['pqam']);
    }

if(empty($_POST['avm']))
    {
      $apprmanErr = "Aproval manager feild cannot be empty!";
      $errExist = 1;
    }else{
      $apprman = mysqli_real_escape_string($conn, $_POST['avm']);
    }

    if(empty($_POST['status']))
    {
      $statusErr = "Status cannot be empty!";
      $errExist = 1;
    }else{
      $status = mysqli_real_escape_string($conn, $_POST['status']);
    }


  if($errExist == 0)
  {
       $sqlCreate = "insert into projects (ProjectName, Description, Manager, ProDesigner, ProProg, ProQAM, ApprovalManager, Status) values ('$projectName', '$description', '$manager', '$designer', '$programmer', '$qam', '$apprman', '$status');";

       mysqli_query($conn, $sqlCreate);
      if($sqlCreate)
      {

      $regSuccessful = "Project Created!";
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
    <title>Create Project</title>
  </head>
  <body>
    <div align="center">

      <h3 style="color:green;"><?php echo $regSuccessful; ?></h3>

      <h1>Create New Project</h1>

      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

        <table>
          <!-- -->

          <tr>
            <td> <label>Project Name: </label> </td>
            <td> <input type="text" name="projname" value="" required> <span style="color:red;"><?php echo $projectNameErr; ?></span> </td>
          </tr>

          <tr>
            <td> <label>Description: </label> </td>
            <td> <input type="text" name="desc" value="" required> <span style="color:red;"><?php echo $descriptionErr; ?></span> </td>
          </tr>

          <tr>
            <td> <label>Project Manager: </label> </td>
            <td> <input type="text" name="pman" value="" required> <span style="color:red;"><?php echo $managerErr; ?></span> </td>
          </tr>

          <tr>
            <td> <label>Cheif Designer: </label> </td>
            <td> <input type="text" name="pdes" value="" required> <span style="color:red;"><?php echo $designerErr; ?></span> </td>
          </tr>

          <tr>
            <td> <label>Cheif Programmer: </label> </td>
            <td> <input type="text" name="pprg" value="" required> <span style="color:red;"><?php echo $programmerErr; ?></span> </td>
          </tr>

          <tr>
            <td> <label>Quality Assurance Manager: </label> </td>
            <td> <input type="text" name="pqam" value="" required> <span style="color:red;"><?php echo $qamErr; ?></span> </td>
          </tr>


          <tr>
            <td> <label>Aproval Manager: </label> </td>
            <td> <input type="text" name="avm" value="" required> <span style="color:red;"><?php echo $apprmanErr; ?></span> </td>
          </tr>

          <tr>
            <td> <label>Project Status: </label> </td>
            <td> <input type="text" name="status" value="" required> <span style="color:red;"><?php echo $statusErr; ?></span> </td>
          </tr>

          

          <tr>
            <td colspan="2"> <br> <br> <input type="submit" name="btn_create" value="Create Project"> </td>
          </tr>
          
        </table>

      <br>
     <br>
     <br>
     <button onclick="window.location.href='logout.php';">Log Out</button>
     <button onclick="window.location.href='projectmanagement.php';">Back</button>

      </form>

    </div>
  </body>
</html>
