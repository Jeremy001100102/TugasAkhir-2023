<?php
session_start();

//Mencegah sebelum masuk halaman input data
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
}

//database
require_once "functions.php";

//array data tampil bulan



//tambah data
if (isset($_POST['simpanManual'])) {
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




if (isset($_POST['simpanImport'])) {

  $file_data = $_FILES['importExcel']['tmp_name'];

  if( importData($file_data) > 0){

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

         <a href="#" class="btn btn-sm btn-success shadow-sm" data-bs-toggle="modal" data-bs-target="#tambah-data" data-backdrop="static" data-keyboard="false"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah Data</a>
     </div>
 </div>


 <?php  require "import.php"; ?>

 <!-- <?php require "tampil.php" ?> -->


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


<?php require "tampil.php"; ?>

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