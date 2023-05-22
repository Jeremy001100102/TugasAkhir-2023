<?php 

require 'functions.php';



if (isset($_GET['id_hapusAll'])) {
	if( hapusAll() >= 0){
		echo " 
		<script>
		alert('Data berhasil dihapus');
		document.location.href = 'input-data.php';
		</script>	
		";
	}else{
		echo "
		<script>
		alert('Data gagal dihapus');
		document.location.href = 'input-data.php';
		</script>	
		";
		
	}	
}

if (isset($_GET['id_hapusMD'])) {
	$idMD = $_GET['id_hapusMD'];
	if( hapus($idMD) > 0){
		echo " 
		<script>
		alert('Data berhasil dihapus');
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
		alert('Data berhasil dihapus');
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
		alert('Data berhasil dihapus');
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






?>