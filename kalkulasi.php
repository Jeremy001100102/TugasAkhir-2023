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
			$_SESSION['hitung_id_kategoriMD'] = $key['id_kategori'];
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
			$_SESSION['hitung_id_kategoriLB'] = $key['id_kategori'];	               
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
			$_SESSION['hitung_id_kategoriLR'] = $key['id_kategori'];               
		}
	}
}




?>

<?php require "layout/header.php" ?>

<?php if(isset($_SESSION['link']) && isset($_GET['frek'])) : ?>
	<h3>Frekuensi</h3>
	<?php 	require "frekuensi.php" ?>
<?php  elseif(isset($_GET['frek'])) : ?>
	<div class="alert alert-warning" role="alert">
  Anda Belum Melakukan Kalkulasi Data atau Pemilihan Data Simulasi <a href="input-data.php" class="alert-link">Input Data</a>!
</div>
		
<?php endif; ?>

<?php if(isset($_GET['prob']) && isset($_SESSION['link'])) : ?>
	<h3>Probabilitas</h3>
	<?php 	require "probabilitas.php" ?>
	<?php $_SESSION['prob'] = true; ?>
	<?php  elseif(isset($_GET['prob']) && !isset($_SESSION['link'])) : ?>
		<div class="alert alert-warning" role="alert">
  Anda Belum Melakukan Kalkulasi Data atau Pemilihan Data Simulasi <a href="input-data.php" class="alert-link">Input Data</a>!
</div>
<?php endif ?>

<?php if(isset($_GET['kumu']) && isset($_SESSION['prob'])) : ?>
	<h3>Kumulatif</h3>
	<?php 	require "kumulatif.php" ?>
	<?php $_SESSION['kumu'] = true; ?>
<?php  elseif(isset($_GET['kumu']) && !isset($_SESSION['link'])) : ?>
	<div class="alert alert-warning" role="alert">
  Anda Belum Melakukan Kalkulasi Data atau Pemilihan Data Simulasi <a href="input-data.php" class="alert-link">Input Data</a>!
</div>
<?php  elseif(isset($_GET['kumu']) && !isset($_SESSION['prob'])) : ?>
	<div class="alert alert-warning" role="alert">
  Anda Belum Melakukan Kalkulasi Perhitungan <a href="kalkulasi.php?prob=jeremy" class="alert-link">Probabilitas</a>!
</div>
<?php endif ?>

<?php if(isset($_GET['inter']) && isset($_SESSION['kumu'])) : ?>
	<h3>Interval</h3>
	<?php 	require "interval.php" ?>
	<?php $_SESSION['interval'] = true; ?>
<?php  elseif(isset($_GET['inter']) && !isset($_SESSION['link'])) : ?>
	<div class="alert alert-warning" role="alert">
  Anda Belum Melakukan Kalkulasi Data atau Pemilihan Data Simulasi <a href="input-data.php" class="alert-link">Input Data</a>!
</div>
<?php  elseif(isset($_GET['inter']) && !isset($_SESSION['prob'])) : ?>
	<div class="alert alert-warning" role="alert">
  Anda Belum Melakukan Kalkulasi Perhitungan <a href="kalkulasi.php?prob=jeremy" class="alert-link">Probabilitas</a>!
</div>
<?php  elseif(isset($_GET['inter']) && !isset($_SESSION['kumu'])) : ?>
	<div class="alert alert-warning" role="alert">
  Anda Belum Melakukan Kalkulasi Perhitungan <a href="kalkulasi.php?kumu=jeremy" class="alert-link">Kumulatif</a>!
</div>
<?php endif ?>

<?php if(isset($_GET['acak']) && isset($_SESSION['interval'])) : ?>
	<h3>Angka Acak</h3>
	<?php 	require "angka-acak.php" ?>
	<?php $_SESSION['angka_acak'] = true; ?>
<?php  elseif(isset($_GET['acak']) && !isset($_SESSION['link'])) : ?>
	<div class="alert alert-warning" role="alert">
  Anda Belum Melakukan Kalkulasi Data atau Pemilihan Data Simulasi <a href="input-data.php" class="alert-link">Input Data</a>!
</div>
<?php  elseif(isset($_GET['acak']) && !isset($_SESSION['prob'])) : ?>
	<div class="alert alert-warning" role="alert">
  Anda Belum Melakukan Kalkulasi Perhitungan <a href="kalkulasi.php?prob=jeremy" class="alert-link">Probabilitas</a>!
</div>
<?php  elseif(isset($_GET['acak']) && !isset($_SESSION['kumu'])) : ?>
	<div class="alert alert-warning" role="alert">
  Anda Belum Melakukan Kalkulasi Perhitungan <a href="kalkulasi.php?kumu=jeremy" class="alert-link">Kumulatif</a>!
</div>
<?php  elseif(isset($_GET['acak']) && !isset($_SESSION['inter'])) : ?>
	<div class="alert alert-warning" role="alert">
  Anda Belum Melakukan Kalkulasi Perhitungan <a href="kalkulasi.php?inter=jeremy" class="alert-link">Interval</a>!
</div>
<?php endif ?>

<?php if(isset($_GET['hs']) && isset($_SESSION['angka_acak'])) : ?>
	<div class="row">
		<div class="col-6">
	<h3>Hasil Simulasi</h3>
	</div>
	<?php 	require "hasil-simulasi.php" ?>
	<?php $_SESSION['acak'] = true; ?>
	<?php  elseif(isset($_GET['hs']) && !isset($_SESSION['link'])) : ?>
	<div class="alert alert-warning" role="alert">
  Anda Belum Melakukan Kalkulasi Data atau Pemilihan Data Simulasi <a href="input-data.php" class="alert-link">Input Data</a>!
</div>
<?php  elseif(isset($_GET['hs']) && !isset($_SESSION['prob'])) : ?>
	<div class="alert alert-warning" role="alert">
  Anda Belum Melakukan Kalkulasi Perhitungan <a href="kalkulasi.php?prob=jeremy" class="alert-link">Probabilitas</a>!
</div>
<?php  elseif(isset($_GET['hs']) && !isset($_SESSION['kumu'])) : ?>
	<div class="alert alert-warning" role="alert">
  Anda Belum Melakukan Kalkulasi Perhitungan <a href="kalkulasi.php?kumu=jeremy" class="alert-link">Kumulatif</a>!
</div>
<?php  elseif(isset($_GET['hs']) && !isset($_SESSION['inter'])) : ?>
	<div class="alert alert-warning" role="alert">
  Anda Belum Melakukan Kalkulasi Perhitungan <a href="kalkulasi.php?inter=jeremy" class="alert-link">Interval</a>!
</div>
<?php  elseif(isset($_GET['hs']) && !isset($_SESSION['angka_acak'])) : ?>
	<div class="alert alert-warning" role="alert">
  Anda Belum Melakukan Kalkulasi Perhitungan <a href="kalkulasi.php?acak=jeremy" class="alert-link">Angka Acak</a>!
</div>
<?php endif ?>


<?php require "layout/footer.php" ?>
