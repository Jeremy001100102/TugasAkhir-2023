<?php

require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

// use Spatie\Browsershot\Browsershot;

session_start();

$bulan = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
$musim_kemarau = ["April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober"];
$musim_hujan = ["Januari", "Februari", "Maret", "November", "Desember"];


ob_start();

?>


<!-- Meninggal Dunia -->
<?php if($_GET['id_convert'] == "MD") : ?>

  <!DOCTYPE html>
   <html lang="en">
   <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF Hasil Simulasi</title>

    <style>
        .musimKemarau {
            border-left: 2px solid red !important;
        }

        .musimHujan {
            border-left: 2px solid blue !important;
        }


        table, th, td{
            margin-left: auto;
            margin-right: auto;
            border:1px solid black;
            border-collapse: collapse;
            text-align: center;
        }

        table{
            width: 100%;
        }

        .text-start{
            text-align: left;
        }

        caption{
            margin-bottom: 10px;
        }

        span{
            color: black;
        }

        .musim{
            margin-left: -20px;
        }

        .judul{
            font-size: 18;
            margin-bottom: 30px;
        }

        .no{
            width: 5%;
        }

        .bulan{
            width: 15%;
        }

        .acak{
            width: 15%;
        }



    </style>
</head>
<body>
     <table>
        <caption class="caption-top text-center mb-2 judul">Data Hasil Simulasi Meninggal Dunia <?= $_SESSION['tahun_Prediksi_MD']; ?></caption>
        <thead>
            <tr class="text-center">
                <th class="no">No</th>
                <th class="bulan">Bulan</th>
                <th class="acak">Angka Acak</th>
                <th>Hasil Simulasi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; for ($i=0; $i < count($bulan) ; $i++) : ?>
            <tr class="text-center">
                <th <?= $no >= 5 && $no <= 10 ?"style='border-left-color:red' " : "style='border-left-color:blue'"?> ><?= $no++; ?></th>
                    <td class="text-start"><?=  $bulan[$i]; ?></td>
                    <td> <?= $_SESSION['angkaAcakMD'][$bulan[$i]] ?> </td>
                    <td> <?= $_SESSION['hasilS_MD'][$bulan[$i]] ?></td>  
                </tr>
            <?php endfor ?>
            <tr class="text-center">
                <th colspan="3" rowspan="3" style=" vertical-align: middle;">Total</th>
                <td><?= $_SESSION['total_hasilS_MD']; ?></td>    
            </tr>
            <tr class="text-center">
                <td class="musimKemarau"><?= $_SESSION['total_hasilS_Kemarau_MD']; ?></td>
            </tr>
            <tr class="text-center">
                <td class="musimHujan"><?= $_SESSION['total_hasilS_Hujan_MD']; ?></td>
            </tr>
            <tr class="text-center">
                <th class="text-center" colspan="3" rowspan="3"  style=" vertical-align: middle;">Rata-rata</th>
                <td><?= $_SESSION['rata2_total_hasilS_MD']; ?></td>
            </tr>
            <tr class="text-center">
                <td class="musimKemarau"><?= $_SESSION['rata2_total_hasilS_Kemarau_MD']; ?></td>
            </tr>
            <tr class="text-center">
                <td class="musimHujan"><?= $_SESSION['rata2_total_hasilS_Hujan_MD'];?></td>
            </tr>
        </tbody>
    </table>


        <ul class="musim" style="list-style-type:square;">
            <li style="color: blue;"><span>Musim Hujan</span></li>
            <li style="color: red;"><span>Musim Kemarau</span></li>
        </ul>

    </body>
    </html>

    <?php

    $html = ob_get_contents();
    ob_end_clean();

// Buat objek Spreadsheet
    $spreadsheet = new Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();


   // Ganti metode loadFromString dengan load
    $reader = new \PhpOffice\PhpSpreadsheet\Reader\Html();
    $spreadsheet = $reader->loadFromString($html);

// $html = ob_get_contents();
// ob_end_clean();

// $excelFilePath = 'C:/Users/INTEL/Downloads/data_hasil_simulasi.xlsx';

// Browsershot::html($html)->save($excelFilePath);

//Simpan ke file Excel
    $excelFilePath = 'C:/Users/INTEL/Downloads/data_hasil_simulasi_MD.xlsx'; 
    $writer = new Xlsx($spreadsheet);
    $writer->save($excelFilePath);

// Mengunduh file
    if (file_exists($excelFilePath)) {
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="' . basename($excelFilePath) . '"');
        header('Cache-Control: max-age=0');
        readfile($excelFilePath);
        exit();
    } else {
        echo 'File not found.';
    }

endif;
    ?>


    <!-- Luka Berat -->
<?php if($_GET['id_convert'] == "LB") : ?>

<!DOCTYPE html>
   <html lang="en">
   <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF Hasil Simulasi</title>

    <style>
        .musimKemarau {
            border-left: 2px solid red !important;
        }

        .musimHujan {
            border-left: 2px solid blue !important;
        }


        table, th, td{
            margin-left: auto;
            margin-right: auto;
            border:1px solid black;
            border-collapse: collapse;
            text-align: center;
        }

        table{
            width: 100%;
        }

        .text-start{
            text-align: left;
        }

        caption{
            margin-bottom: 10px;
        }

        span{
            color: black;
        }

        .musim{
            margin-left: -20px;
        }

        .judul{
            font-size: 18;
            margin-bottom: 30px;
        }

        .no{
            width: 5%;
        }

        .bulan{
            width: 15%;
        }

        .acak{
            width: 15%;
        }



    </style>
</head>
<body>
    <table>
        <caption class="caption-top text-center mb-2 judul">Data Hasil Simulasi Luka Berat <?= $_SESSION['tahun_Prediksi_LB']; ?></caption>
        <thead>
            <tr class="text-center">
                <th class="no">No</th>
                <th class="bulan">Bulan</th>
                <th class="acak">Angka Acak</th>
                <th>Hasil Simulasi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; for ($i=0; $i < count($bulan) ; $i++) : ?>
            <tr class="text-center">
                <th <?= $no >= 5 && $no <= 10 ?"style='border-left-color:red' " : "style='border-left-color:blue'"?> ><?= $no++; ?></th>
                    <td class="text-start"><?=  $bulan[$i]; ?></td>
                    <td> <?= $_SESSION['angkaAcakLB'][$bulan[$i]] ?> </td>
                    <td> <?= $_SESSION['hasilS_LB'][$bulan[$i]] ?></td>      
                </tr>
            <?php endfor ?>
            <tr class="text-center">
                <th colspan="3" rowspan="3" style=" vertical-align: middle;">Total</th>
                <td><?= $_SESSION['total_hasilS_LB']; ?></td>     
            </tr>
            <tr class="text-center">
                <td class="musimKemarau"><?= $_SESSION['total_hasilS_Kemarau_LB']; ?></td>
            </tr>
            <tr class="text-center">
                <td class="musimHujan"><?= $_SESSION['total_hasilS_Hujan_LB']; ?></td>
            </tr>
            <tr class="text-center">
                <th class="text-center" colspan="3" rowspan="3"  style=" vertical-align: middle;">Rata-rata</th>
                <td><?= $_SESSION['rata2_total_hasilS_LB']; ?></td>
            </tr>
            <tr class="text-center">
                <td class="musimKemarau"><?= $_SESSION['rata2_total_hasilS_Kemarau_LB']; ?></td>
            </tr>
            <tr class="text-center">
                <td class="musimHujan"><?= $_SESSION['rata2_total_hasilS_Hujan_LB'];?></td>
            </tr>
        </tbody>
    </table>

        <ul class="musim" style="list-style-type:square;">
            <li style="color: blue;"><span>Musim Hujan</span></li>
            <li style="color: red;"><span>Musim Kemarau</span></li>
        </ul>

    </body>
    </html>

    <?php

    $html = ob_get_contents();
    ob_end_clean();

// Buat objek Spreadsheet
    $spreadsheet = new Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();


   // Ganti metode loadFromString dengan load
    $reader = new \PhpOffice\PhpSpreadsheet\Reader\Html();
    $spreadsheet = $reader->loadFromString($html);

// $html = ob_get_contents();
// ob_end_clean();

// $excelFilePath = 'C:/Users/INTEL/Downloads/data_hasil_simulasi.xlsx';

// Browsershot::html($html)->save($excelFilePath);

//Simpan ke file Excel
    $excelFilePath = 'C:/Users/INTEL/Downloads/data_hasil_simulasi_LB.xlsx'; 
    $writer = new Xlsx($spreadsheet);
    $writer->save($excelFilePath);

// Mengunduh file
    if (file_exists($excelFilePath)) {
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="' . basename($excelFilePath) . '"');
        header('Cache-Control: max-age=0');
        readfile($excelFilePath);
        exit();
    } else {
        echo 'File not found.';
    }

endif;
    ?>



<!-- Luka Ringan -->
<?php if($_GET['id_convert'] == "LR") : ?>

  <!DOCTYPE html>
   <html lang="en">
   <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF Hasil Simulasi</title>

    <style>
        .musimKemarau {
            border-left: 2px solid red !important;
        }

        .musimHujan {
            border-left: 2px solid blue !important;
        }


        table, th, td{
            margin-left: auto;
            margin-right: auto;
            border:1px solid black;
            border-collapse: collapse;
            text-align: center;
        }

        table{
            width: 100%;
        }

        .text-start{
            text-align: left;
        }

        caption{
            margin-bottom: 10px;
        }

        span{
            color: black;
        }

        .musim{
            margin-left: -20px;
        }

        .judul{
            font-size: 18;
            margin-bottom: 30px;
        }

        .no{
            width: 5%;
        }

        .bulan{
            width: 15%;
        }

        .acak{
            width: 15%;
        }



    </style>
</head>
<body>
     <table>
           <caption class="caption-top text-center mb-2 judul">Data Hasil Simulasi Luka Ringan <?= $_SESSION['tahun_Prediksi_LR']; ?></caption>
        <thead>
            <tr class="text-center">
                <th class="no">No</th>
                <th class="bulan">Bulan</th>
                <th class="acak">Angka Acak</th>
                <th>Hasil Simulasi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; for ($i=0; $i < count($bulan) ; $i++) : ?>
            <tr class="text-center">
                <th <?= $no >= 5 && $no <= 10 ?"style='border-left-color:red' " : "style='border-left-color:blue'"?> ><?= $no++; ?></th>
                    <td class="text-start"><?=  $bulan[$i]; ?></td>
                    <td> <?= $_SESSION['angkaAcakLR'][$bulan[$i]] ?> </td>
                    <td> <?= $_SESSION['hasilS_LR'][$bulan[$i]] ?></td>      
                </tr>
            <?php endfor ?>
            <tr class="text-center">
                <th colspan="3" rowspan="3" style=" vertical-align: middle;">Total</th>
                <td><?= $_SESSION['total_hasilS_LR']; ?></td> 
            </tr>
            <tr class="text-center">
                <td class="musimKemarau"><?= $_SESSION['total_hasilS_Kemarau_LR']; ?></td>
            </tr>
            <tr class="text-center">
                <td class="musimHujan"><?= $_SESSION['total_hasilS_Hujan_LR']; ?></td>
            </tr>
            <tr class="text-center">
                <th class="text-center" colspan="3" rowspan="3"  style=" vertical-align: middle;">Rata-rata</th>
                <td><?= $_SESSION['rata2_total_hasilS_LR']; ?></td>
            </tr>
            <tr class="text-center">
                <td class="musimKemarau"><?= $_SESSION['rata2_total_hasilS_Kemarau_LR']; ?></td>
            </tr>
            <tr class="text-center">
                <td class="musimHujan"><?= $_SESSION['rata2_total_hasilS_Hujan_LR'];?></td>
            </tr>
        </tbody>
        </table>

        <ul class="musim" style="list-style-type:square;">
            <li style="color: blue;"><span>Musim Hujan</span></li>
            <li style="color: red;"><span>Musim Kemarau</span></li>
        </ul>

    </body>
    </html>

    <?php

    $html = ob_get_contents();
    ob_end_clean();

// Buat objek Spreadsheet
    $spreadsheet = new Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();


   // Ganti metode loadFromString dengan load
    $reader = new \PhpOffice\PhpSpreadsheet\Reader\Html();
    $spreadsheet = $reader->loadFromString($html);

// $html = ob_get_contents();
// ob_end_clean();

// $excelFilePath = 'C:/Users/INTEL/Downloads/data_hasil_simulasi.xlsx';

// Browsershot::html($html)->save($excelFilePath);

//Simpan ke file Excel
    $excelFilePath = 'C:/Users/INTEL/Downloads/data_hasil_simulasi_LR.xlsx'; 
    $writer = new Xlsx($spreadsheet);
    $writer->save($excelFilePath);

// Mengunduh file
    if (file_exists($excelFilePath)) {
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="' . basename($excelFilePath) . '"');
        header('Cache-Control: max-age=0');
        readfile($excelFilePath);
        exit();
    } else {
        echo 'File not found.';
    }

endif;
    ?>