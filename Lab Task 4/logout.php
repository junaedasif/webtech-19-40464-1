<?php
session_start();
session_destroy();
setcookie('rememberMe', 'true',  time()-180, '/');
setcookie('Valid', 'true',  time()-60, '/');
header('location: login.php');  //Redirecting to login page.
?>