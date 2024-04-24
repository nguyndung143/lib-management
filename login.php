<?php 
include 'top.php';
?>
</div>
   <form method="post">
    <div class="form-box container">
        <div id="lgform" align="center">
             <h3>Đăng Nhập Hệ Thống</h3>
            <div>
                <input class="form-control" type="text" name="user" size="100" placeholder="Tài Khoản">
            </div>
            <div>
                <input class="form-control" type="password" name="pass" size="25" placeholder="Mật Khẩu">
            </div>
            
            <div style="width: 7.3em;
    height: 2em;" name="bt__login" >
                <button class="input-group-text border-0" type="submit" name="login">Đăng Nhập</button>
            </div>
            <?php
            if(isset($_POST['login'])){
                if ($dt ->checknull($_POST['user']) && $dt ->checknumber($_POST['pass'])){
                $user = addslashes($_POST['user']);
                $pass = addslashes($_POST['pass']);
                $dt->select("SELECT * FROM dangnhap where userName='$user' and matkhau='$pass'");
                if($dt->fetch()){
                    $_SESSION['userName'] = $user;
                    header('location:index.php');
                }else{
                    echo "<script type='text/javascript'>alert('Đăng Nhập thất bại, xin mời nhập lại.');</script>";
                }
                }else{
                    echo "<script type='text/javascript'>alert('mời bạn nhập thông tin tài khoản');</script>";
                }
                }
            ?> 
            </div>
            <a style="color:white;" class="nav-link" href="register.php">Đăng ký Tài Khoản</a>
         </div>
      </div>
    </form>   
</div>