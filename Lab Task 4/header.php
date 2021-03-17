<?php
    if(!isset($_SESSION)){
        session_start();
    }
    if(!isset($_SESSION['start']))
    {
        header('location: login.php');
    }
?>