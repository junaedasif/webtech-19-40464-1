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
        <td align="center"><a href="publicHome.php">Home</a> | <a href="login.php">Login</a> | <a href="registration.php">Registration</a></td>
    </tr>

    <tr align="center" height="500px">
        <td colspan="2" align="center"width="60%">
            
                <form>
                    <fieldset>
                        <legend>FORGOT PASSWORD</legend>
                        <table align="center" height="100px">
                        <tr>
                            <td>Enter Email :</td>
                            <td><input type="mail" name="email"></td>
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