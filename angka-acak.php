<?php 


//rumus zi + 1 = (a . zi + c) mod m
/*
Dimana :
a = Konstanta Pengali
c = Konstanta Pergeseran (c < m)
m = Konstanta Modulus (m > 0)
zi = Bilangan Awal (Bilangan Bulat >= 0, Z0 < m)

*/

//Meninggal Dunia
// const MD_a = 866, MD_c = 554, MD_m = 999;
// $zi = 2;
// $angka_acak = [];
// for ($i=0; $i < count($bulan); $i++) { 
// 	$temp = (MD_a * $zi + MD_c) % MD_m;
// 	$angka_acak[$bulan[$i]] = $temp;
// 	$zi = $temp;	  
// }

// var_dump($angka_acak);

//rumus zi + 1 = (a.zi + c) mod m
define("a_MD", 866); //konstanta pengali
define("c_MD", 544); //konstanta pergeseran
define("m_MD", 999); //konstanta modulus
define("zi_MD", 32);

//Meninggal Dunia
$_SESSION['angkaAcakMD'] = [];
function angkaAcak_MD($a = a_MD, $c= c_MD, $m= m_MD, $zi= zi_MD){
	global $bulan;
	//Angka Acak Meninggal Dunia
	$angka_acakMD = [];
	$temp_MD = 0;
	for($i=0; $i < count($bulan); $i++) { 
		$temp_MD = ($a * $zi + $c) % $m;
		$angka_acakMD[$bulan[$i]] =  $temp_MD;
		$zi = $temp_MD; 
	}

	return $angka_acakMD;
}

//Luka Berat
//rumus zi + 1 = (a.zi + c) mod m
define("a_LB", 600); //konstanta pengali
define("c_LB", 122); //konstanta pergeseran
define("m_LB", 999); //konstanta modulus
define("zi_LB", 76);

$_SESSION['angkaAcakLB'] = [];
function angkaAcak_LB($a = a_LB, $c= c_LB, $m=m_LB, $zi=zi_LB){
	global $bulan;
	//Angka Acak Luka Berat
	$angka_acakLB = [];
	$temp_LB = 0;
	for($i=0; $i < count($bulan); $i++) { 
		$temp_LB = ($a * $zi + $c) % $m;
		$angka_acakLB[$bulan[$i]] =  $temp_LB;
		$zi = $temp_LB; 
	}

	return $angka_acakLB;
}


//Luka Ringan
//rumus zi + 1 = (a.zi + c) mod m
define("a_LR", 855); //konstanta pengali
define("c_LR", 657); //konstanta pergeseran
define("m_LR", 999); //konstanta modulus
define("zi_LR", 21);

$_SESSION['angkaAcakLR'] = [];
function angkaAcak_LR($a = a_LR, $c=c_LR, $m=m_LR, $zi=zi_LR){
	global $bulan;
	//Angka Acak Luka Ringan
	$angka_acakLR = [];
	$temp_LR = 0;
	for($i=0; $i < count($bulan); $i++) { 
		$temp_LR = ($a * $zi + $c) % $m;
		$angka_acakLR[$bulan[$i]] =  $temp_LR;
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
					<div class="position-relative ">
						<div class="row">
							<div class="col-6 tex-start icon_utama" data-bs-toggle="collapse" data-bs-target=".MD_all">
								<span>Show All : </span><i class="fa-solid fa-plus"></i>
							</div>
							<div class="col-6 text-end">
								<a href="#"  class="btn btn-sm btn-dark shadow-sm d-inline" data-toggle="modal" data-target="#acak-dataMD" data-backdrop="static" data-keyboard="false"><i class="fa-solid fa-shuffle"></i> Angka Acak</a>
							</div>							
						</div>
						<!-- bulan january -->
						<table class="table mb-0">
							<caption class="caption-top text-center">Data Meninggal Dunia</caption>
							<thead>
								<tr class="table-dark text-center">
									<th colspan="5">Bulan</i></th>
									<th class="w-25">Angka Acak</th>	
								</tr>
							</thead>
							<tbody>
								<tr>
									<table class="table table-bordered table-sm accordion mb-0">
										<!-- <caption class="caption-top text-center">Data Meninggal Dunia</caption> -->
										<thead>
											<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#MDr1">
												<th colspan="5" style="border-left-color:blue;">Januari <i class="fa-solid fa-caret-down"></i></th>
												<th class="w-25 text-center"><?= $_SESSION['angkaAcakMD']['Januari'] ?></th>	
											</tr>
											<tr class="text-center collapse accordion-collapse MD_all"  id="MDr1" data-bs-parent=".table" >
												<th>No</th>
												<th>Bulan</th>
												<th>Frekuensi</th>
												<th>Probabilitas</th>
												<th>Kumulatif</th>
												<th>Interval Angka Acak</th>

											</tr>
										</thead>
										<tbody>	
											<?php $no = 1; for ($i=0; $i < count($_SESSION['dataMD_bulan']) ; $i++) : ?>
											<tr class="text-center collapse accordion-collapse MD_all" id="MDr1" data-bs-parent=".table" >
												<td><?= $no++; ?></td>
												<td class="text-justify">Januari <?= $_SESSION['tahunMD_bulan'][$i]; ?></td>
												<td><?= $_SESSION['dataMD_bulan'][$i]['Januari']['data_bulan'];  ?></td>
												<td><?= $_SESSION['prob_MD_Januari'][$i]; ?></td>
												<td><?= $_SESSION['kumu_Januari_MD'][$i]; ?></td>
												<td><?= $_SESSION['interval_MD_Januari'][$i]; ?></td>				
											</tr>

										<?php endfor; ?>	
										<tr class="text-center collapse accordion-collapse MD_all" id="MDr1" data-bs-parent=".table">
											<th colspan="2">Total</th>
											<td><?= $_SESSION['jumlahFrekuensiMD_Januari']; ?></td>
											<td><?= $_SESSION['jumlah_prob_Januari_MD'] ?></td>
										</tr>
									</tbody>
								</table>

								<!-- bulan February -->
								<table class="table table-bordered table-sm accordion mb-0">
									<!-- <caption class="caption-top text-center">Data Meninggal Dunia</caption> -->
									<thead>
										<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#MDr2">
											<th colspan="5" style="border-left-color:blue">Februari <i class="fa-solid fa-caret-down"></i></th>
											<th class="w-25 text-center"><?= $_SESSION['angkaAcakMD']['Februari'] ?></th>	
										</tr>
										<tr class="text-center collapse accordion-collapse MD_all"  id="MDr2" data-bs-parent=".table" >
											<th>No</th>
											<th>Bulan</th>
											<th>Frekuensi</th>
											<th>Probabilitas</th>
											<th>Kumulatif</th>
											<th>Interval Angka Acak</th>
										</tr>
									</thead>
									<tbody>
										<?php $no = 1; for ($i=0; $i < count($_SESSION['dataMD_bulan']) ; $i++) : ?>
										<tr class="text-center collapse accordion-collapse MD_all" id="MDr2" data-bs-parent=".table" >
											<td><?= $no++; ?></td>
											<td class="text-justify">Februari  <?= $_SESSION['tahunMD_bulan'][$i]; ?></td>
											<td><?= $_SESSION['dataMD_bulan'][$i]['Februari']['data_bulan'];  ?></td>	
											<td><?= $_SESSION['prob_MD_Februari'][$i]; ?></td>	
											<td><?= $_SESSION['kumu_Februari_MD'][$i]; ?></td>
											<td><?= $_SESSION['interval_MD_Februari'][$i]; ?></td>	
										</tr>
									<?php endfor; ?>	
									<tr class="text-center collapse accordion-collapse MD_all" id="MDr2" data-bs-parent=".table">
										<th  colspan="2">Total</th>
										<td><?= $_SESSION['jumlahFrekuensiMD_Februari']; ?></td>
										<td><?= $_SESSION['jumlah_prob_Februari_MD'] ?></td>
									</tr>
								</tbody>
							</table>

							<!-- bulan Maret -->
							<table class="table table-bordered table-sm accordion mb-0">
								<!-- <caption class="caption-top text-center">Data Meninggal Dunia</caption> -->
								<thead>
									<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#MDr3">
										<th colspan="5" style="border-left-color:blue">Maret <i class="fa-solid fa-caret-down"></i></th>
										<th class="w-25 text-center"><?= $_SESSION['angkaAcakMD']['Maret'] ?></th>	
									</tr>
									<tr class="text-center collapse accordion-collapse MD_all"  id="MDr3" data-bs-parent=".table" >
										<th>No</th>
										<th>Bulan</th>
										<th>Frekuensi</th>
										<th>Probabilitas</th>
										<th>Kumulatif</th>
										<th>Interval Angka Acak</th>
									</tr>
								</thead>
								<tbody>
									<?php $no = 1; for ($i=0; $i < count($_SESSION['dataMD_bulan']) ; $i++) : ?>
									<tr class="text-center collapse accordion-collapse MD_all" id="MDr3" data-bs-parent=".table" >
										<td><?= $no++; ?></td>
										<td class="text-justify">Maret  <?= $_SESSION['tahunMD_bulan'][$i]; ?></td>
										<td><?= $_SESSION['dataMD_bulan'][$i]['Maret']['data_bulan'];  ?></td>
										<td><?= $_SESSION['prob_MD_Maret'][$i]; ?></td>	
										<td><?= $_SESSION['kumu_Maret_MD'][$i]; ?></td>		
										<td><?= $_SESSION['interval_MD_Maret'][$i]; ?></td>	
									</tr>
								<?php endfor; ?>	
								<tr class="text-center collapse accordion-collapse MD_all" id="MDr3" data-bs-parent=".table">
									<th  colspan="2">Total</th>
									<td><?= $_SESSION['jumlahFrekuensiMD_Maret']; ?></td>
									<td><?= $_SESSION['jumlah_prob_Maret_MD'] ?></td>
								</tr>
							</tbody>
						</table>

						<!-- bulan April -->
						<table class="table table-bordered table-sm accordion mb-0">
							<!-- <caption class="caption-top text-center">Data Meninggal Dunia</caption> -->
							<thead>
								<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#MDr4">
									<th colspan="5" style="border-left-color:red">April <i class="fa-solid fa-caret-down"></i></th>
									<th class="w-25 text-center"><?= $_SESSION['angkaAcakMD']['April'] ?></th>	
								</tr>
								<tr class="text-center collapse accordion-collapse MD_all"  id="MDr4" data-bs-parent=".table" >
									<th>No</th>
									<th>Bulan</th>
									<th>Frekuensi</th>
									<th>Probabilitas</th>
									<th>Kumulatif</th>
									<th>Interval Angka Acak</th>
								</tr>
							</thead>
							<tbody>
								<?php $no = 1; for ($i=0; $i < count($_SESSION['dataMD_bulan']) ; $i++) : ?>
								<tr class="text-center collapse accordion-collapse MD_all" id="MDr4" data-bs-parent=".table" >
									<td><?= $no++; ?></td>
									<td class="text-justify">April  <?= $_SESSION['tahunMD_bulan'][$i]; ?></td>
									<td><?= $_SESSION['dataMD_bulan'][$i]['April']['data_bulan'];  ?></td>
									<td><?= $_SESSION['prob_MD_April'][$i];  ?></td>	
									<td><?= $_SESSION['kumu_April_MD'][$i]; ?></td>
									<td><?= $_SESSION['interval_MD_April'][$i]; ?></td>		
								</tr>
							<?php endfor; ?>	
							<tr class="text-center collapse accordion-collapse MD_all" id="MDr4" data-bs-parent=".table">
								<th  colspan="2">Total</th>
								<td><?= $_SESSION['jumlahFrekuensiMD_April']; ?></td>
								<td><?= $_SESSION['jumlah_prob_April_MD'] ?></td>
							</tr>
						</tbody>
					</table>

					<!-- bulan Mei -->
					<table class="table table-bordered table-sm accordion mb-0">
						<!-- <caption class="caption-top text-center">Data Meninggal Dunia</caption> -->
						<thead>
							<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#MDr5">
								<th colspan="5" style="border-left-color:red">Mei <i class="fa-solid fa-caret-down"></i></th>
								<th class="w-25 text-center"><?= $_SESSION['angkaAcakMD']['Mei'] ?></th>	
							</tr>
							<tr class="text-center collapse accordion-collapse MD_all"  id="MDr5" data-bs-parent=".table" >
								<th>No</th>
								<th>Bulan</th>
								<th>Frekuensi</th>
								<th>Probabilitas</th>
								<th>Kumulatif</th>
								<th>Interval Angka Acak</th>
							</tr>
						</thead>
						<tbody>
							<?php $no = 1; for ($i=0; $i < count($_SESSION['dataMD_bulan']) ; $i++) : ?>
							<tr class="text-center collapse accordion-collapse MD_all" id="MDr5" data-bs-parent=".table" >
								<td><?= $no++; ?></td>
								<td class="text-justify">Mei  <?= $_SESSION['tahunMD_bulan'][$i]; ?></td>
								<td><?= $_SESSION['dataMD_bulan'][$i]['Mei']['data_bulan'];  ?></td>
								<td><?= $_SESSION['prob_MD_Mei'][$i];  ?></td>
								<td><?= $_SESSION['kumu_Mei_MD'][$i]; ?></td>
								<td><?= $_SESSION['interval_MD_Mei'][$i]; ?></td>							
							</tr>
						<?php endfor; ?>	
						<tr class="text-center collapse accordion-collapse MD_all" id="MDr5" data-bs-parent=".table">
							<th  colspan="2">Total</th>
							<td><?= $_SESSION['jumlahFrekuensiMD_Mei']; ?></td>
							<td><?= $_SESSION['jumlah_prob_Mei_MD'] ?></td>
						</tr>
					</tbody>
				</table>

				<!-- bulan Juni -->
				<table class="table table-bordered table-sm accordion mb-0">
					<!-- <caption class="caption-top text-center">Data Meninggal Dunia</caption> -->
					<thead>
						<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#MDr6">
							<th colspan="5" style="border-left-color:red">Juni <i class="fa-solid fa-caret-down"></i></th>
							<th class="w-25 text-center"><?= $_SESSION['angkaAcakMD']['Juni'] ?></th>	
						</tr>
						<tr class="text-center collapse accordion-collapse MD_all"  id="MDr6" data-bs-parent=".table" >
							<th>No</th>
							<th>Bulan</th>
							<th>Frekuensi</th>
							<th>Probabilitas</th>
							<th>Kumulatif</th>
							<th>Interval Angka Acak</th>
						</tr>
					</thead>
					<tbody>
						<?php $no = 1; for ($i=0; $i < count($_SESSION['dataMD_bulan']) ; $i++) : ?>
						<tr class="text-center collapse accordion-collapse MD_all" id="MDr6" data-bs-parent=".table" >
							<td><?= $no++; ?></td>
							<td class="text-justify">Juni  <?= $_SESSION['tahunMD_bulan'][$i]; ?></td>
							<td><?= $_SESSION['dataMD_bulan'][$i]['Juni']['data_bulan'];  ?></td>
							<td><?= $_SESSION['prob_MD_Juni'][$i] ?></td>
							<td><?= $_SESSION['kumu_Juni_MD'][$i]; ?></td>
							<td><?= $_SESSION['interval_MD_Juni'][$i]; ?></td>			
						</tr>
					<?php endfor; ?>	
					<tr class="text-center collapse accordion-collapse MD_all" id="MDr6" data-bs-parent=".table">
						<th  colspan="2">Total</th>
						<td><?= $_SESSION['jumlahFrekuensiMD_Juni']; ?></td>
						<td><?= $_SESSION['jumlah_prob_Juni_MD'] ?></td>
					</tr>
				</tbody>
			</table>


			<!-- bulan Juli -->
			<table class="table table-bordered table-sm accordion mb-0">
				<!-- <caption class="caption-top text-center">Data Meninggal Dunia</caption> -->
				<thead>
					<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#MDr7">
						<th colspan="5" style="border-left-color:red">Juli <i class="fa-solid fa-caret-down"></i></th>
						<th class="w-25 text-center"><?= $_SESSION['angkaAcakMD']['Juli'] ?></th>	
					</tr>
					<tr class="text-center collapse accordion-collapse MD_all"  id="MDr7" data-bs-parent=".table" >
						<th>No</th>
						<th>Bulan</th>
						<th>Frekuensi</th>
						<th>Probabilitas</th>
						<th>Kumulatif</th>
						<th>Interval Angka Acak</th>
					</tr>
				</thead>
				<tbody>
					<?php $no = 1; for ($i=0; $i < count($_SESSION['dataMD_bulan']) ; $i++) : ?>
					<tr class="text-center collapse accordion-collapse MD_all" id="MDr7" data-bs-parent=".table" >
						<td><?= $no++; ?></td>
						<td class="text-justify">Juli  <?= $_SESSION['tahunMD_bulan'][$i]; ?></td>
						<td><?= $_SESSION['dataMD_bulan'][$i]['Juli']['data_bulan'];  ?></td>	
						<td><?= $_SESSION['prob_MD_Juli'][$i]?></td>
						<td><?= $_SESSION['kumu_Juli_MD'][$i]; ?></td>
						<td><?= $_SESSION['interval_MD_Juli'][$i]; ?></td>	
					</tr>
				<?php endfor; ?>	
				<tr class="text-center collapse accordion-collapse MD_all" id="MDr7" data-bs-parent=".table">
					<th  colspan="2">Total</th>
					<td><?= $_SESSION['jumlahFrekuensiMD_Juli']; ?></td>
					<td><?= $_SESSION['jumlah_prob_Juli_MD'] ?></td>
				</tr>
			</tbody>
		</table>


		<!-- bulan Agustus -->
		<table class="table table-bordered table-sm accordion mb-0">
			<!-- <caption class="caption-top text-center">Data Meninggal Dunia</caption> -->

			<thead>
				<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#MDr8">
					<th colspan="5" style="border-left-color:red">Agustus <i class="fa-solid fa-caret-down"></i></th>
					<th class="w-25 text-center"><?= $_SESSION['angkaAcakMD']['Agustus'] ?></th>	
				</tr>
				<tr class="text-center collapse accordion-collapse MD_all"  id="MDr8" data-bs-parent=".table" >
					<th>No</th>
					<th>Bulan</th>
					<th>Frekuensi</th>
					<th>Probabilitas</th>
					<th>Kumulatif</th>
					<th>Interval Angka Acak</th>
				</tr>
			</thead>
			<tbody>
				<?php $no = 1; for ($i=0; $i < count($_SESSION['dataMD_bulan']) ; $i++) : ?>
				<tr class="text-center collapse accordion-collapse MD_all" id="MDr8" data-bs-parent=".table" >
					<td><?= $no++; ?></td>
					<td class="text-justify">Agustus  <?= $_SESSION['tahunMD_bulan'][$i]; ?></td>
					<td><?= $_SESSION['dataMD_bulan'][$i]['Agustus']['data_bulan'];  ?></td>
					<td><?= $_SESSION['prob_MD_Agustus'][$i]; ?></td>
					<td><?= $_SESSION['kumu_Agustus_MD'][$i]; ?></td>
					<td><?= $_SESSION['interval_MD_Agustus'][$i]; ?></td>				
				</tr>
			<?php endfor; ?>	
			<tr class="text-center collapse accordion-collapse MD_all" id="MDr8" data-bs-parent=".table">
				<th  colspan="2">Total</th>
				<td><?= $_SESSION['jumlahFrekuensiMD_Agustus']; ?></td>
				<td><?= $_SESSION['jumlah_prob_Agustus_MD'] ?></td>
			</tr>
		</tbody>
	</table>

	<!-- bulan September -->
	<table class="table table-bordered table-sm accordion mb-0">
		<!-- <caption class="caption-top text-center">Data Meninggal Dunia</caption> -->
		<thead>
			<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#MDr9">
				<th colspan="5" style="border-left-color:red">September <i class="fa-solid fa-caret-down"></i></th>
				<th class="w-25 text-center"><?= $_SESSION['angkaAcakMD']['September'] ?></th>	
			</tr>			
			<tr class="text-center collapse accordion-collapse MD_all"  id="MDr9" data-bs-parent=".table" >
				<th>No</th> 		
				<th>Bulan</th>
				<th>Frekuensi</th>
				<th>Probabilitas</th>
				<th>Kumulatif</th>
				<th>Interval Angka Acak</th>
			</tr>
		</thead>
		<tbody>
			<?php $no = 1; for ($i=0; $i < count($_SESSION['dataMD_bulan']) ; $i++) : ?>
			<tr class="text-center collapse accordion-collapse MD_all" id="MDr9" data-bs-parent=".table" >
				<td><?= $no++; ?></td>
				<td class="text-justify">September  <?= $_SESSION['tahunMD_bulan'][$i]; ?></td>
				<td><?= $_SESSION['dataMD_bulan'][$i]['September']['data_bulan'];  ?></td>		
				<td><?= $_SESSION['prob_MD_September'][$i]; ?></td>
				<td><?= $_SESSION['kumu_September_MD'][$i]; ?></td>
				<td><?= $_SESSION['interval_MD_September'][$i]; ?></td>	
			</tr>
		<?php endfor; ?>	
		<tr class="text-center collapse accordion-collapse MD_all" id="MDr9" data-bs-parent=".table">
			<th  colspan="2">Total</th>
			<td><?= $_SESSION['jumlahFrekuensiMD_September']; ?></td>
			<td><?= $_SESSION['jumlah_prob_September_MD'] ?></td>
		</tr>
	</tbody>
</table>

<!-- bulan Oktober -->
<table class="table table-bordered table-sm accordion mb-0">
	<!-- <caption class="caption-top text-center">Data Meninggal Dunia</caption> -->
	<thead>
		<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#MDr10">
			<th colspan="5" style="border-left-color:red">Oktober <i class="fa-solid fa-caret-down"></i></th>
			<th class="w-25 text-center"><?= $_SESSION['angkaAcakMD']['Oktober'] ?></th>	
		</tr>
		<tr class="text-center collapse accordion-collapse MD_all"  id="MDr10" data-bs-parent=".table" >
			<th>No</th>
			<th>Bulan</th>
			<th>Frekuensi</th>
			<th>Probabilitas</th>
			<th>Kumulatif</th>
			<th>Interval Angka Acak</th>
		</tr>
	</thead>
	<tbody>
		<?php $no = 1; for ($i=0; $i < count($_SESSION['dataMD_bulan']) ; $i++) : ?>
		<tr class="text-center collapse accordion-collapse MD_all" id="MDr10" data-bs-parent=".table" >
			<td><?= $no++; ?></td>
			<td class="text-justify">Oktober  <?= $_SESSION['tahunMD_bulan'][$i]; ?></td>
			<td><?= $_SESSION['dataMD_bulan'][$i]['Oktober']['data_bulan'];  ?></td>
			<td><?= $_SESSION['prob_MD_Oktober'][$i]; ?></td>
			<td><?= $_SESSION['kumu_Oktober_MD'][$i]; ?></td>
			<td><?= $_SESSION['interval_MD_Oktober'][$i]; ?></td>			
		</tr>
	<?php endfor; ?>	
	<tr class="text-center collapse accordion-collapse MD_all" id="MDr10" data-bs-parent=".table">
		<th  colspan="2">Total</th>
		<td><?= $_SESSION['jumlahFrekuensiMD_Oktober']; ?></td>
		<td><?= $_SESSION['jumlah_prob_Oktober_MD'] ?></td>
	</tr>
</tbody>
</table>

<!-- bulan November -->
<table class="table table-bordered table-sm accordion mb-0">
	<!-- <caption class="caption-top text-center">Data Meninggal Dunia</caption> -->
	<thead>
		<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#MDr11">
			<th colspan="5" style="border-left-color:blue">November <i class="fa-solid fa-caret-down"></i></th>
			<th class="w-25 text-center"><?= $_SESSION['angkaAcakMD']['November'] ?></th>	
		</tr>
		<tr class="text-center collapse accordion-collapse MD_all"  id="MDr11" data-bs-parent=".table" >
			<th>No</th>
			<th>Bulan</th>
			<th>Frekuensi</th>
			<th>Probabilitas</th>
			<th>Kumulatif</th>
			<th>Interval Angka Acak</th>
		</tr>
	</thead>
	<tbody>
		<?php $no = 1; for ($i=0; $i < count($_SESSION['dataMD_bulan']) ; $i++) : ?>
		<tr class="text-center collapse accordion-collapse MD_all" id="MDr11" data-bs-parent=".table" >
			<td><?= $no++; ?></td>
			<td class="text-justify">November  <?= $_SESSION['tahunMD_bulan'][$i]; ?></td>
			<td><?= $_SESSION['dataMD_bulan'][$i]['November']['data_bulan'];  ?></td>
			<td><?= $_SESSION['prob_MD_November'][$i]; ?></td>
			<td><?= $_SESSION['kumu_November_MD'][$i]; ?></td>
			<td><?= $_SESSION['interval_MD_November'][$i]; ?></td>			
		</tr>
	<?php endfor; ?>	
	<tr class="text-center collapse accordion-collapse MD_all" id="MDr11" data-bs-parent=".table">
		<th  colspan="2">Total</th>
		<td><?= $_SESSION['jumlahFrekuensiMD_November']; ?></td>
		<td><?= $_SESSION['jumlah_prob_November_MD'] ?></td>
	</tr>
</tbody>
</table>

<!-- bulan Desember -->
<table class="table table-bordered table-sm accordion mb-0">
	<!-- <caption class="caption-top text-center">Data Meninggal Dunia</caption> -->
	<thead>
		<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#MDr12">
			<th colspan="5" style="border-left-color:blue">Desember <i class="fa-solid fa-caret-down"></i></th>
			<th class="w-25 text-center"><?= $_SESSION['angkaAcakMD']['Desember'] ?></th>	
		</tr>
		<tr class="text-center collapse accordion-collapse MD_all"  id="MDr12" data-bs-parent=".table" >
			<th>No</th>
			<th>Bulan</th>
			<th>Frekuensi</th>
			<th>Probabilitas</th>
			<th>Kumulatif</th>
			<th>Interval Angka Acak</th>
		</tr>
	</thead>
	<tbody>
		<?php $no = 1; for ($i=0; $i < count($_SESSION['dataMD_bulan']) ; $i++) : ?>
		<tr class="text-center collapse accordion-collapse MD_all" id="MDr12" data-bs-parent=".table" >
			<td><?= $no++; ?></td>
			<td class="text-justify">Desember  <?= $_SESSION['tahunMD_bulan'][$i]; ?></td>
			<td><?= $_SESSION['dataMD_bulan'][$i]['Desember']['data_bulan'];  ?></td>
			<td><?= $_SESSION['prob_MD_Desember'][$i]; ?></td>
			<td><?= $_SESSION['kumu_Desember_MD'][$i]; ?></td>
			<td><?= $_SESSION['interval_MD_Desember'][$i]; ?></td>			
		</tr>
	<?php endfor; ?>	
	<tr class="text-center collapse accordion-collapse MD_all" id="MDr12" data-bs-parent=".table">
		<th  colspan="2">Total</th>
		<td><?= $_SESSION['jumlahFrekuensiMD_Desember']; ?></td>
		<td><?= $_SESSION['jumlah_prob_Desember_MD'] ?></td>
	</tr>
</tbody>
</table>
</tr>
</tbody>
<caption>								
	<ul style="list-style-type:square;">
		<li style="color: blue;"><span style="color: gray;">Musim Hujan</span></li>
		<li style="color: red;"><span style="color: gray;">Musim Kemarau</span></li>
	</ul> 
</caption>
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
					<div class="col-6 tex-start icon_utama" data-bs-toggle="collapse" data-bs-target=".LB_all">
						<span>Show All : </span><i class="fa-solid fa-plus"></i>
					</div>
					<div class="col-6 text-end">
						<a href="#"  class="btn btn-sm btn-dark shadow-sm d-inline" data-toggle="modal" data-target="#acak-dataLB" data-backdrop="static" data-keyboard="false"><i class="fa-solid fa-shuffle"></i> Angka Acak</a>
					</div>							
				</div>
				<!-- bulan january -->
				<table class="table mb-0">
					<caption class="caption-top text-center">Data Luka Berat</caption>
					<thead>
						<tr class="table-dark text-center">
							<th colspan="5">Bulan</i></th>
							<th class="w-25">Angka Acak</th>	
						</tr>
					</thead>
					<tbody>
						<tr>
							<table class="table table-bordered table-sm accordion mb-0">
								<!-- <caption class="caption-top text-center">Data Meninggal Dunia</caption> -->
								<thead>
									<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#LBr1">
										<th colspan="5" style="border-left-color:blue">Januari <i class="fa-solid fa-caret-down"></i></th>
										<th class="w-25 text-center"><?= $_SESSION['angkaAcakLB']['Januari'] ?></th>	
									</tr>
									<tr class="text-center collapse accordion-collapse LB_all"  id="LBr1" data-bs-parent=".table" >
										<th>No</th>
										<th>Bulan</th>
										<th>Frekuensi</th>
										<th>Probabilitas</th>
										<th>Kumulatif</th>
										<th>Interval Angka Acak</th>

									</tr>
								</thead>
								<tbody>	
									<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLB_bulan']) ; $i++) : ?>
									<tr class="text-center collapse accordion-collapse LB_all" id="LBr1" data-bs-parent=".table" >
										<td><?= $no++; ?></td>
										<td class="text-justify">Januari <?= $_SESSION['tahunLB_bulan'][$i]; ?></td>
										<td><?= $_SESSION['dataLB_bulan'][$i]['Januari']['data_bulan'];  ?></td>
										<td><?= $_SESSION['prob_LB_Januari'][$i]; ?></td>
										<td><?= $_SESSION['kumu_Januari_LB'][$i]; ?></td>
										<td><?= $_SESSION['interval_LB_Januari'][$i]; ?></td>				
									</tr>

								<?php endfor; ?>	
								<tr class="text-center collapse accordion-collapse LB_all" id="LBr1" data-bs-parent=".table">
									<th colspan="2">Total</th>
									<td><?= $_SESSION['jumlahFrekuensiLB_Januari']; ?></td>
									<td><?= $_SESSION['jumlah_prob_Januari_LB'] ?></td>
								</tr>
							</tbody>
						</table>

						<!-- bulan February -->
						<table class="table table-bordered table-sm accordion mb-0">
							<!-- <caption class="caption-top text-center">Data Meninggal Dunia</caption> -->
							<thead>
								<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#LBr2">
									<th colspan="5" style="border-left-color:blue">Februari <i class="fa-solid fa-caret-down"></i></th>
									<th class="w-25 text-center"><?= $_SESSION['angkaAcakLB']['Februari'] ?></th>	
								</tr>
								<tr class="text-center collapse accordion-collapse LB_all"  id="LBr2" data-bs-parent=".table" >
									<th>No</th>
									<th>Bulan</th>
									<th>Frekuensi</th>
									<th>Probabilitas</th>
									<th>Kumulatif</th>
									<th>Interval Angka Acak</th>
								</tr>
							</thead>
							<tbody>
								<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLB_bulan']) ; $i++) : ?>
								<tr class="text-center collapse accordion-collapse LB_all" id="LBr2" data-bs-parent=".table" >
									<td><?= $no++; ?></td>
									<td class="text-justify">Februari  <?= $_SESSION['tahunLB_bulan'][$i]; ?></td>
									<td><?= $_SESSION['dataLB_bulan'][$i]['Februari']['data_bulan'];  ?></td>	
									<td><?= $_SESSION['prob_LB_Februari'][$i]; ?></td>	
									<td><?= $_SESSION['kumu_Februari_LB'][$i]; ?></td>
									<td><?= $_SESSION['interval_LB_Februari'][$i]; ?></td>	
								</tr>
							<?php endfor; ?>	
							<tr class="text-center collapse accordion-collapse LB_all" id="LBr2" data-bs-parent=".table">
								<th  colspan="2">Total</th>
								<td><?= $_SESSION['jumlahFrekuensiLB_Februari']; ?></td>
								<td><?= $_SESSION['jumlah_prob_Februari_LB'] ?></td>
							</tr>
						</tbody>
					</table>

					<!-- bulan Maret -->
					<table class="table table-bordered table-sm accordion mb-0">
						<!-- <caption class="caption-top text-center">Data Meninggal Dunia</caption> -->
						<thead>
							<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#LBr3">
								<th colspan="5" style="border-left-color:blue">Maret <i class="fa-solid fa-caret-down"></i></th>
								<th class="w-25 text-center"><?= $_SESSION['angkaAcakLB']['Maret'] ?></th>	
							</tr>
							<tr class="text-center collapse accordion-collapse LB_all"  id="LBr3" data-bs-parent=".table" >
								<th>No</th>
								<th>Bulan</th>
								<th>Frekuensi</th>
								<th>Probabilitas</th>
								<th>Kumulatif</th>
								<th>Interval Angka Acak</th>
							</tr>
						</thead>
						<tbody>
							<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLB_bulan']) ; $i++) : ?>
							<tr class="text-center collapse accordion-collapse LB_all" id="LBr3" data-bs-parent=".table" >
								<td><?= $no++; ?></td>
								<td class="text-justify">Maret  <?= $_SESSION['tahunLB_bulan'][$i]; ?></td>
								<td><?= $_SESSION['dataLB_bulan'][$i]['Maret']['data_bulan'];  ?></td>
								<td><?= $_SESSION['prob_LB_Maret'][$i]; ?></td>	
								<td><?= $_SESSION['kumu_Maret_LB'][$i]; ?></td>		
								<td><?= $_SESSION['interval_LB_Maret'][$i]; ?></td>	
							</tr>
						<?php endfor; ?>	
						<tr class="text-center collapse accordion-collapse LB_all" id="LBr3" data-bs-parent=".table">
							<th  colspan="2">Total</th>
							<td><?= $_SESSION['jumlahFrekuensiLB_Maret']; ?></td>
							<td><?= $_SESSION['jumlah_prob_Maret_LB'] ?></td>
						</tr>
					</tbody>
				</table>

				<!-- bulan April -->
				<table class="table table-bordered table-sm accordion mb-0">
					<!-- <caption class="caption-top text-center">Data Meninggal Dunia</caption> -->
					<thead>
						<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#LBr4">
							<th colspan="5" style="border-left-color:red">April <i class="fa-solid fa-caret-down"></i></th>
							<th class="w-25 text-center"><?= $_SESSION['angkaAcakLB']['April'] ?></th>	
						</tr>
						<tr class="text-center collapse accordion-collapse LB_all"  id="LBr4" data-bs-parent=".table" >
							<th>No</th>
							<th>Bulan</th>
							<th>Frekuensi</th>
							<th>Probabilitas</th>
							<th>Kumulatif</th>
							<th>Interval Angka Acak</th>
						</tr>
					</thead>
					<tbody>
						<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLB_bulan']) ; $i++) : ?>
						<tr class="text-center collapse accordion-collapse LB_all" id="LBr4" data-bs-parent=".table" >
							<td><?= $no++; ?></td>
							<td class="text-justify">April  <?= $_SESSION['tahunLB_bulan'][$i]; ?></td>
							<td><?= $_SESSION['dataLB_bulan'][$i]['April']['data_bulan'];  ?></td>
							<td><?= $_SESSION['prob_LB_April'][$i];  ?></td>	
							<td><?= $_SESSION['kumu_April_LB'][$i]; ?></td>
							<td><?= $_SESSION['interval_LB_April'][$i]; ?></td>		
						</tr>
					<?php endfor; ?>	
					<tr class="text-center collapse accordion-collapse LB_all" id="LBr4" data-bs-parent=".table">
						<th  colspan="2">Total</th>
						<td><?= $_SESSION['jumlahFrekuensiLB_April']; ?></td>
						<td><?= $_SESSION['jumlah_prob_April_LB'] ?></td>
					</tr>
				</tbody>
			</table>

			<!-- bulan Mei -->
			<table class="table table-bordered table-sm accordion mb-0">
				<!-- <caption class="caption-top text-center">Data Meninggal Dunia</caption> -->
				<thead>
					<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#LBr5">
						<th colspan="5" style="border-left-color:red">Mei <i class="fa-solid fa-caret-down"></i></th>
						<th class="w-25 text-center"><?= $_SESSION['angkaAcakLB']['Mei'] ?></th>	
					</tr>
					<tr class="text-center collapse accordion-collapse LB_all"  id="LBr5" data-bs-parent=".table" >
						<th>No</th>
						<th>Bulan</th>
						<th>Frekuensi</th>
						<th>Probabilitas</th>
						<th>Kumulatif</th>
						<th>Interval Angka Acak</th>
					</tr>
				</thead>
				<tbody>
					<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLB_bulan']) ; $i++) : ?>
					<tr class="text-center collapse accordion-collapse LB_all" id="LBr5" data-bs-parent=".table" >
						<td><?= $no++; ?></td>
						<td class="text-justify">Mei  <?= $_SESSION['tahunLB_bulan'][$i]; ?></td>
						<td><?= $_SESSION['dataLB_bulan'][$i]['Mei']['data_bulan'];  ?></td>
						<td><?= $_SESSION['prob_LB_Mei'][$i];  ?></td>
						<td><?= $_SESSION['kumu_Mei_LB'][$i]; ?></td>
						<td><?= $_SESSION['interval_LB_Mei'][$i]; ?></td>							
					</tr>
				<?php endfor; ?>	
				<tr class="text-center collapse accordion-collapse LB_all" id="LBr5" data-bs-parent=".table">
					<th  colspan="2">Total</th>
					<td><?= $_SESSION['jumlahFrekuensiLB_Mei']; ?></td>
					<td><?= $_SESSION['jumlah_prob_Mei_LB'] ?></td>
				</tr>
			</tbody>
		</table>

		<!-- bulan Juni -->
		<table class="table table-bordered table-sm accordion mb-0">
			<!-- <caption class="caption-top text-center">Data Meninggal Dunia</caption> -->
			<thead>
				<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#LBr6">
					<th colspan="5" style="border-left-color:red">Juni <i class="fa-solid fa-caret-down"></i></th>
					<th class="w-25 text-center"><?= $_SESSION['angkaAcakLB']['Juni'] ?></th>	
				</tr>
				<tr class="text-center collapse accordion-collapse LB_all"  id="LBr6" data-bs-parent=".table" >
					<th>No</th>
					<th>Bulan</th>
					<th>Frekuensi</th>
					<th>Probabilitas</th>
					<th>Kumulatif</th>
					<th>Interval Angka Acak</th>
				</tr>
			</thead>
			<tbody>
				<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLB_bulan']) ; $i++) : ?>
				<tr class="text-center collapse accordion-collapse LB_all" id="LBr6" data-bs-parent=".table" >
					<td><?= $no++; ?></td>
					<td class="text-justify">Juni  <?= $_SESSION['tahunLB_bulan'][$i]; ?></td>
					<td><?= $_SESSION['dataLB_bulan'][$i]['Juni']['data_bulan'];  ?></td>
					<td><?= $_SESSION['prob_LB_Juni'][$i] ?></td>
					<td><?= $_SESSION['kumu_Juni_LB'][$i]; ?></td>
					<td><?= $_SESSION['interval_LB_Juni'][$i]; ?></td>			
				</tr>
			<?php endfor; ?>	
			<tr class="text-center collapse accordion-collapse LB_all" id="LBr6" data-bs-parent=".table">
				<th  colspan="2">Total</th>
				<td><?= $_SESSION['jumlahFrekuensiLB_Juni']; ?></td>
				<td><?= $_SESSION['jumlah_prob_Juni_LB'] ?></td>
			</tr>
		</tbody>
	</table>


	<!-- bulan Juli -->
	<table class="table table-bordered table-sm accordion mb-0">
		<!-- <caption class="caption-top text-center">Data Meninggal Dunia</caption> -->
		<thead>
			<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#LBr7">
				<th colspan="5" style="border-left-color:red">Juli <i class="fa-solid fa-caret-down"></i></th>
				<th class="w-25 text-center"><?= $_SESSION['angkaAcakLB']['Juli'] ?></th>	
			</tr>
			<tr class="text-center collapse accordion-collapse LB_all"  id="LBr7" data-bs-parent=".table" >
				<th>No</th>
				<th>Bulan</th>
				<th>Frekuensi</th>
				<th>Probabilitas</th>
				<th>Kumulatif</th>
				<th>Interval Angka Acak</th>
			</tr>
		</thead>
		<tbody>
			<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLB_bulan']) ; $i++) : ?>
			<tr class="text-center collapse accordion-collapse LB_all" id="LBr7" data-bs-parent=".table" >
				<td><?= $no++; ?></td>
				<td class="text-justify">Juli  <?= $_SESSION['tahunLB_bulan'][$i]; ?></td>
				<td><?= $_SESSION['dataLB_bulan'][$i]['Juli']['data_bulan'];  ?></td>	
				<td><?= $_SESSION['prob_LB_Juli'][$i]?></td>
				<td><?= $_SESSION['kumu_Juli_LB'][$i]; ?></td>
				<td><?= $_SESSION['interval_LB_Juli'][$i]; ?></td>	
			</tr>
		<?php endfor; ?>	
		<tr class="text-center collapse accordion-collapse LB_all" id="LBr7" data-bs-parent=".table">
			<th  colspan="2">Total</th>
			<td><?= $_SESSION['jumlahFrekuensiLB_Juli']; ?></td>
			<td><?= $_SESSION['jumlah_prob_Juli_LB'] ?></td>
		</tr>
	</tbody>
</table>


<!-- bulan Agustus -->
<table class="table table-bordered table-sm accordion mb-0">
	<!-- <caption class="caption-top text-center">Data Meninggal Dunia</caption> -->

	<thead>
		<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#LBr8">
			<th colspan="5" style="border-left-color:red">Agustus <i class="fa-solid fa-caret-down"></i></th>
			<th class="w-25 text-center"><?= $_SESSION['angkaAcakLB']['Agustus'] ?></th>	
		</tr>
		<tr class="text-center collapse accordion-collapse LB_all"  id="LBr8" data-bs-parent=".table" >
			<th>No</th>
			<th>Bulan</th>
			<th>Frekuensi</th>
			<th>Probabilitas</th>
			<th>Kumulatif</th>
			<th>Interval Angka Acak</th>
		</tr>
	</thead>
	<tbody>
		<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLB_bulan']) ; $i++) : ?>
		<tr class="text-center collapse accordion-collapse LB_all" id="LBr8" data-bs-parent=".table" >
			<td><?= $no++; ?></td>
			<td class="text-justify">Agustus  <?= $_SESSION['tahunLB_bulan'][$i]; ?></td>
			<td><?= $_SESSION['dataLB_bulan'][$i]['Agustus']['data_bulan'];  ?></td>
			<td><?= $_SESSION['prob_LB_Agustus'][$i]; ?></td>
			<td><?= $_SESSION['kumu_Agustus_LB'][$i]; ?></td>
			<td><?= $_SESSION['interval_LB_Agustus'][$i]; ?></td>				
		</tr>
	<?php endfor; ?>	
	<tr class="text-center collapse accordion-collapse LB_all" id="LBr8" data-bs-parent=".table">
		<th  colspan="2">Total</th>
		<td><?= $_SESSION['jumlahFrekuensiLB_Agustus']; ?></td>
		<td><?= $_SESSION['jumlah_prob_Agustus_LB'] ?></td>
	</tr>
</tbody>
</table>

<!-- bulan September -->
<table class="table table-bordered table-sm accordion mb-0">
	<!-- <caption class="caption-top text-center">Data Meninggal Dunia</caption> -->
	<thead>
		<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#LBr9">
			<th colspan="5" style="border-left-color:red">September <i class="fa-solid fa-caret-down"></i></th>
			<th class="w-25 text-center"><?= $_SESSION['angkaAcakLB']['September'] ?></th>	
		</tr>			
		<tr class="text-center collapse accordion-collapse LB_all"  id="LBr9" data-bs-parent=".table" >
			<th>No</th> 		
			<th>Bulan</th>
			<th>Frekuensi</th>
			<th>Probabilitas</th>
			<th>Kumulatif</th>
			<th>Interval Angka Acak</th>
		</tr>
	</thead>
	<tbody>
		<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLB_bulan']) ; $i++) : ?>
		<tr class="text-center collapse accordion-collapse LB_all" id="LBr9" data-bs-parent=".table" >
			<td><?= $no++; ?></td>
			<td class="text-justify">September  <?= $_SESSION['tahunLB_bulan'][$i]; ?></td>
			<td><?= $_SESSION['dataLB_bulan'][$i]['September']['data_bulan'];  ?></td>		
			<td><?= $_SESSION['prob_LB_September'][$i]; ?></td>
			<td><?= $_SESSION['kumu_September_LB'][$i]; ?></td>
			<td><?= $_SESSION['interval_LB_September'][$i]; ?></td>	
		</tr>
	<?php endfor; ?>	
	<tr class="text-center collapse accordion-collapse LB_all" id="LBr9" data-bs-parent=".table">
		<th  colspan="2">Total</th>
		<td><?= $_SESSION['jumlahFrekuensiLB_September']; ?></td>
		<td><?= $_SESSION['jumlah_prob_September_LB'] ?></td>
	</tr>
</tbody>
</table>

<!-- bulan Oktober -->
<table class="table table-bordered table-sm accordion mb-0">
	<!-- <caption class="caption-top text-center">Data Meninggal Dunia</caption> -->
	<thead>
		<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#LBr10">
			<th colspan="5" style="border-left-color:red">Oktober <i class="fa-solid fa-caret-down"></i></th>
			<th class="w-25 text-center"><?= $_SESSION['angkaAcakLB']['Oktober'] ?></th>	
		</tr>
		<tr class="text-center collapse accordion-collapse LB_all"  id="LBr10" data-bs-parent=".table" >
			<th>No</th>
			<th>Bulan</th>
			<th>Frekuensi</th>
			<th>Probabilitas</th>
			<th>Kumulatif</th>
			<th>Interval Angka Acak</th>
		</tr>
	</thead>
	<tbody>
		<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLB_bulan']) ; $i++) : ?>
		<tr class="text-center collapse accordion-collapse LB_all" id="LBr10" data-bs-parent=".table" >
			<td><?= $no++; ?></td>
			<td class="text-justify">Oktober  <?= $_SESSION['tahunLB_bulan'][$i]; ?></td>
			<td><?= $_SESSION['dataLB_bulan'][$i]['Oktober']['data_bulan'];  ?></td>
			<td><?= $_SESSION['prob_LB_Oktober'][$i]; ?></td>
			<td><?= $_SESSION['kumu_Oktober_LB'][$i]; ?></td>
			<td><?= $_SESSION['interval_LB_Oktober'][$i]; ?></td>			
		</tr>
	<?php endfor; ?>	
	<tr class="text-center collapse accordion-collapse LB_all" id="LBr10" data-bs-parent=".table">
		<th  colspan="2">Total</th>
		<td><?= $_SESSION['jumlahFrekuensiLB_Oktober']; ?></td>
		<td><?= $_SESSION['jumlah_prob_Oktober_LB'] ?></td>
	</tr>
</tbody>
</table>

<!-- bulan November -->
<table class="table table-bordered table-sm accordion mb-0">
	<!-- <caption class="caption-top text-center">Data Meninggal Dunia</caption> -->
	<thead>
		<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#LBr11">
			<th colspan="5" style="border-left-color:blue">November <i class="fa-solid fa-caret-down"></i></th>
			<th class="w-25 text-center"><?= $_SESSION['angkaAcakLB']['November'] ?></th>	
		</tr>
		<tr class="text-center collapse accordion-collapse LB_all"  id="LBr11" data-bs-parent=".table" >
			<th>No</th>
			<th>Bulan</th>
			<th>Frekuensi</th>
			<th>Probabilitas</th>
			<th>Kumulatif</th>
			<th>Interval Angka Acak</th>
		</tr>
	</thead>
	<tbody>
		<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLB_bulan']) ; $i++) : ?>
		<tr class="text-center collapse accordion-collapse LB_all" id="LBr11" data-bs-parent=".table" >
			<td><?= $no++; ?></td>
			<td class="text-justify">November  <?= $_SESSION['tahunLB_bulan'][$i]; ?></td>
			<td><?= $_SESSION['dataLB_bulan'][$i]['November']['data_bulan'];  ?></td>
			<td><?= $_SESSION['prob_LB_November'][$i]; ?></td>
			<td><?= $_SESSION['kumu_November_LB'][$i]; ?></td>
			<td><?= $_SESSION['interval_LB_November'][$i]; ?></td>			
		</tr>
	<?php endfor; ?>	
	<tr class="text-center collapse accordion-collapse LB_all" id="LBr11" data-bs-parent=".table">
		<th  colspan="2">Total</th>
		<td><?= $_SESSION['jumlahFrekuensiLB_November']; ?></td>
		<td><?= $_SESSION['jumlah_prob_November_LB'] ?></td>
	</tr>
</tbody>
</table>

<!-- bulan Desember -->
<table class="table table-bordered table-sm accordion mb-0">
	<!-- <caption class="caption-top text-center">Data Meninggal Dunia</caption> -->
	<thead>
		<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#LBr12">
			<th colspan="5" style="border-left-color:blue">Desember <i class="fa-solid fa-caret-down"></i></th>
			<th class="w-25 text-center"><?= $_SESSION['angkaAcakLB']['Desember'] ?></th>	
		</tr>
		<tr class="text-center collapse accordion-collapse LB_all"  id="LBr12" data-bs-parent=".table" >
			<th>No</th>
			<th>Bulan</th>
			<th>Frekuensi</th>
			<th>Probabilitas</th>
			<th>Kumulatif</th>
			<th>Interval Angka Acak</th>
		</tr>
	</thead>
	<tbody>
		<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLB_bulan']) ; $i++) : ?>
		<tr class="text-center collapse accordion-collapse LB_all" id="LBr12" data-bs-parent=".table" >
			<td><?= $no++; ?></td>
			<td class="text-justify">Desember  <?= $_SESSION['tahunLB_bulan'][$i]; ?></td>
			<td><?= $_SESSION['dataLB_bulan'][$i]['Desember']['data_bulan'];  ?></td>
			<td><?= $_SESSION['prob_LB_Desember'][$i]; ?></td>
			<td><?= $_SESSION['kumu_Desember_LB'][$i]; ?></td>
			<td><?= $_SESSION['interval_LB_Desember'][$i]; ?></td>			
		</tr>
	<?php endfor; ?>	
	<tr class="text-center collapse accordion-collapse LB_all" id="LBr12" data-bs-parent=".table">
		<th  colspan="2">Total</th>
		<td><?= $_SESSION['jumlahFrekuensiLB_Desember']; ?></td>
		<td><?= $_SESSION['jumlah_prob_Desember_LB'] ?></td>
	</tr>

</tbody>
</table>
</tr>
</tbody>
<caption>								
	<ul style="list-style-type:square;">
		<li style="color: blue;"><span style="color: gray;">Musim Hujan</span></li>
		<li style="color: red;"><span style="color: gray;">Musim Kemarau</span></li>
	</ul> 
</caption>
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
					<div class="col-6 tex-start icon_utama" data-bs-toggle="collapse" data-bs-target=".LR_all">
						<span>Show All : </span><i class="fa-solid fa-plus"></i>
					</div>
					<div class="col-6 text-end">
						<a href="#"  class="btn btn-sm btn-dark shadow-sm d-inline" data-toggle="modal" data-target="#acak-dataLR" data-backdrop="static" data-keyboard="false"><i class="fa-solid fa-shuffle"></i> Angka Acak</a>
					</div>							
				</div>
				<!-- bulan january -->
				<table class="table mb-0">
					<caption class="caption-top text-center">Data Luka Ringan</caption>
					<thead>
						<tr class="table-dark text-center">
							<th colspan="5">Bulan</i></th>
							<th class="w-25">Angka Acak</th>	
						</tr>
					</thead>
					<tbody>
						<tr>
							<table class="table table-bordered table-sm accordion mb-0">
								<!-- <caption class="caption-top text-center">Data Meninggal Dunia</caption> -->
								<thead>
									<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#LRr1">
										<th colspan="5" style="border-left-color:blue">Januari <i class="fa-solid fa-caret-down"></i></th>
										<th class="w-25 text-center"><?= $_SESSION['angkaAcakLR']['Januari'] ?></th>	
									</tr>
									<tr class="text-center collapse accordion-collapse LR_all"  id="LRr1" data-bs-parent=".table" >
										<th>No</th>
										<th>Bulan</th>
										<th>Frekuensi</th>
										<th>Probabilitas</th>
										<th>Kumulatif</th>
										<th>Interval Angka Acak</th>

									</tr>
								</thead>
								<tbody>	
									<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLR_bulan']) ; $i++) : ?>
									<tr class="text-center collapse accordion-collapse LR_all" id="LRr1" data-bs-parent=".table" >
										<td><?= $no++; ?></td>
										<td class="text-justify">Januari <?= $_SESSION['tahunLR_bulan'][$i]; ?></td>
										<td><?= $_SESSION['dataLR_bulan'][$i]['Januari']['data_bulan'];  ?></td>
										<td><?= $_SESSION['prob_LR_Januari'][$i]; ?></td>
										<td><?= $_SESSION['kumu_Januari_LR'][$i]; ?></td>
										<td><?= $_SESSION['interval_LR_Januari'][$i]; ?></td>				
									</tr>

								<?php endfor; ?>	
								<tr class="text-center collapse accordion-collapse LR_all" id="LRr1" data-bs-parent=".table">
									<th colspan="2">Total</th>
									<td><?= $_SESSION['jumlahFrekuensiLR_Januari']; ?></td>
									<td><?= $_SESSION['jumlah_prob_Januari_LR'] ?></td>
								</tr>
							</tbody>
						</table>

						<!-- bulan February -->
						<table class="table table-bordered table-sm accordion mb-0">
							<!-- <caption class="caption-top text-center">Data Meninggal Dunia</caption> -->
							<thead>
								<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#LRr2">
									<th colspan="5" style="border-left-color:blue">Februari <i class="fa-solid fa-caret-down"></i></th>
									<th class="w-25 text-center"><?= $_SESSION['angkaAcakLR']['Februari'] ?></th>	
								</tr>
								<tr class="text-center collapse accordion-collapse LR_all"  id="LRr2" data-bs-parent=".table" >
									<th>No</th>
									<th>Bulan</th>
									<th>Frekuensi</th>
									<th>Probabilitas</th>
									<th>Kumulatif</th>
									<th>Interval Angka Acak</th>
								</tr>
							</thead>
							<tbody>
								<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLR_bulan']) ; $i++) : ?>
								<tr class="text-center collapse accordion-collapse LR_all" id="LRr2" data-bs-parent=".table" >
									<td><?= $no++; ?></td>
									<td class="text-justify">Februari  <?= $_SESSION['tahunLR_bulan'][$i]; ?></td>
									<td><?= $_SESSION['dataLR_bulan'][$i]['Februari']['data_bulan'];  ?></td>	
									<td><?= $_SESSION['prob_LR_Februari'][$i]; ?></td>	
									<td><?= $_SESSION['kumu_Februari_LR'][$i]; ?></td>
									<td><?= $_SESSION['interval_LR_Februari'][$i]; ?></td>	
								</tr>
							<?php endfor; ?>	
							<tr class="text-center collapse accordion-collapse LR_all" id="LRr2" data-bs-parent=".table">
								<th  colspan="2">Total</th>
								<td><?= $_SESSION['jumlahFrekuensiLR_Februari']; ?></td>
								<td><?= $_SESSION['jumlah_prob_Februari_LR'] ?></td>
							</tr>
						</tbody>
					</table>

					<!-- bulan Maret -->
					<table class="table table-bordered table-sm accordion mb-0">
						<!-- <caption class="caption-top text-center">Data Meninggal Dunia</caption> -->
						<thead>
							<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#LRr3">
								<th colspan="5" style="border-left-color:blue">Maret <i class="fa-solid fa-caret-down"></i></th>
								<th class="w-25 text-center"><?= $_SESSION['angkaAcakLR']['Maret'] ?></th>	
							</tr>
							<tr class="text-center collapse accordion-collapse LR_all"  id="LRr3" data-bs-parent=".table" >
								<th>No</th>
								<th>Bulan</th>
								<th>Frekuensi</th>
								<th>Probabilitas</th>
								<th>Kumulatif</th>
								<th>Interval Angka Acak</th>
							</tr>
						</thead>
						<tbody>
							<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLR_bulan']) ; $i++) : ?>
							<tr class="text-center collapse accordion-collapse LR_all" id="LRr3" data-bs-parent=".table" >
								<td><?= $no++; ?></td>
								<td class="text-justify">Maret  <?= $_SESSION['tahunLR_bulan'][$i]; ?></td>
								<td><?= $_SESSION['dataLR_bulan'][$i]['Maret']['data_bulan'];  ?></td>
								<td><?= $_SESSION['prob_LR_Maret'][$i]; ?></td>	
								<td><?= $_SESSION['kumu_Maret_LR'][$i]; ?></td>		
								<td><?= $_SESSION['interval_LR_Maret'][$i]; ?></td>	
							</tr>
						<?php endfor; ?>	
						<tr class="text-center collapse accordion-collapse LR_all" id="LRr3" data-bs-parent=".table">
							<th  colspan="2">Total</th>
							<td><?= $_SESSION['jumlahFrekuensiLR_Maret']; ?></td>
							<td><?= $_SESSION['jumlah_prob_Maret_LR'] ?></td>
						</tr>
					</tbody>
				</table>

				<!-- bulan April -->
				<table class="table table-bordered table-sm accordion mb-0">
					<!-- <caption class="caption-top text-center">Data Meninggal Dunia</caption> -->
					<thead>
						<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#LRr4">
							<th colspan="5" style="border-left-color:red">April <i class="fa-solid fa-caret-down"></i></th>
							<th class="w-25 text-center"><?= $_SESSION['angkaAcakLR']['April'] ?></th>	
						</tr>
						<tr class="text-center collapse accordion-collapse LR_all"  id="LRr4" data-bs-parent=".table" >
							<th>No</th>
							<th>Bulan</th>
							<th>Frekuensi</th>
							<th>Probabilitas</th>
							<th>Kumulatif</th>
							<th>Interval Angka Acak</th>
						</tr>
					</thead>
					<tbody>
						<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLR_bulan']) ; $i++) : ?>
						<tr class="text-center collapse accordion-collapse LR_all" id="LRr4" data-bs-parent=".table" >
							<td><?= $no++; ?></td>
							<td class="text-justify">April  <?= $_SESSION['tahunLR_bulan'][$i]; ?></td>
							<td><?= $_SESSION['dataLR_bulan'][$i]['April']['data_bulan'];  ?></td>
							<td><?= $_SESSION['prob_LR_April'][$i];  ?></td>	
							<td><?= $_SESSION['kumu_April_LR'][$i]; ?></td>
							<td><?= $_SESSION['interval_LR_April'][$i]; ?></td>		
						</tr>
					<?php endfor; ?>	
					<tr class="text-center collapse accordion-collapse LR_all" id="LRr4" data-bs-parent=".table">
						<th  colspan="2">Total</th>
						<td><?= $_SESSION['jumlahFrekuensiLR_April']; ?></td>
						<td><?= $_SESSION['jumlah_prob_April_LR'] ?></td>
					</tr>
				</tbody>
			</table>

			<!-- bulan Mei -->
			<table class="table table-bordered table-sm accordion mb-0">
				<!-- <caption class="caption-top text-center">Data Meninggal Dunia</caption> -->
				<thead>
					<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#LRr5">
						<th colspan="5" style="border-left-color:red">Mei <i class="fa-solid fa-caret-down"></i></th>
						<th class="w-25 text-center"><?= $_SESSION['angkaAcakLR']['Mei'] ?></th>	
					</tr>
					<tr class="text-center collapse accordion-collapse LR_all"  id="LRr5" data-bs-parent=".table" >
						<th>No</th>
						<th>Bulan</th>
						<th>Frekuensi</th>
						<th>Probabilitas</th>
						<th>Kumulatif</th>
						<th>Interval Angka Acak</th>
					</tr>
				</thead>
				<tbody>
					<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLR_bulan']) ; $i++) : ?>
					<tr class="text-center collapse accordion-collapse LR_all" id="LRr5" data-bs-parent=".table" >
						<td><?= $no++; ?></td>
						<td class="text-justify">Mei  <?= $_SESSION['tahunLR_bulan'][$i]; ?></td>
						<td><?= $_SESSION['dataLR_bulan'][$i]['Mei']['data_bulan'];  ?></td>
						<td><?= $_SESSION['prob_LR_Mei'][$i];  ?></td>
						<td><?= $_SESSION['kumu_Mei_LR'][$i]; ?></td>
						<td><?= $_SESSION['interval_LR_Mei'][$i]; ?></td>							
					</tr>
				<?php endfor; ?>	
				<tr class="text-center collapse accordion-collapse LR_all" id="LRr5" data-bs-parent=".table">
					<th  colspan="2">Total</th>
					<td><?= $_SESSION['jumlahFrekuensiLR_Mei']; ?></td>
					<td><?= $_SESSION['jumlah_prob_Mei_LR'] ?></td>
				</tr>
			</tbody>
		</table>

		<!-- bulan Juni -->
		<table class="table table-bordered table-sm accordion mb-0">
			<!-- <caption class="caption-top text-center">Data Meninggal Dunia</caption> -->
			<thead>
				<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#LRr6">
					<th colspan="5" style="border-left-color:red">Juni <i class="fa-solid fa-caret-down"></i></th>
					<th class="w-25 text-center"><?= $_SESSION['angkaAcakLR']['Juni'] ?></th>	
				</tr>
				<tr class="text-center collapse accordion-collapse LR_all"  id="LRr6" data-bs-parent=".table" >
					<th>No</th>
					<th>Bulan</th>
					<th>Frekuensi</th>
					<th>Probabilitas</th>
					<th>Kumulatif</th>
					<th>Interval Angka Acak</th>
				</tr>
			</thead>
			<tbody>
				<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLR_bulan']) ; $i++) : ?>
				<tr class="text-center collapse accordion-collapse LR_all" id="LRr6" data-bs-parent=".table" >
					<td><?= $no++; ?></td>
					<td class="text-justify">Juni  <?= $_SESSION['tahunLR_bulan'][$i]; ?></td>
					<td><?= $_SESSION['dataLR_bulan'][$i]['Juni']['data_bulan'];  ?></td>
					<td><?= $_SESSION['prob_LR_Juni'][$i] ?></td>
					<td><?= $_SESSION['kumu_Juni_LR'][$i]; ?></td>
					<td><?= $_SESSION['interval_LR_Juni'][$i]; ?></td>			
				</tr>
			<?php endfor; ?>	
			<tr class="text-center collapse accordion-collapse LR_all" id="LRr6" data-bs-parent=".table">
				<th  colspan="2">Total</th>
				<td><?= $_SESSION['jumlahFrekuensiLR_Juni']; ?></td>
				<td><?= $_SESSION['jumlah_prob_Juni_LR'] ?></td>
			</tr>
		</tbody>
	</table>


	<!-- bulan Juli -->
	<table class="table table-bordered table-sm accordion mb-0">
		<!-- <caption class="caption-top text-center">Data Meninggal Dunia</caption> -->
		<thead>
			<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#LRr7">
				<th colspan="5" style="border-left-color:red">Juli <i class="fa-solid fa-caret-down"></i></th>
				<th class="w-25 text-center"><?= $_SESSION['angkaAcakLR']['Juli'] ?></th>	
			</tr>
			<tr class="text-center collapse accordion-collapse LR_all"  id="LRr7" data-bs-parent=".table" >
				<th>No</th>
				<th>Bulan</th>
				<th>Frekuensi</th>
				<th>Probabilitas</th>
				<th>Kumulatif</th>
				<th>Interval Angka Acak</th>
			</tr>
		</thead>
		<tbody>
			<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLR_bulan']) ; $i++) : ?>
			<tr class="text-center collapse accordion-collapse LR_all" id="LRr7" data-bs-parent=".table" >
				<td><?= $no++; ?></td>
				<td class="text-justify">Juli  <?= $_SESSION['tahunLR_bulan'][$i]; ?></td>
				<td><?= $_SESSION['dataLR_bulan'][$i]['Juli']['data_bulan'];  ?></td>	
				<td><?= $_SESSION['prob_LR_Juli'][$i]?></td>
				<td><?= $_SESSION['kumu_Juli_LR'][$i]; ?></td>
				<td><?= $_SESSION['interval_LR_Juli'][$i]; ?></td>	
			</tr>
		<?php endfor; ?>	
		<tr class="text-center collapse accordion-collapse LR_all" id="LRr7" data-bs-parent=".table">
			<th  colspan="2">Total</th>
			<td><?= $_SESSION['jumlahFrekuensiLR_Juli']; ?></td>
			<td><?= $_SESSION['jumlah_prob_Juli_LR'] ?></td>
		</tr>
	</tbody>
</table>


<!-- bulan Agustus -->
<table class="table table-bordered table-sm accordion mb-0">
	<!-- <caption class="caption-top text-center">Data Meninggal Dunia</caption> -->

	<thead>
		<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#LRr8">
			<th colspan="5" style="border-left-color:red">Agustus <i class="fa-solid fa-caret-down"></i></th>
			<th class="w-25 text-center"><?= $_SESSION['angkaAcakLR']['Agustus'] ?></th>	
		</tr>
		<tr class="text-center collapse accordion-collapse LR_all"  id="LRr8" data-bs-parent=".table" >
			<th>No</th>
			<th>Bulan</th>
			<th>Frekuensi</th>
			<th>Probabilitas</th>
			<th>Kumulatif</th>
			<th>Interval Angka Acak</th>
		</tr>
	</thead>
	<tbody>
		<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLR_bulan']) ; $i++) : ?>
		<tr class="text-center collapse accordion-collapse LR_all" id="LRr8" data-bs-parent=".table" >
			<td><?= $no++; ?></td>
			<td class="text-justify">Agustus  <?= $_SESSION['tahunLR_bulan'][$i]; ?></td>
			<td><?= $_SESSION['dataLR_bulan'][$i]['Agustus']['data_bulan'];  ?></td>
			<td><?= $_SESSION['prob_LR_Agustus'][$i]; ?></td>
			<td><?= $_SESSION['kumu_Agustus_LR'][$i]; ?></td>
			<td><?= $_SESSION['interval_LR_Agustus'][$i]; ?></td>				
		</tr>
	<?php endfor; ?>	
	<tr class="text-center collapse accordion-collapse LR_all" id="LRr8" data-bs-parent=".table">
		<th  colspan="2">Total</th>
		<td><?= $_SESSION['jumlahFrekuensiLR_Agustus']; ?></td>
		<td><?= $_SESSION['jumlah_prob_Agustus_LR'] ?></td>
	</tr>
</tbody>
</table>

<!-- bulan September -->
<table class="table table-bordered table-sm accordion mb-0">
	<!-- <caption class="caption-top text-center">Data Meninggal Dunia</caption> -->
	<thead>
		<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#LRr9">
			<th colspan="5" style="border-left-color:red">September <i class="fa-solid fa-caret-down"></i></th>
			<th class="w-25 text-center"><?= $_SESSION['angkaAcakLR']['September'] ?></th>	
		</tr>			
		<tr class="text-center collapse accordion-collapse LR_all"  id="LRr9" data-bs-parent=".table" >
			<th>No</th> 		
			<th>Bulan</th>
			<th>Frekuensi</th>
			<th>Probabilitas</th>
			<th>Kumulatif</th>
			<th>Interval Angka Acak</th>
		</tr>
	</thead>
	<tbody>
		<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLR_bulan']) ; $i++) : ?>
		<tr class="text-center collapse accordion-collapse LR_all" id="LRr9" data-bs-parent=".table" >
			<td><?= $no++; ?></td>
			<td class="text-justify">September  <?= $_SESSION['tahunLR_bulan'][$i]; ?></td>
			<td><?= $_SESSION['dataLR_bulan'][$i]['September']['data_bulan'];  ?></td>		
			<td><?= $_SESSION['prob_LR_September'][$i]; ?></td>
			<td><?= $_SESSION['kumu_September_LR'][$i]; ?></td>
			<td><?= $_SESSION['interval_LR_September'][$i]; ?></td>	
		</tr>
	<?php endfor; ?>	
	<tr class="text-center collapse accordion-collapse LR_all" id="LRr9" data-bs-parent=".table">
		<th  colspan="2">Total</th>
		<td><?= $_SESSION['jumlahFrekuensiLR_September']; ?></td>
		<td><?= $_SESSION['jumlah_prob_September_LR'] ?></td>
	</tr>
</tbody>
</table>

<!-- bulan Oktober -->
<table class="table table-bordered table-sm accordion mb-0">
	<!-- <caption class="caption-top text-center">Data Meninggal Dunia</caption> -->
	<thead>
		<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#LRr10">
			<th colspan="5" style="border-left-color:red">Oktober <i class="fa-solid fa-caret-down"></i></th>
			<th class="w-25 text-center"><?= $_SESSION['angkaAcakLR']['Oktober'] ?></th>	
		</tr>
		<tr class="text-center collapse accordion-collapse LR_all"  id="LRr10" data-bs-parent=".table" >
			<th>No</th>
			<th>Bulan</th>
			<th>Frekuensi</th>
			<th>Probabilitas</th>
			<th>Kumulatif</th>
			<th>Interval Angka Acak</th>
		</tr>
	</thead>
	<tbody>
		<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLR_bulan']) ; $i++) : ?>
		<tr class="text-center collapse accordion-collapse LR_all" id="LRr10" data-bs-parent=".table" >
			<td><?= $no++; ?></td>
			<td class="text-justify">Oktober  <?= $_SESSION['tahunLR_bulan'][$i]; ?></td>
			<td><?= $_SESSION['dataLR_bulan'][$i]['Oktober']['data_bulan'];  ?></td>
			<td><?= $_SESSION['prob_LR_Oktober'][$i]; ?></td>
			<td><?= $_SESSION['kumu_Oktober_LR'][$i]; ?></td>
			<td><?= $_SESSION['interval_LR_Oktober'][$i]; ?></td>			
		</tr>
	<?php endfor; ?>	
	<tr class="text-center collapse accordion-collapse LR_all" id="LRr10" data-bs-parent=".table">
		<th  colspan="2">Total</th>
		<td><?= $_SESSION['jumlahFrekuensiLR_Oktober']; ?></td>
		<td><?= $_SESSION['jumlah_prob_Oktober_LR'] ?></td>
	</tr>
</tbody>
</table>

<!-- bulan November -->
<table class="table table-bordered table-sm accordion mb-0">
	<!-- <caption class="caption-top text-center">Data Meninggal Dunia</caption> -->
	<thead>
		<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#LRr11">
			<th colspan="5" style="border-left-color:blue">November <i class="fa-solid fa-caret-down"></i></th>
			<th class="w-25 text-center"><?= $_SESSION['angkaAcakLR']['November'] ?></th>	
		</tr>
		<tr class="text-center collapse accordion-collapse LR_all"  id="LRr11" data-bs-parent=".table" >
			<th>No</th>
			<th>Bulan</th>
			<th>Frekuensi</th>
			<th>Probabilitas</th>
			<th>Kumulatif</th>
			<th>Interval Angka Acak</th>
		</tr>
	</thead>
	<tbody>
		<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLR_bulan']) ; $i++) : ?>
		<tr class="text-center collapse accordion-collapse LR_all" id="LRr11" data-bs-parent=".table" >
			<td><?= $no++; ?></td>
			<td class="text-justify">November  <?= $_SESSION['tahunLR_bulan'][$i]; ?></td>
			<td><?= $_SESSION['dataLR_bulan'][$i]['November']['data_bulan'];  ?></td>
			<td><?= $_SESSION['prob_LR_November'][$i]; ?></td>
			<td><?= $_SESSION['kumu_November_LR'][$i]; ?></td>
			<td><?= $_SESSION['interval_LR_November'][$i]; ?></td>			
		</tr>
	<?php endfor; ?>	
	<tr class="text-center collapse accordion-collapse LR_all" id="LRr11" data-bs-parent=".table">
		<th  colspan="2">Total</th>
		<td><?= $_SESSION['jumlahFrekuensiLR_November']; ?></td>
		<td><?= $_SESSION['jumlah_prob_November_LR'] ?></td>
	</tr>
</tbody>
</table>

<!-- bulan Desember -->
<table class="table table-bordered table-sm accordion mb-0">
	<!-- <caption class="caption-top text-center">Data Meninggal Dunia</caption> -->
	<thead>
		<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#LRr12">
			<th colspan="5" style="border-left-color:blue">Desember <i class="fa-solid fa-caret-down"></i></th>
			<th class="w-25 text-center"><?= $_SESSION['angkaAcakLR']['Desember'] ?></th>	
		</tr>
		<tr class="text-center collapse accordion-collapse LR_all"  id="LRr12" data-bs-parent=".table" >
			<th>No</th>
			<th>Bulan</th>
			<th>Frekuensi</th>
			<th>Probabilitas</th>
			<th>Kumulatif</th>
			<th>Interval Angka Acak</th>
		</tr>
	</thead>
	<tbody>
		<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLR_bulan']) ; $i++) : ?>
		<tr class="text-center collapse accordion-collapse LR_all" id="LRr12" data-bs-parent=".table" >
			<td><?= $no++; ?></td>
			<td class="text-justify">Desember  <?= $_SESSION['tahunLR_bulan'][$i]; ?></td>
			<td><?= $_SESSION['dataLR_bulan'][$i]['Desember']['data_bulan'];  ?></td>
			<td><?= $_SESSION['prob_LR_Desember'][$i]; ?></td>
			<td><?= $_SESSION['kumu_Desember_LR'][$i]; ?></td>
			<td><?= $_SESSION['interval_LR_Desember'][$i]; ?></td>			
		</tr>
	<?php endfor; ?>	
	<tr class="text-center collapse accordion-collapse LR_all" id="LRr12" data-bs-parent=".table">
		<th  colspan="2">Total</th>
		<td><?= $_SESSION['jumlahFrekuensiLR_Desember']; ?></td>
		<td><?= $_SESSION['jumlah_prob_Desember_LR'] ?></td>
	</tr>
</tbody>
</table>
</tr>
</tbody>
<caption>								
	<ul style="list-style-type:square;">
		<li style="color: blue;"><span style="color: gray;">Musim Hujan</span></li>
		<li style="color: red;"><span style="color: gray;">Musim Kemarau</span></li>
	</ul> 
</caption>
</table>
</div>		
</div>
</div>
</div>
</div>
</div>



