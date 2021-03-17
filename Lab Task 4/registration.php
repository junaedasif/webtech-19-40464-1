<?php
	$error=$nameError=$emailError=$usernameError=$passwordError=$conPasswordError=$genderError=$dobError=$sucess="";
	if(isset($_GET['message'])){
		if($_GET['message'] == 'sucess'){
			$sucess='Registration Sucessfull';
		}
		else if($_GET['message'] == 'all_empty'){
			$nameError='Name empty!';
			$emailError='Email empty!';
			$usernameError='User Name empty!';
			$passwordError='Password empty!';
			$conPasswordError='Confirm Password empty!';
			$genderError='Gender empty!';
			$dobError='Date of Birth empty!';
		}
		else if($_GET['message'] == 'empty_name'){
			$nameError='Name empty!';
		}
		else if($_GET['message'] == 'empty_email'){
			$emailError='Email empty!';
		}
		else if($_GET['message'] == 'empty_username'){
			$usernameError='User Name empty!';
		}
		else if($_GET['message'] == 'empty_password'){
			$passwordError='Password empty!';
		}
		else if($_GET['message'] == 'empty_conpassword'){
			$conPasswordError='Confirm Password empty!';
		}
		else if($_GET['message'] == 'empty_gender'){
			$genderError='Gender empty!';
		}
		else if($_GET['message'] == 'empty_dob'){
			$dobError='Date of Birth empty!';
		}
		else if($_GET['message'] == 'password_missmatch'){
			$conPasswordError='Confirm Password does not match!';
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
    <title>Public Home</title>
</head>
<body>
    <table border='1' cellpadding="10" align="center" width="60%" style="border-collapse: collapse">
    <tr height="15px">
        <td align="left"><img src="img/logo.png" width="15%"></td>
        <td align="center"><a href="index.php">Home</a> | <a href="login.php">Login</a> | <a href="registration.php">Registration</a></td>
    </tr>
    <tr align="center" height="600px">
        <td colspan="2" align="center"width="60%">
            
        <form action="registartionValidation.php" method="POST">
		<fieldset>
			<legend>REGISTRATION</legend>
			<table align="center">

				<tr>
					<td>Name</td>
					<td>: <input type="text" name="name"> <span style="color:red"><?=$nameError?></span></td> 
				</tr>
				<tr><td colspan="2"><hr></td></tr>

				<tr>
					<td>Email </td>
					<td>: <input type="email" name="email">
						<abbr title="sampl@ample.com"> </abbr> <span style="color:red"><?=$emailError?></span>
					</td>
				</tr>

                <tr><td colspan="2"><hr></td></tr>

				<tr>
					<td>User Name</td>
					<td>: <input type="text" name="username"> <span style="color:red"><?=$usernameError?></span></td>
				</tr>

                <tr><td colspan="2"><hr></td></tr>
				<tr>
					<td>New Password</td>
					<td>: <input type="password" name="password"> <span style="color:red"><?=$passwordError?></span></td>
				</tr>

                <tr><td colspan="2"><hr></td></tr>
				
                <tr>
					<td>Confirm Password</td>
					<td>: <input type="password" name="cpassword"> <span style="color:red"><?=$conPasswordError?></span></td>
				</tr>
                <tr><td colspan="2"><hr></td></tr>

			</table>

				<fieldset>
					<legend>Gender</legend>
					<input type="radio" name="gender" value="Male">Male
					<input type="radio" name="gender" value="Female">Female
					<input type="radio" name="gender" value="Others">Others
					<span style="color:red"><?=$genderError?></span>
				</fieldset>
				<hr>

				<fieldset>
					<legend>Date of Birth</legend>
					<input type="date"  name="dob"> <span style="color:red"><?=$dobError?></span>
				</fieldset>
				<hr>
					
			 
                <input type="submit" name="submit">

                <input type="Reset" name="reset"> <span style="color:green"><?=$sucess;?></span><span style="color:red"><?=$error;?></span>

		</fieldset>

	</form>
        
        
        </td>
    </tr>
    <tr><td colspan="2" align="center" height="55px"><?php include_once('includes/footer.php');?></td></tr>
    </table>
</body>
</html>