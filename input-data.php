<?php
session_start();

//Mencegah sebelum masuk halaman input data
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
}

//database
require_once "functions.php";

//array data tampil bulan
$bulan = ["Januari","Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];


//tambah data
if (isset($_POST['simpan'])) {
    // $dataS = $_POST['dataS'];
    // $dataR = $_POST['dataR'];

    // var_dump($_POST);
    // $dataSS = implode("|", $dataS);

    // var_dump(tambah($_POST));


    if( tambah($_POST) > 0){

        $_SESSION['alert'] = "on";
        $_SESSION['pesan'] = "Data Berhasil Disimpan!";
        // echo " 
        // <script>
        //   document.location.href = 'input-data.php';
        //   </script>   
        //   ";
        header("Location: input-data.php");
        exit;
        die;
    }else{
       $_SESSION['alert'] = "off";
       $_SESSION['pesan'] = "Data Gagal Disimpan!";
        // echo "
        // <script>
        // alert('Data gagal ditambahkan');
        // document.location.href = 'input-data.php';
        // </script>   
        // ";
       header("Location: input-data.php");
       exit;
       die;
   }


}
?>


<!-- Header -->
<?php require "layout/header.php" ?>


<div class="row">
    <div class="col-4">
        <h3 class="d-inline">INPUT DATA</h3>
    </div>
    <div class="col-8 text-end">
      <a class="btn btn-sm btn-primary shadow-sm disabled popover-dismiss" title="Anda Belum Melakukan Pemilihan Data Simulasi DIBAWAH INI!" id="tombolHitung" href="<?php if(isset($_SESSION['id_updatetampilMD']) && isset($_SESSION['id_updatetampilLB']) && isset($_SESSION['id_updatetampilLR'])) {
       echo "kalkulasi.php?id_hitungMD={$_SESSION['id_updateMD']}&id_hitungLB={$_SESSION['id_updateLB']}&id_hitungLR={$_SESSION['id_updateLR']}&frek=jeremy";}?>"  ><i class="fa-solid fa-calculator"></i> Kalkulasi Data <span id="mySpan">0</span> / 3</a>

       <a href="#" class="btn btn-sm btn-danger shadow-sm" data-toggle="modal" data-target="#hapus-input-dataAll" data-backdrop="static" data-keyboard="false"><i class="fa-solid fa-trash-can"></i> Hapus Semua Data</a>

       <a href="#" class="btn btn-sm btn-success shadow-sm" data-toggle="modal" data-target="#tambah-data" data-backdrop="static" data-keyboard="false"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah Data</a>
   </div>
</div>

<div class="modal fade"  id="tambah-data" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" role="dialog">
    <div class="modal-dialog modal-dialog-scrollable mw-100 w-100">
        <div class="card mx-auto mb-3 w-75 mt-4">

            <div class="modal-content">
                <div class="modal-header">

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

<!-- Modal Hapus Semua Input Data-->
<div class="modal fade" id="hapus-input-dataAll" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Anda yakin ingin hapus?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
        <div class="modal-body">Pilih "Yes" dibawah ini jika anda ingin hapus semua data</div>
        <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="delete.php?id_hapusAll=jeremy">Yes</a>
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
<?php require "tampil.php" ?>
<?php require "layout/footer.php" ?> 



<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script>



    $(document).ready(function(){

        // $('[data-toggle="popover"]').popover();
      // Ambil referensi ke elemen tombol





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



//button aktif
    // Mendengarkan perubahan pada checkbox
        $("#checkMD, #checkLB, #checkLR").change(function() {
    // Memeriksa status checkbox
            if ($("#checkMD").is(':checked') && $("#checkLB").is(':checked') && $("#checkLR").is(':checked')) {
      // Mengaktifkan tombol "Hitung" atau menghapus class "disable"
              $("#tombolHitung").removeClass("disabled");
          } else {
      // Menonaktifkan tombol "Hitung" atau menambahkan class "disable"
              $("#tombolHitung").addClass("disabled");
          }
      });




        $("#checkMD, #checkLB, #checkLR").change(function() {
             cekMD = $("#checkMD").is(':checked') ? 1 : 0;
             cekLB = $("#checkLB").is(':checked') ? 1 : 0;
             cekLR = $("#checkLR").is(':checked') ? 1 : 0;



            $.ajax({
                type: "POST",
                url: "input-data.php",
                data: { cekMD: cekMD, cekLB : cekLB, cekLR : cekLR},
                success: function(data) {
                    console.log(cekMD+cekLB+cekLR);
                    
                    $("#mySpan").text(cekMD+cekLB+cekLR);
                }
            });
        });

        
        


//bookmark tampil data
        var hash = window.location.hash;
        if(hash){
            $(hash).collapse('show');
        }
        window.onload = function() {
            var bookmarks = window.location.hash.split('#');

            for (var i = 1; i < bookmarks.length; i++) {
                var bookmark = bookmarks[i];

            // Buka collapse dengan menggunakan identifikasi bookmark
                var collapse = document.getElementById(bookmark);
                if (collapse) {
                    collapse.classList.add('show');
                }
            }
        };


  //Aksi saat accordion diklik
    //Menangkap semua elemen accordion button
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

    });


</script>                  