<?php 	

session_start();
if (!isset($_SESSION['login'])) {
	header("Location: login.php");
}



?>

<?php require "layout/header.php" ?>

<div class="card text-center w-100">
	<div class="card-header">
		<h3>TUGAS AKHIR</h3>
	</div>
	<div class="card-body">
		<h2 class="card-text">Simulasi Monte Carlo Prediksi Jumlah Korban Kecelakaan Lalu Lintas Kota Kupang Berbasis Web</h2>

	</div>
</div>







<?php require "layout/footer.php" ?>