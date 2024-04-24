<?php 
include 'top.php';
?>
</div>
   <form method="post">
    <div class="form-box container">
        <a>Đăng Ký Tài Khoản</a>
        <div align="center">
            <div>
                <input class="form-control" type="text" name="usrg" size="100" placeholder="Nhập Tên Tài Khoản">
            </div>
                <input class="form-control" type="password" name="passrg" size="25" placeholder="Nhập Mật Khẩu">
            </div>
            <div>
                <button class="input-group-text border-0" type="submit" name="regis">Đăng Ký</button>
            </div>
            <div>
            <?php
            if(isset($_POST['regis'])){
                if ($dt ->checknull($_POST['usrg']) && $dt ->checknumber($_POST['passrg'])){
                $usrg = addslashes($_POST['usrg']);
                $passrg = addslashes($_POST['passrg']);
                $dt->command("INSERT INTO dangnhap(userName,matkhau) value ('$usrg','$passrg')");
                }
            }
            ?>   
         </div>
      </div>
    </form>   
</div>