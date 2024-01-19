<?php 
ob_start();
require 'functions.php';


//hapus semua input data
if (isset($_GET['id_hapusAll'])) {

	if( hapusAll() >= 0){
		$_SESSION['alert'] = "on";
        $_SESSION['pesan'] = "Data Berhasil Dihapus Semua!";
        header("Location: input-data.php#collapseOne#collapseTwo#collapseThree");
        exit;
        
		// echo " 
		// <script>
		// document.location.href = 'input-data.php#collapseOne#collapseTwo#collapseThree';
		// </script>	
		// ";
	}else{
		echo "
		<script>
		alert('Data gagal dihapus');
		document.location.href = 'input-data.php#collapseOne#collapseTwo#collapseThree';
		</script>	
		";
		
	}	
}

//hapus semua data hasil simulasi
if (isset($_GET['id_hapus-hasilAll'])) {

	if( hapus_hasilAll() >= 0){
		$_SESSION['alert'] = "on";
        $_SESSION['pesan'] = "Data Berhasil Dihapus Semua!";
        header("Location: data-hasil-simulasi.php#collapseOne#collapseTwo#collapseThree");
        exit;
		// echo " 
		// <script>
		// alert('Data berhasil dihapus');
		// document.location.href = 'data-hasil-simulasi.php#collapseOne#collapseTwo#collapseThree';
		// </script>	
		// ";
	}else{
		echo "
		<script>
		alert('Data gagal dihapus');
		document.location.href = 'data-hasil-simulasi.php#collapseOne#collapseTwo#collapseThree';
		</script>	
		";
		
	}	
}


//hapus tabel input data
if (isset($_GET['id_hapusMD'])) {
	$idMD = $_GET['id_hapusMD'];
	if( hapus($idMD) > 0){
		echo " 
		<script>
		document.location.href = 'tables.php?id_MD=jeremy';
		</script>	
		";
	}else{
		echo "
		<script>
		alert('Data gagal dihapus');
		document.location.href = 'input-data.php#collapseOne';
		</script>	
		";
		
	}	
}

if (isset($_GET['id_hapusLB'])) {
	$idLB = $_GET['id_hapusLB'];
	if( hapus($idLB) > 0){
		echo " 
		<script>
		document.location.href = 'tables.php?id_LB=jeremy';
		</script>	
		";
	}else{
		echo "
		<script>
		alert('Data gagal dihapus');
		document.location.href = 'input-data.php#collapseTwo';
		</script>	
		";
		
	}	
}

if (isset($_GET['id_hapusLR'])) {
	$idLR = $_GET['id_hapusLR'];
	if( hapus($idLR) > 0){
		echo " 
		<script>
		document.location.href = 'tables.php?id_LR=jeremy';
		</script>	
		";
	}else{
		echo "
		<script>
		alert('Data gagal dihapus');
		document.location.href = 'input-data.php#collapseThree';
		</script>	
		";
		
	}	
}


//hapus tabel hasil simulasi
if (isset($_GET['id_hasil_hapusMD'])){
	$id_hasilMD = $_GET['id_hasil_hapusMD'];
	if( hapusHS($id_hasilMD) > 0){
		echo " 
		<script>
		document.location.href = 'tables.php?id_hasilMD=jeremy';
		</script>	
		";
	}else{
		echo "
		<script>
		alert('Data gagal dihapus');
		document.location.href = 'data-hasil-simulasi.php#collapseOne';
		</script>	
		";	
	}	
}

if (isset($_GET['id_hasil_hapusLB'])){
	$id_hasilLB = $_GET['id_hasil_hapusLB'];
	if( hapusHS($id_hasilLB) > 0){
		echo " 
		<script>
		document.location.href = 'tables.php?id_hasilLB=jeremy';
		</script>	
		";
	}else{
		echo "
		<script>
		alert('Data gagal dihapus');
		document.location.href = 'data-hasil-simulasi.php#collapseTwo';
		</script>	
		";	
	}	
}

if (isset($_GET['id_hasil_hapusLR'])){
	$id_hasilLR = $_GET['id_hasil_hapusLR'];
	if( hapusHS($id_hasilLR) > 0){
		echo " 
		<script>
		document.location.href = 'tables.php?id_hasilLR=jeremy';
		</script>	
		";
	}else{
		echo "
		<script>
		alert('Data gagal dihapus');
		document.location.href = 'data-hasil-simulasi.php#collapseThree';
		</script>	
		";	
	}	
}

//hapus akun user
if(isset($_GET['id_hapusAkun'])){
	if( hapusAkun($_GET['id_hapusAkun']) > 0){
		$_SESSION['alert'] = "on";
        $_SESSION['pesan'] = "User Berhasil Dihapus!";
        header("Location: akun.php");
        exit;
		// echo " 
		// <script>
		// 	alert('Data berhasil dihapus');
		// 	document.location.href = 'akun.php';
		// </script>	
		// ";
	}else{
		echo "
		<script>
			alert('Data gagal dihapus');
			document.location.href = 'akun.php';
		</script>	
		";	
	}
}





ob_end_flush();
?>