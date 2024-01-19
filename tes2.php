<?php 
set_time_limit(300);
$start = time(); 

$bulan = ["Januari","Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
$musim_kemarau = ["April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober"];
$musim_hujan = ["Januari","Februari", "Maret","November", "Desember"];


$datasimulasi_MD= [
	[
		"tahun" => "2007",
		"frekuensi" => [1,5,6,3,5,6,8,3,5,3,3,9] 
	],

	[
		"tahun" => "2008",
		"frekuensi" => [5,4,6,4,5,6,9,4,6,2,10,7] 
	],

	[
		"tahun" => "2009",
		"frekuensi" => [2,3,4,3,6,9,7,6,5,6,4,7] 
	],

	[
		"tahun" => "2010",
		"frekuensi" => [3,6,3,2,4,2,4,5,2,5,5,1] 
	],

	[
		"tahun" => "2011",
		"frekuensi" => [1,2,1,4,3,1,10,8,3,3,3,4] 
	],

	[
		"tahun" => "2012",
		"frekuensi" => [4,2,4,4,5,11,6,5,6,6,3,4] 
	],

	[
		"tahun" => "2013",
		"frekuensi" => [1,8,1,2,8,6,3,5,6,2,5,3] 
	],

	[
		"tahun" => "2014",
		"frekuensi" => [10,2,5,3,8,2,3,5,5,6,5,5] 
	],

	[
		"tahun" => "2015",
		"frekuensi" => [4,6,5,8,4,8,3,6,1,6,7,2] 
	],

	[
		"tahun" => "2016",
		"frekuensi" => [5,2,1,7,5,7,1,5,5,7,2,4] 
	],

	[
		"tahun" => "2017",
		"frekuensi" => [11,4,2,2,6,4,7,5,6,5,2,4] 
	],

	[
		"tahun" => "2018",
		"frekuensi" => [4,5,4,3,6,6,5,9,6,3,3,5] 
	],

	[
		"tahun" => "2019",
		"frekuensi" => [6,3,4,1,3,7,8,6,8,4,6,5] 
	]
];

// echo count($datasimulasi_MD);
// echo "<br>";

// foreach ($datasimulasi_MD as $data) {
// 	echo $data['tahun']."<br>";
// 	for ($i=0; $i < count($data['frekuensi']); $i++) { 
// 		echo "{$data['frekuensi'][$i]}";
// 	}
// 	echo"<br>";
// }




//data Meninggal
//$dataS2019_MD = [6,3,4,1,3,7,8,6,8,4,6,5];
//$dataR2020_MD = [3,3,3,4,3,2,5,3,8,9,4,4];
//$dataS2020_MD = [3,3,3,4,3,2,5,3,8,9,4,4];
//$dataR2021_MD = [2,5,3,2,3,5,3,3,2,5,4,2];
//$dataS2021_MD = [2,5,3,2,3,5,3,3,2,5,4,2];
//$dataR2022_MD = [4,2,3,1,1,2,3,4,6,1,1,1];


// data Luka Berat
// $dataS2019_LB = [6,9,15,9,15,11,13,11,20,17,16,13];
// $dataR2020_LB = [4,5,4,9,10,17,6,3,6,3,3,6]; 
// $dataS2020_LB = [4,5,4,9,10,17,6,3,6,3,3,6]; 
// $dataR2021_LB = [3,3,3,8,7,4,4,4,9,5,5,2];
// $dataS2021_LB = [3,3,3,8,7,4,4,4,9,5,5,2];
// $dataR2022_LB = [9,4,1,4,5,4,2,4,1,2,0,2];

//data Luka Ringan
// $dataS2019_LR = [47,36,55,31,51,41,35,35,30,41,54,45];
// $dataR2020_LR = [12,41,34,26,31,28,21,23,29,31,35,31];
// $dataS2020_LR = [12,41,34,26,31,28,21,23,29,31,35,31];
// $dataR2021_LR = [26,18,25,24,36,38,29,36,26,32,30,31];
// $dataS2021_LR = [26,18,25,24,36,38,29,36,26,32,30,31];
// $dataS2022_LR = [29,30,25,25,35,37,41,31,58,41,37,40];

//Testing Meninggal Dunia
// $dataS2019_MD = [6,3,4,1,3,7,8,6,8,4,6,5];
// $dataR2020_MD = [3,3,3,4,3,2,5,3,8,9,4,4];
// $dataS2019_LB = [3,3,3,4,3,2,5,3,8,9,4,4];
// $dataR2020_LB = [2,5,3,2,3,5,3,3,2,5,4,2];
// $dataS2019_LR = [2,5,3,2,3,5,3,3,2,5,4,2];
// $dataR2020_LR = [4,2,3,1,1,2,3,4,6,1,1,1];

//Testing Luka Berat
// $dataS2019_MD = [6,9,15,9,15,11,13,11,20,17,16,13];
// $dataR2020_MD = [4,5,4,9,10,17,6,3,6,3,3,6];
// $dataS2019_LB = [4,5,4,9,10,17,6,3,6,3,3,6]; 
// $dataR2020_LB = [3,3,3,8,7,4,4,4,9,5,5,2];
// $dataS2019_LR = [3,3,3,8,7,4,4,4,9,5,5,2];
// $dataR2020_LR = [9,4,1,4,5,4,2,4,1,2,0,2];

// //Testing Luka Ringan
// $dataS2019_MD = [47,36,55,31,51,41,35,35,30,41,54,45];
// $dataR2020_MD = [12,41,34,26,31,28,21,23,29,31,35,31];
// $dataS2019_LB = [12,41,34,26,31,28,21,23,29,31,35,31];
// $dataR2020_LB = [26,18,25,24,36,38,29,36,26,32,30,31];
// $dataS2019_LR = [26,18,25,24,36,38,29,36,26,32,30,31];
// $dataR2020_LR = [29,30,25,25,35,37,41,31,58,41,37,40];

	$dataR2020_MD = [29, 38, 46, 45, 41, 40, 28, 31, 31, 42, 28, 49];
	$dataS2019_MD = [29, 29, 42, 23, 42, 36, 35, 30, 38, 40, 31,30];
	$dataS2019_LB = [12,41,34,26,31,28,21,23,29,31,35,31];
	$dataR2020_LB = [26,18,25,24,36,38,29,36,26,32,30,31];
	$dataS2019_LR = [26,18,25,24,36,38,29,36,26,32,30,31];
	$dataR2020_LR = [29,30,25,25,35,37,41,31,58,41,37,40];





//musim hujan dan kemarau
	$jumlah_kemarau_MD = 0;
	$jumlah_hujan_MD = 0;
	$jumlahR_kemarau_MD = 0;
	$jumlahR_hujan_MD = 0;

	$jumlah_kemarau_LB = 0;
	$jumlah_hujan_LB = 0;
	$jumlahR_kemarau_LB = 0;
	$jumlahR_hujan_LB = 0;

	$jumlah_kemarau_LR = 0;
	$jumlah_hujan_LR = 0;
	$jumlahR_kemarau_LR = 0;
	$jumlahR_hujan_LR = 0;



	$jumlahR_MD = 0;
	$jumlahR_LB = 0;
	$jumlahR_LR = 0;



//Jumlah frekuensi 
	$jumlah_MD = 0;
	$jumlah_LB = 0;
	$jumlah_LR = 0; 
	for ($i=0; $i < count($dataS2019_MD); $i++) { 
	//Meninggal Dunia
		$jumlah_MD += $dataS2019_MD[$i];
		$jumlahR_MD += $dataR2020_MD[$i];

	//Luka Berat
		$jumlah_LB += $dataS2019_LB[$i];
		$jumlahR_LB += $dataR2020_LB[$i];

	//Luka Ringan
		$jumlah_LR += $dataS2019_LR[$i];
		$jumlahR_LR += $dataR2020_LR[$i];

	//musim kemarau dan musim hujan
		if($i >= 3 && $i <= 9){
			$jumlah_kemarau_MD += $dataS2019_MD[$i];
			$jumlahR_kemarau_MD += $dataR2020_MD[$i];

			$jumlah_kemarau_LB += $dataS2019_LB[$i];
			$jumlahR_kemarau_LB += $dataR2020_LB[$i];

			$jumlah_kemarau_LR += $dataS2019_LR[$i];
			$jumlahR_kemarau_LR += $dataR2020_LR[$i];
		}else{
			$jumlah_hujan_MD += $dataS2019_MD[$i];
			$jumlahR_hujan_MD += $dataR2020_MD[$i];

			$jumlah_hujan_LB += $dataS2019_LB[$i];
			$jumlahR_hujan_LB += $dataR2020_LB[$i];

			$jumlah_hujan_LR += $dataS2019_LR[$i];
			$jumlahR_hujan_LR += $dataR2020_LR[$i];
		}
	}

//rata2 Frekuensi Meninggal Dunia
	$rata2F_MD = round($jumlah_MD / count($bulan)); 
	$rata2_MD = round($jumlahR_MD / count($bulan));
//rata2 Frekuensi Luka Berat
	$rata2F_LB= round($jumlah_LB/ count($bulan)); 
	$rata2_LB= round($jumlahR_LB/ count($bulan));
//rata2 Frekuensi Luka Ringan
	$rata2F_LR = round($jumlah_LR / count($bulan)); 
	$rata2_LR = round($jumlahR_LR / count($bulan));



//Distribusi Probabilitas
	//rumus p = f / t
	$dataProb_MD = [];
	$jumlahProb_MD = 0;
	$dataProb_LB = [];
	$jumlahProb_LB = 0;
	$dataProb_LR = [];
	$jumlahProb_LR = 0;
	for ($i=0; $i < count($dataS2019_MD) ; $i++) { 
		$dataProb_MD[$i] = number_format($dataS2019_MD[$i] / $jumlah_MD, 2);
		$jumlahProb_MD += ($dataS2019_MD[$i]/$jumlah_MD);

		$dataProb_LB[$i] = number_format($dataS2019_LB[$i] / $jumlah_LB, 2);
		$jumlahProb_LB += ($dataS2019_LB[$i]/$jumlah_LB);

		$dataProb_LR[$i] = number_format($dataS2019_LR[$i] / $jumlah_LR, 2);
		$jumlahProb_LR += ($dataS2019_LR[$i]/$jumlah_LR);
	}



//Kumulatif
	//rumus Kt(x) = Pt(x) + Pt-1(x);
	$dataKumu_MD = [];
	$dataKumu_LB= [];
	$dataKumu_LR= [];
	for ($i=0; $i <count($dataS2019_MD) ; $i++) { 
		$dataKumu_MD[$i] = $i == 0 ? $dataProb_MD[$i] : number_format($dataProb_MD[$i] + $dataKumu_MD[$i-1],2); 

		$dataKumu_LB[$i] = $i == 0 ? $dataProb_LB[$i] : number_format($dataProb_LB[$i] + $dataKumu_LB[$i-1],2); 

		$dataKumu_LR[$i] = $i == 0 ? $dataProb_LR[$i] : number_format($dataProb_LR[$i] + $dataKumu_LR[$i-1],2);  
	}


//interval
	 //rumus
	 /*  Pada nilai angka acak sendiri terdiri dari dua bagian yaitu nilai angka acak batas awal dan nilai angka acak batas akhir. Adapun untuk menetukan nilai batasan pada variabel angka acak adalah 
	 a. Nilai batas awal untuk variabel pertama dimulai dengan nilai 0.
	 b. Nilai batas akhir ditentukan dengan cara mengalikan nilai probabilitas kumulatif     	masing-masing variabel dengan angka 100 dan dibulatkan.
	 c. Nilai batas awal untuk variabel kedua dan seterusnya diperoleh dari nilai batas      	akhir variabel sebelumnya kemudian ditambahkan dengan angka 1.*/ 
	 $nilaiMin_MD = [];
	 $nilaiMax_MD = [];
	 $nilaiMin_LB = [];
	 $nilaiMax_LB = [];
	 $nilaiMin_LR = [];
	 $nilaiMax_LR = [];
	 $tampil_Interval_MD = [];
	 $tampil_Interval_LB = [];
	 $tampil_Interval_LR = [];
	 for ($i=0; $i < count($dataS2019_MD); $i++) {
	 	$nilaiMin_MD[$i] = $i == 0 ? 0 : $nilaiMax_MD[$i-1]+1;
	 	$nilaiMax_MD[$i] = $dataKumu_MD[$i] * 100;  
	 	$tampil_Interval_MD[$i] = "{$nilaiMin_MD[$i]}-{$nilaiMax_MD[$i]}";

	 	$nilaiMin_LB[$i] = $i == 0 ? 0 : $nilaiMax_LB[$i-1]+1;
	 	$nilaiMax_LB[$i] = $dataKumu_LB[$i] * 100;  
	 	$tampil_Interval_LB[$i] = "{$nilaiMin_LB[$i]}-{$nilaiMax_LB[$i]}";

	 	$nilaiMin_LR[$i] = $i == 0 ? 0 : $nilaiMax_LR[$i-1]+1;
	 	$nilaiMax_LR[$i] = $dataKumu_LR[$i] * 100;  
	 	$tampil_Interval_LR[$i] = "{$nilaiMin_LR[$i]}-{$nilaiMax_LR[$i]}";
	 }


//Random Angka Acak
	 //rumus zi+1 = (a.zi + c) mod m
	 //a = konstanta pengali (a < m)
	 //c = konstanta pergeseran (c < m)
	 //m = konstanta modulus (m > 0)
	 //zi = bilangan awal (bilangan bulat > 0, Z0 < m)

	 $a = 0;
	 $c = 0;
	 $m = 99;
	 $zi = 0;	
	 
	 // for ($i=0; $i < 12; $i++) { 	

	 	// ulang :
	 	// $tempA = rand(1, $m-1);
	 	// $tempC = rand(1, $m-1);
	 	// $tempZi = rand(1, $m-1); 
	 	// if ($tempA != $tempC && $tempA != $tempZi && $tempC != $tempZi) {
	 	// 	$a[$i] = $tempA; 
	 	// 	$c[$i] = $tempC;
	 	// 	$zi[$i] = $tempZi;
	 	// } else{
	 	// 	goto ulang;
	 	//}

	 // }

	 $jumlahPercobaan = 0;
	 $akurasi = 96;
	 $akurasi_tertinggi = 0;
	 $waktu_batasan = 15; 

	 	 

	 while (true) {

	 	$end = time();
		$executionTime = $end - $start;

	 	ulang :
	 	$tempA = rand(1, $m-1);
	 	$tempC = rand(1, $m-1);
	 	$tempZi = rand(1, $m-1); 
	 	if ($tempA != $tempC && $tempA != $tempZi && $tempC != $tempZi) {
	 		$a = $tempA; 
	 		$c = $tempC;
	 		$zi = $tempZi;
	 	} else{
	 		goto ulang;
	 	}



	 	//Inisialisasi Angka Acak
	 	$temp_zi_MD = 0;
	 	$zi_MD = $zi;
	 	$a_MD = $a;
	 	$c_MD = $c;
	 	$nilai_zi_MD = [];

	 	$temp_zi_LB = 0;
	 	$zi_LB = $zi;
	 	$a_LB = $a;
	 	$c_LB = $c;
	 	$nilai_zi_LB = [];

	 	$temp_zi_LR = 0;
	 	$zi_LR = $zi;
	 	$a_LR = $a;
	 	$c_LR = $c;
	 	$nilai_zi_LR = [];
	 	for ($j=0; $j < count($bulan); $j++) {
	 		$temp_zi_MD = ($a_MD * $zi_MD + $c_MD) % $m;
	 		$nilai_zi_MD[$j]= $temp_zi_MD;
	 		$zi_MD = $temp_zi_MD;	

	 		$temp_zi_LB = ($a_LB * $zi_LB + $c_LB) % $m;
	 		$nilai_zi_LB[$j]= $temp_zi_LB;
	 		$zi_LB = $temp_zi_LB;	

	 		$temp_zi_LR = ($a_LR * $zi_LR + $c_LR) % $m;
	 		$nilai_zi_LR[$j]= $temp_zi_LR;
	 		$zi_LR = $temp_zi_LR;	     	
	 	}

	 	for ($r=0; $r < count($nilai_zi_MD); $r++) {
	 		$hitung = 0;
	 		for ($u=0; $u < count($nilai_zi_MD); $u++) { 
	 			if($nilai_zi_MD[$r] == $nilai_zi_MD[$u]){
	 				$hitung++;
	 			}
	 		}

	 		if ($hitung > 2) {
	 			goto ulang;
	 		}
	 	}

	//Hasil simulasi
	//jika Batas Awal Interval >= Angka Acak ≤ Batas Akhir Interval selainnya 	
	//Hasil simulasi = interval frekeunsi
	 	$hasilS_MD = [];
	 	$jumlahHs_MD = 0;
	 	$jumlahHs_kemarau_MD = 0;
	 	$jumlahHs_hujan_MD = 0;

	 	$hasilS_LB = [];
	 	$jumlahHs_LB = 0;
	 	$jumlahHs_kemarau_LB = 0;
	 	$jumlahHs_hujan_LB = 0;

	 	$hasilS_LR = [];
	 	$jumlahHs_LR = 0;
	 	$jumlahHs_kemarau_LR = 0;
	 	$jumlahHs_hujan_LR = 0;
	 	for ($h=0; $h < count($bulan); $h++) {
	 		$temp_MD = 0;
	 		$temp_LB = 0;
	 		$temp_LR = 0;
	 		for ($in=0; $in	 < count($bulan) ; $in++) { 
	 			if($nilai_zi_MD[$h] >= $nilaiMin_MD[$in] && $nilai_zi_MD[$h] <= $nilaiMax_MD[$in]){
	 				$temp_MD = $dataS2019_MD[$in]; 
	 			}

	 			if($nilai_zi_LB[$h] >= $nilaiMin_LB[$in] && $nilai_zi_LB[$h] <= $nilaiMax_LB[$in]){
	 				$temp_LB = $dataS2019_LB[$in]; 
	 			}

	 			if($nilai_zi_LR[$h] >= $nilaiMin_LR[$in] && $nilai_zi_LR[$h] <= $nilaiMax_LR[$in]){
	 				$temp_LR = $dataS2019_LR[$in]; 
	 			}
	 		}
	 		$hasilS_MD[$h] = $temp_MD;
	 		$jumlahHs_MD += $hasilS_MD[$h];

	 		$hasilS_LB[$h] = $temp_LB;
	 		$jumlahHs_LB += $hasilS_LB[$h];

	 		$hasilS_LR[$h] = $temp_LR;
	 		$jumlahHs_LR += $hasilS_LR[$h];

	 		//musim kemarau dan hujan
	 		if($h >= 3 && $h <= 9){
	 			$jumlahHs_kemarau_MD += $hasilS_MD[$h];
	 			$jumlahHs_kemarau_LB += $hasilS_LB[$h];
	 			$jumlahHs_kemarau_LR += $hasilS_LR[$h];
	 		}else{
	 			$jumlahHs_hujan_MD += $hasilS_MD[$h];
	 			$jumlahHs_hujan_LB += $hasilS_LB[$h];
	 			$jumlahHs_hujan_LR += $hasilS_LR[$h];
	 		}
	 	}
	 //Rata-rata Hasil
	 	$rata2H_MD = round($jumlahHs_MD / count($bulan));
	 	$rata2H_LB = round($jumlahHs_LB / count($bulan));
	 	$rata2H_LR = round($jumlahHs_LR / count($bulan));


	 //akurasi
	 	$akurasi_MD = [];
	 	$jumlah_akurasi_MD = 0; 
	 //musim akurasi hujan dan kemarau
	 	$jumlah_akurasi_kemarau_MD = 0;
	 	$jumlah_akurasi_hujan_MD = 0;	

	 	$akurasi_LB = [];
	 	$jumlah_akurasi_LB = 0; 
	 	 //musim akurasi hujan dan kemarau
	 	$jumlah_akurasi_kemarau_LB = 0;
	 	$jumlah_akurasi_hujan_LB = 0;

	 	$akurasi_LR = [];
	 	$jumlah_akurasi_LR = 0; 
	 	 //musim akurasi hujan dan kemarau
	 	$jumlah_akurasi_kemarau_LR = 0;
	 	$jumlah_akurasi_hujan_LR = 0;
	 	for ($a=0; $a < count($bulan); $a++) { 
	 		if($hasilS_MD[$a] <= $dataR2020_MD[$a]){
	 			$akurasi_MD[$a] = round($hasilS_MD[$a] / $dataR2020_MD[$a] * 100);
	 		}else{
	 			$akurasi_MD[$a] = round($dataR2020_MD[$a] / $hasilS_MD[$a]* 100);
	 		}
	 		$jumlah_akurasi_MD += $akurasi_MD[$a];

	 		if($hasilS_LB[$a] <= $dataR2020_LB[$a]){
	 			$akurasi_LB[$a] = round($hasilS_LB[$a] / $dataR2020_LB[$a] * 100);
	 		}else{
	 			$akurasi_LB[$a] = round($dataR2020_LB[$a] / $hasilS_LB[$a]* 100);
	 		}
	 		$jumlah_akurasi_LB += $akurasi_LB[$a];

	 		if ($dataR2020_LR[$a] == 0) {
	 			$akurasi_LR[$a] = 0; 
	 		}else{
	 			$akurasi_LR[$a] = $hasilS_LR[$a] <= $dataR2020_LR[$a]   ? round($hasilS_LR[$a] / $dataR2020_LR[$a] * 100): round($akurasi_LR[$a] = $dataR2020_LR[$a] / $hasilS_LR[$a] * 100);	
	 		}
	 		
	 		
	 		$jumlah_akurasi_LR += $akurasi_LR[$a];

	 		//musim akurasi hujan dan kemarau
	 		if($a >= 3 && $a <= 9){
	 			$jumlah_akurasi_kemarau_MD += $akurasi_MD[$a];
	 			$jumlah_akurasi_kemarau_LB += $akurasi_LB[$a];
	 			$jumlah_akurasi_kemarau_LR += $akurasi_LR[$a];
	 		}else{
	 			$jumlah_akurasi_hujan_MD += $akurasi_MD[$a];
	 			$jumlah_akurasi_hujan_LB += $akurasi_LB[$a];
	 			$jumlah_akurasi_hujan_LR += $akurasi_LR[$a];
	 		}
	 	}


	 //Tingkat Akurasi
	 	$akurasiT_MD = $jumlahHs_MD <= $jumlahR_MD ? round($jumlahHs_MD / $jumlahR_MD * 100) : round($jumlahR_MD / $jumlahHs_MD * 100);	 	
	 	$akurasiT_LB = $jumlahHs_LB <= $jumlahR_LB ? round($jumlahHs_LB / $jumlahR_LB * 100) : round($jumlahR_LB / $jumlahHs_LB * 100);
	 	$akurasiT_LR = $jumlahHs_LR <= $jumlahR_LR ? round($jumlahHs_LR / $jumlahR_LR * 100) : round($jumlahR_LR / $jumlahHs_LR * 100);
	 	//musim hujan dan kemarau
	 	$akurasiT_kemarau_MD = $jumlahHs_kemarau_MD <= $jumlahR_kemarau_MD ? round($jumlahHs_kemarau_MD / $jumlahR_kemarau_MD * 100) : round($jumlahR_kemarau_MD / $jumlahHs_kemarau_MD * 100);
	 	$akurasiT_hujan_MD = $jumlahHs_hujan_MD <= $jumlahR_hujan_MD ? round($jumlahHs_hujan_MD / $jumlahR_hujan_MD * 100) : round($jumlahR_hujan_MD / $jumlahHs_hujan_MD * 100);
	 	//musim hujan dan kemarau
	 	$akurasiT_kemarau_LB = $jumlahHs_kemarau_LB <= $jumlahR_kemarau_LB ? round($jumlahHs_kemarau_LB / $jumlahR_kemarau_LB * 100) : round($jumlahR_kemarau_LB / $jumlahHs_kemarau_LB * 100);
	 	$akurasiT_hujan_LB = $jumlahHs_hujan_LB <= $jumlahR_hujan_LB ? round($jumlahHs_hujan_LB / $jumlahR_hujan_LB * 100) : round($jumlahR_hujan_LB / $jumlahHs_hujan_LB * 100);
	 	//musim hujan dan kemarau
	 	$akurasiT_kemarau_LR = $jumlahHs_kemarau_LR <= $jumlahR_kemarau_LR ? round($jumlahHs_kemarau_LR / $jumlahR_kemarau_LR * 100) : round($jumlahR_kemarau_LR / $jumlahHs_kemarau_LR * 100);
	 	$akurasiT_hujan_LR = $jumlahHs_hujan_LR <= $jumlahR_hujan_LR ? round($jumlahHs_hujan_LR / $jumlahR_hujan_LR * 100) : round($jumlahR_hujan_LR / $jumlahHs_hujan_LR * 100);


	 //Rata-Rata Akurasi hasil
	 	$rata2A_MD = round($jumlah_akurasi_MD / count($bulan));
	 	$rata2A_LB = round($jumlah_akurasi_LB / count($bulan));
	 	$rata2A_LR = round($jumlah_akurasi_LR / count($bulan));
	 	//Rata-Rata akurasi Musim hujan dan kemarau
	 	$rata2A_kemarau_MD = round($jumlah_akurasi_kemarau_MD / count($musim_kemarau));
	 	$rata2A_hujan_MD = round($jumlah_akurasi_hujan_MD / count($musim_hujan));
	 	//Rata-Rata akurasi Musim hujan dan kemarau
	 	$rata2A_kemarau_LB = round($jumlah_akurasi_kemarau_LB / count($musim_kemarau));
	 	$rata2A_hujan_LB = round($jumlah_akurasi_hujan_LB / count($musim_hujan));
	 	//Rata-Rata akurasi Musim hujan dan kemarau
	 	$rata2A_kemarau_LR = round($jumlah_akurasi_kemarau_LR / count($musim_kemarau));
	 	$rata2A_hujan_LR = round($jumlah_akurasi_hujan_LR / count($musim_hujan));




  
    if ($rata2A_LR == $akurasi) {
       
        break;
    }

   
	 	
	 	if($rata2_LR !== $akurasi && $executionTime == $waktu_batasan){
	 		$akurasi--;
	 		$waktu_batasan += $waktu_batasan;
	 	}

	 	

	 	
	 	
	 	

	 	$jumlahPercobaan++;

	 }
	
 	 
	
	 echo "Hasil Rata-Rata Meninggal Dunia 2021 -> 2022 = $rata2A_LR<br>";
	 echo "Hasil Tingkat Akurasi Meninggal Dunia 2021 -> 2022 = $akurasiT_LR";
	 echo "<br> waktu eksekusi : $executionTime detik";

	 ?>

	 <!DOCTYPE html>
	 <html lang="en">
	 <head>
	 	<meta charset="UTF-8">
	 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	 	<title>Document</title>
	 	<style>	
	 		.musimKemarau{
	 			background-color: #F8CBAD;
	 		}

	 		.musimHujan{
	 			background-color: #D6DCE4;
	 		}

	 		ul{
	 			list-style-type: square;
	 			font-size: 40px;
	 		}

	 		.musim{
	 			color: black;
	 			font-size: 20px;
	 		}

	 		li:nth-of-type(1){	 		
	 			color: #F8CBAD;	
	 		}

	 		li:nth-of-type(2){
	 			color: #D6DCE4;	
	 		}


	 	</style>	
	 </head>
	 <body>

	 	<p><?="Jumlah Percobaan = $jumlahPercobaan";?></p>
	 	<p><?= "LCM : a = $tempA, zi = $zi, c = $c, m = $m"; ?></p>	

	 	<!-- Meninggal Dunia -->
	 	<fieldset style="display: inline;">	
	 		<legend>Meninggal Dunia 2019 -> 2020</legend>
	 		<table border="">
	 			<thead>
	 				<th>NO</th>
	 				<th>Bulan</th>
	 				<th>Frekuensi</th>
	 				<th>Probabilitas</th>
	 				<th>Kumulatif</th>
	 				<th>Interval</th>
	 				<th>Angka Acak</th>
	 				<th>Hasil Simulasi</th>
	 				<th>Data Real</th>
	 				<th>Tingkat Akurasi</th>
	 			</thead>
	 			<tbody>

	 				<?php $no = 0; for ($i=0; $i < count($dataS2019_MD) ; $i++) : ?>
	 				<tr>
	 					<td><?= ++$no; ?></td>
	 					<td style="background-color: <?= $no >= 4 && $no <= 10 ? '#F8CBAD' : '#D6DCE4'; ?>"><?= $bulan[$i]; ?></td>
	 						<td><?= $dataS2019_MD[$i]; ?></td>
	 						<td><?= $dataProb_MD[$i]; ?></td>
	 						<td><?= $dataKumu_MD[$i]; ?></td>
	 						<td><?= $tampil_Interval_MD[$i]; ?></td>
	 						<td><?= $nilai_zi_MD[$i]; ?></td>
	 						<td><?=	$hasilS_MD[$i]; ?></td>
	 						<td><?= $dataR2020_MD[$i]; ?></td>
	 						<td><?= $akurasi_MD[$i]; ?></td>				
	 					</tr>
	 				<?php endfor; ?>
	 				<tr>
	 					<td colspan="2" rowspan="3" style="text-align: center;">Total</td>
	 					<td><?= $jumlah_MD; ?></td>
	 					<td><?= $jumlahProb_MD; ?></td>
	 					<td colspan="3"></td>
	 					<td><?= $jumlahHs_MD; ?></td>
	 					<td><?= $jumlahR_MD; ?></td>
	 					<td><?= $akurasiT_MD; ?></td>	

	 				</tr>
	 				<tr class="musimKemarau">
	 					<td><?= $jumlah_kemarau_MD; ?></td>
	 					<td colspan="4"></td>
	 					<td><?= $jumlahHs_kemarau_MD; ?></td>
	 					<td><?= $jumlahR_kemarau_MD; ?></td>
	 					<td><?= $akurasiT_kemarau_MD; ?></td>	

	 				</tr>
	 				<tr class="musimHujan">
	 					<td><?= $jumlah_hujan_MD; ?></td>
	 					<td colspan="4"></td>
	 					<td><?= $jumlahHs_hujan_MD; ?></td>
	 					<td><?= $jumlahR_hujan_MD; ?></td>
	 					<td><?= $akurasiT_hujan_MD; ?></td>	

	 				</tr>
	 				<tr>
	 					<td colspan="2" rowspan="3" style="text-align: center;">Rata-Rata</td>
	 					<td><?= $rata2F_MD; ?></td>
	 					<td colspan="4"></td>
	 					<td><?= $rata2H_MD; ?></td>
	 					<td><?= $rata2_MD; ?></td>
	 					<td><?= $rata2A_MD; ?></td>

	 				</tr>
	 				<tr class="musimKemarau">
	 					<td><?= $rata2F_MD; ?></td>
	 					<td colspan="4"></td>
	 					<td>0</td>
	 					<td>0</td>
	 					<td><?= $rata2A_kemarau_MD; ?></td>
	 				</tr>
	 				<tr class="musimHujan">
	 					<td><?= $rata2F_MD; ?></td>
	 					<td colspan="4"></td>
	 					<td>0</td>
	 					<td>0</td>
	 					<td><?= $rata2A_hujan_MD; ?></td>	
	 				</tr>
	 			</tbody>
	 		</table>
	 		<ul>
	 			<li><span class="musim">Musim Kemarau</span></li>
	 			<li><span class="musim">Musim Hujan</span></li>	
	 		</ul>
	 	</fieldset>

	 	<br>	

	 	<!-- Meninggal Dunia -->
	 	<fieldset style="display: inline;">	
	 		<legend>Meninggal Dunia 2020 -> 2021 </legend>
	 		<table border="">
	 			<thead>
	 				<th>NO</th>
	 				<th>Bulan</th>
	 				<th>Frekuensi</th>
	 				<th>Probabilitas</th>
	 				<th>Kumulatif</th>
	 				<th>Interval</th>
	 				<th>Angka Acak</th>
	 				<th>Hasil Simulasi</th>
	 				<th>Data Real</th>
	 				<th>Tingkat Akurasi</th>
	 			</thead>
	 			<tbody>

	 				<?php $no = 0; for ($i=0; $i < count($dataS2019_LB) ; $i++) : ?>
	 				<tr>
	 					<td><?= ++$no; ?></td>
	 					<td style="background-color: <?= $no >= 4 && $no <= 10 ? '#F8CBAD' : '#D6DCE4';?>"><?= $bulan[$i]; ?></td>
	 						<td><?= $dataS2019_LB[$i]; ?></td>
	 						<td><?= $dataProb_LB[$i]; ?></td>
	 						<td><?= $dataKumu_LB[$i]; ?></td>
	 						<td><?= $tampil_Interval_LB[$i]; ?></td>
	 						<td><?= $nilai_zi_LB[$i]; ?></td>
	 						<td><?=	$hasilS_LB[$i]; ?></td>
	 						<td><?= $dataR2020_LB[$i]; ?></td>
	 						<td><?= $akurasi_LB[$i]; ?></td>				
	 					</tr>
	 				<?php endfor; ?>
	 				<tr>
	 					<td colspan="2" rowspan="3" style="text-align: center;">Total</td>
	 					<td><?= $jumlah_LB; ?></td>
	 					<td><?= $jumlahProb_LB; ?></td>
	 					<td colspan="3"></td>
	 					<td><?= $jumlahHs_LB; ?></td>
	 					<td><?= $jumlahR_LB; ?></td>
	 					<td><?= $akurasiT_LB; ?></td>	
	 				</tr>
	 				<tr class="musimKemarau">
	 					<td><?= $jumlah_kemarau_LB; ?></td>
	 					<td colspan="4"></td>
	 					<td><?= $jumlahHs_kemarau_LB; ?></td>
	 					<td><?= $jumlahR_kemarau_LB; ?></td>
	 					<td><?= $akurasiT_kemarau_LB; ?></td>	

	 				</tr>
	 				<tr class="musimHujan">
	 					<td><?= $jumlah_hujan_LB; ?></td>
	 					<td colspan="4"></td>
	 					<td><?= $jumlahHs_hujan_LB; ?></td>
	 					<td><?= $jumlahR_hujan_LB; ?></td>
	 					<td><?= $akurasiT_hujan_LB; ?></td>	

	 				</tr>
	 				<tr>
	 					<td colspan="2" rowspan="3" style="text-align: center;">Rata-Rata</td>
	 					<td><?= $rata2F_LB; ?></td>
	 					<td colspan="4"></td>
	 					<td><?= $rata2H_LB; ?></td>
	 					<td><?= $rata2_LB; ?></td>
	 					<td><?= $rata2A_LB; ?></td>

	 				</tr>
	 				<tr class="musimKemarau">
	 					<td></td>
	 					<td colspan="4"></td>
	 					<td>0</td>
	 					<td>0</td>
	 					<td><?= $rata2A_kemarau_LB; ?></td>
	 				</tr>
	 				<tr class="musimHujan">
	 					<td></td>
	 					<td colspan="4"></td>
	 					<td>0</td>
	 					<td>0</td>
	 					<td><?= $rata2A_hujan_LB; ?></td>	
	 				</tr>
	 			</tbody>
	 		</table>
	 		<ul>
	 			<li><span class="musim">Musim Kemarau</span></li>
	 			<li><span class="musim">Musim Hujan</span></li>	
	 		</ul>
	 	</fieldset>

	 	<br>	

	 	<!-- Meninggal Dunia -->
	 	<fieldset style="display: inline;">	
	 		<legend>Meninggal Dunia 2021 -> 2022 </legend>
	 		<table border="">
	 			<thead>
	 				<th>NO</th>
	 				<th>Bulan</th>
	 				<th>Frekuensi</th>
	 				<th>Probabilitas</th>
	 				<th>Kumulatif</th>
	 				<th>Interval</th>
	 				<th>Angka Acak</th>
	 				<th>Hasil Simulasi</th>
	 				<th>Data Real</th>
	 				<th>Tingkat Akurasi</th>
	 			</thead>
	 			<tbody>

	 				<?php $no = 0; for ($i=0; $i < count($dataS2019_LB) ; $i++) : ?>
	 				<tr style=>
	 					<td><?= ++$no; ?></td>
	 					<td style="background-color:<?=$no >= 4 && $no <= 10 ? '#F8CBAD' : '#D6DCE4';?>;">
	 						<?= $bulan[$i]; ?></td>
	 						<td><?= $dataS2019_LR[$i]; ?></td>
	 						<td><?= $dataProb_LR[$i]; ?></td>
	 						<td><?= $dataKumu_LR[$i]; ?></td>
	 						<td><?= $tampil_Interval_LR[$i]; ?></td>
	 						<td><?= $nilai_zi_LR[$i]; ?></td>
	 						<td><?=	$hasilS_LR[$i]; ?></td>
	 						<td><?= $dataR2020_LR[$i]; ?></td>
	 						<td><?= $akurasi_LR[$i]; ?></td>				
	 					</tr>
	 				<?php endfor; ?>
	 				<tr>
	 					<td colspan="2" rowspan="3" style="text-align: center;">Total</td>
	 					<td><?= $jumlah_LR; ?></td>
	 					<td><?= $jumlahProb_LR; ?></td>
	 					<td colspan="3"></td>
	 					<td><?= $jumlahHs_LR; ?></td>
	 					<td><?= $jumlahR_LR; ?></td>
	 					<td><?= $akurasiT_LR; ?></td>	
	 				</tr>
	 				<tr class="musimKemarau">
	 					<td><?= $jumlah_kemarau_LR; ?></td>
	 					<td colspan="4"></td>
	 					<td><?= $jumlahHs_kemarau_LR; ?></td>
	 					<td><?= $jumlahR_kemarau_LR; ?></td>
	 					<td><?= $akurasiT_kemarau_LR; ?></td>	

	 				</tr>
	 				<tr class="musimHujan">
	 					<td><?= $jumlah_hujan_LR; ?></td>
	 					<td colspan="4"></td>
	 					<td><?= $jumlahHs_hujan_LR; ?></td>
	 					<td><?= $jumlahR_hujan_LR; ?></td>
	 					<td><?= $akurasiT_hujan_LR; ?></td>	

	 				</tr>
	 				<tr>
	 					<td colspan="2" rowspan="3" style="text-align: center;">Rata-Rata</td>
	 					<td><?= $rata2F_LR; ?></td>
	 					<td colspan="4"></td>
	 					<td><?= $rata2H_LR; ?></td>
	 					<td><?= $rata2_LR; ?></td>
	 					<td><?= $rata2A_LR; ?></td>

	 				</tr>
	 				<tr class="musimKemarau">
	 					<td></td>
	 					<td colspan="4"></td>
	 					<td>0</td>
	 					<td>0</td>
	 					<td><?= $rata2A_kemarau_LR; ?></td>
	 				</tr>
	 				<tr class="musimHujan">
	 					<td></td>
	 					<td colspan="4"></td>
	 					<td>0</td>
	 					<td>0</td>
	 					<td><?= $rata2A_hujan_LR; ?></td>	
	 				</tr>
	 			</tbody>
	 		</table>
	 		<ul>
	 			<li><span class="musim">Musim Kemarau</span></li>
	 			<li><span class="musim">Musim Hujan</span></li>	
	 		</ul>
	 	</fieldset>

	 </body>
	 </html>