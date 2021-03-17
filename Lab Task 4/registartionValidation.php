<?php
    if (!isset($_POST['submit'])) {
        header('location: registration.php');
    }
    else{
        if (empty($_POST['name']) && empty($_POST['email']) && empty($_POST['username']) && empty($_POST['password']) && empty($_POST['cpassword']) && empty($_POST['gender']) && empty($_POST['dob'])){
            header('location: registration.php?message=all_empty');
        }
        else if (empty($_POST['name'])){
            header('location: registration.php?message=empty_name');
        }
        else if (empty($_POST['email'])){
            header('location: registration.php?message=empty_email');
        }
        else if (empty($_POST['username'])){
            header('location: registration.php?message=empty_username');
        }
        else if (empty($_POST['password'])){
            header('location: registration.php?message=empty_password');
        }
        else if (empty($_POST['cpassword'])){
            header('location: registration.php?message=empty_conpassword');
        }
        else if (empty($_POST['gender'])){
            header('location: registration.php?message=empty_gender');
        }
        else if (empty($_POST['dob'])){
            header('location: registration.php?message=empty_dob');
        }
        else if ($_POST['password'] != $_POST['cpassword']){
            header('location: registration.php?message=password_missmatch');
        }
        else{
            if(file_exists('database.json'))  
                {  
                    $current_data = file_get_contents('database.json');  
                    $array_data = json_decode($current_data, true);  
                    $extra = array(  
                            'name' => $_POST['name'],  
                            'email' => $_POST['email'],  
                            'username' => $_POST['username'],
                            'password' => $_POST['password'],
                            'gender' => $_POST['gender'],
                            'dob' => $_POST['dob']
                    );
                    
                    $array_data[] = $extra;  
                    $final_data = json_encode($array_data);
                    if(file_put_contents('database.json', $final_data))  
                    {  
                        header('location: registration.php?message=sucess');  
                    }
                }   
                else  
                {  
                    header('location: registration.php?message=not_exists');
                } 
        }

    }
?>