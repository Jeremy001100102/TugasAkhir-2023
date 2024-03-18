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
    header("Location: tables.php?id_import=jeremy");
    
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


}

}


$data_per_kategori = tahunPrediksi();

?>


<!-- Header -->
<?php require "layout/header.php" ?>


<div class="row">
    <div class="col-4">
        <h3 class="d-inline">INPUT DATA</h3>
    </div>
    <div class="col-8 text-end">
        <div class="dropdown-center d-inline">
            <button class="btn btn-sm btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false"><i class="fa-solid fa-calculator"></i>
                Kalkulasi Data
            </button>
            <ul class="dropdown-menu">
                <li>
                     <h6 class="dropdown-header text-center">Tahun Uji</h6>
                    <h6 class="dropdown-header text-center">Tahun | MD LB LR</h6>
                </li>
                <li><hr class="dropdown-divider"></li>
                <div  class="style-dropdown">
                    <?php for ($i=0; $i < $jumlah_semua_kategori['jumlah']; $i++) : ?>
                        <?php $batas_data_history = 10;?>
                        <?php if ($i >= $batas_data_history) : ?>
                           <?php 

                           $id_dataMD = "tidak ada";
                           $id_dataLB = "tidak ada";
                           $id_dataLR = "tidak ada";

                           ?>


                           <?php  for ($j=0; $j < count($data_per_kategori[$i]) ; $j++) {


                            $tahun = $data_per_kategori[$i][$j]['tahun'];

                            if($data_per_kategori[$i][$j]['nama'] == "Meninggal Dunia"){
                                $id_dataMD = $data_per_kategori[$i][$j]['nama'] == "Meninggal Dunia" ? $data_per_kategori[$i][$j]['id'] : "tidak ada";
                            }else if ($data_per_kategori[$i][$j]['nama'] == "Luka Berat") {
                                $id_dataLB = $data_per_kategori[$i][$j]['nama'] == "Luka Berat" ? $data_per_kategori[$i][$j]['id'] : "tidak ada";

                            }else{
                               $id_dataLR = $data_per_kategori[$i][$j]['nama'] == "Luka Ringan" ? $data_per_kategori[$i][$j]['id'] : "tidak ada";
                           }



                       }    ?>


                       <li class="ms-3"><a href="kalkulasi.php?frek=jeremy&id_frekMD=<?=$id_dataMD?>&id_frekLB=<?= $id_dataLB ?>&id_frekLR=<?=$id_dataLR?>" class="dropdown-item <?= $id_dataMD == "tidak ada" || $id_dataLB == "tidak ada" || $id_dataLR == "tidak ada" ? "disabled" : "" ?>"><?= $tahun?> <?= $id_dataMD == "tidak ada" ? "<i class='fa-solid fa-square-xmark ms-3'></i>" : "<i class='fa-solid fa-square-check ms-3'></i>"?> <?= $id_dataLB == "tidak ada" ? "<i class='fa-solid fa-square-xmark ms-1'></i>" : "<i class='fa-solid fa-square-check ms-1'></i>"?> <?= $id_dataLR == "tidak ada" ? "<i class='fa-solid fa-square-xmark ms-1'></i>" : "<i class='fa-solid fa-square-check ms-1'></i>"?></a>
                       </li>

                       <?php if($i ==  $jumlah_semua_kategori['jumlah']-1) :?>
                         <li><hr class="dropdown-divider"></li>
                           <li>
                            <h6 class="dropdown-header text-center">Tahun Prediksi</h6>
                        </li>
                         <li><hr class="dropdown-divider"></li>
                        <li>
                           <a href="kalkulasi.php?frek=jeremy&id_prediksi=<?=++$tahun?>" class="dropdown-item text-center"><?= $tahun?></a>   
                       </li>
                   <?php  endif ?>

               <?php endif ?>
           <?php endfor; ?>
       </div>
   </ul>
</div>

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