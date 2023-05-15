<?php 
session_start();
require_once "functions.php";
$dataMD = dataMeninggal();

$dataCategory = [];
while($dataKategori = mysqli_fetch_assoc($kategori)){
    $dataCategory[] = $dataKategori;
}

var_dump($dataCategory);
$category = null;
//update data MD
if (isset($_SESSION['kondisi'])) {
    foreach ($dataMD as $key) {
        if($_SESSION['id_updateMD'] == $key['id']){      
            $category = $key['id_kategori'];
            $_SESSION['update_convertMentah'] = explode("|", $key['data_bulan_mentah']);
            $_SESSION['update_convertReal'] = explode("|", $key['data_bulan_real']);
            $_SESSION['update_tahun_data_mentah'] = $key['tahun_data_mentah'];
            $_SESSION['updtae_tahun_data_real'] = $key['tahun_data_real'];                            
        }
    } 
}

echo $category;
foreach ($dataCategory as $key) {
    var_dump($key['id']);
}


 ?>

<div class="modal fade"  id="update-data" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" role="dialog">
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
                                        <?php foreach ($dataCategory as $key): ?> 
                                            <?php if($category == $key['id']) : ?>
                                                <option value="">adkfnjsa</option>
                                            <?php endif; ?>
                                        <?php endforeach; ?> 
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
                                        <input type="number" class="form-control ac" id="tahun1" name="tahunMentah" autocomplete="off" required="required" value="<?= $_SESSION['update_tahun_data_mentah'] ?>">
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
                                    <input type="number" class="form-control ac" id="tahun2" name="tahunReal" value="<?= $_SESSION['updtae_tahun_data_real'] ?>" autocomplete="off" required="required">
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
       <button type="submit" class="btn btn-success" id="simpan" name="simpan">Update</button> 
   </div>  
</form>
</div>
</div>
</div>
</div>