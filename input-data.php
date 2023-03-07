<?php 

$bulan = ["Januari","Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];


if (isset($_POST['simpan'])) {
    $dataS = $_POST['dataS'];
    $dataR = $_POST['dataR'];

    if($_POST['kondisi'] == 1){

    }

    // for ($i=0; $i < 12; $i++) { 
    //     echo "{$dataS[$i]} \t {$dataR[$i]}";
    //     echo "<br>";
    // }
}
?>



<?php require "layout/header.php" ?>

<h3>INPUT DATA</h3>
<a href="#" class="btn btn-sm btn-success shadow-sm" data-toggle="modal" data-target="#tambah-data" data-backdrop="static" data-keyboard="false"><i class="fas fa-plus fa-sm text-white-50"></i>Tambah Data</a>
<div class="modal fade"  id="tambah-data" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" role="dialog">
    <div class="modal-dialog modal-dialog-scrollable mw-100 w-100">
        <div class="card mx-auto mb-3 w-75 mt-4">

            <div class="modal-content">
                <div class="modal-header">
         <!--  <div class="card-header border-secondary bg-secondary border-2 text-white text-center" style="font-size: 18px;">
            Masukkan Jumlah Korban Kecelakaan -->

            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
          <!-- </div> -->
      </div>
      <div class="modal-body">
        <div class="card-body">
            <form method="POST" role="form" id="validasi">
                <div class="container">
                    <div class="row mb-3 justify-content-center">   
                        <div class="col-12 col-lg-6 col-md-8 col-sm-10 col-xl-4">   
                            <select name="kondisi" class="form-select ac" id="condition" onchange="getKondisi(this)">
                                <option value="null"  hidden selected="selected">Pilih Kondisi Korban Kecelakaan</option>
                                <option value="1">Meninggal Dunia</option>
                                <option value="2">Luka Berat</option>
                                <option value="3">Luka Ringan</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3 text-center">   
                        <div class="col-5"> 
                            <h5 class="font-weight-bold">Data Simulasi</h5>
                        </div>
                        <div class="col-2 text-center">   
                          <div class="vr"></div>
                      </div>
                      <div class="col-5"> 
                        <h5 class="font-weight-bold">Data Real</h5>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-5">
                        <div class="row justify-content-start">
                            <label for="tahun1" class="col-12 col-lg-5 col-md-6 col-sm-7 col-form-label">Tahun</label>
                            <div class="col-12 col-md-6 col-sm-5"> 
                                <input type="number" class="form-control ac" id="tahun1" name="tahun1" value="2022" autocomplete="off" required="required">
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
                            <input type="number" class="form-control ac" id="tahun2" name="tahun2" value="2022" autocomplete="off" required="required">
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
                                <input type="number" class="form-control ac" id="<?= $bulan[$i]?>" name="dataS[]" required="required"> 
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
 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>  
 <button type="submit" class="btn btn-success" id="simpan" name="simpan">Simpan</button> 
</div>  
</form>
</div>
</div>
</div>
</div>

<?php require "layout/footer.php" ?> 

<!-- <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"> --></script>
<script>

   function getKondisi(values) {
      hasil = values.value;  
  }




  $(document).ready(function(){
    
  //    $("#validasi").validate({
  //   rules: {
  //     ac: {
  //       required : true
  //     }
  //     },
  //   messages: {
  //     ac: {
  //       required: true
  //     }
  // }
  // });

   $('#tambah-data').modal({
    backdrop: 'static', 
    keyboard: false
});  


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

   });

    // $(".btn-close").click(function(){
    //     $("#tambah-data").hide();
    // });





</script>                  