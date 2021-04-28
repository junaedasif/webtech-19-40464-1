<?php
include("../Model/head.php");
session_start();

if(isset($_SESSION['username']))
{
  //include("../Model/headerView.php");
  ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../Css/dashboardStudent.css">


  </head>
  <body>
    <?php include("viewProfileStudentView.php") ?>
 <div class='sidenav'>
    <br><a href='dashboardStudentView.php'>Dashboard</a>
    <br><a href='postAdStudentView.php'>Post ad</a>
    <!-- <br><a href='viewProfileStudentView.php'>View Profile</a> -->
    <br><a href='editProfileStudentView.php'>Edit Profile</a>
    <!-- <br><a href='changeProfilePictureView.php'>Change Profile Picture</a> -->
   <br><a href='changePasswordStudentView.php'>Change Password</a>
     <br><a href ='../Controller/logoutStudentController.php'>Logout </a>
   </div >

     </div>
  </body>
</html>

<?php include("../Model/foot.php");  ?>



<?php
//include("../Model/foot.php");

}
else {
header("location:../View/loginStudentView.php");
}
 ?>
