<?php 
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "simulasi_monte_carlo");

//kategori kecelakaan
$kategori = mysqli_query($conn, "SELECT * FROM kategori_korban_kecelakaan");

//jumlah data tabel data_bulan_kecelaakaan
$jumlah_data = mysqli_query($conn, "
    SELECT kategori.nama, COUNT(data.id_kategori) AS jumlah FROM kategori_korban_kecelakaan as kategori LEFT JOIN data_bulan_kecelakaan AS data ON (data.id_kategori = kategori.id) GROUP BY kategori.nama");
$countData = [];
while ($jData = mysqli_fetch_assoc($jumlah_data)) {
    $countData [] = $jData;
}

//jumlah data tabel hasil_simulasi
$jumlah_dataHS = mysqli_query($conn, " SELECT kategori.nama, COUNT(data.id_kategori) AS jumlah FROM kategori_korban_kecelakaan AS kategori LEFT JOIN hasil_simulasi AS data ON (data.id_kategori = kategori.id) GROUP BY kategori.nama");
$count_dataHS = [];
while ($jData = mysqli_fetch_assoc($jumlah_dataHS)) {
    $count_dataHS [] = $jData;
}


//Data Hasil Meninggal
function data_hasilMeninggal(){
    global $conn;
    $dataM = mysqli_query($conn, "
         SELECT * FROM hasil_simulasi WHERE id_kategori = 1 GROUP BY tahun_hasil_simulasi");

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
         SELECT * FROM hasil_simulasi WHERE id_kategori = 2 GROUP BY tahun_hasil_simulasi");

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
         SELECT * FROM hasil_simulasi WHERE id_kategori = 3 GROUP BY tahun_hasil_simulasi");

    $datalukaRingan = [];
    while($data = mysqli_fetch_assoc($dataLR)){
        $datalukaRingan [] = $data;
    }

    return $datalukaRingan;

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

//hapus data input 
function hapus($id){
    global $conn;

    mysqli_query($conn, "DELETE FROM data_bulan_kecelakaan WHERE id = $id");
    
    return mysqli_affected_rows($conn);
}

//hapus semua input data
function hapusAll(){
    global $conn;
    mysqli_query($conn, "TRUNCATE data_bulan_kecelakaan");    
    return mysqli_affected_rows($conn);   
}

//hapus tabel hasil simulasi
function hapusHS($id){
    global $conn;

    mysqli_query($conn, "DELETE FROM hasil_simulasi WHERE id = $id");
    
    return mysqli_affected_rows($conn);
}

//hapus semua input data
function hapus_hasilAll(){
    global $conn;
    mysqli_query($conn, "TRUNCATE hasil_simulasi");    
    return mysqli_affected_rows($conn);   
}

function simpanHasil($data){
    global $conn;

    //Meninggal Dunia
    $id_kategoriMD = $data['id_kategoriMD'];
    $frekuensiMD = implode("|", $data['frekuensiMD']);
    $probabilitasMD = implode("|", $data['probabilitasMD']);
    $kumulatifMD = implode("|", $data['kumuMD']);
    $intervalMD = implode("|", $data['intervalMD']);
    $angka_acakMD = implode("|", $data['angka_acakMD']);
    $hasil_simulasiMD = implode("|" , $data['hasil_simulasiMD']);
    $tahun_hasilMD = $data['tahun_data_realMD'];
    $data_realMD = implode("|", $data['data_realMD']);
    $tahun_data_realMD = $data['tahun_data_realMD'];
    $tingkat_akurasiMD = implode("|", $data['akurasiMD']);
    $totalArrMD = [];
    $totalArrMD [] = $data['totalFrekMD'];
    $totalArrMD [] = $data['totalProbMD'];
    $totalArrMD [] = $data['totalhasilMD'];
    $totalArrMD [] = $data['total_dataRealMD'];    
    $totalMD = implode("|", $totalArrMD);
    $rata2_ArrMD = [];
    $rata2_ArrMD [] = $data['rata2_frekMD'];
    $rata2_ArrMD [] = $data['rata2_hasilMD'];
    $rata2_ArrMD [] = $data['rata2_datarealMD'];
    $rata2_ArrMD [] = $data['rata2_presentaseMD'];
    $rata2MD = implode("|", $rata2_ArrMD);
    $tahun_data_mentahMD =  $data['tahun_datamentahMD'];

     //Luka Berat
    $id_kategoriLB = $data['id_kategoriLB'];
    $frekuensiLB = implode("|", $data['frekuensiLB']);
    $probabilitasLB = implode("|", $data['probabilitasLB']);
    $kumulatifLB = implode("|", $data['kumuLB']);
    $intervalLB = implode("|", $data['intervalLB']);
    $angka_acakLB = implode("|", $data['angka_acakLB']);
    $hasil_simulasiLB = implode("|" , $data['hasil_simulasiLB']);
    $tahun_hasilLB = $data['tahun_data_realLB'];
    $data_realLB = implode("|", $data['data_realLB']);
    $tahun_data_realLB = $data['tahun_data_realLB'];
    $tingkat_akurasiLB = implode("|", $data['akurasiLB']);
    $totalArrLB = [];
    $totalArrLB [] = $data['totalFrekLB'];
    $totalArrLB [] = $data['totalProbLB'];
    $totalArrLB [] = $data['totalhasilLB'];
    $totalArrLB [] = $data['total_dataRealLB'];    
    $totalLB = implode("|", $totalArrLB);
    $rata2_ArrLB = [];
    $rata2_ArrLB [] = $data['rata2_frekLB'];
    $rata2_ArrLB [] = $data['rata2_hasilLB'];
    $rata2_ArrLB [] = $data['rata2_datarealLB'];
    $rata2_ArrLB [] = $data['rata2_presentaseLB'];
    $rata2LB = implode("|", $rata2_ArrLB);
    $tahun_data_mentahLB =  $data['tahun_datamentahLB'];

    //Luka Ringan
    $id_kategoriLR = $data['id_kategoriLR'];
    $frekuensiLR = implode("|", $data['frekuensiLR']);
    $probabilitasLR = implode("|", $data['probabilitasLR']);
    $kumulatifLR = implode("|", $data['kumuLR']);
    $intervalLR = implode("|", $data['intervalLR']);
    $angka_acakLR = implode("|", $data['angka_acakLR']);
    $hasil_simulasiLR = implode("|" , $data['hasil_simulasiLR']);
    $tahun_hasilLR = $data['tahun_data_realLR'];
    $data_realLR = implode("|", $data['data_realLR']);
    $tahun_data_realLR = $data['tahun_data_realLR'];
    $tingkat_akurasiLR = implode("|", $data['akurasiLR']);
    $totalArrLR = [];
    $totalArrLR [] = $data['totalFrekLR'];
    $totalArrLR [] = $data['totalProbLR'];
    $totalArrLR [] = $data['totalhasilLR'];
    $totalArrLR [] = $data['total_dataRealLR'];    
    $totalLR = implode("|", $totalArrLR);
    $rata2_ArrLR = [];
    $rata2_ArrLR [] = $data['rata2_frekLR'];
    $rata2_ArrLR [] = $data['rata2_hasilLR'];
    $rata2_ArrLR [] = $data['rata2_datarealLR'];
    $rata2_ArrLR [] = $data['rata2_presentaseLR'];
    $rata2LR = implode("|", $rata2_ArrLR);
    $tahun_data_mentahLR =  $data['tahun_datamentahLR'];



    $query = "INSERT INTO hasil_simulasi VALUES ('', '$id_kategoriMD', '$frekuensiMD', '$probabilitasMD', '$kumulatifMD', '$intervalMD', '$angka_acakMD', '$hasil_simulasiMD', '$tahun_hasilMD', '$data_realMD', '$tahun_data_realMD', '$tingkat_akurasiMD', '$totalMD', '$rata2MD', '$tahun_data_mentahMD'),
       ('', '$id_kategoriLB', '$frekuensiLB', '$probabilitasLB', '$kumulatifLB', '$intervalLB', '$angka_acakLB', '$hasil_simulasiLB', '$tahun_hasilLB', '$data_realLB', '$tahun_data_realLB', '$tingkat_akurasiLB', '$totalLB', '$rata2LB', '$tahun_data_mentahLB'),
       ('', '$id_kategoriLR', '$frekuensiLR', '$probabilitasLR', '$kumulatifLR', '$intervalLR', '$angka_acakLR', '$hasil_simulasiLR', '$tahun_hasilLR', '$data_realLR', '$tahun_data_realLR', '$tingkat_akurasiLR', '$totalLR', '$rata2LR', '$tahun_data_mentahLR')";
    
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function register($data){
    global $conn;

    $username = strtolower(stripcslashes($data['username']));
    $password = mysqli_real_escape_string($conn, $data['password']);
    $password2 = mysqli_real_escape_string($conn, $data['password2']);

    //cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
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
    mysqli_query($conn, "INSERT INTO user VALUES('', '$username', '$password')");

    return mysqli_affected_rows($conn);

}

function dataAkun(){
    global $conn;

    $akun = mysqli_query($conn, "SELECT * FROM user");
    $dataAkun = [];
    while($data = mysqli_fetch_assoc($akun)){
        $dataAkun [] = $data;
    }

    return $dataAkun;
}

//hapus akun user
function hapusAkun($id){
    global $conn;

    mysqli_query($conn, "DELETE FROM user WHERE id = $id");
    
    return mysqli_affected_rows($conn);
}






?>