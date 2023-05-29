<?php
  session_start();
  include 'config/config.php';
  include 'config/function_indotgl.php';
?>
<?php
    if(empty($_SESSION['nisn'])){
      echo "
      <script>
        alert('Anda tidak dapat mengakses halaman ini.');
        location.href='index.php';
      </script>
      ";
    }
    $sql = $db->Execute("SELECT * FROM siswa WHERE nisn = '$_SESSION[nisn]'");
    $hasil = $sql->FetchRow();
  ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>K E L U L U S A N | UPTD SMPN 4 BANJAR</title>
    <link href="assets/dist/css/bootstrap.css" rel="stylesheet">
    <link href="img/nepatba_ico.ico" rel="icon">
    <style media="screen">
      .judul{
        text-align: center;
      }

      .tidakdibagi{
        font-size: 14pt;
      }
        @media (max-width: 768px) {
          table.data, .data{
            font-size: 10pt;
          }
          .judul{
            text-align: left;
          }
          .judula{
            padding-left: 10px;
            font-size: 10pt;
          }


        }
    </style>
  </head>
  <body style="padding:20px">
<div class="row">
  <div class="col-md-2"></div>
  <div class="col-md-8 judul">
    <table width="100%">
      <tr>
        <td width="13%"><img src="img/logo_nepatba.png" width="70"></td>
        <td>
          <p class="judula"><b>PENGUMUMAN KELULUSAN <br>UPTD SMP NEGERI 4 BANJAR <br> TAHUN PELAJARAN 2020/2021 </b></p>
        </td>
        <td width="13%"><img src="img/banjar.png" width="55"></td>
      </tr>
    </table>
    <div style="height:2px;width:100%;background-color:#000;margin-top:10px;"></div>
  </div>
</div>

<br>
<?php
  // $sql2 = $db->Execute("SELECT * FROM siswa WHERE id_siswa='$hasil[id_siswa]'");
  // $hasil2=$sql2->FetchRow();
  $nama = $hasil['nama_siswa'];
  // $tempat_lahir = strtoupper($hasil['tempat_lahir']);
?>
<center>
  <?php if($hasil['bagikan']=='Y'){ ?>
      <!--<p class="data">Berdasarkan kalender pendidikan tahun pelajaran 2020/2021 untuk pembagian rapor semester ganjil di UPTD SMPN 4 Banjar akan dilaksanakan pada hari Sabtu 19 Desember 2020 dengan ketentuan sebagai berikut:</p>
      <ol>
        <li><p class="data">Untuk menghindari kerumunan di sekolah, maka untuk pembagian rapor sementara semester ganjil akan disampaikan melalui online/ daring</p></li>
        <li><p class="data">Rapor semester ganjil sementara tahun pelajaran 2020/2021 hanya bisa dibuka oleh siswa yang sudah TUNTAS (memiliki nilai) seluruh mata pelajaran. Untuk yang BELUM TUNTAS (tidak ada nilai mata pelajaran/kosong) pembagian rapornya ditunda sampai siswa tersebut menyelesaikan permasalahan nilai dengan guru mata pelajaran paling lambat 1 (satu) minggu sejak rapor sementara dibagikan yaitu pada hari Sabtu tanggal 26 Desember 2020.</p></li>
        <li><p class="data">Nilai rapor yang belum tuntas (kosong) harus diselesaikan secepatnya oleh siswa dengan menghubungi wali kelas dan guru mata pelajaran</p></li>
        <li><p class="data">Link aplikasi rapor dan kode log in akan dikirim melalui wali kelas masing-masing</p></li>
        <li><p class="data">Rapor sementara harus didownload dan dicetak / diprint untuk diperlihatkan kepada orang tua dan sebagai dokumen pribadi</p></li>
        <li><p class="data">Rapor sementara semester ganjil bisa dibuka hari Sabtu 19 Desember 2020 setelah pukul 12.00 WIB</p></li>
        <li><p class="data">Hari libur semester ganjil tahun pelajaran 2020/2021 sejak 21 Desember 2020 s.d 10 Januari 2021.</p></li>
      </ol>
      <br>
      <br>
      <br>-->
      <p class="data"><b>Berdasarkan hasil keputusan rapat dewan guru UPTD SMP Negeri 4 Banjar pada tanggal 3 Juni 2021, dengan ini:</b></p>
        <table class="data" border="0">
          <tr>
            <td width="200">NAMA PESERTA DIDIK</td>
            <td>: </td>
            <td><b><?php echo "$hasil[nama_siswa]" ?></b> </td>
          </tr>
          <tr>
            <td>NISN</td>
            <td width="15">:</td>
            <td><b><?php echo "$hasil[nisn]" ?></b> </td>
          </tr>
          <tr>
            <td>KELAS</td>
            <td>:</td>
            <td><b><?php echo "$hasil[kelas]" ?></b> </td>
          <!-- </tr>
          <tr>
            <td>TEMPAT, TANGGAL LAHIR</td>
            <td>: </td>
            <td><b><?php echo "$tempat_lahir, ".tgl_indo($hasil['tgl_lahir']); ?></b> </td>
          </tr> -->
        </table>
    <table width="100%">
      <tr>
        <td align="center">
          <!--<br>
          dinyatakan <br> <h2><b>N A I K &nbsp;&nbsp;K E L A S</b></h2> ke tingkat selanjutnya di UPTD SMPN 1 Banjar. Silahkan download Rapor anda melalui tombol di bawah.<br><br>-->
        </td>
      </tr>
    </table>
    <button type="button" class="btn btn-success" onclick="location.href='<?php echo "kelulusan/$hasil[kelas]/SK_Kelulusan_$hasil[kelas]_".$nama.".pdf" ?>'">DOWNLOAD SURAT KEPUTUSAN</button><br><br>
    <!--<h6 style="font-size:9pt;"><i>Catatan :<br>Rapor asli yang sudah ditandatangani kepala sekolah dan wali kelas serta dibubuhi stempel sekolah, akan diserahkan pada saat kondisi sudah normal sesuai dengan perkembangan situasi dan kondisi dari Pandemi Covid-19.</i></h6><br>-->
<?php }else{
  ?>
  <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
    <p class="tidakdibagi">Mohon maaf ananda <b><?php echo strtoupper($hasil['nama_siswa']); ?></b> belum bisa membuka Rapor Semester Ganjil dikarenakan ada mata pelajaran yang <b>BELUM TUNTAS</b>. Silahkan hubungi wali kelas.</p>
    </div>
  <div class="col-md-2"></div>
  </div>
  <?php
} ?>
<button type="button" class="btn btn-danger" onclick="location.href='logout.php'">LOGOUT</button>
</center>
  </body>
</html>
