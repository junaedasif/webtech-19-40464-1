<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <style >
      .error {color: #FF0000;}
    </style>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

<?php
$UserNameAS = $passErr = "";
$username = $password = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["username"])) {
    $UserNameAS = "UserName is required";
  } else {
    $username = test_input($_POST["username"]);
    if (!preg_match("/^[a-zA-Z-._]*$/",$username)) {
      $UserNameAS = "Only alpha numeric characters, period, dash or underscore allowed";
      $username ="";
    }
    else if (strlen($username)<2) {
      $UserNameAS = "At least two charecters needed";
      $username ="";
    }
  }
  
  if (empty($_POST["Password"])) {
    $passErr = "Password is required";
  } else {
    $password = test_input($_POST["Password"]);
    if (strlen($password)<8) {
      $passErr = "Password must be 8 charecters";
      $password ="";
    }
    else if (!preg_match("/[@,#,$,%]/",$password)) {
      $passErr = "Password must contain at least one of the special characters (@, #, $,%)";
      $password ="";
    }
  }
  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>


<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <fieldset>
<legend><B>LOGIN</B></legend>  
  User Name: <input type="text" name="username">
  <span class="error"> <?php echo $UserNameAS;?></span>
  <br><br>
  Password: <input type="Password" name="Password">
  <span class="error"> <?php echo $passErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">
</fieldset>

</form>
<p><b>Your Result:</b></p>
<?php
echo $username;
echo "<br>";
echo $password;
echo "<br>";
?>
</body>
</html>