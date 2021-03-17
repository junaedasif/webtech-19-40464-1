<?php
    require_once('includes/header.php');
    if(isset($_POST['submit'])){
        if(empty($_POST['name']) && empty($_POST['email']) && empty($_POST['gender']) && empty($_POST['dob']))
        {
            header('location: editProfile.php?message=all_empty');
        }
        else if(empty($_POST['name']))
        {
            header('location: editProfile.php?message=empty_name');
        }
        else if(empty($_POST['email']))
        {
            header('location: editProfile.php?message=empty_email');
        }
        else if(empty($_POST['gender']))
        {
            header('location: editProfile.php?message=empty_gender');
        }
        else if(empty($_POST['dob']))
        {
            header('location: editProfile.php?message=empty_dob');
        }
        else {
            if (file_exists('database.json')){  
                $data = file_get_contents("database.json");  
                $data = json_decode($data, true);  
                
                foreach($data as $key => $value)  
                {
                    if($value['username']==$_SESSION['username']){
                            $data[$key]['name'] = $_POST['name'];
                            $data[$key]['email'] = $_POST['email'];
                            $data[$key]['gender'] = $_POST['gender'];
                            $data[$key]['dob'] = $_POST['dob'];
                    }

                }
                $userData = json_encode($data);
                file_put_contents('database.json', $userData);
                header('location: editProfile.php?message=sucess');
                $message="Profile Updated sucessfully.";
            }
            else  
                {  
                    header('location: editProfile.php?message=not_exists');
                } 
        }
        
    }
    else  
    {  
        header('location: login.php');
    }
?>