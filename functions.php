<?php 
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "simulasi_monte_carlo");

//kategori kecelakaan
$kategori = mysqli_query($conn, "SELECT * FROM kategori_korban_kecelakaan");

//jumlah data tabel data_bulan_kecelaakaan;
$jumlah_data = mysqli_query($conn, "
    SELECT kategori.nama, COUNT(data.id_kategori) AS jumlah FROM kategori_korban_kecelakaan as kategori LEFT JOIN data_bulan_kecelakaan AS data ON (data.id_kategori = kategori.id) GROUP BY kategori.nama");
$countData = [];
while ($jData = mysqli_fetch_assoc($jumlah_data)) {
    $countData [] = $jData;
}



//data Meninnggal
function dataMeninggal(){
    global $conn;
    $dataM = mysqli_query($conn, "
         SELECT * FROM data_bulan_kecelakaan WHERE id_kategori = 1 GROUP BY tahun_data_mentah");

    $dataMeninggal = [];
    while($data = mysqli_fetch_assoc($dataM)){
        $dataMeninggal [] = $data;
    }

    return $dataMeninggal;

}

//data Luka Berat
function datalukaBerat(){
    global $conn;
    $dataLB = mysqli_query($conn, "
         SELECT * FROM data_bulan_kecelakaan WHERE id_kategori = 2 GROUP BY tahun_data_mentah");

    $datalukaBerat = [];
    while($data = mysqli_fetch_assoc($dataLB)){
        $datalukaBerat [] = $data;
    }

    return $datalukaBerat;

}

//data Luka Ringan
function datalukaRingan(){
    global $conn;
    $dataLR = mysqli_query($conn, "
         SELECT * FROM data_bulan_kecelakaan WHERE id_kategori = 3 GROUP BY tahun_data_mentah");

    $datalukaRingan = [];
    while($data = mysqli_fetch_assoc($dataLR)){
        $datalukaRingan [] = $data;
    }

    return $datalukaRingan;

}


function tambah($data){
    global $conn;
    $tahun_data_mentah = $data['tahunMentah'];
    $tahun_data_real = $data['tahunReal'];
    $kategori = (int) $data['kondisi'];
    $data_mentah = implode("|",$data['dataM']);
    $data_real = implode("|",$data['dataR']);

    $query = "INSERT INTO data_bulan_kecelakaan VALUES ('', '$kategori', '$data_mentah', '$data_real', '$tahun_data_mentah', '$tahun_data_real')";
    
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function update($data, $id){
    global $conn;
    $tahun_data_mentah = $data['tahunMentah'];
    $tahun_data_real = $data['tahunReal'];
    $kategori = (int) $data['kondisiUpdate'];
    $data_mentah = implode("|",$data['dataM']);
    $data_real = implode("|",$data['dataR']);

    $query = "UPDATE data_bulan_kecelakaan SET data_bulan_mentah = '$data_mentah', data_bulan_real = '$data_real', tahun_data_mentah = '$tahun_data_mentah', tahun_data_real = '$tahun_data_real' WHERE id = '$id' ";
    
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
    
}










?>