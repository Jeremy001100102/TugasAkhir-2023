<?php 	
//Probabilitas Meninggal
$_SESSION['convert_probMD'] = [];
$_SESSION['jumlah_probMD'] = 0;
for ($i=0; $i < count($bulan); $i++) { 
	$probMD[$i] = $_SESSION['hitung_convertMentahMD'][$i] / $_SESSION['jumlahFrekuensiMD'];
	$_SESSION['convert_probMD'][$i] = number_format($probMD[$i], 2);
	$_SESSION['jumlah_probMD'] += $probMD[$i];
}

//Proababilitas Luka Berat
$_SESSION['convert_probLB'] = [];
$_SESSION['jumlah_probLB'] = 0;
for ($i=0; $i < count($bulan); $i++) { 
	$probLB[$i] = $_SESSION['hitung_convertMentahLB'][$i] / $_SESSION['jumlahFrekuensiLB'];
	$_SESSION['convert_probLB'][$i] = number_format($probLB[$i], 2);
	$_SESSION['jumlah_probLB'] += $probLB[$i];
}

//Probabilitas Luka Ringan
$_SESSION['convert_probLR'] = [];
$_SESSION['jumlah_probLR'] = 0;
for ($i=0; $i < count($bulan); $i++) { 
	$probLR[$i] = $_SESSION['hitung_convertMentahLR'][$i] / $_SESSION['jumlahFrekuensiLR'];
	$_SESSION['convert_probLR'][$i] = number_format($probLR[$i], 2);
	$_SESSION['jumlah_probLR'] += $probLR[$i];
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
								</tr>
							</thead>
							<tbody>
								<?php $no = 1; for ($i=0; $i < count($bulan) ; $i++) : ?>
								<tr>
									<th class="text-center" <?= $no >= 4 && $no <= 10 ?"style='border-left-color:red' " : "style='border-left-color:blue'"?>><?= $no++; ?></th>
									<td><?=  $bulan[$i]; ?></td>
									<td><?= $_SESSION['hitung_convertMentahMD'][$i]; ?></td>
									<td><?= $_SESSION['convert_probMD'][$i]; ?></td>	
								</tr>
							<?php endfor ?>
							<tr>
								<th class="text-center" colspan="2">Total</th>
								<td><?= $_SESSION['jumlahFrekuensiMD']; ?></td>
								<td><?= $_SESSION['jumlah_probMD'];?></td>	
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
								</tr>
							</thead>
							<tbody>
								<?php $no = 1; for ($i=0; $i < count($bulan) ; $i++) : ?>
								<tr>
									<th class="text-center" <?= $no >= 4 && $no <= 10 ?"style='border-left-color:red' " : "style='border-left-color:blue'"?>><?= $no++; ?></th>
									<td><?=  $bulan[$i]; ?></td>
									<td><?= $_SESSION['hitung_convertMentahLB'][$i]; ?></td>
									<td><?= $_SESSION['convert_probLB'][$i]; ?></td>	
								</tr>
							<?php endfor ?>
							<tr>
								<th class="text-center" colspan="2">Total</th>
								<td><?= $_SESSION['jumlahFrekuensiLB']; ?></td>
								<td><?= $_SESSION['jumlah_probLB'];?></td>
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
								</tr>
							</thead>
							<tbody>
								<?php $no = 1; for ($i=0; $i < count($bulan) ; $i++) : ?>
								<tr>
									<th class="text-center" <?= $no >= 4 && $no <= 10 ?"style='border-left-color:red' " : "style='border-left-color:blue'"?>><?= $no++; ?></th>
									<td><?=  $bulan[$i]; ?></td>
									<td><?= $_SESSION['hitung_convertMentahLR'][$i]; ?></td>
									<td><?= $_SESSION['convert_probLR'][$i]; ?></td>	
								</tr>
								<?php endfor ?>
							<tr>
								<th class="text-center" colspan="2">Total</th>
								<td><?= $_SESSION['jumlahFrekuensiLR']; ?></td>
								<td><?= $_SESSION['jumlah_probLR'];?></td>
							</tr>
						</tbody>
					</table>
					</div>		
				</div>
			</div>
		</div>
	</div>
</div>
