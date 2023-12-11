<?php 	
session_start();


//data bulan
$bulan = ["Januari","Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
$musim_kemarau = ["April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober"];
$musim_hujan = ["Januari","Februari", "Maret","November", "Desember"];









?>


<!-- Meninggal Dunia -->
<?php 	if($_GET['id_convert'] === "MD") : ?>

	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Print</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
		<style>

			.musimKemarau{
				border-left: 3px solid red !important;

			}

			.musimHujan{
				border-left: 3px solid blue !important;
			}

			@media print{ 
				@page {
					margin-top: 30px;
					margin-bottom: 30px;
				}
			}

		</style>	
	</head>
	<body>
		<table class="table table-bordered">
			<caption class="caption-top text-center mb-2">Data Hasil Simulasi Meninggal Dunia <?=  $_SESSION['tahun_hasilMD']; ?></caption>
			<caption>								
				<ul style="list-style-type:square;">
					<li style="color: blue;"><span style="color: gray;">Musim Hujan<span></li>
						<li style="color: red;"><span style="color: gray;">Musim Kemarau<span></li>
						</ul> 
					</caption>
					<thead>
						<tr class="text-center" style=" vertical-align: middle !important;">
							<th>No</th>
							<th>Bulan</th>
							<th>Frekuensi</th>
							<th>Probabilitas</th>
							<th>Kumulatif</th>
							<th>Interval</th>
							<th>Angka Acak</th>
							<th>Hasil Simulasi <?= $_SESSION['tahun_hasilMD'] ?>			
						</th>
						<th>Data Real <?= $_SESSION['tahun_data_realMD'] ?></th>
						<th>Tingkat Akurasi</th>
					</tr>
				</thead>
				<tbody>
					<?php $no = 1; for ($i=0; $i < count($bulan) ; $i++) : ?>
					<tr class="text-center">
						<th <?= $no >= 4 && $no <= 10 ?"style='border-left-color:red' " : "style='border-left-color:blue'"?> ><?= $no++; ?></th>
							<td class="text-start"><?=  $bulan[$i]; ?></td>
							<td><?= $_SESSION['convert_hasil_frekMD'][$i]; ?></td>
							<td><?= $_SESSION['convert_hasil_probMD'][$i] ?></td>
							<td> <?= $_SESSION['convert_hasil_kumuMD'][$i]; ?></td>
							<td><?= $_SESSION['convert_hasil_interMD'][$i] ?></td>
							<td> <?= $_SESSION['convert_hasil_acakMD'][$i] ?></td>
							<td> <?= $_SESSION['convert_hasil_MD'][$i] ?></td>
							<td>  <?= $_SESSION['convert_hasil_datarealMD'][$i]; ?></td>
							<td> <?= $_SESSION['convert_hasil_akurasiMD'][$i]; ?></td>	
						</tr>
					<?php endfor ?>
					<tr class="text-center">
						<th colspan="2" rowspan="3" style=" vertical-align: middle !important;">Total</th>
						<td><?= $_SESSION['total_hasil_frekMD']; ?></td>
						<td><?= $_SESSION['total_hasil_probMD']; ?></td>
						<td>-</td>
						<td>-</td>
						<td>-</td>
						<td><?= $_SESSION['total_hasil_simMD']; ?></td>
						<td> <?= $_SESSION['total_data_realMD'];  ?></td>
						<td><?= "{$_SESSION['total_akurasi_dhasil_MD']}%" ?></td>		
					</tr>
					<tr class="text-center">
						<td class="musimKemarau"><?= $_SESSION['total_dhasil_kemarau_MD'] ?></td>
						<td colspan="4"></td>
						<td><?= $_SESSION['total_dhasil_kemarau_MD']; ?></td>
						<td><?= $_SESSION['total_dreal_sim_kemarau_MD']; ?></td>
						<td><?= "{$_SESSION['total_akurasi_dhasil_kemarau_MD']}%"; ?></td>
					</tr>
					<tr class="text-center">
						<td class="musimHujan"><?= $_SESSION['total_dhasil_hujan_MD'] ?></td>
						<td colspan="4"></td>
						<td><?= $_SESSION['total_dhasil_hujan_MD']; ?></td>
						<td><?= $_SESSION['total_dreal_sim_hujan_MD']; ?></td>
						<td><?= "{$_SESSION['total_akurasi_dhasil_kemarau_MD']}%"; ?></td>
					</tr>
					<tr class="text-center">
						<th class="text-center" colspan="2" rowspan="3"  style=" vertical-align: middle !important;">Rata-rata</th>
						<td> <?= $_SESSION['rata2_hasilfrekMD']; ?></td>
						<td class="text-center" colspan="4">-</td>
						<td><?= $_SESSION['rata2_hasil_simMD']; ?></td>
						<td><?= $_SESSION['rata2_hasil_realMD']; ?></td>
						<td> <?= "{$_SESSION['rata2_hasil_akurasiMD']}%"; ?></td>
					</tr>
					<tr class="text-center">
						<td class="musimKemarau"><?= $_SESSION['rata2_dhasil_frek_kemarau_MD']; ?></td>
						<td colspan="4"></td>
						<td><?= $_SESSION['rata2_dhasil_sim_kemarau_MD']; ?></td>
						<td><?= $_SESSION['rata2_dhasil_real_sim_kemarau_MD']; ?></td>
						<td><?= "{$_SESSION['rata2_akurasi_dhasil_sim_kemarau_MD']}%"; ?></td>
					</tr>
					<tr class="text-center">
						<td class="musimHujan"><?= $_SESSION['rata2_dhasil_frek_hujan_MD']; ?></td>
						<td colspan="4"></td>
						<td><?= $_SESSION['rata2_dhasil_sim_hujan_MD']; ?></td>
						<td><?= $_SESSION['rata2_dhasil_real_sim_hujan_MD']; ?></td>
						<td><?= "{$_SESSION['rata2_akurasi_dhasil_sim_hujan_MD']}%"; ?></td>
					</tr>
				</tbody>
			</table>

			<script>
				window.print();
			</script>									
		</body>
		</html>
	<?php 	endif; ?>


	<!-- Luka Berat -->
	<?php 	if($_GET['id_convert'] === "LB") : ?>

		<!DOCTYPE html>
		<html lang="en">
		<head>
			<meta charset="UTF-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<title>Print</title>
			<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
			<style>	

				.musimKemarau{
					border-left: 3px solid red !important;

				}

				.musimHujan{
					border-left: 3px solid blue !important;
				}

				@media print{ 
					@page {
						margin-top: 30px;
						margin-bottom: 30px;
					}
				}

			</style>	
		</head>
		<body>
			<table class="table table-bordered">
				<caption class="caption-top text-center mb-2">Data Hasil Simulasi Luka Berat <?=  $_SESSION['tahun_hasilLB']; ?></caption>
				<caption>								
					<ul style="list-style-type:square;">
						<li style="color: blue;"><span style="color: gray;">Musim Hujan<span></li>
							<li style="color: red;"><span style="color: gray;">Musim Kemarau<span></li>
							</ul> 
						</caption>
						<thead>
							<tr class="text-center" style=" vertical-align: middle !important;">
								<th>No</th>
								<th>Bulan</th>
								<th>Frekuensi</th>
								<th>Probabilitas</th>
								<th>Kumulatif</th>
								<th>Interval</th>
								<th>Angka Acak</th>
								<th>Hasil Simulasi <?= $_SESSION['tahun_hasilLB'] ?>			
							</th>
							<th>Data Real <?= $_SESSION['tahun_data_realLB'] ?></th>
							<th>Tingkat Akurasi</th>
						</tr>
					</thead>
					<tbody>
						<?php $no = 1; for ($i=0; $i < count($bulan) ; $i++) : ?>
						<tr class="text-center">
							<th <?= $no >= 4 && $no <= 10 ?"style='border-left-color:red' " : "style='border-left-color:blue'"?> ><?= $no++; ?></th>
								<td class="text-start"><?=  $bulan[$i]; ?></td>
								<td><?= $_SESSION['convert_hasil_frekLB'][$i]; ?></td>
								<td><?= $_SESSION['convert_hasil_probLB'][$i] ?></td>
								<td> <?= $_SESSION['convert_hasil_kumuLB'][$i]; ?></td>
								<td><?= $_SESSION['convert_hasil_interLB'][$i] ?></td>
								<td> <?= $_SESSION['convert_hasil_acakLB'][$i] ?></td>
								<td> <?= $_SESSION['convert_hasil_LB'][$i] ?></td>
								<td>  <?= $_SESSION['convert_hasil_datarealLB'][$i]; ?></td>
								<td> <?= $_SESSION['convert_hasil_akurasiLB'][$i]; ?></td>	
							</tr>
						<?php endfor ?>
						<tr class="text-center">
							<th colspan="2" rowspan="3" style=" vertical-align: middle !important;">Total</th>
							<td><?= $_SESSION['total_hasil_frekLB']; ?></td>
							<td><?= $_SESSION['total_hasil_probLB']; ?></td>
							<td>-</td>
							<td>-</td>
							<td>-</td>
							<td><?= $_SESSION['total_hasil_simLB']; ?></td>
							<td> <?= $_SESSION['total_data_realLB'];  ?></td>
							<td><?= "{$_SESSION['total_akurasi_dhasil_LB']}%" ?></td>		
						</tr>
						<tr class="text-center">
							<td class="musimKemarau"><?= $_SESSION['total_dhasil_kemarau_LB'] ?></td>
							<td colspan="4"></td>
							<td><?= $_SESSION['total_dhasil_kemarau_LB']; ?></td>
							<td><?= $_SESSION['total_dreal_sim_kemarau_LB']; ?></td>
							<td><?= "{$_SESSION['total_akurasi_dhasil_kemarau_LB']}%"; ?></td>
						</tr>
						<tr class="text-center">
							<td class="musimHujan"><?= $_SESSION['total_dhasil_hujan_LB'] ?></td>
							<td colspan="4"></td>
							<td><?= $_SESSION['total_dhasil_hujan_LB']; ?></td>
							<td><?= $_SESSION['total_dreal_sim_hujan_LB']; ?></td>
							<td><?= "{$_SESSION['total_akurasi_dhasil_kemarau_LB']}%"; ?></td>
						</tr>
						<tr class="text-center">
							<th class="text-center" colspan="2" rowspan="3"  style=" vertical-align: middle !important;">Rata-rata</th>
							<td> <?= $_SESSION['rata2_hasilfrekLB']; ?></td>
							<td class="text-center" colspan="4">-</td>
							<td><?= $_SESSION['rata2_hasil_simLB']; ?></td>
							<td><?= $_SESSION['rata2_hasil_realLB']; ?></td>
							<td> <?= "{$_SESSION['rata2_hasil_akurasiLB']}%"; ?></td>
						</tr>
						<tr class="text-center">
							<td class="musimKemarau"><?= $_SESSION['rata2_dhasil_frek_kemarau_LB']; ?></td>
							<td colspan="4"></td>
							<td><?= $_SESSION['rata2_dhasil_sim_kemarau_LB']; ?></td>
							<td><?= $_SESSION['rata2_dhasil_real_sim_kemarau_LB']; ?></td>
							<td><?= "{$_SESSION['rata2_akurasi_dhasil_sim_kemarau_LB']}%"; ?></td>
						</tr>
						<tr class="text-center">
							<td class="musimHujan"><?= $_SESSION['rata2_dhasil_frek_hujan_LB']; ?></td>
							<td colspan="4"></td>
							<td><?= $_SESSION['rata2_dhasil_sim_hujan_LB']; ?></td>
							<td><?= $_SESSION['rata2_dhasil_real_sim_hujan_LB']; ?></td>
							<td><?= "{$_SESSION['rata2_akurasi_dhasil_sim_hujan_LB']}%"; ?></td>
						</tr>
					</tbody>
				</table>

				<script>
					window.print();
				</script>									
			</body>
			</html>
		<?php 	endif; ?>



		<!-- Luka Ringan -->
		<?php 	if($_GET['id_convert'] === "LR") : ?>

			<!DOCTYPE html>
			<html lang="en">
			<head>
				<meta charset="UTF-8">
				<meta name="viewport" content="width=device-width, initial-scale=1.0">
				<title>Print</title>
				<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
				<style>	

					.musimKemarau{
						border-left: 3px solid red !important;

					}

					.musimHujan{
						border-left: 3px solid blue !important;
					}

					@media print{ 
						@page {
							margin-top: 30px;
							margin-bottom: 30px;
						}
					}

				</style>	
			</head>
			<body>
				<table class="table table-bordered">
					<caption class="caption-top text-center mb-2">Data Hasil Simulasi Luka Ringan <?=  $_SESSION['tahun_hasilLR']; ?></caption>
					<caption>								
						<ul style="list-style-type:square;">
							<li style="color: blue;"><span style="color: gray;">Musim Hujan<span></li>
								<li style="color: red;"><span style="color: gray;">Musim Kemarau<span></li>
								</ul> 
							</caption>
							<thead>
								<tr class="text-center" style=" vertical-align: middle !important;">
									<th>No</th>
									<th>Bulan</th>
									<th>Frekuensi</th>
									<th>Probabilitas</th>
									<th>Kumulatif</th>
									<th>Interval</th>
									<th>Angka Acak</th>
									<th>Hasil Simulasi <?= $_SESSION['tahun_hasilLR'] ?>			
								</th>
								<th>Data Real <?= $_SESSION['tahun_data_realLR'] ?></th>
								<th>Tingkat Akurasi</th>
							</tr>
						</thead>
						<tbody>
							<?php $no = 1; for ($i=0; $i < count($bulan) ; $i++) : ?>
							<tr class="text-center">
								<th <?= $no >= 4 && $no <= 10 ?"style='border-left-color:red' " : "style='border-left-color:blue'"?> ><?= $no++; ?></th>
									<td class="text-start"><?=  $bulan[$i]; ?></td>
									<td><?= $_SESSION['convert_hasil_frekLR'][$i]; ?></td>
									<td><?= $_SESSION['convert_hasil_probLR'][$i] ?></td>
									<td> <?= $_SESSION['convert_hasil_kumuLR'][$i]; ?></td>
									<td><?= $_SESSION['convert_hasil_interLR'][$i] ?></td>
									<td> <?= $_SESSION['convert_hasil_acakLR'][$i] ?></td>
									<td> <?= $_SESSION['convert_hasil_LR'][$i] ?></td>
									<td>  <?= $_SESSION['convert_hasil_datarealLR'][$i]; ?></td>
									<td> <?= $_SESSION['convert_hasil_akurasiLR'][$i]; ?></td>	
								</tr>
							<?php endfor ?>
							<tr class="text-center">
								<th colspan="2" rowspan="3" style=" vertical-align: middle !important;">Total</th>
								<td><?= $_SESSION['total_hasil_frekLR']; ?></td>
								<td><?= $_SESSION['total_hasil_probLR']; ?></td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td><?= $_SESSION['total_hasil_simLR']; ?></td>
								<td> <?= $_SESSION['total_data_realLR'];  ?></td>
								<td><?= "{$_SESSION['total_akurasi_dhasil_LR']}%" ?></td>		
							</tr>
							<tr class="text-center">
								<td class="musimKemarau"><?= $_SESSION['total_dhasil_kemarau_LR'] ?></td>
								<td colspan="4"></td>
								<td><?= $_SESSION['total_dhasil_kemarau_LR']; ?></td>
								<td><?= $_SESSION['total_dreal_sim_kemarau_LR']; ?></td>
								<td><?= "{$_SESSION['total_akurasi_dhasil_kemarau_LR']}%"; ?></td>
							</tr>
							<tr class="text-center">
								<td class="musimHujan"><?= $_SESSION['total_dhasil_hujan_LR'] ?></td>
								<td colspan="4"></td>
								<td><?= $_SESSION['total_dhasil_hujan_LR']; ?></td>
								<td><?= $_SESSION['total_dreal_sim_hujan_LR']; ?></td>
								<td><?= "{$_SESSION['total_akurasi_dhasil_kemarau_LR']}%"; ?></td>
							</tr>
							<tr class="text-center">
								<th class="text-center" colspan="2" rowspan="3"  style=" vertical-align: middle !important;">Rata-rata</th>
								<td> <?= $_SESSION['rata2_hasilfrekLR']; ?></td>
								<td class="text-center" colspan="4">-</td>
								<td><?= $_SESSION['rata2_hasil_simLR']; ?></td>
								<td><?= $_SESSION['rata2_hasil_realLR']; ?></td>
								<td> <?= "{$_SESSION['rata2_hasil_akurasiLR']}%"; ?></td>
							</tr>
							<tr class="text-center">
								<td class="musimKemarau"><?= $_SESSION['rata2_dhasil_frek_kemarau_LR']; ?></td>
								<td colspan="4"></td>
								<td><?= $_SESSION['rata2_dhasil_sim_kemarau_LR']; ?></td>
								<td><?= $_SESSION['rata2_dhasil_real_sim_kemarau_LR']; ?></td>
								<td><?= "{$_SESSION['rata2_akurasi_dhasil_sim_kemarau_LR']}%"; ?></td>
							</tr>
							<tr class="text-center">
								<td class="musimHujan"><?= $_SESSION['rata2_dhasil_frek_hujan_LR']; ?></td>
								<td colspan="4"></td>
								<td><?= $_SESSION['rata2_dhasil_sim_hujan_LR']; ?></td>
								<td><?= $_SESSION['rata2_dhasil_real_sim_hujan_LR']; ?></td>
								<td><?= "{$_SESSION['rata2_akurasi_dhasil_sim_hujan_LR']}%"; ?></td>
							</tr>
						</tbody>
					</table>

					<script>
						window.print();
					</script>									
				</body>
				</html>
				<?php 	endif; ?>