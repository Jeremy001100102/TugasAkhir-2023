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

for ($i=0; $i < count($_SESSION['dataMD_bulan']) ; $i++) {

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
						
						<div class="icon_utama" data-bs-toggle="collapse" data-bs-target=".MD_all">
							<span>Show All : </span><i class="fa-solid fa-plus"></i>
						</div>

						<!-- bulan january -->
						<table class="table mb-0">
							<caption class="caption-top text-center">Data Meninggal Dunia</caption>
							<thead>
								<tr class="table-dark text-center">
									<th class="col-12" colspan="3">Bulan</i></th>
								</tr>
								
							</thead>

							<tbody>
								<tr>
									<table class="table table-bordered table-sm mb-0">
										<thead>
											<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#MDr1">
												<th colspan="3" style="border-left-color:blue;">Januari <i class="fa-solid fa-caret-down"></i></th>
											</tr>
											<tr class="text-center collapse accordion-collapse MD_all" id="MDr1" data-bs-parent=".table">
												<th>No</th>
												<th>Bulan</th>
												<th>Frekuensi</th>
											</tr>
										</thead>
										<tbody>
											<?php $no = 1; for ($i=0; $i < count($_SESSION['dataMD_bulan']) ; $i++) : ?>

											<tr class="text-center collapse accordion-collapse MD_all" id="MDr1" data-bs-parent=".table">
												<td><?= $no++; ?></td>
												<td class="text-justify">Januari <?= $_SESSION['tahunMD_bulan'][$i]; ?></td>
												<td><?= $_SESSION['dataMD_bulan'][$i]['Januari']['data_bulan'];  ?></td>		
											</tr>
											<?php $_SESSION['jumlahFrekuensiMD_Januari'] +=  $_SESSION['dataMD_bulan'][$i]['Januari']['data_bulan'];?>
										<?php endfor; ?>	
										<tr class="text-center collapse accordion-collapse MD_all" id="MDr1" data-bs-parent=".table">
											<th colspan="2">Total</th>
											<td><?= $_SESSION['jumlahFrekuensiMD_Januari']; ?></td>
										</tr>
									</tbody>
								</table>

								<!-- bulan February -->
								<table class="table table-bordered table-sm mb-0">

									<thead>
										<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#MDr2">
											<th colspan="3" style="border-left-color:blue;">Februari <i class="fa-solid fa-caret-down"></i></th>
										</tr>
										<tr class="text-center collapse accordion-collapse MD_all" id="MDr2" data-bs-parent=".table">
											<th>No</th>
											<th>Bulan</th>
											<th>Frekuensi</th>
										</tr>
									</thead>
									<tbody>
										<?php $no = 1; for ($i=0; $i < count($_SESSION['dataMD_bulan']) ; $i++) : ?>
										<tr class="text-center collapse accordion-collapse MD_all" id="MDr2" data-bs-parent=".table">
											<td><?= $no++; ?></td>
											<td>Februari  <?= $_SESSION['tahunMD_bulan'][$i]; ?></td>
											<td><?= $_SESSION['dataMD_bulan'][$i]['Februari']['data_bulan'];  ?></td>		
										</tr>
										<?php $_SESSION['jumlahFrekuensiMD_Februari'] +=  $_SESSION['dataMD_bulan'][$i]['Februari']['data_bulan'];?>
									<?php endfor; ?>	
									<tr class="text-center collapse accordion-collapse MD_all" id="MDr2" data-bs-parent=".table">
										<th  colspan="2">Total</th>
										<td><?= $_SESSION['jumlahFrekuensiMD_Februari']; ?></td>
									</tr>
								</tbody>
							</table>

							<!-- bulan Maret -->
							<table class="table table-bordered table-sm mb-0">
								<thead>
									<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#MDr3">
										<th colspan="3" style="border-left-color:blue;">Maret <i class="fa-solid fa-caret-down"></i></th>
									</tr>
									<tr class="text-center collapse accordion-collapse MD_all" id="MDr3" data-bs-parent=".table">
										<th>No</th>
										<th>Bulan</th>
										<th>Frekuensi</th>
									</tr>
								</thead>
								<tbody>
									<?php $no = 1; for ($i=0; $i < count($_SESSION['dataMD_bulan']) ; $i++) : ?>
									<tr class="text-center collapse accordion-collapse MD_all" id="MDr3" data-bs-parent=".table">
										<td><?= $no++; ?></td>
										<td class="text-justify">Maret  <?= $_SESSION['tahunMD_bulan'][$i]; ?></td>
										<td><?= $_SESSION['dataMD_bulan'][$i]['Maret']['data_bulan'];  ?></td>		
									</tr>
									<?php $_SESSION['jumlahFrekuensiMD_Maret'] +=  $_SESSION['dataMD_bulan'][$i]['Maret']['data_bulan'];?>
								<?php endfor; ?>	
								<tr class="text-center collapse accordion-collapse MD_all" id="MDr3" data-bs-parent=".table">
									<th  colspan="2">Total</th>
									<td><?= $_SESSION['jumlahFrekuensiMD_Maret']; ?></td>
								</tr>
							</tbody>
						</table>

						<!-- bulan April -->
						<table class="table table-bordered table-sm mb-0">
							<thead>
								<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#MDr4">
									<th colspan="3" style="border-left-color:blue;">April <i class="fa-solid fa-caret-down"></i></th>
								</tr>
								<tr class="text-center collapse accordion-collapse MD_all" id="MDr4" data-bs-parent=".table">
									<th>No</th>
									<th>Bulan</th>
									<th>Frekuensi</th>
								</tr>
							</thead>
							<tbody>
								<?php $no = 1; for ($i=0; $i < count($_SESSION['dataMD_bulan']) ; $i++) : ?>
								<tr class="text-center collapse accordion-collapse MD_all" id="MDr4" data-bs-parent=".table">
									<td><?= $no++; ?></td>
									<td class="text-justify">April  <?= $_SESSION['tahunMD_bulan'][$i]; ?></td>
									<td><?= $_SESSION['dataMD_bulan'][$i]['April']['data_bulan'];  ?></td>		
								</tr>
								<?php $_SESSION['jumlahFrekuensiMD_April'] +=  $_SESSION['dataMD_bulan'][$i]['April']['data_bulan'];?>
							<?php endfor; ?>	
							<tr class="text-center collapse accordion-collapse MD_all" id="MDr4" data-bs-parent=".table">
								<th  colspan="2">Total</th>
								<td><?= $_SESSION['jumlahFrekuensiMD_April']; ?></td>
							</tr>
						</tbody>
					</table>

					<!-- bulan Mei -->
					<table class="table table-bordered table-sm mb-0">

						<thead>
							<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#MDr5">
								<th colspan="3" style="border-left-color:red;">Mei <i class="fa-solid fa-caret-down"></i></th>
							</tr>
							<tr class="text-center collapse accordion-collapse MD_all" id="MDr5" data-bs-parent=".table">
								<th>No</th>
								<th>Bulan</th>
								<th>Frekuensi</th>
							</tr>
						</thead>
						<tbody>
							<?php $no = 1; for ($i=0; $i < count($_SESSION['dataMD_bulan']) ; $i++) : ?>
							<tr class="text-center collapse accordion-collapse MD_all" id="MDr5" data-bs-parent=".table">
								<td><?= $no++; ?></td>
								<td class="text-justify">Mei  <?= $_SESSION['tahunMD_bulan'][$i]; ?></td>
								<td><?= $_SESSION['dataMD_bulan'][$i]['Mei']['data_bulan'];  ?></td>		
							</tr>
							<?php $_SESSION['jumlahFrekuensiMD_Mei'] +=  $_SESSION['dataMD_bulan'][$i]['Mei']['data_bulan'];?>
						<?php endfor; ?>	
						<tr class="text-center collapse accordion-collapse MD_all" id="MDr5" data-bs-parent=".table">
							<th  colspan="2">Total</th>
							<td><?= $_SESSION['jumlahFrekuensiMD_Mei']; ?></td>
						</tr>
					</tbody>
				</table>

				<!-- bulan Juni -->
				<table class="table table-bordered table-sm mb-0">
					<thead>
						<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#MDr6">
							<th colspan="3" style="border-left-color:red;">Juni <i class="fa-solid fa-caret-down"></i></th>
						</tr>
						<tr class="text-center collapse accordion-collapse MD_all" id="MDr6" data-bs-parent=".table">
							<th>No</th>
							<th>Bulan</th>
							<th>Frekuensi</th>
						</tr>
					</thead>
					<tbody>
						<?php $no = 1; for ($i=0; $i < count($_SESSION['dataMD_bulan']) ; $i++) : ?>
						<tr class="text-center collapse accordion-collapse MD_all" id="MDr6" data-bs-parent=".table">
							<td><?= $no++; ?></td>
							<td class="text-justify">Juni  <?= $_SESSION['tahunMD_bulan'][$i]; ?></td>
							<td><?= $_SESSION['dataMD_bulan'][$i]['Juni']['data_bulan'];  ?></td>		
						</tr>
						<?php $_SESSION['jumlahFrekuensiMD_Juni'] +=  $_SESSION['dataMD_bulan'][$i]['Juni']['data_bulan'];?>
					<?php endfor; ?>	
					<tr class="text-center collapse accordion-collapse MD_all" id="MDr6" data-bs-parent=".table">
						<th  colspan="2">Total</th>
						<td><?= $_SESSION['jumlahFrekuensiMD_Juni']; ?></td>
					</tr>
				</tbody>
			</table>

			<!-- bulan Juli -->
			<table class="table table-bordered table-sm mb-0">
				<thead>
					<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#MDr7">
							<th colspan="3" style="border-left-color:red;">Juli <i class="fa-solid fa-caret-down"></i></th>
						</tr>
					<tr class="text-center collapse accordion-collapse MD_all" id="MDr7" data-bs-parent=".table">
						<th>No</th>
						<th>Bulan</th>
						<th>Frekuensi</th>
					</tr>
				</thead>
				<tbody>
					<?php $no = 1; for ($i=0; $i < count($_SESSION['dataMD_bulan']) ; $i++) : ?>
					<tr class="text-center collapse accordion-collapse MD_all" id="MDr7" data-bs-parent=".table">
						<td><?= $no++; ?></td>
						<td class="text-justify">Juli  <?= $_SESSION['tahunMD_bulan'][$i]; ?></td>
						<td><?= $_SESSION['dataMD_bulan'][$i]['Juli']['data_bulan'];  ?></td>		
					</tr>
					<?php $_SESSION['jumlahFrekuensiMD_Juli'] +=  $_SESSION['dataMD_bulan'][$i]['Juli']['data_bulan'];?>
				<?php endfor; ?>	
				<tr class="text-center collapse accordion-collapse MD_all" id="MDr7" data-bs-parent=".table">
					<th  colspan="2">Total</th>
					<td><?= $_SESSION['jumlahFrekuensiMD_Juli']; ?></td>
				</tr>
			</tbody>
		</table>

		<!-- bulan Agustus -->
		<table class="table table-bordered table-sm mb-0">
			<thead>
				<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#MDr8">
							<th colspan="3" style="border-left-color:red;">Agustus <i class="fa-solid fa-caret-down"></i></th>
						</tr>
				<tr class="text-center collapse accordion-collapse MD_all" id="MDr8" data-bs-parent=".table">
					<th>No</th>
					<th>Bulan</th>
					<th>Frekuensi</th>
				</tr>
			</thead>
			<tbody>
				<?php $no = 1; for ($i=0; $i < count($_SESSION['dataMD_bulan']) ; $i++) : ?>
				<tr class="text-center collapse accordion-collapse MD_all" id="MDr8" data-bs-parent=".table">
					<td><?= $no++; ?></td>
					<td class="text-justify">Agustus  <?= $_SESSION['tahunMD_bulan'][$i]; ?></td>
					<td><?= $_SESSION['dataMD_bulan'][$i]['Agustus']['data_bulan'];  ?></td>		
				</tr>
				<?php $_SESSION['jumlahFrekuensiMD_Agustus'] +=  $_SESSION['dataMD_bulan'][$i]['Agustus']['data_bulan'];?>
			<?php endfor; ?>	
			<tr class="text-center collapse accordion-collapse MD_all" id="MDr8" data-bs-parent=".table">
				<th  colspan="2">Total</th>
				<td><?= $_SESSION['jumlahFrekuensiMD_Agustus']; ?></td>
			</tr>
		</tbody>
	</table>

	<!-- bulan September -->
	<table class="table table-bordered table-sm mb-0">
		<thead>
			<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#MDr9">
							<th colspan="3" style="border-left-color:red;">September <i class="fa-solid fa-caret-down"></i></th>
						</tr>
			<tr class="text-center collapse accordion-collapse MD_all" id="MDr9" data-bs-parent=".table">
				<th>No</th>
				<th>Bulan</th>
				<th>Frekuensi</th>
			</tr>
		</thead>
		<tbody>
			<?php $no = 1; for ($i=0; $i < count($_SESSION['dataMD_bulan']) ; $i++) : ?>
			<tr class="text-center collapse accordion-collapse MD_all" id="MDr9" data-bs-parent=".table">
				<td><?= $no++; ?></td>
				<td class="text-justify">September  <?= $_SESSION['tahunMD_bulan'][$i]; ?></td>
				<td><?= $_SESSION['dataMD_bulan'][$i]['September']['data_bulan'];  ?></td>		
			</tr>
			<?php $_SESSION['jumlahFrekuensiMD_September'] +=  $_SESSION['dataMD_bulan'][$i]['September']['data_bulan'];?>
		<?php endfor; ?>	
		<tr class="text-center collapse accordion-collapse MD_all" id="MDr9" data-bs-parent=".table">
			<th  colspan="2">Total</th>
			<td><?= $_SESSION['jumlahFrekuensiMD_September']; ?></td>
		</tr>
	</tbody>
</table>

<!-- bulan Oktober -->
<table class="table table-bordered table-sm mb-0">
	<thead>
		<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#MDr10">
			<th colspan="3" style="border-left-color:red;">Oktober <i class="fa-solid fa-caret-down"></i></th>
		</tr>
		<tr class="text-center collapse accordion-collapse MD_all" id="MDr10" data-bs-parent=".table">
			<th>No</th>
			<th>Bulan</th>
			<th>Frekuensi</th>
		</tr>
	</thead>
	<tbody>
		<?php $no = 1; for ($i=0; $i < count($_SESSION['dataMD_bulan']) ; $i++) : ?>
		<tr class="text-center collapse accordion-collapse MD_all" id="MDr10" data-bs-parent=".table">
			<td><?= $no++; ?></td>
			<td class="text-justify">Oktober  <?= $_SESSION['tahunMD_bulan'][$i]; ?></td>
			<td><?= $_SESSION['dataMD_bulan'][$i]['Oktober']['data_bulan'];  ?></td>		
		</tr>
		<?php $_SESSION['jumlahFrekuensiMD_Oktober'] +=  $_SESSION['dataMD_bulan'][$i]['Oktober']['data_bulan'];?>
	<?php endfor; ?>	
	<tr class="text-center collapse accordion-collapse MD_all" id="MDr10" data-bs-parent=".table">
		<th  colspan="2">Total</th>
		<td><?= $_SESSION['jumlahFrekuensiMD_Oktober']; ?></td>
	</tr>
</tbody>
</table>

<!-- bulan November -->
<table class="table table-bordered table-sm mb-0">
	<thead>
		<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#MDr11">
			<th colspan="3" style="border-left-color:blue;">November <i class="fa-solid fa-caret-down"></i></th>
		</tr>
		<tr class="text-center collapse accordion-collapse MD_all" id="MDr11" data-bs-parent=".table">
			<th>No</th>
			<th>Bulan</th>
			<th>Frekuensi</th>
		</tr>
	</thead>
	<tbody>
		<?php $no = 1; for ($i=0; $i < count($_SESSION['dataMD_bulan']) ; $i++) : ?>
		<tr class="text-center collapse accordion-collapse MD_all" id="MDr11" data-bs-parent=".table">
			<td><?= $no++; ?></td>
			<td class="text-justify">November  <?= $_SESSION['tahunMD_bulan'][$i]; ?></td>
			<td><?= $_SESSION['dataMD_bulan'][$i]['November']['data_bulan'];  ?></td>		
		</tr>
		<?php $_SESSION['jumlahFrekuensiMD_November'] +=  $_SESSION['dataMD_bulan'][$i]['November']['data_bulan'];?>
	<?php endfor; ?>	
	<tr class="text-center collapse accordion-collapse MD_all" id="MDr11" data-bs-parent=".table">
		<th  colspan="2">Total</th>
		<td><?= $_SESSION['jumlahFrekuensiMD_November']; ?></td>
	</tr>
</tbody>
</table>

<!-- bulan Desember -->
<table class="table table-bordered table-sm mb-0">
	<thead>
		<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#MDr12">
			<th colspan="3" style="border-left-color:blue;">Desember <i class="fa-solid fa-caret-down"></i></th>
		</tr>
		<tr class="text-center collapse accordion-collapse MD_all" id="MDr12" data-bs-parent=".table">
			<th>No</th>
			<th>Bulan</th>
			<th>Frekuensi</th>
		</tr>
	</thead>
	<tbody>
		<?php $no = 1; for ($i=0; $i < count($_SESSION['dataMD_bulan']) ; $i++) : ?>
		<tr class="text-center collapse accordion-collapse MD_all" id="MDr12" data-bs-parent=".table">
			<td><?= $no++; ?></td>
			<td class="text-justify">Desember  <?= $_SESSION['tahunMD_bulan'][$i]; ?></td>
			<td><?= $_SESSION['dataMD_bulan'][$i]['Desember']['data_bulan'];  ?></td>		
		</tr>
		<?php $_SESSION['jumlahFrekuensiMD_Desember'] +=  $_SESSION['dataMD_bulan'][$i]['Desember']['data_bulan'];?>
	<?php endfor; ?>	
	<tr class="text-center collapse accordion-collapse MD_all" id="MDr12" data-bs-parent=".table">
		<th  colspan="2">Total</th>
		<td><?= $_SESSION['jumlahFrekuensiMD_Desember']; ?></td>
	</tr>
</tbody>
</table>
</tr>
</tbody>
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
				<div class="icon_utama" data-bs-toggle="collapse" data-bs-target=".LB_all">
							<span>Show All : </span><i class="fa-solid fa-plus"></i>
						</div>

						<!-- bulan january -->
						<table class="table mb-0">
							<caption class="caption-top text-center">Data Luka Berat</caption>
							<thead>
								<tr class="table-dark text-center">
									<th class="col-12" colspan="3">Bulan</i></th>
								</tr>
								
							</thead>

							<tbody>
								<tr>
									<table class="table table-bordered table-sm mb-0">
										<thead>
											<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#LBr1">
												<th colspan="3" style="border-left-color:blue;">Januari <i class="fa-solid fa-caret-down"></i></th>
											</tr>
											<tr class="text-center collapse accordion-collapse LB_all" id="LBr1" data-bs-parent=".table">
												<th>No</th>
												<th>Bulan</th>
												<th>Frekuensi</th>
											</tr>
										</thead>
										<tbody>
											<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLB_bulan']) ; $i++) : ?>

											<tr class="text-center collapse accordion-collapse LB_all" id="LBr1" data-bs-parent=".table">
												<td><?= $no++; ?></td>
												<td class="text-justify">Januari <?= $_SESSION['tahunLB_bulan'][$i]; ?></td>
												<td><?= $_SESSION['dataLB_bulan'][$i]['Januari']['data_bulan'];  ?></td>		
											</tr>
											<?php $_SESSION['jumlahFrekuensiLB_Januari'] +=  $_SESSION['dataLB_bulan'][$i]['Januari']['data_bulan'];?>
										<?php endfor; ?>	
										<tr class="text-center collapse accordion-collapse LB_all" id="LBr1" data-bs-parent=".table">
											<th colspan="2">Total</th>
											<td><?= $_SESSION['jumlahFrekuensiLB_Januari']; ?></td>
										</tr>
									</tbody>
								</table>

								<!-- bulan February -->
								<table class="table table-bordered table-sm mb-0">

									<thead>
										<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#LBr2">
											<th colspan="3" style="border-left-color:blue;">Februari <i class="fa-solid fa-caret-down"></i></th>
										</tr>
										<tr class="text-center collapse accordion-collapse LB_all" id="LBr2" data-bs-parent=".table">
											<th>No</th>
											<th>Bulan</th>
											<th>Frekuensi</th>
										</tr>
									</thead>
									<tbody>
										<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLB_bulan']) ; $i++) : ?>
										<tr class="text-center collapse accordion-collapse LB_all" id="LBr2" data-bs-parent=".table">
											<td><?= $no++; ?></td>
											<td>Februari  <?= $_SESSION['tahunLB_bulan'][$i]; ?></td>
											<td><?= $_SESSION['dataLB_bulan'][$i]['Februari']['data_bulan'];  ?></td>		
										</tr>
										<?php $_SESSION['jumlahFrekuensiLB_Februari'] +=  $_SESSION['dataLB_bulan'][$i]['Februari']['data_bulan'];?>
									<?php endfor; ?>	
									<tr class="text-center collapse accordion-collapse LB_all" id="LBr2" data-bs-parent=".table">
										<th  colspan="2">Total</th>
										<td><?= $_SESSION['jumlahFrekuensiLB_Februari']; ?></td>
									</tr>
								</tbody>
							</table>

							<!-- bulan Maret -->
							<table class="table table-bordered table-sm mb-0">
								<thead>
									<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#LBr3">
										<th colspan="3" style="border-left-color:blue;">Maret <i class="fa-solid fa-caret-down"></i></th>
									</tr>
									<tr class="text-center collapse accordion-collapse LB_all" id="LBr3" data-bs-parent=".table">
										<th>No</th>
										<th>Bulan</th>
										<th>Frekuensi</th>
									</tr>
								</thead>
								<tbody>
									<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLB_bulan']) ; $i++) : ?>
									<tr class="text-center collapse accordion-collapse LB_all" id="LBr3" data-bs-parent=".table">
										<td><?= $no++; ?></td>
										<td class="text-justify">Maret  <?= $_SESSION['tahunLB_bulan'][$i]; ?></td>
										<td><?= $_SESSION['dataLB_bulan'][$i]['Maret']['data_bulan'];  ?></td>		
									</tr>
									<?php $_SESSION['jumlahFrekuensiLB_Maret'] +=  $_SESSION['dataLB_bulan'][$i]['Maret']['data_bulan'];?>
								<?php endfor; ?>	
								<tr class="text-center collapse accordion-collapse LB_all" id="LBr3" data-bs-parent=".table">
									<th  colspan="2">Total</th>
									<td><?= $_SESSION['jumlahFrekuensiLB_Maret']; ?></td>
								</tr>
							</tbody>
						</table>

						<!-- bulan April -->
						<table class="table table-bordered table-sm mb-0">
							<thead>
								<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#LBr4">
									<th colspan="3" style="border-left-color:blue;">April <i class="fa-solid fa-caret-down"></i></th>
								</tr>
								<tr class="text-center collapse accordion-collapse LB_all" id="LBr4" data-bs-parent=".table">
									<th>No</th>
									<th>Bulan</th>
									<th>Frekuensi</th>
								</tr>
							</thead>
							<tbody>
								<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLB_bulan']) ; $i++) : ?>
								<tr class="text-center collapse accordion-collapse LB_all" id="LBr4" data-bs-parent=".table">
									<td><?= $no++; ?></td>
									<td class="text-justify">April  <?= $_SESSION['tahunLB_bulan'][$i]; ?></td>
									<td><?= $_SESSION['dataLB_bulan'][$i]['April']['data_bulan'];  ?></td>		
								</tr>
								<?php $_SESSION['jumlahFrekuensiLB_April'] +=  $_SESSION['dataLB_bulan'][$i]['April']['data_bulan'];?>
							<?php endfor; ?>	
							<tr class="text-center collapse accordion-collapse LB_all" id="LBr4" data-bs-parent=".table">
								<th  colspan="2">Total</th>
								<td><?= $_SESSION['jumlahFrekuensiLB_April']; ?></td>
							</tr>
						</tbody>
					</table>

					<!-- bulan Mei -->
					<table class="table table-bordered table-sm mb-0">

						<thead>
							<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#LBr5">
								<th colspan="3" style="border-left-color:red;">Mei <i class="fa-solid fa-caret-down"></i></th>
							</tr>
							<tr class="text-center collapse accordion-collapse LB_all" id="LBr5" data-bs-parent=".table">
								<th>No</th>
								<th>Bulan</th>
								<th>Frekuensi</th>
							</tr>
						</thead>
						<tbody>
							<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLB_bulan']) ; $i++) : ?>
							<tr class="text-center collapse accordion-collapse LB_all" id="LBr5" data-bs-parent=".table">
								<td><?= $no++; ?></td>
								<td class="text-justify">Mei  <?= $_SESSION['tahunLB_bulan'][$i]; ?></td>
								<td><?= $_SESSION['dataLB_bulan'][$i]['Mei']['data_bulan'];  ?></td>		
							</tr>
							<?php $_SESSION['jumlahFrekuensiLB_Mei'] +=  $_SESSION['dataLB_bulan'][$i]['Mei']['data_bulan'];?>
						<?php endfor; ?>	
						<tr class="text-center collapse accordion-collapse LB_all" id="LBr5" data-bs-parent=".table">
							<th  colspan="2">Total</th>
							<td><?= $_SESSION['jumlahFrekuensiLB_Mei']; ?></td>
						</tr>
					</tbody>
				</table>

				<!-- bulan Juni -->
				<table class="table table-bordered table-sm mb-0">
					<thead>
						<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#LBr6">
							<th colspan="3" style="border-left-color:red;">Juni <i class="fa-solid fa-caret-down"></i></th>
						</tr>
						<tr class="text-center collapse accordion-collapse LB_all" id="LBr6" data-bs-parent=".table">
							<th>No</th>
							<th>Bulan</th>
							<th>Frekuensi</th>
						</tr>
					</thead>
					<tbody>
						<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLB_bulan']) ; $i++) : ?>
						<tr class="text-center collapse accordion-collapse LB_all" id="LBr6" data-bs-parent=".table">
							<td><?= $no++; ?></td>
							<td class="text-justify">Juni  <?= $_SESSION['tahunLB_bulan'][$i]; ?></td>
							<td><?= $_SESSION['dataLB_bulan'][$i]['Juni']['data_bulan'];  ?></td>		
						</tr>
						<?php $_SESSION['jumlahFrekuensiLB_Juni'] +=  $_SESSION['dataLB_bulan'][$i]['Juni']['data_bulan'];?>
					<?php endfor; ?>	
					<tr class="text-center collapse accordion-collapse LB_all" id="LBr6" data-bs-parent=".table">
						<th  colspan="2">Total</th>
						<td><?= $_SESSION['jumlahFrekuensiLB_Juni']; ?></td>
					</tr>
				</tbody>
			</table>

			<!-- bulan Juli -->
			<table class="table table-bordered table-sm mb-0">
				<thead>
					<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#LBr7">
							<th colspan="3" style="border-left-color:red;">Juli <i class="fa-solid fa-caret-down"></i></th>
						</tr>
					<tr class="text-center collapse accordion-collapse LB_all" id="LBr7" data-bs-parent=".table">
						<th>No</th>
						<th>Bulan</th>
						<th>Frekuensi</th>
					</tr>
				</thead>
				<tbody>
					<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLB_bulan']) ; $i++) : ?>
					<tr class="text-center collapse accordion-collapse LB_all" id="LBr7" data-bs-parent=".table">
						<td><?= $no++; ?></td>
						<td class="text-justify">Juli  <?= $_SESSION['tahunLB_bulan'][$i]; ?></td>
						<td><?= $_SESSION['dataLB_bulan'][$i]['Juli']['data_bulan'];  ?></td>		
					</tr>
					<?php $_SESSION['jumlahFrekuensiLB_Juli'] +=  $_SESSION['dataLB_bulan'][$i]['Juli']['data_bulan'];?>
				<?php endfor; ?>	
				<tr class="text-center collapse accordion-collapse LB_all" id="LBr7" data-bs-parent=".table">
					<th  colspan="2">Total</th>
					<td><?= $_SESSION['jumlahFrekuensiLB_Juli']; ?></td>
				</tr>
			</tbody>
		</table>

		<!-- bulan Agustus -->
		<table class="table table-bordered table-sm mb-0">
			<thead>
				<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#LBr8">
							<th colspan="3" style="border-left-color:red;">Agustus <i class="fa-solid fa-caret-down"></i></th>
						</tr>
				<tr class="text-center collapse accordion-collapse LB_all" id="LBr8" data-bs-parent=".table">
					<th>No</th>
					<th>Bulan</th>
					<th>Frekuensi</th>
				</tr>
			</thead>
			<tbody>
				<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLB_bulan']) ; $i++) : ?>
				<tr class="text-center collapse accordion-collapse LB_all" id="LBr8" data-bs-parent=".table">
					<td><?= $no++; ?></td>
					<td class="text-justify">Agustus  <?= $_SESSION['tahunLB_bulan'][$i]; ?></td>
					<td><?= $_SESSION['dataLB_bulan'][$i]['Agustus']['data_bulan'];  ?></td>		
				</tr>
				<?php $_SESSION['jumlahFrekuensiLB_Agustus'] +=  $_SESSION['dataLB_bulan'][$i]['Agustus']['data_bulan'];?>
			<?php endfor; ?>	
			<tr class="text-center collapse accordion-collapse LB_all" id="LBr8" data-bs-parent=".table">
				<th  colspan="2">Total</th>
				<td><?= $_SESSION['jumlahFrekuensiLB_Agustus']; ?></td>
			</tr>
		</tbody>
	</table>

	<!-- bulan September -->
	<table class="table table-bordered table-sm mb-0">
		<thead>
			<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#LBr9">
							<th colspan="3" style="border-left-color:red;">September <i class="fa-solid fa-caret-down"></i></th>
						</tr>
			<tr class="text-center collapse accordion-collapse LB_all" id="LBr9" data-bs-parent=".table">
				<th>No</th>
				<th>Bulan</th>
				<th>Frekuensi</th>
			</tr>
		</thead>
		<tbody>
			<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLB_bulan']) ; $i++) : ?>
			<tr class="text-center collapse accordion-collapse LB_all" id="LBr9" data-bs-parent=".table">
				<td><?= $no++; ?></td>
				<td class="text-justify">September  <?= $_SESSION['tahunLB_bulan'][$i]; ?></td>
				<td><?= $_SESSION['dataLB_bulan'][$i]['September']['data_bulan'];  ?></td>		
			</tr>
			<?php $_SESSION['jumlahFrekuensiLB_September'] +=  $_SESSION['dataLB_bulan'][$i]['September']['data_bulan'];?>
		<?php endfor; ?>	
		<tr class="text-center collapse accordion-collapse LB_all" id="LBr9" data-bs-parent=".table">
			<th  colspan="2">Total</th>
			<td><?= $_SESSION['jumlahFrekuensiLB_September']; ?></td>
		</tr>
	</tbody>
</table>

<!-- bulan Oktober -->
<table class="table table-bordered table-sm mb-0">
	<thead>
		<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#LBr10">
			<th colspan="3" style="border-left-color:red;">Oktober <i class="fa-solid fa-caret-down"></i></th>
		</tr>
		<tr class="text-center collapse accordion-collapse LB_all" id="LBr10" data-bs-parent=".table">
			<th>No</th>
			<th>Bulan</th>
			<th>Frekuensi</th>
		</tr>
	</thead>
	<tbody>
		<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLB_bulan']) ; $i++) : ?>
		<tr class="text-center collapse accordion-collapse LB_all" id="LBr10" data-bs-parent=".table">
			<td><?= $no++; ?></td>
			<td class="text-justify">Oktober  <?= $_SESSION['tahunLB_bulan'][$i]; ?></td>
			<td><?= $_SESSION['dataLB_bulan'][$i]['Oktober']['data_bulan'];  ?></td>		
		</tr>
		<?php $_SESSION['jumlahFrekuensiLB_Oktober'] +=  $_SESSION['dataLB_bulan'][$i]['Oktober']['data_bulan'];?>
	<?php endfor; ?>	
	<tr class="text-center collapse accordion-collapse LB_all" id="LBr10" data-bs-parent=".table">
		<th  colspan="2">Total</th>
		<td><?= $_SESSION['jumlahFrekuensiLB_Oktober']; ?></td>
	</tr>
</tbody>
</table>

<!-- bulan November -->
<table class="table table-bordered table-sm mb-0">
	<thead>
		<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#LBr11">
			<th colspan="3" style="border-left-color:blue;">November <i class="fa-solid fa-caret-down"></i></th>
		</tr>
		<tr class="text-center collapse accordion-collapse LB_all" id="LBr11" data-bs-parent=".table">
			<th>No</th>
			<th>Bulan</th>
			<th>Frekuensi</th>
		</tr>
	</thead>
	<tbody>
		<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLB_bulan']) ; $i++) : ?>
		<tr class="text-center collapse accordion-collapse LB_all" id="LBr11" data-bs-parent=".table">
			<td><?= $no++; ?></td>
			<td class="text-justify">November  <?= $_SESSION['tahunLB_bulan'][$i]; ?></td>
			<td><?= $_SESSION['dataLB_bulan'][$i]['November']['data_bulan'];  ?></td>		
		</tr>
		<?php $_SESSION['jumlahFrekuensiLB_November'] +=  $_SESSION['dataLB_bulan'][$i]['November']['data_bulan'];?>
	<?php endfor; ?>	
	<tr class="text-center collapse accordion-collapse LB_all" id="LBr11" data-bs-parent=".table">
		<th  colspan="2">Total</th>
		<td><?= $_SESSION['jumlahFrekuensiLB_November']; ?></td>
	</tr>
</tbody>
</table>

<!-- bulan Desember -->
<table class="table table-bordered table-sm mb-0">
	<thead>
		<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#LBr12">
			<th colspan="3" style="border-left-color:blue;">Desember <i class="fa-solid fa-caret-down"></i></th>
		</tr>
		<tr class="text-center collapse accordion-collapse LB_all" id="LBr12" data-bs-parent=".table">
			<th>No</th>
			<th>Bulan</th>
			<th>Frekuensi</th>
		</tr>
	</thead>
	<tbody>
		<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLB_bulan']) ; $i++) : ?>
		<tr class="text-center collapse accordion-collapse LB_all" id="LBr12" data-bs-parent=".table">
			<td><?= $no++; ?></td>
			<td class="text-justify">Desember  <?= $_SESSION['tahunLB_bulan'][$i]; ?></td>
			<td><?= $_SESSION['dataLB_bulan'][$i]['Desember']['data_bulan'];  ?></td>		
		</tr>
		<?php $_SESSION['jumlahFrekuensiLB_Desember'] +=  $_SESSION['dataLB_bulan'][$i]['Desember']['data_bulan'];?>
	<?php endfor; ?>	
	<tr class="text-center collapse accordion-collapse LB_all" id="LBr12" data-bs-parent=".table">
		<th  colspan="2">Total</th>
		<td><?= $_SESSION['jumlahFrekuensiLB_Desember']; ?></td>
	</tr>
</tbody>
</table>
</tr>
</tbody>
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
				<div class="icon_utama" data-bs-toggle="collapse" data-bs-target=".LR_all">
							<span>Show All : </span><i class="fa-solid fa-plus"></i>
						</div>

						<!-- bulan january -->
						<table class="table mb-0">
							<caption class="caption-top text-center">Data Luka Ringan</caption>
							<thead>
								<tr class="table-dark text-center">
									<th class="col-12" colspan="3">Bulan</i></th>
								</tr>
								
							</thead>

							<tbody>
								<tr>
									<table class="table table-bordered table-sm mb-0">
										<thead>
											<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#LRr1">
												<th colspan="3" style="border-left-color:blue;">Januari <i class="fa-solid fa-caret-down"></i></th>
											</tr>
											<tr class="text-center collapse accordion-collapse LR_all" id="LRr1" data-bs-parent=".table">
												<th>No</th>
												<th>Bulan</th>
												<th>Frekuensi</th>
											</tr>
										</thead>
										<tbody>
											<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLR_bulan']) ; $i++) : ?>

											<tr class="text-center collapse accordion-collapse LR_all" id="LRr1" data-bs-parent=".table">
												<td><?= $no++; ?></td>
												<td class="text-justify">Januari <?= $_SESSION['tahunLR_bulan'][$i]; ?></td>
												<td><?= $_SESSION['dataLR_bulan'][$i]['Januari']['data_bulan'];  ?></td>		
											</tr>
											<?php $_SESSION['jumlahFrekuensiLR_Januari'] +=  $_SESSION['dataLR_bulan'][$i]['Januari']['data_bulan'];?>
										<?php endfor; ?>	
										<tr class="text-center collapse accordion-collapse LR_all" id="LRr1" data-bs-parent=".table">
											<th colspan="2">Total</th>
											<td><?= $_SESSION['jumlahFrekuensiLR_Januari']; ?></td>
										</tr>
									</tbody>
								</table>

								<!-- bulan February -->
								<table class="table table-bordered table-sm mb-0">

									<thead>
										<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#LRr2">
											<th colspan="3" style="border-left-color:blue;">Februari <i class="fa-solid fa-caret-down"></i></th>
										</tr>
										<tr class="text-center collapse accordion-collapse LR_all" id="LRr2" data-bs-parent=".table">
											<th>No</th>
											<th>Bulan</th>
											<th>Frekuensi</th>
										</tr>
									</thead>
									<tbody>
										<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLR_bulan']) ; $i++) : ?>
										<tr class="text-center collapse accordion-collapse LR_all" id="LRr2" data-bs-parent=".table">
											<td><?= $no++; ?></td>
											<td>Februari  <?= $_SESSION['tahunLR_bulan'][$i]; ?></td>
											<td><?= $_SESSION['dataLR_bulan'][$i]['Februari']['data_bulan'];  ?></td>		
										</tr>
										<?php $_SESSION['jumlahFrekuensiLR_Februari'] +=  $_SESSION['dataLR_bulan'][$i]['Februari']['data_bulan'];?>
									<?php endfor; ?>	
									<tr class="text-center collapse accordion-collapse LR_all" id="LRr2" data-bs-parent=".table">
										<th  colspan="2">Total</th>
										<td><?= $_SESSION['jumlahFrekuensiLR_Februari']; ?></td>
									</tr>
								</tbody>
							</table>

							<!-- bulan Maret -->
							<table class="table table-bordered table-sm mb-0">
								<thead>
									<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#LRr3">
										<th colspan="3" style="border-left-color:blue;">Maret <i class="fa-solid fa-caret-down"></i></th>
									</tr>
									<tr class="text-center collapse accordion-collapse LR_all" id="LRr3" data-bs-parent=".table">
										<th>No</th>
										<th>Bulan</th>
										<th>Frekuensi</th>
									</tr>
								</thead>
								<tbody>
									<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLR_bulan']) ; $i++) : ?>
									<tr class="text-center collapse accordion-collapse LR_all" id="LRr3" data-bs-parent=".table">
										<td><?= $no++; ?></td>
										<td class="text-justify">Maret  <?= $_SESSION['tahunLR_bulan'][$i]; ?></td>
										<td><?= $_SESSION['dataLR_bulan'][$i]['Maret']['data_bulan'];  ?></td>		
									</tr>
									<?php $_SESSION['jumlahFrekuensiLR_Maret'] +=  $_SESSION['dataLR_bulan'][$i]['Maret']['data_bulan'];?>
								<?php endfor; ?>	
								<tr class="text-center collapse accordion-collapse LR_all" id="LRr3" data-bs-parent=".table">
									<th  colspan="2">Total</th>
									<td><?= $_SESSION['jumlahFrekuensiLR_Maret']; ?></td>
								</tr>
							</tbody>
						</table>

						<!-- bulan April -->
						<table class="table table-bordered table-sm mb-0">
							<thead>
								<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#LRr4">
									<th colspan="3" style="border-left-color:blue;">April <i class="fa-solid fa-caret-down"></i></th>
								</tr>
								<tr class="text-center collapse accordion-collapse LR_all" id="LRr4" data-bs-parent=".table">
									<th>No</th>
									<th>Bulan</th>
									<th>Frekuensi</th>
								</tr>
							</thead>
							<tbody>
								<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLR_bulan']) ; $i++) : ?>
								<tr class="text-center collapse accordion-collapse LR_all" id="LRr4" data-bs-parent=".table">
									<td><?= $no++; ?></td>
									<td class="text-justify">April  <?= $_SESSION['tahunLR_bulan'][$i]; ?></td>
									<td><?= $_SESSION['dataLR_bulan'][$i]['April']['data_bulan'];  ?></td>		
								</tr>
								<?php $_SESSION['jumlahFrekuensiLR_April'] +=  $_SESSION['dataLR_bulan'][$i]['April']['data_bulan'];?>
							<?php endfor; ?>	
							<tr class="text-center collapse accordion-collapse LR_all" id="LRr4" data-bs-parent=".table">
								<th  colspan="2">Total</th>
								<td><?= $_SESSION['jumlahFrekuensiLR_April']; ?></td>
							</tr>
						</tbody>
					</table>

					<!-- bulan Mei -->
					<table class="table table-bordered table-sm mb-0">

						<thead>
							<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#LRr5">
								<th colspan="3" style="border-left-color:red;">Mei <i class="fa-solid fa-caret-down"></i></th>
							</tr>
							<tr class="text-center collapse accordion-collapse LR_all" id="LRr5" data-bs-parent=".table">
								<th>No</th>
								<th>Bulan</th>
								<th>Frekuensi</th>
							</tr>
						</thead>
						<tbody>
							<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLR_bulan']) ; $i++) : ?>
							<tr class="text-center collapse accordion-collapse LR_all" id="LRr5" data-bs-parent=".table">
								<td><?= $no++; ?></td>
								<td class="text-justify">Mei  <?= $_SESSION['tahunLR_bulan'][$i]; ?></td>
								<td><?= $_SESSION['dataLR_bulan'][$i]['Mei']['data_bulan'];  ?></td>		
							</tr>
							<?php $_SESSION['jumlahFrekuensiLR_Mei'] +=  $_SESSION['dataLR_bulan'][$i]['Mei']['data_bulan'];?>
						<?php endfor; ?>	
						<tr class="text-center collapse accordion-collapse LR_all" id="LRr5" data-bs-parent=".table">
							<th  colspan="2">Total</th>
							<td><?= $_SESSION['jumlahFrekuensiLR_Mei']; ?></td>
						</tr>
					</tbody>
				</table>

				<!-- bulan Juni -->
				<table class="table table-bordered table-sm mb-0">
					<thead>
						<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#LRr6">
							<th colspan="3" style="border-left-color:red;">Juni <i class="fa-solid fa-caret-down"></i></th>
						</tr>
						<tr class="text-center collapse accordion-collapse LR_all" id="LRr6" data-bs-parent=".table">
							<th>No</th>
							<th>Bulan</th>
							<th>Frekuensi</th>
						</tr>
					</thead>
					<tbody>
						<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLR_bulan']) ; $i++) : ?>
						<tr class="text-center collapse accordion-collapse LR_all" id="LRr6" data-bs-parent=".table">
							<td><?= $no++; ?></td>
							<td class="text-justify">Juni  <?= $_SESSION['tahunLR_bulan'][$i]; ?></td>
							<td><?= $_SESSION['dataLR_bulan'][$i]['Juni']['data_bulan'];  ?></td>		
						</tr>
						<?php $_SESSION['jumlahFrekuensiLR_Juni'] +=  $_SESSION['dataLR_bulan'][$i]['Juni']['data_bulan'];?>
					<?php endfor; ?>	
					<tr class="text-center collapse accordion-collapse LR_all" id="LRr6" data-bs-parent=".table">
						<th  colspan="2">Total</th>
						<td><?= $_SESSION['jumlahFrekuensiLR_Juni']; ?></td>
					</tr>
				</tbody>
			</table>

			<!-- bulan Juli -->
			<table class="table table-bordered table-sm mb-0">
				<thead>
					<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#LRr7">
							<th colspan="3" style="border-left-color:red;">Juli <i class="fa-solid fa-caret-down"></i></th>
						</tr>
					<tr class="text-center collapse accordion-collapse LR_all" id="LRr7" data-bs-parent=".table">
						<th>No</th>
						<th>Bulan</th>
						<th>Frekuensi</th>
					</tr>
				</thead>
				<tbody>
					<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLR_bulan']) ; $i++) : ?>
					<tr class="text-center collapse accordion-collapse LR_all" id="LRr7" data-bs-parent=".table">
						<td><?= $no++; ?></td>
						<td class="text-justify">Juli  <?= $_SESSION['tahunLR_bulan'][$i]; ?></td>
						<td><?= $_SESSION['dataLR_bulan'][$i]['Juli']['data_bulan'];  ?></td>		
					</tr>
					<?php $_SESSION['jumlahFrekuensiLR_Juli'] +=  $_SESSION['dataLR_bulan'][$i]['Juli']['data_bulan'];?>
				<?php endfor; ?>	
				<tr class="text-center collapse accordion-collapse LR_all" id="LRr7" data-bs-parent=".table">
					<th  colspan="2">Total</th>
					<td><?= $_SESSION['jumlahFrekuensiLR_Juli']; ?></td>
				</tr>
			</tbody>
		</table>

		<!-- bulan Agustus -->
		<table class="table table-bordered table-sm mb-0">
			<thead>
				<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#LRr8">
							<th colspan="3" style="border-left-color:red;">Agustus <i class="fa-solid fa-caret-down"></i></th>
						</tr>
				<tr class="text-center collapse accordion-collapse LR_all" id="LRr8" data-bs-parent=".table">
					<th>No</th>
					<th>Bulan</th>
					<th>Frekuensi</th>
				</tr>
			</thead>
			<tbody>
				<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLR_bulan']) ; $i++) : ?>
				<tr class="text-center collapse accordion-collapse LR_all" id="LRr8" data-bs-parent=".table">
					<td><?= $no++; ?></td>
					<td class="text-justify">Agustus  <?= $_SESSION['tahunLR_bulan'][$i]; ?></td>
					<td><?= $_SESSION['dataLR_bulan'][$i]['Agustus']['data_bulan'];  ?></td>		
				</tr>
				<?php $_SESSION['jumlahFrekuensiLR_Agustus'] +=  $_SESSION['dataLR_bulan'][$i]['Agustus']['data_bulan'];?>
			<?php endfor; ?>	
			<tr class="text-center collapse accordion-collapse LR_all" id="LRr8" data-bs-parent=".table">
				<th  colspan="2">Total</th>
				<td><?= $_SESSION['jumlahFrekuensiLR_Agustus']; ?></td>
			</tr>
		</tbody>
	</table>

	<!-- bulan September -->
	<table class="table table-bordered table-sm mb-0">
		<thead>
			<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#LRr9">
							<th colspan="3" style="border-left-color:red;">September <i class="fa-solid fa-caret-down"></i></th>
						</tr>
			<tr class="text-center collapse accordion-collapse LR_all" id="LRr9" data-bs-parent=".table">
				<th>No</th>
				<th>Bulan</th>
				<th>Frekuensi</th>
			</tr>
		</thead>
		<tbody>
			<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLR_bulan']) ; $i++) : ?>
			<tr class="text-center collapse accordion-collapse LR_all" id="LRr9" data-bs-parent=".table">
				<td><?= $no++; ?></td>
				<td class="text-justify">September  <?= $_SESSION['tahunLR_bulan'][$i]; ?></td>
				<td><?= $_SESSION['dataLR_bulan'][$i]['September']['data_bulan'];  ?></td>		
			</tr>
			<?php $_SESSION['jumlahFrekuensiLR_September'] +=  $_SESSION['dataLR_bulan'][$i]['September']['data_bulan'];?>
		<?php endfor; ?>	
		<tr class="text-center collapse accordion-collapse LR_all" id="LRr9" data-bs-parent=".table">
			<th  colspan="2">Total</th>
			<td><?= $_SESSION['jumlahFrekuensiLR_September']; ?></td>
		</tr>
	</tbody>
</table>

<!-- bulan Oktober -->
<table class="table table-bordered table-sm mb-0">
	<thead>
		<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#LRr10">
			<th colspan="3" style="border-left-color:red;">Oktober <i class="fa-solid fa-caret-down"></i></th>
		</tr>
		<tr class="text-center collapse accordion-collapse LR_all" id="LRr10" data-bs-parent=".table">
			<th>No</th>
			<th>Bulan</th>
			<th>Frekuensi</th>
		</tr>
	</thead>
	<tbody>
		<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLR_bulan']) ; $i++) : ?>
		<tr class="text-center collapse accordion-collapse LR_all" id="LRr10" data-bs-parent=".table">
			<td><?= $no++; ?></td>
			<td class="text-justify">Oktober  <?= $_SESSION['tahunLR_bulan'][$i]; ?></td>
			<td><?= $_SESSION['dataLR_bulan'][$i]['Oktober']['data_bulan'];  ?></td>		
		</tr>
		<?php $_SESSION['jumlahFrekuensiLR_Oktober'] +=  $_SESSION['dataLR_bulan'][$i]['Oktober']['data_bulan'];?>
	<?php endfor; ?>	
	<tr class="text-center collapse accordion-collapse LR_all" id="LRr10" data-bs-parent=".table">
		<th  colspan="2">Total</th>
		<td><?= $_SESSION['jumlahFrekuensiLR_Oktober']; ?></td>
	</tr>
</tbody>
</table>

<!-- bulan November -->
<table class="table table-bordered table-sm mb-0">
	<thead>
		<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#LRr11">
			<th colspan="3" style="border-left-color:blue;">November <i class="fa-solid fa-caret-down"></i></th>
		</tr>
		<tr class="text-center collapse accordion-collapse LR_all" id="LRr11" data-bs-parent=".table">
			<th>No</th>
			<th>Bulan</th>
			<th>Frekuensi</th>
		</tr>
	</thead>
	<tbody>
		<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLR_bulan']) ; $i++) : ?>
		<tr class="text-center collapse accordion-collapse LR_all" id="LRr11" data-bs-parent=".table">
			<td><?= $no++; ?></td>
			<td class="text-justify">November  <?= $_SESSION['tahunLR_bulan'][$i]; ?></td>
			<td><?= $_SESSION['dataLR_bulan'][$i]['November']['data_bulan'];  ?></td>		
		</tr>
		<?php $_SESSION['jumlahFrekuensiLR_November'] +=  $_SESSION['dataLR_bulan'][$i]['November']['data_bulan'];?>
	<?php endfor; ?>	
	<tr class="text-center collapse accordion-collapse LR_all" id="LRr11" data-bs-parent=".table">
		<th  colspan="2">Total</th>
		<td><?= $_SESSION['jumlahFrekuensiLR_November']; ?></td>
	</tr>
</tbody>
</table>

<!-- bulan Desember -->
<table class="table table-bordered table-sm mb-0">
	<thead>
		<tr class="table-secondary icon" data-bs-toggle="collapse" data-bs-target="#LRr12">
			<th colspan="3" style="border-left-color:blue;">Desember <i class="fa-solid fa-caret-down"></i></th>
		</tr>
		<tr class="text-center collapse accordion-collapse LR_all" id="LRr12" data-bs-parent=".table">
			<th>No</th>
			<th>Bulan</th>
			<th>Frekuensi</th>
		</tr>
	</thead>
	<tbody>
		<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLR_bulan']) ; $i++) : ?>
		<tr class="text-center collapse accordion-collapse LR_all" id="LRr12" data-bs-parent=".table">
			<td><?= $no++; ?></td>
			<td class="text-justify">Desember  <?= $_SESSION['tahunLR_bulan'][$i]; ?></td>
			<td><?= $_SESSION['dataLR_bulan'][$i]['Desember']['data_bulan'];  ?></td>		
		</tr>
		<?php $_SESSION['jumlahFrekuensiLR_Desember'] +=  $_SESSION['dataLR_bulan'][$i]['Desember']['data_bulan'];?>
	<?php endfor; ?>	
	<tr class="text-center collapse accordion-collapse LR_all" id="LRr12" data-bs-parent=".table">
		<th  colspan="2">Total</th>
		<td><?= $_SESSION['jumlahFrekuensiLR_Desember']; ?></td>
	</tr>
</tbody>
</table>
</tr>
</tbody>
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