<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
$cpassErr = $npassErr = $rtnpassErr = "";
$cpass = $npass = $rtnpass = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["cpass"])) {
    $cpassErr = "Current Password is required";
  } else {
    $cpass = test_input($_POST["cpass"]);
  }

  if (empty($_POST["npass"])) {
    $npassErr = "Enter The New Password";
  } else {
    $npass = test_input($_POST["npass"]);
    if (strlen($npass)<8) {
      $npassErr = "Password must be 8 charecters";
      // $npass ="";
    }
    else if (!preg_match("/[@,#,$,%]/",$npass)) {
      $npassErr = "Password must contain at least one of the special characters (@, #, $,%)";
      // $npass ="";
    }
    else if (strcmp($cpass, $npass)==0) {
      $npassErr = "New Password should not be same as the Current Password";
      // $npass ="";
    }
  }

  if (empty($_POST["rtnpass"])) {
    $rtnpassErr = "Retype The Current Password";
  } else {
    $rtnpass = test_input($_POST["rtnpass"]);
    if (!strcmp($npass, $rtnpass)==0) {
      $rtnpassErr = "New Password & Retyped Password Dosen't Match";
      // $npass ="";
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
<legend><B>CHANGE PASSWORD</B></legend>  
  Current Password: <input type="Password" name="cpass">
  <span class="error"> <?php echo $cpassErr;?></span>
  <br><br>
  New Password: <input type="Password" name="npass">
  <span class="error"> <?php echo $npassErr;?></span>
  <br><br>
  Retype New Password: <input type="Password" name="rtnpass">
  <span class="error"> <?php echo $rtnpassErr;?></span>
  <br><hr>
  <input type="submit" name="submit" value="Submit">
</fieldset>
</form>
<p><b>Your Result:</b></p>
<?php
echo $cpass;
echo "<br>";
echo $npass;
echo "<br>";
echo $rtnpass;
echo "<br>";
?>
</body>
</html>