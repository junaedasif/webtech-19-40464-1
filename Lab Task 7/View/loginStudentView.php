<?php   require_once "../Javascript/loginHomepage.php";
include("../Model/head.php"); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

    <style >


    </style>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../Css/Login/loginStudentCss.css">
    <title></title>
  </head>
  <body>





    <form name="loginFrom"  class="loginbox" onsubmit="return validation();" method="post" action="../Controller/loginStudentController.php" >

    <h2>Signin</h2>


        Username: <input type="text" onkeydown="checkUsername()" onblur="checkUsername ()" placeholder="Enter Username" name="username" id="username">
        <span class="error" id="nameErr">* <?php if(!empty($_GET['usernameErr'])){echo $_GET['usernameErr'];} ?></span>


        <br>
        Password: <input type="password" onkeydown="checkPassword()" onblur="checkPassword()" placeholder="Enter Password" name="password" id="password">
        <span class="error" id="passwordErr">* <?php if(!empty($_GET['passwordErr'])){echo $_GET['passwordErr'];} ?></span>
        <br>
        <input type="checkbox"  name="remember" value="remembered">
         <label for="remember">Remember Me</label>

         <input type="submit" name="submit" value="Submit">
          <meta ><a href ="forget password.php">Forget Password? </a></meta>

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
<?php include("../Model/foot.php");  ?>
