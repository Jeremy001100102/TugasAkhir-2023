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



//Tampil Table Hasil Meninggal
// if (isset($_GET['id_hasilMD'])) {
// 	$_SESSION['id_hasiltampilMD'] = $_GET['id_hasilMD'];
// }


$data_hasilMD = data_hasilMeninggal();
if (isset($_GET['id_hasilMD'])) {
	foreach ($data_hasilMD as $key) {
		if($_GET['id_hasilMD'] == $key['id']){
			$_SESSION['kondisi_hasilMD'] = true;
			$_SESSION['id_hasilMD'] = $key['id'];
			$_SESSION['id_hasiltampilMD'] = $key['id'];
			$_SESSION['id_hasil_categoryMD'] = $key['id_kategori'];
			$_SESSION['tahun_hasilMD'] = $key['tahun_hasil_simulasi'];
			$_SESSION['convert_hasil_acakMD'] = explode("|", $key['angka_acak']);
			$_SESSION['convert_hasil_MD'] = explode("|", $key['hasil_simulasi']);
			$_SESSION['convert_hasil_datarealMD'] = explode("|", $key['data_real']);
			$_SESSION['convert_hasil_akurasiMD'] = explode("|", $key['akurasi']);
			$totalMD = explode("|", $key['total']);
			$_SESSION['total_hasil_simMD'] = $totalMD[0];
			$_SESSION['total_data_realMD'] = $totalMD[1];
			$_SESSION['total_data_akurasiMD'] = $totalMD[2];
			$_SESSION['total_hasil_kemarau_simMD'] = $totalMD[3];
			$_SESSION['total_data_kemarau_realMD'] = $totalMD[4];
			$_SESSION['total_data_kemarau_akurasiMD'] = $totalMD[5];
			$_SESSION['total_hasil_hujan_simMD'] = $totalMD[6];
			$_SESSION['total_data_hujan_realMD'] = $totalMD[7];
			$_SESSION['total_data_hujan_akurasiMD'] = $totalMD[8];
			$rata2MD = explode("|", $key['rata_rata']);
			$_SESSION['rata2_hasil_simMD'] = $rata2MD[0];
			$_SESSION['rata2_hasil_realMD'] = $rata2MD[1];
			$_SESSION['rata2_hasil_akurasiMD'] = $rata2MD[2];
			$_SESSION['rata2_hasil_kemarau_simMD'] = $rata2MD[3];
			$_SESSION['rata2_hasil_kemarau_realMD'] = $rata2MD[4];
			$_SESSION['rata2_hasil_kemarau_akurasiMD'] = $rata2MD[5];
			$_SESSION['rata2_hasil_hujan_simMD'] = $rata2MD[6];
			$_SESSION['rata2_hasil_hujan_realMD'] = $rata2MD[7];
			$_SESSION['rata2_hasil_hujan_akurasiMD'] = $rata2MD[8];
			
			 		               
		}

		if($_GET['id_hasilMD'] == "jeremy"){
			$_SESSION['kondisi_hasilMD'] = true;
			$_SESSION['id_hasilMD'] = $key['id'];
			$_SESSION['id_hasiltampilMD'] = $key['id'];
			$_SESSION['id_hasil_categoryMD'] = $key['id_kategori'];
			$_SESSION['tahun_hasilMD'] = $key['tahun_hasil_simulasi'];
			$_SESSION['convert_hasil_acakMD'] = explode("|", $key['angka_acak']);
			$_SESSION['convert_hasil_MD'] = explode("|", $key['hasil_simulasi']);
			$_SESSION['convert_hasil_datarealMD'] = explode("|", $key['data_real']);
			$_SESSION['convert_hasil_akurasiMD'] = explode("|", $key['akurasi']);
			$totalMD = explode("|", $key['total']);
			$_SESSION['total_hasil_simMD'] = $totalMD[0];
			$_SESSION['total_data_realMD'] = $totalMD[1];
			$_SESSION['total_data_akurasiMD'] = $totalMD[2];
			$_SESSION['total_hasil_kemarau_simMD'] = $totalMD[3];
			$_SESSION['total_data_kemarau_realMD'] = $totalMD[4];
			$_SESSION['total_data_kemarau_akurasiMD'] = $totalMD[5];
			$_SESSION['total_hasil_hujan_simMD'] = $totalMD[6];
			$_SESSION['total_data_hujan_realMD'] = $totalMD[7];
			$_SESSION['total_data_hujan_akurasiMD'] = $totalMD[8];
			$rata2MD = explode("|", $key['rata_rata']);
			$_SESSION['rata2_hasil_simMD'] = $rata2MD[0];
			$_SESSION['rata2_hasil_realMD'] = $rata2MD[1];
			$_SESSION['rata2_hasil_akurasiMD'] = $rata2MD[2];
			$_SESSION['rata2_hasil_kemarau_simMD'] = $rata2MD[3];
			$_SESSION['rata2_hasil_kemarau_realMD'] = $rata2MD[4];
			$_SESSION['rata2_hasil_kemarau_akurasiMD'] = $rata2MD[5];
			$_SESSION['rata2_hasil_hujan_simMD'] = $rata2MD[6];
			$_SESSION['rata2_hasil_hujan_realMD'] = $rata2MD[7];
			$_SESSION['rata2_hasil_hujan_akurasiMD'] = $rata2MD[8];
			
			$_SESSION['alert'] = "on";
			$_SESSION['pesan'] = "Data Berhasil Dihapus!";  		 
		}
	} 

	header("Location: data-hasil-simulasi.php#collapseOne");
	// echo " 
	// <script>
	// document.location.href = 'data-hasil-simulasi.php#collapseOne';
	// </script>   
	// ";

}

//Tampil Table Hasil Luka Berat
// if (isset($_GET['id_hasilLB'])) {
// 	$_SESSION['id_hasiltampilLB'] = $_GET['id_hasilLB'];
// }

$data_hasilLB = data_hasillukaBerat();
if (isset($_GET['id_hasilLB'])) {
	foreach ($data_hasilLB as $key) {
		if($_GET['id_hasilLB'] == $key['id']){
			$_SESSION['kondisi_hasilLB'] = true;
			$_SESSION['id_hasilLB'] = $key['id'];
			$_SESSION['id_hasiltampilLB'] = $key['id'];
			$_SESSION['id_hasil_categoryLB'] = $key['id_kategori'];
			$_SESSION['tahun_hasilLB'] = $key['tahun_hasil_simulasi'];
			$_SESSION['convert_hasil_acakLB'] = explode("|", $key['angka_acak']);
			$_SESSION['convert_hasil_LB'] = explode("|", $key['hasil_simulasi']);
			$_SESSION['convert_hasil_datarealLB'] = explode("|", $key['data_real']);
			$_SESSION['convert_hasil_akurasiLB'] = explode("|", $key['akurasi']);
			$totalLB = explode("|", $key['total']);
			$_SESSION['total_hasil_simLB'] = $totalLB[0];
			$_SESSION['total_data_realLB'] = $totalLB[1];
			$_SESSION['total_data_akurasiLB'] = $totalLB[2];
			$_SESSION['total_hasil_kemarau_simLB'] = $totalLB[3];
			$_SESSION['total_data_kemarau_realLB'] = $totalLB[4];
			$_SESSION['total_data_kemarau_akurasiLB'] = $totalLB[5];
			$_SESSION['total_hasil_hujan_simLB'] = $totalLB[6];
			$_SESSION['total_data_hujan_realLB'] = $totalLB[7];
			$_SESSION['total_data_hujan_akurasiLB'] = $totalLB[8];
			$rata2LB = explode("|", $key['rata_rata']);
			$_SESSION['rata2_hasil_simLB'] = $rata2LB[0];
			$_SESSION['rata2_hasil_realLB'] = $rata2LB[1];
			$_SESSION['rata2_hasil_akurasiLB'] = $rata2LB[2];
			$_SESSION['rata2_hasil_kemarau_simLB'] = $rata2LB[3];
			$_SESSION['rata2_hasil_kemarau_realLB'] = $rata2LB[4];
			$_SESSION['rata2_hasil_kemarau_akurasiLB'] = $rata2LB[5];
			$_SESSION['rata2_hasil_hujan_simLB'] = $rata2LB[6];
			$_SESSION['rata2_hasil_hujan_realLB'] = $rata2LB[7];
			$_SESSION['rata2_hasil_hujan_akurasiLB'] = $rata2LB[8];
			
			 		               
		}

		if($_GET['id_hasilLB'] == "jeremy"){
			$_SESSION['kondisi_hasilLB'] = true;
			$_SESSION['id_hasilLB'] = $key['id'];
			$_SESSION['id_hasiltampilLB'] = $key['id'];
			$_SESSION['id_hasil_categoryLB'] = $key['id_kategori'];
			$_SESSION['tahun_hasilLB'] = $key['tahun_hasil_simulasi'];
			$_SESSION['convert_hasil_acakLB'] = explode("|", $key['angka_acak']);
			$_SESSION['convert_hasil_LB'] = explode("|", $key['hasil_simulasi']);
			$_SESSION['convert_hasil_datarealLB'] = explode("|", $key['data_real']);
			$_SESSION['convert_hasil_akurasiLB'] = explode("|", $key['akurasi']);
			$totalLB = explode("|", $key['total']);
			$_SESSION['total_hasil_simLB'] = $totalLB[0];
			$_SESSION['total_data_realLB'] = $totalLB[1];
			$_SESSION['total_data_akurasiLB'] = $totalLB[2];
			$_SESSION['total_hasil_kemarau_simLB'] = $totalLB[3];
			$_SESSION['total_data_kemarau_realLB'] = $totalLB[4];
			$_SESSION['total_data_kemarau_akurasiLB'] = $totalLB[5];
			$_SESSION['total_hasil_hujan_simLB'] = $totalLB[6];
			$_SESSION['total_data_hujan_realLB'] = $totalLB[7];
			$_SESSION['total_data_hujan_akurasiLB'] = $totalLB[8];
			$rata2LB = explode("|", $key['rata_rata']);
			$_SESSION['rata2_hasil_simLB'] = $rata2LB[0];
			$_SESSION['rata2_hasil_realLB'] = $rata2LB[1];
			$_SESSION['rata2_hasil_akurasiLB'] = $rata2LB[2];
			$_SESSION['rata2_hasil_kemarau_simLB'] = $rata2LB[3];
			$_SESSION['rata2_hasil_kemarau_realLB'] = $rata2LB[4];
			$_SESSION['rata2_hasil_kemarau_akurasiLB'] = $rata2LB[5];
			$_SESSION['rata2_hasil_hujan_simLB'] = $rata2LB[6];
			$_SESSION['rata2_hasil_hujan_realLB'] = $rata2LB[7];
			$_SESSION['rata2_hasil_hujan_akurasiLB'] = $rata2LB[8];
			
			$_SESSION['alert'] = "on";
			$_SESSION['pesan'] = "Data Berhasil Dihapus!";  		 
		}
	} 

	header("Location: data-hasil-simulasi.php#collapseTwo");
	// echo " 
	// <script>
	// document.location.href = 'data-hasil-simulasi.php#collapseTwo';
	// </script>   
	// ";

}


//Tampil Table Hasil Luka Ringan
// if (isset($_GET['id_hasilLR'])) {
// 	$_SESSION['id_hasiltampilLR'] = $_GET['id_hasilLR'];
// }

$data_hasilLR = data_hasillukaRingan();
if (isset($_GET['id_hasilLR'])) {
	foreach ($data_hasilLR as $key) {
		if($_GET['id_hasilLR'] == $key['id']){
			$_SESSION['kondisi_hasilLR'] = true;
			$_SESSION['id_hasilLR'] = $key['id'];
			$_SESSION['id_hasiltampilLR'] = $key['id'];
			$_SESSION['id_hasil_categoryLR'] = $key['id_kategori'];
			$_SESSION['tahun_hasilLR'] = $key['tahun_hasil_simulasi'];
			$_SESSION['convert_hasil_acakLR'] = explode("|", $key['angka_acak']);
			$_SESSION['convert_hasil_LR'] = explode("|", $key['hasil_simulasi']);
			$_SESSION['convert_hasil_datarealLR'] = explode("|", $key['data_real']);
			$_SESSION['convert_hasil_akurasiLR'] = explode("|", $key['akurasi']);
			$totalLR = explode("|", $key['total']);
			$_SESSION['total_hasil_simLR'] = $totalLR[0];
			$_SESSION['total_data_realLR'] = $totalLR[1];
			$_SESSION['total_data_akurasiLR'] = $totalLR[2];
			$_SESSION['total_hasil_kemarau_simLR'] = $totalLR[3];
			$_SESSION['total_data_kemarau_realLR'] = $totalLR[4];
			$_SESSION['total_data_kemarau_akurasiLR'] = $totalLR[5];
			$_SESSION['total_hasil_hujan_simLR'] = $totalLR[6];
			$_SESSION['total_data_hujan_realLR'] = $totalLR[7];
			$_SESSION['total_data_hujan_akurasiLR'] = $totalLR[8];
			$rata2LR = explode("|", $key['rata_rata']);
			$_SESSION['rata2_hasil_simLR'] = $rata2LR[0];
			$_SESSION['rata2_hasil_realLR'] = $rata2LR[1];
			$_SESSION['rata2_hasil_akurasiLR'] = $rata2LR[2];
			$_SESSION['rata2_hasil_kemarau_simLR'] = $rata2LR[3];
			$_SESSION['rata2_hasil_kemarau_realLR'] = $rata2LR[4];
			$_SESSION['rata2_hasil_kemarau_akurasiLR'] = $rata2LR[5];
			$_SESSION['rata2_hasil_hujan_simLR'] = $rata2LR[6];
			$_SESSION['rata2_hasil_hujan_realLR'] = $rata2LR[7];
			$_SESSION['rata2_hasil_hujan_akurasiLR'] = $rata2LR[8];
			
			 		               
		}

		if($_GET['id_hasilLR'] == "jeremy"){
			$_SESSION['kondisi_hasilLR'] = true;
			$_SESSION['id_hasilLR'] = $key['id'];
			$_SESSION['id_hasiltampilLR'] = $key['id'];
			$_SESSION['id_hasil_categoryLR'] = $key['id_kategori'];
			$_SESSION['tahun_hasilLR'] = $key['tahun_hasil_simulasi'];
			$_SESSION['convert_hasil_acakLR'] = explode("|", $key['angka_acak']);
			$_SESSION['convert_hasil_LR'] = explode("|", $key['hasil_simulasi']);
			$_SESSION['convert_hasil_datarealLR'] = explode("|", $key['data_real']);
			$_SESSION['convert_hasil_akurasiLR'] = explode("|", $key['akurasi']);
			$totalLR = explode("|", $key['total']);
			$_SESSION['total_hasil_simLR'] = $totalLR[0];
			$_SESSION['total_data_realLR'] = $totalLR[1];
			$_SESSION['total_data_akurasiLR'] = $totalLR[2];
			$_SESSION['total_hasil_kemarau_simLR'] = $totalLR[3];
			$_SESSION['total_data_kemarau_realLR'] = $totalLR[4];
			$_SESSION['total_data_kemarau_akurasiLR'] = $totalLR[5];
			$_SESSION['total_hasil_hujan_simLR'] = $totalLR[6];
			$_SESSION['total_data_hujan_realLR'] = $totalLR[7];
			$_SESSION['total_data_hujan_akurasiLR'] = $totalLR[8];
			$rata2LR = explode("|", $key['rata_rata']);
			$_SESSION['rata2_hasil_simLR'] = $rata2LR[0];
			$_SESSION['rata2_hasil_realLR'] = $rata2LR[1];
			$_SESSION['rata2_hasil_akurasiLR'] = $rata2LR[2];
			$_SESSION['rata2_hasil_kemarau_simLR'] = $rata2LR[3];
			$_SESSION['rata2_hasil_kemarau_realLR'] = $rata2LR[4];
			$_SESSION['rata2_hasil_kemarau_akurasiLR'] = $rata2LR[5];
			$_SESSION['rata2_hasil_hujan_simLR'] = $rata2LR[6];
			$_SESSION['rata2_hasil_hujan_realLR'] = $rata2LR[7];
			$_SESSION['rata2_hasil_hujan_akurasiLR'] = $rata2LR[8];
			
			$_SESSION['alert'] = "on";
			$_SESSION['pesan'] = "Data Berhasil Dihapus!";  		 
		}
		
			
		
	} 
	 header("Location: data-hasil-simulasi.php#collapseThree");
	// echo " 
	// <script>
	// document.location.href = 'data-hasil-simulasi.php#collapseThree';
	// </script>   
	// ";

}




?>