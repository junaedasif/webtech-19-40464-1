<?php
    require_once('includes/header.php');
    $oldPasswordError=$newPasswordError=$retypeNewPasswordError="";
    if(isset($_GET['message'])){
		if($_GET['message'] == 'sucess'){
			$sucess='Registration Sucessfull';
		}
		else if($_GET['message'] == 'all_empty'){
			$oldPasswordError='Current Password empty!';
			$newPasswordError='New Password empty!';
			$retypeNewPasswordError='Retype Password empty!';
		}
		else if($_GET['message'] == 'empty_oldPassword'){
			$oldPasswordError='Current Password empty!';
		}
		else if($_GET['message'] == 'empty_newPassword'){
			$newPasswordError='New Password empty!';
		}
		else if($_GET['message'] == 'empty_retypeNewPassword'){
			$retypeNewPasswordError='Retype Password empty!';
		}
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
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
        <form action="changePasswordValidation.php" method="POST">
                    <fieldset>
                        <legend>CHANGE PASSWORD</legend>
                        <table align="center" height="100px">
                        <tr>
                            <td>Current Password</td>
                            <td>: <input type="password" name="oldPassword"> <span style="color: red"><?=$oldPasswordError;?></span></td>
                        </tr>
                        <tr>
                            <td style="color: green">New Password</td>
                            <td>: <input type="password" name="newPassword"> <span style="color: red"><?=$newPasswordError;?></span></td>
                        </tr>
                        <tr>
                            <td style="color: red">Retype New Password</td>
                            <td>: <input type="password" name="retypeNewPassword"> <span style="color: red"><?=$retypeNewPasswordError;?></span></td>
                        </tr>
                        <tr><td colspan="2"><hr></td></tr>
                        <tr>
                            <td><input type="submit" name="submit"></td>
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