<?php
  session_start();
  include 'config/config.php';
?>
<?php
$nisn  = saring($_POST['nisn']);
// $tgl_lahir  = saring($_POST['tgl_lahir']);
$captcha  = saring($_POST['captcha']);
// $sql = $db->Execute("SELECT * FROM siswa WHERE nisn = '$nisn' AND tgl_lahir = '$_POST[tgl_lahir]'");
$sql = $db->Execute("SELECT * FROM siswa WHERE nisn = '$nisn' AND aktif='Y'");
$hasil = $sql->FetchRow();
$hitung = $sql->RecordCount();
if($captcha != $_SESSION['hasil']){
  echo "
    <script>
      alert('Hasil penjumlahan salah. Silahkan ulangi.');
      location.href='index.php';
    </script>
  ";
}else{
  if($hitung > 0){
      $db->Execute("UPDATE siswa SET login='Y' WHERE nisn='$nisn'");
      $_SESSION['nisn'] = $nisn;
      echo "
      <script>
        location.href='hasil.php';
      </script>
      ";


      echo "
      <script>
      alert('Anda belum bisa mengakses halaman ini. Terima kasih.');
        location.href='index.php';
      </script>
      ";


    }else{
      echo "
      <script>
        alert('No NISN tidak ditemukan');
        location.href='index.php';
      </script>
      ";
    }

}
  ?>
