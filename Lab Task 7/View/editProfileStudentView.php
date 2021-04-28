<?php
 include("../Model/head.php");


session_start();
require_once '../Controller/studentInfoController.php';
$data = fetchStudent($_SESSION['username']);
if($data!=NULL)
{
  foreach ($data as $i => $student):

       $name= $student['NAME'] ;
       $email=$student['EMAIL'];
       $birth=$student['BIRTH'];
       $details=$student['DETAILS'];

  endforeach;
$birth=str_replace('/','', $birth );
$birthDate=$birth[0].$birth[1];
$birthMonth=$birth[2].$birth[3];
$birthYear=$birth[4].$birth[5].$birth[6].$birth[7];


}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
  <link rel="stylesheet" href="../Css/Signup/signupStudentCss.css">
</head>
<body>

 <form  class="loginbox" onsubmit="return validation()"action="../Controller/updateStudentController.php" method="POST" enctype="multipart/form-data">

 <br><br>
<h2>Edit Profile</h2>
 <br><br><br>
  <label for="name">Name:</label><br><br>
  <input value="<?php echo $name ?>" type="text" id="name" name="name" onkeyup="checkName()" onblur="checkName()"><br><br>
  <span class="error" id="nameErr">* <?php if(!empty($_GET['nameErr'])){echo $_GET['nameErr'];} ?></span> <br><br>
  <label for="email">Email:</label><br><br>
  <input value="<?php echo $email ?>" type="text" id="email" name="email" onkeyup="checkEmail()" onblur="checkEmail()"><br><br>
  <span class="error" id="emailErr">* <?php if(!empty($_GET['emailErr'])){echo $_GET['emailErr'];} ?></span>
  <br><br><br>
  Date of Birth:
  <input type="date" size="1" value="<?php echo "$birthYear"."-"."$birthMonth"."-"."$birthDate"; ?>"  name="birth" id="birth" onkeyup="checkBirth()" onblur="checkBirth()" ><br><br>
  <span class="error" id="birthErr">* <?php if(!empty($_GET['birthErr'])){echo $_GET['birthErr'];} ?></span><br><br>
  <br>
  Tell About Yourself: <input type="text" value="<?php echo "$details"; ?> "name="details" size="75">
  <br><br><br><br>

  <input type="submit" name = "updateStudent" value="Update">
</form>

</body>
</html>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<?php include("../Model/foot.php");
require_once "../Javascript/editProfile.php";
?>
