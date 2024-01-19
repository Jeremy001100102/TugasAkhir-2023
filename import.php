<div class="modal fade" id="tambah-data" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Masukkan Jumlah Korban</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <nav>
          <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Manual Input</button>
            <button class="nav-link" id="nav-profile-tab" data-bs-target="#import-data" data-bs-toggle="modal" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Import Data</button>
          </div>
        </nav>
        <br>  
        <form method="POST" enctype="multipart/form-data" role="form" action="input-data.php" id="validasi">
          <div class="container">
            <div class="row mb-3 justify-content-center">   
              <div class="col-8">   
                <select name="kondisi" class="form-select manualInput ac" id="condition" onchange="getKondisi(this)">
                  <option value="null"  hidden selected="selected">Pilih Kondisi Korban Kecelakaan</option>
                  <?php while ($dataKategori = mysqli_fetch_assoc($kategori)) : ?>
                    <option value="<?= $dataKategori['id']?>"><?= $dataKategori['nama']  ?></option>
                  <?php endwhile; ?>
                </select>
              </div>
            </div>
            <div class="row mb-3">
              <div class="col-6">
                <div class="row">
                  <div class="col-6"></div>
                  <div class="col-6">  
                    <label for="tahun" class="col-form-label">Tahun</label>
                  </div>
                </div>
              </div>
              <div class="col-6"> 
                <input type="number" class="form-control manualInput col-lg w-50 ac" id="tahun" name="tahun" value="2022" autocomplete="off">
              </div>
            </div>
            <?php for($i=0; $i < count($bulan); $i++) : ?>
              <div class="row mb-3">
                <div class="col-6">
                  <div class="row">
                    <div class="col-6"></div> 
                    <div class="col-6"> 
                      <label for="<?= $bulan[$i] ?>" class="col-form-label"><?= $bulan[$i] ?></label>
                    </div>
                  </div>
                </div>
                <div class="col-6">   
                  <input type="number" class="form-control manualInput w-50 ac" id="<?= $bulan[$i]?>" name="dataM[]"> 
                </div>
              </div>       
            <?php endfor; ?> 
          </div>   
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
          <button type="submit" id="simpan" class="btn btn-primary" name="simpanManual">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>







<div class="modal fade" id="import-data" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalToggleLabel2">Masukkan Jumlah Korban</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <nav>
          <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <button class="nav-link" id="nav-home-tab" data-bs-target="#tambah-data" data-bs-toggle="modal" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Manual Input</button>
            <button class="nav-link active" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile"  type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Import Data</button>
          </div>
        </nav>
        <br>  
        <form method="POST"enctype="multipart/form-data" role="form" action="input-data.php">
          <input type="file" name="importExcel" id="importExcel" class="form-control" required />
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
          <button type="submit" id="simpan" class="btn btn-primary" name="simpanImport">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>
















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





// function loadImportData(event) {

//   // Kirim permintaan AJAX
//   $.ajax({
//     type: 'POST',
//     url: 'input-data.php',
//     data: formData,
//     contentType: false,
//     processData: false,
//     success: function(response) {
//       // Handle server response here
//       console.log(response);
//       // Display success or error messages as needed
//     },
//     error: function(error) {
//       console.error('Error:', error);
//     }
//   });
// }












</script>








