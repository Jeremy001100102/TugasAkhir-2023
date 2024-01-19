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
        document.location.href = 'tables.php?id_MD=' + id +'&u_berhasil=berhasil';
        </script>
        ";
        // header("Location: tables.php?id_MD=$id_tampilMD&u_berhasil=berhasil");
    } else {
        // echo "
        // <script>
        // var id = " . json_encode($id_tampilMD) . ";
        // document.location.href = 'tables.php?id_MD=' + id +'&u_gagal=gagal';
        // </script>
        // ";

        echo "
        <script>
        var id = " . json_encode($id_tampilMD) . ";
        document.location.href = 'tables.php?id_MD=' + id +'&u_berhasil=berhasil';
        </script>
        ";
    }
}
?>

<div class="modal fade" id="update-dataMD" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Update Jumlah Korban Meninggal Dunia</h1>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <br>  
        <form method="POST" role="form" >
          <div class="container">
            <div class="row mb-3 justify-content-center">   
              <div class="col-8">   
                <select name="kondisiUpdate" class="form-select ac">
                    <option value="1">Meninggal Dunia</option>
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
        <input type="number" class="form-control manualInput col-lg w-50 ac" id="tahun" name="tahun" value="<?= $_SESSION['update_tahun_MD'] ?>" autocomplete="off">
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
    <input type="number" class="form-control manualInput w-50 ac" id="<?= $bulan[$i]?>" name="dataM[]" value="<?= $_SESSION['update_data_bulanMD'][$i]?>"
></div>
</div>       
<?php endfor; ?> 
</div>   
</div>
<div class="modal-footer">
  <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
  <button type="submit"  class="btn btn-primary" name="updateMD">Update</button>
</div>
</form>
</div>
</div>
</div>






