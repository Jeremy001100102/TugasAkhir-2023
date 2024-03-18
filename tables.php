<?php 
session_start();
if (!isset($_SESSION['login'])) {
	header("Location: login.php");
}

require_once "functions.php";





//Tampil table Meninggal
if (isset($_GET['id_MD'])) {
	$_SESSION['id_updatetampilMD'] = $_GET['id_MD'];
}

$dataMD = dataMeninggal();
if (isset($_GET['id_MD']) || isset($_GET['id_import'])) {
	foreach ($dataMD as $key) {
		if(isset($_GET['id_MD']) && $_GET['id_MD'] == $key['id'] || isset($_GET['id_import']) == 'jeremy'){
			$id = $key['id'];
			$_SESSION['kondisiMD'] = true;
			$_SESSION['id_updateMD'] = $key['id'];
			$_SESSION['id_categoryMD'] = $key['id_kategori'];
			$_SESSION['tahun_MD'] = $key['tahun'];

			$_SESSION['data_bulanMD'] = [];
			//ambil data perbulan
			$ambil_dataMD = mysqli_query($conn, "SELECT data_bulan FROM data_detail_kecelakaan WHERE id_data_kecelakaan = $id");
			While($rows_MD = mysqli_fetch_assoc($ambil_dataMD)){
				$_SESSION['data_bulanMD'][] = $rows_MD['data_bulan'];
			}		
			
		}

		if(isset($_GET['u_gagal']) && $_GET['u_gagal'] == 'gagal'){
			$_SESSION['alert'] = "off";
			$_SESSION['pesan'] = "Data Gagal Diupdate!";
		}

		if(isset($_GET['u_berhasil'])){	
			$_SESSION['alert'] = "on";
			$_SESSION['pesan'] = "Data Berhasil Diupdate!"; 
		}

		if(isset($_GET['id_MD']) && $_GET['id_MD'] == "jeremy"){
			$id = $key['id'];
			$_SESSION['kondisiMD'] = true;
			$_SESSION['id_updateMD'] = $key['id'];
			$_SESSION['id_categoryMD'] = $key['id_kategori'];
			$_SESSION['tahun_MD'] = $key['tahun'];

			$_SESSION['data_bulanMD'] = [];
			//ambil data perbulan
			$ambil_dataMD = mysqli_query($conn, "SELECT data_bulan FROM data_detail_kecelakaan WHERE id_data_kecelakaan = $id");
			While($rows_MD = mysqli_fetch_assoc($ambil_dataMD)){
				$_SESSION['data_bulanMD'][] = $rows_MD['data_bulan'];
			}	
			
			$_SESSION['alert'] = "on";
			$_SESSION['pesan'] = "Data Berhasil Dihapus!";
		}
	} 
	
	
	if (isset($_GET['id_import'])) {
		goto LB;
	}

		header("Location: input-data.php#collapseOne");	
	

	
	// echo " 
    //         <script>
    //             document.location.href = 'input-data.php#collapseOne';
    //         </script>   
    //     ";

}


//Tampil table Luka Berat
if (isset($_GET['id_LB'])) {
	$_SESSION['id_updatetampilLB'] = $_GET['id_LB'];
}

LB:

$dataLB = datalukaBerat();
if (isset($_GET['id_LB']) || isset($_GET['id_import'])) {
	foreach ($dataLB as $key) {
		if(isset($_GET['id_LB']) && $_GET['id_LB'] == $key['id'] || isset($_GET['id_import']) == 'jeremy'){
			$id = $key['id'];
			$_SESSION['kondisiLB'] = true;
			$_SESSION['id_updateLB'] = $key['id'];
			$_SESSION['id_categoryLB'] = $key['id_kategori'];
			$_SESSION['tahun_LB'] = $key['tahun'];

			$_SESSION['data_bulanLB'] = [];
			//ambil data perbulan
			$ambil_dataLB = mysqli_query($conn, "SELECT data_bulan FROM data_detail_kecelakaan WHERE id_data_kecelakaan = $id");
			While($rows_LB = mysqli_fetch_assoc($ambil_dataLB)){
				$_SESSION['data_bulanLB'][] = $rows_LB['data_bulan'];
			}

			
		}

		if(isset($_GET['u_gagal'])){
			$_SESSION['alert'] = "off";
			$_SESSION['pesan'] = "Data Gagal Diupdate!";
		}
		if(isset($_GET['u_berhasil'])){	
			$_SESSION['alert'] = "on";
			$_SESSION['pesan'] = "Data Berhasil Diupdate!"; 
		}

		if(isset($_GET['id_LB']) && $_GET['id_LB'] == "jeremy"){
			$id = $key['id'];
			$_SESSION['kondisiLB'] = true;
			$_SESSION['id_updateLB'] = $key['id'];
			$_SESSION['id_categoryLB'] = $key['id_kategori'];
			$_SESSION['tahun_LB'] = $key['tahun'];

			$_SESSION['data_bulanLB'] = [];
			//ambil data perbulan
			$ambil_dataLB = mysqli_query($conn, "SELECT data_bulan FROM data_detail_kecelakaan WHERE id_data_kecelakaan = $id");
			While($rows_LB = mysqli_fetch_assoc($ambil_dataLB)){
				$_SESSION['data_bulanLB'][] = $rows_LB['data_bulan'];
			}	
			
			$_SESSION['alert'] = "on";
			$_SESSION['pesan'] = "Data Berhasil Dihapus!";
		}
	} 

	if (isset($_GET['id_import'])) {
		goto LR;	
	}

	header("Location: input-data.php#collapseTwo");
	// echo " 
    //         <script>
    //             document.location.href = 'input-data.php#collapseOne';
    //         </script>   
    //     ";

}


//Tampil table Luka Ringan
if (isset($_GET['id_LR'])) {
	$_SESSION['id_updatetampilLR'] = $_GET['id_LR'];
}

LR:

$dataLR = datalukaRingan();
if (isset($_GET['id_LR']) || isset($_GET['id_import'])) {
	foreach ($dataLR as $key) {
		if(isset($_GET['id_LR']) && $_GET['id_LR'] == $key['id'] || isset($_GET['id_import']) == 'jeremy'){
			$id = $key['id'];
			$_SESSION['kondisiLR'] = true;
			$_SESSION['id_updateLR'] = $key['id'];
			$_SESSION['id_categoryLR'] = $key['id_kategori'];
			$_SESSION['tahun_LR'] = $key['tahun'];

			$_SESSION['data_bulanLR'] = [];
			//ambil data perbulan
			$ambil_dataLR = mysqli_query($conn, "SELECT data_bulan FROM data_detail_kecelakaan WHERE id_data_kecelakaan = $id");
			While($rows_LR = mysqli_fetch_assoc($ambil_dataLR)){
				$_SESSION['data_bulanLR'][] = $rows_LR['data_bulan'];
			}

			
		}

		if(isset($_GET['u_gagal'])){
			$_SESSION['alert'] = "off";
			$_SESSION['pesan'] = "Data Gagal Diupdate!";
		}
		if(isset($_GET['u_berhasil'])){	
			$_SESSION['alert'] = "on";
			$_SESSION['pesan'] = "Data Berhasil Diupdate!"; 
		}

		if(isset($_GET['id_LR']) && $_GET['id_LR'] == "jeremy"){
			$id = $key['id'];
			$_SESSION['kondisiLR'] = true;
			$_SESSION['id_updateLR'] = $key['id'];
			$_SESSION['id_categoryLR'] = $key['id_kategori'];
			$_SESSION['tahun_LR'] = $key['tahun'];

			$_SESSION['data_bulanLR'] = [];
			//ambil data perbulan
			$ambil_dataLR = mysqli_query($conn, "SELECT data_bulan FROM data_detail_kecelakaan WHERE id_data_kecelakaan = $id");
			While($rows_LR = mysqli_fetch_assoc($ambil_dataLR)){
				$_SESSION['data_bulanLR'][] = $rows_LR['data_bulan'];
			}	
			
			$_SESSION['alert'] = "on";
			$_SESSION['pesan'] = "Data Berhasil Dihapus!";
		}
	} 


	if (isset($_GET['id_import'])) {
		header("Location: input-data.php#collapseOne#collapseTwo#collapseThree");
		exit();
	}
	header("Location: input-data.php#collapseThree");
	// echo " 
    //         <script>
    //             document.location.href = 'input-data.php#collapseOne';
    //         </script>   
    //     ";

}

?>