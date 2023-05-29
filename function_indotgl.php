<?php
	function tgl_indo($tgl){
			$tanggal = substr($tgl,8,2);
			$bulan = getBulan(substr($tgl,5,2));
			$tahun = substr($tgl,0,4);
			return $tanggal.' '.strtoupper($bulan).' '.$tahun;
	}
	function tanggal($tgl){
			$tanggal = substr($tgl,8,2);
			return $tanggal;
	}
	function bulan($tgl){
			$bulan = getBulan(substr($tgl,5,2));
			return $bulan;
	}

	function tahun($tgl){
			$tahun = substr($tgl,0,4);
			return $tahun;
	}
	function waktu($tgl){
			$jam = substr($tgl,11,2);
			$menit = substr($tgl,14,2);
			return $jam.':'.$menit;
	}

	function hari($tgl){
			$hari = date('l', strtotime($tgl));
			if($hari=='Sunday'){
				$hari='Minggu';
			}elseif($hari=='Monday'){
				$hari='Senin';
			}elseif($hari=='Tuesday'){
				$hari='Selasa';
			}elseif($hari=='Wednesday'){
				$hari='Rabu';
			}elseif($hari=='Thursday'){
				$hari='Kamis';
			}elseif($hari=='Friday'){
				$hari='Jumat';
			}elseif($hari=='Saturday'){
				$hari='Sabtu';
			}
			return $hari;
	}

	function getBulan($bln){
				switch ($bln){
					case 1:
						return "Januari";
						break;
					case 2:
						return "Februari";
						break;
					case 3:
						return "Maret";
						break;
					case 4:
						return "April";
						break;
					case 5:
						return "Mei";
						break;
					case 6:
						return "Juni";
						break;
					case 7:
						return "Juli";
						break;
					case 8:
						return "Agustus";
						break;
					case 9:
						return "September";
						break;
					case 10:
						return "Oktober";
						break;
					case 11:
						return "November";
						break;
					case 12:
						return "Desember";
						break;
				}
			}
	function romawi($tgl){
			$bulan = substr($tgl,5,2);
			switch ($bulan){
					case '01':
						return "I";
						break;
					case '02':
						return "II";
						break;
					case '03':
						return "III";
						break;
					case '04':
						return "IV";
						break;
					case '05':
						return "V";
						break;
					case '06':
						return "VI";
						break;
					case '07':
						return "VII";
						break;
					case '08':
						return "VIII";
						break;
					case '09':
						return "IX";
						break;
					case '10':
						return "X";
						break;
					case '11':
						return "XI";
						break;
					case '12':
						return "XII";
						break;
				}
	}

	function romawi2($bulan){
			switch ($bulan){
					case '01':
						return "I";
						break;
					case '02':
						return "II";
						break;
					case '03':
						return "III";
						break;
					case '04':
						return "IV";
						break;
					case '05':
						return "V";
						break;
					case '06':
						return "VI";
						break;
					case '07':
						return "VII";
						break;
					case '08':
						return "VIII";
						break;
					case '09':
						return "IX";
						break;
					case '10':
						return "X";
						break;
					case '11':
						return "XI";
						break;
					case '12':
						return "XII";
						break;
				}
	}
?>
