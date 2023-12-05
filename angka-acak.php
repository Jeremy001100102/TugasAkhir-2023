<?php 
// session_start();
// if (!isset($_SESSION['login'])) {
// 	header("Location: login.php");
// }

//rumus zi + 1 = (a.zi + c) mod m
define("a_MD", 21); //konstanta pengali
define("c_MD", 25); //konstanta pergeseran
define("m_MD", 99); //konstanta modulus
define("zi_MD", 61);

//Meninggal Dunia
$_SESSION['angkaAcakMD'] = [];
function angkaAcak_MD($a = 21, $c=25, $m=99, $zi=61){
	global $bulan;
	//Angka Acak Meninggal Dunia
	$angka_acakMD = [];
	$temp_MD = 0;
	for($i=0; $i < count($bulan); $i++) { 
		$temp_MD = ($a * $zi + $c) % $m;
		$angka_acakMD[$i] =  $temp_MD;
		$zi = $temp_MD; 
	}

	return $angka_acakMD;
}

//Luka Berat
//rumus zi + 1 = (a.zi + c) mod m
define("a_LB", 60); //konstanta pengali
define("c_LB", 12); //konstanta pergeseran
define("m_LB", 99); //konstanta modulus
define("zi_LB", 76);

$_SESSION['angkaAcakLB'] = [];
function angkaAcak_LB($a = 60, $c=12, $m=99, $zi=76){
	global $bulan;
	//Angka Acak Luka Berat
	$angka_acakLB = [];
	$temp_LB = 0;
	for($i=0; $i < count($bulan); $i++) { 
		$temp_LB = ($a * $zi + $c) % $m;
		$angka_acakLB[$i] =  $temp_LB;
		$zi = $temp_LB; 
	}

	return $angka_acakLB;
}


//Luka Ringan
//rumus zi + 1 = (a.zi + c) mod m
define("a_LR", 85); //konstanta pengali
define("c_LR", 94); //konstanta pergeseran
define("m_LR", 99); //konstanta modulus
define("zi_LR", 58);

$_SESSION['angkaAcakLR'] = [];
function angkaAcak_LR($a = 85, $c=94, $m=99, $zi=58){
	global $bulan;
	//Angka Acak Luka Ringan
	$angka_acakLR = [];
	$temp_LR = 0;
	for($i=0; $i < count($bulan); $i++) { 
		$temp_LR = ($a * $zi + $c) % $m;
		$angka_acakLR[$i] =  $temp_LR;
		$zi = $temp_LR; 
	}

	return $angka_acakLR;
}





 	require "tampil-angka-acak.php"; 
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
						<div class="row">
							<div class="col text-end">
								<a href="#"  class="btn btn-sm btn-dark shadow-sm d-inline" data-toggle="modal" data-target="#acak-dataMD" data-backdrop="static" data-keyboard="false"><i class="fa-solid fa-shuffle"></i> Angka Acak</a>
							</div>							
						</div>
						<table class="table table-bordered">
							<caption class="caption-top text-center">Data Meninggal Dunia <?=  $_SESSION['hitung_tahundataMentahMD']; ?></caption>
							<caption class="caption-top">								
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
										</tr>
									</thead>
									<tbody>
										<?php $no = 1; for ($i=0; $i < count($bulan) ; $i++) : ?>
										<tr>
											<th class="text-center" <?= $no >= 4 && $no <= 10 ?"style='border-left-color:red' " : "style='border-left-color:blue'"?>><?= $no++; ?></th>
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
								<div class="row">
									<div class="col text-end">
										<a href="#"  class="btn btn-sm btn-dark shadow-sm d-inline" data-toggle="modal" data-target="#acak-dataLB" data-backdrop="static" data-keyboard="false"><i class="fa-solid fa-shuffle"></i> Angka Acak</a>
									</div>							
								</div>
								<table class="table table-bordered">
									<caption class="caption-top text-center">Data Luka Berat <?=  $_SESSION['hitung_tahundataMentahLB']; ?></caption>
									<caption class="caption-top">								
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
												</tr>
											</thead>
											<tbody>
												<?php $no = 1; for ($i=0; $i < count($bulan) ; $i++) : ?>
												<tr>
													<th class="text-center" <?= $no >= 4 && $no <= 10 ?"style='border-left-color:red' " : "style='border-left-color:blue'"?>><?= $no++; ?></th>
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
										<div class="row">
											<div class="col text-end">
												<a href="#"  class="btn btn-sm btn-dark shadow-sm d-inline" data-toggle="modal" data-target="#acak-dataLR" data-backdrop="static" data-keyboard="false"><i class="fa-solid fa-shuffle"></i> Angka Acak</a>
											</div>							
										</div>
										<table class="table table-bordered">
											<caption class="caption-top text-center">Data Luka Ringan <?=  $_SESSION['hitung_tahundataMentahLR']; ?></caption>
											<caption class="caption-top">								
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
														</tr>
													</thead>
													<tbody>
														<?php $no = 1; for ($i=0; $i < count($bulan) ; $i++) : ?>
														<tr>
															<th class="text-center" <?= $no >= 4 && $no <= 10 ?"style='border-left-color:red' " : "style='border-left-color:blue'"?>><?= $no++; ?></th>
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

						


