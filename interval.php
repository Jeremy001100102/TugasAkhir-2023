<?php 
//interval Meninggal
$batas_minMD = [];
$batas_maxMD = [];
$_SESSION['convert_intervalMD'] = [];
for ($i=0; $i < count($bulan); $i++) { 
	if ($i == 0) {
		$batas_minMD[$i] = 0;
		$batas_maxMD[$i] = (int) ($_SESSION['kumuMD'][$i] * 100);
	}else{
		$batas_minMD[$i] = $batas_maxMD[$i-1] + 1;
		$batas_maxMD[$i] = (int) ($_SESSION['kumuMD'][$i] * 100);  
	}

	$_SESSION['convert_intervalMD'][$i] = "{$batas_minMD[$i]}  -  {$batas_maxMD[$i]}";
}

//interval Luka Berat
$batas_minLB = [];
$batas_maxLB = [];
$_SESSION['convert_intervalLB'] = [];
for ($i=0; $i < count($bulan); $i++) { 
	if ($i == 0) {
		$batas_minLB[$i] = 0;
		$batas_maxLB[$i] = (int) ($_SESSION['kumuLB'][$i] * 100);
	}else{
		$batas_minLB[$i] = $batas_maxLB[$i-1] + 1;
		$batas_maxLB[$i] = (int) ($_SESSION['kumuLB'][$i] * 100);  
	}

	$_SESSION['convert_intervalLB'][$i] = "{$batas_minLB[$i]}  -  {$batas_maxLB[$i]}";
}

//interval Luka Ringan
$batas_minLR = [];
$batas_maxLR = [];
$_SESSION['convert_intervalLR'] = [];
for ($i=0; $i < count($bulan); $i++) { 
	if ($i == 0) {
		$batas_minLR[$i] = 0;
		$batas_maxLR[$i] = (int) ($_SESSION['kumuLR'][$i] * 100);
	}else{
		$batas_minLR[$i] = $batas_maxLR[$i-1] + 1;
		$batas_maxLR[$i] = (int) ($_SESSION['kumuLR'][$i] * 100);  
	}

	$_SESSION['convert_intervalLR'][$i] = "{$batas_minLR[$i]}  -  {$batas_maxLR[$i]}";
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
								</tr>
							<?php endfor ?>
							<tr>
								<th class="text-center" colspan="2">Total</th>
								<td><?= $_SESSION['jumlahFrekuensiMD']; ?></td>
								<td><?= $_SESSION['jumlah_probMD'];?></td>
								<td>-</td>
								<td>-</td>	
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
								</tr>
							<?php endfor ?>
							<tr>
								<th class="text-center" colspan="2">Total</th>
								<td><?= $_SESSION['jumlahFrekuensiLB']; ?></td>
								<td><?= $_SESSION['jumlah_probLB'];?></td>
								<td>-</td>
								<td>-</td>
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
								</tr>
							<?php endfor ?>
							<tr>
								<th class="text-center" colspan="2">Total</th>
								<td><?= $_SESSION['jumlahFrekuensiLR']; ?></td>
								<td><?= $_SESSION['jumlah_probLR'];?></td>
								<td>-</td>
								<td>-</td>
							</tr>
						</tbody>
					</table>
					</div>		
				</div>
			</div>
		</div>
	</div>
</div>
