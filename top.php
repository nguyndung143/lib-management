<?php 
session_start();
include 'data.php';
$dt = new database;
if(isset($_SESSION['userName'])){
    $user = $_SESSION['userName'];
    $dt->select("SELECT * FROM dangnhap where userName='$user'");
    if($r = $dt->fetch()){
        $role = $r['role'];
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>trang thong tin tong hop ve cong nghe thong tin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript" src="ckeditor5-build-classic/ckeditor.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body >
    <div id="top" class="card-deck" >
        <div id="menutop" class="col container-fluid row col-md-12" >
            <ul class="navbar navbar-expand-lg col-md-9"  >
                <div id="nav" class="navbar nav ">
                    <li><?php 
                            if(isset($_SESSION['userName'])){
                                echo "<a class='nav-link' href='logout.php'>Thoát</a>";
                            } else {
                                echo "<a class='nav-link' href='login.php' class=''>Login</a>";
                            }
                    ?></li>
            <ol class="list-unstyled">
                <li class="navbar-item"><a class="nav-link active" href="index.php">Home</a></li>
            </ol >
                <li class="nav-item"><a class="nav-link active " href="https://www.youtube.com/" target="_blank">youtube</a></li>
                <li class="nav-item"><a class="nav-link active" href="https://www.facebook.com/" target="_blank">facebook</a></li>
                <li class="nav-item"><a class="nav-link active" href="https://mail.google.com/mail/u/0/#inbox" target="_blank">gmail</a></li>
                <li class="nav-item"><a class="nav-link active" href="https://www.twitch.tv/" target="_blank">twitch</a></li>
            </div>
            
            </ul>
            <div class="col-md-3" align="right">
                <form class="row col-md-12 sr__nav" >
                <input type="search"  class="col-md-10 " placeholder="Tìm Kiếm" />
                        <button class="input-group-text border-0 col-md-2" id="search-addon">
                            <i class="fas fa-search"></i>
                        </button>
                    </form>
             </div>
        </div>
    </div>
 <div class="container col-xl-12" id="main">
    <div  class="row">
 
    
</body>
</html>