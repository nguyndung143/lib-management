<?php 
session_start();
include 'data.php';
$dt = new database;
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $dt->command("DELETE FROM bangtin WHERE idTin='$id'");
    $dt = new database;
    header('location:index.php');
}else{
    echo"<div class ='container' align='center'>";
    echo"<h1>không có dữ liệu để xóa</h1>";
    echo "<a class='nav-link active' href='newsdetail.php'>trở về</a>";
    echo "</div>";
}
?>