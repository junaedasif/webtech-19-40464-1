<?php
require_once '../Model/model.php';


if (isset($_POST['updateProduct'])) {

  $name=$buyingPrice=$sellingPrice="";

  $flag=1;

  function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
  }


   if (empty($_POST["name"])) {
    echo "Name is required";
     $flag=0;
   }
   else {
    $name = test_input($_POST["name"]);

     if (!preg_match("/^[a-zA-Z-. ]*$/",$name)) {
        echo "Only letters and white space allowed";
         $flag=0;
      }

   }

   if(empty($_POST["buyingPrice"]))
   {
     echo "Buying Price is required";
      $flag=0;
   }
   else {
     $buyingPrice=test_input($_POST["buyingPrice"]);
     if($buyingPrice<=0)
     {
       echo "Buying Price cannot be zero or less than zero";
        $flag=0;
     }

   }

   if(empty($_POST["sellingPrice"]))
   {
     echo "Selling Price is required";
      $flag=0;
   }
   else {
     $sellingPrice=test_input($_POST["sellingPrice"]);
     if($sellingPrice<=0)
     {
       echo "Selling Price cannot be zero or less than zero";
        $flag=0;
     }

   }



  if(isset($_POST['updateProduct']) && $flag==1)
  {
    $data['name'] = $_POST['name'];
    $data['buyingPrice'] = $_POST['buyingPrice'];
    $data['sellingPrice'] = $_POST['sellingPrice'];


    if (updateProduct($_POST['id'], $data)) {
      echo 'Successfully updated!!';
      //redirect to showStudent
      header('Location: ../View/showProduct.php?id=' . $_POST["id"]);
    }
    else {
      echo "Update unsuccessful!!";
    }
  }




} else {
	echo 'You are not allowed to access this page.';
}


?>
