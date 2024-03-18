<?php 
$_SESSION['jumlahFrekuensiMD_Januari'] = 0;
$_SESSION['jumlahFrekuensiMD_Februari'] = 0;
$_SESSION['jumlahFrekuensiMD_Maret'] = 0;
$_SESSION['jumlahFrekuensiMD_April'] = 0;
$_SESSION['jumlahFrekuensiMD_Mei'] = 0;
$_SESSION['jumlahFrekuensiMD_Juni'] = 0;
$_SESSION['jumlahFrekuensiMD_Juli'] = 0;
$_SESSION['jumlahFrekuensiMD_Agustus'] = 0;
$_SESSION['jumlahFrekuensiMD_September'] = 0;
$_SESSION['jumlahFrekuensiMD_Oktober'] = 0;
$_SESSION['jumlahFrekuensiMD_November'] = 0;
$_SESSION['jumlahFrekuensiMD_Desember'] = 0;


$_SESSION['jumlahFrekuensiLB_Januari'] = 0;
$_SESSION['jumlahFrekuensiLB_Februari'] = 0;
$_SESSION['jumlahFrekuensiLB_Maret'] = 0;
$_SESSION['jumlahFrekuensiLB_April'] = 0;
$_SESSION['jumlahFrekuensiLB_Mei'] = 0;
$_SESSION['jumlahFrekuensiLB_Juni'] = 0;
$_SESSION['jumlahFrekuensiLB_Juli'] = 0;
$_SESSION['jumlahFrekuensiLB_Agustus'] = 0;
$_SESSION['jumlahFrekuensiLB_September'] = 0;
$_SESSION['jumlahFrekuensiLB_Oktober'] = 0;
$_SESSION['jumlahFrekuensiLB_November'] = 0;
$_SESSION['jumlahFrekuensiLB_Desember'] = 0;


$_SESSION['jumlahFrekuensiLR_Januari'] = 0;
$_SESSION['jumlahFrekuensiLR_Februari'] = 0;
$_SESSION['jumlahFrekuensiLR_Maret'] = 0;
$_SESSION['jumlahFrekuensiLR_April'] = 0;
$_SESSION['jumlahFrekuensiLR_Mei'] = 0;
$_SESSION['jumlahFrekuensiLR_Juni'] = 0;
$_SESSION['jumlahFrekuensiLR_Juli'] = 0;
$_SESSION['jumlahFrekuensiLR_Agustus'] = 0;
$_SESSION['jumlahFrekuensiLR_September'] = 0;
$_SESSION['jumlahFrekuensiLR_Oktober'] = 0;
$_SESSION['jumlahFrekuensiLR_November'] = 0;
$_SESSION['jumlahFrekuensiLR_Desember'] = 0;



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
						<!-- bulan january -->
						<table class="table table-bordered table-sm">
							<caption class="caption-top text-center">Data Meninggal Dunia</caption>
							<thead>
								<tr class="text-center">
									<th>No</th>
									<th>Bulan</th>
									<th>Frekuensi</th>
								</tr>
							</thead>
							<tbody>
								<?php $no = 1; for ($i=0; $i < count($_SESSION['dataMD_bulan']) ; $i++) : ?>
								
								<tr class="text-center">
									<td><?= $no++; ?></td>
									<td class="text-justify">Januari <?= $_SESSION['tahunMD_bulan'][$i]; ?></td>
									<td><?= $_SESSION['dataMD_bulan'][$i]['Januari']['data_bulan'];  ?></td>		
								</tr>
								<?php $_SESSION['jumlahFrekuensiMD_Januari'] +=  $_SESSION['dataMD_bulan'][$i]['Januari']['data_bulan'];?>
							<?php endfor; ?>	
							<tr class="text-center">
								<th colspan="2">Total</th>
								<td><?= $_SESSION['jumlahFrekuensiMD_Januari']; ?></td>
							</tr>
						</tbody>
					</table>

					<!-- bulan February -->
					<table class="table table-bordered table-sm">
						<caption class="caption-top text-center">Data Meninggal Dunia</caption>
						<thead>
							<tr class="text-center">
								<th>No</th>
								<th>Bulan</th>
								<th>Frekuensi</th>
							</tr>
						</thead>
						<tbody>
							<?php $no = 1; for ($i=0; $i < count($_SESSION['dataMD_bulan']) ; $i++) : ?>
							<tr class="text-center">
								<td><?= $no++; ?></td>
								<td class="text-justify">Februari  <?= $_SESSION['tahunMD_bulan'][$i]; ?></td>
								<td><?= $_SESSION['dataMD_bulan'][$i]['Februari']['data_bulan'];  ?></td>		
							</tr>
							<?php $_SESSION['jumlahFrekuensiMD_Februari'] +=  $_SESSION['dataMD_bulan'][$i]['Februari']['data_bulan'];?>
						<?php endfor; ?>	
						<tr class="text-center">
							<th  colspan="2">Total</th>
							<td><?= $_SESSION['jumlahFrekuensiMD_Februari']; ?></td>
						</tr>
						</tbody>
				</table>

				<!-- bulan Maret -->
					<table class="table table-bordered table-sm">
						<caption class="caption-top text-center">Data Meninggal Dunia</caption>
						<thead>
							<tr class="text-center">
								<th>No</th>
								<th>Bulan</th>
								<th>Frekuensi</th>
							</tr>
						</thead>
						<tbody>
							<?php $no = 1; for ($i=0; $i < count($_SESSION['dataMD_bulan']) ; $i++) : ?>
							<tr class="text-center">
								<td><?= $no++; ?></td>
								<td class="text-justify">Maret  <?= $_SESSION['tahunMD_bulan'][$i]; ?></td>
								<td><?= $_SESSION['dataMD_bulan'][$i]['Maret']['data_bulan'];  ?></td>		
							</tr>
							<?php $_SESSION['jumlahFrekuensiMD_Maret'] +=  $_SESSION['dataMD_bulan'][$i]['Maret']['data_bulan'];?>
						<?php endfor; ?>	
						<tr class="text-center">
							<th  colspan="2">Total</th>
							<td><?= $_SESSION['jumlahFrekuensiMD_Maret']; ?></td>
						</tr>
						</tbody>
				</table>

				<!-- bulan April -->
					<table class="table table-bordered table-sm">
						<caption class="caption-top text-center">Data Meninggal Dunia</caption>
						<thead>
							<tr class="text-center">
								<th>No</th>
								<th>Bulan</th>
								<th>Frekuensi</th>
							</tr>
						</thead>
						<tbody>
							<?php $no = 1; for ($i=0; $i < count($_SESSION['dataMD_bulan']) ; $i++) : ?>
							<tr class="text-center">
								<td><?= $no++; ?></td>
								<td class="text-justify">April  <?= $_SESSION['tahunMD_bulan'][$i]; ?></td>
								<td><?= $_SESSION['dataMD_bulan'][$i]['April']['data_bulan'];  ?></td>		
							</tr>
							<?php $_SESSION['jumlahFrekuensiMD_April'] +=  $_SESSION['dataMD_bulan'][$i]['April']['data_bulan'];?>
						<?php endfor; ?>	
						<tr class="text-center">
							<th  colspan="2">Total</th>
							<td><?= $_SESSION['jumlahFrekuensiMD_April']; ?></td>
						</tr>
						</tbody>
				</table>

				<!-- bulan Mei -->
					<table class="table table-bordered table-sm">
						<caption class="caption-top text-center">Data Meninggal Dunia</caption>
						<thead>
							<tr class="text-center">
								<th>No</th>
								<th>Bulan</th>
								<th>Frekuensi</th>
							</tr>
						</thead>
						<tbody>
							<?php $no = 1; for ($i=0; $i < count($_SESSION['dataMD_bulan']) ; $i++) : ?>
							<tr class="text-center">
								<td><?= $no++; ?></td>
								<td class="text-justify">Mei  <?= $_SESSION['tahunMD_bulan'][$i]; ?></td>
								<td><?= $_SESSION['dataMD_bulan'][$i]['Mei']['data_bulan'];  ?></td>		
							</tr>
							<?php $_SESSION['jumlahFrekuensiMD_Mei'] +=  $_SESSION['dataMD_bulan'][$i]['Mei']['data_bulan'];?>
						<?php endfor; ?>	
						<tr class="text-center">
							<th  colspan="2">Total</th>
							<td><?= $_SESSION['jumlahFrekuensiMD_Mei']; ?></td>
						</tr>
						</tbody>
				</table>

				<!-- bulan Juni -->
					<table class="table table-bordered table-sm">
						<caption class="caption-top text-center">Data Meninggal Dunia</caption>
						<thead>
							<tr class="text-center">
								<th>No</th>
								<th>Bulan</th>
								<th>Frekuensi</th>
							</tr>
						</thead>
						<tbody>
							<?php $no = 1; for ($i=0; $i < count($_SESSION['dataMD_bulan']) ; $i++) : ?>
							<tr class="text-center">
								<td><?= $no++; ?></td>
								<td class="text-justify">Juni  <?= $_SESSION['tahunMD_bulan'][$i]; ?></td>
								<td><?= $_SESSION['dataMD_bulan'][$i]['Juni']['data_bulan'];  ?></td>		
							</tr>
							<?php $_SESSION['jumlahFrekuensiMD_Juni'] +=  $_SESSION['dataMD_bulan'][$i]['Juni']['data_bulan'];?>
						<?php endfor; ?>	
						<tr class="text-center">
							<th  colspan="2">Total</th>
							<td><?= $_SESSION['jumlahFrekuensiMD_Juni']; ?></td>
						</tr>
						</tbody>
				</table>


				<!-- bulan Juli -->
					<table class="table table-bordered table-sm">
						<caption class="caption-top text-center">Data Meninggal Dunia</caption>
						<thead>
							<tr class="text-center">
								<th>No</th>
								<th>Bulan</th>
								<th>Frekuensi</th>
							</tr>
						</thead>
						<tbody>
							<?php $no = 1; for ($i=0; $i < count($_SESSION['dataMD_bulan']) ; $i++) : ?>
							<tr class="text-center">
								<td><?= $no++; ?></td>
								<td class="text-justify">Juli  <?= $_SESSION['tahunMD_bulan'][$i]; ?></td>
								<td><?= $_SESSION['dataMD_bulan'][$i]['Juli']['data_bulan'];  ?></td>		
							</tr>
							<?php $_SESSION['jumlahFrekuensiMD_Juli'] +=  $_SESSION['dataMD_bulan'][$i]['Juli']['data_bulan'];?>
						<?php endfor; ?>	
						<tr class="text-center">
							<th  colspan="2">Total</th>
							<td><?= $_SESSION['jumlahFrekuensiMD_Juli']; ?></td>
						</tr>
						</tbody>
				</table>


				<!-- bulan Agustus -->
					<table class="table table-bordered table-sm">
						<caption class="caption-top text-center">Data Meninggal Dunia</caption>
						<thead>
							<tr class="text-center">
								<th>No</th>
								<th>Bulan</th>
								<th>Frekuensi</th>
							</tr>
						</thead>
						<tbody>
							<?php $no = 1; for ($i=0; $i < count($_SESSION['dataMD_bulan']) ; $i++) : ?>
							<tr class="text-center">
								<td><?= $no++; ?></td>
								<td class="text-justify">Agustus  <?= $_SESSION['tahunMD_bulan'][$i]; ?></td>
								<td><?= $_SESSION['dataMD_bulan'][$i]['Agustus']['data_bulan'];  ?></td>		
							</tr>
							<?php $_SESSION['jumlahFrekuensiMD_Agustus'] +=  $_SESSION['dataMD_bulan'][$i]['Agustus']['data_bulan'];?>
						<?php endfor; ?>	
						<tr class="text-center">
							<th  colspan="2">Total</th>
							<td><?= $_SESSION['jumlahFrekuensiMD_Agustus']; ?></td>
						</tr>
						</tbody>
				</table>

				<!-- bulan September -->
					<table class="table table-bordered table-sm">
						<caption class="caption-top text-center">Data Meninggal Dunia</caption>
						<thead>
							<tr class="text-center">
								<th>No</th>
								<th>Bulan</th>
								<th>Frekuensi</th>
							</tr>
						</thead>
						<tbody>
							<?php $no = 1; for ($i=0; $i < count($_SESSION['dataMD_bulan']) ; $i++) : ?>
							<tr class="text-center">
								<td><?= $no++; ?></td>
								<td class="text-justify">September  <?= $_SESSION['tahunMD_bulan'][$i]; ?></td>
								<td><?= $_SESSION['dataMD_bulan'][$i]['September']['data_bulan'];  ?></td>		
							</tr>
							<?php $_SESSION['jumlahFrekuensiMD_September'] +=  $_SESSION['dataMD_bulan'][$i]['September']['data_bulan'];?>
						<?php endfor; ?>	
						<tr class="text-center">
							<th  colspan="2">Total</th>
							<td><?= $_SESSION['jumlahFrekuensiMD_September']; ?></td>
						</tr>
						</tbody>
				</table>

				<!-- bulan Oktober -->
					<table class="table table-bordered table-sm">
						<caption class="caption-top text-center">Data Meninggal Dunia</caption>
						<thead>
							<tr class="text-center">
								<th>No</th>
								<th>Bulan</th>
								<th>Frekuensi</th>
							</tr>
						</thead>
						<tbody>
							<?php $no = 1; for ($i=0; $i < count($_SESSION['dataMD_bulan']) ; $i++) : ?>
							<tr class="text-center">
								<td><?= $no++; ?></td>
								<td class="text-justify">Oktober  <?= $_SESSION['tahunMD_bulan'][$i]; ?></td>
								<td><?= $_SESSION['dataMD_bulan'][$i]['Oktober']['data_bulan'];  ?></td>		
							</tr>
							<?php $_SESSION['jumlahFrekuensiMD_Oktober'] +=  $_SESSION['dataMD_bulan'][$i]['Oktober']['data_bulan'];?>
						<?php endfor; ?>	
						<tr class="text-center">
							<th  colspan="2">Total</th>
							<td><?= $_SESSION['jumlahFrekuensiMD_Oktober']; ?></td>
						</tr>
						</tbody>
				</table>

				<!-- bulan November -->
					<table class="table table-bordered table-sm">
						<caption class="caption-top text-center">Data Meninggal Dunia</caption>
						<thead>
							<tr class="text-center">
								<th>No</th>
								<th>Bulan</th>
								<th>Frekuensi</th>
							</tr>
						</thead>
						<tbody>
							<?php $no = 1; for ($i=0; $i < count($_SESSION['dataMD_bulan']) ; $i++) : ?>
							<tr class="text-center">
								<td><?= $no++; ?></td>
								<td class="text-justify">November  <?= $_SESSION['tahunMD_bulan'][$i]; ?></td>
								<td><?= $_SESSION['dataMD_bulan'][$i]['November']['data_bulan'];  ?></td>		
							</tr>
							<?php $_SESSION['jumlahFrekuensiMD_November'] +=  $_SESSION['dataMD_bulan'][$i]['November']['data_bulan'];?>
						<?php endfor; ?>	
						<tr class="text-center">
							<th  colspan="2">Total</th>
							<td><?= $_SESSION['jumlahFrekuensiMD_November']; ?></td>
						</tr>
						</tbody>
				</table>

					<!-- bulan Desember -->
					<table class="table table-bordered table-sm">
						<caption class="caption-top text-center">Data Meninggal Dunia</caption>
						<thead>
							<tr class="text-center">
								<th>No</th>
								<th>Bulan</th>
								<th>Frekuensi</th>
							</tr>
						</thead>
						<tbody>
							<?php $no = 1; for ($i=0; $i < count($_SESSION['dataMD_bulan']) ; $i++) : ?>
							<tr class="text-center">
								<td><?= $no++; ?></td>
								<td class="text-justify">Desember  <?= $_SESSION['tahunMD_bulan'][$i]; ?></td>
								<td><?= $_SESSION['dataMD_bulan'][$i]['Desember']['data_bulan'];  ?></td>		
							</tr>
							<?php $_SESSION['jumlahFrekuensiMD_Desember'] +=  $_SESSION['dataMD_bulan'][$i]['Desember']['data_bulan'];?>
						<?php endfor; ?>	
						<tr class="text-center">
							<th  colspan="2">Total</th>
							<td><?= $_SESSION['jumlahFrekuensiMD_Desember']; ?></td>
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
				<table class="table table-bordered table-sm">
							<caption class="caption-top text-center">Data Luka Berat</caption>
							<thead>
								<tr class="text-center">
									<th>No</th>
									<th>Bulan</th>
									<th>Frekuensi</th>
								</tr>
							</thead>
							<tbody>
								<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLB_bulan']) ; $i++) : ?>
								
								<tr class="text-center">
									<td><?= $no++; ?></td>
									<td class="text-justify">Januari <?= $_SESSION['tahunLB_bulan'][$i]; ?></td>
									<td><?= $_SESSION['dataLB_bulan'][$i]['Januari']['data_bulan'];  ?></td>		
								</tr>
								<?php $_SESSION['jumlahFrekuensiLB_Januari'] +=  $_SESSION['dataLB_bulan'][$i]['Januari']['data_bulan'];?>
							<?php endfor; ?>	
							<tr class="text-center">
								<th colspan="2">Total</th>
								<td><?= $_SESSION['jumlahFrekuensiLB_Januari']; ?></td>
							</tr>
						</tbody>
					</table>

					<!-- bulan February -->
					<table class="table table-bordered table-sm">
						<caption class="caption-top text-center">Data Luka Berat</caption>
						<thead>
							<tr class="text-center">
								<th>No</th>
								<th>Bulan</th>
								<th>Frekuensi</th>
							</tr>
						</thead>
						<tbody>
							<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLB_bulan']) ; $i++) : ?>
							<tr class="text-center">
								<td><?= $no++; ?></td>
								<td class="text-justify">Februari  <?= $_SESSION['tahunLB_bulan'][$i]; ?></td>
								<td><?= $_SESSION['dataLB_bulan'][$i]['Februari']['data_bulan'];  ?></td>		
							</tr>
							<?php $_SESSION['jumlahFrekuensiLB_Februari'] +=  $_SESSION['dataLB_bulan'][$i]['Februari']['data_bulan'];?>
						<?php endfor; ?>	
						<tr class="text-center">
							<th  colspan="2">Total</th>
							<td><?= $_SESSION['jumlahFrekuensiLB_Februari']; ?></td>
						</tr>
						</tbody>
				</table>

				<!-- bulan Maret -->
					<table class="table table-bordered table-sm">
						<caption class="caption-top text-center">Data Luka Berat</caption>
						<thead>
							<tr class="text-center">
								<th>No</th>
								<th>Bulan</th>
								<th>Frekuensi</th>
							</tr>
						</thead>
						<tbody>
							<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLB_bulan']) ; $i++) : ?>
							<tr class="text-center">
								<td><?= $no++; ?></td>
								<td class="text-justify">Maret  <?= $_SESSION['tahunLB_bulan'][$i]; ?></td>
								<td><?= $_SESSION['dataLB_bulan'][$i]['Maret']['data_bulan'];  ?></td>		
							</tr>
							<?php $_SESSION['jumlahFrekuensiLB_Maret'] +=  $_SESSION['dataLB_bulan'][$i]['Maret']['data_bulan'];?>
						<?php endfor; ?>	
						<tr class="text-center">
							<th  colspan="2">Total</th>
							<td><?= $_SESSION['jumlahFrekuensiLB_Maret']; ?></td>
						</tr>
						</tbody>
				</table>

				<!-- bulan April -->
					<table class="table table-bordered table-sm">
						<caption class="caption-top text-center">Data Luka Berat</caption>
						<thead>
							<tr class="text-center">
								<th>No</th>
								<th>Bulan</th>
								<th>Frekuensi</th>
							</tr>
						</thead>
						<tbody>
							<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLB_bulan']) ; $i++) : ?>
							<tr class="text-center">
								<td><?= $no++; ?></td>
								<td class="text-justify">April  <?= $_SESSION['tahunLB_bulan'][$i]; ?></td>
								<td><?= $_SESSION['dataLB_bulan'][$i]['April']['data_bulan'];  ?></td>		
							</tr>
							<?php $_SESSION['jumlahFrekuensiLB_April'] +=  $_SESSION['dataLB_bulan'][$i]['April']['data_bulan'];?>
						<?php endfor; ?>	
						<tr class="text-center">
							<th  colspan="2">Total</th>
							<td><?= $_SESSION['jumlahFrekuensiLB_April']; ?></td>
						</tr>
						</tbody>
				</table>

				<!-- bulan Mei -->
					<table class="table table-bordered table-sm">
						<caption class="caption-top text-center">Data Luka Berat</caption>
						<thead>
							<tr class="text-center">
								<th>No</th>
								<th>Bulan</th>
								<th>Frekuensi</th>
							</tr>
						</thead>
						<tbody>
							<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLB_bulan']) ; $i++) : ?>
							<tr class="text-center">
								<td><?= $no++; ?></td>
								<td class="text-justify">Mei  <?= $_SESSION['tahunLB_bulan'][$i]; ?></td>
								<td><?= $_SESSION['dataLB_bulan'][$i]['Mei']['data_bulan'];  ?></td>		
							</tr>
							<?php $_SESSION['jumlahFrekuensiLB_Mei'] +=  $_SESSION['dataLB_bulan'][$i]['Mei']['data_bulan'];?>
						<?php endfor; ?>	
						<tr class="text-center">
							<th  colspan="2">Total</th>
							<td><?= $_SESSION['jumlahFrekuensiLB_Mei']; ?></td>
						</tr>
						</tbody>
				</table>

				<!-- bulan Juni -->
					<table class="table table-bordered table-sm">
						<caption class="caption-top text-center">Data Luka Berat</caption>
						<thead>
							<tr class="text-center">
								<th>No</th>
								<th>Bulan</th>
								<th>Frekuensi</th>
							</tr>
						</thead>
						<tbody>
							<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLB_bulan']) ; $i++) : ?>
							<tr class="text-center">
								<td><?= $no++; ?></td>
								<td class="text-justify">Juni  <?= $_SESSION['tahunLB_bulan'][$i]; ?></td>
								<td><?= $_SESSION['dataLB_bulan'][$i]['Juni']['data_bulan'];  ?></td>		
							</tr>
							<?php $_SESSION['jumlahFrekuensiLB_Juni'] +=  $_SESSION['dataLB_bulan'][$i]['Juni']['data_bulan'];?>
						<?php endfor; ?>	
						<tr class="text-center">
							<th  colspan="2">Total</th>
							<td><?= $_SESSION['jumlahFrekuensiLB_Juni']; ?></td>
						</tr>
						</tbody>
				</table>


				<!-- bulan Juli -->
					<table class="table table-bordered table-sm">
						<caption class="caption-top text-center">Data Luka Berat</caption>
						<thead>
							<tr class="text-center">
								<th>No</th>
								<th>Bulan</th>
								<th>Frekuensi</th>
							</tr>
						</thead>
						<tbody>
							<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLB_bulan']) ; $i++) : ?>
							<tr class="text-center">
								<td><?= $no++; ?></td>
								<td class="text-justify">Juli  <?= $_SESSION['tahunLB_bulan'][$i]; ?></td>
								<td><?= $_SESSION['dataLB_bulan'][$i]['Juli']['data_bulan'];  ?></td>		
							</tr>
							<?php $_SESSION['jumlahFrekuensiLB_Juli'] +=  $_SESSION['dataLB_bulan'][$i]['Juli']['data_bulan'];?>
						<?php endfor; ?>	
						<tr class="text-center">
							<th  colspan="2">Total</th>
							<td><?= $_SESSION['jumlahFrekuensiLB_Juli']; ?></td>
						</tr>
						</tbody>
				</table>


				<!-- bulan Agustus -->
					<table class="table table-bordered table-sm">
						<caption class="caption-top text-center">Data Luka Berat</caption>
						<thead>
							<tr class="text-center">
								<th>No</th>
								<th>Bulan</th>
								<th>Frekuensi</th>
							</tr>
						</thead>
						<tbody>
							<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLB_bulan']) ; $i++) : ?>
							<tr class="text-center">
								<td><?= $no++; ?></td>
								<td class="text-justify">Agustus  <?= $_SESSION['tahunLB_bulan'][$i]; ?></td>
								<td><?= $_SESSION['dataLB_bulan'][$i]['Agustus']['data_bulan'];  ?></td>		
							</tr>
							<?php $_SESSION['jumlahFrekuensiLB_Agustus'] +=  $_SESSION['dataLB_bulan'][$i]['Agustus']['data_bulan'];?>
						<?php endfor; ?>	
						<tr class="text-center">
							<th  colspan="2">Total</th>
							<td><?= $_SESSION['jumlahFrekuensiLB_Agustus']; ?></td>
						</tr>
						</tbody>
				</table>

				<!-- bulan September -->
					<table class="table table-bordered table-sm">
						<caption class="caption-top text-center">Data Luka Berat</caption>
						<thead>
							<tr class="text-center">
								<th>No</th>
								<th>Bulan</th>
								<th>Frekuensi</th>
							</tr>
						</thead>
						<tbody>
							<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLB_bulan']) ; $i++) : ?>
							<tr class="text-center">
								<td><?= $no++; ?></td>
								<td class="text-justify">September  <?= $_SESSION['tahunLB_bulan'][$i]; ?></td>
								<td><?= $_SESSION['dataLB_bulan'][$i]['September']['data_bulan'];  ?></td>		
							</tr>
							<?php $_SESSION['jumlahFrekuensiLB_September'] +=  $_SESSION['dataLB_bulan'][$i]['September']['data_bulan'];?>
						<?php endfor; ?>	
						<tr class="text-center">
							<th  colspan="2">Total</th>
							<td><?= $_SESSION['jumlahFrekuensiLB_September']; ?></td>
						</tr>
						</tbody>
				</table>

				<!-- bulan Oktober -->
					<table class="table table-bordered table-sm">
						<caption class="caption-top text-center">Data Luka Berat</caption>
						<thead>
							<tr class="text-center">
								<th>No</th>
								<th>Bulan</th>
								<th>Frekuensi</th>
							</tr>
						</thead>
						<tbody>
							<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLB_bulan']) ; $i++) : ?>
							<tr class="text-center">
								<td><?= $no++; ?></td>
								<td class="text-justify">Oktober  <?= $_SESSION['tahunLB_bulan'][$i]; ?></td>
								<td><?= $_SESSION['dataLB_bulan'][$i]['Oktober']['data_bulan'];  ?></td>		
							</tr>
							<?php $_SESSION['jumlahFrekuensiLB_Oktober'] +=  $_SESSION['dataLB_bulan'][$i]['Oktober']['data_bulan'];?>
						<?php endfor; ?>	
						<tr class="text-center">
							<th  colspan="2">Total</th>
							<td><?= $_SESSION['jumlahFrekuensiLB_Oktober']; ?></td>
						</tr>
						</tbody>
				</table>

				<!-- bulan November -->
					<table class="table table-bordered table-sm">
						<caption class="caption-top text-center">Data Luka Berat</caption>
						<thead>
							<tr class="text-center">
								<th>No</th>
								<th>Bulan</th>
								<th>Frekuensi</th>
							</tr>
						</thead>
						<tbody>
							<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLB_bulan']) ; $i++) : ?>
							<tr class="text-center">
								<td><?= $no++; ?></td>
								<td class="text-justify">November  <?= $_SESSION['tahunLB_bulan'][$i]; ?></td>
								<td><?= $_SESSION['dataLB_bulan'][$i]['November']['data_bulan'];  ?></td>		
							</tr>
							<?php $_SESSION['jumlahFrekuensiLB_November'] +=  $_SESSION['dataLB_bulan'][$i]['November']['data_bulan'];?>
						<?php endfor; ?>	
						<tr class="text-center">
							<th  colspan="2">Total</th>
							<td><?= $_SESSION['jumlahFrekuensiLB_November']; ?></td>
						</tr>
						</tbody>
				</table>

					<!-- bulan Desember -->
					<table class="table table-bordered table-sm">
						<caption class="caption-top text-center">Data Luka Berat</caption>
						<thead>
							<tr class="text-center">
								<th>No</th>
								<th>Bulan</th>
								<th>Frekuensi</th>
							</tr>
						</thead>
						<tbody>
							<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLB_bulan']) ; $i++) : ?>
							<tr class="text-center">
								<td><?= $no++; ?></td>
								<td class="text-justify">Desember  <?= $_SESSION['tahunLB_bulan'][$i]; ?></td>
								<td><?= $_SESSION['dataLB_bulan'][$i]['Desember']['data_bulan'];  ?></td>		
							</tr>
							<?php $_SESSION['jumlahFrekuensiLB_Desember'] +=  $_SESSION['dataLB_bulan'][$i]['Desember']['data_bulan'];?>
						<?php endfor; ?>	
						<tr class="text-center">
							<th  colspan="2">Total</th>
							<td><?= $_SESSION['jumlahFrekuensiLB_Desember']; ?></td>
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
						<table class="table table-bordered table-sm">
							<caption class="caption-top text-center">Data Luka Ringan</caption>
							<thead>
								<tr class="text-center">
									<th>No</th>
									<th>Bulan</th>
									<th>Frekuensi</th>
								</tr>
							</thead>
							<tbody>
								<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLR_bulan']) ; $i++) : ?>
								
								<tr class="text-center">
									<td><?= $no++; ?></td>
									<td class="text-justify">Januari <?= $_SESSION['tahunLR_bulan'][$i]; ?></td>
									<td><?= $_SESSION['dataLR_bulan'][$i]['Januari']['data_bulan'];  ?></td>		
								</tr>
								<?php $_SESSION['jumlahFrekuensiLR_Januari'] +=  $_SESSION['dataLR_bulan'][$i]['Januari']['data_bulan'];?>
							<?php endfor; ?>	
							<tr class="text-center">
								<th colspan="2">Total</th>
								<td><?= $_SESSION['jumlahFrekuensiLR_Januari']; ?></td>
							</tr>
						</tbody>
					</table>

					<!-- bulan February -->
					<table class="table table-bordered table-sm">
						<caption class="caption-top text-center">Data Luka Ringan</caption>
						<thead>
							<tr class="text-center">
								<th>No</th>
								<th>Bulan</th>
								<th>Frekuensi</th>
							</tr>
						</thead>
						<tbody>
							<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLR_bulan']) ; $i++) : ?>
							<tr class="text-center">
								<td><?= $no++; ?></td>
								<td class="text-justify">Februari  <?= $_SESSION['tahunLR_bulan'][$i]; ?></td>
								<td><?= $_SESSION['dataLR_bulan'][$i]['Februari']['data_bulan'];  ?></td>		
							</tr>
							<?php $_SESSION['jumlahFrekuensiLR_Februari'] +=  $_SESSION['dataLR_bulan'][$i]['Februari']['data_bulan'];?>
						<?php endfor; ?>	
						<tr class="text-center">
							<th  colspan="2">Total</th>
							<td><?= $_SESSION['jumlahFrekuensiLR_Februari']; ?></td>
						</tr>
						</tbody>
				</table>

				<!-- bulan Maret -->
					<table class="table table-bordered table-sm">
						<caption class="caption-top text-center">Data Luka Ringan</caption>
						<thead>
							<tr class="text-center">
								<th>No</th>
								<th>Bulan</th>
								<th>Frekuensi</th>
							</tr>
						</thead>
						<tbody>
							<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLR_bulan']) ; $i++) : ?>
							<tr class="text-center">
								<td><?= $no++; ?></td>
								<td class="text-justify">Maret  <?= $_SESSION['tahunLR_bulan'][$i]; ?></td>
								<td><?= $_SESSION['dataLR_bulan'][$i]['Maret']['data_bulan'];  ?></td>		
							</tr>
							<?php $_SESSION['jumlahFrekuensiLR_Maret'] +=  $_SESSION['dataLR_bulan'][$i]['Maret']['data_bulan'];?>
						<?php endfor; ?>	
						<tr class="text-center">
							<th  colspan="2">Total</th>
							<td><?= $_SESSION['jumlahFrekuensiLR_Maret']; ?></td>
						</tr>
						</tbody>
				</table>

				<!-- bulan April -->
					<table class="table table-bordered table-sm">
						<caption class="caption-top text-center">Data Luka Ringan</caption>
						<thead>
							<tr class="text-center">
								<th>No</th>
								<th>Bulan</th>
								<th>Frekuensi</th>
							</tr>
						</thead>
						<tbody>
							<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLR_bulan']) ; $i++) : ?>
							<tr class="text-center">
								<td><?= $no++; ?></td>
								<td class="text-justify">April  <?= $_SESSION['tahunLR_bulan'][$i]; ?></td>
								<td><?= $_SESSION['dataLR_bulan'][$i]['April']['data_bulan'];  ?></td>		
							</tr>
							<?php $_SESSION['jumlahFrekuensiLR_April'] +=  $_SESSION['dataLR_bulan'][$i]['April']['data_bulan'];?>
						<?php endfor; ?>	
						<tr class="text-center">
							<th  colspan="2">Total</th>
							<td><?= $_SESSION['jumlahFrekuensiLR_April']; ?></td>
						</tr>
						</tbody>
				</table>

				<!-- bulan Mei -->
					<table class="table table-bordered table-sm">
						<caption class="caption-top text-center">Data Luka Ringan</caption>
						<thead>
							<tr class="text-center">
								<th>No</th>
								<th>Bulan</th>
								<th>Frekuensi</th>
							</tr>
						</thead>
						<tbody>
							<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLR_bulan']) ; $i++) : ?>
							<tr class="text-center">
								<td><?= $no++; ?></td>
								<td class="text-justify">Mei  <?= $_SESSION['tahunLR_bulan'][$i]; ?></td>
								<td><?= $_SESSION['dataLR_bulan'][$i]['Mei']['data_bulan'];  ?></td>		
							</tr>
							<?php $_SESSION['jumlahFrekuensiLR_Mei'] +=  $_SESSION['dataLR_bulan'][$i]['Mei']['data_bulan'];?>
						<?php endfor; ?>	
						<tr class="text-center">
							<th  colspan="2">Total</th>
							<td><?= $_SESSION['jumlahFrekuensiLR_Mei']; ?></td>
						</tr>
						</tbody>
				</table>

				<!-- bulan Juni -->
					<table class="table table-bordered table-sm">
						<caption class="caption-top text-center">Data Luka Ringan</caption>
						<thead>
							<tr class="text-center">
								<th>No</th>
								<th>Bulan</th>
								<th>Frekuensi</th>
							</tr>
						</thead>
						<tbody>
							<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLR_bulan']) ; $i++) : ?>
							<tr class="text-center">
								<td><?= $no++; ?></td>
								<td class="text-justify">Juni  <?= $_SESSION['tahunLR_bulan'][$i]; ?></td>
								<td><?= $_SESSION['dataLR_bulan'][$i]['Juni']['data_bulan'];  ?></td>		
							</tr>
							<?php $_SESSION['jumlahFrekuensiLR_Juni'] +=  $_SESSION['dataLR_bulan'][$i]['Juni']['data_bulan'];?>
						<?php endfor; ?>	
						<tr class="text-center">
							<th  colspan="2">Total</th>
							<td><?= $_SESSION['jumlahFrekuensiLR_Juni']; ?></td>
						</tr>
						</tbody>
				</table>


				<!-- bulan Juli -->
					<table class="table table-bordered table-sm">
						<caption class="caption-top text-center">Data Luka Ringan</caption>
						<thead>
							<tr class="text-center">
								<th>No</th>
								<th>Bulan</th>
								<th>Frekuensi</th>
							</tr>
						</thead>
						<tbody>
							<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLR_bulan']) ; $i++) : ?>
							<tr class="text-center">
								<td><?= $no++; ?></td>
								<td class="text-justify">Juli  <?= $_SESSION['tahunLR_bulan'][$i]; ?></td>
								<td><?= $_SESSION['dataLR_bulan'][$i]['Juli']['data_bulan'];  ?></td>		
							</tr>
							<?php $_SESSION['jumlahFrekuensiLR_Juli'] +=  $_SESSION['dataLR_bulan'][$i]['Juli']['data_bulan'];?>
						<?php endfor; ?>	
						<tr class="text-center">
							<th  colspan="2">Total</th>
							<td><?= $_SESSION['jumlahFrekuensiLR_Juli']; ?></td>
						</tr>
						</tbody>
				</table>


				<!-- bulan Agustus -->
					<table class="table table-bordered table-sm">
						<caption class="caption-top text-center">Data Luka Ringan</caption>
						<thead>
							<tr class="text-center">
								<th>No</th>
								<th>Bulan</th>
								<th>Frekuensi</th>
							</tr>
						</thead>
						<tbody>
							<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLR_bulan']) ; $i++) : ?>
							<tr class="text-center">
								<td><?= $no++; ?></td>
								<td class="text-justify">Agustus  <?= $_SESSION['tahunLR_bulan'][$i]; ?></td>
								<td><?= $_SESSION['dataLR_bulan'][$i]['Agustus']['data_bulan'];  ?></td>		
							</tr>
							<?php $_SESSION['jumlahFrekuensiLR_Agustus'] +=  $_SESSION['dataLR_bulan'][$i]['Agustus']['data_bulan'];?>
						<?php endfor; ?>	
						<tr class="text-center">
							<th  colspan="2">Total</th>
							<td><?= $_SESSION['jumlahFrekuensiLR_Agustus']; ?></td>
						</tr>
						</tbody>
				</table>

				<!-- bulan September -->
					<table class="table table-bordered table-sm">
						<caption class="caption-top text-center">Data Luka Ringan</caption>
						<thead>
							<tr class="text-center">
								<th>No</th>
								<th>Bulan</th>
								<th>Frekuensi</th>
							</tr>
						</thead>
						<tbody>
							<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLR_bulan']) ; $i++) : ?>
							<tr class="text-center">
								<td><?= $no++; ?></td>
								<td class="text-justify">September  <?= $_SESSION['tahunLR_bulan'][$i]; ?></td>
								<td><?= $_SESSION['dataLR_bulan'][$i]['September']['data_bulan'];  ?></td>		
							</tr>
							<?php $_SESSION['jumlahFrekuensiLR_September'] +=  $_SESSION['dataLR_bulan'][$i]['September']['data_bulan'];?>
						<?php endfor; ?>	
						<tr class="text-center">
							<th  colspan="2">Total</th>
							<td><?= $_SESSION['jumlahFrekuensiLR_September']; ?></td>
						</tr>
						</tbody>
				</table>

				<!-- bulan Oktober -->
					<table class="table table-bordered table-sm">
						<caption class="caption-top text-center">Data Luka Ringan</caption>
						<thead>
							<tr class="text-center">
								<th>No</th>
								<th>Bulan</th>
								<th>Frekuensi</th>
							</tr>
						</thead>
						<tbody>
							<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLR_bulan']) ; $i++) : ?>
							<tr class="text-center">
								<td><?= $no++; ?></td>
								<td class="text-justify">Oktober  <?= $_SESSION['tahunLR_bulan'][$i]; ?></td>
								<td><?= $_SESSION['dataLR_bulan'][$i]['Oktober']['data_bulan'];  ?></td>		
							</tr>
							<?php $_SESSION['jumlahFrekuensiLR_Oktober'] +=  $_SESSION['dataLR_bulan'][$i]['Oktober']['data_bulan'];?>
						<?php endfor; ?>	
						<tr class="text-center">
							<th  colspan="2">Total</th>
							<td><?= $_SESSION['jumlahFrekuensiLR_Oktober']; ?></td>
						</tr>
						</tbody>
				</table>

				<!-- bulan November -->
					<table class="table table-bordered table-sm">
						<caption class="caption-top text-center">Data Luka Ringan</caption>
						<thead>
							<tr class="text-center">
								<th>No</th>
								<th>Bulan</th>
								<th>Frekuensi</th>
							</tr>
						</thead>
						<tbody>
							<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLR_bulan']) ; $i++) : ?>
							<tr class="text-center">
								<td><?= $no++; ?></td>
								<td class="text-justify">November  <?= $_SESSION['tahunLR_bulan'][$i]; ?></td>
								<td><?= $_SESSION['dataLR_bulan'][$i]['November']['data_bulan'];  ?></td>		
							</tr>
							<?php $_SESSION['jumlahFrekuensiLR_November'] +=  $_SESSION['dataLR_bulan'][$i]['November']['data_bulan'];?>
						<?php endfor; ?>	
						<tr class="text-center">
							<th  colspan="2">Total</th>
							<td><?= $_SESSION['jumlahFrekuensiLR_November']; ?></td>
						</tr>
						</tbody>
				</table>

					<!-- bulan Desember -->
					<table class="table table-bordered table-sm">
						<caption class="caption-top text-center">Data Luka Ringan</caption>
						<thead>
							<tr class="text-center">
								<th>No</th>
								<th>Bulan</th>
								<th>Frekuensi</th>
							</tr>
						</thead>
						<tbody>
							<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLR_bulan']) ; $i++) : ?>
							<tr class="text-center">
								<td><?= $no++; ?></td>
								<td class="text-justify">Desember  <?= $_SESSION['tahunLR_bulan'][$i]; ?></td>
								<td><?= $_SESSION['dataLR_bulan'][$i]['Desember']['data_bulan'];  ?></td>		
							</tr>
							<?php $_SESSION['jumlahFrekuensiLR_Desember'] +=  $_SESSION['dataLR_bulan'][$i]['Desember']['data_bulan'];?>
						<?php endfor; ?>	
						<tr class="text-center">
							<th  colspan="2">Total</th>
							<td><?= $_SESSION['jumlahFrekuensiLR_Desember']; ?></td>
						</tr>
						</tbody>
				</table>


							</div>		
						</div>
					</div>
				</div>
			</div>
		</div>
