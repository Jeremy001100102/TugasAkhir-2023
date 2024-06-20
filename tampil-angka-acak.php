<?php 	

//Meninggal Dunia
if (isset($_POST['generate_MD']) || isset($_SESSION['aktif_acak_MD']) === true) {
	$_SESSION['aktif_acak_MD'] = true;
	$_SESSION['a_MD'] = isset($_POST['a_MD']) ? $_POST['a_MD'] : ($_SESSION['a_MD']);
	$_SESSION['c_MD'] = isset($_POST['c_MD']) ? $_POST['c_MD'] : ($_SESSION['c_MD']);
	$_SESSION['m_MD'] = isset($_POST['m_MD']) ? $_POST['m_MD'] : ($_SESSION['m_MD']);
	$_SESSION['zi_MD'] = isset($_POST['zi_MD']) ? $_POST['zi_MD'] : ($_SESSION['zi_MD']);
	

	$_SESSION['angkaAcakMD'] = angkaAcak_MD($_SESSION['a_MD'], $_SESSION['c_MD'], $_SESSION['m_MD'], $_SESSION['zi_MD']);

	// echo "<script> window.location.href = 'kalkulasi.php?acak=jeremy#collapseOne'; </script> ";
	// die();
}else{
	$_SESSION['angkaAcakMD'] = angkaAcak_MD();
}

//Luka Berat
if (isset($_POST['generate_LB']) || isset($_SESSION['aktif_acak_LB']) === true) {
	$_SESSION['aktif_acak_LB'] = true;

	$_SESSION['a_LB'] = isset($_POST['a_LB']) ? $_POST['a_LB'] : ($_SESSION['a_LB']);
	$_SESSION['c_LB'] = isset($_POST['c_LB']) ? $_POST['c_LB'] : ($_SESSION['c_LB']);
	$_SESSION['m_LB'] = isset($_POST['m_LB']) ? $_POST['m_LB'] : ($_SESSION['m_LB']);
	$_SESSION['zi_LB'] = isset($_POST['zi_LB']) ? $_POST['zi_LB'] : ($_SESSION['zi_LB']);
	

	$_SESSION['angkaAcakLB'] = angkaAcak_LB($_SESSION['a_LB'], $_SESSION['c_LB'], $_SESSION['m_LB'], $_SESSION['zi_LB']);
	// echo "<script> window.location.href = 'kalkulasi.php?acak=jeremy#collapseTwo'; </script> "; 
}else{
	$_SESSION['angkaAcakLB'] = angkaAcak_LB();
}

//Luka Ringan
if (isset($_POST['generate_LR']) || isset($_SESSION['aktif_acak_LR']) === true) {
	$_SESSION['aktif_acak_LR'] = true;

	$_SESSION['a_LR'] = isset($_POST['a_LR']) ? $_POST['a_LR'] : ($_SESSION['a_LR']);
	$_SESSION['c_LR'] = isset($_POST['c_LR']) ? $_POST['c_LR'] : ($_SESSION['c_LR']);
	$_SESSION['m_LR'] = isset($_POST['m_LR']) ? $_POST['m_LR'] : ($_SESSION['m_LR']);
	$_SESSION['zi_LR'] = isset($_POST['zi_LR']) ? $_POST['zi_LR'] : ($_SESSION['zi_LR']);
	

	$_SESSION['angkaAcakLR'] = angkaAcak_LR($_SESSION['a_LR'], $_SESSION['c_LR'], $_SESSION['m_LR'], $_SESSION['zi_LR']);

 // echo "<script> window.location.href = 'kalkulasi.php?acak=jeremy#collapseThree'; </script> "; 
	//("Location: kalkulasi.php?acak=jeremy#collapseThree");
}else{
	$_SESSION['angkaAcakLR'] = angkaAcak_LR();
}


?>



<!-- Meninggal Dunia -->
<div class="modal fade" id="acak-dataMD" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
	<div class="modal-content">
		<div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel">Angka Acak</h5>
			<button class="close" type="button" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">×</span>
			</button>
		</div>
		<div class="modal-body">
			<h5 class="text-center mb-4">Meninggal Dunia</h5>
			<form action="" method="POST">
				<div class="row mb-3">
					<div class="col-3">
						<div class="row">
							<div class="col-3">	 	
								<label for="a">a</label>
							</div>
							<div class="col-9">	
								<input type="number" name="a_MD" id="a" class="form-control ac" placeholder="<?= a_MD ?>" required oninvalid="this.setCustomValidity('Mohon Diisi!')"
								oninput="this.setCustomValidity('')">
							</div>
						</div>
					</div>
					<div class="col-3">	 	
						<div class="row">
							<div class="col-3">	 	
								<label for="c">c</label>
							</div>
							<div class="col-9">	
								<input type="number" name="c_MD" id="c" class="form-control ac" placeholder="<?= c_MD ?>" required oninvalid="this.setCustomValidity('Mohon Diisi!')"
								oninput="this.setCustomValidity('')">
							</div>
						</div>
					</div>
					<div class="col-3">	 	
						<div class="row">
							<div class="col-3">	 	
								<label for="m">m</label>
							</div>
							<div class="col-9">	
								<input type="number" name="m_MD" id="m" class="form-control ac" placeholder="<?= m_MD ?>" required oninvalid="this.setCustomValidity('Mohon Diisi!')"
								oninput="this.setCustomValidity('')">
							</div>
						</div>
					</div>
					<div class="col-3">	 	
						<div class="row">
							<div class="col-3">	 	
								<label for="zi">zi</label>
							</div>
							<div class="col-9">	
								<input type="number" name="zi_MD" id="zi" class="form-control ac" placeholder="<?= zi_MD ?>" required oninvalid="this.setCustomValidity('Mohon Diisi!')"
								oninput="this.setCustomValidity('')">
							</div>
						</div>
					</div>
				</div>


			</div>

			<div class="modal-footer">
				<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
				<button type="submit" class="btn btn-success" id="generate" name="generate_MD">Generate</button>
			</div>
		</form>
		

	</div>
</div>
</div>


<!-- Luka Berat -->
<div class="modal fade" id="acak-dataLB" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
	<div class="modal-content">
		<div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel">Angka Acak</h5>
			<button class="close" type="button" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">×</span>
			</button>
		</div>
		<div class="modal-body">
			<h5 class="text-center mb-4">Luka Berat</h5>
			<form action="" method="POST">
				<div class="row mb-3">
					<div class="col-3">
						<div class="row">
							<div class="col-3">	 	
								<label for="a">a</label>
							</div>
							<div class="col-9">	
								<input type="number" name="a_LB" id="a" class="form-control ac" placeholder="<?= a_LB ?>" required oninvalid="this.setCustomValidity('Mohon Diisi!')"
								oninput="this.setCustomValidity('')">
							</div>
						</div>
					</div>
					<div class="col-3">	 	
						<div class="row">
							<div class="col-3">	 	
								<label for="c">c</label>
							</div>
							<div class="col-9">	
								<input type="number" name="c_LB" id="c" class="form-control ac" placeholder="<?= c_LB ?>" required oninvalid="this.setCustomValidity('Mohon Diisi!')"
								oninput="this.setCustomValidity('')">
							</div>
						</div>
					</div>
					<div class="col-3">	 	
						<div class="row">
							<div class="col-3">	 	
								<label for="m">m</label>
							</div>
							<div class="col-9">	
								<input type="number" name="m_LB" id="m" class="form-control ac" placeholder="<?= m_LB ?>" required oninvalid="this.setCustomValidity('Mohon Diisi!')"
								oninput="this.setCustomValidity('')">
							</div>
						</div>
					</div>
					<div class="col-3">	 	
						<div class="row">
							<div class="col-3">	 	
								<label for="zi">zi</label>
							</div>
							<div class="col-9">	
								<input type="number" name="zi_LB" id="zi" class="form-control ac" placeholder="<?= zi_LB ?>" required oninvalid="this.setCustomValidity('Mohon Diisi!')"
								oninput="this.setCustomValidity('')">
							</div>
						</div>
					</div>
				</div>


			</div>

			<div class="modal-footer">
				<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
				<button type="submit" class="btn btn-success" id="generate" name="generate_LB">Generate</button>
			</div>
		</form>
		

	</div>
</div>
</div>

<!-- Luka Ringan -->
<div class="modal fade" id="acak-dataLR" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
	<div class="modal-content">
		<div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel">Angka Acak</h5>
			<button class="close" type="button" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">×</span>
			</button>
		</div>
		<div class="modal-body">
			<h5 class="text-center mb-4">Luka Ringan</h5>
			<form action="" method="POST">
				<div class="row mb-3">
					<div class="col-3">
						<div class="row">
							<div class="col-3">	 	
								<label for="a">a</label>
							</div>
							<div class="col-9">	
								<input type="number" name="a_LR" id="a" class="form-control ac" placeholder="<?= a_LR ?>" required oninvalid="this.setCustomValidity('Mohon Diisi!')"
								oninput="this.setCustomValidity('')">
							</div>
						</div>
					</div>
					<div class="col-3">	 	
						<div class="row">
							<div class="col-3">	 	
								<label for="c">c</label>
							</div>
							<div class="col-9">	
								<input type="number" name="c_LR" id="c" class="form-control ac" placeholder="<?= c_LR ?>" required oninvalid="this.setCustomValidity('Mohon Diisi!')"
								oninput="this.setCustomValidity('')">
							</div>
						</div>
					</div>
					<div class="col-3">	 	
						<div class="row">
							<div class="col-3">	 	
								<label for="m">m</label>
							</div>
							<div class="col-9">	
								<input type="number" name="m_LR" id="m" class="form-control ac" placeholder="<?= m_LR ?>" required oninvalid="this.setCustomValidity('Mohon Diisi!')"
								oninput="this.setCustomValidity('')">
							</div>
						</div>
					</div>
					<div class="col-3">	 	
						<div class="row">
							<div class="col-3">	 	
								<label for="zi">zi</label>
							</div>
							<div class="col-9">	
								<input type="number" name="zi_LR" id="zi" class="form-control ac" placeholder="<?= zi_LR ?>" required oninvalid="this.setCustomValidity('Mohon Diisi!')"
								oninput="this.setCustomValidity('')">
							</div>
						</div>
					</div>
				</div>


			</div>

			<div class="modal-footer">
				<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
				<button type="submit" class="btn btn-success" id="generate" name="generate_LR">Generate</button>
			</div>
		</form>
		

	</div>
</div>
</div>

<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>


