<?php
session_start();
require_once "functions.php";

$bulan = ["Januari","Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];

//data Meninggal Dunia
$dataMD = dataMeninggal();
if (isset($_GET['id_hitungMD'])) {
	$_SESSION['link'] = "aktif";
	foreach ($dataMD as $key) {
		if($_GET['id_hitungMD'] == $key['id']){
			$_SESSION['hitung_convertMentahMD'] = explode("|", $key['data_bulan_mentah']);
			$_SESSION['hitung_convertRealMD'] = explode("|", $key['data_bulan_real']);	 
			$_SESSION['hitung_tahundataMentahMD'] = $key['tahun_data_mentah'];
			$_SESSION['hitung_tahundataRealMD'] = $key['tahun_data_real'];
		}
	}
}

//data Luka Berat
$dataLB = datalukaBerat();
if (isset($_GET['id_hitungLB'])) {
	foreach ($dataLB as $key) {
		if($_GET['id_hitungLB'] == $key['id']){
			$_SESSION['hitung_convertMentahLB'] = explode("|", $key['data_bulan_mentah']);
			$_SESSION['hitung_convertRealLB'] = explode("|", $key['data_bulan_real']);
			$_SESSION['hitung_tahundataMentahLB'] = $key['tahun_data_mentah'];
			$_SESSION['hitung_tahundataRealLB'] = $key['tahun_data_real'];	               
		}
	}
}

//data Luka Ringan
$dataLR = datalukaRingan();
if (isset($_GET['id_hitungLR'])) {
	foreach ($dataLR as $key) {
		if($_GET['id_hitungLR'] == $key['id']){
			$_SESSION['hitung_convertMentahLR'] = explode("|", $key['data_bulan_mentah']);
			$_SESSION['hitung_convertRealLR'] = explode("|", $key['data_bulan_real']);
			$_SESSION['hitung_tahundataMentahLR'] = $key['tahun_data_mentah'];
			$_SESSION['hitung_tahundataRealLR'] = $key['tahun_data_real'];	               
		}
	}
}




?>

<?php require "layout/header.php" ?>

<?php if(isset($_SESSION['link']) && isset($_GET['frek'])) : ?>
	<h3>Frekuensi</h3>
	<?php 	require "frekuensi.php" ?>
<?php endif; ?>

<?php if(isset($_GET['prob']) && isset($_SESSION['link'])) : ?>
	<h3>Probabilitas</h3>
	<?php 	require "probabilitas.php" ?>
	<?php $_SESSION['prob'] = true; ?>
<?php endif ?>

<?php if(isset($_GET['kumu']) && isset($_SESSION['prob'])) : ?>
	<h3>Kumulatif</h3>
	<?php 	require "kumulatif.php" ?>
	<?php $_SESSION['kumu'] = true; ?>
<?php endif ?>

<?php if(isset($_GET['inter']) && isset($_SESSION['kumu'])) : ?>
	<h3>Interval</h3>
	<?php 	require "interval.php" ?>
	<?php $_SESSION['interval'] = true; ?>
<?php endif ?>

<?php if(isset($_GET['acak']) && isset($_SESSION['interval'])) : ?>
	<h3>Angka Acak</h3>
	<?php 	require "angka-acak.php" ?>
	<?php $_SESSION['angka_acak'] = true; ?>
<?php endif ?>

<?php if(isset($_GET['hs']) && isset($_SESSION['angka_acak'])) : ?>
	<h3>Hasil Simulasi</h3>
	<?php 	require "hasil-simulasi.php" ?>
	<?php $_SESSION['acak'] = true; ?>
<?php endif ?>


<?php require "layout/footer.php" ?>
