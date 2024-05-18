<?php 


//hasil simulasi MD
$hasilMD = [];
$_SESSION['hasilS_MD'] = [];
for ($i=0; $i < count($bulan); $i++) { 
	
	//pecah untuk mememisahkan min dan max dari interval setiap bulan
	for ($j=0; $j < count($_SESSION['dataMD_bulan']) ; $j++) {

		$dataexplode = explode("-", $_SESSION['interval_MD_Januari'][$j]);
		$inter_minMD_Januari[$j] = $dataexplode[0];
		$inter_maxMD_Januari[$j] = isset($dataexplode[1]) ? $dataexplode[1] : $inter_maxMD_Januari[$j-1];


		$dataexplode = explode("-", $_SESSION['interval_MD_Februari'][$j]);
		$inter_minMD_Februari[$j] = $dataexplode[0];
		$inter_maxMD_Februari[$j] = isset($dataexplode[1]) ? $dataexplode[1] : $inter_maxMD_Februari[$j-1];


		$dataexplode = explode("-", $_SESSION['interval_MD_Maret'][$j]);
		$inter_minMD_Maret[$j] = $dataexplode[0];
		$inter_maxMD_Maret[$j] = isset($dataexplode[1]) ? $dataexplode[1] : $inter_maxMD_Maret[$j-1];


		$dataexplode = explode("-", $_SESSION['interval_MD_April'][$j]);
		$inter_minMD_April[$j] = $dataexplode[0];
		$inter_maxMD_April[$j] = isset($dataexplode[1]) ? $dataexplode[1] : $inter_maxMD_April[$j-1];


		$dataexplode = explode("-", $_SESSION['interval_MD_Mei'][$j]);
		$inter_minMD_Mei[$j] = $dataexplode[0];
		$inter_maxMD_Mei[$j] = isset($dataexplode[1]) ? $dataexplode[1] : $inter_maxMD_Mei[$j-1];


		$dataexplode = explode("-", $_SESSION['interval_MD_Juni'][$j]);
		$inter_minMD_Juni[$j] = $dataexplode[0];
		$inter_maxMD_Juni[$j] = isset($dataexplode[1]) ? $dataexplode[1] : $inter_maxMD_Juni[$j-1];

		$dataexplode = explode("-", $_SESSION['interval_MD_Juli'][$j]);
		$inter_minMD_Juli[$j] = $dataexplode[0];
		$inter_maxMD_Juli[$j] = isset($dataexplode[1]) ? $dataexplode[1] : $inter_maxMD_Juli[$j-1];

		$dataexplode = explode("-", $_SESSION['interval_MD_Agustus'][$j]);
		$inter_minMD_Agustus[$j] = $dataexplode[0];
		$inter_maxMD_Agustus[$j] = isset($dataexplode[1]) ? $dataexplode[1] : $inter_maxMD_Agustus[$j-1];

		$dataexplode = explode("-", $_SESSION['interval_MD_September'][$j]);
		$inter_minMD_September[$j] = $dataexplode[0];
		$inter_maxMD_September[$j] = isset($dataexplode[1]) ? $dataexplode[1] : $inter_maxMD_September[$j-1];

		$dataexplode = explode("-", $_SESSION['interval_MD_Oktober'][$j]);
		$inter_minMD_Oktober[$j] = $dataexplode[0];
		$inter_maxMD_Oktober[$j] = isset($dataexplode[1]) ? $dataexplode[1] : $inter_maxMD_Oktober[$j-1];

		$dataexplode = explode("-", $_SESSION['interval_MD_November'][$j]);
		$inter_minMD_November[$j] = $dataexplode[0];
		$inter_maxMD_November[$j] = isset($dataexplode[1]) ? $dataexplode[1] : $inter_maxMD_November[$j-1];

		$dataexplode = explode("-", $_SESSION['interval_MD_Desember'][$j]);
		$inter_minMD_Desember[$j] = $dataexplode[0];
		$inter_maxMD_Desember[$j] = isset($dataexplode[1]) ? $dataexplode[1] : $inter_maxMD_Desember[$j-1];


	}


	for ($k=0; $k < count($_SESSION['dataMD_bulan']); $k++) { 
		if( $_SESSION['angkaAcakMD']['Januari'] >= $inter_minMD_Januari[$k] && $_SESSION['angkaAcakMD']['Januari'] <= $inter_maxMD_Januari[$k] ){ 
			$hasilMD['Januari'] = $_SESSION['dataMD_bulan'][$k]['Januari']['data_bulan']; 
		} 

		if( $_SESSION['angkaAcakMD']['Februari'] >= $inter_minMD_Februari[$k] && $_SESSION['angkaAcakMD']['Februari'] <= $inter_maxMD_Februari[$k] ){ 
			$hasilMD['Februari'] = $_SESSION['dataMD_bulan'][$k]['Februari']['data_bulan']; 
		}  

		if( $_SESSION['angkaAcakMD']['Maret'] >= $inter_minMD_Maret[$k] && $_SESSION['angkaAcakMD']['Maret'] <= $inter_maxMD_Maret[$k] ){ 
			$hasilMD['Maret'] = $_SESSION['dataMD_bulan'][$k]['Maret']['data_bulan']; 
		}

		if( $_SESSION['angkaAcakMD']['April'] >= $inter_minMD_April[$k] && $_SESSION['angkaAcakMD']['April'] <= $inter_maxMD_April[$k] ){ 
			$hasilMD['April'] = $_SESSION['dataMD_bulan'][$k]['April']['data_bulan']; 
		}  

		if( $_SESSION['angkaAcakMD']['Mei'] >= $inter_minMD_Mei[$k] && $_SESSION['angkaAcakMD']['Mei'] <= $inter_maxMD_Mei[$k] ){ 
			$hasilMD['Mei'] = $_SESSION['dataMD_bulan'][$k]['Mei']['data_bulan']; 
		}  

		if( $_SESSION['angkaAcakMD']['Juni'] >= $inter_minMD_Juni[$k] && $_SESSION['angkaAcakMD']['Juni'] <= $inter_maxMD_Juni[$k] ){ 
			$hasilMD['Juni'] = $_SESSION['dataMD_bulan'][$k]['Juni']['data_bulan']; 
		}

		if( $_SESSION['angkaAcakMD']['Juli'] >= $inter_minMD_Juli[$k] && $_SESSION['angkaAcakMD']['Juli'] <= $inter_maxMD_Juli[$k] ){ 
			$hasilMD['Juli'] = $_SESSION['dataMD_bulan'][$k]['Juli']['data_bulan']; 
		}

		if( $_SESSION['angkaAcakMD']['Agustus'] >= $inter_minMD_Agustus[$k] && $_SESSION['angkaAcakMD']['Agustus'] <= $inter_maxMD_Agustus[$k] ){ 
			$hasilMD['Agustus'] = $_SESSION['dataMD_bulan'][$k]['Agustus']['data_bulan']; 
		}

		if( $_SESSION['angkaAcakMD']['September'] >= $inter_minMD_September[$k] && $_SESSION['angkaAcakMD']['September'] <= $inter_maxMD_September[$k] ){ 
			$hasilMD['September'] = $_SESSION['dataMD_bulan'][$k]['September']['data_bulan']; 
		} 

		if( $_SESSION['angkaAcakMD']['Oktober'] >= $inter_minMD_Oktober[$k] && $_SESSION['angkaAcakMD']['Oktober'] <= $inter_maxMD_Oktober[$k] ){ 
			$hasilMD['Oktober'] = $_SESSION['dataMD_bulan'][$k]['Oktober']['data_bulan']; 
		}

		if( $_SESSION['angkaAcakMD']['November'] >= $inter_minMD_November[$k] && $_SESSION['angkaAcakMD']['November'] <= $inter_maxMD_November[$k] ){ 
			$hasilMD['November'] = $_SESSION['dataMD_bulan'][$k]['November']['data_bulan']; 
		}

		if( $_SESSION['angkaAcakMD']['Desember'] >= $inter_minMD_Desember[$k] && $_SESSION['angkaAcakMD']['Desember'] <= $inter_maxMD_Desember[$k] ){ 
			$hasilMD['Desember'] = $_SESSION['dataMD_bulan'][$k]['Desember']['data_bulan']; 
		}			

	}

	$_SESSION['hasilS_MD'][$bulan[$i]] = $hasilMD[$bulan[$i]];	

	
}

//jumlah atau total hasil Simulasi MD dan Data Real Musim Kemarau dan Musim Hujan 
$_SESSION['total_hasilS_MD'] = 0;
$_SESSION['total_hasilS_Kemarau_MD'] = 0;
$_SESSION['total_hasilS_Hujan_MD'] = 0;
$_SESSION['total_dataR_MD'] = 0;
$_SESSION['total_dataR_Kemarau_MD'] = 0;
$_SESSION['total_dataR_Hujan_MD'] = 0;

for ($i=0; $i <count($bulan); $i++) { 
	
	$_SESSION['total_hasilS_MD'] += $_SESSION['hasilS_MD'][$bulan[$i]];
	$_SESSION['total_dataR_MD'] += $_SESSION['frek_MD'][$bulan[$i]]; 

	if($i >= 4 && $i <= 9){
		$_SESSION['total_hasilS_Kemarau_MD'] += $_SESSION['hasilS_MD'][$bulan[$i]];
		$_SESSION['total_dataR_Kemarau_MD'] += $_SESSION['frek_MD'][$bulan[$i]];
	}else{
		$_SESSION['total_hasilS_Hujan_MD'] += $_SESSION['hasilS_MD'][$bulan[$i]];
		$_SESSION['total_dataR_Hujan_MD'] += $_SESSION['frek_MD'][$bulan[$i]];
	}
}



//Akurasi Perbandingan data Hasil simulasi dan data real MD Perbulan
$_SESSION['akurasiMD'] = [];
$_SESSION['jumlah_akuarasi_MD'] = 0;
$_SESSION['jumlah_akuarasi_Kemarau_MD'] = 0;
$_SESSION['jumlah_akuarasi_Hujan_MD'] = 0;

for ($i=0; $i < count($bulan); $i++) { 
	$_SESSION['akurasiMD'][$bulan[$i]] = $_SESSION['hasilS_MD'][$bulan[$i]] <= $_SESSION['frek_MD'][$bulan[$i]] ?(int) round($_SESSION['hasilS_MD'][$bulan[$i]] / $_SESSION['frek_MD'][$bulan[$i]] * 100) : (int) round($_SESSION['frek_MD'][$bulan[$i]] / $_SESSION['hasilS_MD'][$bulan[$i]] * 100);
	$_SESSION['jumlah_akuarasi_MD'] += $_SESSION['akurasiMD'][$bulan[$i]];

	if($i >= 4 && $i <= 9){
		$_SESSION['jumlah_akuarasi_Kemarau_MD'] += $_SESSION['akurasiMD'][$bulan[$i]];
	}else{
		$_SESSION['jumlah_akuarasi_Hujan_MD'] += $_SESSION['akurasiMD'][$bulan[$i]];
	}  
}

//Akurasi Perbandingan Pertahun dan Permusim
$_SESSION['akurasi_tahun_MD'] = 0;
$_SESSION['akurasi_Kemarau_MD'] = 0;
$_SESSION['akurasi_Hujan_MD'] = 0;

$_SESSION['akurasi_tahun_MD'] = $_SESSION['total_hasilS_MD'] <= $_SESSION['total_dataR_MD'] ? (int) round($_SESSION['total_hasilS_MD'] / $_SESSION['total_dataR_MD'] * 100) : (int) round($_SESSION['total_dataR_MD'] / $_SESSION['total_hasilS_MD'] * 100);
$_SESSION['akurasi_Kemarau_MD'] = $_SESSION['total_hasilS_Kemarau_MD'] <= $_SESSION['total_dataR_Kemarau_MD'] ?(int) round($_SESSION['total_hasilS_Kemarau_MD'] / $_SESSION['total_dataR_Kemarau_MD'] * 100) : (int) round($_SESSION['total_dataR_Kemarau_MD'] /$_SESSION['total_hasilS_Kemarau_MD'] * 100);
$_SESSION['akurasi_Hujan_MD'] = $_SESSION['total_hasilS_Hujan_MD'] <= $_SESSION['total_dataR_Hujan_MD'] ?(int) round($_SESSION['total_hasilS_Hujan_MD'] / $_SESSION['total_dataR_Hujan_MD'] * 100) : (int) round($_SESSION['total_dataR_Hujan_MD'] /$_SESSION['total_hasilS_Hujan_MD'] * 100);       


//Rata-Rata pertahun hasil Simulasi, frekuensi(data real), Musim Kemarau dan Hujan Serta akurasi
$_SESSION['rata2_total_hasilS_MD'] = 0;
$_SESSION['rata2_total_hasilS_Kemarau_MD'] = 0;
$_SESSION['rata2_total_hasilS_Hujan_MD'] = 0;
$_SESSION['rata2_total_dataR_MD'] = 0;
$_SESSION['rata2_total_dataR_Kemarau_MD'] = 0;
$_SESSION['rata2_total_dataR_Hujan_MD'] = 0;
$_SESSION['rata2_akurasi_tahun_MD'] = 0;
$_SESSION['rata2_akurasi_Kemarau_MD'] = 0;
$_SESSION['rata2_akurasi_Hujan_MD'] = 0;

$_SESSION['rata2_total_hasilS_MD'] = (int) round($_SESSION['total_hasilS_MD'] / count($bulan));
$_SESSION['rata2_total_hasilS_Kemarau_MD'] = (int) round($_SESSION['total_hasilS_Kemarau_MD'] / count($musimKemarau));
$_SESSION['rata2_total_hasilS_Hujan_MD'] = (int) round($_SESSION['total_hasilS_Hujan_MD'] / count($musimHujan));
$_SESSION['rata2_total_dataR_MD'] = (int) round($_SESSION['total_dataR_MD'] / count($bulan));
$_SESSION['rata2_total_dataR_Kemarau_MD'] = (int) round($_SESSION['total_dataR_Kemarau_MD'] / count($musimKemarau));
$_SESSION['rata2_total_dataR_Hujan_MD'] = (int) round($_SESSION['total_dataR_Hujan_MD'] / count($musimHujan));
$_SESSION['rata2_akurasi_tahun_MD'] = (int) round($_SESSION['jumlah_akuarasi_MD'] / count($bulan)); 
$_SESSION['rata2_akurasi_Kemarau_MD'] = (int) round($_SESSION['jumlah_akuarasi_Kemarau_MD'] / count($musimKemarau));
$_SESSION['rata2_akurasi_Hujan_MD'] = (int) round($_SESSION['jumlah_akuarasi_Hujan_MD'] / count($musimHujan));



//hasil simulasi LB
$hasilMD = [];
$_SESSION['hasilS_LB'] = [];

for ($i=0; $i < count($bulan); $i++) { 
	
	//pecah untuk mememisahkan min dan max dari interval setiap bulan
	for ($j=0; $j < count($_SESSION['dataLB_bulan']) ; $j++) {

		$dataexplode = explode("-", $_SESSION['interval_LB_Januari'][$j]);
		$inter_minLB_Januari[$j] = $dataexplode[0];
		$inter_maxLB_Januari[$j] = isset($dataexplode[1]) ? $dataexplode[1] : $inter_maxLB_Januari[$j-1];


		$dataexplode = explode("-", $_SESSION['interval_LB_Februari'][$j]);
		$inter_minLB_Februari[$j] = $dataexplode[0];
		$inter_maxLB_Februari[$j] = isset($dataexplode[1]) ? $dataexplode[1] : $inter_maxLB_Februari[$j-1];


		$dataexplode = explode("-", $_SESSION['interval_LB_Maret'][$j]);
		$inter_minLB_Maret[$j] = $dataexplode[0];
		$inter_maxLB_Maret[$j] = isset($dataexplode[1]) ? $dataexplode[1] : $inter_maxLB_Maret[$j-1];


		$dataexplode = explode("-", $_SESSION['interval_LB_April'][$j]);
		$inter_minLB_April[$j] = $dataexplode[0];
		$inter_maxLB_April[$j] = isset($dataexplode[1]) ? $dataexplode[1] : $inter_maxLB_April[$j-1];


		$dataexplode = explode("-", $_SESSION['interval_LB_Mei'][$j]);
		$inter_minLB_Mei[$j] = $dataexplode[0];
		$inter_maxLB_Mei[$j] = isset($dataexplode[1]) ? $dataexplode[1] : $inter_maxLB_Mei[$j-1];


		$dataexplode = explode("-", $_SESSION['interval_LB_Juni'][$j]);
		$inter_minLB_Juni[$j] = $dataexplode[0];
		$inter_maxLB_Juni[$j] = isset($dataexplode[1]) ? $dataexplode[1] : $inter_maxLB_Juni[$j-1];

		$dataexplode = explode("-", $_SESSION['interval_LB_Juli'][$j]);
		$inter_minLB_Juli[$j] = $dataexplode[0];
		$inter_maxLB_Juli[$j] = isset($dataexplode[1]) ? $dataexplode[1] : $inter_maxLB_Juli[$j-1];

		$dataexplode = explode("-", $_SESSION['interval_LB_Agustus'][$j]);
		$inter_minLB_Agustus[$j] = $dataexplode[0];
		$inter_maxLB_Agustus[$j] = isset($dataexplode[1]) ? $dataexplode[1] : $inter_maxLB_Agustus[$j-1];

		$dataexplode = explode("-", $_SESSION['interval_LB_September'][$j]);
		$inter_minLB_September[$j] = $dataexplode[0];
		$inter_maxLB_September[$j] = isset($dataexplode[1]) ? $dataexplode[1] : $inter_maxLB_September[$j-1];

		$dataexplode = explode("-", $_SESSION['interval_LB_Oktober'][$j]);
		$inter_minLB_Oktober[$j] = $dataexplode[0];
		$inter_maxLB_Oktober[$j] = isset($dataexplode[1]) ? $dataexplode[1] : $inter_maxLB_Oktober[$j-1];

		$dataexplode = explode("-", $_SESSION['interval_LB_November'][$j]);
		$inter_minLB_November[$j] = $dataexplode[0];
		$inter_maxLB_November[$j] = isset($dataexplode[1]) ? $dataexplode[1] : $inter_maxLB_November[$j-1];

		$dataexplode = explode("-", $_SESSION['interval_LB_Desember'][$j]);
		$inter_minLB_Desember[$j] = $dataexplode[0];
		$inter_maxLB_Desember[$j] = isset($dataexplode[1]) ? $dataexplode[1] : $inter_maxLB_Desember[$j-1];


	}


	for ($k=0; $k < count($_SESSION['dataLB_bulan']); $k++) { 
		if( $_SESSION['angkaAcakLB']['Januari'] >= $inter_minLB_Januari[$k] && $_SESSION['angkaAcakLB']['Januari'] <= $inter_maxLB_Januari[$k] ){ 
			$hasilLB['Januari'] = $_SESSION['dataLB_bulan'][$k]['Januari']['data_bulan']; 
		} 

		if( $_SESSION['angkaAcakLB']['Februari'] >= $inter_minLB_Februari[$k] && $_SESSION['angkaAcakLB']['Februari'] <= $inter_maxLB_Februari[$k] ){ 
			$hasilLB['Februari'] = $_SESSION['dataLB_bulan'][$k]['Februari']['data_bulan']; 
		}  

		if( $_SESSION['angkaAcakLB']['Maret'] >= $inter_minLB_Maret[$k] && $_SESSION['angkaAcakLB']['Maret'] <= $inter_maxLB_Maret[$k] ){ 
			$hasilLB['Maret'] = $_SESSION['dataLB_bulan'][$k]['Maret']['data_bulan']; 
		}

		if( $_SESSION['angkaAcakLB']['April'] >= $inter_minLB_April[$k] && $_SESSION['angkaAcakLB']['April'] <= $inter_maxLB_April[$k] ){ 
			$hasilLB['April'] = $_SESSION['dataLB_bulan'][$k]['April']['data_bulan']; 
		}  

		if( $_SESSION['angkaAcakLB']['Mei'] >= $inter_minLB_Mei[$k] && $_SESSION['angkaAcakLB']['Mei'] <= $inter_maxLB_Mei[$k] ){ 
			$hasilLB['Mei'] = $_SESSION['dataLB_bulan'][$k]['Mei']['data_bulan']; 
		}  

		if( $_SESSION['angkaAcakLB']['Juni'] >= $inter_minLB_Juni[$k] && $_SESSION['angkaAcakLB']['Juni'] <= $inter_maxLB_Juni[$k] ){ 
			$hasilLB['Juni'] = $_SESSION['dataLB_bulan'][$k]['Juni']['data_bulan']; 
		}

		if( $_SESSION['angkaAcakLB']['Juli'] >= $inter_minLB_Juli[$k] && $_SESSION['angkaAcakLB']['Juli'] <= $inter_maxLB_Juli[$k] ){ 
			$hasilLB['Juli'] = $_SESSION['dataLB_bulan'][$k]['Juli']['data_bulan']; 
		}

		if( $_SESSION['angkaAcakLB']['Agustus'] >= $inter_minLB_Agustus[$k] && $_SESSION['angkaAcakLB']['Agustus'] <= $inter_maxLB_Agustus[$k] ){ 
			$hasilLB['Agustus'] = $_SESSION['dataLB_bulan'][$k]['Agustus']['data_bulan']; 
		}

		if( $_SESSION['angkaAcakLB']['September'] >= $inter_minLB_September[$k] && $_SESSION['angkaAcakLB']['September'] <= $inter_maxLB_September[$k] ){ 
			$hasilLB['September'] = $_SESSION['dataLB_bulan'][$k]['September']['data_bulan']; 
		} 

		if( $_SESSION['angkaAcakLB']['Oktober'] >= $inter_minLB_Oktober[$k] && $_SESSION['angkaAcakLB']['Oktober'] <= $inter_maxLB_Oktober[$k] ){ 
			$hasilLB['Oktober'] = $_SESSION['dataLB_bulan'][$k]['Oktober']['data_bulan']; 
		}

		if( $_SESSION['angkaAcakLB']['November'] >= $inter_minLB_November[$k] && $_SESSION['angkaAcakLB']['November'] <= $inter_maxLB_November[$k] ){ 
			$hasilLB['November'] = $_SESSION['dataLB_bulan'][$k]['November']['data_bulan']; 
		}

		if( $_SESSION['angkaAcakLB']['Desember'] >= $inter_minLB_Desember[$k] && $_SESSION['angkaAcakLB']['Desember'] <= $inter_maxLB_Desember[$k] ){ 
			$hasilLB['Desember'] = $_SESSION['dataLB_bulan'][$k]['Desember']['data_bulan']; 
		}			

	}

	$_SESSION['hasilS_LB'][$bulan[$i]] = $hasilLB[$bulan[$i]];	

	
}

//jumlah atau total hasil Simulasi LB dan Data Real Musim Kemarau dan Musim Hujan 
$_SESSION['total_hasilS_LB'] = 0;
$_SESSION['total_hasilS_Kemarau_LB'] = 0;
$_SESSION['total_hasilS_Hujan_LB'] = 0;
$_SESSION['total_dataR_LB'] = 0;
$_SESSION['total_dataR_Kemarau_LB'] = 0;
$_SESSION['total_dataR_Hujan_LB'] = 0;

for ($i=0; $i <count($bulan); $i++) { 
	
	$_SESSION['total_hasilS_LB'] += $_SESSION['hasilS_LB'][$bulan[$i]];
	$_SESSION['total_dataR_LB'] += $_SESSION['frek_LB'][$bulan[$i]]; 

	if($i >= 4 && $i <= 9){
		$_SESSION['total_hasilS_Kemarau_LB'] += $_SESSION['hasilS_LB'][$bulan[$i]];
		$_SESSION['total_dataR_Kemarau_LB'] += $_SESSION['frek_LB'][$bulan[$i]];
	}else{
		$_SESSION['total_hasilS_Hujan_LB'] += $_SESSION['hasilS_LB'][$bulan[$i]];
		$_SESSION['total_dataR_Hujan_LB'] += $_SESSION['frek_LB'][$bulan[$i]];
	}
}



//Akurasi Perbandingan data Hasil simulasi dan data real LB Perbulan
$_SESSION['akurasiLB'] = [];
$_SESSION['jumlah_akuarasi_LB'] = 0;
$_SESSION['jumlah_akuarasi_Kemarau_LB'] = 0;
$_SESSION['jumlah_akuarasi_Hujan_LB'] = 0;

for ($i=0; $i < count($bulan); $i++) { 
	$_SESSION['akurasiLB'][$bulan[$i]] = $_SESSION['hasilS_LB'][$bulan[$i]] <= $_SESSION['frek_LB'][$bulan[$i]] ?(int) round($_SESSION['hasilS_LB'][$bulan[$i]] / $_SESSION['frek_LB'][$bulan[$i]] * 100) : (int) round($_SESSION['frek_LB'][$bulan[$i]] / $_SESSION['hasilS_LB'][$bulan[$i]] * 100);
	$_SESSION['jumlah_akuarasi_LB'] += $_SESSION['akurasiLB'][$bulan[$i]];

	if($i >= 4 && $i <= 9){
		$_SESSION['jumlah_akuarasi_Kemarau_LB'] += $_SESSION['akurasiLB'][$bulan[$i]];
	}else{
		$_SESSION['jumlah_akuarasi_Hujan_LB'] += $_SESSION['akurasiLB'][$bulan[$i]];
	}  
}

//Akurasi Perbandingan Pertahun dan Permusim
$_SESSION['akurasi_tahun_LB'] = 0;
$_SESSION['akurasi_Kemarau_LB'] = 0;
$_SESSION['akurasi_Hujan_LB'] = 0;

$_SESSION['akurasi_tahun_LB'] = $_SESSION['total_hasilS_LB'] <= $_SESSION['total_dataR_LB'] ? (int) round($_SESSION['total_hasilS_LB'] / $_SESSION['total_dataR_LB'] * 100) : (int) round($_SESSION['total_dataR_LB'] / $_SESSION['total_hasilS_LB'] * 100);
$_SESSION['akurasi_Kemarau_LB'] = $_SESSION['total_hasilS_Kemarau_LB'] <= $_SESSION['total_dataR_Kemarau_LB'] ?(int) round($_SESSION['total_hasilS_Kemarau_LB'] / $_SESSION['total_dataR_Kemarau_LB'] * 100) : (int) round($_SESSION['total_dataR_Kemarau_LB'] /$_SESSION['total_hasilS_Kemarau_LB'] * 100);
$_SESSION['akurasi_Hujan_LB'] = $_SESSION['total_hasilS_Hujan_LB'] <= $_SESSION['total_dataR_Hujan_LB'] ?(int) round($_SESSION['total_hasilS_Hujan_LB'] / $_SESSION['total_dataR_Hujan_LB'] * 100) : (int) round($_SESSION['total_dataR_Hujan_LB'] /$_SESSION['total_hasilS_Hujan_LB'] * 100);       


//Rata-Rata pertahun hasil Simulasi, frekuensi(data real), Musim Kemarau dan Hujan Serta akurasi
$_SESSION['rata2_total_hasilS_LB'] = 0;
$_SESSION['rata2_total_hasilS_Kemarau_LB'] = 0;
$_SESSION['rata2_total_hasilS_Hujan_LB'] = 0;
$_SESSION['rata2_total_dataR_LB'] = 0;
$_SESSION['rata2_total_dataR_Kemarau_LB'] = 0;
$_SESSION['rata2_total_dataR_Hujan_LB'] = 0;
$_SESSION['rata2_akurasi_tahun_LB'] = 0;
$_SESSION['rata2_akurasi_Kemarau_LB'] = 0;
$_SESSION['rata2_akurasi_Hujan_LB'] = 0;

$_SESSION['rata2_total_hasilS_LB'] = (int) round($_SESSION['total_hasilS_LB'] / count($bulan));
$_SESSION['rata2_total_hasilS_Kemarau_LB'] = (int) round($_SESSION['total_hasilS_Kemarau_LB'] / count($musimKemarau));
$_SESSION['rata2_total_hasilS_Hujan_LB'] = (int) round($_SESSION['total_hasilS_Hujan_LB'] / count($musimHujan));
$_SESSION['rata2_total_dataR_LB'] = (int) round($_SESSION['total_dataR_LB'] / count($bulan));
$_SESSION['rata2_total_dataR_Kemarau_LB'] = (int) round($_SESSION['total_dataR_Kemarau_LB'] / count($musimKemarau));
$_SESSION['rata2_total_dataR_Hujan_LB'] = (int) round($_SESSION['total_dataR_Hujan_LB'] / count($musimHujan));
$_SESSION['rata2_akurasi_tahun_LB'] = (int) round($_SESSION['jumlah_akuarasi_LB'] / count($bulan)); 
$_SESSION['rata2_akurasi_Kemarau_LB'] = (int) round($_SESSION['jumlah_akuarasi_Kemarau_LB'] / count($musimKemarau));
$_SESSION['rata2_akurasi_Hujan_LB'] = (int) round($_SESSION['jumlah_akuarasi_Hujan_LB'] / count($musimHujan));


//hasil simulasi LR
$hasilLR = [];
$_SESSION['hasilS_LR'] = [];
for ($i=0; $i < count($bulan); $i++) { 
	
	//pecah untuk mememisahkan min dan max dari interval setiap bulan
	for ($j=0; $j < count($_SESSION['dataLR_bulan']) ; $j++) {

		$dataexplode = explode("-", $_SESSION['interval_LR_Januari'][$j]);
		$inter_minLR_Januari[$j] = $dataexplode[0];
		$inter_maxLR_Januari[$j] = isset($dataexplode[1]) ? $dataexplode[1] : $inter_maxLR_Januari[$j-1];


		$dataexplode = explode("-", $_SESSION['interval_LR_Februari'][$j]);
		$inter_minLR_Februari[$j] = $dataexplode[0];
		$inter_maxLR_Februari[$j] = isset($dataexplode[1]) ? $dataexplode[1] : $inter_maxLR_Februari[$j-1];


		$dataexplode = explode("-", $_SESSION['interval_LR_Maret'][$j]);
		$inter_minLR_Maret[$j] = $dataexplode[0];
		$inter_maxLR_Maret[$j] = isset($dataexplode[1]) ? $dataexplode[1] : $inter_maxLR_Maret[$j-1];


		$dataexplode = explode("-", $_SESSION['interval_LR_April'][$j]);
		$inter_minLR_April[$j] = $dataexplode[0];
		$inter_maxLR_April[$j] = isset($dataexplode[1]) ? $dataexplode[1] : $inter_maxLR_April[$j-1];


		$dataexplode = explode("-", $_SESSION['interval_LR_Mei'][$j]);
		$inter_minLR_Mei[$j] = $dataexplode[0];
		$inter_maxLR_Mei[$j] = isset($dataexplode[1]) ? $dataexplode[1] : $inter_maxLR_Mei[$j-1];


		$dataexplode = explode("-", $_SESSION['interval_LR_Juni'][$j]);
		$inter_minLR_Juni[$j] = $dataexplode[0];
		$inter_maxLR_Juni[$j] = isset($dataexplode[1]) ? $dataexplode[1] : $inter_maxLR_Juni[$j-1];

		$dataexplode = explode("-", $_SESSION['interval_LR_Juli'][$j]);
		$inter_minLR_Juli[$j] = $dataexplode[0];
		$inter_maxLR_Juli[$j] = isset($dataexplode[1]) ? $dataexplode[1] : $inter_maxLR_Juli[$j-1];

		$dataexplode = explode("-", $_SESSION['interval_LR_Agustus'][$j]);
		$inter_minLR_Agustus[$j] = $dataexplode[0];
		$inter_maxLR_Agustus[$j] = isset($dataexplode[1]) ? $dataexplode[1] : $inter_maxLR_Agustus[$j-1];

		$dataexplode = explode("-", $_SESSION['interval_LR_September'][$j]);
		$inter_minLR_September[$j] = $dataexplode[0];
		$inter_maxLR_September[$j] = isset($dataexplode[1]) ? $dataexplode[1] : $inter_maxLR_September[$j-1];

		$dataexplode = explode("-", $_SESSION['interval_LR_Oktober'][$j]);
		$inter_minLR_Oktober[$j] = $dataexplode[0];
		$inter_maxLR_Oktober[$j] = isset($dataexplode[1]) ? $dataexplode[1] : $inter_maxLR_Oktober[$j-1];

		$dataexplode = explode("-", $_SESSION['interval_LR_November'][$j]);
		$inter_minLR_November[$j] = $dataexplode[0];
		$inter_maxLR_November[$j] = isset($dataexplode[1]) ? $dataexplode[1] : $inter_maxLR_November[$j-1];

		$dataexplode = explode("-", $_SESSION['interval_LR_Desember'][$j]);
		$inter_minLR_Desember[$j] = $dataexplode[0];
		$inter_maxLR_Desember[$j] = isset($dataexplode[1]) ? $dataexplode[1] : $inter_maxLR_Desember[$j-1];
		


	}


	for ($k=0; $k < count($_SESSION['dataLR_bulan']); $k++) { 
		if( $_SESSION['angkaAcakLR']['Januari'] >= $inter_minLR_Januari[$k] && $_SESSION['angkaAcakLR']['Januari'] <= $inter_maxLR_Januari[$k] ){ 
			$hasilLR['Januari'] = $_SESSION['dataLR_bulan'][$k]['Januari']['data_bulan']; 
		} 

		if( $_SESSION['angkaAcakLR']['Februari'] >= $inter_minLR_Februari[$k] && $_SESSION['angkaAcakLR']['Februari'] <= $inter_maxLR_Februari[$k] ){ 
			$hasilLR['Februari'] = $_SESSION['dataLR_bulan'][$k]['Februari']['data_bulan']; 
		}  

		if( $_SESSION['angkaAcakLR']['Maret'] >= $inter_minLR_Maret[$k] && $_SESSION['angkaAcakLR']['Maret'] <= $inter_maxLR_Maret[$k] ){ 
			$hasilLR['Maret'] = $_SESSION['dataLR_bulan'][$k]['Maret']['data_bulan']; 
		}

		if( $_SESSION['angkaAcakLR']['April'] >= $inter_minLR_April[$k] && $_SESSION['angkaAcakLR']['April'] <= $inter_maxLR_April[$k] ){ 
			$hasilLR['April'] = $_SESSION['dataLR_bulan'][$k]['April']['data_bulan']; 
		}  

		if( $_SESSION['angkaAcakLR']['Mei'] >= $inter_minLR_Mei[$k] && $_SESSION['angkaAcakLR']['Mei'] <= $inter_maxLR_Mei[$k] ){ 
			$hasilLR['Mei'] = $_SESSION['dataLR_bulan'][$k]['Mei']['data_bulan']; 
		}  

		if( $_SESSION['angkaAcakLR']['Juni'] >= $inter_minLR_Juni[$k] && $_SESSION['angkaAcakLR']['Juni'] <= $inter_maxLR_Juni[$k] ){ 
			$hasilLR['Juni'] = $_SESSION['dataLR_bulan'][$k]['Juni']['data_bulan']; 
		}

		if( $_SESSION['angkaAcakLR']['Juli'] >= $inter_minLR_Juli[$k] && $_SESSION['angkaAcakLR']['Juli'] <= $inter_maxLR_Juli[$k] ){ 
			$hasilLR['Juli'] = $_SESSION['dataLR_bulan'][$k]['Juli']['data_bulan']; 
		}

		if( $_SESSION['angkaAcakLR']['Agustus'] >= $inter_minLR_Agustus[$k] && $_SESSION['angkaAcakLR']['Agustus'] <= $inter_maxLR_Agustus[$k] ){ 
			$hasilLR['Agustus'] = $_SESSION['dataLR_bulan'][$k]['Agustus']['data_bulan']; 
		}

		if( $_SESSION['angkaAcakLR']['September'] >= $inter_minLR_September[$k] && $_SESSION['angkaAcakLR']['September'] <= $inter_maxLR_September[$k] ){ 
			$hasilLR['September'] = $_SESSION['dataLR_bulan'][$k]['September']['data_bulan']; 
		} 

		if( $_SESSION['angkaAcakLR']['Oktober'] >= $inter_minLR_Oktober[$k] && $_SESSION['angkaAcakLR']['Oktober'] <= $inter_maxLR_Oktober[$k] ){ 
			$hasilLR['Oktober'] = $_SESSION['dataLR_bulan'][$k]['Oktober']['data_bulan']; 
		}

		if( $_SESSION['angkaAcakLR']['November'] >= $inter_minLR_November[$k] && $_SESSION['angkaAcakLR']['November'] <= $inter_maxLR_November[$k] ){ 
			$hasilLR['November'] = $_SESSION['dataLR_bulan'][$k]['November']['data_bulan']; 
		}

		if( $_SESSION['angkaAcakLR']['Desember'] >= $inter_minLR_Desember[$k] && $_SESSION['angkaAcakLR']['Desember'] <= $inter_maxLR_Desember[$k] ){ 
			$hasilLR['Desember'] = $_SESSION['dataLR_bulan'][$k]['Desember']['data_bulan']; 
		}			

	}

	$_SESSION['hasilS_LR'][$bulan[$i]] = $hasilLR[$bulan[$i]];	

	
}

//jumlah atau total hasil Simulasi LR dan Data Real Musim Kemarau dan Musim Hujan 
$_SESSION['total_hasilS_LR'] = 0;
$_SESSION['total_hasilS_Kemarau_LR'] = 0;
$_SESSION['total_hasilS_Hujan_LR'] = 0;
$_SESSION['total_dataR_LR'] = 0;
$_SESSION['total_dataR_Kemarau_LR'] = 0;
$_SESSION['total_dataR_Hujan_LR'] = 0;

for ($i=0; $i <count($bulan); $i++) { 
	
	$_SESSION['total_hasilS_LR'] += $_SESSION['hasilS_LR'][$bulan[$i]];
	$_SESSION['total_dataR_LR'] += $_SESSION['frek_LR'][$bulan[$i]]; 

	if($i >= 4 && $i <= 9){
		$_SESSION['total_hasilS_Kemarau_LR'] += $_SESSION['hasilS_LR'][$bulan[$i]];
		$_SESSION['total_dataR_Kemarau_LR'] += $_SESSION['frek_LR'][$bulan[$i]];
	}else{
		$_SESSION['total_hasilS_Hujan_LR'] += $_SESSION['hasilS_LR'][$bulan[$i]];
		$_SESSION['total_dataR_Hujan_LR'] += $_SESSION['frek_LR'][$bulan[$i]];
	}
}



//Akurasi Perbandingan data Hasil simulasi dan data real LR Perbulan
$_SESSION['akurasiLR'] = [];
$_SESSION['jumlah_akuarasi_LR'] = 0;
$_SESSION['jumlah_akuarasi_Kemarau_LR'] = 0;
$_SESSION['jumlah_akuarasi_Hujan_LR'] = 0;

for ($i=0; $i < count($bulan); $i++) { 
	$_SESSION['akurasiLR'][$bulan[$i]] = $_SESSION['hasilS_LR'][$bulan[$i]] <= $_SESSION['frek_LR'][$bulan[$i]] ?(int) round($_SESSION['hasilS_LR'][$bulan[$i]] / $_SESSION['frek_LR'][$bulan[$i]] * 100) : (int) round($_SESSION['frek_LR'][$bulan[$i]] / $_SESSION['hasilS_LR'][$bulan[$i]] * 100);
	$_SESSION['jumlah_akuarasi_LR'] += $_SESSION['akurasiLR'][$bulan[$i]];

	if($i >= 4 && $i <= 9){
		$_SESSION['jumlah_akuarasi_Kemarau_LR'] += $_SESSION['akurasiLR'][$bulan[$i]];
	}else{
		$_SESSION['jumlah_akuarasi_Hujan_LR'] += $_SESSION['akurasiLR'][$bulan[$i]];
	}  
}

//Akurasi Perbandingan Pertahun dan Permusim
$_SESSION['akurasi_tahun_LR'] = 0;
$_SESSION['akurasi_Kemarau_LR'] = 0;
$_SESSION['akurasi_Hujan_LR'] = 0;

$_SESSION['akurasi_tahun_LR'] = $_SESSION['total_hasilS_LR'] <= $_SESSION['total_dataR_LR'] ? (int) round($_SESSION['total_hasilS_LR'] / $_SESSION['total_dataR_LR'] * 100) : (int) round($_SESSION['total_dataR_LR'] / $_SESSION['total_hasilS_LR'] * 100);
$_SESSION['akurasi_Kemarau_LR'] = $_SESSION['total_hasilS_Kemarau_LR'] <= $_SESSION['total_dataR_Kemarau_LR'] ?(int) round($_SESSION['total_hasilS_Kemarau_LR'] / $_SESSION['total_dataR_Kemarau_LR'] * 100) : (int) round($_SESSION['total_dataR_Kemarau_LR'] /$_SESSION['total_hasilS_Kemarau_LR'] * 100);
$_SESSION['akurasi_Hujan_LR'] = $_SESSION['total_hasilS_Hujan_LR'] <= $_SESSION['total_dataR_Hujan_LR'] ?(int) round($_SESSION['total_hasilS_Hujan_LR'] / $_SESSION['total_dataR_Hujan_LR'] * 100) : (int) round($_SESSION['total_dataR_Hujan_LR'] /$_SESSION['total_hasilS_Hujan_LR'] * 100);       


//Rata-Rata pertahun hasil Simulasi, frekuensi(data real), Musim Kemarau dan Hujan Serta akurasi
$_SESSION['rata2_total_hasilS_LR'] = 0;
$_SESSION['rata2_total_hasilS_Kemarau_LR'] = 0;
$_SESSION['rata2_total_hasilS_Hujan_LR'] = 0;
$_SESSION['rata2_total_dataR_LR'] = 0;
$_SESSION['rata2_total_dataR_Kemarau_LR'] = 0;
$_SESSION['rata2_total_dataR_Hujan_LR'] = 0;
$_SESSION['rata2_akurasi_tahun_LR'] = 0;
$_SESSION['rata2_akurasi_Kemarau_LR'] = 0;
$_SESSION['rata2_akurasi_Hujan_LR'] = 0;

$_SESSION['rata2_total_hasilS_LR'] = (int) round($_SESSION['total_hasilS_LR'] / count($bulan));
$_SESSION['rata2_total_hasilS_Kemarau_LR'] = (int) round($_SESSION['total_hasilS_Kemarau_LR'] / count($musimKemarau));
$_SESSION['rata2_total_hasilS_Hujan_LR'] = (int) round($_SESSION['total_hasilS_Hujan_LR'] / count($musimHujan));
$_SESSION['rata2_total_dataR_LR'] = (int) round($_SESSION['total_dataR_LR'] / count($bulan));
$_SESSION['rata2_total_dataR_Kemarau_LR'] = (int) round($_SESSION['total_dataR_Kemarau_LR'] / count($musimKemarau));
$_SESSION['rata2_total_dataR_Hujan_LR'] = (int) round($_SESSION['total_dataR_Hujan_LR'] / count($musimHujan));
$_SESSION['rata2_akurasi_tahun_LR'] = (int) round($_SESSION['jumlah_akuarasi_LR'] / count($bulan)); 
$_SESSION['rata2_akurasi_Kemarau_LR'] = (int) round($_SESSION['jumlah_akuarasi_Kemarau_LR'] / count($musimKemarau));
$_SESSION['rata2_akurasi_Hujan_LR'] = (int) round($_SESSION['jumlah_akuarasi_Hujan_LR'] / count($musimHujan));

if(isset($_POST['simpan'])){
	if( simpanHasil($_POST) > 0){
		$_SESSION['alert'] = "on";
		$_SESSION['pesan'] = "Data Berhasil Disimpan!";
		header("Location: kalkulasi.php?hs=jeremy");
		exit;
		// echo " 
		// <script>
		// document.location.href = 'kalkulasi.php?hs=jeremy';
		// </script>   
		// ";
	}else{
		echo "
		<script>
		alert('Data gagal disimpan');
		document.location.href = 'kalkulasi.php?hs=jeremy';
		</script>   
		";
	}
	
}

?>
<div class="row">
	<div class="col-6">
		<h3>Hasil Simulasi</h3>
	</div>

	<div class="col-6 text-end">
		<form action="" method="POST">

			<!-- Meninggal Dunia -->
			<input type="hidden" name="id_kategori_MD" value="<?= 1;?>">
			<input type="hidden" name="tahun_hasilS_MD" value="<?=  $_SESSION['tahun_uji_MD'];?>">
			<?php for ($i=0; $i < count($bulan) ; $i++) : ?>	
				<input type="hidden" name="angka_acak_MD[]" value="<?=  $_SESSION['angkaAcakMD'][$bulan[$i]] ?>">
				<input type="hidden" name="hasil_simulasi_MD[]" value="<?= $_SESSION['hasilS_MD'][$bulan[$i]] ?>"> 
				<input type="hidden" name="data_real_MD[]" value="<?= $_SESSION['frek_MD'][$bulan[$i]]; ?>">
				<input type="hidden" name="akurasi_MD[]" value="<?= "{$_SESSION['akurasiMD'][$bulan[$i]]}%" ?>">
			<?php endfor ?>
			<input type="hidden" name="total_hasilS_MD" value="<?= $_SESSION['total_hasilS_MD']; ?>">
			<input type="hidden" name="total_dataR_MD" value="<?= $_SESSION['total_dataR_MD']; ?>">
			<input type="hidden" name="akurasi_tahun_MD" value="<?= "{$_SESSION['akurasi_tahun_MD']}%"; ?>">
			<input type="hidden" name="total_hasilS_Kemarau_MD" value="<?= $_SESSION['total_hasilS_Kemarau_MD']; ?>">
			<input type="hidden" name="total_dataR_Kemarau_MD" value="<?= $_SESSION['total_dataR_Kemarau_MD']; ?>">
			<input type="hidden" name="akurasi_Kemarau_MD" value="<?= "{$_SESSION['akurasi_Kemarau_MD']}%"; ?>">
			<input type="hidden" name="total_hasilS_Hujan_MD" value="<?= $_SESSION['total_hasilS_Hujan_MD']; ?>">
			<input type="hidden" name="total_dataR_Hujan_MD" value="<?= $_SESSION['total_dataR_Hujan_MD']; ?>">
			<input type="hidden" name="akurasi_Hujan_MD" value="<?= "{$_SESSION['akurasi_Hujan_MD']}%"; ?>">
			<input type="hidden" name="rata2_hasilS_MD" value="<?= $_SESSION['rata2_total_hasilS_MD']; ?>">
			<input type="hidden" name="rata2_data_real_MD" value="<?= $_SESSION['rata2_total_dataR_MD']; ?>"> 
			<input type="hidden" name="rata2_akurasi_MD" value="<?= "{$_SESSION['rata2_akurasi_tahun_MD']}%"; ?>">
			<input type="hidden" name="rata2_hasilS_Kemarau_MD" value="<?= $_SESSION['rata2_total_hasilS_Kemarau_MD']; ?>">
			<input type="hidden" name="rata2_data_real_Kemarau_MD" value="<?= $_SESSION['rata2_total_dataR_Kemarau_MD']; ?>"> 
			<input type="hidden" name="rata2_akurasi_Kemarau_MD" value="<?= "{$_SESSION['rata2_akurasi_Kemarau_MD']}%"; ?>">
			<input type="hidden" name="rata2_hasilS_Hujan_MD" value="<?= $_SESSION['rata2_total_hasilS_Hujan_MD']; ?>">
			<input type="hidden" name="rata2_data_real_Hujan_MD" value="<?= $_SESSION['rata2_total_dataR_Hujan_MD']; ?>"> 
			<input type="hidden" name="rata2_akurasi_Hujan_MD" value="<?= "{$_SESSION['rata2_akurasi_Hujan_MD']}%"; ?>">

			<!-- Luka Berat -->
			<input type="hidden" name="id_kategori_LB" value="<?= 2;?>">
			<input type="hidden" name="tahun_hasilS_LB" value="<?=  $_SESSION['tahun_uji_LB'];?>">
			<?php for ($i=0; $i < count($bulan) ; $i++) : ?>	
				<input type="hidden" name="angka_acak_LB[]" value="<?=  $_SESSION['angkaAcakLB'][$bulan[$i]] ?>">
				<input type="hidden" name="hasil_simulasi_LB[]" value="<?= $_SESSION['hasilS_LB'][$bulan[$i]] ?>"> 
				<input type="hidden" name="data_real_LB[]" value="<?= $_SESSION['frek_LB'][$bulan[$i]]; ?>">
				<input type="hidden" name="akurasi_LB[]" value="<?= "{$_SESSION['akurasiLB'][$bulan[$i]]}%" ?>">
			<?php endfor ?>
			<input type="hidden" name="total_hasilS_LB" value="<?= $_SESSION['total_hasilS_LB']; ?>">
			<input type="hidden" name="total_dataR_LB" value="<?= $_SESSION['total_dataR_LB']; ?>">
			<input type="hidden" name="akurasi_tahun_LB" value="<?= "{$_SESSION['akurasi_tahun_LB']}%"; ?>">
			<input type="hidden" name="total_hasilS_Kemarau_LB" value="<?= $_SESSION['total_hasilS_Kemarau_LB']; ?>">
			<input type="hidden" name="total_dataR_Kemarau_LB" value="<?= $_SESSION['total_dataR_Kemarau_LB']; ?>">
			<input type="hidden" name="akurasi_Kemarau_LB" value="<?= "{$_SESSION['akurasi_Kemarau_LB']}%"; ?>">
			<input type="hidden" name="total_hasilS_Hujan_LB" value="<?= $_SESSION['total_hasilS_Hujan_LB']; ?>">
			<input type="hidden" name="total_dataR_Hujan_LB" value="<?= $_SESSION['total_dataR_Hujan_LB']; ?>">
			<input type="hidden" name="akurasi_Hujan_LB" value="<?= "{$_SESSION['akurasi_Hujan_LB']}%"; ?>">
			<input type="hidden" name="rata2_hasilS_LB" value="<?= $_SESSION['rata2_total_hasilS_LB']; ?>">
			<input type="hidden" name="rata2_data_real_LB" value="<?= $_SESSION['rata2_total_dataR_LB']; ?>"> 
			<input type="hidden" name="rata2_akurasi_LB" value="<?= "{$_SESSION['rata2_akurasi_tahun_LB']}%"; ?>">
			<input type="hidden" name="rata2_hasilS_Kemarau_LB" value="<?= $_SESSION['rata2_total_hasilS_Kemarau_LB']; ?>">
			<input type="hidden" name="rata2_data_real_Kemarau_LB" value="<?= $_SESSION['rata2_total_dataR_Kemarau_LB']; ?>"> 
			<input type="hidden" name="rata2_akurasi_Kemarau_LB" value="<?= "{$_SESSION['rata2_akurasi_Kemarau_LB']}%"; ?>">
			<input type="hidden" name="rata2_hasilS_Hujan_LB" value="<?= $_SESSION['rata2_total_hasilS_Hujan_LB']; ?>">
			<input type="hidden" name="rata2_data_real_Hujan_LB" value="<?= $_SESSION['rata2_total_dataR_Hujan_LB']; ?>"> 
			<input type="hidden" name="rata2_akurasi_Hujan_LB" value="<?= "{$_SESSION['rata2_akurasi_Hujan_LB']}%"; ?>">

			<!-- Luka Ringan -->
			<input type="hidden" name="id_kategori_LR" value="<?= 3;?>">
			<input type="hidden" name="tahun_hasilS_LR" value="<?=  $_SESSION['tahun_uji_LR'];?>">
			<?php for ($i=0; $i < count($bulan) ; $i++) : ?>	
				<input type="hidden" name="angka_acak_LR[]" value="<?=  $_SESSION['angkaAcakLR'][$bulan[$i]] ?>">
				<input type="hidden" name="hasil_simulasi_LR[]" value="<?= $_SESSION['hasilS_LR'][$bulan[$i]] ?>"> 
				<input type="hidden" name="data_real_LR[]" value="<?= $_SESSION['frek_LR'][$bulan[$i]]; ?>">
				<input type="hidden" name="akurasi_LR[]" value="<?= "{$_SESSION['akurasiLR'][$bulan[$i]]}%" ?>">
			<?php endfor ?>
			<input type="hidden" name="total_hasilS_LR" value="<?= $_SESSION['total_hasilS_LR']; ?>">
			<input type="hidden" name="total_dataR_LR" value="<?= $_SESSION['total_dataR_LR']; ?>">
			<input type="hidden" name="akurasi_tahun_LR" value="<?= "{$_SESSION['akurasi_tahun_LR']}%"; ?>">
			<input type="hidden" name="total_hasilS_Kemarau_LR" value="<?= $_SESSION['total_hasilS_Kemarau_LR']; ?>">
			<input type="hidden" name="total_dataR_Kemarau_LR" value="<?= $_SESSION['total_dataR_Kemarau_LR']; ?>">
			<input type="hidden" name="akurasi_Kemarau_LR" value="<?= "{$_SESSION['akurasi_Kemarau_LR']}%"; ?>">
			<input type="hidden" name="total_hasilS_Hujan_LR" value="<?= $_SESSION['total_hasilS_Hujan_LR']; ?>">
			<input type="hidden" name="total_dataR_Hujan_LR" value="<?= $_SESSION['total_dataR_Hujan_LR']; ?>">
			<input type="hidden" name="akurasi_Hujan_LR" value="<?= "{$_SESSION['akurasi_Hujan_LR']}%"; ?>">
			<input type="hidden" name="rata2_hasilS_LR" value="<?= $_SESSION['rata2_total_hasilS_LR']; ?>">
			<input type="hidden" name="rata2_data_real_LR" value="<?= $_SESSION['rata2_total_dataR_LR']; ?>"> 
			<input type="hidden" name="rata2_akurasi_LR" value="<?= "{$_SESSION['rata2_akurasi_tahun_LR']}%"; ?>">
			<input type="hidden" name="rata2_hasilS_Kemarau_LR" value="<?= $_SESSION['rata2_total_hasilS_Kemarau_LR']; ?>">
			<input type="hidden" name="rata2_data_real_Kemarau_LR" value="<?= $_SESSION['rata2_total_dataR_Kemarau_LR']; ?>"> 
			<input type="hidden" name="rata2_akurasi_Kemarau_LR" value="<?= "{$_SESSION['rata2_akurasi_Kemarau_LR']}%"; ?>">
			<input type="hidden" name="rata2_hasilS_Hujan_LR" value="<?= $_SESSION['rata2_total_hasilS_Hujan_LR']; ?>">
			<input type="hidden" name="rata2_data_real_Hujan_LR" value="<?= $_SESSION['rata2_total_dataR_Hujan_LR']; ?>"> 
			<input type="hidden" name="rata2_akurasi_Hujan_LR" value="<?= "{$_SESSION['rata2_akurasi_Hujan_LR']}%"; ?>">


			<button name="simpan" class="btn btn-sm btn-primary"><i class="fa-solid fa-floppy-disk"></i><strong>  Simpan Hasil Simulasi</strong></button>

		</form>
	</div>
</div>

<div class="position-relative mt-4">
	<div class="accordion w-100 position-absolute top-0 start-50 translate-middle-x" id="accordionExample">
		<div class="accordion-item">
			<h2 class="accordion-header" id="headingOne">
				<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
					<h5>Meninggal</h5>
				</button>
			</h2>
			<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
				<div class="accordion-body">
					<div class="position-relative ">
						<div class="row">
							<div class="col-6 tex-start icon_utama" data-bs-toggle="collapse" data-bs-target=".MD_all">
								<span>Show All : </span><i class="fa-solid fa-plus"></i>
							</div>
							<div class="col-6 text-end">
								<a href="#"  class="btn btn-sm btn-dark shadow-sm d-inline" data-toggle="modal" data-target="#exportdataMD" data-backdrop="static" data-keyboard="false"><i class="fa-solid fa-file-export"></i> Export</a>
								<a href="#"  class="btn btn-sm btn-dark shadow-sm d-inline" data-toggle="modal" data-target="#grafikMD" data-backdrop="static" data-keyboard="false"><i class="fa-solid fa-chart-pie"></i> Grafik</a>
							</div>							
						</div>
						<!-- bulan january -->
						<table class="table mb-0">
							<caption class="caption-top text-center">Data Meninggal Dunia</caption>
							<thead>
								<tr class="table-dark text-center">
									<th class="col-2">Bulan</i></th>
									<th class="col-2">Angka Acak</th>
									<th class="col-2">Hasil Simulasi</th>
									<th class="col-2">Data Real <?= $_SESSION['tahun_uji_MD']; ?> </th>
									<th class="col-4">Tingkat Akuarasi</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<table class="table table-bordered table-sm accordion mb-0">
										<!-- <caption class="caption-top text-center">Data Meninggal Dunia</caption> -->
										<thead>
											<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#MDr1">
												<th style="border-left-color:blue;">Januari <i class="fa-solid fa-caret-down"></i></th>
												<th class="col-2 text-center"><?= $_SESSION['angkaAcakMD']['Januari'] ?></th>
												<th class="col-2 text-center"><?= $_SESSION['hasilS_MD']['Januari'] ?></th>	
												<th class="col-2 text-center"><?= $_SESSION['frek_MD']['Januari']?></th>
												<th colspan="2" class="col-4 text-center"><?= "{$_SESSION['akurasiMD']['Januari']}%" ?></th>

											</tr>
											<tr class="text-center collapse accordion-collapse MD_all"  id="MDr1" data-bs-parent=".table" >
												<th>No</th>
												<th>Bulan</th>
												<th>Frekuensi</th>
												<th>Probabilitas</th>
												<th>Kumulatif</th>
												<th>Interval Angka Acak</th>

											</tr>
										</thead>
										<tbody>	
											<?php $no = 1; for ($i=0; $i < count($_SESSION['dataMD_bulan']) ; $i++) : ?>
											<tr class="text-center collapse accordion-collapse MD_all" id="MDr1" data-bs-parent=".table" >
												<td><?= $no++; ?></td>
												<td class="text-justify">Januari <?= $_SESSION['tahunMD_bulan'][$i]; ?></td>
												<td><?= $_SESSION['dataMD_bulan'][$i]['Januari']['data_bulan'];  ?></td>
												<td><?= $_SESSION['prob_MD_Januari'][$i]; ?></td>
												<td><?= $_SESSION['kumu_Januari_MD'][$i]; ?></td>
												<td><?= $_SESSION['interval_MD_Januari'][$i]; ?></td>				
											</tr>
										<?php endfor; ?>	
										<tr class="text-center collapse accordion-collapse MD_all" id="MDr1" data-bs-parent=".table">
											<th colspan="2">Total</th>
											<td><?= $_SESSION['jumlahFrekuensiMD_Januari']; ?></td>
											<td><?= $_SESSION['jumlah_prob_Januari_MD'] ?></td>
										</tr>
									</tbody>
								</table>

								<!-- bulan February -->
								<table class="table table-bordered table-sm accordion mb-0">
									<!-- <caption class="caption-top text-center">Data Meninggal Dunia</caption> -->
									<thead>
										<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#MDr2">
											<th style="border-left-color:blue">Februari <i class="fa-solid fa-caret-down"></i></th>
											<th class="col-2 text-center"><?= $_SESSION['angkaAcakMD']['Februari'] ?></th>
											<th class="col-2 text-center"><?= $_SESSION['hasilS_MD']['Februari'] ?></th>	
											<th class="col-2 text-center"><?= $_SESSION['frek_MD']['Februari']?></th>
											<th colspan="2" class="col-4 text-center"><?= "{$_SESSION['akurasiMD']['Februari']}%" ?></th>	
										</tr>
										<tr class="text-center collapse accordion-collapse MD_all"  id="MDr2" data-bs-parent=".table" >
											<th>No</th>
											<th>Bulan</th>
											<th>Frekuensi</th>
											<th>Probabilitas</th>
											<th>Kumulatif</th>
											<th>Interval Angka Acak</th>
										</tr>
									</thead>
									<tbody>
										<?php $no = 1; for ($i=0; $i < count($_SESSION['dataMD_bulan']) ; $i++) : ?>
										<tr class="text-center collapse accordion-collapse MD_all" id="MDr2" data-bs-parent=".table" >
											<td><?= $no++; ?></td>
											<td class="text-justify">Februari  <?= $_SESSION['tahunMD_bulan'][$i]; ?></td>
											<td><?= $_SESSION['dataMD_bulan'][$i]['Februari']['data_bulan'];  ?></td>	
											<td><?= $_SESSION['prob_MD_Februari'][$i]; ?></td>	
											<td><?= $_SESSION['kumu_Februari_MD'][$i]; ?></td>
											<td><?= $_SESSION['interval_MD_Februari'][$i]; ?></td>	
										</tr>
									<?php endfor; ?>	
									<tr class="text-center collapse accordion-collapse MD_all" id="MDr2" data-bs-parent=".table">
										<th  colspan="2">Total</th>
										<td><?= $_SESSION['jumlahFrekuensiMD_Februari']; ?></td>
										<td><?= $_SESSION['jumlah_prob_Februari_MD'] ?></td>
									</tr>
								</tbody>
							</table>

							<!-- bulan Maret -->
							<table class="table table-bordered table-sm accordion mb-0">
								<!-- <caption class="caption-top text-center">Data Meninggal Dunia</caption> -->
								<thead>
									<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#MDr3">
										<th style="border-left-color:blue">Maret <i class="fa-solid fa-caret-down"></i></th>
										<th class="col-2 text-center"><?= $_SESSION['angkaAcakMD']['Maret'] ?></th>
										<th class="col-2 text-center"><?= $_SESSION['hasilS_MD']['Maret'] ?></th>	
										<th class="col-2 text-center"><?= $_SESSION['frek_MD']['Maret']?></th>
										<th colspan="2" class="col-4 text-center"><?= "{$_SESSION['akurasiMD']['Maret']}%" ?></th>	
									</tr>
									<tr class="text-center collapse accordion-collapse MD_all"  id="MDr3" data-bs-parent=".table" >
										<th>No</th>
										<th>Bulan</th>
										<th>Frekuensi</th>
										<th>Probabilitas</th>
										<th>Kumulatif</th>
										<th>Interval Angka Acak</th>
									</tr>
								</thead>
								<tbody>
									<?php $no = 1; for ($i=0; $i < count($_SESSION['dataMD_bulan']) ; $i++) : ?>
									<tr class="text-center collapse accordion-collapse MD_all" id="MDr3" data-bs-parent=".table" >
										<td><?= $no++; ?></td>
										<td class="text-justify">Maret  <?= $_SESSION['tahunMD_bulan'][$i]; ?></td>
										<td><?= $_SESSION['dataMD_bulan'][$i]['Maret']['data_bulan'];  ?></td>
										<td><?= $_SESSION['prob_MD_Maret'][$i]; ?></td>	
										<td><?= $_SESSION['kumu_Maret_MD'][$i]; ?></td>		
										<td><?= $_SESSION['interval_MD_Maret'][$i]; ?></td>	
									</tr>
								<?php endfor; ?>	
								<tr class="text-center collapse accordion-collapse MD_all" id="MDr3" data-bs-parent=".table">
									<th  colspan="2">Total</th>
									<td><?= $_SESSION['jumlahFrekuensiMD_Maret']; ?></td>
									<td><?= $_SESSION['jumlah_prob_Maret_MD'] ?></td>
								</tr>
							</tbody>
						</table>

						<!-- bulan April -->
						<table class="table table-bordered table-sm accordion mb-0">
							<!-- <caption class="caption-top text-center">Data Meninggal Dunia</caption> -->
							<thead>
								<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#MDr4">
									<th style="border-left-color:blue">April <i class="fa-solid fa-caret-down"></i></th>
									<th class="col-2 text-center"><?= $_SESSION['angkaAcakMD']['April'] ?></th>
									<th class="col-2 text-center"><?= $_SESSION['hasilS_MD']['April'] ?></th>	
									<th class="col-2 text-center"><?= $_SESSION['frek_MD']['April']?></th>
									<th colspan="2" class="col-4 text-center"><?= "{$_SESSION['akurasiMD']['April']}%" ?></th>
								</tr>
								<tr class="text-center collapse accordion-collapse MD_all"  id="MDr4" data-bs-parent=".table" >
									<th>No</th>
									<th>Bulan</th>
									<th>Frekuensi</th>
									<th>Probabilitas</th>
									<th>Kumulatif</th>
									<th>Interval Angka Acak</th>
								</tr>
							</thead>
							<tbody>
								<?php $no = 1; for ($i=0; $i < count($_SESSION['dataMD_bulan']) ; $i++) : ?>
								<tr class="text-center collapse accordion-collapse MD_all" id="MDr4" data-bs-parent=".table" >
									<td><?= $no++; ?></td>
									<td class="text-justify">April  <?= $_SESSION['tahunMD_bulan'][$i]; ?></td>
									<td><?= $_SESSION['dataMD_bulan'][$i]['April']['data_bulan'];  ?></td>
									<td><?= $_SESSION['prob_MD_April'][$i];  ?></td>	
									<td><?= $_SESSION['kumu_April_MD'][$i]; ?></td>
									<td><?= $_SESSION['interval_MD_April'][$i]; ?></td>		
								</tr>
							<?php endfor; ?>	
							<tr class="text-center collapse accordion-collapse MD_all" id="MDr4" data-bs-parent=".table">
								<th  colspan="2">Total</th>
								<td><?= $_SESSION['jumlahFrekuensiMD_April']; ?></td>
								<td><?= $_SESSION['jumlah_prob_April_MD'] ?></td>
							</tr>
						</tbody>
					</table>

					<!-- bulan Mei -->
					<table class="table table-bordered table-sm accordion mb-0">
						<!-- <caption class="caption-top text-center">Data Meninggal Dunia</caption> -->
						<thead>
							<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#MDr5">
								<th style="border-left-color:red">Mei <i class="fa-solid fa-caret-down"></i></th>
								<th class="col-2 text-center"><?= $_SESSION['angkaAcakMD']['Mei'] ?></th>
								<th class="col-2 text-center"><?= $_SESSION['hasilS_MD']['Mei'] ?></th>	
								<th class="col-2 text-center"><?= $_SESSION['frek_MD']['Mei']?></th>
								<th colspan="2" class="col-4 text-center"><?= "{$_SESSION['akurasiMD']['Mei']}%" ?></th>
							</tr>
							<tr class="text-center collapse accordion-collapse MD_all"  id="MDr5" data-bs-parent=".table" >
								<th>No</th>
								<th>Bulan</th>
								<th>Frekuensi</th>
								<th>Probabilitas</th>
								<th>Kumulatif</th>
								<th>Interval Angka Acak</th>
							</tr>
						</thead>
						<tbody>
							<?php $no = 1; for ($i=0; $i < count($_SESSION['dataMD_bulan']) ; $i++) : ?>
							<tr class="text-center collapse accordion-collapse MD_all" id="MDr5" data-bs-parent=".table" >
								<td><?= $no++; ?></td>
								<td class="text-justify">Mei  <?= $_SESSION['tahunMD_bulan'][$i]; ?></td>
								<td><?= $_SESSION['dataMD_bulan'][$i]['Mei']['data_bulan'];  ?></td>
								<td><?= $_SESSION['prob_MD_Mei'][$i];  ?></td>
								<td><?= $_SESSION['kumu_Mei_MD'][$i]; ?></td>
								<td><?= $_SESSION['interval_MD_Mei'][$i]; ?></td>							
							</tr>
						<?php endfor; ?>	
						<tr class="text-center collapse accordion-collapse MD_all" id="MDr5" data-bs-parent=".table">
							<th  colspan="2">Total</th>
							<td><?= $_SESSION['jumlahFrekuensiMD_Mei']; ?></td>
							<td><?= $_SESSION['jumlah_prob_Mei_MD'] ?></td>
						</tr>
					</tbody>
				</table>

				<!-- bulan Juni -->
				<table class="table table-bordered table-sm accordion mb-0">
					<!-- <caption class="caption-top text-center">Data Meninggal Dunia</caption> -->
					<thead>
						<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#MDr6">
							<th style="border-left-color:red">Juni <i class="fa-solid fa-caret-down"></i></th>
							<th class="col-2 text-center"><?= $_SESSION['angkaAcakMD']['Juni'] ?></th>
							<th class="col-2 text-center"><?= $_SESSION['hasilS_MD']['Juni'] ?></th>	
							<th class="col-2 text-center"><?= $_SESSION['frek_MD']['Juni']?></th>
							<th colspan="2" class="col-4 text-center"><?= "{$_SESSION['akurasiMD']['Juni']}%" ?></th>
						</tr>
						<tr class="text-center collapse accordion-collapse MD_all"  id="MDr6" data-bs-parent=".table" >
							<th>No</th>
							<th>Bulan</th>
							<th>Frekuensi</th>
							<th>Probabilitas</th>
							<th>Kumulatif</th>
							<th>Interval Angka Acak</th>
						</tr>
					</thead>
					<tbody>
						<?php $no = 1; for ($i=0; $i < count($_SESSION['dataMD_bulan']) ; $i++) : ?>
						<tr class="text-center collapse accordion-collapse MD_all" id="MDr6" data-bs-parent=".table" >
							<td><?= $no++; ?></td>
							<td class="text-justify">Juni  <?= $_SESSION['tahunMD_bulan'][$i]; ?></td>
							<td><?= $_SESSION['dataMD_bulan'][$i]['Juni']['data_bulan'];  ?></td>
							<td><?= $_SESSION['prob_MD_Juni'][$i] ?></td>
							<td><?= $_SESSION['kumu_Juni_MD'][$i]; ?></td>
							<td><?= $_SESSION['interval_MD_Juni'][$i]; ?></td>			
						</tr>
					<?php endfor; ?>	
					<tr class="text-center collapse accordion-collapse MD_all" id="MDr6" data-bs-parent=".table">
						<th  colspan="2">Total</th>
						<td><?= $_SESSION['jumlahFrekuensiMD_Juni']; ?></td>
						<td><?= $_SESSION['jumlah_prob_Juni_MD'] ?></td>
					</tr>
				</tbody>
			</table>


			<!-- bulan Juli -->
			<table class="table table-bordered table-sm accordion mb-0">
				<!-- <caption class="caption-top text-center">Data Meninggal Dunia</caption> -->
				<thead>
					<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#MDr7">
						<th style="border-left-color:red">Juli <i class="fa-solid fa-caret-down"></i></th>
						<th class="col-2 text-center"><?= $_SESSION['angkaAcakMD']['Juli'] ?></th>
						<th class="col-2 text-center"><?= $_SESSION['hasilS_MD']['Juli'] ?></th>	
						<th class="col-2 text-center"><?= $_SESSION['frek_MD']['Juli']?></th>
						<th colspan="2" class="col-4 text-center"><?= "{$_SESSION['akurasiMD']['Juli']}%" ?></th>			</tr>
						<tr class="text-center collapse accordion-collapse MD_all"  id="MDr7" data-bs-parent=".table" >
							<th>No</th>
							<th>Bulan</th>
							<th>Frekuensi</th>
							<th>Probabilitas</th>
							<th>Kumulatif</th>
							<th>Interval Angka Acak</th>
						</tr>
					</thead>
					<tbody>
						<?php $no = 1; for ($i=0; $i < count($_SESSION['dataMD_bulan']) ; $i++) : ?>
						<tr class="text-center collapse accordion-collapse MD_all" id="MDr7" data-bs-parent=".table" >
							<td><?= $no++; ?></td>
							<td class="text-justify">Juli  <?= $_SESSION['tahunMD_bulan'][$i]; ?></td>
							<td><?= $_SESSION['dataMD_bulan'][$i]['Juli']['data_bulan'];  ?></td>	
							<td><?= $_SESSION['prob_MD_Juli'][$i]?></td>
							<td><?= $_SESSION['kumu_Juli_MD'][$i]; ?></td>
							<td><?= $_SESSION['interval_MD_Juli'][$i]; ?></td>	
						</tr>
					<?php endfor; ?>	
					<tr class="text-center collapse accordion-collapse MD_all" id="MDr7" data-bs-parent=".table">
						<th  colspan="2">Total</th>
						<td><?= $_SESSION['jumlahFrekuensiMD_Juli']; ?></td>
						<td><?= $_SESSION['jumlah_prob_Juli_MD'] ?></td>
					</tr>
				</tbody>
			</table>


			<!-- bulan Agustus -->
			<table class="table table-bordered table-sm accordion mb-0">
				<!-- <caption class="caption-top text-center">Data Meninggal Dunia</caption> -->

				<thead>
					<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#MDr8">
						<th style="border-left-color:red">Agustus <i class="fa-solid fa-caret-down"></i></th>
						<th class="col-2 text-center"><?= $_SESSION['angkaAcakMD']['Agustus'] ?></th>
						<th class="col-2 text-center"><?= $_SESSION['hasilS_MD']['Agustus'] ?></th>	
						<th class="col-2 text-center"><?= $_SESSION['frek_MD']['Agustus']?></th>
						<th colspan="2" class="col-4 text-center"><?= "{$_SESSION['akurasiMD']['Agustus']}%" ?></th>
					</tr>
					<tr class="text-center collapse accordion-collapse MD_all"  id="MDr8" data-bs-parent=".table" >
						<th>No</th>
						<th>Bulan</th>
						<th>Frekuensi</th>
						<th>Probabilitas</th>
						<th>Kumulatif</th>
						<th>Interval Angka Acak</th>
					</tr>
				</thead>
				<tbody>
					<?php $no = 1; for ($i=0; $i < count($_SESSION['dataMD_bulan']) ; $i++) : ?>
					<tr class="text-center collapse accordion-collapse MD_all" id="MDr8" data-bs-parent=".table" >
						<td><?= $no++; ?></td>
						<td class="text-justify">Agustus  <?= $_SESSION['tahunMD_bulan'][$i]; ?></td>
						<td><?= $_SESSION['dataMD_bulan'][$i]['Agustus']['data_bulan'];  ?></td>
						<td><?= $_SESSION['prob_MD_Agustus'][$i]; ?></td>
						<td><?= $_SESSION['kumu_Agustus_MD'][$i]; ?></td>
						<td><?= $_SESSION['interval_MD_Agustus'][$i]; ?></td>				
					</tr>
				<?php endfor; ?>	
				<tr class="text-center collapse accordion-collapse MD_all" id="MDr8" data-bs-parent=".table">
					<th  colspan="2">Total</th>
					<td><?= $_SESSION['jumlahFrekuensiMD_Agustus']; ?></td>
					<td><?= $_SESSION['jumlah_prob_Agustus_MD'] ?></td>
				</tr>
			</tbody>
		</table>

		<!-- bulan September -->
		<table class="table table-bordered table-sm accordion mb-0">
			<!-- <caption class="caption-top text-center">Data Meninggal Dunia</caption> -->
			<thead>
				<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#MDr9">
					<th style="border-left-color:red">September <i class="fa-solid fa-caret-down"></i></th>
					<th class="col-2 text-center"><?= $_SESSION['angkaAcakMD']['September'] ?></th>
					<th class="col-2 text-center"><?= $_SESSION['hasilS_MD']['September'] ?></th>	
					<th class="col-2 text-center"><?= $_SESSION['frek_MD']['September']?></th>
					<th colspan="2" class="col-4 text-center"><?= "{$_SESSION['akurasiMD']['September']}%" ?></th>
				</tr>			
				<tr class="text-center collapse accordion-collapse MD_all"  id="MDr9" data-bs-parent=".table" >
					<th>No</th> 		
					<th>Bulan</th>
					<th>Frekuensi</th>
					<th>Probabilitas</th>
					<th>Kumulatif</th>
					<th>Interval Angka Acak</th>
				</tr>
			</thead>
			<tbody>
				<?php $no = 1; for ($i=0; $i < count($_SESSION['dataMD_bulan']) ; $i++) : ?>
				<tr class="text-center collapse accordion-collapse MD_all" id="MDr9" data-bs-parent=".table" >
					<td><?= $no++; ?></td>
					<td class="text-justify">September  <?= $_SESSION['tahunMD_bulan'][$i]; ?></td>
					<td><?= $_SESSION['dataMD_bulan'][$i]['September']['data_bulan'];  ?></td>		
					<td><?= $_SESSION['prob_MD_September'][$i]; ?></td>
					<td><?= $_SESSION['kumu_September_MD'][$i]; ?></td>
					<td><?= $_SESSION['interval_MD_September'][$i]; ?></td>	
				</tr>
			<?php endfor; ?>	
			<tr class="text-center collapse accordion-collapse MD_all" id="MDr9" data-bs-parent=".table">
				<th  colspan="2">Total</th>
				<td><?= $_SESSION['jumlahFrekuensiMD_September']; ?></td>
				<td><?= $_SESSION['jumlah_prob_September_MD'] ?></td>
			</tr>
		</tbody>
	</table>

	<!-- bulan Oktober -->
	<table class="table table-bordered table-sm accordion mb-0">
		<!-- <caption class="caption-top text-center">Data Meninggal Dunia</caption> -->
		<thead>
			<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#MDr10">
				<th style="border-left-color:red">Oktober <i class="fa-solid fa-caret-down"></i></th>
				<th class="col-2 text-center"><?= $_SESSION['angkaAcakMD']['Oktober'] ?></th>
				<th class="col-2 text-center"><?= $_SESSION['hasilS_MD']['Oktober'] ?></th>	
				<th class="col-2 text-center"><?= $_SESSION['frek_MD']['Oktober']?></th>
				<th colspan="2" class="col-4 text-center"><?= "{$_SESSION['akurasiMD']['Oktober']}%" ?></th>
			</tr>
			<tr class="text-center collapse accordion-collapse MD_all"  id="MDr10" data-bs-parent=".table" >
				<th>No</th>
				<th>Bulan</th>
				<th>Frekuensi</th>
				<th>Probabilitas</th>
				<th>Kumulatif</th>
				<th>Interval Angka Acak</th>
			</tr>
		</thead>
		<tbody>
			<?php $no = 1; for ($i=0; $i < count($_SESSION['dataMD_bulan']) ; $i++) : ?>
			<tr class="text-center collapse accordion-collapse MD_all" id="MDr10" data-bs-parent=".table" >
				<td><?= $no++; ?></td>
				<td class="text-justify">Oktober  <?= $_SESSION['tahunMD_bulan'][$i]; ?></td>
				<td><?= $_SESSION['dataMD_bulan'][$i]['Oktober']['data_bulan'];  ?></td>
				<td><?= $_SESSION['prob_MD_Oktober'][$i]; ?></td>
				<td><?= $_SESSION['kumu_Oktober_MD'][$i]; ?></td>
				<td><?= $_SESSION['interval_MD_Oktober'][$i]; ?></td>			
			</tr>
		<?php endfor; ?>	
		<tr class="text-center collapse accordion-collapse MD_all" id="MDr10" data-bs-parent=".table">
			<th  colspan="2">Total</th>
			<td><?= $_SESSION['jumlahFrekuensiMD_Oktober']; ?></td>
			<td><?= $_SESSION['jumlah_prob_Oktober_MD'] ?></td>
		</tr>
	</tbody>
</table>

<!-- bulan November -->
<table class="table table-bordered table-sm accordion mb-0">
	<!-- <caption class="caption-top text-center">Data Meninggal Dunia</caption> -->
	<thead>
		<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#MDr11">
			<th style="border-left-color:blue">November <i class="fa-solid fa-caret-down"></i></th>
			<th class="col-2 text-center"><?= $_SESSION['angkaAcakMD']['November'] ?></th>
			<th class="col-2 text-center"><?= $_SESSION['hasilS_MD']['November'] ?></th>	
			<th class="col-2 text-center"><?= $_SESSION['frek_MD']['November']?></th>
			<th colspan="2" class="col-4 text-center"><?= "{$_SESSION['akurasiMD']['November']}%" ?></th>	
		</tr>
		<tr class="text-center collapse accordion-collapse MD_all"  id="MDr11" data-bs-parent=".table" >
			<th>No</th>
			<th>Bulan</th>
			<th>Frekuensi</th>
			<th>Probabilitas</th>
			<th>Kumulatif</th>
			<th>Interval Angka Acak</th>
		</tr>
	</thead>
	<tbody>
		<?php $no = 1; for ($i=0; $i < count($_SESSION['dataMD_bulan']) ; $i++) : ?>
		<tr class="text-center collapse accordion-collapse MD_all" id="MDr11" data-bs-parent=".table" >
			<td><?= $no++; ?></td>
			<td class="text-justify">November  <?= $_SESSION['tahunMD_bulan'][$i]; ?></td>
			<td><?= $_SESSION['dataMD_bulan'][$i]['November']['data_bulan'];  ?></td>
			<td><?= $_SESSION['prob_MD_November'][$i]; ?></td>
			<td><?= $_SESSION['kumu_November_MD'][$i]; ?></td>
			<td><?= $_SESSION['interval_MD_November'][$i]; ?></td>			
		</tr>
	<?php endfor; ?>	
	<tr class="text-center collapse accordion-collapse MD_all" id="MDr11" data-bs-parent=".table">
		<th  colspan="2">Total</th>
		<td><?= $_SESSION['jumlahFrekuensiMD_November']; ?></td>
		<td><?= $_SESSION['jumlah_prob_November_MD'] ?></td>
	</tr>
</tbody>
</table>

<!-- bulan Desember -->
<table class="table table-bordered table-sm accordion mb-0">
	<!-- <caption class="caption-top text-center">Data Meninggal Dunia</caption> -->
	<thead>
		<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#MDr12">
			<th style="border-left-color:blue">Desember <i class="fa-solid fa-caret-down"></i></th>
			<th class="col-2 text-center"><?= $_SESSION['angkaAcakMD']['Desember'] ?></th>
			<th class="col-2 text-center"><?= $_SESSION['hasilS_MD']['Desember'] ?></th>	
			<th class="col-2 text-center"><?= $_SESSION['frek_MD']['Desember']?></th>
			<th colspan="2" class="col-4 text-center"><?= "{$_SESSION['akurasiMD']['Desember']}%" ?></th>	
		</tr>
		<tr class="text-center collapse accordion-collapse MD_all"  id="MDr12" data-bs-parent=".table" >
			<th>No</th>
			<th>Bulan</th>
			<th>Frekuensi</th>
			<th>Probabilitas</th>
			<th>Kumulatif</th>
			<th>Interval Angka Acak</th>
		</tr>
	</thead>
	<tbody>
		<?php $no = 1; for ($i=0; $i < count($_SESSION['dataMD_bulan']) ; $i++) : ?>
		<tr class="text-center collapse accordion-collapse MD_all" id="MDr12" data-bs-parent=".table" >
			<td><?= $no++; ?></td>
			<td class="text-justify">Desember  <?= $_SESSION['tahunMD_bulan'][$i]; ?></td>
			<td><?= $_SESSION['dataMD_bulan'][$i]['Desember']['data_bulan'];  ?></td>
			<td><?= $_SESSION['prob_MD_Desember'][$i]; ?></td>
			<td><?= $_SESSION['kumu_Desember_MD'][$i]; ?></td>
			<td><?= $_SESSION['interval_MD_Desember'][$i]; ?></td>			
		</tr>
	<?php endfor; ?>	
	<tr class="text-center collapse accordion-collapse MD_all" id="MDr12" data-bs-parent=".table">
		<th  colspan="2">Total</th>
		<td><?= $_SESSION['jumlahFrekuensiMD_Desember']; ?></td>
		<td><?= $_SESSION['jumlah_prob_Desember_MD'] ?></td>
	</tr>

	<tr class="text-center table-dark">
		<th rowspan="3" colspan="2" style=" vertical-align: middle !important;">Total</th>
		<th><?= $_SESSION['total_hasilS_MD']; ?></th>
		<th><?= $_SESSION['total_dataR_MD']; ?></th>
		<th><?= "{$_SESSION['akurasi_tahun_MD']}%"; ?></th>			
	</tr>

	<tr class="text-center table-dark">
		<th class="musimKemarau"><?= $_SESSION['total_hasilS_Kemarau_MD']; ?></th>
		<th><?= $_SESSION['total_dataR_Kemarau_MD']; ?></th>
		<th><?= "{$_SESSION['akurasi_Kemarau_MD']}%"; ?></th>

	</tr>

	<tr class="text-center table-dark">
		<th class="musimHujan"><?= $_SESSION['total_hasilS_Hujan_MD']; ?></th>
		<th><?= $_SESSION['total_dataR_Hujan_MD']; ?></th>
		<th><?= "{$_SESSION['akurasi_Hujan_MD']}%"; ?></th>
	</tr>

	<tr class="text-center table-dark">
		<th rowspan="3" colspan="2" style=" vertical-align: middle !important;" class="text-center">Rata-Rata</th>
		<th><?= $_SESSION['rata2_total_hasilS_MD']; ?></th>
		<th><?= $_SESSION['rata2_total_dataR_MD']; ?></th>
		<th><?= "{$_SESSION['rata2_akurasi_tahun_MD']}%"; ?></th>	
	</tr>

	<tr class="text-center table-dark">
		<th class="musimKemarau"><?= $_SESSION['rata2_total_hasilS_Kemarau_MD']; ?></th>
		<th><?= $_SESSION['rata2_total_dataR_Kemarau_MD']; ?></th>
		<th><?= "{$_SESSION['rata2_akurasi_Kemarau_MD']}%"; ?></th>
	</tr>

	<tr class="text-center table-dark">
		<th class="musimHujan"><?= $_SESSION['rata2_total_hasilS_Hujan_MD'];?></th>
		<th><?= $_SESSION['rata2_total_dataR_Hujan_MD'];?></th>
		<th><?= "{$_SESSION['rata2_akurasi_Hujan_MD']}%";?></th>
	</tr>

</tbody>
</table>
</tr>
</tbody>
<caption>								
	<ul style="list-style-type:square;">
		<li style="color: blue;"><span style="color: gray;">Musim Hujan</span></li>
		<li style="color: red;"><span style="color: gray;">Musim Kemarau</span></li>
	</ul> 
</caption>
</table>
</div>
</div>
</div>
</div>



<div class="accordion-item">
	<h2 class="accordion-header" id="headingTwo">
		<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
			<h5>Luka Berat</h5>
		</button>
	</h2>	
	<div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
		<div class="accordion-body">
			<div class="position-relative">	
				<div class="row">
					<div class="col-6 tex-start icon_utama" data-bs-toggle="collapse" data-bs-target=".LB_all">
						<span>Show All : </span><i class="fa-solid fa-plus"></i>
					</div>
					<div class="col-6 text-end">
						<a href="#"  class="btn btn-sm btn-dark shadow-sm d-inline" data-toggle="modal" data-target="#exportdataLB" data-backdrop="static" data-keyboard="false"><i class="fa-solid fa-file-export"></i> Export</a>
						<a href="#"  class="btn btn-sm btn-dark shadow-sm d-inline" data-toggle="modal" data-target="#grafikLB" data-backdrop="static" data-keyboard="false"><i class="fa-solid fa-chart-pie"></i> Grafik</a>
					</div>							
				</div>
				<!-- bulan january -->
				<table class="table mb-0">
					<caption class="caption-top text-center">Data Luka Berat</caption>
					<thead>
						<tr class="table-dark text-center">
							<th class="col-2">Bulan</i></th>
							<th class="col-2">Angka Acak</th>
							<th class="col-2">Hasil Simulasi</th>
							<th class="col-2">Data Real <?= $_SESSION['tahun_uji_LB']; ?></th>
							<th class="col-4">Tingkat Akuarasi</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<table class="table table-bordered table-sm accordion mb-0">

								<thead>
									<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#LBr1">
										<th style="border-left-color:blue;">Januari <i class="fa-solid fa-caret-down"></i></th>
										<th class="col-2 text-center"><?= $_SESSION['angkaAcakLB']['Januari'] ?></th>
										<th class="col-2 text-center"><?= $_SESSION['hasilS_LB']['Januari'] ?></th>	
										<th class="col-2 text-center"><?= $_SESSION['frek_LB']['Januari']?></th>
										<th colspan="2" class="col-4 text-center"><?= "{$_SESSION['akurasiLB']['Januari']}%" ?></th>

									</tr>
									<tr class="text-center collapse accordion-collapse LB_all"  id="LBr1" data-bs-parent=".table" >
										<th>No</th>
										<th>Bulan</th>
										<th>Frekuensi</th>
										<th>Probabilitas</th>
										<th>Kumulatif</th>
										<th>Interval Angka Acak</th>

									</tr>
								</thead>
								<tbody>	
									<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLB_bulan']) ; $i++) : ?>
									<tr class="text-center collapse accordion-collapse LB_all" id="LBr1" data-bs-parent=".table" >
										<td><?= $no++; ?></td>
										<td class="text-justify">Januari <?= $_SESSION['tahunLB_bulan'][$i]; ?></td>
										<td><?= $_SESSION['dataLB_bulan'][$i]['Januari']['data_bulan'];  ?></td>
										<td><?= $_SESSION['prob_LB_Januari'][$i]; ?></td>
										<td><?= $_SESSION['kumu_Januari_LB'][$i]; ?></td>
										<td><?= $_SESSION['interval_LB_Januari'][$i]; ?></td>				
									</tr>

								<?php endfor; ?>	
								<tr class="text-center collapse accordion-collapse LB_all" id="LBr1" data-bs-parent=".table">
									<th colspan="2">Total</th>
									<td><?= $_SESSION['jumlahFrekuensiLB_Januari']; ?></td>
									<td><?= $_SESSION['jumlah_prob_Januari_LB'] ?></td>
								</tr>
							</tbody>
						</table>

						<!-- bulan February -->
						<table class="table table-bordered table-sm accordion mb-0">
							<!-- <caption class="caption-top text-center">Data Meninggal Dunia</caption> -->
							<thead>
								<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#LBr2">
									<th style="border-left-color:blue">Februari <i class="fa-solid fa-caret-down"></i></th>
									<th class="col-2 text-center"><?= $_SESSION['angkaAcakLB']['Februari'] ?></th>
									<th class="col-2 text-center"><?= $_SESSION['hasilS_LB']['Februari'] ?></th>	
									<th class="col-2 text-center"><?= $_SESSION['frek_LB']['Februari']?></th>
									<th colspan="2" class="col-4 text-center"><?= "{$_SESSION['akurasiLB']['Februari']}%" ?></th>	
								</tr>
								<tr class="text-center collapse accordion-collapse LB_all"  id="LBr2" data-bs-parent=".table" >
									<th>No</th>
									<th>Bulan</th>
									<th>Frekuensi</th>
									<th>Probabilitas</th>
									<th>Kumulatif</th>
									<th>Interval Angka Acak</th>
								</tr>
							</thead>
							<tbody>
								<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLB_bulan']) ; $i++) : ?>
								<tr class="text-center collapse accordion-collapse LB_all" id="LBr2" data-bs-parent=".table" >
									<td><?= $no++; ?></td>
									<td class="text-justify">Februari  <?= $_SESSION['tahunLB_bulan'][$i]; ?></td>
									<td><?= $_SESSION['dataLB_bulan'][$i]['Februari']['data_bulan'];  ?></td>	
									<td><?= $_SESSION['prob_LB_Februari'][$i]; ?></td>	
									<td><?= $_SESSION['kumu_Februari_LB'][$i]; ?></td>
									<td><?= $_SESSION['interval_LB_Februari'][$i]; ?></td>	
								</tr>
							<?php endfor; ?>	
							<tr class="text-center collapse accordion-collapse LB_all" id="LBr2" data-bs-parent=".table">
								<th  colspan="2">Total</th>
								<td><?= $_SESSION['jumlahFrekuensiLB_Februari']; ?></td>
								<td><?= $_SESSION['jumlah_prob_Februari_LB'] ?></td>
							</tr>
						</tbody>
					</table>

					<!-- bulan Maret -->
					<table class="table table-bordered table-sm accordion mb-0">
						<!-- <caption class="caption-top text-center">Data Meninggal Dunia</caption> -->
						<thead>
							<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#LBr3">
								<th style="border-left-color:blue">Maret <i class="fa-solid fa-caret-down"></i></th>
								<th class="col-2 text-center"><?= $_SESSION['angkaAcakLB']['Maret'] ?></th>
								<th class="col-2 text-center"><?= $_SESSION['hasilS_LB']['Maret'] ?></th>	
								<th class="col-2 text-center"><?= $_SESSION['frek_LB']['Maret']?></th>
								<th colspan="2" class="col-4 text-center"><?= "{$_SESSION['akurasiLB']['Maret']}%" ?></th>								</tr>
								<tr class="text-center collapse accordion-collapse LB_all"  id="LBr3" data-bs-parent=".table" >
									<th>No</th>
									<th>Bulan</th>
									<th>Frekuensi</th>
									<th>Probabilitas</th>
									<th>Kumulatif</th>
									<th>Interval Angka Acak</th>
								</tr>
							</thead>
							<tbody>
								<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLB_bulan']) ; $i++) : ?>
								<tr class="text-center collapse accordion-collapse LB_all" id="LBr3" data-bs-parent=".table" >
									<td><?= $no++; ?></td>
									<td class="text-justify">Maret  <?= $_SESSION['tahunLB_bulan'][$i]; ?></td>
									<td><?= $_SESSION['dataLB_bulan'][$i]['Maret']['data_bulan'];  ?></td>
									<td><?= $_SESSION['prob_LB_Maret'][$i]; ?></td>	
									<td><?= $_SESSION['kumu_Maret_LB'][$i]; ?></td>		
									<td><?= $_SESSION['interval_LB_Maret'][$i]; ?></td>	
								</tr>
							<?php endfor; ?>	
							<tr class="text-center collapse accordion-collapse LB_all" id="LBr3" data-bs-parent=".table">
								<th  colspan="2">Total</th>
								<td><?= $_SESSION['jumlahFrekuensiLB_Maret']; ?></td>
								<td><?= $_SESSION['jumlah_prob_Maret_LB'] ?></td>
							</tr>
						</tbody>
					</table>

					<!-- bulan April -->
					<table class="table table-bordered table-sm accordion mb-0">
						<!-- <caption class="caption-top text-center">Data Meninggal Dunia</caption> -->
						<thead>
							<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#LBr4">
								<th style="border-left-color:blue">April <i class="fa-solid fa-caret-down"></i></th>
								<th class="col-2 text-center"><?= $_SESSION['angkaAcakLB']['April'] ?></th>
								<th class="col-2 text-center"><?= $_SESSION['hasilS_LB']['April'] ?></th>	
								<th class="col-2 text-center"><?= $_SESSION['frek_LB']['April']?></th>
								<th colspan="2" class="col-4 text-center"><?= "{$_SESSION['akurasiLB']['April']}%" ?></th>							</tr>
								<tr class="text-center collapse accordion-collapse LB_all"  id="LBr4" data-bs-parent=".table" >
									<th>No</th>
									<th>Bulan</th>
									<th>Frekuensi</th>
									<th>Probabilitas</th>
									<th>Kumulatif</th>
									<th>Interval Angka Acak</th>
								</tr>
							</thead>
							<tbody>
								<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLB_bulan']) ; $i++) : ?>
								<tr class="text-center collapse accordion-collapse LB_all" id="LBr4" data-bs-parent=".table" >
									<td><?= $no++; ?></td>
									<td class="text-justify">April  <?= $_SESSION['tahunLB_bulan'][$i]; ?></td>
									<td><?= $_SESSION['dataLB_bulan'][$i]['April']['data_bulan'];  ?></td>
									<td><?= $_SESSION['prob_LB_April'][$i];  ?></td>	
									<td><?= $_SESSION['kumu_April_LB'][$i]; ?></td>
									<td><?= $_SESSION['interval_LB_April'][$i]; ?></td>		
								</tr>
							<?php endfor; ?>	
							<tr class="text-center collapse accordion-collapse LB_all" id="LBr4" data-bs-parent=".table">
								<th  colspan="2">Total</th>
								<td><?= $_SESSION['jumlahFrekuensiLB_April']; ?></td>
								<td><?= $_SESSION['jumlah_prob_April_LB'] ?></td>
							</tr>
						</tbody>
					</table>

					<!-- bulan Mei -->
					<table class="table table-bordered table-sm accordion mb-0">
						<!-- <caption class="caption-top text-center">Data Meninggal Dunia</caption> -->
						<thead>
							<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#LBr5">
								<th style="border-left-color:red">Mei <i class="fa-solid fa-caret-down"></i></th>
								<th class="col-2 text-center"><?= $_SESSION['angkaAcakLB']['Mei'] ?></th>
								<th class="col-2 text-center"><?= $_SESSION['hasilS_LB']['Mei'] ?></th>	
								<th class="col-2 text-center"><?= $_SESSION['frek_LB']['Mei']?></th>
								<th colspan="2" class="col-4 text-center"><?= "{$_SESSION['akurasiLB']['Mei']}%" ?></th>				</tr>
								<tr class="text-center collapse accordion-collapse LB_all"  id="LBr5" data-bs-parent=".table" >
									<th>No</th>
									<th>Bulan</th>
									<th>Frekuensi</th>
									<th>Probabilitas</th>
									<th>Kumulatif</th>
									<th>Interval Angka Acak</th>
								</tr>
							</thead>
							<tbody>
								<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLB_bulan']) ; $i++) : ?>
								<tr class="text-center collapse accordion-collapse LB_all" id="LBr5" data-bs-parent=".table" >
									<td><?= $no++; ?></td>
									<td class="text-justify">Mei  <?= $_SESSION['tahunLB_bulan'][$i]; ?></td>
									<td><?= $_SESSION['dataLB_bulan'][$i]['Mei']['data_bulan'];  ?></td>
									<td><?= $_SESSION['prob_LB_Mei'][$i];  ?></td>
									<td><?= $_SESSION['kumu_Mei_LB'][$i]; ?></td>
									<td><?= $_SESSION['interval_LB_Mei'][$i]; ?></td>							
								</tr>
							<?php endfor; ?>	
							<tr class="text-center collapse accordion-collapse LB_all" id="LBr5" data-bs-parent=".table">
								<th  colspan="2">Total</th>
								<td><?= $_SESSION['jumlahFrekuensiLB_Mei']; ?></td>
								<td><?= $_SESSION['jumlah_prob_Mei_LB'] ?></td>
							</tr>
						</tbody>
					</table>

					<!-- bulan Juni -->
					<table class="table table-bordered table-sm accordion mb-0">
						<!-- <caption class="caption-top text-center">Data Meninggal Dunia</caption> -->
						<thead>
							<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#LBr6">
								<th style="border-left-color:red">Juni <i class="fa-solid fa-caret-down"></i></th>
								<th class="col-2 text-center"><?= $_SESSION['angkaAcakLB']['Juni'] ?></th>
								<th class="col-2 text-center"><?= $_SESSION['hasilS_LB']['Juni'] ?></th>	
								<th class="col-2 text-center"><?= $_SESSION['frek_LB']['Juni']?></th>
								<th colspan="2" class="col-4 text-center"><?= "{$_SESSION['akurasiLB']['Juni']}%" ?></th>				</tr>
								<tr class="text-center collapse accordion-collapse LB_all"  id="LBr6" data-bs-parent=".table" >
									<th>No</th>
									<th>Bulan</th>
									<th>Frekuensi</th>
									<th>Probabilitas</th>
									<th>Kumulatif</th>
									<th>Interval Angka Acak</th>
								</tr>
							</thead>
							<tbody>
								<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLB_bulan']) ; $i++) : ?>
								<tr class="text-center collapse accordion-collapse LB_all" id="LBr6" data-bs-parent=".table" >
									<td><?= $no++; ?></td>
									<td class="text-justify">Juni  <?= $_SESSION['tahunLB_bulan'][$i]; ?></td>
									<td><?= $_SESSION['dataLB_bulan'][$i]['Juni']['data_bulan'];  ?></td>
									<td><?= $_SESSION['prob_LB_Juni'][$i] ?></td>
									<td><?= $_SESSION['kumu_Juni_LB'][$i]; ?></td>
									<td><?= $_SESSION['interval_LB_Juni'][$i]; ?></td>			
								</tr>
							<?php endfor; ?>	
							<tr class="text-center collapse accordion-collapse LB_all" id="LBr6" data-bs-parent=".table">
								<th  colspan="2">Total</th>
								<td><?= $_SESSION['jumlahFrekuensiLB_Juni']; ?></td>
								<td><?= $_SESSION['jumlah_prob_Juni_LB'] ?></td>
							</tr>
						</tbody>
					</table>


					<!-- bulan Juli -->
					<table class="table table-bordered table-sm accordion mb-0">
						<!-- <caption class="caption-top text-center">Data Meninggal Dunia</caption> -->
						<thead>
							<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#LBr7">
								<th style="border-left-color:red">Juli <i class="fa-solid fa-caret-down"></i></th>
								<th class="col-2 text-center"><?= $_SESSION['angkaAcakLB']['Juli'] ?></th>
								<th class="col-2 text-center"><?= $_SESSION['hasilS_LB']['Juli'] ?></th>	
								<th class="col-2 text-center"><?= $_SESSION['frek_LB']['Juli']?></th>
								<th colspan="2" class="col-4 text-center"><?= "{$_SESSION['akurasiLB']['Juli']}%" ?></th>			</tr>
								<tr class="text-center collapse accordion-collapse LB_all"  id="LBr7" data-bs-parent=".table" >
									<th>No</th>
									<th>Bulan</th>
									<th>Frekuensi</th>
									<th>Probabilitas</th>
									<th>Kumulatif</th>
									<th>Interval Angka Acak</th>
								</tr>
							</thead>
							<tbody>
								<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLB_bulan']) ; $i++) : ?>
								<tr class="text-center collapse accordion-collapse LB_all" id="LBr7" data-bs-parent=".table" >
									<td><?= $no++; ?></td>
									<td class="text-justify">Juli  <?= $_SESSION['tahunLB_bulan'][$i]; ?></td>
									<td><?= $_SESSION['dataLB_bulan'][$i]['Juli']['data_bulan'];  ?></td>	
									<td><?= $_SESSION['prob_LB_Juli'][$i]?></td>
									<td><?= $_SESSION['kumu_Juli_LB'][$i]; ?></td>
									<td><?= $_SESSION['interval_LB_Juli'][$i]; ?></td>	
								</tr>
							<?php endfor; ?>	
							<tr class="text-center collapse accordion-collapse LB_all" id="LBr7" data-bs-parent=".table">
								<th  colspan="2">Total</th>
								<td><?= $_SESSION['jumlahFrekuensiLB_Juli']; ?></td>
								<td><?= $_SESSION['jumlah_prob_Juli_LB'] ?></td>
							</tr>
						</tbody>
					</table>


					<!-- bulan Agustus -->
					<table class="table table-bordered table-sm accordion mb-0">
						<!-- <caption class="caption-top text-center">Data Meninggal Dunia</caption> -->

						<thead>
							<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#LBr8">
								<th style="border-left-color:red">Agustus <i class="fa-solid fa-caret-down"></i></th>
								<th class="col-2 text-center"><?= $_SESSION['angkaAcakLB']['Agustus'] ?></th>
								<th class="col-2 text-center"><?= $_SESSION['hasilS_LB']['Agustus'] ?></th>	
								<th class="col-2 text-center"><?= $_SESSION['frek_LB']['Agustus']?></th>
								<th colspan="2" class="col-4 text-center"><?= "{$_SESSION['akurasiLB']['Agustus']}%" ?></th>
							</tr>
							<tr class="text-center collapse accordion-collapse LB_all"  id="LBr8" data-bs-parent=".table" >
								<th>No</th>
								<th>Bulan</th>
								<th>Frekuensi</th>
								<th>Probabilitas</th>
								<th>Kumulatif</th>
								<th>Interval Angka Acak</th>
							</tr>
						</thead>
						<tbody>
							<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLB_bulan']) ; $i++) : ?>
							<tr class="text-center collapse accordion-collapse LB_all" id="LBr8" data-bs-parent=".table" >
								<td><?= $no++; ?></td>
								<td class="text-justify">Agustus  <?= $_SESSION['tahunLB_bulan'][$i]; ?></td>
								<td><?= $_SESSION['dataLB_bulan'][$i]['Agustus']['data_bulan'];  ?></td>
								<td><?= $_SESSION['prob_LB_Agustus'][$i]; ?></td>
								<td><?= $_SESSION['kumu_Agustus_LB'][$i]; ?></td>
								<td><?= $_SESSION['interval_LB_Agustus'][$i]; ?></td>				
							</tr>
						<?php endfor; ?>	
						<tr class="text-center collapse accordion-collapse LB_all" id="LBr8" data-bs-parent=".table">
							<th  colspan="2">Total</th>
							<td><?= $_SESSION['jumlahFrekuensiLB_Agustus']; ?></td>
							<td><?= $_SESSION['jumlah_prob_Agustus_LB'] ?></td>
						</tr>
					</tbody>
				</table>

				<!-- bulan September -->
				<table class="table table-bordered table-sm accordion mb-0">
					<!-- <caption class="caption-top text-center">Data Meninggal Dunia</caption> -->
					<thead>
						<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#LBr9">
							<th style="border-left-color:red">September <i class="fa-solid fa-caret-down"></i></th>
							<th class="col-2 text-center"><?= $_SESSION['angkaAcakLB']['September'] ?></th>
							<th class="col-2 text-center"><?= $_SESSION['hasilS_LB']['September'] ?></th>	
							<th class="col-2 text-center"><?= $_SESSION['frek_LB']['September']?></th>
							<th colspan="2" class="col-4 text-center"><?= "{$_SESSION['akurasiLB']['September']}%" ?></th>
						</tr>			
						<tr class="text-center collapse accordion-collapse LB_all"  id="LBr9" data-bs-parent=".table" >
							<th>No</th> 		
							<th>Bulan</th>
							<th>Frekuensi</th>
							<th>Probabilitas</th>
							<th>Kumulatif</th>
							<th>Interval Angka Acak</th>
						</tr>
					</thead>
					<tbody>
						<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLB_bulan']) ; $i++) : ?>
						<tr class="text-center collapse accordion-collapse LB_all" id="LBr9" data-bs-parent=".table" >
							<td><?= $no++; ?></td>
							<td class="text-justify">September  <?= $_SESSION['tahunLB_bulan'][$i]; ?></td>
							<td><?= $_SESSION['dataLB_bulan'][$i]['September']['data_bulan'];  ?></td>		
							<td><?= $_SESSION['prob_LB_September'][$i]; ?></td>
							<td><?= $_SESSION['kumu_September_LB'][$i]; ?></td>
							<td><?= $_SESSION['interval_LB_September'][$i]; ?></td>	
						</tr>
					<?php endfor; ?>	
					<tr class="text-center collapse accordion-collapse LB_all" id="LBr9" data-bs-parent=".table">
						<th  colspan="2">Total</th>
						<td><?= $_SESSION['jumlahFrekuensiLB_September']; ?></td>
						<td><?= $_SESSION['jumlah_prob_September_LB'] ?></td>
					</tr>
				</tbody>
			</table>

			<!-- bulan Oktober -->
			<table class="table table-bordered table-sm accordion mb-0">
				<!-- <caption class="caption-top text-center">Data Meninggal Dunia</caption> -->
				<thead>
					<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#LBr10">
						<th style="border-left-color:red">Oktober <i class="fa-solid fa-caret-down"></i></th>
						<th class="col-2 text-center"><?= $_SESSION['angkaAcakLB']['Oktober'] ?></th>
						<th class="col-2 text-center"><?= $_SESSION['hasilS_LB']['Oktober'] ?></th>	
						<th class="col-2 text-center"><?= $_SESSION['frek_LB']['Oktober']?></th>
						<th colspan="2" class="col-4 text-center"><?= "{$_SESSION['akurasiLB']['Oktober']}%" ?></th>
					</tr>
					<tr class="text-center collapse accordion-collapse LB_all"  id="LBr10" data-bs-parent=".table" >
						<th>No</th>
						<th>Bulan</th>
						<th>Frekuensi</th>
						<th>Probabilitas</th>
						<th>Kumulatif</th>
						<th>Interval Angka Acak</th>
					</tr>
				</thead>
				<tbody>
					<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLB_bulan']) ; $i++) : ?>
					<tr class="text-center collapse accordion-collapse LB_all" id="LBr10" data-bs-parent=".table" >
						<td><?= $no++; ?></td>
						<td class="text-justify">Oktober  <?= $_SESSION['tahunLB_bulan'][$i]; ?></td>
						<td><?= $_SESSION['dataLB_bulan'][$i]['Oktober']['data_bulan'];  ?></td>
						<td><?= $_SESSION['prob_LB_Oktober'][$i]; ?></td>
						<td><?= $_SESSION['kumu_Oktober_LB'][$i]; ?></td>
						<td><?= $_SESSION['interval_LB_Oktober'][$i]; ?></td>			
					</tr>
				<?php endfor; ?>	
				<tr class="text-center collapse accordion-collapse LB_all" id="LBr10" data-bs-parent=".table">
					<th  colspan="2">Total</th>
					<td><?= $_SESSION['jumlahFrekuensiLB_Oktober']; ?></td>
					<td><?= $_SESSION['jumlah_prob_Oktober_LB'] ?></td>
				</tr>
			</tbody>
		</table>

		<!-- bulan November -->
		<table class="table table-bordered table-sm accordion mb-0">
			<!-- <caption class="caption-top text-center">Data Meninggal Dunia</caption> -->
			<thead>
				<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#LBr11">
					<th style="border-left-color:blue">November <i class="fa-solid fa-caret-down"></i></th>
					<th class="col-2 text-center"><?= $_SESSION['angkaAcakLB']['November'] ?></th>
					<th class="col-2 text-center"><?= $_SESSION['hasilS_LB']['November'] ?></th>	
					<th class="col-2 text-center"><?= $_SESSION['frek_LB']['November']?></th>
					<th colspan="2" class="col-4 text-center"><?= "{$_SESSION['akurasiLB']['November']}%" ?></th>	
				</tr>
				<tr class="text-center collapse accordion-collapse LB_all"  id="LBr11" data-bs-parent=".table" >
					<th>No</th>
					<th>Bulan</th>
					<th>Frekuensi</th>
					<th>Probabilitas</th>
					<th>Kumulatif</th>
					<th>Interval Angka Acak</th>
				</tr>
			</thead>
			<tbody>
				<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLB_bulan']) ; $i++) : ?>
				<tr class="text-center collapse accordion-collapse LB_all" id="LBr11" data-bs-parent=".table" >
					<td><?= $no++; ?></td>
					<td class="text-justify">November  <?= $_SESSION['tahunLB_bulan'][$i]; ?></td>
					<td><?= $_SESSION['dataLB_bulan'][$i]['November']['data_bulan'];  ?></td>
					<td><?= $_SESSION['prob_LB_November'][$i]; ?></td>
					<td><?= $_SESSION['kumu_November_LB'][$i]; ?></td>
					<td><?= $_SESSION['interval_LB_November'][$i]; ?></td>			
				</tr>
			<?php endfor; ?>	
			<tr class="text-center collapse accordion-collapse LB_all" id="LBr11" data-bs-parent=".table">
				<th  colspan="2">Total</th>
				<td><?= $_SESSION['jumlahFrekuensiLB_November']; ?></td>
				<td><?= $_SESSION['jumlah_prob_November_LB'] ?></td>
			</tr>
		</tbody>
	</table>

	<!-- bulan Desember -->
	<table class="table table-bordered table-sm accordion mb-0">
		<!-- <caption class="caption-top text-center">Data Meninggal Dunia</caption> -->
		<thead>
			<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#LBr12">
				<th style="border-left-color:blue">Desember <i class="fa-solid fa-caret-down"></i></th>
				<th class="col-2 text-center"><?= $_SESSION['angkaAcakLB']['Desember'] ?></th>
				<th class="col-2 text-center"><?= $_SESSION['hasilS_LB']['Desember'] ?></th>	
				<th class="col-2 text-center"><?= $_SESSION['frek_LB']['Desember']?></th>
				<th colspan="2" class="col-4 text-center"><?= "{$_SESSION['akurasiLB']['Desember']}%" ?></th>	
			</tr>
			<tr class="text-center collapse accordion-collapse LB_all"  id="LBr12" data-bs-parent=".table" >
				<th>No</th>
				<th>Bulan</th>
				<th>Frekuensi</th>
				<th>Probabilitas</th>
				<th>Kumulatif</th>
				<th>Interval Angka Acak</th>
			</tr>
		</thead>
		<tbody>
			<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLB_bulan']) ; $i++) : ?>
			<tr class="text-center collapse accordion-collapse LB_all" id="LBr12" data-bs-parent=".table" >
				<td><?= $no++; ?></td>
				<td class="text-justify">Desember  <?= $_SESSION['tahunLB_bulan'][$i]; ?></td>
				<td><?= $_SESSION['dataLB_bulan'][$i]['Desember']['data_bulan'];  ?></td>
				<td><?= $_SESSION['prob_LB_Desember'][$i]; ?></td>
				<td><?= $_SESSION['kumu_Desember_LB'][$i]; ?></td>
				<td><?= $_SESSION['interval_LB_Desember'][$i]; ?></td>			
			</tr>
		<?php endfor; ?>	
		<tr class="text-center collapse accordion-collapse LB_all" id="LBr12" data-bs-parent=".table">
			<th  colspan="2">Total</th>
			<td><?= $_SESSION['jumlahFrekuensiLB_Desember']; ?></td>
			<td><?= $_SESSION['jumlah_prob_Desember_LB'] ?></td>
		</tr>

		<tr class="text-center table-dark">
			<th rowspan="3" colspan="2" style=" vertical-align: middle !important;">Total</th>
			<th><?= $_SESSION['total_hasilS_LB']; ?></th>
			<th><?= $_SESSION['total_dataR_LB']; ?></th>
			<th><?= "{$_SESSION['akurasi_tahun_LB']}%"; ?></th>			
		</tr>

		<tr class="text-center table-dark">
			<th class="musimKemarau"><?= $_SESSION['total_hasilS_Kemarau_LB']; ?></th>
			<th><?= $_SESSION['total_dataR_Kemarau_LB']; ?></th>
			<th><?= "{$_SESSION['akurasi_Kemarau_LB']}%"; ?></th>
			
		</tr>

		<tr class="text-center table-dark">
			<th class="musimHujan"><?= $_SESSION['total_hasilS_Hujan_LB']; ?></th>
			<th><?= $_SESSION['total_dataR_Hujan_LB']; ?></th>
			<th><?= "{$_SESSION['akurasi_Hujan_LB']}%"; ?></th>
		</tr>

		<tr class="text-center table-dark">
			<th rowspan="3" colspan="2" style=" vertical-align: middle !important;" class="text-center">Rata-Rata</th>
			<th><?= $_SESSION['rata2_total_hasilS_LB']; ?></th>
			<th><?= $_SESSION['rata2_total_dataR_LB']; ?></th>
			<th><?= "{$_SESSION['rata2_akurasi_tahun_LB']}%"; ?></th>	
		</tr>

		<tr class="text-center table-dark">
			<th class="musimKemarau"><?= $_SESSION['rata2_total_hasilS_Kemarau_LB']; ?></th>
			<th><?= $_SESSION['rata2_total_dataR_Kemarau_LB']; ?></th>
			<th><?= "{$_SESSION['rata2_akurasi_Kemarau_LB']}%"; ?></th>
		</tr>

		<tr class="text-center table-dark">
			<th class="musimHujan"><?= $_SESSION['rata2_total_hasilS_Hujan_LB'];?></th>
			<th><?= $_SESSION['rata2_total_dataR_Hujan_LB'];?></th>
			<th><?= "{$_SESSION['rata2_akurasi_Hujan_LB']}%";?></th>
		</tr>

	</tbody>
</table>

</tr>
</tbody>

<caption>								
	<ul style="list-style-type:square;">
		<li style="color: blue;"><span style="color: gray;">Musim Hujan</span></li>
		<li style="color: red;"><span style="color: gray;">Musim Kemarau</span></li>
	</ul> 
</caption>


</table>

</div>
</div>
</div>
</div>
<div class="accordion-item">
	<h2 class="accordion-header" id="headingThree">
		<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
			<h5>Luka Ringan</h5>
		</button>
	</h2>
	<div id="collapseThree" class="accordion-collapse collapse show" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
		<div class="accordion-body">
			<div class="position-relative">
				<div class="row">
					<div class="col-6 tex-start icon_utama" data-bs-toggle="collapse" data-bs-target=".LR_all">
						<span>Show All : </span><i class="fa-solid fa-plus"></i>
					</div>
					<div class="col-6 text-end">
						<a href="#"  class="btn btn-sm btn-dark shadow-sm d-inline" data-toggle="modal" data-target="#exportdataLR" data-backdrop="static" data-keyboard="false"><i class="fa-solid fa-file-export"></i> Export</a>
						<a href="#"  class="btn btn-sm btn-dark shadow-sm d-inline" data-toggle="modal" data-target="#grafikLR" data-backdrop="static" data-keyboard="false"><i class="fa-solid fa-chart-pie"></i> Grafik</a>
					</div>							
				</div>
				<!-- bulan january -->
				<table class="table mb-0">
					<caption class="caption-top text-center">Data Luka Ringan</caption>
					<thead>
						<tr class="table-dark text-center">
							<th class="col-2">Bulan</i></th>
							<th class="col-2">Angka Acak</th>
							<th class="col-2">Hasil Simulasi</th>
							<th class="col-2">Data Real <?= $_SESSION['tahun_uji_LR']; ?></th>
							<th class="col-4">Tingkat Akuarasi</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<table class="table table-bordered table-sm accordion mb-0">

								<thead>
									<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#LRr1">
										<th style="border-left-color:blue;">Januari <i class="fa-solid fa-caret-down"></i></th>
										<th class="col-2 text-center"><?= $_SESSION['angkaAcakLR']['Januari'] ?></th>
										<th class="col-2 text-center"><?= $_SESSION['hasilS_LR']['Januari'] ?></th>	
										<th class="col-2 text-center"><?= $_SESSION['frek_LR']['Januari']?></th>
										<th colspan="2" class="col-4 text-center"><?= "{$_SESSION['akurasiLR']['Januari']}%" ?></th>

									</tr>
									<tr class="text-center collapse accordion-collapse LR_all"  id="LRr1" data-bs-parent=".table" >
										<th>No</th>
										<th>Bulan</th>
										<th>Frekuensi</th>
										<th>Probabilitas</th>
										<th>Kumulatif</th>
										<th>Interval Angka Acak</th>

									</tr>
								</thead>
								<tbody>	
									<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLR_bulan']) ; $i++) : ?>
									<tr class="text-center collapse accordion-collapse LR_all" id="LRr1" data-bs-parent=".table" >
										<td><?= $no++; ?></td>
										<td class="text-justify">Januari <?= $_SESSION['tahunLR_bulan'][$i]; ?></td>
										<td><?= $_SESSION['dataLR_bulan'][$i]['Januari']['data_bulan'];  ?></td>
										<td><?= $_SESSION['prob_LR_Januari'][$i]; ?></td>
										<td><?= $_SESSION['kumu_Januari_LR'][$i]; ?></td>
										<td><?= $_SESSION['interval_LR_Januari'][$i]; ?></td>				
									</tr>

								<?php endfor; ?>	
								<tr class="text-center collapse accordion-collapse LR_all" id="LRr1" data-bs-parent=".table">
									<th colspan="2">Total</th>
									<td><?= $_SESSION['jumlahFrekuensiLR_Januari']; ?></td>
									<td><?= $_SESSION['jumlah_prob_Januari_LR'] ?></td>
								</tr>
							</tbody>
						</table>

						<!-- bulan February -->
						<table class="table table-bordered table-sm accordion mb-0">
							<!-- <caption class="caption-top text-center">Data Meninggal Dunia</caption> -->
							<thead>
								<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#LRr2">
									<th style="border-left-color:blue">Februari <i class="fa-solid fa-caret-down"></i></th>
									<th class="col-2 text-center"><?= $_SESSION['angkaAcakLR']['Februari'] ?></th>
									<th class="col-2 text-center"><?= $_SESSION['hasilS_LR']['Februari'] ?></th>	
									<th class="col-2 text-center"><?= $_SESSION['frek_LR']['Februari']?></th>
									<th colspan="2" class="col-4 text-center"><?= "{$_SESSION['akurasiLR']['Februari']}%" ?></th>	
								</tr>
								<tr class="text-center collapse accordion-collapse LR_all"  id="LRr2" data-bs-parent=".table" >
									<th>No</th>
									<th>Bulan</th>
									<th>Frekuensi</th>
									<th>Probabilitas</th>
									<th>Kumulatif</th>
									<th>Interval Angka Acak</th>
								</tr>
							</thead>
							<tbody>
								<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLR_bulan']) ; $i++) : ?>
								<tr class="text-center collapse accordion-collapse LR_all" id="LRr2" data-bs-parent=".table" >
									<td><?= $no++; ?></td>
									<td class="text-justify">Februari  <?= $_SESSION['tahunLR_bulan'][$i]; ?></td>
									<td><?= $_SESSION['dataLR_bulan'][$i]['Februari']['data_bulan'];  ?></td>	
									<td><?= $_SESSION['prob_LR_Februari'][$i]; ?></td>	
									<td><?= $_SESSION['kumu_Februari_LR'][$i]; ?></td>
									<td><?= $_SESSION['interval_LR_Februari'][$i]; ?></td>	
								</tr>
							<?php endfor; ?>	
							<tr class="text-center collapse accordion-collapse LR_all" id="LRr2" data-bs-parent=".table">
								<th  colspan="2">Total</th>
								<td><?= $_SESSION['jumlahFrekuensiLR_Februari']; ?></td>
								<td><?= $_SESSION['jumlah_prob_Februari_LR'] ?></td>
							</tr>
						</tbody>
					</table>

					<!-- bulan Maret -->
					<table class="table table-bordered table-sm accordion mb-0">
						<!-- <caption class="caption-top text-center">Data Meninggal Dunia</caption> -->
						<thead>
							<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#LRr3">
								<th style="border-left-color:blue">Maret <i class="fa-solid fa-caret-down"></i></th>
								<th class="col-2 text-center"><?= $_SESSION['angkaAcakLR']['Maret'] ?></th>
								<th class="col-2 text-center"><?= $_SESSION['hasilS_LR']['Maret'] ?></th>	
								<th class="col-2 text-center"><?= $_SESSION['frek_LR']['Maret']?></th>
								<th colspan="2" class="col-4 text-center"><?= "{$_SESSION['akurasiLR']['Maret']}%" ?></th>								</tr>
								<tr class="text-center collapse accordion-collapse LR_all"  id="LRr3" data-bs-parent=".table" >
									<th>No</th>
									<th>Bulan</th>
									<th>Frekuensi</th>
									<th>Probabilitas</th>
									<th>Kumulatif</th>
									<th>Interval Angka Acak</th>
								</tr>
							</thead>
							<tbody>
								<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLR_bulan']) ; $i++) : ?>
								<tr class="text-center collapse accordion-collapse LR_all" id="LRr3" data-bs-parent=".table" >
									<td><?= $no++; ?></td>
									<td class="text-justify">Maret  <?= $_SESSION['tahunLR_bulan'][$i]; ?></td>
									<td><?= $_SESSION['dataLR_bulan'][$i]['Maret']['data_bulan'];  ?></td>
									<td><?= $_SESSION['prob_LR_Maret'][$i]; ?></td>	
									<td><?= $_SESSION['kumu_Maret_LR'][$i]; ?></td>		
									<td><?= $_SESSION['interval_LR_Maret'][$i]; ?></td>	
								</tr>
							<?php endfor; ?>	
							<tr class="text-center collapse accordion-collapse LR_all" id="LRr3" data-bs-parent=".table">
								<th  colspan="2">Total</th>
								<td><?= $_SESSION['jumlahFrekuensiLR_Maret']; ?></td>
								<td><?= $_SESSION['jumlah_prob_Maret_LR'] ?></td>
							</tr>
						</tbody>
					</table>

					<!-- bulan April -->
					<table class="table table-bordered table-sm accordion mb-0">
						<!-- <caption class="caption-top text-center">Data Meninggal Dunia</caption> -->
						<thead>
							<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#LRr4">
								<th style="border-left-color:blue">April <i class="fa-solid fa-caret-down"></i></th>
								<th class="col-2 text-center"><?= $_SESSION['angkaAcakLR']['April'] ?></th>
								<th class="col-2 text-center"><?= $_SESSION['hasilS_LR']['April'] ?></th>	
								<th class="col-2 text-center"><?= $_SESSION['frek_LR']['April']?></th>
								<th colspan="2" class="col-4 text-center"><?= "{$_SESSION['akurasiLR']['April']}%" ?></th>							</tr>
								<tr class="text-center collapse accordion-collapse LR_all"  id="LRr4" data-bs-parent=".table" >
									<th>No</th>
									<th>Bulan</th>
									<th>Frekuensi</th>
									<th>Probabilitas</th>
									<th>Kumulatif</th>
									<th>Interval Angka Acak</th>
								</tr>
							</thead>
							<tbody>
								<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLR_bulan']) ; $i++) : ?>
								<tr class="text-center collapse accordion-collapse LR_all" id="LRr4" data-bs-parent=".table" >
									<td><?= $no++; ?></td>
									<td class="text-justify">April  <?= $_SESSION['tahunLR_bulan'][$i]; ?></td>
									<td><?= $_SESSION['dataLR_bulan'][$i]['April']['data_bulan'];  ?></td>
									<td><?= $_SESSION['prob_LR_April'][$i];  ?></td>	
									<td><?= $_SESSION['kumu_April_LR'][$i]; ?></td>
									<td><?= $_SESSION['interval_LR_April'][$i]; ?></td>		
								</tr>
							<?php endfor; ?>	
							<tr class="text-center collapse accordion-collapse LR_all" id="LRr4" data-bs-parent=".table">
								<th  colspan="2">Total</th>
								<td><?= $_SESSION['jumlahFrekuensiLR_April']; ?></td>
								<td><?= $_SESSION['jumlah_prob_April_LR'] ?></td>
							</tr>
						</tbody>
					</table>

					<!-- bulan Mei -->
					<table class="table table-bordered table-sm accordion mb-0">
						<!-- <caption class="caption-top text-center">Data Meninggal Dunia</caption> -->
						<thead>
							<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#LRr5">
								<th style="border-left-color:red">Mei <i class="fa-solid fa-caret-down"></i></th>
								<th class="col-2 text-center"><?= $_SESSION['angkaAcakLR']['Mei'] ?></th>
								<th class="col-2 text-center"><?= $_SESSION['hasilS_LR']['Mei'] ?></th>	
								<th class="col-2 text-center"><?= $_SESSION['frek_LR']['Mei']?></th>
								<th colspan="2" class="col-4 text-center"><?= "{$_SESSION['akurasiLR']['Mei']}%" ?></th>				</tr>
								<tr class="text-center collapse accordion-collapse LR_all"  id="LRr5" data-bs-parent=".table" >
									<th>No</th>
									<th>Bulan</th>
									<th>Frekuensi</th>
									<th>Probabilitas</th>
									<th>Kumulatif</th>
									<th>Interval Angka Acak</th>
								</tr>
							</thead>
							<tbody>
								<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLR_bulan']) ; $i++) : ?>
								<tr class="text-center collapse accordion-collapse LR_all" id="LRr5" data-bs-parent=".table" >
									<td><?= $no++; ?></td>
									<td class="text-justify">Mei  <?= $_SESSION['tahunLR_bulan'][$i]; ?></td>
									<td><?= $_SESSION['dataLR_bulan'][$i]['Mei']['data_bulan'];  ?></td>
									<td><?= $_SESSION['prob_LR_Mei'][$i];  ?></td>
									<td><?= $_SESSION['kumu_Mei_LR'][$i]; ?></td>
									<td><?= $_SESSION['interval_LR_Mei'][$i]; ?></td>							
								</tr>
							<?php endfor; ?>	
							<tr class="text-center collapse accordion-collapse LR_all" id="LRr5" data-bs-parent=".table">
								<th  colspan="2">Total</th>
								<td><?= $_SESSION['jumlahFrekuensiLR_Mei']; ?></td>
								<td><?= $_SESSION['jumlah_prob_Mei_LR'] ?></td>
							</tr>
						</tbody>
					</table>

					<!-- bulan Juni -->
					<table class="table table-bordered table-sm accordion mb-0">
						<!-- <caption class="caption-top text-center">Data Meninggal Dunia</caption> -->
						<thead>
							<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#LRr6">
								<th style="border-left-color:red">Juni <i class="fa-solid fa-caret-down"></i></th>
								<th class="col-2 text-center"><?= $_SESSION['angkaAcakLR']['Juni'] ?></th>
								<th class="col-2 text-center"><?= $_SESSION['hasilS_LR']['Juni'] ?></th>	
								<th class="col-2 text-center"><?= $_SESSION['frek_LR']['Juni']?></th>
								<th colspan="2" class="col-4 text-center"><?= "{$_SESSION['akurasiLR']['Juni']}%" ?></th>				</tr>
								<tr class="text-center collapse accordion-collapse LR_all"  id="LRr6" data-bs-parent=".table" >
									<th>No</th>
									<th>Bulan</th>
									<th>Frekuensi</th>
									<th>Probabilitas</th>
									<th>Kumulatif</th>
									<th>Interval Angka Acak</th>
								</tr>
							</thead>
							<tbody>
								<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLR_bulan']) ; $i++) : ?>
								<tr class="text-center collapse accordion-collapse LR_all" id="LRr6" data-bs-parent=".table" >
									<td><?= $no++; ?></td>
									<td class="text-justify">Juni  <?= $_SESSION['tahunLR_bulan'][$i]; ?></td>
									<td><?= $_SESSION['dataLR_bulan'][$i]['Juni']['data_bulan'];  ?></td>
									<td><?= $_SESSION['prob_LR_Juni'][$i] ?></td>
									<td><?= $_SESSION['kumu_Juni_LR'][$i]; ?></td>
									<td><?= $_SESSION['interval_LR_Juni'][$i]; ?></td>			
								</tr>
							<?php endfor; ?>	
							<tr class="text-center collapse accordion-collapse LR_all" id="LRr6" data-bs-parent=".table">
								<th  colspan="2">Total</th>
								<td><?= $_SESSION['jumlahFrekuensiLR_Juni']; ?></td>
								<td><?= $_SESSION['jumlah_prob_Juni_LR'] ?></td>
							</tr>
						</tbody>
					</table>


					<!-- bulan Juli -->
					<table class="table table-bordered table-sm accordion mb-0">
						<!-- <caption class="caption-top text-center">Data Meninggal Dunia</caption> -->
						<thead>
							<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#LRr7">
								<th style="border-left-color:red">Juli <i class="fa-solid fa-caret-down"></i></th>
								<th class="col-2 text-center"><?= $_SESSION['angkaAcakLR']['Juli'] ?></th>
								<th class="col-2 text-center"><?= $_SESSION['hasilS_LR']['Juli'] ?></th>	
								<th class="col-2 text-center"><?= $_SESSION['frek_LR']['Juli']?></th>
								<th colspan="2" class="col-4 text-center"><?= "{$_SESSION['akurasiLR']['Juli']}%" ?></th>			</tr>
								<tr class="text-center collapse accordion-collapse LR_all"  id="LRr7" data-bs-parent=".table" >
									<th>No</th>
									<th>Bulan</th>
									<th>Frekuensi</th>
									<th>Probabilitas</th>
									<th>Kumulatif</th>
									<th>Interval Angka Acak</th>
								</tr>
							</thead>
							<tbody>
								<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLR_bulan']) ; $i++) : ?>
								<tr class="text-center collapse accordion-collapse LR_all" id="LRr7" data-bs-parent=".table" >
									<td><?= $no++; ?></td>
									<td class="text-justify">Juli  <?= $_SESSION['tahunLR_bulan'][$i]; ?></td>
									<td><?= $_SESSION['dataLR_bulan'][$i]['Juli']['data_bulan'];  ?></td>	
									<td><?= $_SESSION['prob_LR_Juli'][$i]?></td>
									<td><?= $_SESSION['kumu_Juli_LR'][$i]; ?></td>
									<td><?= $_SESSION['interval_LR_Juli'][$i]; ?></td>	
								</tr>
							<?php endfor; ?>	
							<tr class="text-center collapse accordion-collapse LR_all" id="LRr7" data-bs-parent=".table">
								<th  colspan="2">Total</th>
								<td><?= $_SESSION['jumlahFrekuensiLR_Juli']; ?></td>
								<td><?= $_SESSION['jumlah_prob_Juli_LR'] ?></td>
							</tr>
						</tbody>
					</table>


					<!-- bulan Agustus -->
					<table class="table table-bordered table-sm accordion mb-0">
						<!-- <caption class="caption-top text-center">Data Meninggal Dunia</caption> -->

						<thead>
							<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#LRr8">
								<th style="border-left-color:red">Agustus <i class="fa-solid fa-caret-down"></i></th>
								<th class="col-2 text-center"><?= $_SESSION['angkaAcakLR']['Agustus'] ?></th>
								<th class="col-2 text-center"><?= $_SESSION['hasilS_LR']['Agustus'] ?></th>	
								<th class="col-2 text-center"><?= $_SESSION['frek_LR']['Agustus']?></th>
								<th colspan="2" class="col-4 text-center"><?= "{$_SESSION['akurasiLR']['Agustus']}%" ?></th>
							</tr>
							<tr class="text-center collapse accordion-collapse LR_all"  id="LRr8" data-bs-parent=".table" >
								<th>No</th>
								<th>Bulan</th>
								<th>Frekuensi</th>
								<th>Probabilitas</th>
								<th>Kumulatif</th>
								<th>Interval Angka Acak</th>
							</tr>
						</thead>
						<tbody>
							<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLR_bulan']) ; $i++) : ?>
							<tr class="text-center collapse accordion-collapse LR_all" id="LRr8" data-bs-parent=".table" >
								<td><?= $no++; ?></td>
								<td class="text-justify">Agustus  <?= $_SESSION['tahunLR_bulan'][$i]; ?></td>
								<td><?= $_SESSION['dataLR_bulan'][$i]['Agustus']['data_bulan'];  ?></td>
								<td><?= $_SESSION['prob_LR_Agustus'][$i]; ?></td>
								<td><?= $_SESSION['kumu_Agustus_LR'][$i]; ?></td>
								<td><?= $_SESSION['interval_LR_Agustus'][$i]; ?></td>				
							</tr>
						<?php endfor; ?>	
						<tr class="text-center collapse accordion-collapse LR_all" id="LRr8" data-bs-parent=".table">
							<th  colspan="2">Total</th>
							<td><?= $_SESSION['jumlahFrekuensiLR_Agustus']; ?></td>
							<td><?= $_SESSION['jumlah_prob_Agustus_LR'] ?></td>
						</tr>
					</tbody>
				</table>

				<!-- bulan September -->
				<table class="table table-bordered table-sm accordion mb-0">
					<!-- <caption class="caption-top text-center">Data Meninggal Dunia</caption> -->
					<thead>
						<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#LRr9">
							<th style="border-left-color:red">September <i class="fa-solid fa-caret-down"></i></th>
							<th class="col-2 text-center"><?= $_SESSION['angkaAcakLR']['September'] ?></th>
							<th class="col-2 text-center"><?= $_SESSION['hasilS_LR']['September'] ?></th>	
							<th class="col-2 text-center"><?= $_SESSION['frek_LR']['September']?></th>
							<th colspan="2" class="col-4 text-center"><?= "{$_SESSION['akurasiLR']['September']}%" ?></th>
						</tr>			
						<tr class="text-center collapse accordion-collapse LR_all"  id="LRr9" data-bs-parent=".table" >
							<th>No</th> 		
							<th>Bulan</th>
							<th>Frekuensi</th>
							<th>Probabilitas</th>
							<th>Kumulatif</th>
							<th>Interval Angka Acak</th>
						</tr>
					</thead>
					<tbody>
						<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLR_bulan']) ; $i++) : ?>
						<tr class="text-center collapse accordion-collapse LR_all" id="LRr9" data-bs-parent=".table" >
							<td><?= $no++; ?></td>
							<td class="text-justify">September  <?= $_SESSION['tahunLR_bulan'][$i]; ?></td>
							<td><?= $_SESSION['dataLR_bulan'][$i]['September']['data_bulan'];  ?></td>		
							<td><?= $_SESSION['prob_LR_September'][$i]; ?></td>
							<td><?= $_SESSION['kumu_September_LR'][$i]; ?></td>
							<td><?= $_SESSION['interval_LR_September'][$i]; ?></td>	
						</tr>
					<?php endfor; ?>	
					<tr class="text-center collapse accordion-collapse LR_all" id="LRr9" data-bs-parent=".table">
						<th  colspan="2">Total</th>
						<td><?= $_SESSION['jumlahFrekuensiLR_September']; ?></td>
						<td><?= $_SESSION['jumlah_prob_September_LR'] ?></td>
					</tr>
				</tbody>
			</table>

			<!-- bulan Oktober -->
			<table class="table table-bordered table-sm accordion mb-0">
				<!-- <caption class="caption-top text-center">Data Meninggal Dunia</caption> -->
				<thead>
					<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#LRr10">
						<th style="border-left-color:red">Oktober <i class="fa-solid fa-caret-down"></i></th>
						<th class="col-2 text-center"><?= $_SESSION['angkaAcakLR']['Oktober'] ?></th>
						<th class="col-2 text-center"><?= $_SESSION['hasilS_LR']['Oktober'] ?></th>	
						<th class="col-2 text-center"><?= $_SESSION['frek_LR']['Oktober']?></th>
						<th colspan="2" class="col-4 text-center"><?= "{$_SESSION['akurasiLR']['Oktober']}%" ?></th>
					</tr>
					<tr class="text-center collapse accordion-collapse LR_all"  id="LRr10" data-bs-parent=".table" >
						<th>No</th>
						<th>Bulan</th>
						<th>Frekuensi</th>
						<th>Probabilitas</th>
						<th>Kumulatif</th>
						<th>Interval Angka Acak</th>
					</tr>
				</thead>
				<tbody>
					<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLR_bulan']) ; $i++) : ?>
					<tr class="text-center collapse accordion-collapse LR_all" id="LRr10" data-bs-parent=".table" >
						<td><?= $no++; ?></td>
						<td class="text-justify">Oktober  <?= $_SESSION['tahunLR_bulan'][$i]; ?></td>
						<td><?= $_SESSION['dataLR_bulan'][$i]['Oktober']['data_bulan'];  ?></td>
						<td><?= $_SESSION['prob_LR_Oktober'][$i]; ?></td>
						<td><?= $_SESSION['kumu_Oktober_LR'][$i]; ?></td>
						<td><?= $_SESSION['interval_LR_Oktober'][$i]; ?></td>			
					</tr>
				<?php endfor; ?>	
				<tr class="text-center collapse accordion-collapse LR_all" id="LRr10" data-bs-parent=".table">
					<th  colspan="2">Total</th>
					<td><?= $_SESSION['jumlahFrekuensiLR_Oktober']; ?></td>
					<td><?= $_SESSION['jumlah_prob_Oktober_LR'] ?></td>
				</tr>
			</tbody>
		</table>

		<!-- bulan November -->
		<table class="table table-bordered table-sm accordion mb-0">
			<!-- <caption class="caption-top text-center">Data Meninggal Dunia</caption> -->
			<thead>
				<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#LRr11">
					<th style="border-left-color:blue">November <i class="fa-solid fa-caret-down"></i></th>
					<th class="col-2 text-center"><?= $_SESSION['angkaAcakLR']['November'] ?></th>
					<th class="col-2 text-center"><?= $_SESSION['hasilS_LR']['November'] ?></th>	
					<th class="col-2 text-center"><?= $_SESSION['frek_LR']['November']?></th>
					<th colspan="2" class="col-4 text-center"><?= "{$_SESSION['akurasiLR']['November']}%" ?></th>	
				</tr>
				<tr class="text-center collapse accordion-collapse LR_all"  id="LRr11" data-bs-parent=".table" >
					<th>No</th>
					<th>Bulan</th>
					<th>Frekuensi</th>
					<th>Probabilitas</th>
					<th>Kumulatif</th>
					<th>Interval Angka Acak</th>
				</tr>
			</thead>
			<tbody>
				<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLR_bulan']) ; $i++) : ?>
				<tr class="text-center collapse accordion-collapse LR_all" id="LRr11" data-bs-parent=".table" >
					<td><?= $no++; ?></td>
					<td class="text-justify">November  <?= $_SESSION['tahunLR_bulan'][$i]; ?></td>
					<td><?= $_SESSION['dataLR_bulan'][$i]['November']['data_bulan'];  ?></td>
					<td><?= $_SESSION['prob_LR_November'][$i]; ?></td>
					<td><?= $_SESSION['kumu_November_LR'][$i]; ?></td>
					<td><?= $_SESSION['interval_LR_November'][$i]; ?></td>			
				</tr>
			<?php endfor; ?>	
			<tr class="text-center collapse accordion-collapse LR_all" id="LRr11" data-bs-parent=".table">
				<th  colspan="2">Total</th>
				<td><?= $_SESSION['jumlahFrekuensiLR_November']; ?></td>
				<td><?= $_SESSION['jumlah_prob_November_LR'] ?></td>
			</tr>
		</tbody>
	</table>

	<!-- bulan Desember -->
	<table class="table table-bordered table-sm accordion mb-0">
		<!-- <caption class="caption-top text-center">Data Meninggal Dunia</caption> -->
		<thead>
			<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#LRr12">
				<th style="border-left-color:blue">Desember <i class="fa-solid fa-caret-down"></i></th>
				<th class="col-2 text-center"><?= $_SESSION['angkaAcakLR']['Desember'] ?></th>
				<th class="col-2 text-center"><?= $_SESSION['hasilS_LR']['Desember'] ?></th>	
				<th class="col-2 text-center"><?= $_SESSION['frek_LR']['Desember']?></th>
				<th colspan="2" class="col-4 text-center"><?= "{$_SESSION['akurasiLR']['Desember']}%" ?></th>	
			</tr>
			<tr class="text-center collapse accordion-collapse LR_all"  id="LRr12" data-bs-parent=".table" >
				<th>No</th>
				<th>Bulan</th>
				<th>Frekuensi</th>
				<th>Probabilitas</th>
				<th>Kumulatif</th>
				<th>Interval Angka Acak</th>
			</tr>
		</thead>
		<tbody>
			<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLR_bulan']) ; $i++) : ?>
			<tr class="text-center collapse accordion-collapse LR_all" id="LRr12" data-bs-parent=".table" >
				<td><?= $no++; ?></td>
				<td class="text-justify">Desember  <?= $_SESSION['tahunLR_bulan'][$i]; ?></td>
				<td><?= $_SESSION['dataLR_bulan'][$i]['Desember']['data_bulan'];  ?></td>
				<td><?= $_SESSION['prob_LR_Desember'][$i]; ?></td>
				<td><?= $_SESSION['kumu_Desember_LR'][$i]; ?></td>
				<td><?= $_SESSION['interval_LR_Desember'][$i]; ?></td>			
			</tr>
		<?php endfor; ?>	
		<tr class="text-center collapse accordion-collapse LR_all" id="LRr12" data-bs-parent=".table">
			<th  colspan="2">Total</th>
			<td><?= $_SESSION['jumlahFrekuensiLR_Desember']; ?></td>
			<td><?= $_SESSION['jumlah_prob_Desember_LR'] ?></td>
		</tr>

		<tr class="text-center table-dark">
			<th rowspan="3" colspan="2" style=" vertical-align: middle !important;">Total</th>
			<th><?= $_SESSION['total_hasilS_LR']; ?></th>
			<th><?= $_SESSION['total_dataR_LR']; ?></th>
			<th><?= "{$_SESSION['akurasi_tahun_LR']}%"; ?></th>			
		</tr>

		<tr class="text-center table-dark">
			<th class="musimKemarau"><?= $_SESSION['total_hasilS_Kemarau_LR']; ?></th>
			<th><?= $_SESSION['total_dataR_Kemarau_LR']; ?></th>
			<th><?= "{$_SESSION['akurasi_Kemarau_LR']}%"; ?></th>
			
		</tr>

		<tr class="text-center table-dark">
			<th class="musimHujan"><?= $_SESSION['total_hasilS_Hujan_LR']; ?></th>
			<th><?= $_SESSION['total_dataR_Hujan_LR']; ?></th>
			<th><?= "{$_SESSION['akurasi_Hujan_LR']}%"; ?></th>
		</tr>

		<tr class="text-center table-dark">
			<th rowspan="3" colspan="2" style=" vertical-align: middle !important;" class="text-center">Rata-Rata</th>
			<th><?= $_SESSION['rata2_total_hasilS_LR']; ?></th>
			<th><?= $_SESSION['rata2_total_dataR_LR']; ?></th>
			<th><?= "{$_SESSION['rata2_akurasi_tahun_LR']}%"; ?></th>	
		</tr>

		<tr class="text-center table-dark">
			<th class="musimKemarau"><?= $_SESSION['rata2_total_hasilS_Kemarau_LR']; ?></th>
			<th><?= $_SESSION['rata2_total_dataR_Kemarau_LR']; ?></th>
			<th><?= "{$_SESSION['rata2_akurasi_Kemarau_LR']}%"; ?></th>
		</tr>

		<tr class="text-center table-dark">
			<th class="musimHujan"><?= $_SESSION['rata2_total_hasilS_Hujan_LR'];?></th>
			<th><?= $_SESSION['rata2_total_dataR_Hujan_LR'];?></th>
			<th><?= "{$_SESSION['rata2_akurasi_Hujan_LR']}%";?></th>
		</tr>

	</tbody>
</table>
</tr>

</tbody>
<caption>								
	<ul style="list-style-type:square;">
		<li style="color: blue;"><span style="color: gray;">Musim Hujan</span></li>
		<li style="color: red;"><span style="color: gray;">Musim Kemarau</span></li>
	</ul> 
</caption>


</table>

</div>		
</div>
</div>
</div>
</div>
</div>
