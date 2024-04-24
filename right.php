<div class="col-xl-3">
    <div id="right" class="col ms-auto card" >
            <div class="card-header row col-xs-12 container">
                <div class="title_menu">
                    <p>menu chinh</p>
                    <div>
                    <?php 
                        if(isset($role) && $role == 2){
                            echo "<a href='groupadd.php'><i class='fa-solid fa-gear fa-lg gear_menu' style='color: #000000;'></i></a>" ;
                        }
                    ?>
                    </div>
                </div>
            </div>
            <div id="menu" >
                <ul class="namegr">
                    <?php
                    $dt->select("SELECT * FROM nhomtin ORDER BY idNhom ASC");
                    while($r = $dt->fetch()){
                        $idn = $r['idNhom'];
                        $name = $r['tenNhom'];
                        echo "<li><a class='nav-link active' href = 'news.php?idn=$idn'>$name</a></li>";
                    }
                    ?>
                </ul>
            </div>
    </div>
</div>