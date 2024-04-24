<?php 
include 'top.php';
if(!isset($role) || $role != 2){
    header('location:index.php');
}
// if (isset($_GET['id'])){
//     $id= $_GET['id'];
//     $dt->select("SELECT * from nhomtin where idNhom='$id'");
//     $r= $dt->fetch();
// }
?>
<div class="noidung col col-md-9 card card-body">
    <form action="" method="post">
        ten nhom:<input type="text" size="70" name="tennhom" value="
        <?php 
        if (isset($_GET['id'])){
            $id= $_GET['id'];
            $dt->select("SELECT * from nhomtin where idNhom='$id'");
            $r= $dt->fetch();
            echo $r['tenNhom'];
        }
        ?>"/>
        <input type="submit" name="update" value="chap nhan">
    </form>
</div>
<?php
if (isset($_POST['update']) & isset($_GET['id'])){
    $tennhom= $_POST['tennhom'];
    $id = $_GET['id'];
    $tennhom = addslashes($tennhom);
    $dt->command("UPDATE nhomtin set tenNhom='$tennhom' where idNhom=$id");
    header('location:groupadd.php');
}
?>
<?php
include 'right.php';
?>
<?php
include 'bottom.php';
?> 