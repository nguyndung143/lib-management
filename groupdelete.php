<?php 
session_start();
include 'data.php';
if(!isset($_SESSION['userName'])){
    header("location:index.php");
}
$dt = new database;
    if (isset($_GET['id'])){
        $id = $_GET['id'];
        $dt->command("DELETE from nhomtin where idnhom='$id'");
        header('location:groupadd.php');
    }
?>