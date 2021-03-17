<?php
    $usernameError=$passwordError="";
    if(isset($_GET['message']))
    {
        if($_GET['message'] == "both_empty"){
            $usernameError="Username Empty!";
            $passwordError="Password Empty!";
        }
        else if($_GET['message'] == "empty_username"){
            $usernameError="Username Empty!";
        } 
        else if($_GET['message'] == "empty_password"){
            $passwordError="Password Empty!";
        }
        else if($_GET['message'] == "wrong_password"){
            $passwordError="Password Empty!";
        }
        else if($_GET['message'] == "wrong_password"){
            $passwordError="Password Empty!";
        }
        else if($_GET['message'] == "invalid_user"){
            $usernameError="Invalid User!";
        }

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <table border='1' cellpadding="10" align="center" width="60%" style="border-collapse: collapse">
    <tr height="15px">
        <td align="left"><img src="img/logo.png" width="15%"></td>
        <td align="center"><a href="index.php">Home</a> | <a href="login.php">Login</a> | <a href="registration.php">Registration</a></td>
    </tr>

    <tr align="center" height="500px">
        <td colspan="2" align="center"width="60%">
            
                <form action="loginValidation.php" method="POST">
                    <fieldset>
                        <legend>LOGIN</legend>
                        <table align="center" height="100px">
                        <tr>
                            <td>User Name :</td>
                            <td><input type="text" name="username"> <span style="color:red;"><?=$usernameError;?></span></td> 
                        </tr>
                        <tr>
                            <td>Password :</td>
                            <td><input type="password" name="password"> <span style="color:red;"><?=$passwordError;?></span></td>
                        </tr>
                        <tr><td colspan="2"><hr></td></tr>
                        <tr>
                            <td><input type="checkbox" name="rememberMe"></td>                            
                            <td>Remember Me</td>
                        </tr>
                        <tr>
                            <td><input type="submit" name="submit"></td>
                            <td><a href="forgotPassword.php">Forgot Password?</a></td>
                        </tr>
                        </table>
                    </fieldset>
                </form>
            
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        </td>
    
    
    
    
    
    
    
    
    
    
    </tr>
    <tr><td colspan="2" align="center" height="55px"><?php include_once('includes/footer.php');?></td></tr>
    </table>
</body>
</html>