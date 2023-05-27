<?php 
require_once "functions.php";
session_start();




//Tampil table Meninggal
if (isset($_GET['id_MD'])) {
	$_SESSION['id_updatetampilMD'] = $_GET['id_MD'];
}

$dataMID = dataMeninggal();
if (isset($_GET['id_MD'])) {
	foreach ($dataMID as $key) {
		if($_GET['id_MD'] == $key['id']){
			$_SESSION['kondisiMD'] = true;
			$_SESSION['id_updateMD'] = $key['id'];
			$_SESSION['id_categoryMD'] = $key['id_kategori'];
			$_SESSION['convertMentah'] = explode("|", $key['data_bulan_mentah']);
			$_SESSION['convertReal'] = explode("|", $key['data_bulan_real']);
			$_SESSION['tahun_data_mentah'] = $key['tahun_data_mentah'];
			$_SESSION['tahun_data_real'] = $key['tahun_data_real']; 		               
		}

		if($_GET['id_MD'] == "jeremy"){
			$_SESSION['kondisiMD'] = true;
			$_SESSION['id_updateMD'] = $key['id'];
			$_SESSION['id_categoryMD'] = $key['id_kategori'];
			$_SESSION['convertMentah'] = explode("|", $key['data_bulan_mentah']);
			$_SESSION['convertReal'] = explode("|", $key['data_bulan_real']);
			$_SESSION['tahun_data_mentah'] = $key['tahun_data_mentah'];
			$_SESSION['tahun_data_real'] = $key['tahun_data_real']; 
		}
	} 
	echo " 
            <script>
                document.location.href = 'input-data.php#collapseOne';
            </script>   
        ";
   
}

//Tampil table Luka Berat
if (isset($_GET['id_LB'])) {
	$_SESSION['id_updatetampilLB'] = $_GET['id_LB'];
}

$dataLB = datalukaBerat();
if (isset($_GET['id_LB'])) {
	foreach ($dataLB as $key) {
		if($_GET['id_LB'] == $key['id']){
			$_SESSION['kondisiLB'] = true;
			$_SESSION['id_updateLB'] = $key['id'];
			$_SESSION['id_categoryLB'] = $key['id_kategori'];
			$_SESSION['convertMentahLB'] = explode("|", $key['data_bulan_mentah']);
			$_SESSION['convertRealLB'] = explode("|", $key['data_bulan_real']);
			$_SESSION['tahun_data_mentahLB'] = $key['tahun_data_mentah'];
			$_SESSION['tahun_data_realLB'] = $key['tahun_data_real']; 		               
		}
		if($_GET['id_LB'] == "jeremy"){
			$_SESSION['kondisiLB'] = true;
			$_SESSION['id_updateLB'] = $key['id'];
			$_SESSION['id_categoryLB'] = $key['id_kategori'];
			$_SESSION['convertMentahLB'] = explode("|", $key['data_bulan_mentah']);
			$_SESSION['convertRealLB'] = explode("|", $key['data_bulan_real']);
			$_SESSION['tahun_data_mentahLB'] = $key['tahun_data_mentah'];
			$_SESSION['tahun_data_realLB'] = $key['tahun_data_real']; 
		}
	}
	echo " 
            <script>
                document.location.href = 'input-data.php#collapseTwo';
            </script>   
        ";
    
}

//Tampil table Luka Ringan
if (isset($_GET['id_LR'])) {
	$_SESSION['id_updatetampilLR'] = $_GET['id_LR'];
}

$dataLR = datalukaRingan();
if (isset($_GET['id_LR'])) {
	foreach ($dataLR as $key) {
		if($_GET['id_LR'] == $key['id']){
			$_SESSION['kondisiLR'] = true;
			$_SESSION['id_updateLR'] = $key['id'];
			$_SESSION['id_categoryLR'] = $key['id_kategori'];
			$_SESSION['convertMentahLR'] = explode("|", $key['data_bulan_mentah']);
			$_SESSION['convertRealLR'] = explode("|", $key['data_bulan_real']);
			$_SESSION['tahun_data_mentahLR'] = $key['tahun_data_mentah'];
			$_SESSION['tahun_data_realLR'] = $key['tahun_data_real']; 		               
		}
		if($_GET['id_LR'] == "jeremy"){
			$_SESSION['kondisiLR'] = true;
			$_SESSION['id_updateLR'] = $key['id'];
			$_SESSION['id_categoryLR'] = $key['id_kategori'];
			$_SESSION['convertMentahLR'] = explode("|", $key['data_bulan_mentah']);
			$_SESSION['convertRealLR'] = explode("|", $key['data_bulan_real']);
			$_SESSION['tahun_data_mentahLR'] = $key['tahun_data_mentah'];
			$_SESSION['tahun_data_realLR'] = $key['tahun_data_real']; 
		}
	}
	echo " 
            <script>
                document.location.href = 'input-data.php#collapseThree';
            </script>   
        ";
 
}



?>