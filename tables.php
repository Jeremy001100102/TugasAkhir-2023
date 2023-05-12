<?php 
require_once "functions.php";




//Tampil table Meninggal
$dataMID = dataMeninggal();
if (isset($_GET['id_M'])) {
	foreach ($dataMID as $key) {
		if($_GET['id_M'] == $key['id']){
			session_start();
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
$dataLB = datalukaBerat();
if (isset($_GET['id_LB'])) {
	foreach ($dataLB as $key) {
		if($_GET['id_LB'] == $key['id']){
			session_start();
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
$dataLR = datalukaRingan();
if (isset($_GET['id_LR'])) {
	foreach ($dataLR as $key) {
		if($_GET['id_LR'] == $key['id']){
			session_start();
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