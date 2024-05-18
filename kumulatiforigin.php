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
									<th>Probabilitas</th>
									<th>Kumulatif</th>
								</tr>
							</thead>
							<tbody>
								<?php $no = 1; for ($i=0; $i < count($_SESSION['dataMD_bulan']) ; $i++) : ?>
								
								<tr class="text-center">
									<td><?= $no++; ?></td>
									<td class="text-justify">Januari <?= $_SESSION['tahunMD_bulan'][$i]; ?></td>
									<td><?= $_SESSION['dataMD_bulan'][$i]['Januari']['data_bulan'];  ?></td>
									<td><?= $_SESSION['prob_MD_Januari'][$i]; ?></td>
									<td><?= $_SESSION['kumu_Januari_MD'][$i]; ?></td>				
								</tr>
								
							<?php endfor; ?>	
							<tr class="text-center">
								<th colspan="2">Total</th>
								<td><?= $_SESSION['jumlahFrekuensiMD_Januari']; ?></td>
								<td><?= $_SESSION['jumlah_prob_Januari_MD'] ?></td>
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
								<th>Probabilitas</th>
								<th>Kumulatif</th>
							</tr>
						</thead>
						<tbody>
							<?php $no = 1; for ($i=0; $i < count($_SESSION['dataMD_bulan']) ; $i++) : ?>
							<tr class="text-center">
								<td><?= $no++; ?></td>
								<td class="text-justify">Februari  <?= $_SESSION['tahunMD_bulan'][$i]; ?></td>
								<td><?= $_SESSION['dataMD_bulan'][$i]['Februari']['data_bulan'];  ?></td>	
								<td><?= $_SESSION['prob_MD_Februari'][$i]; ?></td>	
								<td><?= $_SESSION['kumu_Februari_MD'][$i]; ?></td>
							</tr>
						<?php endfor; ?>	
						<tr class="text-center">
							<th  colspan="2">Total</th>
							<td><?= $_SESSION['jumlahFrekuensiMD_Februari']; ?></td>
							<td><?= $_SESSION['jumlah_prob_Februari_MD'] ?></td>
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
							<th>Probabilitas</th>
							<th>Kumulatif</th>
						</tr>
					</thead>
					<tbody>
						<?php $no = 1; for ($i=0; $i < count($_SESSION['dataMD_bulan']) ; $i++) : ?>
						<tr class="text-center">
							<td><?= $no++; ?></td>
							<td class="text-justify">Maret  <?= $_SESSION['tahunMD_bulan'][$i]; ?></td>
							<td><?= $_SESSION['dataMD_bulan'][$i]['Maret']['data_bulan'];  ?></td>
							<td><?= $_SESSION['prob_MD_Maret'][$i]; ?></td>	
							<td><?= $_SESSION['kumu_Maret_MD'][$i]; ?></td>		
						</tr>
					<?php endfor; ?>	
					<tr class="text-center">
						<th  colspan="2">Total</th>
						<td><?= $_SESSION['jumlahFrekuensiMD_Maret']; ?></td>
						<td><?= $_SESSION['jumlah_prob_Maret_MD'] ?></td>
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
						<th>Probabilitas</th>
						<th>Kumulatif</th>
					</tr>
				</thead>
				<tbody>
					<?php $no = 1; for ($i=0; $i < count($_SESSION['dataMD_bulan']) ; $i++) : ?>
					<tr class="text-center">
						<td><?= $no++; ?></td>
						<td class="text-justify">April  <?= $_SESSION['tahunMD_bulan'][$i]; ?></td>
						<td><?= $_SESSION['dataMD_bulan'][$i]['April']['data_bulan'];  ?></td>
						<td><?= $_SESSION['prob_MD_April'][$i];  ?></td>	
						<td><?= $_SESSION['kumu_April_MD'][$i]; ?></td>	
					</tr>
				<?php endfor; ?>	
				<tr class="text-center">
					<th  colspan="2">Total</th>
					<td><?= $_SESSION['jumlahFrekuensiMD_April']; ?></td>
					<td><?= $_SESSION['jumlah_prob_April_MD'] ?></td>
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
					<th>Probabilitas</th>
					<th>Kumulatif</th>
				</tr>
			</thead>
			<tbody>
				<?php $no = 1; for ($i=0; $i < count($_SESSION['dataMD_bulan']) ; $i++) : ?>
				<tr class="text-center">
					<td><?= $no++; ?></td>
					<td class="text-justify">Mei  <?= $_SESSION['tahunMD_bulan'][$i]; ?></td>
					<td><?= $_SESSION['dataMD_bulan'][$i]['Mei']['data_bulan'];  ?></td>
					<td><?= $_SESSION['prob_MD_Mei'][$i];  ?></td>
					<td><?= $_SESSION['kumu_Mei_MD'][$i]; ?></td>						
				</tr>
			<?php endfor; ?>	
			<tr class="text-center">
				<th  colspan="2">Total</th>
				<td><?= $_SESSION['jumlahFrekuensiMD_Mei']; ?></td>
				<td><?= $_SESSION['jumlah_prob_Mei_MD'] ?></td>
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
				<th>Probabilitas</th>
				<th>Kumulatif</th>
			</tr>
		</thead>
		<tbody>
			<?php $no = 1; for ($i=0; $i < count($_SESSION['dataMD_bulan']) ; $i++) : ?>
			<tr class="text-center">
				<td><?= $no++; ?></td>
				<td class="text-justify">Juni  <?= $_SESSION['tahunMD_bulan'][$i]; ?></td>
				<td><?= $_SESSION['dataMD_bulan'][$i]['Juni']['data_bulan'];  ?></td>
				<td><?= $_SESSION['prob_MD_Juni'][$i] ?></td>
				<td><?= $_SESSION['kumu_Juni_MD'][$i]; ?></td>		
			</tr>
		<?php endfor; ?>	
		<tr class="text-center">
			<th  colspan="2">Total</th>
			<td><?= $_SESSION['jumlahFrekuensiMD_Juni']; ?></td>
			<td><?= $_SESSION['jumlah_prob_Juni_MD'] ?></td>
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
			<th>Probabilitas</th>
			<th>Kumulatif</th>
		</tr>
	</thead>
	<tbody>
		<?php $no = 1; for ($i=0; $i < count($_SESSION['dataMD_bulan']) ; $i++) : ?>
		<tr class="text-center">
			<td><?= $no++; ?></td>
			<td class="text-justify">Juli  <?= $_SESSION['tahunMD_bulan'][$i]; ?></td>
			<td><?= $_SESSION['dataMD_bulan'][$i]['Juli']['data_bulan'];  ?></td>	
			<td><?= $_SESSION['prob_MD_Juli'][$i]?></td>
			<td><?= $_SESSION['kumu_Juli_MD'][$i]; ?></td>
		</tr>
	<?php endfor; ?>	
	<tr class="text-center">
		<th  colspan="2">Total</th>
		<td><?= $_SESSION['jumlahFrekuensiMD_Juli']; ?></td>
		<td><?= $_SESSION['jumlah_prob_Juli_MD'] ?></td>
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
			<th>Probabilitas</th>
			<th>Kumulatif</th>
		</tr>
	</thead>
	<tbody>
		<?php $no = 1; for ($i=0; $i < count($_SESSION['dataMD_bulan']) ; $i++) : ?>
		<tr class="text-center">
			<td><?= $no++; ?></td>
			<td class="text-justify">Agustus  <?= $_SESSION['tahunMD_bulan'][$i]; ?></td>
			<td><?= $_SESSION['dataMD_bulan'][$i]['Agustus']['data_bulan'];  ?></td>
			<td><?= $_SESSION['prob_MD_Agustus'][$i]; ?></td>
			<td><?= $_SESSION['kumu_Agustus_MD'][$i]; ?></td>			
		</tr>
	<?php endfor; ?>	
	<tr class="text-center">
		<th  colspan="2">Total</th>
		<td><?= $_SESSION['jumlahFrekuensiMD_Agustus']; ?></td>
		<td><?= $_SESSION['jumlah_prob_Agustus_MD'] ?></td>
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
			<th>Probabilitas</th>
			<th>Kumulatif</th>
		</tr>
	</thead>
	<tbody>
		<?php $no = 1; for ($i=0; $i < count($_SESSION['dataMD_bulan']) ; $i++) : ?>
		<tr class="text-center">
			<td><?= $no++; ?></td>
			<td class="text-justify">September  <?= $_SESSION['tahunMD_bulan'][$i]; ?></td>
			<td><?= $_SESSION['dataMD_bulan'][$i]['September']['data_bulan'];  ?></td>		
			<td><?= $_SESSION['prob_MD_September'][$i]; ?></td>
			<td><?= $_SESSION['kumu_September_MD'][$i]; ?></td>
		</tr>
	<?php endfor; ?>	
	<tr class="text-center">
		<th  colspan="2">Total</th>
		<td><?= $_SESSION['jumlahFrekuensiMD_September']; ?></td>
		<td><?= $_SESSION['jumlah_prob_September_MD'] ?></td>
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
			<th>Probabilitas</th>
			<th>Kumulatif</th>
		</tr>
	</thead>
	<tbody>
		<?php $no = 1; for ($i=0; $i < count($_SESSION['dataMD_bulan']) ; $i++) : ?>
		<tr class="text-center">
			<td><?= $no++; ?></td>
			<td class="text-justify">Oktober  <?= $_SESSION['tahunMD_bulan'][$i]; ?></td>
			<td><?= $_SESSION['dataMD_bulan'][$i]['Oktober']['data_bulan'];  ?></td>
			<td><?= $_SESSION['prob_MD_Oktober'][$i]; ?></td>
			<td><?= $_SESSION['kumu_Oktober_MD'][$i]; ?></td>		
		</tr>
	<?php endfor; ?>	
	<tr class="text-center">
		<th  colspan="2">Total</th>
		<td><?= $_SESSION['jumlahFrekuensiMD_Oktober']; ?></td>
		<td><?= $_SESSION['jumlah_prob_Oktober_MD'] ?></td>
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
			<th>Probabilitas</th>
			<th>Kumulatif</th>
		</tr>
	</thead>
	<tbody>
		<?php $no = 1; for ($i=0; $i < count($_SESSION['dataMD_bulan']) ; $i++) : ?>
		<tr class="text-center">
			<td><?= $no++; ?></td>
			<td class="text-justify">November  <?= $_SESSION['tahunMD_bulan'][$i]; ?></td>
			<td><?= $_SESSION['dataMD_bulan'][$i]['November']['data_bulan'];  ?></td>
			<td><?= $_SESSION['prob_MD_November'][$i]; ?></td>
			<td><?= $_SESSION['kumu_November_MD'][$i]; ?></td>		
		</tr>
	<?php endfor; ?>	
	<tr class="text-center">
		<th  colspan="2">Total</th>
		<td><?= $_SESSION['jumlahFrekuensiMD_November']; ?></td>
		<td><?= $_SESSION['jumlah_prob_November_MD'] ?></td>
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
			<th>Probabilitas</th>
			<th>Kumulatif</th>
		</tr>
	</thead>
	<tbody>
		<?php $no = 1; for ($i=0; $i < count($_SESSION['dataMD_bulan']) ; $i++) : ?>
		<tr class="text-center">
			<td><?= $no++; ?></td>
			<td class="text-justify">Desember  <?= $_SESSION['tahunMD_bulan'][$i]; ?></td>
			<td><?= $_SESSION['dataMD_bulan'][$i]['Desember']['data_bulan'];  ?></td>
			<td><?= $_SESSION['prob_MD_Desember'][$i]; ?></td>
			<td><?= $_SESSION['kumu_Desember_MD'][$i]; ?></td>		
		</tr>
	<?php endfor; ?>	
	<tr class="text-center">
		<th  colspan="2">Total</th>
		<td><?= $_SESSION['jumlahFrekuensiMD_Desember']; ?></td>
		<td><?= $_SESSION['jumlah_prob_Desember_MD'] ?></td>
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
									<th>Probabilitas</th>
									<th>Kumulatif</th>
								</tr>
							</thead>
							<tbody>
								<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLB_bulan']) ; $i++) : ?>
								
								<tr class="text-center">
									<td><?= $no++; ?></td>
									<td class="text-justify">Januari <?= $_SESSION['tahunLB_bulan'][$i]; ?></td>
									<td><?= $_SESSION['dataLB_bulan'][$i]['Januari']['data_bulan'];  ?></td>
									<td><?= $_SESSION['prob_LB_Januari'][$i]; ?></td>
									<td><?= $_SESSION['kumu_Januari_LB'][$i]; ?></td>				
								</tr>
								
							<?php endfor; ?>	
							<tr class="text-center">
								<th colspan="2">Total</th>
								<td><?= $_SESSION['jumlahFrekuensiLB_Januari']; ?></td>
								<td><?= $_SESSION['jumlah_prob_Januari_LB'] ?></td>
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
								<th>Probabilitas</th>
								<th>Kumulatif</th>
							</tr>
						</thead>
						<tbody>
							<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLB_bulan']) ; $i++) : ?>
							<tr class="text-center">
								<td><?= $no++; ?></td>
								<td class="text-justify">Februari  <?= $_SESSION['tahunLB_bulan'][$i]; ?></td>
								<td><?= $_SESSION['dataLB_bulan'][$i]['Februari']['data_bulan'];  ?></td>	
								<td><?= $_SESSION['prob_LB_Februari'][$i]; ?></td>	
								<td><?= $_SESSION['kumu_Februari_LB'][$i]; ?></td>
							</tr>
						<?php endfor; ?>	
						<tr class="text-center">
							<th  colspan="2">Total</th>
							<td><?= $_SESSION['jumlahFrekuensiLB_Februari']; ?></td>
							<td><?= $_SESSION['jumlah_prob_Februari_LB'] ?></td>
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
							<th>Probabilitas</th>
							<th>Kumulatif</th>
						</tr>
					</thead>
					<tbody>
						<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLB_bulan']) ; $i++) : ?>
						<tr class="text-center">
							<td><?= $no++; ?></td>
							<td class="text-justify">Maret  <?= $_SESSION['tahunLB_bulan'][$i]; ?></td>
							<td><?= $_SESSION['dataLB_bulan'][$i]['Maret']['data_bulan'];  ?></td>
							<td><?= $_SESSION['prob_LB_Maret'][$i]; ?></td>	
							<td><?= $_SESSION['kumu_Maret_LB'][$i]; ?></td>		
						</tr>
					<?php endfor; ?>	
					<tr class="text-center">
						<th  colspan="2">Total</th>
						<td><?= $_SESSION['jumlahFrekuensiLB_Maret']; ?></td>
						<td><?= $_SESSION['jumlah_prob_Maret_LB'] ?></td>
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
						<th>Probabilitas</th>
						<th>Kumulatif</th>
					</tr>
				</thead>
				<tbody>
					<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLB_bulan']) ; $i++) : ?>
					<tr class="text-center">
						<td><?= $no++; ?></td>
						<td class="text-justify">April  <?= $_SESSION['tahunLB_bulan'][$i]; ?></td>
						<td><?= $_SESSION['dataLB_bulan'][$i]['April']['data_bulan'];  ?></td>
						<td><?= $_SESSION['prob_LB_April'][$i];  ?></td>	
						<td><?= $_SESSION['kumu_April_LB'][$i]; ?></td>	
					</tr>
				<?php endfor; ?>	
				<tr class="text-center">
					<th  colspan="2">Total</th>
					<td><?= $_SESSION['jumlahFrekuensiLB_April']; ?></td>
					<td><?= $_SESSION['jumlah_prob_April_LB'] ?></td>
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
					<th>Probabilitas</th>
					<th>Kumulatif</th>
				</tr>
			</thead>
			<tbody>
				<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLB_bulan']) ; $i++) : ?>
				<tr class="text-center">
					<td><?= $no++; ?></td>
					<td class="text-justify">Mei  <?= $_SESSION['tahunLB_bulan'][$i]; ?></td>
					<td><?= $_SESSION['dataLB_bulan'][$i]['Mei']['data_bulan'];  ?></td>
					<td><?= $_SESSION['prob_LB_Mei'][$i];  ?></td>
					<td><?= $_SESSION['kumu_Mei_LB'][$i]; ?></td>						
				</tr>
			<?php endfor; ?>	
			<tr class="text-center">
				<th  colspan="2">Total</th>
				<td><?= $_SESSION['jumlahFrekuensiLB_Mei']; ?></td>
				<td><?= $_SESSION['jumlah_prob_Mei_LB'] ?></td>
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
				<th>Probabilitas</th>
				<th>Kumulatif</th>
			</tr>
		</thead>
		<tbody>
			<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLB_bulan']) ; $i++) : ?>
			<tr class="text-center">
				<td><?= $no++; ?></td>
				<td class="text-justify">Juni  <?= $_SESSION['tahunLB_bulan'][$i]; ?></td>
				<td><?= $_SESSION['dataLB_bulan'][$i]['Juni']['data_bulan'];  ?></td>
				<td><?= $_SESSION['prob_LB_Juni'][$i] ?></td>
				<td><?= $_SESSION['kumu_Juni_LB'][$i]; ?></td>		
			</tr>
		<?php endfor; ?>	
		<tr class="text-center">
			<th  colspan="2">Total</th>
			<td><?= $_SESSION['jumlahFrekuensiLB_Juni']; ?></td>
			<td><?= $_SESSION['jumlah_prob_Juni_LB'] ?></td>
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
			<th>Probabilitas</th>
			<th>Kumulatif</th>
		</tr>
	</thead>
	<tbody>
		<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLB_bulan']) ; $i++) : ?>
		<tr class="text-center">
			<td><?= $no++; ?></td>
			<td class="text-justify">Juli  <?= $_SESSION['tahunLB_bulan'][$i]; ?></td>
			<td><?= $_SESSION['dataLB_bulan'][$i]['Juli']['data_bulan'];  ?></td>	
			<td><?= $_SESSION['prob_LB_Juli'][$i]?></td>
			<td><?= $_SESSION['kumu_Juli_LB'][$i]; ?></td>
		</tr>
	<?php endfor; ?>	
	<tr class="text-center">
		<th  colspan="2">Total</th>
		<td><?= $_SESSION['jumlahFrekuensiLB_Juli']; ?></td>
		<td><?= $_SESSION['jumlah_prob_Juli_LB'] ?></td>
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
			<th>Probabilitas</th>
			<th>Kumulatif</th>
		</tr>
	</thead>
	<tbody>
		<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLB_bulan']) ; $i++) : ?>
		<tr class="text-center">
			<td><?= $no++; ?></td>
			<td class="text-justify">Agustus  <?= $_SESSION['tahunLB_bulan'][$i]; ?></td>
			<td><?= $_SESSION['dataLB_bulan'][$i]['Agustus']['data_bulan'];  ?></td>
			<td><?= $_SESSION['prob_LB_Agustus'][$i]; ?></td>
			<td><?= $_SESSION['kumu_Agustus_LB'][$i]; ?></td>			
		</tr>
	<?php endfor; ?>	
	<tr class="text-center">
		<th  colspan="2">Total</th>
		<td><?= $_SESSION['jumlahFrekuensiLB_Agustus']; ?></td>
		<td><?= $_SESSION['jumlah_prob_Agustus_LB'] ?></td>
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
			<th>Probabilitas</th>
			<th>Kumulatif</th>
		</tr>
	</thead>
	<tbody>
		<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLB_bulan']) ; $i++) : ?>
		<tr class="text-center">
			<td><?= $no++; ?></td>
			<td class="text-justify">September  <?= $_SESSION['tahunLB_bulan'][$i]; ?></td>
			<td><?= $_SESSION['dataLB_bulan'][$i]['September']['data_bulan'];  ?></td>		
			<td><?= $_SESSION['prob_LB_September'][$i]; ?></td>
			<td><?= $_SESSION['kumu_September_LB'][$i]; ?></td>
		</tr>
	<?php endfor; ?>	
	<tr class="text-center">
		<th  colspan="2">Total</th>
		<td><?= $_SESSION['jumlahFrekuensiLB_September']; ?></td>
		<td><?= $_SESSION['jumlah_prob_September_LB'] ?></td>
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
			<th>Probabilitas</th>
			<th>Kumulatif</th>
		</tr>
	</thead>
	<tbody>
		<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLB_bulan']) ; $i++) : ?>
		<tr class="text-center">
			<td><?= $no++; ?></td>
			<td class="text-justify">Oktober  <?= $_SESSION['tahunLB_bulan'][$i]; ?></td>
			<td><?= $_SESSION['dataLB_bulan'][$i]['Oktober']['data_bulan'];  ?></td>
			<td><?= $_SESSION['prob_LB_Oktober'][$i]; ?></td>
			<td><?= $_SESSION['kumu_Oktober_LB'][$i]; ?></td>		
		</tr>
	<?php endfor; ?>	
	<tr class="text-center">
		<th  colspan="2">Total</th>
		<td><?= $_SESSION['jumlahFrekuensiLB_Oktober']; ?></td>
		<td><?= $_SESSION['jumlah_prob_Oktober_LB'] ?></td>
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
			<th>Probabilitas</th>
			<th>Kumulatif</th>
		</tr>
	</thead>
	<tbody>
		<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLB_bulan']) ; $i++) : ?>
		<tr class="text-center">
			<td><?= $no++; ?></td>
			<td class="text-justify">November  <?= $_SESSION['tahunLB_bulan'][$i]; ?></td>
			<td><?= $_SESSION['dataLB_bulan'][$i]['November']['data_bulan'];  ?></td>
			<td><?= $_SESSION['prob_LB_November'][$i]; ?></td>
			<td><?= $_SESSION['kumu_November_LB'][$i]; ?></td>		
		</tr>
	<?php endfor; ?>	
	<tr class="text-center">
		<th  colspan="2">Total</th>
		<td><?= $_SESSION['jumlahFrekuensiLB_November']; ?></td>
		<td><?= $_SESSION['jumlah_prob_November_LB'] ?></td>
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
			<th>Probabilitas</th>
			<th>Kumulatif</th>
		</tr>
	</thead>
	<tbody>
		<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLB_bulan']) ; $i++) : ?>
		<tr class="text-center">
			<td><?= $no++; ?></td>
			<td class="text-justify">Desember  <?= $_SESSION['tahunLB_bulan'][$i]; ?></td>
			<td><?= $_SESSION['dataLB_bulan'][$i]['Desember']['data_bulan'];  ?></td>
			<td><?= $_SESSION['prob_LB_Desember'][$i]; ?></td>
			<td><?= $_SESSION['kumu_Desember_LB'][$i]; ?></td>		
		</tr>
	<?php endfor; ?>	
	<tr class="text-center">
		<th  colspan="2">Total</th>
		<td><?= $_SESSION['jumlahFrekuensiLB_Desember']; ?></td>
		<td><?= $_SESSION['jumlah_prob_Desember_LB'] ?></td>
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
									<th>Probabilitas</th>
									<th>Kumulatif</th>
								</tr>
							</thead>
							<tbody>
								<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLR_bulan']) ; $i++) : ?>
								
								<tr class="text-center">
									<td><?= $no++; ?></td>
									<td class="text-justify">Januari <?= $_SESSION['tahunLR_bulan'][$i]; ?></td>
									<td><?= $_SESSION['dataLR_bulan'][$i]['Januari']['data_bulan'];  ?></td>
									<td><?= $_SESSION['prob_LR_Januari'][$i]; ?></td>
									<td><?= $_SESSION['kumu_Januari_LR'][$i]; ?></td>				
								</tr>
								
							<?php endfor; ?>	
							<tr class="text-center">
								<th colspan="2">Total</th>
								<td><?= $_SESSION['jumlahFrekuensiLR_Januari']; ?></td>
								<td><?= $_SESSION['jumlah_prob_Januari_LR'] ?></td>
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
								<th>Probabilitas</th>
								<th>Kumulatif</th>
							</tr>
						</thead>
						<tbody>
							<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLR_bulan']) ; $i++) : ?>
							<tr class="text-center">
								<td><?= $no++; ?></td>
								<td class="text-justify">Februari  <?= $_SESSION['tahunLR_bulan'][$i]; ?></td>
								<td><?= $_SESSION['dataLR_bulan'][$i]['Februari']['data_bulan'];  ?></td>	
								<td><?= $_SESSION['prob_LR_Februari'][$i]; ?></td>	
								<td><?= $_SESSION['kumu_Februari_LR'][$i]; ?></td>
							</tr>
						<?php endfor; ?>	
						<tr class="text-center">
							<th  colspan="2">Total</th>
							<td><?= $_SESSION['jumlahFrekuensiLR_Februari']; ?></td>
							<td><?= $_SESSION['jumlah_prob_Februari_LR'] ?></td>
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
							<th>Probabilitas</th>
							<th>Kumulatif</th>
						</tr>
					</thead>
					<tbody>
						<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLR_bulan']) ; $i++) : ?>
						<tr class="text-center">
							<td><?= $no++; ?></td>
							<td class="text-justify">Maret  <?= $_SESSION['tahunLR_bulan'][$i]; ?></td>
							<td><?= $_SESSION['dataLR_bulan'][$i]['Maret']['data_bulan'];  ?></td>
							<td><?= $_SESSION['prob_LR_Maret'][$i]; ?></td>	
							<td><?= $_SESSION['kumu_Maret_LR'][$i]; ?></td>		
						</tr>
					<?php endfor; ?>	
					<tr class="text-center">
						<th  colspan="2">Total</th>
						<td><?= $_SESSION['jumlahFrekuensiLR_Maret']; ?></td>
						<td><?= $_SESSION['jumlah_prob_Maret_LR'] ?></td>
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
						<th>Probabilitas</th>
						<th>Kumulatif</th>
					</tr>
				</thead>
				<tbody>
					<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLR_bulan']) ; $i++) : ?>
					<tr class="text-center">
						<td><?= $no++; ?></td>
						<td class="text-justify">April  <?= $_SESSION['tahunLR_bulan'][$i]; ?></td>
						<td><?= $_SESSION['dataLR_bulan'][$i]['April']['data_bulan'];  ?></td>
						<td><?= $_SESSION['prob_LR_April'][$i];  ?></td>	
						<td><?= $_SESSION['kumu_April_LR'][$i]; ?></td>	
					</tr>
				<?php endfor; ?>	
				<tr class="text-center">
					<th  colspan="2">Total</th>
					<td><?= $_SESSION['jumlahFrekuensiLR_April']; ?></td>
					<td><?= $_SESSION['jumlah_prob_April_LR'] ?></td>
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
					<th>Probabilitas</th>
					<th>Kumulatif</th>
				</tr>
			</thead>
			<tbody>
				<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLR_bulan']) ; $i++) : ?>
				<tr class="text-center">
					<td><?= $no++; ?></td>
					<td class="text-justify">Mei  <?= $_SESSION['tahunLR_bulan'][$i]; ?></td>
					<td><?= $_SESSION['dataLR_bulan'][$i]['Mei']['data_bulan'];  ?></td>
					<td><?= $_SESSION['prob_LR_Mei'][$i];  ?></td>
					<td><?= $_SESSION['kumu_Mei_LR'][$i]; ?></td>						
				</tr>
			<?php endfor; ?>	
			<tr class="text-center">
				<th  colspan="2">Total</th>
				<td><?= $_SESSION['jumlahFrekuensiLR_Mei']; ?></td>
				<td><?= $_SESSION['jumlah_prob_Mei_LR'] ?></td>
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
				<th>Probabilitas</th>
				<th>Kumulatif</th>
			</tr>
		</thead>
		<tbody>
			<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLR_bulan']) ; $i++) : ?>
			<tr class="text-center">
				<td><?= $no++; ?></td>
				<td class="text-justify">Juni  <?= $_SESSION['tahunLR_bulan'][$i]; ?></td>
				<td><?= $_SESSION['dataLR_bulan'][$i]['Juni']['data_bulan'];  ?></td>
				<td><?= $_SESSION['prob_LR_Juni'][$i] ?></td>
				<td><?= $_SESSION['kumu_Juni_LR'][$i]; ?></td>		
			</tr>
		<?php endfor; ?>	
		<tr class="text-center">
			<th  colspan="2">Total</th>
			<td><?= $_SESSION['jumlahFrekuensiLR_Juni']; ?></td>
			<td><?= $_SESSION['jumlah_prob_Juni_LR'] ?></td>
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
			<th>Probabilitas</th>
			<th>Kumulatif</th>
		</tr>
	</thead>
	<tbody>
		<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLR_bulan']) ; $i++) : ?>
		<tr class="text-center">
			<td><?= $no++; ?></td>
			<td class="text-justify">Juli  <?= $_SESSION['tahunLR_bulan'][$i]; ?></td>
			<td><?= $_SESSION['dataLR_bulan'][$i]['Juli']['data_bulan'];  ?></td>	
			<td><?= $_SESSION['prob_LR_Juli'][$i]?></td>
			<td><?= $_SESSION['kumu_Juli_LR'][$i]; ?></td>
		</tr>
	<?php endfor; ?>	
	<tr class="text-center">
		<th  colspan="2">Total</th>
		<td><?= $_SESSION['jumlahFrekuensiLR_Juli']; ?></td>
		<td><?= $_SESSION['jumlah_prob_Juli_LR'] ?></td>
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
			<th>Probabilitas</th>
			<th>Kumulatif</th>
		</tr>
	</thead>
	<tbody>
		<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLR_bulan']) ; $i++) : ?>
		<tr class="text-center">
			<td><?= $no++; ?></td>
			<td class="text-justify">Agustus  <?= $_SESSION['tahunLR_bulan'][$i]; ?></td>
			<td><?= $_SESSION['dataLR_bulan'][$i]['Agustus']['data_bulan'];  ?></td>
			<td><?= $_SESSION['prob_LR_Agustus'][$i]; ?></td>
			<td><?= $_SESSION['kumu_Agustus_LR'][$i]; ?></td>			
		</tr>
	<?php endfor; ?>	
	<tr class="text-center">
		<th  colspan="2">Total</th>
		<td><?= $_SESSION['jumlahFrekuensiLR_Agustus']; ?></td>
		<td><?= $_SESSION['jumlah_prob_Agustus_LR'] ?></td>
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
			<th>Probabilitas</th>
			<th>Kumulatif</th>
		</tr>
	</thead>
	<tbody>
		<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLR_bulan']) ; $i++) : ?>
		<tr class="text-center">
			<td><?= $no++; ?></td>
			<td class="text-justify">September  <?= $_SESSION['tahunLR_bulan'][$i]; ?></td>
			<td><?= $_SESSION['dataLR_bulan'][$i]['September']['data_bulan'];  ?></td>		
			<td><?= $_SESSION['prob_LR_September'][$i]; ?></td>
			<td><?= $_SESSION['kumu_September_LR'][$i]; ?></td>
		</tr>
	<?php endfor; ?>	
	<tr class="text-center">
		<th  colspan="2">Total</th>
		<td><?= $_SESSION['jumlahFrekuensiLR_September']; ?></td>
		<td><?= $_SESSION['jumlah_prob_September_LR'] ?></td>
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
			<th>Probabilitas</th>
			<th>Kumulatif</th>
		</tr>
	</thead>
	<tbody>
		<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLR_bulan']) ; $i++) : ?>
		<tr class="text-center">
			<td><?= $no++; ?></td>
			<td class="text-justify">Oktober  <?= $_SESSION['tahunLR_bulan'][$i]; ?></td>
			<td><?= $_SESSION['dataLR_bulan'][$i]['Oktober']['data_bulan'];  ?></td>
			<td><?= $_SESSION['prob_LR_Oktober'][$i]; ?></td>
			<td><?= $_SESSION['kumu_Oktober_LR'][$i]; ?></td>		
		</tr>
	<?php endfor; ?>	
	<tr class="text-center">
		<th  colspan="2">Total</th>
		<td><?= $_SESSION['jumlahFrekuensiLR_Oktober']; ?></td>
		<td><?= $_SESSION['jumlah_prob_Oktober_LR'] ?></td>
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
			<th>Probabilitas</th>
			<th>Kumulatif</th>
		</tr>
	</thead>
	<tbody>
		<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLR_bulan']) ; $i++) : ?>
		<tr class="text-center">
			<td><?= $no++; ?></td>
			<td class="text-justify">November  <?= $_SESSION['tahunLR_bulan'][$i]; ?></td>
			<td><?= $_SESSION['dataLR_bulan'][$i]['November']['data_bulan'];  ?></td>
			<td><?= $_SESSION['prob_LR_November'][$i]; ?></td>
			<td><?= $_SESSION['kumu_November_LR'][$i]; ?></td>		
		</tr>
	<?php endfor; ?>	
	<tr class="text-center">
		<th  colspan="2">Total</th>
		<td><?= $_SESSION['jumlahFrekuensiLR_November']; ?></td>
		<td><?= $_SESSION['jumlah_prob_November_LR'] ?></td>
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
			<th>Probabilitas</th>
			<th>Kumulatif</th>
		</tr>
	</thead>
	<tbody>
		<?php $no = 1; for ($i=0; $i < count($_SESSION['dataLR_bulan']) ; $i++) : ?>
		<tr class="text-center">
			<td><?= $no++; ?></td>
			<td class="text-justify">Desember  <?= $_SESSION['tahunLR_bulan'][$i]; ?></td>
			<td><?= $_SESSION['dataLR_bulan'][$i]['Desember']['data_bulan'];  ?></td>
			<td><?= $_SESSION['prob_LR_Desember'][$i]; ?></td>
			<td><?= $_SESSION['kumu_Desember_LR'][$i]; ?></td>		
		</tr>
	<?php endfor; ?>	
	<tr class="text-center">
		<th  colspan="2">Total</th>
		<td><?= $_SESSION['jumlahFrekuensiLR_Desember']; ?></td>
		<td><?= $_SESSION['jumlah_prob_Desember_LR'] ?></td>
	</tr>
</tbody>
</table>
</div>		
</div>
</div>
</div>
</div>
</div>
