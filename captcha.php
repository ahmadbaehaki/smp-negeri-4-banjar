<?php
  $angka1 = rand(1,9);
  $angka2 = rand(1,9);
  $hasil = $angka1 + $angka2;
  $_SESSION['angka1'] = $angka1;
  $_SESSION['angka2'] = $angka2;
  $_SESSION['hasil'] = $hasil;
?>
