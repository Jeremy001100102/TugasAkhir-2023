<?php 

session_start();
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
}

require_once "functions.php";
$dataMD = dataMeninggal();
$dataLB = datalukaBerat();
$dataLR = datalukaRingan();

$dataCategory = [];
while($dataKategori = mysqli_fetch_assoc($kategori)){
    $dataCategory[] = $dataKategori;
}


//update data MD LB LR


if(isset($_SESSION['id_categoryMD'])){
    foreach ($dataMD as $key) {
        if($_SESSION['id_updateMD'] == $key['id']){      
            $_SESSION['update_convertMentahMD'] = explode("|", $key['data_bulan_mentah']);
            $_SESSION['update_convertRealMD'] = explode("|", $key['data_bulan_real']);
            $_SESSION['update_tahun_data_mentahMD'] = $key['tahun_data_mentah'];
            $_SESSION['update_tahun_data_realMD'] = $key['tahun_data_real'];         
        }
    }
    
}
if(isset($_SESSION['id_categoryLB'])){
   foreach ($dataLB as $key) {
    if($_SESSION['id_updateLB'] == $key['id']){      
        $_SESSION['update_convertMentahLB'] = explode("|", $key['data_bulan_mentah']);
        $_SESSION['update_convertRealLB'] = explode("|", $key['data_bulan_real']);
        $_SESSION['update_tahun_data_mentahLB'] = $key['tahun_data_mentah'];
        $_SESSION['update_tahun_data_realLB'] = $key['tahun_data_real'];               
    }
}

}
if (isset($_SESSION['id_categoryLR'])) { 
   foreach ($dataLR as $key) {
    if($_SESSION['id_updateLR'] == $key['id']){      
        $_SESSION['update_convertMentahLR'] = explode("|", $key['data_bulan_mentah']);
        $_SESSION['update_convertRealLR'] = explode("|", $key['data_bulan_real']);
        $_SESSION['update_tahun_data_mentahLR'] = $key['tahun_data_mentah'];
        $_SESSION['update_tahun_data_realLR'] = $key['tahun_data_real'];                            
    }
}
}    


require "update-dataMD.php";
require "update-dataLB.php";
require "update-dataLR.php";




?>


