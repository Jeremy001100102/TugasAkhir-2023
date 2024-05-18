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
			<caption class="caption-top text-center mb-2">Data Hasil Simulasi Meninggal Dunia <?= $_SESSION['tahun_uji_MD']; ?></caption>
			<caption>								
				<ul style="list-style-type:square;">
					<li style="color: blue;"><span style="color: gray;">Musim Hujan<span></li>
						<li style="color: red;"><span style="color: gray;">Musim Kemarau<span></li>
						</ul> 
					</caption>
					<thead>
						<tr class="text-center">
							<th>No</th>
							<th>Bulan</th>
							<th>Angka Acak</th>
							<th>Hasil Simulasi <?= $_SESSION['tahun_uji_MD']; ?></th>
							<th>Data Real <?= $_SESSION['tahun_uji_MD']; ?></th>
							<th>Tingkat Akurasi</th>
						</tr>
					</thead>
					<tbody>
						<?php $no = 1; for ($i=0; $i < count($bulan) ; $i++) : ?>
						<tr class="text-center">
							<th <?= $no >= 5 && $no <= 10 ?"style='border-left-color:red' " : "style='border-left-color:blue'"?> ><?= $no++; ?></th>
								<td class="text-start"><?=  $bulan[$i]; ?></td>
								<td> <?= $_SESSION['angkaAcakMD'][$bulan[$i]] ?> </td>
								<td> <?= $_SESSION['hasilS_MD'][$bulan[$i]] ?></td>
								<td>  <?= $_SESSION['frek_MD'][$bulan[$i]]; ?></td>
								<td> <?= "{$_SESSION['akurasiMD'][$bulan[$i]]}%" ?></td>	
							</tr>
						<?php endfor ?>
						<tr class="text-center">
							<th colspan="3" rowspan="3" style=" vertical-align: middle !important;">Total</th>
							<td><?= $_SESSION['total_hasilS_MD']; ?></td>
							<td><?= $_SESSION['total_dataR_MD']; ?></td>
							<td><?= "{$_SESSION['akurasi_tahun_MD']}%"; ?></td>		
						</tr>
						<tr class="text-center">
							<td class="musimKemarau"><?= $_SESSION['total_hasilS_Kemarau_MD']; ?></td>
							<td><?= $_SESSION['total_dataR_Kemarau_MD']; ?></td>
							<td><?= "{$_SESSION['akurasi_Kemarau_MD']}%"; ?></td>
						</tr>
						<tr class="text-center">
							<td class="musimHujan"><?= $_SESSION['total_hasilS_Hujan_MD']; ?></td>
							<td><?= $_SESSION['total_dataR_Hujan_MD']; ?></td>
							<td><?= "{$_SESSION['akurasi_Hujan_MD']}%"; ?></td>
						</tr>
						<tr class="text-center">
							<th class="text-center" colspan="3" rowspan="3"  style=" vertical-align: middle !important;">Rata-rata</th>
							<td><?= $_SESSION['rata2_total_hasilS_MD']; ?></td>
							<td><?= $_SESSION['rata2_total_dataR_MD']; ?></td>
							<td><?= "{$_SESSION['rata2_akurasi_tahun_MD']}%"; ?></td>
						</tr>
						<tr class="text-center">
							<td class="musimKemarau"><?= $_SESSION['rata2_total_hasilS_Kemarau_MD']; ?></td>
							<td><?= $_SESSION['rata2_total_dataR_Kemarau_MD']; ?></td>
							<td><?= "{$_SESSION['rata2_akurasi_Kemarau_MD']}%"; ?></td>
						</tr>
						<tr class="text-center">
							<td class="musimHujan"><?= $_SESSION['rata2_total_hasilS_Hujan_MD'];?></td>
							<td><?= $_SESSION['rata2_total_dataR_Hujan_MD'];?></td>
							<td><?= "{$_SESSION['rata2_akurasi_Hujan_MD']}%";?></td>
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
					<caption class="caption-top text-center mb-2">Data Hasil Simulasi Luka Berat <?= $_SESSION['tahun_uji_LB']; ?></caption>
					<caption>								
						<ul style="list-style-type:square;">
							<li style="color: blue;"><span style="color: gray;">Musim Hujan<span></li>
								<li style="color: red;"><span style="color: gray;">Musim Kemarau<span></li>
								</ul> 
							</caption>
							<thead>
								<tr class="text-center">	
									<th>Bulan</th>
									<th>Angka Acak</th>
									<th>Hasil Simulasi <?= $_SESSION['tahun_uji_LB']; ?></th>
									<th>Data Real <?= $_SESSION['tahun_uji_LB']; ?></th>
									<th>Tingkat Akurasi</th>
								</tr>
							</thead>
							<tbody>
								<?php $no = 1; for ($i=0; $i < count($bulan) ; $i++) : ?>
								<tr class="text-center">
									<th <?= $no >= 5 && $no <= 10 ?"style='border-left-color:red' " : "style='border-left-color:blue'"?> ><?= $no++; ?></th>
										<td class="text-start"><?=  $bulan[$i]; ?></td>
										<td> <?= $_SESSION['angkaAcakLB'][$bulan[$i]] ?> </td>
										<td> <?= $_SESSION['hasilS_LB'][$bulan[$i]] ?></td>
										<td>  <?= $_SESSION['frek_LB'][$bulan[$i]]; ?></td>
										<td> <?= "{$_SESSION['akurasiLB'][$bulan[$i]]}%" ?></td>	
									</tr>
								<?php endfor ?>
								<tr class="text-center">
									<th colspan="3" rowspan="3" style=" vertical-align: middle !important;">Total</th>
									<td><?= $_SESSION['total_hasilS_LB']; ?></td>
									<td><?= $_SESSION['total_dataR_LB']; ?></td>
									<td><?= "{$_SESSION['akurasi_tahun_LB']}%"; ?></td>		
								</tr>
								<tr class="text-center">
									<td class="musimKemarau"><?= $_SESSION['total_hasilS_Kemarau_LB']; ?></td>
									<td><?= $_SESSION['total_dataR_Kemarau_LB']; ?></td>
									<td><?= "{$_SESSION['akurasi_Kemarau_LB']}%"; ?></td>
								</tr>
								<tr class="text-center">
									<td class="musimHujan"><?= $_SESSION['total_hasilS_Hujan_LB']; ?></td>
									<td><?= $_SESSION['total_dataR_Hujan_LB']; ?></td>
									<td><?= "{$_SESSION['akurasi_Hujan_LB']}%"; ?></td>
								</tr>
								<tr class="text-center">
									<th class="text-center" colspan="3" rowspan="3"  style=" vertical-align: middle !important;">Rata-rata</th>
									<td><?= $_SESSION['rata2_total_hasilS_LB']; ?></td>
									<td><?= $_SESSION['rata2_total_dataR_LB']; ?></td>
									<td><?= "{$_SESSION['rata2_akurasi_tahun_LB']}%"; ?></td>
								</tr>
								<tr class="text-center">
									<td class="musimKemarau"><?= $_SESSION['rata2_total_hasilS_Kemarau_LB']; ?></td>
									<td><?= $_SESSION['rata2_total_dataR_Kemarau_LB']; ?></td>
									<td><?= "{$_SESSION['rata2_akurasi_Kemarau_LB']}%"; ?></td>
								</tr>
								<tr class="text-center">
									<td class="musimHujan"><?= $_SESSION['rata2_total_hasilS_Hujan_LB'];?></td>
									<td><?= $_SESSION['rata2_total_dataR_Hujan_LB'];?></td>
									<td><?= "{$_SESSION['rata2_akurasi_Hujan_LB']}%";?></td>
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
							<caption class="caption-top text-center mb-2">Data Hasil Simulasi Luka Ringan <?= $_SESSION['tahun_uji_LR']; ?></caption>
							<caption>								
								<ul style="list-style-type:square;">
									<li style="color: blue;"><span style="color: gray;">Musim Hujan<span></li>
										<li style="color: red;"><span style="color: gray;">Musim Kemarau<span></li>
										</ul> 
									</caption>
									<thead>
										<tr>	
											<th>Bulan</th>
											<th>Angka Acak</th>
											<th>Hasil Simulasi <?= $_SESSION['tahun_uji_LR']; ?></th>
											<th>Data Real <?= $_SESSION['tahun_uji_LR']; ?></th>
											<th>Tingkat Akurasi</th>
										</tr>
									</thead>
									<tbody>
										<?php $no = 1; for ($i=0; $i < count($bulan) ; $i++) : ?>
										<tr class="text-center">
											<th <?= $no >= 5 && $no <= 10 ?"style='border-left-color:red' " : "style='border-left-color:blue'"?> ><?= $no++; ?></th>
												<td class="text-start"><?=  $bulan[$i]; ?></td>
												<td> <?= $_SESSION['angkaAcakLR'][$bulan[$i]] ?> </td>
												<td> <?= $_SESSION['hasilS_LR'][$bulan[$i]] ?></td>
												<td>  <?= $_SESSION['frek_LR'][$bulan[$i]]; ?></td>
												<td> <?= "{$_SESSION['akurasiLR'][$bulan[$i]]}%" ?></td>	
											</tr>
										<?php endfor ?>
										<tr class="text-center">
											<th colspan="3" rowspan="3" style=" vertical-align: middle !important;">Total</th>
											<td><?= $_SESSION['total_hasilS_LR']; ?></td>
											<td><?= $_SESSION['total_dataR_LR']; ?></td>
											<td><?= "{$_SESSION['akurasi_tahun_LR']}%"; ?></td>		
										</tr>
										<tr class="text-center">
											<td class="musimKemarau"><?= $_SESSION['total_hasilS_Kemarau_LR']; ?></td>
											<td><?= $_SESSION['total_dataR_Kemarau_LR']; ?></td>
											<td><?= "{$_SESSION['akurasi_Kemarau_LR']}%"; ?></td>
										</tr>
										<tr class="text-center">
											<td class="musimHujan"><?= $_SESSION['total_hasilS_Hujan_LR']; ?></td>
											<td><?= $_SESSION['total_dataR_Hujan_LR']; ?></td>
											<td><?= "{$_SESSION['akurasi_Hujan_LR']}%"; ?></td>
										</tr>
										<tr class="text-center">
											<th class="text-center" colspan="3" rowspan="3"  style=" vertical-align: middle !important;">Rata-rata</th>
											<td><?= $_SESSION['rata2_total_hasilS_LR']; ?></td>
											<td><?= $_SESSION['rata2_total_dataR_LR']; ?></td>
											<td><?= "{$_SESSION['rata2_akurasi_tahun_LR']}%"; ?></td>
										</tr>
										<tr class="text-center">
											<td class="musimKemarau"><?= $_SESSION['rata2_total_hasilS_Kemarau_LR']; ?></td>
											<td><?= $_SESSION['rata2_total_dataR_Kemarau_LR']; ?></td>
											<td><?= "{$_SESSION['rata2_akurasi_Kemarau_LR']}%"; ?></td>
										</tr>
										<tr class="text-center">
											<td class="musimHujan"><?= $_SESSION['rata2_total_hasilS_Hujan_LR'];?></td>
											<td><?= $_SESSION['rata2_total_dataR_Hujan_LR'];?></td>
											<td><?= "{$_SESSION['rata2_akurasi_Hujan_LR']}%";?></td>
										</tr>
									</tbody>
								</table>

								<script>
									window.print();
								</script>									
							</body>
							</html>
							<?php 	endif; ?>