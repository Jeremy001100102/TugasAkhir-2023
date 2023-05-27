<?php session_start(); 	require "layout/header.php" ?>
<?php

require_once "functions.php";

$bulan = ["Januari","Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];

//data Meninggal Dunia
$dataMD = dataMeninggal();
if (isset($_GET['id_hitungMD'])) {
	foreach ($dataMD as $key) {
		if($_GET['id_hitungMD'] == $key['id']){
			$_SESSION['hitung_convertMentahMD'] = explode("|", $key['data_bulan_mentah']);
			$_SESSION['hitung_tahundataMentahMD'] = $key['tahun_data_mentah'];	               
		}
	}
}

//data Luka Berat
$dataLB = datalukaBerat();
if (isset($_GET['id_hitungLB'])) {
	foreach ($dataLB as $key) {
		if($_GET['id_hitungLB'] == $key['id']){
			$_SESSION['hitung_convertMentahLB'] = explode("|", $key['data_bulan_mentah']);
			$_SESSION['hitung_tahundataMentahLB'] = $key['tahun_data_mentah'];	               
		}
	}
}

//data Luka Ringan
$dataLR = datalukaRingan();
if (isset($_GET['id_hitungLR'])) {
	foreach ($dataLR as $key) {
		if($_GET['id_hitungLR'] == $key['id']){
			$_SESSION['hitung_convertMentahLR'] = explode("|", $key['data_bulan_mentah']);
			$_SESSION['hitung_tahundataMentahLR'] = $key['tahun_data_mentah'];	               
		}
	}
}




?>

<h1>Kalkulasi DATA</h1>
<?php if(isset($_GET['id_hitungMD']) || isset($_GET['id_hitungLB']) || isset($_GET['id_hitungLR']) || isset($_GET['frek'])) : ?>
	<h3>Frekuensi</h3>
	<?php 	require "frekuensi.php" ?>
<?php endif; ?>

<?php if(isset($_GET['prob'])) : ?>
	<h3>Probabilitas</h3>
<?php endif ?>

<?php 	require "layout/footer.php" ?>