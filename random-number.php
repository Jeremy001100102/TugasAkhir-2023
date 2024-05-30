<?php 	

require "functions-angka-acak.php";
$dataKecelakaan = dataKecelakaanAcak();
$dataKecelakaanLengkap = dataKecelakaanLengkap();


if (isset($_POST['simpanImport'])) {

	$file_data = $_FILES['importExcel']['tmp_name'];

	if( importDataAcak($file_data) > 0){

    // $_SESSION['alert'] = "on";
    // $_SESSION['pesan'] = "Data Berhasil Disimpan!";
		echo " 
		<script>
		document.location.href = 'random-number.php';
		</script>   
		";


	}else{

   // $_SESSION['alert'] = "off";
   // $_SESSION['pesan'] = "Data Gagal Disimpan!";
		echo "
		<script>
		alert('Data gagal ditambahkan');
		document.location.href = 'random-number.php';
		</script>   
		";


	}


}


if (isset($_POST['kalkulasi'])) {

	$data_id = $_POST['dataKecelakaan_id'];
	$data_akurasi = $_POST['akurasi'];
	$dataDiambil = [];
	$dataReal= [];
	$ambil_data_tahun = [];

	foreach ($dataKecelakaan as $key) {
		for ($i=0; $i < count($data_id); $i++) { 
			
			if ($key['id'] == $data_id[$i]) {
			//ambil data real
				$id_real = $key['id']; 
				$data_real = mysqli_query($conn, "SELECT data_bulan FROM data_detail_kecelakaan WHERE id_data_kecelakaan =  $id_real ");


				while ($data_masuk = mysqli_fetch_assoc($data_real)) {
					$dataReal[$i][] = $data_masuk['data_bulan']; 
				}

			//ambil tahun
				$ambil_tahun = $key['tahun'];
				$ambil_data_tahun[] = $key['tahun'];

			//ambil kategori
				$ambil_kategori = $key['id_kategori'];

			//ambil data masa lalu berdasarkan tahun dan kategori
				$data = mysqli_query($conn, "SELECT * FROM data_kecelakaan WHERE tahun < $ambil_tahun AND id_kategori = $ambil_kategori");

				while ($ambil_data = mysqli_fetch_assoc($data)) {
					$dataDiambil[$i][] = $ambil_data; 
				}
			}
		}
		

	}


	//jumlah tahun yang diprediksi
	$ambil_data_frekuensi = [];
	$ambil_data_bulan = [];
	for ($i=0; $i <count($dataDiambil) ; $i++) {
		
		//jumlah data masa lalu dari tahun yang diprediksi 
		for ($j=0; $j < count($dataDiambil[$i]); $j++) { 

			for ($k=0; $k < count($bulan); $k++) { 

				$id = $dataDiambil[$i][$j]['id'];
				//ambil id unik
				$ambil_id_unik = mysqli_query($conn, "SELECT id FROM data_detail_kecelakaan WHERE id_data_kecelakaan = $id");
				

				$id_unik = [];
				while($datab = mysqli_fetch_assoc($ambil_id_unik)){
					$id_unik[] = $datab['id'];
				}

				$data = mysqli_query($conn, "SELECT data_bulan FROM data_detail_kecelakaan WHERE id = $id_unik[$k] AND id_data_kecelakaan = $id");

				$data_diambil_bulan = mysqli_fetch_assoc($data);

					// $data_diambil[$i][$j][$bulan[$k]] = $data_diambil_bulan['data_bulan'];
					// $data_diambil[$i][$j]['tahun'] = $dataDiambil[$i][$j]['tahun'];
				$data_diambil[$i][$j][$bulan[$k]] = [
					'data_bulan' => $data_diambil_bulan['data_bulan'],
					'tahun' => $dataDiambil[$i][$j]['tahun']
				];

				
			}
		}
	}
	
	
	//hitung jumlah frekuensi
	$total_frekuensi = [];
	for ($i=0; $i < count($data_diambil); $i++) { 
		for ($j=0; $j <count($bulan); $j++) {
			$data = 0; 
			for ($k=0; $k <count($data_diambil[$i]); $k++) { 
				$data += $data_diambil[$i][$k][$bulan[$j]]['data_bulan'];
			}
			$total_frekuensi[$i][$j] = $data;
		}
	}

	
	//hitung probabilitas
	// rumus : p = f /n  
	// 		   p = Probabilitas
	// 		   f = Jumlah frekuensi
	// 		   n = jumlah total frekuensi
	$probabilitas = [];
	$total_probabilitas = [];
	for ($i=0; $i < count($data_diambil); $i++) { 
		for ($j=0; $j <count($bulan); $j++) {
			$data = 0;
			for ($k=0; $k <count($data_diambil[$i]); $k++) { 
				$probabilitas[$i][$k][$bulan[$j]] = bcdiv($data_diambil[$i][$k][$bulan[$j]]['data_bulan'], $total_frekuensi[$i][$j], 3);
				$data += $probabilitas[$i][$k][$bulan[$j]];
			}
			$total_probabilitas[$i][$j] = number_format($data,3);

		}
	}
	

	//hitung kumulatif
	// rumus : Kt(x) = Pt(x)+Pt-1(x)
	$kumulatif = [];
	for ($i=0; $i < count($data_diambil) ; $i++) { 
		for ($j=0; $j < count($bulan) ; $j++) { 
			for ($k=0; $k <count($data_diambil[$i]); $k++) { 
				if($k == 0){
					$kumulatif[$i][$k][$bulan[$j]]= $probabilitas[$i][$k][$bulan[$j]];
				}else{
					$kumulatif[$i][$k][$bulan[$j]] = number_format($kumulatif[$i][$k-1][$bulan[$j]] + $probabilitas[$i][$k][$bulan[$j]],3);
				}
			}
		}
	}

	//interval angka acak
	//1. Nilai batas awal (min) untuk variable/preiode pertama dimulai dengan nilai 0
	//2. Nilai batas akhir (max) ditentukan dengan cara mengalikan nilai probabilitas kumulatif masing-masing variable/periode dengan angka 100 dan dibulatkan (bukan decimal).
	//3. Nilai batas awal untuk variabel kedua dan seterusnya diperoleh dari nilai batas akhir variable/periode sebelumnya kemudian ditambahkan dengan angka 1
	$interval = [];
	$nilai_Min = [];
	$nilai_Max = [];
	for ($i=0; $i < count($data_diambil); $i++) { 
		for ($j=0; $j < count($bulan); $j++) { 
			for ($k=0; $k < count($data_diambil[$i]); $k++) {
				$max = 0;
				$min = 0;
				if ($k == 0) {
					$min = 0;
					$max = $kumulatif[$i][$k][$bulan[$j]] * 1000;
				} else if ($probabilitas[$i][$k][$bulan[$j]] == 0.000) {
					$min = $kumulatif[$i][$k - 1][$bulan[$j]] * 1000;
					$max = $min;
				} else {
					$min = $kumulatif[$i][$k - 1][$bulan[$j]] * 1000 + 1;
					$max = $kumulatif[$i][$k][$bulan[$j]] * 1000;
				}
				$interval[$i][$k][$bulan[$j]] = "{$min}-{$max}";
				$nilai_Min[$i][$k][$bulan[$j]] = (int) $min;
				$nilai_Max[$i][$k][$bulan[$j]] = (int) $max;

			}
		}
	}

//Random Angka Acak
	 //rumus zi+1 = (a.zi + c) mod m
	 //a = konstanta pengali (a < m)
	 //c = konstanta pergeseran (c < m)
	 //m = konstanta modulus (m > 0)
	 //zi = bilangan awal (bilangan bulat > 0, Z0 < m)

	$a = 866;
	$c = 544;
	$m = 999;
	$zi = 32;	
	$jumlahPercobaan = 0;
	$kondisi = true;

	while ($kondisi) {
		ulang :
		$tempA = rand(1, $m-1);
		$tempC = rand(1, $m-1);
		$tempZi = rand(1, 100); 
		if ($tempA != $tempC && $tempA != $tempZi && $tempC != $tempZi) {
			$a = $tempA; 
			$c = $tempC;
			$zi = $tempZi;
		} else{
			goto ulang;
		}

		
		//Inisialisasi Angka Acak
		$temp_zi = 0;
		$p_zi= $zi;
		$p_a = $a;
		$p_c = $c;
		$angka_Acak = [];

		//angka acak
		for ($j=0; $j < count($bulan); $j++) {
			$temp_zi = ($p_a * $p_zi + $p_c) % $m;
			$angka_Acak[$j]= $temp_zi;
			$p_zi = $temp_zi;	

		}

		//hitung jumlah pengulangan angka acak
		for ($r=0; $r < count($angka_Acak); $r++) {
			$hitung = 0;
			for ($u=0; $u < count($angka_Acak); $u++) { 
				if($angka_Acak[$r] == $angka_Acak[$u]){
					$hitung++;
				}
			}

			if ($hitung > 2) {
				goto ulang;
			}
		}


	//Hasil simulasi
	//jika Batas Awal Interval >= Angka Acak ≤ Batas Akhir Interval selainnya 	
	//Hasil simulasi = interval frekeunsi
		$hasil_S = [];
		for ($i=0; $i < count($data_diambil); $i++) {
			for ($j=0; $j < count($bulan); $j++) {
				$temp_hasil = 0;
				for ($k=0; $k <count($data_diambil[$i]); $k++) { 				

					if($angka_Acak[$j] >= $nilai_Min[$i][$k][$bulan[$j]] && $angka_Acak[$j] <= $nilai_Max[$i][$k][$bulan[$j]]){

						$temp_hasil = (int) $data_diambil[$i][$k][$bulan[$j]]['data_bulan'];
					}
				}
				$hasil_S[$i][$j] = $temp_hasil;
			}	 		
		}


	 //akurasi
		$akurasi = [];
		$jumlah_akurasi = [];
		for ($i=0; $i <count($data_diambil); $i++) {
			$temp_akurasi = 0; 
			for ($j=0; $j <count($bulan); $j++) { 

				$akurasi[$i][$j] = $hasil_S[$i][$j] <= $dataReal[$i][$j] ? round($hasil_S[$i][$j] / $dataReal[$i][$j] *100) : round($dataReal[$i][$j] / $hasil_S[$i][$j] *100);  
				$temp_akurasi += $akurasi[$i][$j]; 
			}


			$jumlah_akurasi[$i] = $temp_akurasi;
		}


	 //Tingkat Akurasi
		


	 //Rata-Rata Akurasi hasil
		$rata2 = [];
		$hitung = 0;
		for ($i=0; $i <count($jumlah_akurasi); $i++) { 
			$rata2[$i] = round($jumlah_akurasi[$i] / count($bulan));

			if($rata2[$i] >= $data_akurasi){ 
				$hitung++;
				
				if ($hitung == count($jumlah_akurasi)) {

					$kondisi = false;

				} 	

			}
		}



		$jumlahPercobaan++;

	}


// 	var_dump($nilai_Min);
// var_dump($nilai_Max);	
// // var_dump($rata2);
// var_dump($angka_Acak);
// var_dump($hasil_S);
// var_dump($akurasi);
// var_dump($data_diambil);
	// var_dump($rata2);
}






?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Generate Random Number</title>
	<Style>
		h1{
			text-align: center;
		}

		#dataKecelakaan table{
			border: 1px solid black;
			border-collapse: collapse;
			text-align: center;	
		}
		#dataKecelakaan legend{
			position: sticky; /* Membuat legend sticky */
			top: 0; /* Menempelkan legend di bagian atas container */
			/*background-color: ; /* Warna latar belakang legend */
			background-color: transparent; /* Background transparan dengan efek mozaik*/ 
			backdrop-filter: blur(3px); /* Efek blur pada background legend */
			padding: 5px; /* Jarak antara teks legend dengan border */
			text-align: center;
		}

		#dataKecelakaan {
			max-height: 50vh; /* Tinggi 50% dari viewport */
			overflow-y: auto; /* Menambahkan scrollbar vertikal jika konten melebihi tinggi */
			float: left;
			margin-top: 10px;
			margin-bottom: 10px;
		}

		#simulasi{
			max-height: 80vh; /* Tinggi 50% dari viewport */
			overflow-y: auto; /* Menambahkan scrollbar vertikal jika konten melebihi tinggi */
			float: left;
			
		}

		#simulasi table{
			border: 1px solid black;
			border-collapse: collapse;
			text-align: center;	
		}

		#importData{
			float: left;
		}

		#hasilSimulasi table{
			border: 1px solid black;
			border-collapse: collapse;
			text-align: center;	
		}

		#hasilSimulasi{
			max-height: 80vh; /* Tinggi 50% dari viewport */
			overflow-y: auto; /* Menambahkan scrollbar vertikal jika konten melebihi tinggi */
			float: left;
		}

		#parameter table{
			border: 1px solid black;
			border-collapse: collapse;
			text-align: center;	

		}



	</Style>
</head>
<body>

	<h1>Generate Random Number</h1>

	<div id="importData">	
		<fieldset>
			<legend>Import Data</legend>
			<table cellpadding="0" cellspacing="0">
				<form method="POST"enctype="multipart/form-data" role="form">
					<tr>	
						<td>Input data : </td>
						<td>
							<input type="file" name="importExcel" id="importExcel" required />
						</td>
					</tr>
					<tr>
						<td></td>	
						<td>	<button type="submit" id="simpan" name="simpanImport">Simpan</button></td>
					</tr>
				</form>
			</table>
		</fieldset>

		<div id="dataKecelakaan">	
			<fieldset>	
				<legend>Data Kecelakaan</legend>
				<table border="1" cellpadding="4">	
					<thead>	
						<th>Kategori</th>
						<th>Tahun</th>
						<th>Pilih</th>
					</thead>
					<tbody>
						<form action="" method="POST">
							<?php 	for($i = 0; $i < count($dataKecelakaan); $i++) : ?>
								<tr>
									<td><?= $dataKecelakaan[$i]['nama']; ?></td>
									<td><?= $dataKecelakaan[$i]['tahun'];?></td>
									<td><input type="checkbox" name="dataKecelakaan_id[]" value="<?= $dataKecelakaan[$i]['id'];?>"></td>		
								</tr>	
							<?php 	endfor; ?>
							<tr style="border: none;">	
								<td>Akurasi : </td>
								<td colspan="2">
									<input type="number" max="100" min="50" value="70" name="akurasi">
								</td>
							</tr>	
							<tr>
								<td colspan="3"><button name="kalkulasi">Kalkulasi</button></td>
							</tr>
						</form>
					</tbody>
				</table>
			</fieldset>
		</div>


		<div id="parameter">
			<fieldset style="display: inline;">
				<legend>Parameter | Jumlah Percobaan : <?= isset($_POST['kalkulasi']) ? $jumlahPercobaan : 0; ?></legend>
				<?php if(isset($_POST['kalkulasi'])) : ?>
					<table border="1" cellpadding="5" cellspacing="5">
						<caption><i>Mixed Congruent Method</i></caption>
						<thead>
							<th>a</th>
							<th>c</th>
							<th>m</th>
							<th>Zi</th>
							<th>Akurasi</th>
							<th>Tahun</th>
							<th>Aksi</th>

						</thead>
						<tbody>
							<?php for ($i=0; $i <count($rata2) ; $i++) : ?>
								<tr>
									<td><?= $a; ?> </td>
									<td><?= $c; ?></td>
									<td><?= $m; ?></td>
									<td><?= $zi; ?></td>
									<td><?= "{$rata2[$i]}%"; ?></td>
									<td><?= $ambil_data_tahun[$i]; ?></td>
									<td><button>Copy</button></td>
								</tr>
							<?php endfor ?>
						</tbody>
					</table>
				<?php endif ?>
			</fieldset>
		</div>
	</div>

	

	<div id="simulasi">
		<fieldset style="display:inline;">
			<legend>Simulasi</legend>
			<?php 	if(isset($_POST['kalkulasi'])) : ?>
				<?php for ($i=0; $i <count($dataDiambil) ; $i++) : ?>
					<?php 
					for ($k = 0; $k < count($bulan); $k++) :
					?><table border="1" cellpadding="5" cellspacing="5">
						<thead>
							<th>No</th>
							<th>Bulan</th>
							<th>Frekuensi</th>
							<th>Probabilitas</th>
							<th>Kumulatif</th>
							<th>Interval</th>
						</thead>
						<tbody>
							<?php
							$no = 0; 
							for ($j = 0; $j < count($dataDiambil[$i]); $j++) : 
								if (isset($data_diambil[$i][$j][$bulan[$k]])): ?>
									<tr>
										<td><?= ++$no; ?></td>
										<td><?= $bulan[$k] ?> <?= $data_diambil[$i][$j][$bulan[$k]]['tahun'] ?? ''; ?></td>
										<td><?= $data_diambil[$i][$j][$bulan[$k]]['data_bulan'] ?? ''; ?></td>
										<td><?= $probabilitas[$i][$j][$bulan[$k]]; ?></td>
										<td><?= $kumulatif[$i][$j][$bulan[$k]]; ?></td>
										<td><?= $interval[$i][$j][$bulan[$k]]; ?></td>
									</tr>
								<?php endif; 
							endfor;?> 
							<tr>
								<td colspan="2">Total</td>
								<td><?= $total_frekuensi[$i][$k] ?></td>
								<td><?= $total_probabilitas[$i][$k] ?></td>
							</tr>
						</tbody>
					</tbody>
				</table>
				<br>
			<?php endfor; ?>
			<br>
			<hr>
		<?php endfor ?>
	<?php 	endif ?>
</fieldset>
</div>

<div id="hasilSimulasi">	
	<fieldset style="display: inline;">	
		<legend>Hasil Simulasi</legend>
		<?php if(isset($_POST['kalkulasi'])) : ?>
			<?php 	for ($i=0; $i < count($data_diambil); $i++) : ?>
				<table border="1" cellpadding="5" cellspacing="5">	
					<caption>Tahun Prediksi <?= $ambil_data_tahun[$i]; ?></caption>
					<thead>
						<th>No</th>
						<th>Angka Acak</th>
						<th>Hasil Simulasi</th>		
						<th>Data Real</th>	
						<th>Akurasi</th>		
					</thead>
					<tbody>	
						<?php $no =0;	for($j = 0; $j < count($bulan); $j++) : ?>
							<tr>
								<td><?= ++$no; ?></td>
								<td><?= $angka_Acak[$j]; ?></td>
								<td><?= $hasil_S[$i][$j]; ?></td>	
								<td><?= $dataReal[$i][$j];?></td>	
								<td><?= "{$akurasi[$i][$j]}%"; ?></td>
							</tr>
						<?php 	endfor; ?>
					</tbody>
				</table>
				<br>	
				<hr>	
			<?php endfor; ?> 
		<?php 	endif; ?>
	</fieldset>
</div>



</body>
</html>


<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>


<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>  







	$("#importExcel").change(function() {
		var file = this.files[0];
		const fileInput = document.querySelector('input[type="file"]');
		if (file.size > 512000) {
    // File terlalu besar
			fileInput.setCustomValidity('File Excel terlalu besar. Maksimum ukuran file adalah 500 KB.');
			fileInput.classList.add('is-invalid');
    return; // Hentikan proses validasi jika file terlalu besar
}

let xls = "application/vnd.ms-excel";
let xlsx = "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet";


if (!file.type.match(xls) && !file.type.match(xlsx)) {
	fileInput.setCustomValidity('Harap pilih file excel (xls/xlsx)');
	fileInput.classList.add('is-invalid');
} else {
	fileInput.classList.remove('is-invalid');
	$(this).addClass("is-valid");
	fileInput.removeAttribute('required');
    fileInput.setCustomValidity(''); // Hapus pesan kesalahan sebelumnya
}
});

	$("#simpan").click(function() {  
		if (fileInput.value.length === 0) {
    // File kosong, tampilkan pesan kesalahan
			fileInput.setAttribute("required");
			fileInput.setCustomValidity('Harap pilih file excel (xls/xlsx)');
    return false; // Cegah form disubmit
}
});


</script>
