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



//Tampil Table Hasil Meninggal
if (isset($_GET['id_hasilMD'])) {
	$_SESSION['id_hasiltampilMD'] = $_GET['id_hasilMD'];
}

$data_hasilMD = data_hasilMeninggal();
if (isset($_GET['id_hasilMD'])) {
	foreach ($data_hasilMD as $key) {
		if($_GET['id_hasilMD'] == $key['id']){
			$_SESSION['kondisi_hasilMD'] = true;
			$_SESSION['id_hasilMD'] = $key['id'];
			$_SESSION['id_hasil_categoryMD'] = $key['id_kategori'];
			$_SESSION['convert_hasil_frekMD'] = explode("|", $key['frekuensi']);
			$_SESSION['convert_hasil_probMD'] = explode("|", $key['probabilitas']);
			$_SESSION['convert_hasil_kumuMD'] = explode("|", $key['kumulatif']);
			$_SESSION['convert_hasil_interMD'] = explode("|", $key['intervall']);
			$_SESSION['convert_hasil_acakMD'] = explode("|", $key['angka_acak']);
			$_SESSION['convert_hasil_MD'] = explode("|", $key['hasil_simulasi']);
			$_SESSION['convert_hasil_datarealMD'] = explode("|", $key['data_real']);
			$_SESSION['convert_hasil_akurasiMD'] = explode("|", $key['tingkat_akurasi']);
			$totalMD = explode("|", $key['total']);
			$_SESSION['total_hasil_frekMD'] = $totalMD[0];
			$_SESSION['total_hasil_probMD'] = $totalMD[1];
			$_SESSION['total_hasil_simMD'] = $totalMD[2];
			$_SESSION['total_data_realMD'] = $totalMD[3];
			$rata2MD = explode("|", $key['rata_rata']);
			$_SESSION['rata2_hasilfrekMD'] = $rata2MD[0];
			$_SESSION['rata2_hasil_simMD'] = $rata2MD[1];
			$_SESSION['rata2_hasil_realMD'] = $rata2MD[2];
			$_SESSION['rata2_hasil_akurasiMD'] = $rata2MD[3];
			$_SESSION['tahun_hasilMD'] = $key['tahun_hasil_simulasi'];
			$_SESSION['tahun_data_realMD'] = $key['tahun_data_real']; 		               
		}

		if($_GET['id_hasilMD'] == "jeremy"){
			$_SESSION['kondisi_hasilMD'] = true;
			$_SESSION['id_hasilMD'] = $key['id'];
			$_SESSION['id_hasil_categoryMD'] = $key['id_kategori'];
			$_SESSION['convert_hasil_frekMD'] = explode("|", $key['frekuensi']);
			$_SESSION['convert_hasil_probMD'] = explode("|", $key['probabilitas']);
			$_SESSION['convert_hasil_kumuMD'] = explode("|", $key['kumulatif']);
			$_SESSION['convert_hasil_interMD'] = explode("|", $key['intervall']);
			$_SESSION['convert_hasil_acakMD'] = explode("|", $key['angka_acak']);
			$_SESSION['convert_hasil_MD'] = explode("|", $key['hasil_simulasi']);
			$_SESSION['convert_hasil_datarealMD'] = explode("|", $key['data_real']);
			$_SESSION['convert_hasil_akurasiMD'] = explode("|", $key['tingkat_akurasi']);
			$totalMD = explode("|", $key['total']);
			$_SESSION['total_hasil_frekMD'] = $totalMD[0];
			$_SESSION['total_hasil_probMD'] = $totalMD[1];
			$_SESSION['total_hasil_simMD'] = $totalMD[2];
			$_SESSION['total_data_realMD'] = $totalMD[3];
			$rata2MD = explode("|", $key['rata_rata']);
			$_SESSION['rata2_hasilfrekMD'] = $rata2MD[0];
			$_SESSION['rata2_hasil_simMD'] = $rata2MD[1];
			$_SESSION['rata2_hasil_realMD'] = $rata2MD[2];
			$_SESSION['rata2_hasil_akurasiMD'] = $rata2MD[3];
			$_SESSION['tahun_hasilMD'] = $key['tahun_hasil_simulasi'];
			$_SESSION['tahun_data_realMD'] = $key['tahun_data_real']; 		 
		}
	} 
	echo " 
            <script>
                document.location.href = 'data-hasil-simulasi.php#collapseOne';
            </script>   
        ";
   
}

//Tampil Table Hasil Luka Berat
if (isset($_GET['id_hasilLB'])) {
	$_SESSION['id_hasiltampilLB'] = $_GET['id_hasilLB'];
}

$data_hasilLB = data_hasillukaBerat();
if (isset($_GET['id_hasilLB'])) {
	foreach ($data_hasilLB as $key) {
		if($_GET['id_hasilLB'] == $key['id']){
			$_SESSION['kondisi_hasilLB'] = true;
			$_SESSION['id_hasilLB'] = $key['id'];
			$_SESSION['id_hasil_categoryLB'] = $key['id_kategori'];
			$_SESSION['convert_hasil_frekLB'] = explode("|", $key['frekuensi']);
			$_SESSION['convert_hasil_probLB'] = explode("|", $key['probabilitas']);
			$_SESSION['convert_hasil_kumuLB'] = explode("|", $key['kumulatif']);
			$_SESSION['convert_hasil_interLB'] = explode("|", $key['intervall']);
			$_SESSION['convert_hasil_acakLB'] = explode("|", $key['angka_acak']);
			$_SESSION['convert_hasil_LB'] = explode("|", $key['hasil_simulasi']);
			$_SESSION['convert_hasil_datarealLB'] = explode("|", $key['data_real']);
			$_SESSION['convert_hasil_akurasiLB'] = explode("|", $key['tingkat_akurasi']);			
			$totalLB = explode("|", $key['total']);
			$_SESSION['total_hasil_frekLB'] = $totalLB[0];
			$_SESSION['total_hasil_probLB'] = $totalLB[1];
			$_SESSION['total_hasil_simLB'] = $totalLB[2];
			$_SESSION['total_data_realLB'] = $totalLB[3];
			$rata2LB = explode("|", $key['rata_rata']);
			$_SESSION['rata2_hasilfrekLB'] = $rata2LB[0];
			$_SESSION['rata2_hasil_simLB'] = $rata2LB[1];
			$_SESSION['rata2_hasil_realLB'] = $rata2LB[2];
			$_SESSION['rata2_hasil_akurasiLB'] = $rata2LB[3];
			$_SESSION['tahun_hasilLB'] = $key['tahun_hasil_simulasi'];
			$_SESSION['tahun_data_realLB'] = $key['tahun_data_real'];  		               
		}

		if($_GET['id_hasilLB'] == "jeremy"){
			$_SESSION['kondisi_hasilLB'] = true;
			$_SESSION['id_hasilLB'] = $key['id'];
			$_SESSION['id_hasil_categoryLB'] = $key['id_kategori'];
			$_SESSION['convert_hasil_frekLB'] = explode("|", $key['frekuensi']);
			$_SESSION['convert_hasil_probLB'] = explode("|", $key['probabilitas']);
			$_SESSION['convert_hasil_kumuLB'] = explode("|", $key['kumulatif']);
			$_SESSION['convert_hasil_interLB'] = explode("|", $key['intervall']);
			$_SESSION['convert_hasil_acakLB'] = explode("|", $key['angka_acak']);
			$_SESSION['convert_hasil_LB'] = explode("|", $key['hasil_simulasi']);
			$_SESSION['convert_hasil_datarealLB'] = explode("|", $key['data_real']);
			$_SESSION['convert_hasil_akurasiLB'] = explode("|", $key['tingkat_akurasi']);
			$totalLB = explode("|", $key['total']);
			$_SESSION['total_hasil_frekLB'] = $totalLB[0];
			$_SESSION['total_hasil_probLB'] = $totalLB[1];
			$_SESSION['total_hasil_simLB'] = $totalLB[2];
			$_SESSION['total_data_realLB'] = $totalLB[3];
			$rata2LB = explode("|", $key['rata_rata']);
			$_SESSION['rata2_hasilfrekLB'] = $rata2LB[0];
			$_SESSION['rata2_hasil_simLB'] = $rata2LB[1];
			$_SESSION['rata2_hasil_realLB'] = $rata2LB[2];
			$_SESSION['rata2_hasil_akurasiLB'] = $rata2LB[3];
			$_SESSION['tahun_hasilLB'] = $key['tahun_hasil_simulasi'];
			$_SESSION['tahun_data_realLB'] = $key['tahun_data_real'];   		 
		}
	} 
	echo " 
            <script>
                document.location.href = 'data-hasil-simulasi.php#collapseTwo';
            </script>   
        ";
   
}


//Tampil Table Hasil Luka Ringan
if (isset($_GET['id_hasilLR'])) {
	$_SESSION['id_hasiltampilLR'] = $_GET['id_hasilLR'];
}

$data_hasilLR = data_hasillukaRingan();
if (isset($_GET['id_hasilLR'])) {
	foreach ($data_hasilLR as $key) {
		if($_GET['id_hasilLR'] == $key['id']){
			$_SESSION['kondisi_hasilLR'] = true;
			$_SESSION['id_hasilLR'] = $key['id'];
			$_SESSION['id_hasil_categoryLR'] = $key['id_kategori'];
			$_SESSION['convert_hasil_frekLR'] = explode("|", $key['frekuensi']);
			$_SESSION['convert_hasil_probLR'] = explode("|", $key['probabilitas']);
			$_SESSION['convert_hasil_kumuLR'] = explode("|", $key['kumulatif']);
			$_SESSION['convert_hasil_interLR'] = explode("|", $key['intervall']);
			$_SESSION['convert_hasil_acakLR'] = explode("|", $key['angka_acak']);
			$_SESSION['convert_hasil_LR'] = explode("|", $key['hasil_simulasi']);
			$_SESSION['convert_hasil_datarealLR'] = explode("|", $key['data_real']);
			$_SESSION['convert_hasil_akurasiLR'] = explode("|", $key['tingkat_akurasi']);
			$totalLR = explode("|", $key['total']);
			$_SESSION['total_hasil_frekLR'] = $totalLR[0];
			$_SESSION['total_hasil_probLR'] = $totalLR[1];
			$_SESSION['total_hasil_simLR'] = $totalLR[2];
			$_SESSION['total_data_realLR'] = $totalLR[3];
			$rata2LR = explode("|", $key['rata_rata']);
			$_SESSION['rata2_hasilfrekLR'] = $rata2LR[0];
			$_SESSION['rata2_hasil_simLR'] = $rata2LR[1];
			$_SESSION['rata2_hasil_realLR'] = $rata2LR[2];
			$_SESSION['rata2_hasil_akurasiLR'] = $rata2LR[3];
			$_SESSION['tahun_hasilLR'] = $key['tahun_hasil_simulasi'];
			$_SESSION['tahun_data_realLR'] = $key['tahun_data_real'];  		               
		}

		if($_GET['id_hasilLR'] == "jeremy"){
			$_SESSION['kondisi_hasilLR'] = true;
			$_SESSION['id_hasilLR'] = $key['id'];
			$_SESSION['id_hasil_categoryLR'] = $key['id_kategori'];
			$_SESSION['convert_hasil_frekLR'] = explode("|", $key['frekuensi']);
			$_SESSION['convert_hasil_probLR'] = explode("|", $key['probabilitas']);
			$_SESSION['convert_hasil_kumuLR'] = explode("|", $key['kumulatif']);
			$_SESSION['convert_hasil_interLR'] = explode("|", $key['intervall']);
			$_SESSION['convert_hasil_acakLR'] = explode("|", $key['angka_acak']);
			$_SESSION['convert_hasil_LR'] = explode("|", $key['hasil_simulasi']);
			$_SESSION['convert_hasil_datarealLR'] = explode("|", $key['data_real']);
			$_SESSION['convert_hasil_akurasiLR'] = explode("|", $key['tingkat_akurasi']);
			$totalLR = explode("|", $key['total']);
			$_SESSION['total_hasil_frekLR'] = $totalLR[0];
			$_SESSION['total_hasil_probLR'] = $totalLR[1];
			$_SESSION['total_hasil_simLR'] = $totalLR[2];
			$_SESSION['total_data_realLR'] = $totalLR[3];
			$rata2LR = explode("|", $key['rata_rata']);
			$_SESSION['rata2_hasilfrekLR'] = $rata2LR[0];
			$_SESSION['rata2_hasil_simLR'] = $rata2LR[1];
			$_SESSION['rata2_hasil_realLR'] = $rata2LR[2];
			$_SESSION['rata2_hasil_akurasiLR'] = $rata2LR[3];
			$_SESSION['tahun_hasilLR'] = $key['tahun_hasil_simulasi'];
			$_SESSION['tahun_data_realLR'] = $key['tahun_data_real'];    		 
		}
	} 
	echo " 
            <script>
                document.location.href = 'data-hasil-simulasi.php#collapseThree';
            </script>   
        ";
   
}





?>