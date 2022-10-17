<?php 
  $h = 'localhost';
  $u = '19215081';
  $p = '';
  $db = 'db_komentar';

  $conn = mysqli_connect($h, $u, $p, $db);

  if (!$conn) {
    echo 'gagal terhubung';
  }
?>