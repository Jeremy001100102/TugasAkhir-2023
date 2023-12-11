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


        table, th, td {
            border:1px solid black;
            border-collapse: collapse;
            text-align: center;
        }

        .totalrata2{
            vertical-align: middle !important;"
        }

        caption{
            margin-bottom: 10px;
        }

        span{
            color: black;
        }

        .musim{
            margin-left: -25px;
        }

        .judul{
            font-size: 18;
            margin-bottom: 30px;
        }



    </style>
</head>
<body>
    <table>
        <caption class="caption-top text-center mb-2 judul">Data Hasil Simulasi Meninggal Dunia<?= (isset($_SESSION['tahun_hasilMD']) ? $_SESSION['tahun_hasilMD'] : '') ?></caption>
        <thead>
            <tr class="text-center">
                <th>No</th>
                <th>Bulan</th>
                <th>Frekuensi</th>
                <th>Probabilitas</th>
                <th>Kumulatif</th>
                <th>Interval</th>
                <th>Angka Acak</th>
                <th>Hasil Simulasi <?= (isset($_SESSION['tahun_hasilMD']) ? $_SESSION['tahun_hasilMD'] : '') ?></th>
                <th>Data Real <?= (isset($_SESSION['tahun_data_realMD']) ? $_SESSION['tahun_data_realMD'] : '') ?></th>
                <th>Tingkat Akurasi</th>
            </tr>
        </thead>
        <tbody>

            <?php
            // Perulangan untuk membangun baris tabel berdasarkan data
            $no = 1;
            for ($i = 0; $i < count($bulan); $i++) {
                // Periksa apakah variabel session dan elemen array sudah diinisialisasi sebelum digunakan
                if (
                    isset($_SESSION['convert_hasil_frekMD'][$i]) &&
                    isset($_SESSION['convert_hasil_probMD'][$i]) &&
                    isset($_SESSION['convert_hasil_kumuMD'][$i]) &&
                    isset($_SESSION['convert_hasil_interMD'][$i]) &&
                    isset($_SESSION['convert_hasil_acakMD'][$i]) &&
                    isset($_SESSION['convert_hasil_MD'][$i]) &&
                    isset($_SESSION['convert_hasil_datarealMD'][$i]) &&
                    isset($_SESSION['convert_hasil_akurasiMD'][$i])
                ) {
                    ?>
                    <tr class="text-center">
                        <th <?= ($no >= 4 && $no <= 10) ? 'style="border-left: 2px solid red;"' : 'style="border-left: 2px solid blue;"' ?>><?= $no++ ?></th>
                            <td class="text-start"><?= $bulan[$i] ?></td>
                            <td><?= $_SESSION['convert_hasil_frekMD'][$i] ?></td>
                            <td><?= $_SESSION['convert_hasil_probMD'][$i] ?></td>
                            <td><?= $_SESSION['convert_hasil_kumuMD'][$i] ?></td>
                            <td><?= $_SESSION['convert_hasil_interMD'][$i] ?></td>
                            <td><?= $_SESSION['convert_hasil_acakMD'][$i] ?></td>
                            <td><?= $_SESSION['convert_hasil_MD'][$i] ?></td>
                            <td><?= $_SESSION['convert_hasil_datarealMD'][$i] ?></td>
                            <td><?= $_SESSION['convert_hasil_akurasiMD'][$i] ?></td>
                        </tr>
                        <?php
                    }
                }
                ?>

            </tbody>
            <tr class="text-center">
                <th class="totalrata2" colspan="2" rowspan="3">Total</th>
                <td><?= (isset($_SESSION['total_hasil_frekMD']) ? $_SESSION['total_hasil_frekMD'] : '') ?></td>
                <td><?= (isset($_SESSION['total_hasil_probMD']) ? $_SESSION['total_hasil_probMD'] : '') ?></td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td><?= (isset($_SESSION['total_hasil_simMD']) ? $_SESSION['total_hasil_simMD'] : '') ?></td>
                <td><?= (isset($_SESSION['total_data_realMD']) ? $_SESSION['total_data_realMD'] : '') ?></td>
                <td><?= (isset($_SESSION['total_akurasi_dhasil_MD']) ? "{$_SESSION['total_akurasi_dhasil_MD']}%" : '') ?></td>
            </tr>
            <tr class="text-center">
                <td class="musimKemarau"><?= (isset($_SESSION['total_dhasil_kemarau_MD']) ? $_SESSION['total_dhasil_kemarau_MD'] : '') ?></td>
                <td colspan="4"></td>
                <td><?= (isset($_SESSION['total_dhasil_kemarau_MD']) ? $_SESSION['total_dhasil_kemarau_MD'] : '') ?></td>
                <td><?= (isset($_SESSION['total_dreal_sim_kemarau_MD']) ? $_SESSION['total_dreal_sim_kemarau_MD'] : '') ?></td>
                <td><?= (isset($_SESSION['total_akurasi_dhasil_kemarau_MD']) ? "{$_SESSION['total_akurasi_dhasil_kemarau_MD']}%" : '') ?></td>
            </tr>
            <tr class="text-center">
                <td class="musimHujan"><?= (isset($_SESSION['total_dhasil_hujan_MD']) ? $_SESSION['total_dhasil_hujan_MD'] : '') ?></td>
                <td colspan="4"></td>
                <td><?= (isset($_SESSION['total_dhasil_hujan_MD']) ? $_SESSION['total_dhasil_hujan_MD'] : '') ?></td>
                <td><?= (isset($_SESSION['total_dreal_sim_hujan_MD']) ? $_SESSION['total_dreal_sim_hujan_MD'] : '') ?></td>
                <td><?= (isset($_SESSION['total_akurasi_dhasil_kemarau_MD']) ? "{$_SESSION['total_akurasi_dhasil_kemarau_MD']}%" : '') ?></td>
            </tr>
            <tr class="text-center">
                <th class="text-center totalrata2" colspan="2" rowspan="3" style="vertical-align: middle !important;">Rata-rata</th>
                <td><?= (isset($_SESSION['rata2_hasilfrekMD']) ? $_SESSION['rata2_hasilfrekMD'] : '') ?></td>
                <td class="text-center" colspan="4">-</td>
                <td><?= (isset($_SESSION['rata2_hasil_simMD']) ? $_SESSION['rata2_hasil_simMD'] : '') ?></td>
                <td><?= (isset($_SESSION['rata2_hasil_realMD']) ? $_SESSION['rata2_hasil_realMD'] : '') ?></td>
                <td><?= (isset($_SESSION['rata2_hasil_akurasiMD']) ? "{$_SESSION['rata2_hasil_akurasiMD']}%" : '') ?></td>
            </tr>
            <tr class="text-center">
                <td class="musimKemarau"><?= (isset($_SESSION['rata2_dhasil_frek_kemarau_MD']) ? $_SESSION['rata2_dhasil_frek_kemarau_MD'] : '') ?></td>
                <td colspan="4"></td>
                <td><?= (isset($_SESSION['rata2_dhasil_sim_kemarau_MD']) ? $_SESSION['rata2_dhasil_sim_kemarau_MD'] : '') ?></td>
                <td><?= (isset($_SESSION['rata2_dhasil_real_sim_kemarau_MD']) ? $_SESSION['rata2_dhasil_real_sim_kemarau_MD'] : '') ?></td>
                <td><?= (isset($_SESSION['rata2_akurasi_dhasil_sim_kemarau_MD']) ? "{$_SESSION['rata2_akurasi_dhasil_sim_kemarau_MD']}%" : '') ?></td>
            </tr>
            <tr class="text-center">
                <td class="musimHujan"><?= (isset($_SESSION['rata2_dhasil_frek_hujan_MD']) ? $_SESSION['rata2_dhasil_frek_hujan_MD'] : '') ?></td>
                <td colspan="4"></td>
                <td><?= (isset($_SESSION['rata2_dhasil_sim_hujan_MD']) ? $_SESSION['rata2_dhasil_sim_hujan_MD'] : '') ?></td>
                <td><?= (isset($_SESSION['rata2_dhasil_real_sim_hujan_MD']) ? $_SESSION['rata2_dhasil_real_sim_hujan_MD'] : '') ?></td>
                <td><?= (isset($_SESSION['rata2_akurasi_dhasil_sim_hujan_MD']) ? "{$_SESSION['rata2_akurasi_dhasil_sim_hujan_MD']}%" : '') ?></td>
            </tr>
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


        table, th, td {
            border:1px solid black;
            border-collapse: collapse;
            text-align: center;
        }

        .totalrata2{
            vertical-align: middle !important;"
        }

        caption{
            margin-bottom: 10px;
        }

        span{
            color: black;
        }

        .musim{
            margin-left: -25px;
        }

        .judul{
            font-size: 18;
            margin-bottom: 30px;
        }



    </style>
</head>
<body>
    <table>
        <caption class="caption-top text-center mb-2 judul">Data Hasil Simulasi Luka Berat <?= (isset($_SESSION['tahun_hasilLB']) ? $_SESSION['tahun_hasilLB'] : '') ?></caption>
        <thead>
            <tr class="text-center">
                <th>No</th>
                <th>Bulan</th>
                <th>Frekuensi</th>
                <th>Probabilitas</th>
                <th>Kumulatif</th>
                <th>Interval</th>
                <th>Angka Acak</th>
                <th>Hasil Simulasi <?= (isset($_SESSION['tahun_hasilLB']) ? $_SESSION['tahun_hasilLB'] : '') ?></th>
                <th>Data Real <?= (isset($_SESSION['tahun_data_realLB']) ? $_SESSION['tahun_data_realLB'] : '') ?></th>
                <th>Tingkat Akurasi</th>
            </tr>
        </thead>
        <tbody>

            <?php
            // Perulangan untuk membangun baris tabel berdasarkan data
            $no = 1;
            for ($i = 0; $i < count($bulan); $i++) {
                // Periksa apakah variabel session dan elemen array sudah diinisialisasi sebelum digunakan
                if (
                    isset($_SESSION['convert_hasil_frekLB'][$i]) &&
                    isset($_SESSION['convert_hasil_probLB'][$i]) &&
                    isset($_SESSION['convert_hasil_kumuLB'][$i]) &&
                    isset($_SESSION['convert_hasil_interLB'][$i]) &&
                    isset($_SESSION['convert_hasil_acakLB'][$i]) &&
                    isset($_SESSION['convert_hasil_LB'][$i]) &&
                    isset($_SESSION['convert_hasil_datarealLB'][$i]) &&
                    isset($_SESSION['convert_hasil_akurasiLB'][$i])
                ) {
                    ?>
                    <tr class="text-center">
                        <th <?= ($no >= 4 && $no <= 10) ? 'style="border-left: 2px solid red;"' : 'style="border-left: 2px solid blue;"' ?>><?= $no++ ?></th>
                            <td class="text-start"><?= $bulan[$i] ?></td>
                            <td><?= $_SESSION['convert_hasil_frekLB'][$i] ?></td>
                            <td><?= $_SESSION['convert_hasil_probLB'][$i] ?></td>
                            <td><?= $_SESSION['convert_hasil_kumuLB'][$i] ?></td>
                            <td><?= $_SESSION['convert_hasil_interLB'][$i] ?></td>
                            <td><?= $_SESSION['convert_hasil_acakLB'][$i] ?></td>
                            <td><?= $_SESSION['convert_hasil_LB'][$i] ?></td>
                            <td><?= $_SESSION['convert_hasil_datarealLB'][$i] ?></td>
                            <td><?= $_SESSION['convert_hasil_akurasiLB'][$i] ?></td>
                        </tr>
                        <?php
                    }
                }
                ?>

            </tbody>
            <tr class="text-center">
                <th class="totalrata2" colspan="2" rowspan="3">Total</th>
                <td><?= (isset($_SESSION['total_hasil_frekLB']) ? $_SESSION['total_hasil_frekLB'] : '') ?></td>
                <td><?= (isset($_SESSION['total_hasil_probLB']) ? $_SESSION['total_hasil_probLB'] : '') ?></td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td><?= (isset($_SESSION['total_hasil_simLB']) ? $_SESSION['total_hasil_simLB'] : '') ?></td>
                <td><?= (isset($_SESSION['total_data_realLB']) ? $_SESSION['total_data_realLB'] : '') ?></td>
                <td><?= (isset($_SESSION['total_akurasi_dhasil_LB']) ? "{$_SESSION['total_akurasi_dhasil_LB']}%" : '') ?></td>
            </tr>
            <tr class="text-center">
                <td class="musimKemarau"><?= (isset($_SESSION['total_dhasil_kemarau_LB']) ? $_SESSION['total_dhasil_kemarau_LB'] : '') ?></td>
                <td colspan="4"></td>
                <td><?= (isset($_SESSION['total_dhasil_kemarau_LB']) ? $_SESSION['total_dhasil_kemarau_LB'] : '') ?></td>
                <td><?= (isset($_SESSION['total_dreal_sim_kemarau_LB']) ? $_SESSION['total_dreal_sim_kemarau_LB'] : '') ?></td>
                <td><?= (isset($_SESSION['total_akurasi_dhasil_kemarau_LB']) ? "{$_SESSION['total_akurasi_dhasil_kemarau_LB']}%" : '') ?></td>
            </tr>
            <tr class="text-center">
                <td class="musimHujan"><?= (isset($_SESSION['total_dhasil_hujan_LB']) ? $_SESSION['total_dhasil_hujan_LB'] : '') ?></td>
                <td colspan="4"></td>
                <td><?= (isset($_SESSION['total_dhasil_hujan_LB']) ? $_SESSION['total_dhasil_hujan_LB'] : '') ?></td>
                <td><?= (isset($_SESSION['total_dreal_sim_hujan_LB']) ? $_SESSION['total_dreal_sim_hujan_LB'] : '') ?></td>
                <td><?= (isset($_SESSION['total_akurasi_dhasil_kemarau_LB']) ? "{$_SESSION['total_akurasi_dhasil_kemarau_LB']}%" : '') ?></td>
            </tr>
            <tr class="text-center">
                <th class="text-center totalrata2" colspan="2" rowspan="3" style="vertical-align: middle !important;">Rata-rata</th>
                <td><?= (isset($_SESSION['rata2_hasilfrekLB']) ? $_SESSION['rata2_hasilfrekLB'] : '') ?></td>
                <td class="text-center" colspan="4">-</td>
                <td><?= (isset($_SESSION['rata2_hasil_simLB']) ? $_SESSION['rata2_hasil_simLB'] : '') ?></td>
                <td><?= (isset($_SESSION['rata2_hasil_realLB']) ? $_SESSION['rata2_hasil_realLB'] : '') ?></td>
                <td><?= (isset($_SESSION['rata2_hasil_akurasiLB']) ? "{$_SESSION['rata2_hasil_akurasiLB']}%" : '') ?></td>
            </tr>
            <tr class="text-center">
                <td class="musimKemarau"><?= (isset($_SESSION['rata2_dhasil_frek_kemarau_LB']) ? $_SESSION['rata2_dhasil_frek_kemarau_LB'] : '') ?></td>
                <td colspan="4"></td>
                <td><?= (isset($_SESSION['rata2_dhasil_sim_kemarau_LB']) ? $_SESSION['rata2_dhasil_sim_kemarau_LB'] : '') ?></td>
                <td><?= (isset($_SESSION['rata2_dhasil_real_sim_kemarau_LB']) ? $_SESSION['rata2_dhasil_real_sim_kemarau_LB'] : '') ?></td>
                <td><?= (isset($_SESSION['rata2_akurasi_dhasil_sim_kemarau_LB']) ? "{$_SESSION['rata2_akurasi_dhasil_sim_kemarau_LB']}%" : '') ?></td>
            </tr>
            <tr class="text-center">
                <td class="musimHujan"><?= (isset($_SESSION['rata2_dhasil_frek_hujan_LB']) ? $_SESSION['rata2_dhasil_frek_hujan_LB'] : '') ?></td>
                <td colspan="4"></td>
                <td><?= (isset($_SESSION['rata2_dhasil_sim_hujan_LB']) ? $_SESSION['rata2_dhasil_sim_hujan_LB'] : '') ?></td>
                <td><?= (isset($_SESSION['rata2_dhasil_real_sim_hujan_LB']) ? $_SESSION['rata2_dhasil_real_sim_hujan_LB'] : '') ?></td>
                <td><?= (isset($_SESSION['rata2_akurasi_dhasil_sim_hujan_LB']) ? "{$_SESSION['rata2_akurasi_dhasil_sim_hujan_LB']}%" : '') ?></td>
            </tr>
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


            table, th, td {
                border:1px solid black;
                border-collapse: collapse;
                text-align: center;
            }

            .totalrata2{
                vertical-align: middle !important;"
            }

            caption{
                margin-bottom: 10px;
            }

            span{
                color: black;
            }

            .musim{
                margin-left: -25px;
            }

            .judul{
                font-size: 18;
                margin-bottom: 30px;
            }



        </style>
    </head>
    <body>
        <table>
            <caption class="caption-top text-center mb-2 judul">Data Hasil Simulasi Luka Ringan <?= (isset($_SESSION['tahun_hasilLR']) ? $_SESSION['tahun_hasilLR'] : '') ?></caption>
            <thead>
                <tr class="text-center">
                    <th>No</th>
                    <th>Bulan</th>
                    <th>Frekuensi</th>
                    <th>Probabilitas</th>
                    <th>Kumulatif</th>
                    <th>Interval</th>
                    <th>Angka Acak</th>
                    <th>Hasil Simulasi <?= (isset($_SESSION['tahun_hasilLR']) ? $_SESSION['tahun_hasilLR'] : '') ?></th>
                    <th>Data Real <?= (isset($_SESSION['tahun_data_realLR']) ? $_SESSION['tahun_data_realLR'] : '') ?></th>
                    <th>Tingkat Akurasi</th>
                </tr>
            </thead>
            <tbody>

                <?php
            // Perulangan untuk membangun baris tabel berdasarkan data
                $no = 1;
                for ($i = 0; $i < count($bulan); $i++) {
                // Periksa apakah variabel session dan elemen array sudah diinisialisasi sebelum digunakan
                    if (
                        isset($_SESSION['convert_hasil_frekLR'][$i]) &&
                        isset($_SESSION['convert_hasil_probLR'][$i]) &&
                        isset($_SESSION['convert_hasil_kumuLR'][$i]) &&
                        isset($_SESSION['convert_hasil_interLR'][$i]) &&
                        isset($_SESSION['convert_hasil_acakLR'][$i]) &&
                        isset($_SESSION['convert_hasil_LR'][$i]) &&
                        isset($_SESSION['convert_hasil_datarealLR'][$i]) &&
                        isset($_SESSION['convert_hasil_akurasiLR'][$i])
                    ) {
                        ?>
                        <tr class="text-center">
                            <th <?= ($no >= 4 && $no <= 10) ? 'style="border-left: 2px solid red;"' : 'style="border-left: 2px solid blue;"' ?>><?= $no++ ?></th>
                                <td class="text-start"><?= $bulan[$i] ?></td>
                                <td><?= $_SESSION['convert_hasil_frekLR'][$i] ?></td>
                                <td><?= $_SESSION['convert_hasil_probLR'][$i] ?></td>
                                <td><?= $_SESSION['convert_hasil_kumuLR'][$i] ?></td>
                                <td><?= $_SESSION['convert_hasil_interLR'][$i] ?></td>
                                <td><?= $_SESSION['convert_hasil_acakLR'][$i] ?></td>
                                <td><?= $_SESSION['convert_hasil_LR'][$i] ?></td>
                                <td><?= $_SESSION['convert_hasil_datarealLR'][$i] ?></td>
                                <td><?= $_SESSION['convert_hasil_akurasiLR'][$i] ?></td>
                            </tr>
                            <?php
                        }
                    }
                    ?>

                </tbody>
                <tr class="text-center">
                    <th class="totalrata2" colspan="2" rowspan="3">Total</th>
                    <td><?= (isset($_SESSION['total_hasil_frekLR']) ? $_SESSION['total_hasil_frekLR'] : '') ?></td>
                    <td><?= (isset($_SESSION['total_hasil_probLR']) ? $_SESSION['total_hasil_probLR'] : '') ?></td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td><?= (isset($_SESSION['total_hasil_simLR']) ? $_SESSION['total_hasil_simLR'] : '') ?></td>
                    <td><?= (isset($_SESSION['total_data_realLR']) ? $_SESSION['total_data_realLR'] : '') ?></td>
                    <td><?= (isset($_SESSION['total_akurasi_dhasil_LR']) ? "{$_SESSION['total_akurasi_dhasil_LR']}%" : '') ?></td>
                </tr>
                <tr class="text-center">
                    <td class="musimKemarau"><?= (isset($_SESSION['total_dhasil_kemarau_LR']) ? $_SESSION['total_dhasil_kemarau_LR'] : '') ?></td>
                    <td colspan="4"></td>
                    <td><?= (isset($_SESSION['total_dhasil_kemarau_LR']) ? $_SESSION['total_dhasil_kemarau_LR'] : '') ?></td>
                    <td><?= (isset($_SESSION['total_dreal_sim_kemarau_LR']) ? $_SESSION['total_dreal_sim_kemarau_LR'] : '') ?></td>
                    <td><?= (isset($_SESSION['total_akurasi_dhasil_kemarau_LR']) ? "{$_SESSION['total_akurasi_dhasil_kemarau_LR']}%" : '') ?></td>
                </tr>
                <tr class="text-center">
                    <td class="musimHujan"><?= (isset($_SESSION['total_dhasil_hujan_LR']) ? $_SESSION['total_dhasil_hujan_LR'] : '') ?></td>
                    <td colspan="4"></td>
                    <td><?= (isset($_SESSION['total_dhasil_hujan_LR']) ? $_SESSION['total_dhasil_hujan_LR'] : '') ?></td>
                    <td><?= (isset($_SESSION['total_dreal_sim_hujan_LR']) ? $_SESSION['total_dreal_sim_hujan_LR'] : '') ?></td>
                    <td><?= (isset($_SESSION['total_akurasi_dhasil_kemarau_LR']) ? "{$_SESSION['total_akurasi_dhasil_kemarau_LR']}%" : '') ?></td>
                </tr>
                <tr class="text-center">
                    <th class="text-center totalrata2" colspan="2" rowspan="3" style="vertical-align: middle !important;">Rata-rata</th>
                    <td><?= (isset($_SESSION['rata2_hasilfrekLR']) ? $_SESSION['rata2_hasilfrekLR'] : '') ?></td>
                    <td class="text-center" colspan="4">-</td>
                    <td><?= (isset($_SESSION['rata2_hasil_simLR']) ? $_SESSION['rata2_hasil_simLR'] : '') ?></td>
                    <td><?= (isset($_SESSION['rata2_hasil_realLR']) ? $_SESSION['rata2_hasil_realLR'] : '') ?></td>
                    <td><?= (isset($_SESSION['rata2_hasil_akurasiLR']) ? "{$_SESSION['rata2_hasil_akurasiLR']}%" : '') ?></td>
                </tr>
                <tr class="text-center">
                    <td class="musimKemarau"><?= (isset($_SESSION['rata2_dhasil_frek_kemarau_LR']) ? $_SESSION['rata2_dhasil_frek_kemarau_LR'] : '') ?></td>
                    <td colspan="4"></td>
                    <td><?= (isset($_SESSION['rata2_dhasil_sim_kemarau_LR']) ? $_SESSION['rata2_dhasil_sim_kemarau_LR'] : '') ?></td>
                    <td><?= (isset($_SESSION['rata2_dhasil_real_sim_kemarau_LR']) ? $_SESSION['rata2_dhasil_real_sim_kemarau_LR'] : '') ?></td>
                    <td><?= (isset($_SESSION['rata2_akurasi_dhasil_sim_kemarau_LR']) ? "{$_SESSION['rata2_akurasi_dhasil_sim_kemarau_LR']}%" : '') ?></td>
                </tr>
                <tr class="text-center">
                    <td class="musimHujan"><?= (isset($_SESSION['rata2_dhasil_frek_hujan_LR']) ? $_SESSION['rata2_dhasil_frek_hujan_LR'] : '') ?></td>
                    <td colspan="4"></td>
                    <td><?= (isset($_SESSION['rata2_dhasil_sim_hujan_LR']) ? $_SESSION['rata2_dhasil_sim_hujan_LR'] : '') ?></td>
                    <td><?= (isset($_SESSION['rata2_dhasil_real_sim_hujan_LR']) ? $_SESSION['rata2_dhasil_real_sim_hujan_LR'] : '') ?></td>
                    <td><?= (isset($_SESSION['rata2_akurasi_dhasil_sim_hujan_LR']) ? "{$_SESSION['rata2_akurasi_dhasil_sim_hujan_LR']}%" : '') ?></td>
                </tr>
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




