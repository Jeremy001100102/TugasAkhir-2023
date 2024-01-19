<?php 
session_start();
require 'functions.php';


if(isset($_POST['register'])){

	if(register($_POST) > 0){
		 $_SESSION['alert'] = "on";
        $_SESSION['pesan'] = "User Berhasil Ditambahkan!";
		// echo "
		// <script>
		// alert('User baru berhasil ditambahakan');
		// </script>
		// ";
	}else{
		echo mysqli_error($conn);
	}
}

$dataAkun = dataAkun();





?>

<?php 	require "layout/header.php";?>



<div class="row">
	<div class="col-6">	
		<h1 class="d-inline">Halaman Registrasi Akun</h1>
	</div>
	<div class="col-6 text-end">	
		<a href="#" class="btn btn-sm btn-success shadow-sm" data-toggle="modal" data-target="#tambah-akun" data-backdrop="static" data-keyboard="false"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah Akun</a>
	</div>
</div>

<div class="container">		
	<div class="row mt-4">
		<div class="card">		
			<table class="table table-bordered mt-3">
				<thead>
					<tr class="text-center">
						<th>No</th>
						<th>Username</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php $no = 1;  foreach ($dataAkun as $key) :?>
					<?php if($key['username'] === "jeremy bessiesura") : ?>
						<tr class="bg-dark bg-gradient text-white">
							<th class="text-center"><?= $no++; ?></th>
							<td><?= $key['username']; ?></td>
							<td class="text-center"> Permanent </td>
						</tr>
					<?php else : ?>
						<th class="text-center"><?= $no++; ?></th>
						<td><?= $key['username']; ?></td>
						<td class="text-center">
							<a href="delete.php?id_hapusAkun=<?= $key['id']; ?>" class="btn btn-sm btn-dark shadow-sm d-inline"><i class="fa-solid fa-trash-can"></i> Delete</a>
						</td>
					</tr>
				<?php endif; ?>
			<?php endforeach; ?>				
		</tbody>
	</table>
</div>
</div>
</div>

<!-- tambah akun Modal-->
<div class="modal fade" id="tambah-akun" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
	<div class="modal-content">
		<div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel">Register Akun</h5>
			<button class="close" type="button" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">×</span>
			</button>
		</div>
		<div class="modal-body">
			<form action="" method="POST">
				<div class="row">
					<div class="col-2">	 	
						<label for="username">Username</label>
					</div>
					<div class="col-10">		
						<input type="text" name="username" id="username" class="form-control ac">
					</div>
				</div>

				<div class="row mb-3 mt-3">
					<div class="col-2">		
						<label for="password">Password</label>
					</div>
					<div class="col-10">	
						<input type="password" name="password" id="password" class="form-control ac">
					</div>
				</div>

				<div class="row mb-3">
					<div class="col-2">		
						<label for="password2">Password</label>
					</div>
					<div class="col-10">	
						<input type="password" name="password2" id="password2" class="form-control ac">
					</div>
				</div>


				<div class="modal-footer">
					<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
					<button type="submit" class="btn btn-success" id="simpan" name="register">Register</button>
				</div>
			</form>
		</div>

	</div>
</div>
</div>

<?php   
if (isset($_SESSION['alert']) && $_SESSION['alert'] === "on") {
 echo "
 <script>
 Swal.fire({
    title: 'Berhasil!',
    text: '{$_SESSION['pesan']}',
    icon: 'success'
    });

    </script>
    ";

    unset($_SESSION['alert']);
} 
if (isset($_SESSION['alert']) && $_SESSION['alert'] === "off") {
    echo "
    <script>
    Swal.fire({
      icon: 'error',
      title: 'Gagal!',
      text: '{$_SESSION['pesan']}'

      });
      </script>
      ";
      unset($_SESSION['alert']);
  }

  ?>

<?php require "layout/footer.php"; ?>

<script>	

	$(document).ready(function(){

		$("#simpan").click(function() {
			$('.ac').each(function() {
				if ($(this).val().length === 0) {
					$(this).attr("required", true);
					$(this).addClass("is-invalid");
					$(this).attr("oninvalid", "setCustomValidity('Mohon Diisi')");
				} else {
					$(this).removeClass("is-invalid");
					$(this).addClass("is-valid");
					$(this).attr("oninvalid", "setCustomValidity('')");

				}
			});
		});
	});

</script>
