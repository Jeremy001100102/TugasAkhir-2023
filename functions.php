<?php 
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "simulasi_monte_carlo2");

$bulan = ["Januari","Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];

$musimKemarau = ["Mei", "Juni", "Juli", "Agustus", "September", "Oktober"];
$musimHujan = ["November", "Desember", "Januari","Februari", "Maret", "April"];

//kategori kecelakaan
$kategori = mysqli_query($conn, "SELECT * FROM data_kategori");

//data tahun prediksi
$ambil_tahun = mysqli_query($conn, "SELECT DISTINCT tahun FROM data_kecelakaan");
$data_tahun_prediksi = [];
while ($data = mysqli_fetch_assoc($ambil_tahun)) {
    $data_tahun_prediksi[] = $data;    
}




//data kecelakaan
$data_kecelakaan = mysqli_query($conn, "SELECT * FROM data_kecelakaan");
$rows = [];
while($rowss = mysqli_fetch_assoc($data_kecelakaan)){
    $rows[] = $rowss;  
}

//  foreach ($rows as $value) {
//      if($value['id_kategori'] == 1 && $value['tahun'] == 2007){
//         $id = $value['id'];
//         echo "id : {$value['id']}";
//         echo "katgeori : {$value['id_kategori']}";
//         echo "tahun : {$value['tahun']}";
//         mysqli_query($conn, "DELETE FROM data_kecelakaan WHERE id = '$id'");
//     }
// }

//jumlah semua data kategori
$data_kategori = mysqli_query($conn, "SELECT count(DISTINCT tahun) as 'jumlah' FROM data_kecelakaan");
$jumlah_semua_kategori = mysqli_fetch_assoc($data_kategori);


//jumlah data tabel data_kecelaakaan
$jumlah_data = mysqli_query($conn, "
    SELECT kategori.nama, COUNT(data.id_kategori) AS jumlah FROM data_kategori as kategori LEFT JOIN data_kecelakaan AS data ON (data.id_kategori = kategori.id) GROUP BY kategori.nama;");
$countData = [];
while ($jData = mysqli_fetch_assoc($jumlah_data)) {
    $countData [] = $jData;
}

//jumlah data tabel data_hasil_simulasi
$jumlah_data = mysqli_query($conn, "
    SELECT kategori.nama, COUNT(data.id_kategori) AS jumlah FROM data_kategori as kategori LEFT JOIN data_kecelakaan AS data ON (data.id_kategori = kategori.id) GROUP BY kategori.nama;");
$countData = [];
while ($jData = mysqli_fetch_assoc($jumlah_data)) {
    $countData [] = $jData;
}


    
//jumlah data tabel hasil_simulasi
$jumlah_dataHS = mysqli_query($conn, " SELECT kategori.nama, COUNT(data.id_kategori) AS jumlah FROM data_kategori AS kategori LEFT JOIN data_hasil_simulasi AS data ON (data.id_kategori = kategori.id) GROUP BY kategori.nama");
$count_dataHS = [];
while ($jData = mysqli_fetch_assoc($jumlah_dataHS)) {
    $count_dataHS [] = $jData;
}


//Data Hasil Meninggal
function data_hasilMeninggal(){
    global $conn;
    $dataM = mysqli_query($conn, "
         SELECT * FROM data_hasil_simulasi WHERE id_kategori = 1 GROUP BY tahun_hasil_simulasi");

    $dataMeninggal = [];
    while($data = mysqli_fetch_assoc($dataM)){
        $dataMeninggal [] = $data;
    }

    return $dataMeninggal;
}

//Data Hasil Luka Berat
function data_hasillukaBerat(){
    global $conn;
    $dataLB = mysqli_query($conn, "
         SELECT * FROM data_hasil_simulasi WHERE id_kategori = 2 GROUP BY tahun_hasil_simulasi");

    $datalukaBerat = [];
    while($data = mysqli_fetch_assoc($dataLB)){
        $datalukaBerat [] = $data;
    }

    return $datalukaBerat;
}

//Data Hasil Luka Ringan
function data_hasillukaRingan(){
    global $conn;
    $dataLR = mysqli_query($conn, "
         SELECT * FROM data_hasil_simulasi WHERE id_kategori = 3 GROUP BY tahun_hasil_simulasi");

    $datalukaRingan = [];
    while($data = mysqli_fetch_assoc($dataLR)){
        $datalukaRingan [] = $data;
    }

    return $datalukaRingan;

}


function tahunPrediksi(){
    global $conn, $data_tahun_prediksi;

    $ambil_data = mysqli_query($conn, "SELECT data_kategori.nama, data_kecelakaan.* FROM data_kategori INNER JOIN data_kecelakaan ON data_kategori.id = data_kecelakaan.id_kategori ORDER BY data_kecelakaan.tahun ASC, data_kecelakaan.id_kategori ASC");    

    $data_tahun = [];
    while($data = mysqli_fetch_assoc($ambil_data)){


        for ($i=0; $i < count($data_tahun_prediksi) ; $i++) { 
            if($data['tahun'] == $data_tahun_prediksi[$i]['tahun']){
                $tahun = $data_tahun_prediksi[$i]['tahun'];
                $data_tahun[$i][] = $data;
                
            }
        }
    }

    return $data_tahun;


}



//data Meninnggal
function dataMeninggal(){
    global $conn;
    $dataM = mysqli_query($conn, "
       SELECT * FROM data_kecelakaan WHERE id_kategori = 1 GROUP BY tahun");

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
       SELECT * FROM data_kecelakaan WHERE id_kategori = 2 GROUP BY tahun");

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
       SELECT * FROM data_kecelakaan WHERE id_kategori = 3 GROUP BY tahun");

    $datalukaRingan = [];
    while($data = mysqli_fetch_assoc($dataLR)){
        $datalukaRingan [] = $data;
    }

    return $datalukaRingan;

}


function tambah($data) {
  global $conn, $rows;
  $tahun = $data['tahun'];
  $kategori = (int) $data['kondisi'];
  $dataM = $data['dataM'];


//cek apakah data yang dimasukkan sama
  foreach ($rows as $value) {
   if($value['id_kategori'] == $kategori && $value['tahun'] == $tahun){
    $id = $value['id'];
    mysqli_query($conn, "DELETE FROM data_kecelakaan WHERE id = '$id'");
}
}

$query = "INSERT INTO data_kecelakaan VALUES ('', '$kategori', '$tahun')";
mysqli_query($conn, $query);

$id = mysqli_insert_id($conn);

for ($i=0; $i< count($dataM); $i++) {
    $query = "INSERT INTO data_detail_kecelakaan VALUES ('','$id', '$dataM[$i]')";
    mysqli_query($conn, $query);
}

return mysqli_affected_rows($conn);
}



function importData($file_data) {

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



function update($data, $id){
    global $conn, $bulan;
    $tahun = $data['tahun'];   
    $dataM = $data['dataM'];


    $query = "UPDATE data_kecelakaan SET tahun = $tahun WHERE id = $id";
    mysqli_query($conn, $query);

    //ambil id unik data_detail
    $ambil_id = mysqli_query($conn, " SELECT id FROM data_detail_kecelakaan WHERE id_data_kecelakaan = $id;");

    $id_unik = [];
    while($datab = mysqli_fetch_assoc($ambil_id)){
        $id_unik[] = $datab['id'];
    }


    for ($i=0; $i < count($bulan); $i++) { 
        $query = "UPDATE data_detail_kecelakaan SET data_bulan = $dataM[$i] WHERE id_data_kecelakaan = $id AND id = $id_unik[$i]";

        mysqli_query($conn, $query);
        
    }
    


    return mysqli_affected_rows($conn);
}

//hapus data input 
function hapus($id){
    global $conn;

    mysqli_query($conn, "DELETE FROM data_kecelakaan WHERE id = $id");

    return mysqli_affected_rows($conn);
}

//hapus semua input data
function hapusAll(){
    global $conn;
    mysqli_query($conn, "DELETE FROM data_kecelakaan");   
    return mysqli_affected_rows($conn);   
}

//hapus tabel hasil simulasi
function hapusHS($id){
    global $conn;

    mysqli_query($conn, "DELETE FROM data_hasil_simulasi WHERE id = $id");

    return mysqli_affected_rows($conn);
}

//hapus semua input data
function hapus_hasilAll(){
    global $conn;
    mysqli_query($conn, "TRUNCATE data_hasil_simulasi");    
    return mysqli_affected_rows($conn);   
}

function simpanHasil($data){
    global $conn;

    //Meninggal Dunia
    $id_kategori_MD = $data['id_kategori_MD'];
    $tahun_hasilS_MD = $data['tahun_hasilS_MD'];
    $angka_acak_MD = implode("|", $data['angka_acak_MD']);
    $hasil_simulasi_MD = implode("|" , $data['hasil_simulasi_MD']);
    $data_real_MD = implode("|", $data['data_real_MD']);
    $tingkat_akurasi_MD = implode("|", $data['akurasi_MD']);
    $totalArrMD = [];
    $totalArrMD [] = $data['total_hasilS_MD'];
    $totalArrMD [] = $data['total_dataR_MD'];
    $totalArrMD [] = $data['akurasi_tahun_MD'];
    $totalArrMD [] = $data['total_hasilS_Kemarau_MD'];
    $totalArrMD [] = $data['total_dataR_Kemarau_MD'];
    $totalArrMD [] = $data['akurasi_Kemarau_MD'];
    $totalArrMD [] = $data['total_hasilS_Hujan_MD'];
    $totalArrMD [] = $data['total_dataR_Hujan_MD'];
    $totalArrMD [] = $data['akurasi_Hujan_MD'];
    $totalMD = implode("|", $totalArrMD);
    $rata2_ArrMD = [];
    $rata2_ArrMD [] = $data['rata2_hasilS_MD'];
    $rata2_ArrMD [] = $data['rata2_data_real_MD'];
    $rata2_ArrMD [] = $data['rata2_akurasi_MD'];
    $rata2_ArrMD [] = $data['rata2_hasilS_Kemarau_MD'];
    $rata2_ArrMD [] = $data['rata2_data_real_Kemarau_MD'];
    $rata2_ArrMD [] = $data['rata2_akurasi_Kemarau_MD'];
    $rata2_ArrMD [] = $data['rata2_hasilS_Hujan_MD'];
    $rata2_ArrMD [] = $data['rata2_data_real_Hujan_MD'];
    $rata2_ArrMD [] = $data['rata2_akurasi_Hujan_MD'];
    $rata2MD = implode("|", $rata2_ArrMD);

     //Luka Berat
    $id_kategori_LB = $data['id_kategori_LB'];
    $tahun_hasilS_LB = $data['tahun_hasilS_LB'];
    $angka_acak_LB = implode("|", $data['angka_acak_LB']);
    $hasil_simulasi_LB = implode("|" , $data['hasil_simulasi_LB']);
    $data_real_LB = implode("|", $data['data_real_LB']);
    $tingkat_akurasi_LB = implode("|", $data['akurasi_LB']);
    $totalArrLB = [];
    $totalArrLB [] = $data['total_hasilS_LB'];
    $totalArrLB [] = $data['total_dataR_LB'];
    $totalArrLB [] = $data['akurasi_tahun_LB'];
    $totalArrLB [] = $data['total_hasilS_Kemarau_LB'];
    $totalArrLB [] = $data['total_dataR_Kemarau_LB'];
    $totalArrLB [] = $data['akurasi_Kemarau_LB'];
    $totalArrLB [] = $data['total_hasilS_Hujan_LB'];
    $totalArrLB [] = $data['total_dataR_Hujan_LB'];
    $totalArrLB [] = $data['akurasi_Hujan_LB'];
    $totalLB = implode("|", $totalArrLB);
    $rata2_ArrLB = [];
    $rata2_ArrLB [] = $data['rata2_hasilS_LB'];
    $rata2_ArrLB [] = $data['rata2_data_real_LB'];
    $rata2_ArrLB [] = $data['rata2_akurasi_LB'];
    $rata2_ArrLB [] = $data['rata2_hasilS_Kemarau_LB'];
    $rata2_ArrLB [] = $data['rata2_data_real_Kemarau_LB'];
    $rata2_ArrLB [] = $data['rata2_akurasi_Kemarau_LB'];
    $rata2_ArrLB [] = $data['rata2_hasilS_Hujan_LB'];
    $rata2_ArrLB [] = $data['rata2_data_real_Hujan_LB'];
    $rata2_ArrLB [] = $data['rata2_akurasi_Hujan_LB'];
    $rata2LB = implode("|", $rata2_ArrLB);

     //Luka Ringan
    $id_kategori_LR = $data['id_kategori_LR'];
    $tahun_hasilS_LR = $data['tahun_hasilS_LR'];
    $angka_acak_LR = implode("|", $data['angka_acak_LR']);
    $hasil_simulasi_LR = implode("|" , $data['hasil_simulasi_LR']);
    $data_real_LR = implode("|", $data['data_real_LR']);
    $tingkat_akurasi_LR = implode("|", $data['akurasi_LR']);
    $totalArrLR = [];
    $totalArrLR [] = $data['total_hasilS_LR'];
    $totalArrLR [] = $data['total_dataR_LR'];
    $totalArrLR [] = $data['akurasi_tahun_LR'];
    $totalArrLR [] = $data['total_hasilS_Kemarau_LR'];
    $totalArrLR [] = $data['total_dataR_Kemarau_LR'];
    $totalArrLR [] = $data['akurasi_Kemarau_LR'];
    $totalArrLR [] = $data['total_hasilS_Hujan_LR'];
    $totalArrLR [] = $data['total_dataR_Hujan_LR'];
    $totalArrLR [] = $data['akurasi_Hujan_LR'];
    $totalLR = implode("|", $totalArrLR);
    $rata2_ArrLR = [];
    $rata2_ArrLR [] = $data['rata2_hasilS_LR'];
    $rata2_ArrLR [] = $data['rata2_data_real_LR'];
    $rata2_ArrLR [] = $data['rata2_akurasi_LR'];
    $rata2_ArrLR [] = $data['rata2_hasilS_Kemarau_LR'];
    $rata2_ArrLR [] = $data['rata2_data_real_Kemarau_LR'];
    $rata2_ArrLR [] = $data['rata2_akurasi_Kemarau_LR'];
    $rata2_ArrLR [] = $data['rata2_hasilS_Hujan_LR'];
    $rata2_ArrLR [] = $data['rata2_data_real_Hujan_LR'];
    $rata2_ArrLR [] = $data['rata2_akurasi_Hujan_LR'];
    $rata2LR = implode("|", $rata2_ArrLR);
    

   

    $query = "INSERT INTO data_hasil_simulasi VALUES ('', '$id_kategori_MD', '$tahun_hasilS_MD', '$angka_acak_MD', '$hasil_simulasi_MD', '$data_real_MD', '$tingkat_akurasi_MD', '$totalMD', '$rata2MD'),
       ('', '$id_kategori_LB', '$tahun_hasilS_LB', '$angka_acak_LB', '$hasil_simulasi_LB', '$data_real_LB', '$tingkat_akurasi_LB', '$totalLB', '$rata2LB'),
       ('', '$id_kategori_LR', '$tahun_hasilS_LR', '$angka_acak_LR', '$hasil_simulasi_LR', '$data_real_LR', '$tingkat_akurasi_LR', '$totalLR', '$rata2LR')";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function register($data){
    global $conn;

    $username = strtolower(stripcslashes($data['username']));
    $password = mysqli_real_escape_string($conn, $data['password']);
    $password2 = mysqli_real_escape_string($conn, $data['password2']);

    //cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM data_users WHERE username = '$username'");
    if(mysqli_fetch_assoc($result)){
        $_SESSION['alert'] = "off";
        $_SESSION['pesan'] = "Username yang anda masukkan sudah terdaftar!";
        // echo "
        //     <script>
        //         alert('username yang anda masukkan sudah terdaftar');
        //     </script>
        // ";
        return false;
    }   


    //cek konfirmasi password
    if( $password !== $password2){
        $_SESSION['alert'] = "off";
        $_SESSION['pesan'] = "Konfirmasi password tidak sesuai!";
        // echo "
        //     <script>
        //         alert('konfirmasi password tidak sesuai!');
        //     </script>
        // ";
        return false;
    }

    //ekripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    //tambahkan userbaru ke database
    mysqli_query($conn, "INSERT INTO data_users VALUES('', '$username', '$password')");

    return mysqli_affected_rows($conn);

}

function dataAkun(){
    global $conn;

    $akun = mysqli_query($conn, "SELECT * FROM data_users");
    $dataAkun = [];
    while($data = mysqli_fetch_assoc($akun)){
        $dataAkun [] = $data;
    }

    return $dataAkun;
}

//hapus akun user
function hapusAkun($id){
    global $conn;

    mysqli_query($conn, "DELETE FROM data_users WHERE id = $id");
    
    return mysqli_affected_rows($conn);
}






?>