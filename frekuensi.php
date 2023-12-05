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
								</tr>
							</thead>
							<tbody>
								<?php $jumlahFrekuensiMD = 0; $no = 1; for ($i=0; $i < count($bulan) ; $i++) : ?>
								<tr>
									<th class="text-center" <?= $no >= 4 && $no <= 10 ?"style='border-left-color:red' " : "style='border-left-color:blue'"?>><?= $no++; ?></th>
									<td><?=  $bulan[$i]; ?></td>
									<td><?= $_SESSION['hitung_convertMentahMD'][$i]; ?></td>
								</tr>
								<?php $jumlahFrekuensiMD += $_SESSION['hitung_convertMentahMD'][$i]; ?>
							<?php endfor ?>
							<?php $_SESSION['jumlahFrekuensiMD'] = $jumlahFrekuensiMD;?>
							<tr>
								<th class="text-center" colspan="2">Total</th>
								<td><?= $jumlahFrekuensiMD; ?></td>
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
							</tr>
						</thead>
						<tbody>
							<?php $jumlahFrekuensiLB = 0; $no = 1; for ($i=0; $i < count($bulan) ; $i++) : ?>
							<tr>
								<th class="text-center" <?= $no >= 4 && $no <= 10 ?"style='border-left-color:red' " : "style='border-left-color:blue'"?>><?= $no++; ?></th>
								<td><?=  $bulan[$i]; ?></td>
								<td><?= $_SESSION['hitung_convertMentahLB'][$i]; ?></td>
							</tr>
							<?php $jumlahFrekuensiLB += $_SESSION['hitung_convertMentahLB'][$i]; ?>
						<?php endfor ?>
						<?php $_SESSION['jumlahFrekuensiLB'] = $jumlahFrekuensiLB;?>
						<tr>
							<th class="text-center" colspan="2">Total</th>
							<td><?= $jumlahFrekuensiLB; ?></td>
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
						</tr>
					</thead>
					<tbody>
						<?php $jumlahFrekuensiLR = 0; $no = 1; for ($i=0; $i < count($bulan) ; $i++) : ?>
						<tr>
							<th class="text-center" <?= $no >= 4 && $no <= 10 ?"style='border-left-color:red' " : "style='border-left-color:blue'"?>><?= $no++; ?></th>
							<td><?=  $bulan[$i]; ?></td>
							<td><?= $_SESSION['hitung_convertMentahLR'][$i]; ?></td>
						</tr>
						<?php $jumlahFrekuensiLR += $_SESSION['hitung_convertMentahLR'][$i]; ?>
					<?php endfor ?>
					<?php $_SESSION['jumlahFrekuensiLR'] = $jumlahFrekuensiLR;?>
					<tr>
						<th class="text-center" colspan="2">Total</th>
						<td><?= $jumlahFrekuensiLR; ?></td>
					</tr>
				</tbody>
			</table>
			</div>		
		</div>
	</div>
</div>
</div>
</div>
