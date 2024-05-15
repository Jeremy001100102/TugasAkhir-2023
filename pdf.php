<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

// Menonaktifkan error reporting untuk peringatan tertentu
error_reporting(error_reporting() & ~E_WARNING);


require_once __DIR__ . '/vendor/autoload.php';

// Aktifkan debug mode
define('_MPDF_DEBUG', true);

session_start();

$mpdf = new \Mpdf\Mpdf();


//data bulan
$bulan = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
$musim_kemarau = ["April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober"];
$musim_hujan = ["Januari", "Februari", "Maret", "November", "Desember"];
?>

<!-- Meninggal Dunia -->
<?php   if($_GET['id_convert'] == "MD") : ?>
   <?php  
   ob_start();
   ?>
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
        <caption class="caption-top text-center mb-2 judul">Data Hasil Simulasi Meninggal Dunia <?=  $_SESSION['tahun_hasilMD']; ?></caption>
                    <thead>
                        <tr class="text-center">
                            <th class="no">No</th>
                            <th class="bulan">Bulan</th>
                            <th class="acak">Angka Acak</th>
                            <th>Hasil Simulasi <?= $_SESSION['tahun_hasilMD'] ?></th>
                            <th>Data Real <?= $_SESSION['tahun_hasilMD'] ?></th>
                            <th>Tingkat Akurasi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; for ($i=0; $i < count($bulan) ; $i++) : ?>
                        <tr class="text-center">
                            <th  <?= $no >= 5 && $no <= 10 ?"style='border-left-color:red' " : "style='border-left-color:blue'"?> ><?= $no++; ?></th>
                                <td class="text-start"><?=  $bulan[$i]; ?></td>
                                <td> <?= $_SESSION['convert_hasil_acakMD'][$i] ?></td>
                                <td> <?= $_SESSION['convert_hasil_MD'][$i] ?></td>
                                <td>  <?= $_SESSION['convert_hasil_datarealMD'][$i]; ?></td>
                                <td> <?= $_SESSION['convert_hasil_akurasiMD'][$i]; ?></td>  
                            </tr>
                        <?php endfor ?>
                        <tr>
                            <th colspan="3" rowspan="3" style=" vertical-align: middle">Total</th>
                            <td><?= $_SESSION['total_hasil_simMD']; ?></td>
                            <td><?= $_SESSION['total_data_realMD']; ?></td>
                            <td><?= "{$_SESSION['total_data_akurasiMD']}" ?></td>       
                        </tr>
                        <tr class="text-center">
                            <td class="musimKemarau"><?= $_SESSION['total_hasil_kemarau_simMD']?></td>
                            <td><?= $_SESSION['total_data_kemarau_realMD']; ?></td>
                            <td><?= "{$_SESSION['total_data_kemarau_akurasiMD']}"; ?></td>
                        </tr>
                        <tr class="text-center">
                            <td class="musimHujan"><?= $_SESSION['total_hasil_hujan_simMD']?></td>
                            <td><?= $_SESSION['total_data_hujan_realMD']; ?></td>
                            <td><?= "{$_SESSION['total_data_hujan_akurasiMD']}"; ?></td>
                        </tr>
                        <tr>
                            <th colspan="3" rowspan="3"  style=" vertical-align: middle;">Rata-rata</th>
                            <td><?= $_SESSION['rata2_hasil_simMD']; ?></td>
                            <td><?= $_SESSION['rata2_hasil_realMD']; ?></td>
                            <td> <?= "{$_SESSION['rata2_hasil_akurasiMD']}"; ?></td>
                        </tr>
                        <tr class="text-center">
                            <td class="musimKemarau"><?= $_SESSION['rata2_hasil_kemarau_simMD']; ?></td>
                            <td><?= $_SESSION['rata2_hasil_kemarau_realMD'] ?></td>
                            <td><?= "{$_SESSION['rata2_hasil_kemarau_akurasiMD']}"; ?></td>
                        </tr>
                        <tr class="text-center">
                            <td class="musimHujan"><?= $_SESSION['rata2_hasil_hujan_simMD']; ?></td>
                            <td><?= $_SESSION['rata2_hasil_hujan_realMD'] ?></td>
                            <td><?= "{$_SESSION['rata2_hasil_hujan_akurasiMD']}"; ?></td>
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
    $pdfFilePath = 'C:/Users/INTEL/Downloads/data_hasil_simulasi.pdf';
    $mpdf->WriteHTML($html);
    $mpdf->Output();
    // $mpdf->Output($pdfFilePath, 'F'); 
exit();
endif;


?>



<!-- Luka Berat -->
<?php if($_GET['id_convert'] == "LB") : ?>
 <?php
 ob_start();
 ?> 
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
        <caption class="caption-top text-center mb-2 judul">Data Hasil Simulasi Luka Berat <?=  $_SESSION['tahun_hasilLB']; ?></caption>
                    <thead>
                        <tr class="text-center">
                            <th class="no">No</th>
                            <th class="bulan">Bulan</th>
                            <th class="acak">Angka Acak</th>
                            <th>Hasil Simulasi <?= $_SESSION['tahun_hasilLB'] ?></th>
                            <th>Data Real <?= $_SESSION['tahun_hasilLB'] ?></th>
                            <th>Tingkat Akurasi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; for ($i=0; $i < count($bulan) ; $i++) : ?>
                        <tr class="text-center">
                            <th  <?= $no >= 5 && $no <= 10 ?"style='border-left-color:red' " : "style='border-left-color:blue'"?> ><?= $no++; ?></th>
                                <td class="text-start"><?=  $bulan[$i]; ?></td>
                                <td> <?= $_SESSION['convert_hasil_acakLB'][$i] ?></td>
                                <td> <?= $_SESSION['convert_hasil_LB'][$i] ?></td>
                                <td>  <?= $_SESSION['convert_hasil_datarealLB'][$i]; ?></td>
                                <td> <?= $_SESSION['convert_hasil_akurasiLB'][$i]; ?></td>  
                            </tr>
                        <?php endfor ?>
                        <tr>
                            <th colspan="3" rowspan="3" style=" vertical-align: middle">Total</th>
                            <td><?= $_SESSION['total_hasil_simLB']; ?></td>
                            <td><?= $_SESSION['total_data_realLB']; ?></td>
                            <td><?= "{$_SESSION['total_data_akurasiLB']}" ?></td>       
                        </tr>
                        <tr class="text-center">
                            <td class="musimKemarau"><?= $_SESSION['total_hasil_kemarau_simLB']?></td>
                            <td><?= $_SESSION['total_data_kemarau_realLB']; ?></td>
                            <td><?= "{$_SESSION['total_data_kemarau_akurasiLB']}"; ?></td>
                        </tr>
                        <tr class="text-center">
                            <td class="musimHujan"><?= $_SESSION['total_hasil_hujan_simLB']?></td>
                            <td><?= $_SESSION['total_data_hujan_realLB']; ?></td>
                            <td><?= "{$_SESSION['total_data_hujan_akurasiLB']}"; ?></td>
                        </tr>
                        <tr>
                            <th colspan="3" rowspan="3"  style=" vertical-align: middle;">Rata-rata</th>
                            <td><?= $_SESSION['rata2_hasil_simLB']; ?></td>
                            <td><?= $_SESSION['rata2_hasil_realLB']; ?></td>
                            <td> <?= "{$_SESSION['rata2_hasil_akurasiLB']}"; ?></td>
                        </tr>
                        <tr class="text-center">
                            <td class="musimKemarau"><?= $_SESSION['rata2_hasil_kemarau_simLB']; ?></td>
                            <td><?= $_SESSION['rata2_hasil_kemarau_realLB'] ?></td>
                            <td><?= "{$_SESSION['rata2_hasil_kemarau_akurasiLB']}"; ?></td>
                        </tr>
                        <tr class="text-center">
                            <td class="musimHujan"><?= $_SESSION['rata2_hasil_hujan_simLB']; ?></td>
                            <td><?= $_SESSION['rata2_hasil_hujan_realLB'] ?></td>
                            <td><?= "{$_SESSION['rata2_hasil_hujan_akurasiLB']}"; ?></td>
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

    $pdfFilePath = 'C:/Users/INTEL/Downloads/data_hasil_simulasi.pdf';
    $mpdf->WriteHTML($html);
    $mpdf->Output();
    // $mpdf->Output($pdfFilePath, 'F'); 

endif;

?>



<!-- Luka Ringan -->
<?php  if($_GET['id_convert'] == "LR") : ?>
    <?php  
    ob_start();
    ?>
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
        <caption class="caption-top text-center mb-2 judul">Data Hasil Simulasi Luka Ringan <?=  $_SESSION['tahun_hasilLR']; ?></caption>
                    <thead>
                        <tr class="text-center">
                            <th class="no">No</th>
                            <th class="bulan">Bulan</th>
                            <th class="acak">Angka Acak</th>
                            <th>Hasil Simulasi <?= $_SESSION['tahun_hasilLR'] ?></th>
                            <th>Data Real <?= $_SESSION['tahun_hasilLR'] ?></th>
                            <th>Tingkat Akurasi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; for ($i=0; $i < count($bulan) ; $i++) : ?>
                        <tr class="text-center">
                            <th  <?= $no >= 5 && $no <= 10 ?"style='border-left-color:red' " : "style='border-left-color:blue'"?> ><?= $no++; ?></th>
                                <td class="text-start"><?=  $bulan[$i]; ?></td>
                                <td> <?= $_SESSION['convert_hasil_acakLR'][$i] ?></td>
                                <td> <?= $_SESSION['convert_hasil_LR'][$i] ?></td>
                                <td>  <?= $_SESSION['convert_hasil_datarealLR'][$i]; ?></td>
                                <td> <?= $_SESSION['convert_hasil_akurasiLR'][$i]; ?></td>  
                            </tr>
                        <?php endfor ?>
                        <tr>
                            <th colspan="3" rowspan="3" style=" vertical-align: middle">Total</th>
                            <td><?= $_SESSION['total_hasil_simLR']; ?></td>
                            <td><?= $_SESSION['total_data_realLR']; ?></td>
                            <td><?= "{$_SESSION['total_data_akurasiLR']}" ?></td>       
                        </tr>
                        <tr class="text-center">
                            <td class="musimKemarau"><?= $_SESSION['total_hasil_kemarau_simLR']?></td>
                            <td><?= $_SESSION['total_data_kemarau_realLR']; ?></td>
                            <td><?= "{$_SESSION['total_data_kemarau_akurasiLR']}"; ?></td>
                        </tr>
                        <tr class="text-center">
                            <td class="musimHujan"><?= $_SESSION['total_hasil_hujan_simLR']?></td>
                            <td><?= $_SESSION['total_data_hujan_realLR']; ?></td>
                            <td><?= "{$_SESSION['total_data_hujan_akurasiLR']}"; ?></td>
                        </tr>
                        <tr>
                            <th colspan="3" rowspan="3"  style=" vertical-align: middle;">Rata-rata</th>
                            <td><?= $_SESSION['rata2_hasil_simLR']; ?></td>
                            <td><?= $_SESSION['rata2_hasil_realLR']; ?></td>
                            <td> <?= "{$_SESSION['rata2_hasil_akurasiLR']}"; ?></td>
                        </tr>
                        <tr class="text-center">
                            <td class="musimKemarau"><?= $_SESSION['rata2_hasil_kemarau_simLR']; ?></td>
                            <td><?= $_SESSION['rata2_hasil_kemarau_realLR'] ?></td>
                            <td><?= "{$_SESSION['rata2_hasil_kemarau_akurasiLR']}"; ?></td>
                        </tr>
                        <tr class="text-center">
                            <td class="musimHujan"><?= $_SESSION['rata2_hasil_hujan_simLR']; ?></td>
                            <td><?= $_SESSION['rata2_hasil_hujan_realLR'] ?></td>
                            <td><?= "{$_SESSION['rata2_hasil_hujan_akurasiLR']}"; ?></td>
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

        $pdfFilePath = 'C:/Users/INTEL/Downloads/data_hasil_simulasi.pdf';
        $mpdf->WriteHTML($html);
        $mpdf->Output();
    // $mpdf->Output($pdfFilePath, 'F'); 


    endif;
    
    ?>



