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
						<tr class="text-center">
							<th>No</th>
							<th>Bulan</th>
							<th>Angka Acak</th>
							<th>Hasil Simulasi <?= $_SESSION['tahun_hasilMD'] ?></th>
							<th>Data Real <?= $_SESSION['tahun_hasilMD'] ?></th>
							<th>Tingkat Akurasi</th>
						</tr>
					</thead>
					<tbody>
						<?php $no = 1; for ($i=0; $i < count($bulan) ; $i++) : ?>
						<tr class="text-center">
							<th <?= $no >= 5 && $no <= 10 ?"style='border-left-color:red' " : "style='border-left-color:blue'"?> ><?= $no++; ?></th>
								<td class="text-start"><?=  $bulan[$i]; ?></td>
								<td> <?= $_SESSION['convert_hasil_acakMD'][$i] ?></td>
								<td> <?= $_SESSION['convert_hasil_MD'][$i] ?></td>
								<td>  <?= $_SESSION['convert_hasil_datarealMD'][$i]; ?></td>
								<td> <?= $_SESSION['convert_hasil_akurasiMD'][$i]; ?></td>	
							</tr>
						<?php endfor ?>
						<tr class="text-center">
							<th colspan="3" rowspan="3" style=" vertical-align: middle !important;">Total</th>
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
						<tr class="text-center">
							<th class="text-center" colspan="3" rowspan="3"  style=" vertical-align: middle !important;">Rata-rata</th>
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
								<tr class="text-center">
									<th>No</th>
									<th>Bulan</th>
									<th>Angka Acak</th>
									<th>Hasil Simulasi <?= $_SESSION['tahun_hasilLB'] ?></th>
									<th>Data Real <?= $_SESSION['tahun_hasilLB'] ?></th>
									<th>Tingkat Akurasi</th>
								</tr>
							</thead>
							<tbody>
								<?php $no = 1; for ($i=0; $i < count($bulan) ; $i++) : ?>
								<tr class="text-center">
									<th <?= $no >= 5 && $no <= 10 ?"style='border-left-color:red' " : "style='border-left-color:blue'"?> ><?= $no++; ?></th>
										<td class="text-start"><?=  $bulan[$i]; ?></td>
										<td> <?= $_SESSION['convert_hasil_acakLB'][$i] ?></td>
										<td> <?= $_SESSION['convert_hasil_LB'][$i] ?></td>
										<td>  <?= $_SESSION['convert_hasil_datarealLB'][$i]; ?></td>
										<td> <?= $_SESSION['convert_hasil_akurasiLB'][$i]; ?></td>	
									</tr>
								<?php endfor ?>
								<tr class="text-center">
									<th colspan="3" rowspan="3" style=" vertical-align: middle !important;">Total</th>
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
								<tr class="text-center">
									<th class="text-center" colspan="3" rowspan="3"  style=" vertical-align: middle !important;">Rata-rata</th>
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
										<tr class="text-center">
											<th>No</th>
											<th>Bulan</th>
											<th>Angka Acak</th>
											<th>Hasil Simulasi <?= $_SESSION['tahun_hasilLR'] ?></th>
											<th>Data Real <?= $_SESSION['tahun_hasilLR'] ?></th>
											<th>Tingkat Akurasi</th>
										</tr>
									</thead>
									<tbody>
										<?php $no = 1; for ($i=0; $i < count($bulan) ; $i++) : ?>
										<tr class="text-center">
											<th <?= $no >= 5 && $no <= 10 ?"style='border-left-color:red' " : "style='border-left-color:blue'"?> ><?= $no++; ?></th>
												<td class="text-start"><?=  $bulan[$i]; ?></td>
												<td> <?= $_SESSION['convert_hasil_acakLR'][$i] ?></td>
												<td> <?= $_SESSION['convert_hasil_LR'][$i] ?></td>
												<td>  <?= $_SESSION['convert_hasil_datarealLR'][$i]; ?></td>
												<td> <?= $_SESSION['convert_hasil_akurasiLR'][$i]; ?></td>	
											</tr>
										<?php endfor ?>
										<tr class="text-center">
											<th colspan="3" rowspan="3" style=" vertical-align: middle !important;">Total</th>
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
										<tr class="text-center">
											<th class="text-center" colspan="3" rowspan="3"  style=" vertical-align: middle !important;">Rata-rata</th>
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

								<script>
									window.print();
								</script>									
							</body>
							</html>
							<?php 	endif; ?>