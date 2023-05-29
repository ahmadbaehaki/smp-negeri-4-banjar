<?php
	require_once("adodb5/adodb-exceptions.inc.php");
	require_once("adodb5/adodb.inc.php");
	$dbdriver="mysqli";
	$server="localhost";
	$user="root";
	$password="";
	$database="bagirapor";
	$db = ADONewConnection($dbdriver);
	$db->Connect($server, $user, $password, $database);

	function saring($data){
	  $filter = stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES)));
	  return $filter;
	}

	// $http = 'http' . ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') ? 's' : '') . '://';
	// $fo = str_replace("index.php","", $_SERVER['SCRIPT_NAME']);
	// $base = "$http".$_SERVER['SERVER_NAME']."" . $fo;
?>
