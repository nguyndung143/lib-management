<?php 
    session_start();
    unset($_SESSION['userName']);
    unset($_SESSION['matkhau']);
    header('location:index.php');
?>