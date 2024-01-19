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
        $id = $key['id'];
        if($_SESSION['id_updateMD'] == $key['id']){   
            $_SESSION['update_tahun_MD'] = $key['tahun'];
            $_SESSION['update_data_bulanMD'] = [];
            //ambil data perbulan
            $ambil_dataMD = mysqli_query($conn, "SELECT data_bulan FROM data_detail_kecelakaan WHERE id_data_kecelakaan = $id");
            While($rows_MD = mysqli_fetch_assoc($ambil_dataMD)){
                $_SESSION['update_data_bulanMD'][] = $rows_MD['data_bulan'];
            }         
        }
    }
    
}

if(isset($_SESSION['id_categoryLB'])){
    foreach ($dataLB as $key) {
        $id = $key['id'];
        if($_SESSION['id_updateLB'] == $key['id']){   
            $_SESSION['update_tahun_LB'] = $key['tahun'];
            $_SESSION['update_data_bulanLB'] = [];
            //ambil data perbulan
            $ambil_dataLB = mysqli_query($conn, "SELECT data_bulan FROM data_detail_kecelakaan WHERE id_data_kecelakaan = $id");
            While($rows_LB = mysqli_fetch_assoc($ambil_dataLB)){
                $_SESSION['update_data_bulanLB'][] = $rows_LB['data_bulan'];
            }         
        }
    }
    
}

if(isset($_SESSION['id_categoryLR'])){
    foreach ($dataLR as $key) {
        $id = $key['id'];
        if($_SESSION['id_updateLR'] == $key['id']){   
            $_SESSION['update_tahun_LR'] = $key['tahun'];
            $_SESSION['update_data_bulanLR'] = [];
            //ambil data perbulan
            $ambil_dataLR = mysqli_query($conn, "SELECT data_bulan FROM data_detail_kecelakaan WHERE id_data_kecelakaan = $id");
            While($rows_LR = mysqli_fetch_assoc($ambil_dataLR)){
                $_SESSION['update_data_bulanLR'][] = $rows_LR['data_bulan'];
            }         
        }
    }
    
}  


require "update-dataMD.php";
require "update-dataLB.php";
require "update-dataLR.php";




?>


