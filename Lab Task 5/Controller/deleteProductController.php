<?php

require_once '../Model/model.php';

if (deleteProduct($_POST['id'])) {
    header('Location: ../View/showAllProducts.php');

}

 ?>
