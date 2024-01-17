<?php 
    session_start();
    unset($_SESSION['senha']);
    unset($_SESSION['email']);
    header('Location:index.php');

?>