<?php 	

$conn = mysqli_connect("localhost", "root", "", "angka_acak");

$bulan = ["Januari","Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];

$musimKemarau = ["Mei", "Juni", "Juli", "Agustus", "September", "Oktober"];
$musimHujan = ["November", "Desember", "Januari","Februari", "Maret", "April"];


//data kecelakaan
$data_kecelakaan = mysqli_query($conn, "SELECT * FROM data_kecelakaan");
$rows = [];
while($rowss = mysqli_fetch_assoc($data_kecelakaan)){
    $rows[] = $rowss;  
}

function importDataAcak($file_data) {

	global $conn, $bulan, $rows;

	require 'vendor/autoload.php';


	$reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReaderForFile($file_data);
	$spreadsheet = $reader->load($file_data);
  // $sheetData = $spreadsheet->getActiveSheet()->toArray();

  // Mendapatkan daftar nama semua lembar kerja dalam file
	$sheetNames = $spreadsheet->getSheetNames();

// Loop melalui setiap lembar kerja
	foreach ($sheetNames as $sheetName) {
    // Memilih lembar kerja yang sesuai
		$spreadsheet->setActiveSheetIndexByName($sheetName);

    // Mendapatkan data dari lembar kerja yang aktif
		$sheetData = $spreadsheet->getActiveSheet()->toArray();


    // Misalnya, tampilkan data dari setiap lembar kerja
		if($sheetData[0][3] == "MD"){
			$kategori = 1;   
			$tahun = $sheetName;

         //cek apakah data yang dimasukkan sama
			foreach ($rows as $value) {
				if($value['id_kategori'] == $kategori && $value['tahun'] == $tahun){
					$id = $value['id'];
					mysqli_query($conn, "DELETE FROM data_kecelakaan WHERE id = '$id'");
				}
			}

			$query = "INSERT INTO data_kecelakaan VALUES ('', '$kategori','$tahun')";
			mysqli_query($conn, $query);

			$id = mysqli_insert_id($conn);

			for ($i=1; $i <= count($bulan) ; $i++) {


				$query = "INSERT INTO data_detail_kecelakaan VALUES ('','$id', '{$sheetData[$i][3]}')";
				mysqli_query($conn, $query);
			}
		}

		if($sheetData[0][4] == "LB"){
			$kategori = 2;   
			$tahun = $sheetName;

     //cek apakah data yang dimasukkan sama
			foreach ($rows as $value) {
				if($value['id_kategori'] == $kategori && $value['tahun'] == $tahun){
					$id = $value['id'];
					mysqli_query($conn, "DELETE FROM data_kecelakaan WHERE id = '$id'");
				}
			}

			$query = "INSERT INTO data_kecelakaan VALUES ('', '$kategori','$tahun')";
			mysqli_query($conn, $query);

			$id = mysqli_insert_id($conn);

			for ($i=1; $i <= count($bulan) ; $i++) {


				$query = "INSERT INTO data_detail_kecelakaan VALUES ('','$id', '{$sheetData[$i][4]}')";
				mysqli_query($conn, $query);
			}
		}

		if($sheetData[0][5] == "LR"){
			$kategori = 3;   
			$tahun = $sheetName;    

 //cek apakah data yang dimasukkan sama
			foreach ($rows as $value) {
				if($value['id_kategori'] == $kategori && $value['tahun'] == $tahun){
					$id = $value['id'];
					mysqli_query($conn, "DELETE FROM data_kecelakaan WHERE id = '$id'");
				}
			}

			$query = "INSERT INTO data_kecelakaan VALUES ('', '$kategori','$tahun')";
			mysqli_query($conn, $query);

			$id = mysqli_insert_id($conn);

			for ($i=1; $i <= count($bulan) ; $i++) {


				$query = "INSERT INTO data_detail_kecelakaan VALUES ('','$id', '{$sheetData[$i][5]}')";
				mysqli_query($conn, $query);
			}

		}
	}



	return mysqli_affected_rows($conn);
}



function dataKecelakaanAcak(){

	global $conn;
	$data = mysqli_query($conn, "SELECT kategori.nama, data_kecelakaan.* FROM data_kecelakaan JOIN kategori ON(data_kecelakaan.id_kategori = kategori.id) HAVING(tahun >= 2017)  ORDER BY id_kategori, tahun;");
	$dataKecelakaan = [];
	while($values = mysqli_fetch_assoc($data)){
		$dataKecelakaan [] = $values;
	}

	return $dataKecelakaan;

}


function dataKecelakaanLengkap(){
	global $conn;
	$data = mysqli_query($conn, "SELECT * FROM data_detail_kecelakaan;");
	$dataKecelakaan = [];
	while($values = mysqli_fetch_assoc($data)){
		$dataKecelakaan [] = $values;
	}

	return $dataKecelakaan;
}


























?>