<?php 
require_once "functions.php"; 
session_start();
if (!isset($_SESSION['login'])) {
	header("Location: login.php");
}

//data bulan
$bulan = ["Januari","Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
$musim_kemarau = ["April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober"];
$musim_hujan = ["Januari","Februari", "Maret","November", "Desember"];

//data hasil
$dataMeninggal = data_hasilMeninggal();
$datalukaBerat = data_hasillukaBerat();
$datalukaRingan = data_hasillukaRingan();	


//Meninggal Dunia
if(isset($_SESSION['convert_hasil_frekMD'])){
//total hasil musim kemarau dan hujan MD
	$_SESSION['total_dhasil_kemarau_MD'] = 0;
	$_SESSION['total_dhasil_hujan_MD'] = 0;
	$_SESSION['total_dhasil_sim_kemarau_MD'] = 0;
	$_SESSION['total_dhasil_sim_hujan_MD'] = 0;
	$_SESSION['total_dreal_sim_kemarau_MD'] = 0;
	$_SESSION['total_dreal_sim_hujan_MD'] = 0;
	$_SESSION['total_dhasil_akurasi_kemarau_MD'] = 0;
	$_SESSION['total_dhasil_akurasi_hujan_MD'] = 0;
	for ($i=0; $i < count($bulan); $i++) { 
		if($i >= 3 && $i <=9 ){
			$_SESSION['total_dhasil_kemarau_MD'] += $_SESSION['convert_hasil_frekMD'][$i];
			$_SESSION['total_dhasil_sim_kemarau_MD'] += $_SESSION['convert_hasil_MD'][$i];
			$_SESSION['total_dreal_sim_kemarau_MD'] += $_SESSION['convert_hasil_datarealMD'][$i];
			$_SESSION['total_dhasil_akurasi_kemarau_MD'] += (int) $_SESSION['convert_hasil_akurasiMD'][$i];
		}else{
			$_SESSION['total_dhasil_hujan_MD'] += $_SESSION['convert_hasil_frekMD'][$i];
			$_SESSION['total_dhasil_sim_hujan_MD'] += $_SESSION['convert_hasil_MD'][$i];
			$_SESSION['total_dreal_sim_hujan_MD'] += $_SESSION['convert_hasil_datarealMD'][$i];
			$_SESSION['total_dhasil_akurasi_hujan_MD'] += (int) $_SESSION['convert_hasil_akurasiMD'][$i];
		}
	}

//tingkat akurasi total MD
	$_SESSION['total_akurasi_dhasil_MD'] = 0;
	$_SESSION['total_akurasi_dhasil_MD'] = $_SESSION['total_hasil_simMD'] <= $_SESSION['total_data_realMD'] ? round($_SESSION['total_hasil_simMD'] / $_SESSION['total_data_realMD'] * 100) : round($_SESSION['total_data_realMD'] / $_SESSION['total_hasil_simMD'] * 100);
//tingkat akurasi total musim kemarau dan hujan MD 
	$_SESSION['total_akurasi_dhasil_kemarau_MD'] = 0; 
	$_SESSION['total_akurasi_dhasil_hujan_MD'] = 0;
	$_SESSION['total_akurasi_dhasil_kemarau_MD'] = $_SESSION['total_dhasil_sim_kemarau_MD'] <= $_SESSION['total_dreal_sim_kemarau_MD'] ? round($_SESSION['total_dhasil_sim_kemarau_MD'] / $_SESSION['total_dreal_sim_kemarau_MD'] * 100) : round($_SESSION['total_dreal_sim_kemarau_MD'] / $_SESSION['total_dhasil_sim_kemarau_MD'] * 100);
	$_SESSION['total_akurasi_dhasil_hujan_MD'] = $_SESSION['total_dhasil_sim_hujan_MD'] <= $_SESSION['total_dreal_sim_hujan_MD'] ? round($_SESSION['total_dhasil_sim_hujan_MD'] / $_SESSION['total_dreal_sim_hujan_MD'] * 100) : round($_SESSION['total_dreal_sim_hujan_MD'] / $_SESSION['total_dhasil_sim_hujan_MD'] * 100);
//rata2 musim kemarau dan hujan
	$_SESSION['rata2_dhasil_frek_kemarau_MD'] = 0;
	$_SESSION['rata2_dhasil_frek_hujan_MD'] = 0;
	$_SESSION['rata2_dhasil_sim_kemarau_MD'] = 0;
	$_SESSION['rata2_dhasil_sim_hujan_MD'] = 0;
	$_SESSION['rata2_dhasil_real_sim_kemarau_MD'] = 0;
	$_SESSION['rata2_dhasil_real_sim_hujan_MD'] = 0;
	$_SESSION['rata2_akurasi_dhasil_sim_kemarau_MD'] = 0;
	$_SESSION['rata2_akurasi_dhasil_sim_hujan_MD'] = 0;

	$_SESSION['rata2_dhasil_frek_kemarau_MD'] = round($_SESSION['total_dhasil_kemarau_MD'] / count($musim_kemarau));
	$_SESSION['rata2_dhasil_frek_hujan_MD'] = round($_SESSION['total_dhasil_hujan_MD'] / count($musim_hujan));
	$_SESSION['rata2_dhasil_sim_kemarau_MD'] = round($_SESSION['total_dhasil_sim_kemarau_MD'] / count($musim_kemarau));  
	$_SESSION['rata2_dhasil_sim_hujan_MD'] = round($_SESSION['total_dhasil_sim_hujan_MD'] / count($musim_hujan)); 
	$_SESSION['rata2_dhasil_real_sim_kemarau_MD'] = round($_SESSION['total_dreal_sim_kemarau_MD'] / count($musim_kemarau)); 
	$_SESSION['rata2_dhasil_real_sim_hujan_MD'] = round($_SESSION['total_dreal_sim_hujan_MD'] / count($musim_hujan));
	$_SESSION['rata2_akurasi_dhasil_sim_kemarau_MD'] = round($_SESSION['total_dhasil_akurasi_kemarau_MD'] / count($musim_kemarau));
	$_SESSION['rata2_akurasi_dhasil_sim_hujan_MD'] = round($_SESSION['total_dhasil_akurasi_hujan_MD'] / count($musim_hujan));
}



//Luka Berat
if(isset($_SESSION['convert_hasil_frekLB'])){
//total hasil musim kemarau dan hujan LB
	$_SESSION['total_dhasil_kemarau_LB'] = 0;
	$_SESSION['total_dhasil_hujan_LB'] = 0;
	$_SESSION['total_dhasil_sim_kemarau_LB'] = 0;
	$_SESSION['total_dhasil_sim_hujan_LB'] = 0;
	$_SESSION['total_dreal_sim_kemarau_LB'] = 0;
	$_SESSION['total_dreal_sim_hujan_LB'] = 0;
	$_SESSION['total_dhasil_akurasi_kemarau_LB'] = 0;
	$_SESSION['total_dhasil_akurasi_hujan_LB'] = 0;
	for ($i=0; $i < count($bulan); $i++) { 
		if($i >= 3 && $i <=9 ){
			$_SESSION['total_dhasil_kemarau_LB'] += $_SESSION['convert_hasil_frekLB'][$i];
			$_SESSION['total_dhasil_sim_kemarau_LB'] += $_SESSION['convert_hasil_LB'][$i];
			$_SESSION['total_dreal_sim_kemarau_LB'] += $_SESSION['convert_hasil_datarealLB'][$i];
			$_SESSION['total_dhasil_akurasi_kemarau_LB'] += (int) $_SESSION['convert_hasil_akurasiLB'][$i];
		}else{
			$_SESSION['total_dhasil_hujan_LB'] += $_SESSION['convert_hasil_frekLB'][$i];
			$_SESSION['total_dhasil_sim_hujan_LB'] += $_SESSION['convert_hasil_LB'][$i];
			$_SESSION['total_dreal_sim_hujan_LB'] += $_SESSION['convert_hasil_datarealLB'][$i];
			$_SESSION['total_dhasil_akurasi_hujan_LB'] += (int) $_SESSION['convert_hasil_akurasiLB'][$i];
		}
	}

//tingkat akurasi total LB
	$_SESSION['total_akurasi_dhasil_LB'] = 0;
	$_SESSION['total_akurasi_dhasil_LB'] = $_SESSION['total_hasil_simLB'] <= $_SESSION['total_data_realLB'] ? round($_SESSION['total_hasil_simLB'] / $_SESSION['total_data_realLB'] * 100) : round($_SESSION['total_data_realLB'] / $_SESSION['total_hasil_simLB'] * 100);
//tingkat akurasi total musim kemarau dan hujan LB 
	$_SESSION['total_akurasi_dhasil_kemarau_LB'] = 0; 
	$_SESSION['total_akurasi_dhasil_hujan_LB'] = 0;
	$_SESSION['total_akurasi_dhasil_kemarau_LB'] = $_SESSION['total_dhasil_sim_kemarau_LB'] <= $_SESSION['total_dreal_sim_kemarau_LB'] ? round($_SESSION['total_dhasil_sim_kemarau_LB'] / $_SESSION['total_dreal_sim_kemarau_LB'] * 100) : round($_SESSION['total_dreal_sim_kemarau_LB'] / $_SESSION['total_dhasil_sim_kemarau_LB'] * 100);
	$_SESSION['total_akurasi_dhasil_hujan_LB'] = $_SESSION['total_dhasil_sim_hujan_LB'] <= $_SESSION['total_dreal_sim_hujan_LB'] ? round($_SESSION['total_dhasil_sim_hujan_LB'] / $_SESSION['total_dreal_sim_hujan_LB'] * 100) : round($_SESSION['total_dreal_sim_hujan_LB'] / $_SESSION['total_dhasil_sim_hujan_LB'] * 100);
//rata2 musim kemarau dan hujan
	$_SESSION['rata2_dhasil_frek_kemarau_LB'] = 0;
	$_SESSION['rata2_dhasil_frek_hujan_LB'] = 0;
	$_SESSION['rata2_dhasil_sim_kemarau_LB'] = 0;
	$_SESSION['rata2_dhasil_sim_hujan_LB'] = 0;
	$_SESSION['rata2_dhasil_real_sim_kemarau_LB'] = 0;
	$_SESSION['rata2_dhasil_real_sim_hujan_LB'] = 0;
	$_SESSION['rata2_akurasi_dhasil_sim_kemarau_LB'] = 0;
	$_SESSION['rata2_akurasi_dhasil_sim_hujan_LB'] = 0;

	$_SESSION['rata2_dhasil_frek_kemarau_LB'] = round($_SESSION['total_dhasil_kemarau_LB'] / count($musim_kemarau));
	$_SESSION['rata2_dhasil_frek_hujan_LB'] = round($_SESSION['total_dhasil_hujan_LB'] / count($musim_hujan));
	$_SESSION['rata2_dhasil_sim_kemarau_LB'] = round($_SESSION['total_dhasil_sim_kemarau_LB'] / count($musim_kemarau));  
	$_SESSION['rata2_dhasil_sim_hujan_LB'] = round($_SESSION['total_dhasil_sim_hujan_LB'] / count($musim_hujan)); 
	$_SESSION['rata2_dhasil_real_sim_kemarau_LB'] = round($_SESSION['total_dreal_sim_kemarau_LB'] / count($musim_kemarau)); 
	$_SESSION['rata2_dhasil_real_sim_hujan_LB'] = round($_SESSION['total_dreal_sim_hujan_LB'] / count($musim_hujan));
	$_SESSION['rata2_akurasi_dhasil_sim_kemarau_LB'] = round($_SESSION['total_dhasil_akurasi_kemarau_LB'] / count($musim_kemarau));
	$_SESSION['rata2_akurasi_dhasil_sim_hujan_LB'] = round($_SESSION['total_dhasil_akurasi_hujan_LB'] / count($musim_hujan));
}


//Luka Ringan
if(isset($_SESSION['convert_hasil_frekLR'])){
//total hasil musim kemarau dan hujan LR
	$_SESSION['total_dhasil_kemarau_LR'] = 0;
	$_SESSION['total_dhasil_hujan_LR'] = 0;
	$_SESSION['total_dhasil_sim_kemarau_LR'] = 0;
	$_SESSION['total_dhasil_sim_hujan_LR'] = 0;
	$_SESSION['total_dreal_sim_kemarau_LR'] = 0;
	$_SESSION['total_dreal_sim_hujan_LR'] = 0;
	$_SESSION['total_dhasil_akurasi_kemarau_LR'] = 0;
	$_SESSION['total_dhasil_akurasi_hujan_LR'] = 0;
	for ($i=0; $i < count($bulan); $i++) { 
		if($i >= 3 && $i <=9 ){
			$_SESSION['total_dhasil_kemarau_LR'] += $_SESSION['convert_hasil_frekLR'][$i];
			$_SESSION['total_dhasil_sim_kemarau_LR'] += $_SESSION['convert_hasil_LR'][$i];
			$_SESSION['total_dreal_sim_kemarau_LR'] += $_SESSION['convert_hasil_datarealLR'][$i];
			$_SESSION['total_dhasil_akurasi_kemarau_LR'] += (int) $_SESSION['convert_hasil_akurasiLR'][$i];
		}else{
			$_SESSION['total_dhasil_hujan_LR'] += $_SESSION['convert_hasil_frekLR'][$i];
			$_SESSION['total_dhasil_sim_hujan_LR'] += $_SESSION['convert_hasil_LR'][$i];
			$_SESSION['total_dreal_sim_hujan_LR'] += $_SESSION['convert_hasil_datarealLR'][$i];
			$_SESSION['total_dhasil_akurasi_hujan_LR'] += (int) $_SESSION['convert_hasil_akurasiLR'][$i];
		}
	}

//tingkat akurasi total LR
	$_SESSION['total_akurasi_dhasil_LR'] = 0;
	$_SESSION['total_akurasi_dhasil_LR'] = $_SESSION['total_hasil_simLR'] <= $_SESSION['total_data_realLR'] ? round($_SESSION['total_hasil_simLR'] / $_SESSION['total_data_realLR'] * 100) : round($_SESSION['total_data_realLR'] / $_SESSION['total_hasil_simLR'] * 100);
//tingkat akurasi total musim kemarau dan hujan LR 
	$_SESSION['total_akurasi_dhasil_kemarau_LR'] = 0; 
	$_SESSION['total_akurasi_dhasil_hujan_LR'] = 0;
	$_SESSION['total_akurasi_dhasil_kemarau_LR'] = $_SESSION['total_dhasil_sim_kemarau_LR'] <= $_SESSION['total_dreal_sim_kemarau_LR'] ? round($_SESSION['total_dhasil_sim_kemarau_LR'] / $_SESSION['total_dreal_sim_kemarau_LR'] * 100) : round($_SESSION['total_dreal_sim_kemarau_LR'] / $_SESSION['total_dhasil_sim_kemarau_LR'] * 100);
	$_SESSION['total_akurasi_dhasil_hujan_LR'] = $_SESSION['total_dhasil_sim_hujan_LR'] <= $_SESSION['total_dreal_sim_hujan_LR'] ? round($_SESSION['total_dhasil_sim_hujan_LR'] / $_SESSION['total_dreal_sim_hujan_LR'] * 100) : round($_SESSION['total_dreal_sim_hujan_LR'] / $_SESSION['total_dhasil_sim_hujan_LR'] * 100);
//rata2 musim kemarau dan hujan
	$_SESSION['rata2_dhasil_frek_kemarau_LR'] = 0;
	$_SESSION['rata2_dhasil_frek_hujan_LR'] = 0;
	$_SESSION['rata2_dhasil_sim_kemarau_LR'] = 0;
	$_SESSION['rata2_dhasil_sim_hujan_LR'] = 0;
	$_SESSION['rata2_dhasil_real_sim_kemarau_LR'] = 0;
	$_SESSION['rata2_dhasil_real_sim_hujan_LR'] = 0;
	$_SESSION['rata2_akurasi_dhasil_sim_kemarau_LR'] = 0;
	$_SESSION['rata2_akurasi_dhasil_sim_hujan_LR'] = 0;

	$_SESSION['rata2_dhasil_frek_kemarau_LR'] = round($_SESSION['total_dhasil_kemarau_LR'] / count($musim_kemarau));
	$_SESSION['rata2_dhasil_frek_hujan_LR'] = round($_SESSION['total_dhasil_hujan_LR'] / count($musim_hujan));
	$_SESSION['rata2_dhasil_sim_kemarau_LR'] = round($_SESSION['total_dhasil_sim_kemarau_LR'] / count($musim_kemarau));  
	$_SESSION['rata2_dhasil_sim_hujan_LR'] = round($_SESSION['total_dhasil_sim_hujan_LR'] / count($musim_hujan)); 
	$_SESSION['rata2_dhasil_real_sim_kemarau_LR'] = round($_SESSION['total_dreal_sim_kemarau_LR'] / count($musim_kemarau)); 
	$_SESSION['rata2_dhasil_real_sim_hujan_LR'] = round($_SESSION['total_dreal_sim_hujan_LR'] / count($musim_hujan));
	$_SESSION['rata2_akurasi_dhasil_sim_kemarau_LR'] = round($_SESSION['total_dhasil_akurasi_kemarau_LR'] / count($musim_kemarau));
	$_SESSION['rata2_akurasi_dhasil_sim_hujan_LR'] = round($_SESSION['total_dhasil_akurasi_hujan_LR'] / count($musim_hujan));
}
?>


<?php 	require "layout/header.php" ?>

<div class="row">
	<div class="col-6">
		<h3>Data Hasil Simulasi</h3>
	</div>
	<div class="col-6 text-end">
		<a href="#" class="btn btn-sm btn-danger shadow-sm" data-toggle="modal" data-target="#hapus-data-hasilAll" data-backdrop="static" data-keyboard="false"><i class="fa-solid fa-trash-can"></i> Hapus Semua Data</a>
	</div>
</div>

<div class="position-relative mt-4">
	<div class="accordion w-100 position-absolute top-0 start-50 translate-middle-x" id="accordionExample">
		<div class="accordion-item">
			<h2 class="accordion-header" id="headingOne">
				<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
					<h5>Meninggal</h5>
				</button>
			</h2>
			<div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
				<div class="accordion-body">
					<?php if($count_dataHS[2]['nama'] == "Meninggal" && $count_dataHS[2]['jumlah'] > 0) : ?>
						<div class="position-relative">
							<div class="row">
								<div class="col-4">
									<div class="dropdown d-inline">
										<button class="btn btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
											Tahun
										</button>
										<ul class="dropdown-menu">
											<?php foreach ($dataMeninggal as $key) : ?>
												<li><a class="dropdown-item" href="tables.php?id_hasilMD=<?= $key['id'] ?>"><?= $key['tahun_hasil_simulasi'] ?></a></li>
											<?php endforeach; ?>
										</ul>
									</div>
								</div>
								<div class="col-8 text-end">
									<?php if(isset($_SESSION['kondisi_hasilMD'])) : ?>
										<a href="#"  class="btn btn-sm btn-dark shadow-sm d-inline" data-toggle="modal" data-target="#exportdataMD" data-backdrop="static" data-keyboard="false"><i class="fa-solid fa-file-export"></i> Export</a>

										<a href="#"  class="btn btn-sm btn-dark shadow-sm d-inline" data-toggle="modal" data-target="#grafikMD" data-backdrop="static" data-keyboard="false"><i class="fa-solid fa-chart-pie "></i> Grafik</a>

										<a href="delete.php?id_hasil_hapusMD=<?= $_SESSION['id_hasiltampilMD']  ?>" class="btn btn-sm btn-dark shadow-sm d-inline"><i class="fa-solid fa-trash-can"></i> Delete</a>
									<?php endif; ?>
								</div>
							</div>
						</div>
						<?php if(isset($_SESSION['kondisi_hasilMD'])) : ?>
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
												<th>#</th>
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


							<?php else : ?>
								<em>Anda Belum Memilih Data Tahun Diatas!</em>
							<?php endif ?>
						<?php else : ?>
							<?php unset($_SESSION['kondisi_hasilMD']);  ?>
							<h6>Data Belum Ada</h6>
						<?php endif; ?>	
					</div>
				</div>
			</div>
			<div class="accordion-item">
				<h2 class="accordion-header" id="headingTwo">
					<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
						<h5>Luka Berat</h5>
					</button>
				</h2>	
				<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
					<div class="accordion-body">
						<?php if($count_dataHS[0]['nama'] == "Luka Berat" && $count_dataHS[0]['jumlah'] > 0) : ?>
							<div class="position-relative">
								<div class="row">
									<div class="col-4">
										<div class="dropdown d-inline">
											<button class="btn btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
												Tahun
											</button>
											<ul class="dropdown-menu">
												<?php foreach ($datalukaBerat as $key) : ?>
													<li><a class="dropdown-item" href="tables.php?id_hasilLB=<?= $key['id'] ?>"><?= $key['tahun_hasil_simulasi'] ?></a></li>
												<?php endforeach; ?>
											</ul>
										</div>
									</div>
									<div class="col-8 text-end">
										<?php if(isset($_SESSION['kondisi_hasilLB'])) : ?>
											<a href="#"  class="btn btn-sm btn-dark shadow-sm d-inline" data-toggle="modal" data-target="#exportdataLB" data-backdrop="static" data-keyboard="false"><i class="fa-solid fa-file-export"></i> Export</a>
											<a href="#"  class="btn btn-sm btn-dark shadow-sm d-inline" data-toggle="modal" data-target="#grafikLB" data-backdrop="static" data-keyboard="false"><i class="fa-solid fa-chart-pie"></i> Grafik</a>
											<a href="delete.php?id_hasil_hapusLB=<?= $_SESSION['id_hasiltampilLB']  ?>" class="btn btn-sm btn-dark shadow-sm d-inline"><i class="fa-solid fa-trash-can"></i> Delete</a>
										<?php endif; ?>
									</div>
								</div>
							</div>
							<?php if(isset($_SESSION['kondisi_hasilLB'])) : ?>

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
													<th>#</th>
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
												<th <?= $no >= 4 && $no <= 10 ?"style='border-left-color:red' " : "style='border-left-color:blue'"?>><?= $no++; ?></th>
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
								<?php else :  ?>
									<em>Anda Belum Memilih Data Tahun Diatas!</em>
								<?php endif ?>
							<?php else : ?>
								<?php unset($_SESSION['kondisi_hasilLB']);  ?>
								<h6>Data Belum Ada</h6>
							<?php endif; ?>
						</div>
					</div>
				</div>
				<div class="accordion-item">
					<h2 class="accordion-header" id="headingThree">
						<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
							<h5>Luka Ringan</h5>
						</button>
					</h2>
					<div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
						<div class="accordion-body">
							<?php if($count_dataHS[1]['nama'] == "Luka Ringan" && $count_dataHS[1]['jumlah'] > 0) : ?>
								<div class="position-relative">
									<div class="row">
										<div class="col-4">
											<div class="dropdown d-inline">
												<button class="btn btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
													Tahun
												</button>
												<ul class="dropdown-menu">
													<?php foreach ($datalukaRingan as $key) : ?>
														<li><a class="dropdown-item" href="tables.php?id_hasilLR=<?= $key['id'] ?>"><?= $key['tahun_hasil_simulasi'] ?></a></li>
													<?php endforeach; ?>
												</ul>
											</div>
										</div>
										<div class="col-8 text-end">
											<?php if(isset($_SESSION['kondisi_hasilLR'])) : ?>
												<a href="#"  class="btn btn-sm btn-dark shadow-sm d-inline" data-toggle="modal" data-target="#exportdataLR" data-backdrop="static" data-keyboard="false"><i class="fa-solid fa-file-export"></i> Export</a>
												<a href="#"  class="btn btn-sm btn-dark shadow-sm d-inline" data-toggle="modal" data-target="#grafikLR" data-backdrop="static" data-keyboard="false"><i class="fa-solid fa-chart-pie"></i> Grafik</a>
												<a href="delete.php?id_hasil_hapusLR=<?= $_SESSION['id_hasiltampilLR']  ?>" class="btn btn-sm btn-dark shadow-sm d-inline"><i class="fa-solid fa-trash-can"></i> Delete</a>
											<?php endif; ?>
										</div>
									</div>
								</div>
								<?php if(isset($_SESSION['kondisi_hasilLR'])) : ?>
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
														<th>#</th>
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
													<th <?= $no >= 4 && $no <= 10 ?"style='border-left-color:red' " : "style='border-left-color:blue'"?>><?= $no++; ?></th>
														<td class="text-start"><?=  $bulan[$i]; ?></td>
														<td><?= $_SESSION['convert_hasil_frekLR'][$i]; ?></td>
														<td><?= $_SESSION['convert_hasil_probLR'][$i]; ?></td>
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
									<?php else :  ?>
										<em>Anda Belum Memilih Data Tahun Diatas!</em>
									<?php endif ?>
								<?php else : ?>
									<?php unset($_SESSION['kondisi_hasilLR']);  ?>
									<h6>Data Belum Ada</h6>
								<?php endif; ?>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Modal Hapus Semua Data Hasil-->
			<div class="modal fade" id="hapus-data-hasilAll" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
			aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Anda yakin ingin hapus?</h5>
						<button class="close" type="button" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">×</span>
						</button>
					</div>
					<div class="modal-body">Pilih "Yes" dibawah ini jika anda ingin hapus semua data</div>
					<div class="modal-footer">
						<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
						<a class="btn btn-primary" href="delete.php?id_hapus-hasilAll=jeremy">Yes</a>
					</div>
				</div>
			</div>
		</div>

		<?php   
		if (isset($_SESSION['alert']) && $_SESSION['alert'] === "on") {
			echo "
			<script>
			Swal.fire({
				title: 'Berhasil!',
				text: '{$_SESSION['pesan']}',
				icon: 'success'
				});

				</script>
				";

				unset($_SESSION['alert']);
			} 
			if (isset($_SESSION['alert']) && $_SESSION['alert'] === "off") {
				echo "
				<script>
				Swal.fire({
					icon: 'error',
					title: 'Gagal!',
					text: '{$_SESSION['pesan']}'

					});
					</script>
					";
					unset($_SESSION['alert']);
				}

				?>
				<?php require "grafik.php"; ?>
				<?php require "export.php"; ?>
				<?php 	require "layout/footer.php" ?>

				<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
				<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
				<script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
				<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
				<script src="https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js"></script>
				<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
				<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
				<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
				<script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.html5.min.js"></script>
				<script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.print.min.js"></script>
				<script>
					$(document).ready(function(){
		//bookmark tampil data
						var hash = window.location.hash;
						if(hash){
							$(hash).collapse('show');
						}
						window.onload = function() {
							var bookmarks = window.location.hash.split('#');

							for (var i = 1; i < bookmarks.length; i++) {
								var bookmark = bookmarks[i];

            // Buka collapse dengan menggunakan identifikasi bookmark
								var collapse = document.getElementById(bookmark);
								if (collapse) {
									collapse.classList.add('show');
								}
							}
						};

		//Aksi saat accordion diklik
    //Menangkap semua elemen accordion button
						var accordionButtons = document.querySelectorAll('.accordion-button');

    //Loop melalui setiap button
						accordionButtons.forEach(function(button) {
        // Tambahkan event listener 'click' pada setiap button
							button.addEventListener('click', function() {
            // Dapatkan data-bs-target dari button yang diklik
								var target = this.getAttribute('data-bs-target');

            // Dapatkan bagian anchor dari data-bs-target
								var anchor = target.substring(1);

            // Perbarui URL dengan menambahkan bookmark sesuai dengan anchor
								window.location.hash = anchor;
							});
						});


       //order table
//         new DataTable('#exportMD','#exportLB', '#exportLR', {
//     columnDefs: [
//         {
//             targets: [0],
//             orderData: [0, 1]
//         },
//         {
//             targets: [1],
//             orderData: [1, 0]
//         },
//         {
//             targets: [9],
//             orderData: [9, 0]
//         }
//     ]
// });


     //export data
						// $('#exportMD').DataTable( {
						// 	dom: 'Bfrtip',
						// 	buttons: [
						// 		'excel', 'pdf', 'print'
						// 		]
						// } ); 

						// $('#exportLB').DataTable( {
						// 	dom: 'Bfrtip',
						// 	buttons: [
						// 		'excel', 'pdf', 'print'
						// 		]
						// } ); 

						// $('#exportLR').DataTable( {
						// 	dom: 'Bfrtip',
						// 	buttons: [
						// 		'excel', 'pdf', 'print'
						// 		]
						// } );         
					});
				</script>