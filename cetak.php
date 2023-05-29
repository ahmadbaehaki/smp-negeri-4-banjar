<?php
 // Define relative path from this script to mPDF
 session_start();
 require_once("config/config.php");
// require_once"config/function_indotgl.php";
 $sql = $db->Execute("SELECT * FROM siswa WHERE no_peserta = '$_SESSION[no_peserta]'");
 $hasil = $sql -> Fetchrow();
 $siswa = strtoupper($hasil['nama_siswa']);
 $siswa = str_replace(' ', '_',$siswa);

// $nama_dokumen=$no_urut_pendaftaran.'_'.$hasil['nisn'].'_'.$siswa.'_BERKAS_PENDAFTARAN'; //Beri nama file PDF hasil.
$nama_dokumen='SURAT_TANDA_LULUS_'.$siswa; //Beri nama file PDF hasil.
define('_MPDF_PATH','MPDF6/');
include(_MPDF_PATH . "mpdf.php");
$mpdf=new mPDF('utf-8', 'FOLIO','','','15','15','10','10'); // Create new mPDF Document // Create new mPDF Document
// $mpdf->debug = true;

//Beginning Buffer to save PHP variables and HTML tags
ob_start();
$tgl=date('Y-m-d');
$tahun = date('Y');
$bln = date('m');
?>
<html>
<body style="font-family: 'times new roman';font-size: 11pt">

  <!-- LEMBAR 2-->
  <table border="0" width="100%">
  	<tr>
  		<td width="15%"><img src="img/banjar.jpg" width="75"> </td>
  		<td width="75%">
  			<center>
  				<font style="font-size:13pt; line-height:30px;">PEMERINTAH KOTA BANJAR</font><br>
  				<font style="font-size:13pt; line-height:30px;">DINAS PENDIDIKAN DAN KEBUDAYAAN</font><br>
  				<font style="font-size:16pt; line-height:30px;font-weight: bold;"> SMP NEGERI 7 BANJAR</font><br>
  				<font style="line-height:1.2em; font-size: 10pt;">
  				Jalan Siliwangi No. 181 Telp. 0265-2732084 Kota  Banjar 46333
        </font>
  			</center>
  		</td>
      <td><src="img/banjar.png" width="75"></td>
  	</tr>
  </table>
  <!-- <hr style="border-bottom : double 4px #000;"> -->
  <div style="width: 100%;height: 1px;background-color: #000;margin-bottom: 2px;"></div>
  <div style="width: 100%;height: 3px;background-color: #000"></div>
    <br>
  <table width="100%" style="font-size:10pt">
    <tr>
      <td align="center">
        <b>
          KEPUTUSAN<br>
          KEPALA SEKOLAH MENENGAH PERTAMA NEGERI 7 BANJAR<br>
          Nomor :  421 / 110 - SMPN7 / 2020<br>
          <i>T E N T A N G</i> <br>
          KELULUSAN SISWA KELAS IX (SEMBILAN) SMP NEGERI 7 BANJAR<br>
          TAHUN PELAJARAN 2019 / 2020<br><br><br>
          <span><i>KEPALA SMP NEGERI  7 BANJAR</i> </span>
        </b>
      </td>
    </tr>
  </table>
  <br>
  <table border="0" width="100%" style="font-size:9pt;text-align:justify;">
    <tr>
      <td width="20%" valign="top">Menimbang</td>
      <td width="3%" valign="top">:</td>
      <td width="3%" valign="top">a.</td>
      <td width="74%">bahwa untuk mengetahui hasil belajar peserta didik dan untuk memperoleh keterangan mengenai mutu pendidikan pada sekolah menengah pertama, telah diselenggarakan penilaian secara nasional pada akhir masa satuan pendidikan.</td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td valign="top">b.</td>
      <td>bahwa sebagai tindak lanjut dari Keputusan Kepala Dinas Pendidikan Propinsi Jawa Barat dipandang perlu menetapkan Keputusan Kepala Sekolah Menengah Pertama Negeri 7 Banjar tentang Kelulusan Siswa Kelas IX (Sembilan)  SMP Negeri 7 Banjar Tahun Pelajaran 2019/2020.<br><br></td>
    </tr>
    <tr>
      <td>Mengingat</td>
      <td></td>
      <td>1.</td>
      <td>Undang-Undang Nomor 20 Tahun 2003 tentang Sistem Pendidikan Nasional.</td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td valign="top">2.</td>
      <td>Peraturan Pemerintah Nomor 28 Tahun 1990 tentang Pendidikan Dasar (Lembaran Negara Tahun 1990 Nomor 36, Tambahan Lembaran Negara Nomor 3412) sebagaimana telah diubah dengan Peraturan Pemerintah Nomor 55 Tahun 1998 (Lembaran Negara Tahun 1998 Nomor 90, Tambahan Lembaran Negara Nomor 3763).</td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td valign="top">3.</td>
      <td valign="top">Peraturan Pemerintah Nomor 25 Tahun 2000 tentang Kewenangan Pemerintah dan Kewenangan Propinsi sebagai Daerah Otonom (Lembaran Negara Tahun 2000 Nomor 54), Tambahan Lembaran Negara Nomor 3952).</td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td>4.</td>
      <td>Peraturan pemerintah No. 19 Tahun 2005 tentang Standar Nasional Pendidikan.</td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td>5.</td>
      <td>Permen Diknas RI No. 23  tahun 2016 tentang Standar Penilaian Pendidikan.</td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td valign="top">6.</td>
      <td>Permen Dikbud No. 20  tahun 2016 tentang Standar Kompetensi Lulusan Pendidikan Dasar dan Menengah.</td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td valign="top">7.</td>
      <td>Surat  Edaran Nomor 4 Tahun 2020 tentang Pelaksanaan Kebijakan pendidikan dalam masa darurat  Corona Virus Disease (Covid-19).<br><br></td>
    </tr>
    <tr>
      <td>Memperhatikan</td>
      <td>:</td>
      <td>1.</td>
      <td>Siswa telah meyelesaikan semua program pada satuan Pendidikan.</td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td>2.</td>
      <td>Siswa memperoleh nilai minimal baik untuk sikap dan perilaku.</td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td>3.</td>
      <td>Kelulusan berdasarkan nilai lima semester terakhir.</td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td>4.</td>
      <td>Hasil Rapat Dewan Guru  SMP Negeri 7  Banjar tanggal  03 Juni 2020<br><br></td>
    </tr>
    <tr>
      <td colspan="4" align="center" style="font-weight:bold;"><br><br>M E M U T U S K A N</td>
    </tr>
    <tr>
      <td>Menetapkan</td>
      <td>:</td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td>Pertama</td>
      <td>:</td>
      <td colspan="2">Bahwa</td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td colspan="2">
        <table border="0" width="100%">
          <tr>
            <td width="30%">Nama</td>
            <td width="3%">:</td>
            <td><b><?php echo "$hasil[nama_siswa]" ?></b> </td>
          </tr>
          <tr>
            <td>Nomor Ujian Nasional </td>
            <td>:</td>
            <td><b><?php echo "$hasil[no_peserta]" ?></b><br><br></td>
          </tr>
          <tr>
            <td colspan="3"><br>Dinyatakan <b>LULUS/<span style="text-decoration:line-through">TIDAK LULUS</span></b> dalam menempuh pendidikan di SMPN 7 Banjar.<br><br></td>
          </tr>
        </table>
      </td>
    </tr>
    <tr>
      <td valign="top">Kedua</td>
      <td valign="top">:</td>
      <td colspan="2">Keputusan ini berlaku sejak tanggal ditetapkan dan apabila terdapat kekeliruan dalam penetapan ini akan diadakan perbaikan sebagaimana mestinya.</td>
    </tr>
  </table>
  <br>
  <br>
  <!-- <table border="0" width="100%" style="font-size:10pt">
    <tr>
      <td width="50%"></td>
      <td align="left">
        Ditetapkan di  : Banjar<br>
      <div style="border-bottom:1px solid #000;padding-bottom: 5px;margin-bottom:5px;">
        Pada Tanggal  : 05 Juni 2020
      </div>
      <br>
Kepala UPTD SMP Negeri 7 Banjar,

<br>
<br>
<br>
<br>
<br>
<br>
<b>Drs. ACE MAMAN SETIAMAN, M.Pd.</b><br>
NIP. 196809031998031003

      </td>
    </tr>
  </table> -->
<table border="0" width="100%">
  <tr>
    <td width="50%"></td>
    <td>
      <img src="img/ttd2.jpg" height="200px">
    </td>
  </tr>
</table>
<!-- Pisah -->


</body>
</html>
<?php
$html = ob_get_contents(); //Proses untuk mengambil hasil dari OB..
ob_end_clean();
$mpdf->WriteHTML(utf8_encode($html));
$mpdf->Output($nama_dokumen.".pdf" ,'I');
exit;
?>
