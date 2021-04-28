<!DOCTYPE html>
<?php include("../Model/head.php");
require_once "../Javascript/postadStudent.php";
 ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../Css/Signup/signupStudentCss.css">
  </head>
  <body>

    <form class="loginbox" onsubmit="return validation()" method="post" action="../Controller/postAdStudentController.php">
      <br>
     <h2>Post ad</h2>
      <br><br>
      Your Name: <input type="text" name="yourname" id="yourname" onkeyup="checkYourname()" onblur="checkYourname()" ><br><br>
      <span class="error" id="yournameErr">*<?php if(!empty($_GET['yournameErr'])){echo $_GET['yournameErr'];} ?></span>
      <br><br>
       E-mail: <input type="text" name="email" id="email" onkeyup="checkEmail()" onblur="checkEmail()"><br><br>
      <span class="error" id="emailErr">* <?php if(!empty($_GET['emailErr'])){echo $_GET['emailErr'];} ?></span>
      <br><br>
      Which course you want to study? <input type="text" name="coursename" id="coursename" onkeyup="checkCoursename()" onblur="checkCoursename()"><br><br>
      <span class="error" id="coursenameErr">* <?php if(!empty($_GET['coursenameErr'])){echo $_GET['coursenameErr'];} ?></span>
      <br><br>
      How much salary you are willing to pay? <input type="text" name="salary" id="salary" onkeyup="checkSalary()" onblur="checkSalary()" ><br><br>
      <span class="error" id="salaryErr">* <?php if(!empty($_GET['salaryErr'])){echo $_GET['salaryErr'];} ?></span>
      <br><br>

      Comment: <input type="text" name="comment" size="75" id="comment" onkeyup="checkComment()" onblur="checkComment()"><br><br>
      <span class="error" id="commentErr">* <?php if(!empty($_GET['commentErr'])){echo $_GET['commentErr'];} ?></span>
      <br><br>


      <input type="submit" name="submit" value="Submit">
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
<?php include("../Model/foot.php"); ?>
