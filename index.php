<?php 
include 'top.php';
?>
<div class="noidung col col-md-9 card card-body">
      <h3 class="card-header">Tin Mới Nhất</h3>
  <?php 
  $dt->select('SELECT * FROM bangtin ORDER BY idTin DESC LIMIT 10');
  while ($r = $dt->fetch()){
      $id = $r['idTin'];
      $idn = $r['idNhom'];
      $tieude = $r['tieude'];
      $trichdan = $r['trichdan'];
      $anhtrichdan = $r['anhtrichdan'];
      echo "<a href='newsdetail.php?idn=$idn&id=$id'>$tieude</a>";
      echo "<img src='imgs/$anhtrichdan' style='width:100px;height:80px;'>";
      echo "</br>$trichdan<br>";

  }
  ?>
  </div>
  <?php 
    include 'right.php';
  ?>
</div>
</div>
<?php 
  include 'bottom.php';
?> 
