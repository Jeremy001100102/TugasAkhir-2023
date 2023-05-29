<?php 
//rumus zi + 1 = (a.zi + c) mod m
define("a", 10); //konstanta pengali
define("c", 17); //konstanta pergeseran
define("m", 99); //konstanta modulus

//Angka Acak Meninggal Dunia
$zi_MD = 15;
$_SESSION['angkaAcakMD'] = [];
$temp_MD = 0;
for($i=0; $i < count($bulan); $i++) { 
	$temp_MD = (a * $zi_MD + c) % m;
	$_SESSION['angkaAcakMD'][$i] =  $temp_MD;
	$zi_MD = $temp_MD; 
}

//Angka Acak Luka Berat
$zi_LB = 15;
$_SESSION['angkaAcakLB'] = [];
$temp_LB = 0;
for($i=0; $i < count($bulan); $i++) { 
	$temp_LB = (a * $zi_LB + c) % m;
	$_SESSION['angkaAcakLB'][$i] =  $temp_LB;
	$zi_LB = $temp_LB; 
}

//Angka Acak Luka Ringan
$zi_LR = 15;
$_SESSION['angkaAcakLR'] = [];
$temp_LR = 0;
for($i=0; $i < count($bulan); $i++) { 
	$temp_LR = (a * $zi_LR + c) % m;
	$_SESSION['angkaAcakLR'][$i] =  $temp_LR;
	$zi_LR = $temp_LR; 
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
								</tr>
							<?php endfor ?>
							<tr>
								<th class="text-center" colspan="2">Total</th>
								<td><?= $_SESSION['jumlahFrekuensiMD']; ?></td>
								<td><?= $_SESSION['jumlah_probMD'];?></td>
								<td>-</td>
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
									<th>Angka Acak</th>
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
								</tr>
							<?php endfor ?>
							<tr>
								<th class="text-center" colspan="2">Total</th>
								<td><?= $_SESSION['jumlahFrekuensiLB']; ?></td>
								<td><?= $_SESSION['jumlah_probLB'];?></td>
								<td>-</td>
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
									<th>Angka Acak</th>
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
								</tr>
							<?php endfor ?>
							<tr>
								<th class="text-center" colspan="2">Total</th>
								<td><?= $_SESSION['jumlahFrekuensiLR']; ?></td>
								<td><?= $_SESSION['jumlah_probLR'];?></td>
								<td>-</td>
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



