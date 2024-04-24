<?php 
include 'top.php';
if(!isset($role) || $role != 2){
    header('location:index.php');
}
$alterSql = "ALTER TABLE nhomtin AUTO_INCREMENT = 1";
$dt->command($alterSql);
?>
    <div class="noidung col col-md-5 card card-body container">
        <div>
        <h3>Xử Lý Nhóm Tin</h3>
        <table width='50%' align="center">
                <tr>
                    <th>Tên Nhóm</th><th>Sửa</th><th>Xóa</th>
                </tr>
<?php
$dt->SELECT("SELECT * from nhomtin");
$i=0;
while($r = $dt->fetch()){
    $i++;
    $id = $r['idNhom'];
    $tennhom = $r['tenNhom'];
    echo"<tr>";
        echo"<td>$tennhom</td>";
        echo"<td><a href='groupupdate.php?id=$id'><i style='color:#000000' class='fa-solid fa-pen fa-lg'></i></a></td>";
        echo"<td><a href='groupdelete.php?id=$id'><i style='color:#000000' class='fa-solid fa-trash fa-lg'></i></a></td>";
    echo"</tr>";
}
        echo "</table> ";
        ?>
        <br><h4>Thêm Tên Nhóm:</h4>
        <form method="post">
        <div style="width:50%;" align="center" class="row">
                <div class="col-sm-9">
                    <input class="form-control" type="text" name="namegr" placeholder="Tên Nhóm">
                </div>
                <div class="col-sm-3">
                        <input type="submit" name="add" value="thêm mới">
                </div>
        </div>
        </form>
        <?php
        if (isset($_POST['add'])){
            if($dt->checknull($_POST['namegr']) ){
                    $name= addslashes($_POST['namegr']);
                    $dt->command("INSERT into nhomtin(tenNhom) value ('$name')");
                    header('location:groupadd.php');
            }
        }
        ?>
    </div>
</div>
<?php
include 'bottom.php';
?>