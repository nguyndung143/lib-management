<?php 
include 'top.php';
$alterSql = "ALTER TABLE bangtin AUTO_INCREMENT = 0";
$dt->command($alterSql);
if(!isset($role) || $role != 2){
    header('location:index.php');
}
if(isset($_GET['idn'])){
    $idn=$_GET['idn'];
    $dt->select("SELECT * FROM nhomtin WHERE idNhom='$idn'");
    $rows = $dt->fetch();
?>
<h4>Thêm bản Tin:<?php echo $rows['tenNhom'] ?></h4> 
<div class="noidung col col-xl-6 card card-body container">
    <form method="post" enctype="multipart/form-data">
        <h4>tieu de:</h4>
        <input type="text" style="width:100%;" name="tieude">
        <h4>trich dan</h4>
        <textarea name="trichdan" style="width:100%;"  cols="30" rows="10"></textarea>
        <h4>anh trich dan</h4>
        <input type="file" name="anhtrichdan" accept="image">
        <h4>noi dung</h4>
        <textarea name="noidung" style="width:100%;"  id="cknoidung" cols="30" rows="10"></textarea>
        <script type="text/javascript">
            ckeditor.replace("cknoidung");
        </script><br>
        <input type="submit" name="insert" value="chap nhan">
    </form>
<?php
if(isset($_POST['insert'])){
    $tieude= $_POST['tieude'];
    $trichdan=$_POST['trichdan'];
    //
    $anhtrichdan= $_FILES["anhtrichdan"]['name'];
    $tempname = $_FILES["anhtrichdan"]["tmp_name"];
    $folder = 'imgs/'.$anhtrichdan;
    move_uploaded_file($tempname, $folder);
    //
    $noidung = $_POST['noidung'];
    $noidung = addslashes($noidung);
    $dt->command("INSERT into bangtin (idNhom,tieude,trichdan,anhtrichdan,noidung) value ('$idn','$tieude','$trichdan','$anhtrichdan','$noidung')");
    header("location:news.php?idn=$idn");
}
}
?>
</div>
<?php   
include 'right.php';
?>