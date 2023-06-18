<?php 
require_once "functions.php"; 
session_start();
if (!isset($_SESSION['login'])) {
	header("Location: login.php");
}

//data bulan
$bulan = ["Januari","Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];

//data hasil
$dataMeninggal = data_hasilMeninggal();
$datalukaBerat = data_hasillukaBerat();
$datalukaRingan = data_hasillukaRingan();	

?>
<?php 	require "layout/header.php" ?>


<h3>Data Hasil Simulasi</h3>

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
								<caption class="caption-top text-center">Data Hasil Simulasi Meninggal Dunia <?=  $_SESSION['tahun_hasilMD']; ?></caption>
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
									<th ><?= $no++; ?></th>
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
								<th colspan="2">Total</th>
								<td><?= $_SESSION['total_hasil_frekMD']; ?></td>
								<td><?= $_SESSION['total_hasil_probMD']; ?></td>
								<td colspan="3">-</td>
								<td><?= $_SESSION['total_hasil_simMD']; ?></td>
								<td><?= $_SESSION['total_data_realMD'];  ?></td>
								<td>-</td>	
							</tr>
							<tr class="text-center">
								<th colspan="2">Rata-rata</th>
								<td><?= $_SESSION['rata2_hasilfrekMD']; ?></td>
								<td colspan="4">-</td>
								<td><?= $_SESSION['rata2_hasil_simMD']; ?></td>
								<td><?= $_SESSION['rata2_hasil_realMD']; ?></td>
								<td><?= $_SESSION['rata2_hasil_akurasiMD']; ?></td>			
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
								<caption class="caption-top text-center">Data Hasil Simulasi Meninggal Dunia <?=  $_SESSION['tahun_hasilLB']; ?></caption>
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
									<th ><?= $no++; ?></th>
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
								<th colspan="2">Total</th>
								<td><?= $_SESSION['total_hasil_frekLB']; ?></td>
								<td><?= $_SESSION['total_hasil_probLB']; ?></td>
								<td colspan="3">-</td>
								<td><?= $_SESSION['total_hasil_simLB']; ?></td>
								<td><?= $_SESSION['total_data_realLB'];  ?></td>
								<td>-</td>	
							</tr>
							<tr class="text-center">
								<th colspan="2">Rata-rata</th>
								<td><?= $_SESSION['rata2_hasilfrekLB']; ?></td>
								<td colspan="4">-</td>
								<td><?= $_SESSION['rata2_hasil_simLB']; ?></td>
								<td><?= $_SESSION['rata2_hasil_realLB']; ?></td>
								<td><?= $_SESSION['rata2_hasil_akurasiLB']; ?></td>			
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
								<caption class="caption-top text-center">Data Hasil Simulasi Meninggal Dunia <?=  $_SESSION['tahun_hasilLR']; ?></caption>
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
									<th ><?= $no++; ?></th>
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
								<th colspan="2">Total</th>
								<td><?= $_SESSION['total_hasil_frekLR']; ?></td>
								<td><?= $_SESSION['total_hasil_probLR']; ?></td>
								<td colspan="3">-</td>
								<td><?= $_SESSION['total_hasil_simLR']; ?></td>
								<td><?= $_SESSION['total_data_realLR'];  ?></td>
								<td>-</td>	
							</tr>
							<tr class="text-center">
								<th colspan="2">Rata-rata</th>
								<td><?= $_SESSION['rata2_hasilfrekLR']; ?></td>
								<td colspan="4">-</td>
								<td><?= $_SESSION['rata2_hasil_simLR']; ?></td>
								<td><?= $_SESSION['rata2_hasil_realLR']; ?></td>
								<td><?= $_SESSION['rata2_hasil_akurasiLR']; ?></td>			
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


<?php require "grafik.php"; ?>
<?php require "export.php"; ?>
<?php 	require "layout/footer.php" ?>
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

     //export data
     $('#exportMD').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'excel', 'pdf', 'print'
        ]
    } ); 

    $('#exportLB').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'excel', 'pdf', 'print'
        ]
    } ); 

    $('#exportLR').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'excel', 'pdf', 'print'
        ]
    } );         
	});
</script>