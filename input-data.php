<?php
session_start(); 
require_once "functions.php";


$bulan = ["Januari","Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];


if (isset($_POST['simpan'])) {
    // $dataS = $_POST['dataS'];
    // $dataR = $_POST['dataR'];

    // var_dump($_POST);
    // $dataSS = implode("|", $dataS);

    // var_dump(tambah($_POST));


    if( tambah($_POST) > 0){
        echo " 
        <script>
        alert('Data berhasil ditambahkan');
        document.location.href = 'input-data.php';
        </script>   
        ";
    }else{
        echo "
        <script>
        alert('Data gagal ditambahkan');
        document.location.href = 'input-data.php';
        </script>   
        ";
    }


}
?>



<?php require "layout/header.php" ?>

<div class="row">
    <div class="col-4">
        <h3 class="d-inline">INPUT DATA</h3>
    </div>
    <div class="col-8 text-end">
        <a href="" class="btn btn-sm btn-danger shadow-sm" data-toggle="modal" data-target="#tambah-data" data-backdrop="static" data-keyboard="false"><i class="fa-solid fa-trash-can"></i> Hapus Semua Data</a>
        <a href="#" class="btn btn-sm btn-success shadow-sm" data-toggle="modal" data-target="#tambah-data" data-backdrop="static" data-keyboard="false"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah Data</a>
    </div>
</div>
<div class="modal fade"  id="tambah-data" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" role="dialog">
    <div class="modal-dialog modal-dialog-scrollable mw-100 w-100">
        <div class="card mx-auto mb-3 w-75 mt-4">

            <div class="modal-content">
                <div class="modal-header">
         <!--  <div class="card-header border-secondary bg-secondary border-2 text-white text-center" style="font-size: 18px;">
            Masukkan Jumlah Korban Kecelakaan -->
            <div class="modal-title w-100 text-center position-absolute fw-bold fs-4">Masukkan Jumlah Korban Kecelakaan</div>

            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
          
      </div>
      <div class="modal-body">
        <div class="card-body">
            <form method="POST" role="form" id="validasi">
                <div class="container">
                    <div class="row mb-3 justify-content-center">   
                        <div class="col-12 col-lg-6 col-md-8 col-sm-10 col-xl-4">   
                            <select name="kondisi" class="form-select ac" id="condition" onchange="getKondisi(this)">
                                <option value="null"  hidden selected="selected">Pilih Kondisi Korban Kecelakaan</option>
                                <?php while ( $dataKategori = mysqli_fetch_assoc($kategori)) : ?>
                                    <option value="<?= $dataKategori['id']?>"><?= $dataKategori['nama']  ?></option>
                                <?php endwhile; ?>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3 text-center">   
                        <div class="col-5"> 
                            <h5 class="fw-semibold">Data Mentah</h5>
                        </div>
                        <div class="col-2 text-center">   
                          <div class="vr"></div>
                      </div>
                      <div class="col-5"> 
                        <h5 class="fw-semibold">Data Real</h5>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-5">
                        <div class="row justify-content-start">
                            <label for="tahun1" class="col-12 col-lg-5 col-md-6 col-sm-7 col-form-label">Tahun</label>
                            <div class="col-12 col-md-6 col-sm-5"> 
                                <input type="number" class="form-control ac" id="tahun1" name="tahunMentah" value="2022" autocomplete="off" required="required">
                            </div>
                        </div>
                    </div>

                    <div class="col-2 text-center">   
                      <div class="vr"></div>
                  </div>

                  <div class="col-5">
                    <div class="row justify-content-end">
                        <label for="tahun2" class="col-12 col-lg-5 col-md-6 col-sm-7 col-form-label">Tahun</label>
                        <div class="col-12 col-md-6 col-sm-5"> 
                            <input type="number" class="form-control ac" id="tahun2" name="tahunReal" value="2023" autocomplete="off" required="required">
                        </div>
                    </div>
                </div>
            </div>
            <?php   for($i=0; $i < count($bulan); $i++) : ?>
                <div class="row mb-3">
                    <div class="col-5">
                        <div class="row justify-content-start">
                            <label for="<?= $bulan[$i] ?>" class="col-12 col-lg-5 col-md-6 col-sm-7 col-form-label"><?= $bulan[$i] ?></label>
                            <div class="col-12 col-md-6 col-sm-5">   
                                <input type="number" class="form-control ac" id="<?= $bulan[$i]?>" name="dataM[]" required="required"> 
                            </div>
                        </div>
                    </div>

                    <div class="col-2 text-center">   
                      <div class="vr"></div>
                  </div>

                  <div class="col-5">
                    <div class="row justify-content-end">
                        <label for="<?= "{$bulan[$i]}$" ?>" class="col-12 col-lg-5 col-md-6 col-sm-7 col-form-label"><?= $bulan[$i] ?></label>
                        <div class="col-12 col-md-6 col-sm-5"> 
                            <input type="number" class="form-control ac" id="<?= "{$bulan[$i]}$" ?>" name ="dataR[]" required="required">
                        </div>
                    </div>
                </div>
            </div>
        <?php  endfor; ?>    
    </div>
</div>
</div>
<div class="modal-footer">   
 <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>  
 <button type="submit" class="btn btn-success" id="simpan" name="simpan">Simpan</button> 
</div>  
</form>
</div>
</div>
</div>
</div>

<?php require "tampil.php" ?>



<?php require "layout/footer.php" ?> 

<!-- <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script> -->
<script>

   function getKondisi(values) {
      hasil = values.value;  
  }




  $(document).ready(function(){

//validation form input dan update data
      $("#simpan").click(function() {
        $('.ac').each(function() {
            if ($(this).val().length === 0 || $(this).val() == "null") {
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


//bookmark tampil data
      var hash = window.location.hash;
      if(hash){
        $(hash).collapse('show');
    }


//   Aksi saat accordion diklik
//     Menangkap semua elemen accordion button
    var accordionButtons = document.querySelectorAll('.accordion-button');

    //Loop melalui setiap button
    accordionButtons.forEach(function(button) {
        // Tambahkan event listener 'click' pada setiap button
        button.addEventListener('click', function() {
            // Dapatkan data-bs-target dari button yang diklik
            var target = this.getAttribute('data-bs-target');

            // Dapatkan bagian anchor dari data-bs-target
            var anchor = target.substring(1);

            // Perbarui URL dengan menambahkan bookmark sesuai dengan anchor
            window.location.hash = anchor;
        });
    });

//update trigger
// $('#updateMD').on('click', function(e) {
//       e.preventDefault();
//     alert("fjsfs");
    
//   //   var activeLink = $('.dropdown-menu').find('.active');
//   //   if (activeLink.length > 0) {
//   //     activeLink.trigger('click');
//   //   }
//   });


});

    // $(".btn-close").click(function(){
    //     $("#tambah-data").hide();
    // });





</script>                  