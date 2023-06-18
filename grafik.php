<?php 
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
}

require_once "functions.php";
$dataMD = data_hasilMeninggal();
$dataLB = data_hasillukaBerat();
$dataLR = data_hasillukaRingan();

$dataCategory = [];
while($dataKategori = mysqli_fetch_assoc($kategori)){
    $dataCategory[] = $dataKategori;
}


//grafik data MD LB LR
if(isset($_SESSION['id_hasil_categoryMD'])){
    foreach ($dataMD as $key) {
        if($_SESSION['id_hasilMD'] == $key['id']){      
            $_SESSION['grafik_hasil_MD'] = explode("|", $key['hasil_simulasi']);
            $_SESSION['grafik_hasil_datarealMD'] = explode("|", $key['data_real']);
            $_SESSION['grafik_tahun_hasilMD'] = $key['tahun_hasil_simulasi'];
			$_SESSION['grafik_tahun_data_realMD'] = $key['tahun_data_real'];        
        }
    }   
}

if(isset($_SESSION['id_hasil_categoryLB'])){
    foreach ($dataLB as $key) {
        if($_SESSION['id_hasilLB'] == $key['id']){      
            $_SESSION['grafik_hasil_LB'] = explode("|", $key['hasil_simulasi']);
            $_SESSION['grafik_hasil_datarealLB'] = explode("|", $key['data_real']);
            $_SESSION['grafik_tahun_hasilLB'] = $key['tahun_hasil_simulasi'];
			$_SESSION['grafik_tahun_data_realLB'] = $key['tahun_data_real'];        
        }
    }   
}

if(isset($_SESSION['id_hasil_categoryLR'])){
    foreach ($dataLR as $key) {
        if($_SESSION['id_hasilLR'] == $key['id']){      
            $_SESSION['grafik_hasil_LR'] = explode("|", $key['hasil_simulasi']);
            $_SESSION['grafik_hasil_datarealLR'] = explode("|", $key['data_real']);
            $_SESSION['grafik_tahun_hasilLR'] = $key['tahun_hasil_simulasi'];
			$_SESSION['grafik_tahun_data_realLR'] = $key['tahun_data_real'];        
        }
    }   
}



require "grafik-dataMD.php";
require "grafik-dataLB.php";
require "grafik-dataLR.php";
?>