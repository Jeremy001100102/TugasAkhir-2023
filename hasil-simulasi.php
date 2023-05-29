<?php 
//Hasil Simulasi MD
$_SESSION['hasil_simulasiMD'] = [];
$_SESSION['total_hasilMD'] = 0;
$_SESSION['total_dataRealMD'] = 0;
$_SESSION['hitung_datarealMD'] = [];
for ($i=0; $i < count($bulan); $i++) { 
	$temp = 0;
	for ($j=0; $j < count($bulan); $j++) { 
		if($_SESSION['angkaAcakMD'][$i] >= $_SESSION['batas_awalMD'][$j] && $_SESSION['angkaAcakMD'][$i] <= $_SESSION['batas_akhirMD'][$j]){
			$temp = $_SESSION['hitung_convertMentahMD'][$j];
		}
	}
	$_SESSION['total_hasilMD'] += $temp;
	$_SESSION['hasil_simulasiMD'][$i] = (int) $temp;
	$_SESSION['total_dataRealMD'] += (int) $_SESSION['hitung_convertRealMD'][$i];
	$_SESSION['hitung_datarealMD'][$i] = (int) $_SESSION['hitung_convertRealMD'][$i];
}

//Hasil Simulasi Luka Berat
$_SESSION['hasil_simulasiLB'] = [];
$_SESSION['total_hasilLB'] = 0;
$_SESSION['total_dataRealLB'] = 0;
$_SESSION['hitung_datarealLB'] = [];
for ($i=0; $i < count($bulan); $i++) { 
	$temp = 0;
	for ($j=0; $j < count($bulan); $j++) { 
		if($_SESSION['angkaAcakLB'][$i] >= $_SESSION['batas_awalLB'][$j] && $_SESSION['angkaAcakLB'][$i] <= $_SESSION['batas_akhirLB'][$j]){
			$temp = $_SESSION['hitung_convertMentahLB'][$j];
		}
	}
	$_SESSION['total_hasilLB'] += $temp;
	$_SESSION['hasil_simulasiLB'][$i] = (int) $temp;
	$_SESSION['total_dataRealLB'] += (int) $_SESSION['hitung_convertRealLB'][$i];
	$_SESSION['hitung_datarealLB'][$i] = (int) $_SESSION['hitung_convertRealLB'][$i];
}

//Hasil Simulasi Luka Ringan
$_SESSION['hasil_simulasiLR'] = [];
$_SESSION['total_hasilLR'] = 0;
$_SESSION['total_dataRealLR'] = 0;
for ($i=0; $i < count($bulan); $i++) { 
	$temp = 0;
	for ($j=0; $j < count($bulan); $j++) { 
		if($_SESSION['angkaAcakLR'][$i] >= $_SESSION['batas_awalLR'][$j] && $_SESSION['angkaAcakLR'][$i] <= $_SESSION['batas_akhirLR'][$j]){
			$temp = $_SESSION['hitung_convertMentahLR'][$j];
		}
	}
	$_SESSION['total_hasilLR'] += $temp;
	$_SESSION['hasil_simulasiLR'][$i] = (int) $temp;
	$_SESSION['total_dataRealLR'] += (int) $_SESSION['hitung_convertRealLR'][$i];
	$_SESSION['hitung_datarealLR'][$i] = (int) $_SESSION['hitung_convertRealLR'][$i];
}

//Tingkat Akurasi Meninggal Dunia
$_SESSION['convert_presentaseMD'] = [];
$akurasiMD = [];
$_SESSION['total_presentaseMD'] = 0;
for ($i=0; $i < count($bulan) ; $i++) { 
	if($_SESSION['hitung_datarealMD'][$i] <= $_SESSION['hasil_simulasiMD'][$i]){
		$akurasiMD[$i] = $_SESSION['hitung_datarealMD'][$i] / $_SESSION['hasil_simulasiMD'][$i] * 100;
	}else if($_SESSION['hasil_simulasiMD'][$i] <= $_SESSION['hitung_datarealMD'][$i]){
		$akurasiMD[$i] =  $_SESSION['hasil_simulasiMD'][$i] / $_SESSION['hitung_datarealMD'][$i] * 100;
	}
	$_SESSION['convert_presentaseMD'][$i] = (int) round($akurasiMD[$i]);
	$_SESSION['total_presentaseMD'] += $_SESSION['convert_presentaseMD'][$i]; 
}

//Tingkat Akurasi Luka Berat
$_SESSION['convert_presentaseLB'] = [];
$akurasiLB = [];
$_SESSION['total_presentaseLB'] = 0;
for ($i=0; $i < count($bulan) ; $i++) { 
	if($_SESSION['hitung_datarealLB'][$i] <= $_SESSION['hasil_simulasiLB'][$i]){
		$akurasiLB[$i] = $_SESSION['hitung_datarealLB'][$i] / $_SESSION['hasil_simulasiLB'][$i] * 100;
	}else if($_SESSION['hasil_simulasiLB'][$i] <= $_SESSION['hitung_datarealLB'][$i]){
		$akurasiLB[$i] =  $_SESSION['hasil_simulasiLB'][$i] / $_SESSION['hitung_datarealLB'][$i] * 100;
	}
	$_SESSION['convert_presentaseLB'][$i] = (int) round($akurasiLB[$i]);
	$_SESSION['total_presentaseLB'] += $_SESSION['convert_presentaseLB'][$i];

}

//Tingkat Akurasi Luka Ringan
$_SESSION['convert_presentaseLR'] = [];
$akurasiLR = [];
$_SESSION['total_presentaseLR'] = 0;
for ($i=0; $i < count($bulan) ; $i++) { 
	if($_SESSION['hitung_datarealLR'][$i] <= $_SESSION['hasil_simulasiLR'][$i]){
		$akurasiLR[$i] = $_SESSION['hitung_datarealLR'][$i] / $_SESSION['hasil_simulasiLR'][$i] * 100;
	}else if($_SESSION['hasil_simulasiLR'][$i] <= $_SESSION['hitung_datarealLR'][$i]){
		$akurasiLR[$i] =  $_SESSION['hasil_simulasiLR'][$i] / $_SESSION['hitung_datarealLR'][$i] * 100;
	}
	$_SESSION['convert_presentaseLR'][$i] = (int) round($akurasiLR[$i]);
	$_SESSION['total_presentaseLR'] += $_SESSION['convert_presentaseLR'][$i]; 
}



?>

<div class="position-relative mt-4">
	<div class="accordion w-100 position-absolute top-0 start-50 translate-middle-x" id="accordionExample">
		<div class="accordion-item">
			<h2 class="accordion-header" id="headingOne">
				<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
					<h5>Meninggal</h5>
				</button>
			</h2>
			<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
				<div class="accordion-body">
					<div class="position-relative">
						<table class="table table-bordered">
							<caption class="caption-top text-center">Data Meninggal Dunia <?=  $_SESSION['hitung_tahundataMentahMD']; ?></caption>
							<thead>
								<tr class="text-center">
									<th>#</th>
									<th>Bulan</th>
									<th>Frekuensi</th>
									<th>Probabilitas</th>
									<th>Kumulatif</th>
									<th>Interval</th>
									<th>Angka Acak</th>
									<th>Hasil Simulasi <?= $_SESSION['hitung_tahundataRealMD'] ?></th>
									<th>Data Real <?= $_SESSION['hitung_tahundataRealMD'] ?></th>
									<th>Tingkat Akurasi</th>
								</tr>
							</thead>
							<tbody>
								<?php $no = 1; for ($i=0; $i < count($bulan) ; $i++) : ?>
								<tr>
									<th class="text-center"><?= $no++; ?></th>
									<td><?=  $bulan[$i]; ?></td>
									<td><?= $_SESSION['hitung_convertMentahMD'][$i]; ?></td>
									<td><?= $_SESSION['convert_probMD'][$i] ?></td>	
									<td><?= $_SESSION['kumuMD'][$i]; ?></td>
									<td class="text-center"><?= $_SESSION['convert_intervalMD'][$i] ?></td>
									<td class="text-center"><?= $_SESSION['angkaAcakMD'][$i] ?></td>
									<td><?= $_SESSION['hasil_simulasiMD'][$i] ?></td>
									<td><?= $_SESSION['hitung_convertRealMD'][$i]; ?></td>
									<td><?= "{$_SESSION['convert_presentaseMD'][$i]}%"; ?></td>	
								</tr>
							<?php endfor ?>
							<tr>
								<th class="text-center" colspan="2">Total</th>
								<td><?= $_SESSION['jumlahFrekuensiMD']; ?></td>
								<td><?= $_SESSION['jumlah_probMD'];?></td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td><?= $_SESSION['total_hasilMD']  ?></td>
								<td><?= $_SESSION['total_dataRealMD']  ?></td>
								<td>-</td>		
							</tr>
							<tr>
								<th class="text-center" colspan="2">Rata-rata</th>
								<td><?= round($_SESSION['jumlahFrekuensiMD'] / count($bulan)); ?></td>
								<td class="text-center" colspan="4">-</td>
								<td><?=	round($_SESSION['total_hasilMD'] / count($bulan)); ?></td>
								<td><?=	round($_SESSION['total_dataRealMD'] / count($bulan)); ?></td>
								<td><?=	round($_SESSION['total_presentaseMD'] / count($bulan)); ?></td>
							</tr>
						</tbody>
					</table>
				</div>
				</div>
			</div>
		</div>
		<div class="accordion-item">
			<h2 class="accordion-header" id="headingTwo">
				<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
					<h5>Luka Berat</h5>
				</button>
			</h2>	
			<div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
				<div class="accordion-body">
					<div class="position-relative">
						<table class="table table-bordered">
							<caption class="caption-top text-center">Data Luka Berat <?=  $_SESSION['hitung_tahundataMentahLB']; ?></caption>
							<thead>
								<tr class="text-center">
									<th>#</th>
									<th>Bulan</th>
									<th>Frekuensi</th>
									<th>Probabilitas</th>
									<th>Kumulatif</th>
									<th>Interval</th>
									<th>Angka Acak</th>
									<th>Hasil Simulasi <?= $_SESSION['hitung_tahundataRealLB'] ?></th>
									<th>Data Real <?= $_SESSION['hitung_tahundataRealLB'] ?></th>
									<th>Tingkat Akurasi</th>
								</tr>
							</thead>
							<tbody>
								<?php $no = 1; for ($i=0; $i < count($bulan) ; $i++) : ?>
								<tr>
									<th class="text-center"><?= $no++; ?></th>
									<td><?=  $bulan[$i]; ?></td>
									<td><?= $_SESSION['hitung_convertMentahLB'][$i]; ?></td>
									<td><?= $_SESSION['convert_probLB'][$i] ?></td>	
									<td><?= $_SESSION['kumuLB'][$i]; ?></td>
									<td class="text-center"><?= $_SESSION['convert_intervalLB'][$i] ?></td>
									<td class="text-center"><?= $_SESSION['angkaAcakLB'][$i] ?></td>
									<td><?= $_SESSION['hasil_simulasiLB'][$i] ?></td>
									<td><?= $_SESSION['hitung_convertRealLB'][$i]; ?></td>
									<td><?= "{$_SESSION['convert_presentaseLB'][$i]}%"	?></td>	
								</tr>
							<?php endfor ?>
							<tr>
								<th class="text-center" colspan="2">Total</th>
								<td><?= $_SESSION['jumlahFrekuensiLB']; ?></td>
								<td><?= $_SESSION['jumlah_probLB'];?></td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td><?= $_SESSION['total_hasilLB']  ?></td>
								<td><?= $_SESSION['total_dataRealLB']  ?></td>
								<td>-</td>
							</tr>
							<tr>
								<th class="text-center" colspan="2">Rata-rata</th>
								<td><?= round($_SESSION['jumlahFrekuensiLB'] / count($bulan)); ?></td>
								<td class="text-center" colspan="4">-</td>
								<td><?=	round($_SESSION['total_hasilLB'] / count($bulan)); ?></td>
								<td><?=	round($_SESSION['total_dataRealLB'] / count($bulan)); ?></td>
								<td><?=	round($_SESSION['total_presentaseLB'] / count($bulan)); ?></td>
							</tr>
						</tbody>
					</table>
				</div>
				</div>
			</div>
		</div>
		<div class="accordion-item">
			<h2 class="accordion-header" id="headingThree">
				<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
					<h5>Luka Ringan</h5>
				</button>
			</h2>
			<div id="collapseThree" class="accordion-collapse collapse show" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
				<div class="accordion-body">
					<div class="position-relative">
						<table class="table table-bordered">
							<caption class="caption-top text-center">Data Luka Ringan <?=  $_SESSION['hitung_tahundataMentahLR']; ?></caption>
							<thead>
								<tr class="text-center">
									<th>#</th>
									<th>Bulan</th>
									<th>Frekuensi</th>
									<th>Probabilitas</th>
									<th>Kumulatif</th>
									<th>Interval</th>
									<th>Angka Acak</th>
									<th>Hasil Simulasi <?= $_SESSION['hitung_tahundataRealLR'] ?></th>
									<th>Data Real <?= $_SESSION['hitung_tahundataRealLR'] ?></th>
									<th>Tingkat Akurasi</th>
								</tr>
							</thead>
							<tbody>
								<?php $no = 1; for ($i=0; $i < count($bulan) ; $i++) : ?>
								<tr>
									<th class="text-center"><?= $no++; ?></th>
									<td><?=  $bulan[$i]; ?></td>
									<td><?= $_SESSION['hitung_convertMentahLR'][$i]; ?></td>
									<td><?= $_SESSION['convert_probLR'][$i] ?></td>	
									<td><?= $_SESSION['kumuLR'][$i]; ?></td>
									<td class="text-center"><?= $_SESSION['convert_intervalLR'][$i]?></td>
									<td class="text-center"><?= $_SESSION['angkaAcakLR'][$i] ?></td>
									<td><?= $_SESSION['hasil_simulasiLR'][$i] ?></td>
									<td><?= $_SESSION['hitung_convertRealLR'][$i]; ?></td>
									<td><?= "{$_SESSION['convert_presentaseLR'][$i]}%"; ?></td>	
								</tr>
							<?php endfor ?>
							<tr>
								<th class="text-center" colspan="2">Total</th>
								<td><?= $_SESSION['jumlahFrekuensiLR']; ?></td>
								<td><?= $_SESSION['jumlah_probLR'];?></td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td><?= $_SESSION['total_hasilLR']  ?></td>
								<td><?= $_SESSION['total_dataRealLR']  ?></td>
								<td>-</td>	
							</tr>
							<tr>
								<th class="text-center" colspan="2">Rata-rata</th>
								<td><?= round($_SESSION['jumlahFrekuensiLR'] / count($bulan)); ?></td>
								<td class="text-center" colspan="4">-</td>
								<td><?=	round($_SESSION['total_hasilLR'] / count($bulan)); ?></td>
								<td><?=	round($_SESSION['total_dataRealLR'] / count($bulan)); ?></td>
								<td><?=	round($_SESSION['total_presentaseLR'] / count($bulan)); ?></td>
							</tr>
						</tbody>
					</table>
					</div>		
				</div>
			</div>
		</div>
	</div>
</div>



