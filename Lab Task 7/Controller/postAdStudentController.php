<?php
session_start();
require_once '../Controller/studentInfoController.php';
require_once '../Model/model.php';





if (isset($_POST['submit'])) {


  $yournameErr= $emailErr=$salaryErr=$coursenameErr=$commentErr="";
 $name = $emailfromDB =  "";

 $flag=1;
 if(isset($_SESSION['username']))
 {
 $data = fetchStudent($_SESSION['username']);


   if($data!=NULL)
   {
     foreach ($data as $i => $student):

          $name= $student['NAME'] ;
          $emailfromDB=$student['EMAIL'];
     endforeach;
   }
 }




  if (empty($_POST["yourname"])) {
    $yournameErr = "Name is required";
    $flag=0;
  } else {

       $yourname = test_input($_POST["yourname"]);



      if ($name!=$yourname) {
         $yournameErr = "Your name doesnot match";
         $flag=0;
       }

      else {
        $yourname = test_input($_POST["yourname"]);
      }
    }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
    $flag=0;
  } else {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
      $flag=0;
    }
    else {

      if ($emailfromDB!=$email) {
         $emailErr = "Your mail doesnot match";
         $flag=0;
       }
    }
  }

  if (empty($_POST["salary"])) {
    $salaryErr = "Salary is required";
    $flag=0;
  } else {

    $salary=test_input($_POST["salary"]);


    if(!is_numeric($salary))
    {
      $salaryErr="Please input Numeric Number";
      $flag=0;
    }
    else {

          if($salary>10000 || $salary<500)
          {
              $salaryErr=" Salary must be between 500 to 10000";
              $flag=0;
          }

              }
          }




    if (empty($_POST["coursename"])) {
      $coursenameErr = "Course Name Name is required";
      $flag=0;
    }
    else {
     $coursename = test_input($_POST["coursename"]);

    }

    if(empty($_POST["comment"]))
    {
      $commentErr= "Comment is required";
      $flag=0;
    }
    else {
      $comment=test_input($_POST["comment"]);
      if(strlen($comment)<20)
      {
        $commentErr="Comment must not be less than eight (20) characters";
        $flag=0;
      }

      }




    if(isset($_POST["submit"]) && $flag==1)
    {
      $data['name']=$yourname;
      $data['email']=$email;
      $data['coursename']=$coursename;
      $data['salary']=$salary;
      $data['comment']=$comment;

      if (addPostAdInfo($data)) {
        header("location:../View/dashboardStudentView.php");
      }

      else {
        echo 'Could not add!!';
      }

     }



     if(isset($_POST["submit"]) && $flag==0)
     {
       $args = array(
        'yournameErr' => $yournameErr,
        'emailErr' => $emailErr,
        'salaryErr' => $salaryErr,
        'coursenameErr' => $coursenameErr,
        'commentErr' => $commentErr,

     );
          header("location:../View/postAdStudentView.php?" . http_build_query($args));
     }




} else {
   header("location:../View/dashboard.php");
 }



function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
