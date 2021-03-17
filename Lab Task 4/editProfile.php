<?php
    require_once('includes/header.php');
    $sucess=$error=$nameError=$emailError=$genderError=$dobError="";
    if(isset($_GET['message'])){
        if($_GET['message'] == 'sucess'){
			$sucess='Profile Updated.';
		}
        else if($_GET['message'] == 'all_empty'){
            $nameError="Name Empty!";
            $emailError="Email Empty!";
            $genderError="Gender Empty!";
            $dobError="Date of Birth Empty!";
        }
        else if($_GET['message'] == 'empty_name'){
			$nameError='Name empty!';
		}
		else if($_GET['message'] == 'empty_email'){
			$emailError='Email empty!';
		}
		else if($_GET['message'] == 'empty_gender'){
			$genderError='Gender empty!';
		}
		else if($_GET['message'] == 'empty_dob'){
			$dobError='Date of Birth empty!';
		}
		else if($_GET['message'] == 'not_exists'){
			$error='File Not Found!';
		}
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
</head>
<body>
    <table border='1' cellpadding="10" align="center" height="600px" width="60%" style="border-collapse: collapse">
    <tr height="15px">
        <td align="left" ><img src="img/logo.png" width="15%"></td>
        <td align="right">Logged in as <a href="login.php"><?=$_SESSION['name'];?></a> | <a href="logout.php">Logout</a></td>
    </tr>
    <tr align="center" height="500px">
        <td width="20%">Account Details<hr>
            <?php include_once('includes/sidebar.php');?>
        </td>
        <td  align="center"width="60%">
        <form action="editProfileValidation.php" method="POST">
        <?php
            $data = file_get_contents("database.json");  
            $data = json_decode($data, true);
            $userData = []; 
            foreach($data as $row)  
            { 
              if($row['username'] == $_SESSION['username']){
                $userData = $row;
              }
            }
        ?>
                    <fieldset>
                        <legend>EDIT PROFILE</legend>
                        <table align="center" height="100px">
                        <tr>
                            <td>Name</td>
                            <td>: <input type="text" name="name" value="<?=$userData["name"]?>"> <span style="color:red"><?=$nameError?></span></td>
                        </tr>
                        <tr><td colspan="2"><hr></td></tr>
                        <tr>
                            <td>Email</td>
                            <td>: <input type="mail" name="email" value="<?=$userData["email"]?>"> <span style="color:red"><?=$emailError?></span></td>
                        </tr>
                        <tr><td colspan="2"><hr></td></tr>
                        <tr>
                            <td>Gender</td>
                            <td>: <input type="radio" name="gender" value="male">Male
                            <input type="radio" name="gender" value="female">Female
                            <input type="radio" name="gender" value="other">Other  <span style="color:red"><?=$genderError?></span></td>
                        </tr>
                        <tr><td colspan="2"><hr></td></tr>
                        <tr>
                            <td>Date of Birth</td>
                            <td>: <input type="date" name="dob" value="<?=$userData["dob"]?>">  <span style="color:red"><?=$dobError?></span></td>
                        </tr>
                        <tr><td colspan="2"><hr></td></tr>
                        <tr>
                            <td><input type="submit" name="submit"> <span style="color:green"><?=$sucess;?></span><span style="color:red"><?=$error;?></span></td>
                        </tr>
                        </table>
                    </fieldset>
                </form>
        </td>
    </tr>
    <tr>
        <td colspan="2" align="center" height="55px">
            <?php include_once('includes/footer.php');?>
        </td>
    </tr>
    </table>
</body>
</html>