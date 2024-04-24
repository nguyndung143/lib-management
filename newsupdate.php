<?php 
include 'top.php';
if(!isset($role) || $role != 2){
    header('location:index.php');
}
if(isset($_GET['id']) && isset($_GET['idn'])){
    $id= $_GET['id'];
    $idn = $_GET['idn'];
    $id = addslashes($id);
    $idn= addslashes($idn);
    $dt->select("SELECT * from bangtin where idTin='$id'");
    $r = $dt->fetch();
?>
<div class="noidung col col-xl-6 card card-body container">
<form action="" method="post">
        <h4>tiêu đề:</h4>
        <input type="text" style="width:100%;" name="tieude" value="<?php echo $r['tieude'] ?>">
        <h4>trích dẫn</h4>
        <textarea name="trichdan" style="width:100%;" cols="30" rows="10"><?php echo $r['trichdan'] ?></textarea>
        <h4>ảnh trích dẫn</h4>
        <input type="file" style="width:100%;" name="anhtrichdan" accept="image/*" value="<?php echo $r['anhtrichdan'] ?>">
        <h4>nội dung</h4>
        <textarea name="noidung" style="width:100%;" id="cknoidung" cols="30" rows="10"><?php echo $r['noidung'] ?></textarea>
        <input type="submit" name="update" value="Chấp nhận">
    </form>
<?php
if(isset($_POST['update'])){
    $tieude= $_POST['tieude'];
    $trichdan = $_POST['trichdan'];
    $anhtrichdan=$_POST['anhtrichdan'];
    $noidung= $_POST['noidung'];
    // $noidung = addslashes($noidung);
    $dt->command("UPDATE bangtin set tieude='$tieude',trichdan='$trichdan',anhtrichdan='$anhtrichdan',noidung='$noidung' where idTin='$id'");
    header("location:newsdetail.php?id=$id&idn=$idn");
    }
}
?>
</div>
<?php 
include 'right.php';
?>