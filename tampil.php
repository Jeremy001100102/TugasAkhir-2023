<?php 

$dataMeninggal = dataMeninggal();
$datalukaBerat = datalukaBerat();
$datalukaRingan = datalukaRingan();



if (isset($_POST['cekMD']) || isset($_SESSION['aktif_cek_MD']) === true) {
	if ($_SESSION['cek_MD'] == 1) {
		$_SESSION['aktif_cek_MD'] = true;
	}else{
		$_SESSION['aktif_cek_MD'] = false;
	}

	$_SESSION['cek_MD'] = isset($_POST['cekMD']) ? $_POST['cekMD'] : $_SESSION['cek_MD'];
}

if (isset($_POST['cekLB']) || isset($_SESSION['aktif_cek_LB']) === true) {
	if ($_SESSION['cek_LB'] == 1) {
		$_SESSION['aktif_cek_LB'] = true;
	}else{
		$_SESSION['aktif_cek_LB'] = false;
	}

	$_SESSION['cek_LB'] = isset($_POST['cekLB']) ? $_POST['cekLB'] : $_SESSION['cek_LB'];    
}


if (isset($_POST['cekLR']) || isset($_SESSION['aktif_cek_LR']) === true) {
	if ($_SESSION['cek_LR'] == 1) {
		$_SESSION['aktif_cek_LR'] = true;
	}else{
		$_SESSION['aktif_cek_LR'] = false;
	}

	$_SESSION['cek_LR'] = isset($_POST['cekLR']) ? $_POST['cekLR'] : $_SESSION['cek_LR'];  
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
			<div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
				<div class="accordion-body">
					<?php if($countData[2]['nama'] == "Meninggal Dunia" && $countData[2]['jumlah'] > 0) : ?>
						<div class="position-relative">
							<div class="row">
								<div class="col-4">
									<div class="dropdown d-inline">
										<button class="btn btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
											Tahun
										</button>
										<ul class="dropdown-menu style-dropdown">
											<?php foreach ($dataMeninggal as $key) : ?>
												<li><a class="dropdown-item <?=  isset($_SESSION['tahun_MD']) && $_SESSION['tahun_MD'] == $key['tahun'] ? "active" : "" ?>" href="tables.php?id_MD=<?= $key['id'] ?>"><?= $key['tahun'] ?></a>
												</li>
											<?php endforeach; ?>
										</ul>
									</div>
								</div>
								<div class="col-8 text-end">
									<?php if(isset($_SESSION['kondisiMD'])) : ?>

										<div class="form-check d-inline me-2">
											<input class="form-check-input" type="checkbox"  id="checkMD" <?= isset($_SESSION['aktif_cek_MD'] ) && $_SESSION['aktif_cek_MD'] === true ? "checked" : "";  ?>>
											<label class="form-check-label" for="checkMD">Pilih Data Simulasi		
											</label>
										</div>
										

										<a href="#"  class="btn btn-sm btn-dark shadow-sm d-inline" data-toggle="modal" data-target="#update-dataMD" data-backdrop="static" data-keyboard="false"><i class="fa-solid fa-pen-to-square"></i> Update</a>

										<a href="delete.php?id_hapusMD=<?= $_SESSION['id_updateMD']  ?>" class="btn btn-sm btn-dark shadow-sm d-inline"><i class="fa-solid fa-trash-can"></i> Delete</a>
									<?php endif; ?>
								</div>
							</div>
						</div>
						<?php if(isset($_SESSION['kondisiMD'])) : ?>
							<table class="table table-bordered table-sm">
								<caption class="caption-top text-center">Meninggal Dunia</caption>
								<caption>								
									<ul style="list-style-type:square;">
										<li style="color: blue;"><span style="color: gray;">Musim Hujan</span></li>
										<li style="color: red;"><span style="color: gray;">Musim Kemarau</span></li>
									</ul> 
								</caption>
								<thead>
									<tr class="text-center">
										<th>#</th>
										<th>Bulan</th>
										<th>Data Tahun <?= $_SESSION['tahun_MD']; ?></th>
									</tr>	
								</thead>
								<tbody>
									<?php $no = 1; for ($i=0; $i < count($bulan) ; $i++) : ?>
									<tr>
										<th class="text-center" <?= $no >= 4 && $no <= 10 ?"style='border-left-color:red' " : "style='border-left-color:blue'"?>><?= $no++; ?></th>
											<td><?=  $bulan[$i]; ?></td>
											<td><?= $_SESSION['data_bulanMD'][$i]; ?></td>	
										</tr>
									<?php endfor ?>
								</tbody>
							</table>
						<?php else : ?>
							<em>Anda Belum Memilih Data Tahun Diatas!</em>
						<?php endif ?>
					<?php else : ?>
						<?php unset($_SESSION['kondisiMD']);  ?>
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
					<?php if($countData[0]['nama'] == "Luka Berat" && $countData[0]['jumlah'] > 0) : ?>
						<div class="position-relative">
							<div class="row">
								<div class="col-4">
									<div class="dropdown d-inline">
										<button class="btn btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
											Tahun
										</button>
										<ul class="dropdown-menu style-dropdown">
											<?php foreach ($datalukaBerat as $key) : ?>
												<li><a class="dropdown-item <?=  isset($_SESSION['tahun_LB']) && $_SESSION['tahun_LB'] == $key['tahun'] ? "active" : "" ?>" href="tables.php?id_LB=<?= $key['id'] ?>"><?= $key['tahun'] ?></a>
												</li>
											<?php endforeach; ?>
										</ul>
									</div>
								</div>
								<div class="col-8 text-end">
									<?php if(isset($_SESSION['kondisiLB'])) : ?>
										<div class="form-check d-inline me-2">
											<input class="form-check-input" type="checkbox" value="" id="checkLB" <?= isset($_SESSION['aktif_cek_LB'] ) && $_SESSION['aktif_cek_LB'] === true ? "checked" : "";  ?>>
											<label class="form-check-label" for="checkLB">Pilih Data Simulasi 			
											</label>
										</div>

										<a href="#" class="btn btn-sm btn-dark shadow-sm d-inline" data-toggle="modal" data-target="#update-dataLB" data-backdrop="static" data-keyboard="false"><i class="fa-solid fa-pen-to-square"></i> Update</a>

										<a href="delete.php?id_hapusLB=<?= $_SESSION['id_updateLB']  ?>" class="btn btn-sm btn-dark shadow-sm d-inline"><i class="fa-solid fa-trash-can"></i> Delete</a>
									<?php endif; ?>
								</div>
							</div>
						</div>

						<?php if (isset($_SESSION['kondisiLB'])): ?>
							<table class="table table-bordered table-sm">
								<caption class="caption-top text-center">Luka Berat</caption>
								<caption>								
									<ul style="list-style-type:square;">
										<li style="color: blue;"><span style="color: gray;">Musim Hujan</span></li>
										<li style="color: red;"><span style="color: gray;">Musim Kemarau</span></li>
									</ul> 
								</caption>
								<thead>
									<tr class="text-center">
										<th>#</th>
										<th>Bulan</th>
										<th>Data Tahun  <?= $_SESSION['tahun_LB']; ?></th>

									</tr>
								</thead>
								<tbody>
									<?php $no = 1; for ($i=0; $i < count($bulan) ; $i++) : ?>
									<tr>
										<th class="text-center" <?= $no >= 4 && $no <= 10 ?"style='border-left-color:red' " : "style='border-left-color:blue'"?>><?= $no++; ?></th>
											<td><?=  $bulan[$i]; ?></td>
											<td><?= $_SESSION['data_bulanLB'][$i]; ?></td>

										</tr>
									<?php endfor ?>
								</tbody>
							</table>
						<?php else :  ?>
							<em>Anda Belum Memilih Data Tahun Diatas!</em>
						<?php endif ?>
					<?php else : ?>
						<?php unset($_SESSION['kondisiLB']);  ?>
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
					<?php if($countData[1]['nama'] == "Luka Ringan" && $countData[1]['jumlah'] > 0) : ?>
						<div class="position-relative">
							<div class="row">
								<div class="col-4">
									<div class="dropdown d-inline">
										<button class="btn btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
											Tahun
										</button>
										<ul class="dropdown-menu style-dropdown">
											<?php foreach ($datalukaRingan as $key) : ?>
												<li><a class="dropdown-item <?=  isset($_SESSION['tahun_LR']) && $_SESSION['tahun_LR'] == $key['tahun'] ? "active" : "" ?>" href="tables.php?id_LR=<?= $key['id'] ?>"><?= $key['tahun'] ?></a>
												</li>
											<?php endforeach; ?>
										</ul>
									</div>
								</div>
								<div class="col-8 text-end">
									<?php if(isset($_SESSION['kondisiLR'])) : ?>
										<div class="form-check d-inline me-2">
											<input class="form-check-input" type="checkbox" value="" id="checkLR" <?= isset($_SESSION['aktif_cek_LR'] ) && $_SESSION['aktif_cek_LR'] === true ? "checked" : "";  ?>>
											<label class="form-check-label" for="checkLR">Pilih Data Simulasi			
											</label>
										</div>
										

										<a href="#" class="btn btn-sm btn-dark shadow-sm d-inline" data-toggle="modal" data-target="#update-dataLR" data-backdrop="static" data-keyboard="false"><i class="fa-solid fa-pen-to-square"></i> Update</a>

										<a href="delete.php?id_hapusLR=<?= $_SESSION['id_updateLR']  ?>" class="btn btn-sm btn-dark shadow-sm d-inline"><i class="fa-solid fa-trash-can"></i> Delete</a>
									<?php endif; ?>
								</div>
							</div>
						</div>

						<?php if (isset($_SESSION['kondisiLR'])) : ?>
							<table class="table table-bordered table-sm">
								<caption class="caption-top text-center">Luka Ringan</caption>
								<caption>								
									<ul style="list-style-type:square;">
										<li style="color: blue;"><span style="color: gray;">Musim Hujan</span></li>
										<li style="color: red;"><span style="color: gray;">Musim Kemarau</span></li>
									</ul> 
								</caption>
								<thead>
									<tr class="text-center">
										<th>#</th>
										<th>Bulan</th>
										<th>Data Tahun <?= $_SESSION['tahun_LR']; ?></th>
									</tr>
								</thead>
								<tbody>
									<?php $no = 1; for ($i=0; $i < count($bulan) ; $i++) : ?>
									<tr>
										<th class="text-center" <?= $no >= 4 && $no <= 10 ?"style='border-left-color:red' " : "style='border-left-color:blue'"?>><?= $no++;?></th>
											<td><?= $bulan[$i];?></td>
											<td><?= $_SESSION['data_bulanLR'][$i]; ?></td>
										</tr>
									<?php endfor ?>
								</tbody>
							</table>
						<?php else :  ?>
							<em>Anda Belum Memilih Data Tahun Diatas!</em>
						<?php endif ?>
					<?php else : ?>
						<?php unset($_SESSION['kondisiLR']);  ?>
						<h6>Data Belum Ada</h6>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</div>



<?php 	require "update.php";;
 ?>











