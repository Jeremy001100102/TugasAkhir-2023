<?php

if (isset($_POST['updateMD'])) {
    $id_tampilMD = $_SESSION['id_updatetampilMD'];
    // $dataS = $_POST['dataS'];
    // $dataR = $_POST['dataR'];

    // var_dump($_POST);
    // $dataSS = implode("|", $dataS);

    // var_dump(tambah($_POST));

    if (update($_POST, $_SESSION['id_updateMD']) > 0) {
        echo "
        <script>
        var id = " . json_encode($id_tampilMD) . ";
        alert('Data berhasil diupdate');
        document.location.href = 'tables.php?id_MD=' + id;
        </script>
        ";
    } else {
        echo "
        <script>
        var id = " . json_encode($id_tampilMD) . ";
        alert('Data gagal diupdate');
        document.location.href = 'tables.php?id_MD=' + id;
        </script>
        ";
    }
}
?>


<div class="modal fade"  id="update-dataMD" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" role="dialog">
    <div class="modal-dialog modal-dialog-scrollable mw-100 w-100">
        <div class="card mx-auto mb-3 w-75 mt-4">

            <div class="modal-content">
                <div class="modal-header">
                  <div class="modal-title w-100 text-center position-absolute fw-bold fs-4">Update Jumlah Korban Kecelakaan</div>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                <div class="card-body">
                    <form method="POST" role="form">
                        <div class="container">
                            <div class="row mb-3 justify-content-center">   
                                <div class="col-12 col-lg-6 col-md-8 col-sm-10 col-xl-4">   
                                    <select name="kondisiUpdate" class="form-select ac">
                                        
                                            <option value="1">Meninggal</option>
                                        
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
                                    <input type="number" class="form-control ac" id="tahun1" name="tahunMentah" autocomplete="off" required="required" value="<?= $_SESSION['update_tahun_data_mentahMD'] ?>">
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
                                <input type="number" class="form-control ac" id="tahun2" name="tahunReal" value="<?= $_SESSION['update_tahun_data_realMD'] ?>" autocomplete="off" required="required">
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
                                    <input type="number" class="form-control ac" id="<?= $bulan[$i]?>" name="dataM[]" value="<?= $_SESSION['update_convertMentahMD'][$i] ?>" required="required"> 
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
                                <input type="number" class="form-control ac" id="<?= "{$bulan[$i]}$" ?>" name ="dataR[]" value="<?= $_SESSION['update_convertRealMD'][$i] ?>" required="required">
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
 <button type="submit" class="btn btn-success" id="simpan" name="updateMD">Update</button> 
</div>  
</form>
</div>
</div>
</div>
</div>