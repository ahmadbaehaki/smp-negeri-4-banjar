 <?php
include ("adodb-exceptions.inc.php");
include("adodb.inc.php");
$dbdriver="postgres";
$server="localhost";
$user="postgres";
$password="benar";
$database="simsmk";
$db = ADONewConnection($dbdriver); 

         $db->debug = false;

         $db->Connect($server, $user, $password, $database);
 $rs = $db->Execute("SELECT * FROM t_modul");
 if ($rs === false) die("failed");  
 
 
if ($rs) {

         while ($o = $rs->FetchRow()) {

                 echo $o['id_modul'].",". $o['nama_modul']."<BR>";

         }

} 

foreach ($rs as $o) {
     echo $o['id_modul'].",". $o['nama_modul']."<BR>";
}

try {
   $db->Execute("select badsql from badtable teee");
} catch (exception $e) {
    echo"eror<br>";
}

$ketemu=$rs->RecordCount();
echo"$ketemu";
 ?>
