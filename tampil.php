<?php 


$dataMeninggal = dataMeninggal();
$datalukaBerat = dataLukaBerat();
$datalukaRingan = datalukaRingan();


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
					<?php if($countData[2]['nama'] == "Meninggal" && $countData[2]['jumlah'] > 0) : ?>
						<div class="position-relative">
							<div class="row">
								<div class="col-4">
									<div class="dropdown d-inline">
										<button class="btn btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
											Tahun
										</button>
										<ul class="dropdown-menu">
											<?php foreach ($dataMeninggal as $key) : ?>
												<li><a class="dropdown-item" href="tables.php?id_M=<?= $key['id'] ?>"><?= $key['tahun_data_mentah'] ?></a></li>

											<?php endforeach; ?>
										</ul>
									</div>
								</div>
								<div class="col-8 text-end">
									<?php if(isset($_SESSION['kondisiMD'])) : ?>
										<input type="checkbox" name="pilihMD
										" class="me-2" checked>

										<a href="#" class="btn btn-sm btn-dark shadow-sm d-inline" data-toggle="modal" data-target="#update-data" data-backdrop="static" data-keyboard="false"><i class="fa-solid fa-pen-to-square"></i> Update</a>

										<a href="#" class="btn btn-sm btn-dark shadow-sm d-inline" data-toggle="modal" data-target="#delete-data" data-backdrop="static" data-keyboard="false"><i class="fa-solid fa-trash-can"></i> Delete</a>
									<?php endif; ?>
								</div>
							</div>
						</div>
						<?php if(isset($_SESSION['kondisiMD'])) : ?>
							<table class="table table-bordered mt-3">
								<thead>
									<tr class="text-center">
										<th>#</th>
										<th>Bulan</th>
										<th>Data Mentah Tahun <?= $_SESSION['tahun_data_mentah']; ?></th>
										<th>Data Real Tahun <?= $_SESSION['tahun_data_real']; ?></th>
									</tr>
								</thead>
								<tbody>
									<?php $no = 1; for ($i=0; $i < count($bulan) ; $i++) : ?>
									<tr>
										<th><?= $no++; ?></th>
										<td><?=  $bulan[$i]; ?></td>
										<td><?= $_SESSION['convertMentah'][$i]; ?></td>
										<td><?=  $_SESSION['convertReal'][$i]; ?></td>
									</tr>
								<?php endfor ?>
							</tbody>
						</table>
					<?php else : ?>
						<em>Anda Belum Memilih Data Diatas!</em>
					<?php endif ?>
				<?php else : ?>
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
									<ul class="dropdown-menu">
										<?php foreach ($datalukaBerat as $key) : ?>
											<li><a class="dropdown-item" href="tables.php?id_LB=<?= $key['id'] ?>"><?= $key['tahun_data_mentah'] ?></a></li>
										<?php endforeach; ?>
									</ul>
								</div>
							</div>
							<div class="col-8 text-end">
								<?php if(isset($_SESSION['kondisiLB'])) : ?>
									<input type="checkbox" name="pilihLB" class="me-2">

									<a href="" class="btn btn-sm btn-dark shadow-sm d-inline" data-toggle="modal" data-target="#update-data" data-backdrop="static" data-keyboard="false"><i class="fa-solid fa-pen-to-square"></i> Update</a>

									<a href="#" class="btn btn-sm btn-dark shadow-sm d-inline" data-toggle="modal" data-target="#" data-backdrop="static" data-keyboard="false"><i class="fa-solid fa-trash-can"></i> Delete</a>
								<?php endif; ?>
							</div>
						</div>
					</div>

					<?php if (isset($_SESSION['kondisiLB'])): ?>
						<table class="table table-bordered mt-3">
							<thead>
								<tr class="text-center">
									<th>#</th>
									<th>Bulan</th>
									<th>Data Mentah Tahun  <?= $_SESSION['tahun_data_mentahLB']; ?></th>
									<th>Data Real Tahun <?= $_SESSION['tahun_data_realLB']; ?></th>
								</tr>
							</thead>
							<tbody>
								<?php $no = 1; for ($i=0; $i < count($bulan) ; $i++) : ?>
								<tr>
									<th><?= $no++; ?></th>
									<td><?=  $bulan[$i]; ?></td>
									<td><?= $_SESSION['convertMentahLB'][$i];  ?></td>
									<td><?= $_SESSION['convertRealLB'][$i];  ?></td>
								</tr>
							<?php endfor ?>
						</tbody>
					</table>
				<?php else :  ?>
					<em>Anda Belum Memilih Data Diatas!</em>
				<?php endif ?>
			<?php else : ?>
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
								<ul class="dropdown-menu">
									<?php foreach ($datalukaRingan as $key) : ?>
										<li><a class="dropdown-item" href="tables.php?id_LR=<?= $key['id'] ?>"><?= $key['tahun_data_mentah'] ?></a></li>
										<?php $_SESSION['id_updateLR'] = $key['id'] ?>
									<?php endforeach; ?>
								</ul>
							</div>
						</div>
						<div class="col-8 text-end">
							<?php if(isset($_SESSION['kondisiLR'])) : ?>
							<input type="checkbox" name="pilihLR" class="me-2">

							<a href="#" class="btn btn-sm btn-dark shadow-sm d-inline" data-toggle="modal" data-target="#update-data" data-backdrop="static" data-keyboard="false"><i class="fa-solid fa-pen-to-square"></i> Update</a>

							<a href="#" class="btn btn-sm btn-dark shadow-sm d-inline" data-toggle="modal" data-target="#" data-backdrop="static" data-keyboard="false"><i class="fa-solid fa-trash-can"></i> Delete</a>
							<?php endif; ?>
						</div>
					</div>
				</div>

				<?php if (isset($_SESSION['kondisiLR'])) : ?>
					<table class="table table-bordered mt-3" >
						<thead>
							<tr class="text-center">
								<th>#</th>
								<th>Bulan</th>
								<th>Data Mentah Tahun <?= $_SESSION['tahun_data_mentahLR']; ?></th>
								<th>Data Real Tahun <?= $_SESSION['tahun_data_realLR']; ?></th>
							</tr>
						</thead>
						<tbody>
							<?php $no = 1; for ($i=0; $i < count($bulan) ; $i++) : ?>
							<tr>
								<th><?= $no++;?></th>
								<td><?= $bulan[$i];?></td>
								<td><?= $_SESSION['convertMentahLR'][$i];?></td>
								<td><?= $_SESSION['convertRealLR'][$i]; ?></td>
							</tr>
						<?php endfor ?>
					</tbody>
				</table>
			<?php else :  ?>
				<em>Anda Belum Memilih Data Diatas!</em>
			<?php endif ?>
		<?php else : ?>
			<h6>Data Belum Ada</h6>
		<?php endif; ?>
	</div>
</div>
</div>
</div>
</div>




<?php require "update.php" ?>

















