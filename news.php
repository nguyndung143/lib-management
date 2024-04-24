<?php 
include 'top.php';
if (isset($_GET['idn']) && $dt->checknull($_GET['idn'])){
    $idn = $_GET['idn'];
    $idn = addslashes($idn);
    $dt->select(" SELECT tenNhom FROM nhomtin WHERE idNhom='$idn'");
    $row = $dt->fetch();
?>
<div class="noidung col col-xl-6 card card-body container">
    <div class="title__news card-header">
        <div class="col col-md-12">
            <div class="row">
                <div class="col-md-10">
                    <h3>
                    <?php echo $row['tenNhom'];?>
                    </h3>
                </div>
                    <div class="col-md-2"> 
                    <?php
                    if(isset($role) && $role == 2){
                    echo "<a href='newsadd.php?idn=$idn'>them ban tin moi</a> ";
                    }
                    echo"</div>";
            echo"</div>";
        echo"</div>";
   echo"</div>";
$dt->select("SELECT * FROM bangtin WHERE idNhom ='$idn' ORDER BY idTin DESC");
if($dt->fetch()){
    while($r = $dt->fetch()){
        $id = $r['idTin'];
        $idn = $r['idNhom'];
        $tieude = $r['tieude'];
        $trichdan = $r['trichdan'];
        echo "<a href='newsdetail.php?id=$id&idn=$idn'>$tieude</a>";
        echo "</br>$trichdan<br>";
    }
}else{
   echo"Hiện tại không có bản tin nào";
}
}
?> 
</div>
<?php include 'right.php';?>