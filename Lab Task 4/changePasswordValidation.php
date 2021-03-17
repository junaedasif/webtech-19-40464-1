<?php
    require_once('includes/header.php');
    if(isset($_POST['submit'])){
        if(empty($_POST['oldPassword']) && empty($_POST['newPassword']) && empty($_POST['retypeNewPassword']))
        {
            header('location: changePassword.php?message=all_empty');
        }
        else if(empty($_POST['oldPassword']))
        {
            header('location: changePassword.php?message=empty_oldPassword');
        }
        else if(empty($_POST['newPassword']))
        {
            header('location: changePassword.php?message=empty_newPassword');
        }
        else if(empty($_POST['retypeNewPassword']))
        {
            header('location: changePassword.php?message=empty_retypeNewPassword');
        }
        else {
            if (file_exists('database.json'))  
            {  
                $data = file_get_contents("database.json");  
                $data = json_decode($data, true);  
                
                foreach($data as $key => $value)  
                {

                    if($value['username']==$_SESSION['username']){
                        if(($value['password'] == $_POST['oldPassword']) && ($_POST['newPassword'] != $_POST['retypeNewPassword'])){
                            header('location: changePassword.php?message=missmatch');
                            break;
                        }
                        else if(($value['password'] == $_POST['oldPassword']) && ($_POST['newPassword'] == $_POST['retypeNewPassword'])){
                            $data[$key]['password']=$_POST['newPassword'];
                        }
                    }

                }
                $userData = json_encode($data);
                file_put_contents('database.json', $userData);
                header('location: changePassword.php?message=sucessfull');
                
            }
            else  
                {  
                    header('location: changePassword.php?message=not_exists');
                } 
        }
        
    }
    else  
    {  
        header('location: login.php');
    }
?>