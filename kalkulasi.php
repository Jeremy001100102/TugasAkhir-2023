<?php
ob_start(); 
session_start();
if (!isset($_SESSION['login'])) {
	header("Location: login.php");
}

require_once "functions.php";



//data Meninggal Dunia
$dataMD = dataMeninggal();
if (isset($_GET['id_frekMD']) || isset($_GET['id_prediksi'])) {
	$_SESSION['link'] = "aktif";
	foreach ($dataMD as $key) {
		if(isset($_GET['id_frekMD']) && $_GET['id_frekMD'] == $key['id'] || isset($_GET['id_prediksi'])){
			$_SESSION['cek_prediksi'] = "off";
			$_SESSION['frek_MD'] = [];
			$_SESSION['tahun_uji'] = 0;
			$_SESSION['tahun_uji_MD'] = $key['tahun'];
			if (isset($_GET['id_frekMD'])) {
				$tahun_MD = $key['tahun'];
				$id_kategori = $key['id_kategori'];
				$id = $_GET['id_frekMD'];
				$ambilData = mysqli_query($conn, "SELECT data_bulan FROM data_detail_kecelakaan WHERE id_data_kecelakaan = $id");

				for ($d=0; $d < count($bulan); $d++) { 
					$data = mysqli_fetch_assoc($ambilData);
					$_SESSION['frek_MD'][$bulan[$d]] = $data['data_bulan'];
				}
			}

			if (isset($_GET['id_prediksi'])) {
				$tahun_MD = $_GET['id_prediksi'];
				$id_kategori = 1;
				$_SESSION['cek_prediksi'] = "on";
			}
			

			//ambil data dari tabel data_kecelakaan
			$data_MD = mysqli_query($conn, "SELECT * FROM data_kecelakaan WHERE tahun < $tahun_MD AND id_kategori = $id_kategori");
			$data_idMD = [];
			while($key_data = mysqli_fetch_assoc($data_MD)){
				$data_idMD[] = $key_data;
			}


			$_SESSION['dataMD_bulan'] = [];
			$_SESSION['tahunMD_bulan'] = [];

			for ($i=0; $i < count($data_idMD); $i++) { 
				for ($j=0; $j < count($bulan); $j++) {
					$id = $data_idMD[$i]['id'];
					$ambil_id = mysqli_query($conn, "SELECT id FROM data_detail_kecelakaan WHERE id_data_kecelakaan = $id;");



					$id_unik = [];
					while($datab = mysqli_fetch_assoc($ambil_id)){
						$id_unik[] = $datab['id'];
					}

					$data_MD = mysqli_query($conn, "SELECT id_data_kecelakaan, data_bulan FROM data_detail_kecelakaan WHERE id_data_kecelakaan = $id AND id = $id_unik[$j]");

					$databaru[$i][$bulan[$j]] = mysqli_fetch_assoc($data_MD);
					
					$_SESSION['dataMD_bulan'][$i][$bulan[$j]] = $databaru[$i][$bulan[$j]];
				}

				$_SESSION['tahunMD_bulan'][$i] = $data_idMD[$i]['tahun'];
			} 		
		}
	}
}



//data Luka Berat
$dataLB = datalukaBerat();
if (isset($_GET['id_frekLB']) || isset($_GET['id_prediksi'])) {
	$_SESSION['link'] = "aktif";
	foreach ($dataLB as $key) {
		if(isset($_GET['id_frekLB']) && $_GET['id_frekLB'] == $key['id'] || isset($_GET['id_prediksi'])){
			$_SESSION['frek_LB'] = [];
			$_SESSION['tahun_uji_LB'] = 0;
			$_SESSION['tahun_uji_LB'] = $key['tahun'];
			if (isset($_GET['id_frekLB'])) {
				$tahun_LB = $key['tahun'];
				$id_kategori = $key['id_kategori'];
				$id = $_GET['id_frekLB'];
				$ambilData = mysqli_query($conn, "SELECT data_bulan FROM data_detail_kecelakaan WHERE id_data_kecelakaan = $id");

				for ($d=0; $d < count($bulan); $d++) { 
					$data = mysqli_fetch_assoc($ambilData);
					$_SESSION['frek_LB'][$bulan[$d]] = $data['data_bulan'];
				}
			}

			if (isset($_GET['id_prediksi'])) {
				$tahun_LB = $_GET['id_prediksi'];
				$id_kategori = 2;
			}

			//ambil data dari tabel data_kecelakaan
			$data_LB = mysqli_query($conn, "SELECT * FROM data_kecelakaan WHERE tahun < $tahun_LB AND id_kategori = $id_kategori");
			$data_idLB = [];
			while($key_data = mysqli_fetch_assoc($data_LB)){
				$data_idLB[] = $key_data;
			}


			$_SESSION['dataLB_bulan'] = [];
			$_SESSION['tahunLB_bulan'] = [];
			for ($i=0; $i < count($data_idLB); $i++) { 
				for ($j=0; $j < count($bulan); $j++) {
					$id = $data_idLB[$i]['id'];
					$ambil_id = mysqli_query($conn, " SELECT id FROM data_detail_kecelakaan WHERE id_data_kecelakaan = $id;");

					$id_unik = [];
					while($datab = mysqli_fetch_assoc($ambil_id)){
						$id_unik[] = $datab['id'];
					}

					$data_LB = mysqli_query($conn, "SELECT id_data_kecelakaan, data_bulan FROM data_detail_kecelakaan WHERE id_data_kecelakaan = $id AND id = $id_unik[$j]");
					$databaru[$i][$bulan[$j]] = mysqli_fetch_assoc($data_LB);
					$_SESSION['dataLB_bulan'][$i][$bulan[$j]] = $databaru[$i][$bulan[$j]];
				}

				$_SESSION['tahunLB_bulan'][$i] = $data_idLB[$i]['tahun'];
			} 		
		}
	}
}

//data luka ringan
$dataLR = datalukaRingan();
if (isset($_GET['id_frekLR']) || isset($_GET['id_prediksi'])) {
	$_SESSION['link'] = "aktif";
	foreach ($dataLR as $key) {
		if(isset($_GET['id_frekLR']) && $_GET['id_frekLR'] == $key['id'] || isset($_GET['id_prediksi'])){
			$_SESSION['frek_LR'] = [];
			$_SESSION['tahun_uji_LR'] = 0;
			$_SESSION['tahun_uji_LR'] = $key['tahun'];
			if (isset($_GET['id_frekLR'])) {
				$tahun_LR = $key['tahun'];
				$id_kategori = $key['id_kategori'];
				$id = $_GET['id_frekLR'];
				$ambilData = mysqli_query($conn, "SELECT data_bulan FROM data_detail_kecelakaan WHERE id_data_kecelakaan = $id");

				for ($d=0; $d < count($bulan); $d++) { 
					$data = mysqli_fetch_assoc($ambilData);
					$_SESSION['frek_LR'][$bulan[$d]] = $data['data_bulan'];
				}
			}

			if (isset($_GET['id_prediksi'])) {
				$tahun_LR = $_GET['id_prediksi'];
				$id_kategori = 3;
			}

			//ambil data dari tabel data_kecelakaan
			$data_LR = mysqli_query($conn, "SELECT * FROM data_kecelakaan WHERE tahun < $tahun_LR AND id_kategori = $id_kategori");
			$data_idLR = [];
			while($key_data = mysqli_fetch_assoc($data_LR)){
				$data_idLR[] = $key_data;
			}


			$_SESSION['dataLR_bulan'] = [];
			$_SESSION['tahunLR_bulan'] = [];
			for ($i=0; $i < count($data_idLR); $i++) { 
				for ($j=0; $j < count($bulan); $j++) {
					$id = $data_idLR[$i]['id'];
					$ambil_id = mysqli_query($conn, " SELECT id FROM data_detail_kecelakaan WHERE id_data_kecelakaan = $id;");

					$id_unik = [];
					while($datab = mysqli_fetch_assoc($ambil_id)){
						$id_unik[] = $datab['id'];
					}

					$data_LR = mysqli_query($conn, "SELECT id_data_kecelakaan, data_bulan FROM data_detail_kecelakaan WHERE id_data_kecelakaan = $id AND id = $id_unik[$j]");
					$databaru[$i][$bulan[$j]] = mysqli_fetch_assoc($data_LR);
					$_SESSION['dataLR_bulan'][$i][$bulan[$j]] = $databaru[$i][$bulan[$j]];
				}

				$_SESSION['tahunLR_bulan'][$i] = $data_idLR[$i]['tahun'];
			} 		
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
	<?php if (isset($_SESSION['cek_prediksi']) && $_SESSION['cek_prediksi'] === "on"): ?>
		<?php 	require "hasil-simulasi-prediksi.php" ?>
	<?php else :?>
		<?php 	require "hasil-simulasi.php" ?>
	<?php endif ?>
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
<?php  elseif(isset($_GET['hs']) && !isset($_SESSION['interval'])) : ?>
<div class="alert alert-warning" role="alert">
	Anda Belum Melakukan Kalkulasi Perhitungan <a href="kalkulasi.php?inter=jeremy" class="alert-link">Interval</a>!
</div>
<?php  elseif(isset($_GET['hs']) && !isset($_SESSION['angka_acak'])) : ?>
<div class="alert alert-warning" role="alert">
	Anda Belum Melakukan Kalkulasi Perhitungan <a href="kalkulasi.php?acak=jeremy" class="alert-link">Angka Acak</a>!
</div>
<?php endif ?>


<?php if(isset($_GET['rs'])) : 
	$_SESSION['angka_acak'] = null;
	$_SESSION['interval'] = null;
	$_SESSION['kumu'] = null;
	$_SESSION['prob'] = null;
	$_SESSION['link'] = null;
	$_SESSION['aktif_acak_MD'] = null;
	$_SESSION['aktif_acak_LB'] = null;
	$_SESSION['aktif_acak_LR'] = null;
	$_SESSION['aktif_cek_MD'] = null;
	$_SESSION['aktif_cek_LB'] = null;
	$_SESSION['aktif_cek_LR'] = null;

	echo " 
	<script>
	document.location.href = 'index.php';
	</script>	
	";

endif; ?>


<?php   
if (isset($_SESSION['alert']) && $_SESSION['alert'] === "on") {
	echo "
	<script>
	Swal.fire({
		title: 'Berhasil!',
		text: '{$_SESSION['pesan']}',
		icon: 'success'
		});

		</script>
		";

		unset($_SESSION['alert']);
	} 
	if (isset($_SESSION['alert']) && $_SESSION['alert'] === "off") {
		echo "
		<script>
		Swal.fire({
			icon: 'error',
			title: 'Gagal!',
			text: '{$_SESSION['pesan']}'

			});
			</script>
			";
			unset($_SESSION['alert']);
		}



		?>

		<?php require "layout/footer.php" ?>
		<?php 	ob_end_flush(); ?>

