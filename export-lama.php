
<!-- Meninggal Dunia -->
<div class="modal fade" id="exportdataMD" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog modal-dialog-scrollable mw-100" style="width: 90%;" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <div class="modal-title text-center w-100 fw-bold fs-4">Export Data Meninggal Dunia</div>
      <button class="close" type="button" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
      </button>
    </div>
    <div class="modal-body">
     <table class="table table-bordered display nowrap" id="exportMD">
                <caption class="caption-top text-center">Data Hasil Simulasi Meninggal Dunia <?=  $_SESSION['tahun_hasilMD']; ?></caption>
                <thead>
                  <tr class="text-center">
                    <th>No</th>
                    <th>Bulan</th>
                    <th>Frekuensi</th>
                    <th>Probabilitas</th>
                    <th>Kumulatif</th>
                    <th>Interval</th>
                    <th>Angka Acak</th>
                    <th>Hasil Simulasi <?= $_SESSION['tahun_hasilMD'] ?>      
                  </th>
                  <th>Data Real <?= $_SESSION['tahun_data_realMD'] ?></th>
                  <th>Tingkat Akurasi</th>
                </tr>
              </thead>
              <tbody>
                <?php $no = 1; for ($i=0; $i < count($bulan) ; $i++) : ?>
                <tr class="text-center">
                  <td><?= $no++; ?></td>
                  <td><?= $bulan[$i];?></td>
                  <td><?= $_SESSION['convert_hasil_frekMD'][$i]; ?></td>
                  <td><?= $_SESSION['convert_hasil_probMD'][$i] ?></td>
                  <td> <?= $_SESSION['convert_hasil_kumuMD'][$i]; ?></td>
                  <td><?= $_SESSION['convert_hasil_interMD'][$i] ?></td>
                  <td> <?= $_SESSION['convert_hasil_acakMD'][$i] ?></td>
                  <td> <?= $_SESSION['convert_hasil_MD'][$i] ?></td>
                  <td>  <?= $_SESSION['convert_hasil_datarealMD'][$i]; ?></td>
                  <td> <?= $_SESSION['convert_hasil_akurasiMD'][$i]; ?></td>  
                </tr>
              <?php endfor ?>
              <tr class="text-center">
                  <td><?= $no++; ?></td>
                <td>Total</td>
                <td><?= $_SESSION['total_hasil_frekMD']; ?></td>
                <td><?= $_SESSION['total_hasil_probMD']; ?></td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td><?= $_SESSION['total_hasil_simMD']; ?></td>
                <td><?= $_SESSION['total_data_realMD'];  ?></td>
                <td>-</td>  
              </tr>
              <tr class="text-center">
                 <td><?= $no++; ?></td>
                <td>Rata-rata</td>
                <td><?= $_SESSION['rata2_hasilfrekMD']; ?></td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td><?= $_SESSION['rata2_hasil_simMD']; ?></td>
                <td><?= $_SESSION['rata2_hasil_realMD']; ?></td>
                <td><?= $_SESSION['rata2_hasil_akurasiMD']; ?></td>     
              </tr>
            </tbody>
          </table>
   </div>
   <div class="modal-footer">
    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
  </div>
</div>
</div>
</div>


<!-- Luka Berat -->
<div class="modal fade" id="exportdataLB" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog modal-dialog-scrollable mw-100" style="width: 90%;" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <div class="modal-title text-center w-100 fw-bold fs-4">Export Data Luka Berat</div>
      <button class="close" type="button" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
      </button>
    </div>
    <div class="modal-body">
     <table class="table table-bordered display nowrap" id="exportLB">
                <caption class="caption-top text-center">Data Hasil Simulasi Luka Berat <?=  $_SESSION['tahun_hasilLB']; ?></caption>
                <thead>
                  <tr class="text-center">
                    <th>No</th>
                    <th>Bulan</th>
                    <th>Frekuensi</th>
                    <th>Probabilitas</th>
                    <th>Kumulatif</th>
                    <th>Interval</th>
                    <th>Angka Acak</th>
                    <th>Hasil Simulasi <?= $_SESSION['tahun_hasilLB'] ?>      
                  </th>
                  <th>Data Real <?= $_SESSION['tahun_data_realLB'] ?></th>
                  <th>Tingkat Akurasi</th>
                </tr>
              </thead>
              <tbody>
                <?php $no = 1; for ($i=0; $i < count($bulan) ; $i++) : ?>
                <tr class="text-center">
                  <td><?= $no++; ?></td>
                  <td> <?= $bulan[$i];?></td>
                  <td><?= $_SESSION['convert_hasil_frekLB'][$i]; ?></td>
                  <td><?= $_SESSION['convert_hasil_probLB'][$i] ?></td>
                  <td> <?= $_SESSION['convert_hasil_kumuLB'][$i]; ?></td>
                  <td><?= $_SESSION['convert_hasil_interLB'][$i] ?></td>
                  <td> <?= $_SESSION['convert_hasil_acakLB'][$i] ?></td>
                  <td> <?= $_SESSION['convert_hasil_LB'][$i] ?></td>
                  <td>  <?= $_SESSION['convert_hasil_datarealLB'][$i]; ?></td>
                  <td> <?= $_SESSION['convert_hasil_akurasiLB'][$i]; ?></td>  
                </tr>
              <?php endfor ?>
              <tr class="text-center">
                <td><?= $no++;  ?></td>
                <td>Total</td>
                <td><?= $_SESSION['total_hasil_frekLB']; ?></td>
                <td><?= $_SESSION['total_hasil_probLB']; ?></td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td><?= $_SESSION['total_hasil_simLB']; ?></td>
                <td><?= $_SESSION['total_data_realLB'];  ?></td>
                <td>-</td>  
              </tr>
              <tr class="text-center">
                <td><?= $no++;  ?></td>
                <td>Rata-rata</td>
                <td><?= $_SESSION['rata2_hasilfrekLB']; ?></td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td><?= $_SESSION['rata2_hasil_simLB']; ?></td>
                <td><?= $_SESSION['rata2_hasil_realLB']; ?></td>
                <td><?= $_SESSION['rata2_hasil_akurasiLB']; ?></td>     
              </tr>
            </tbody>
          </table>
   </div>
   <div class="modal-footer">
    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
  </div>
</div>
</div>
</div>


<!-- Luka Ringan -->
<div class="modal fade" id="exportdataLR" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog modal-dialog-scrollable mw-100" style="width: 90%;" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <div class="modal-title text-center w-100 fw-bold fs-4">Export Data Luka Ringan</div>
      <button class="close" type="button" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
      </button>
    </div>
    <div class="modal-body">
     <table class="table table-bordered display nowrap" id="exportLR">
                <caption class="caption-top text-center">Data Hasil Simulasi Luka Ringan <?=  $_SESSION['tahun_hasilLR']; ?></caption>
                <thead>
                  <tr class="text-center">
                    <th>No</th>
                    <th>Bulan</th>
                    <th>Frekuensi</th>
                    <th>Probabilitas</th>
                    <th>Kumulatif</th>
                    <th>Interval</th>
                    <th>Angka Acak</th>
                    <th>Hasil Simulasi <?= $_SESSION['tahun_hasilLR'] ?>      
                  </th>
                  <th>Data Real <?= $_SESSION['tahun_data_realLR'] ?></th>
                  <th>Tingkat Akurasi</th>
                </tr>
              </thead>
              <tbody>
                <?php $no = 1; for ($i=0; $i < count($bulan) ; $i++) : ?>
                <tr class="text-center">
                  <td><?= $no++;  ?></td>
                  <td> <?= $bulan[$i] ?></td>
                  <td><?= $_SESSION['convert_hasil_frekLR'][$i]; ?></td>
                  <td><?= $_SESSION['convert_hasil_probLR'][$i] ?></td>
                  <td> <?= $_SESSION['convert_hasil_kumuLR'][$i]; ?></td>
                  <td><?= $_SESSION['convert_hasil_interLR'][$i] ?></td>
                  <td> <?= $_SESSION['convert_hasil_acakLR'][$i] ?></td>
                  <td> <?= $_SESSION['convert_hasil_LR'][$i] ?></td>
                  <td>  <?= $_SESSION['convert_hasil_datarealLR'][$i]; ?></td>
                  <td> <?= $_SESSION['convert_hasil_akurasiLR'][$i]; ?></td>  
                </tr>
              <?php endfor ?>
              <tr class="text-center">
                <td><?= $no++;  ?></td>
                <td>Total</td>
                <td><?= $_SESSION['total_hasil_frekLR']; ?></td>
                <td><?= $_SESSION['total_hasil_probLR']; ?></td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td><?= $_SESSION['total_hasil_simLR']; ?></td>
                <td><?= $_SESSION['total_data_realLR'];  ?></td>
                <td>-</td>  
              </tr>
              <tr class="text-center">
                <td><?= $no++;  ?></td>
                <td>Rata-rata</td>
                <td><?= $_SESSION['rata2_hasilfrekLR']; ?></td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td><?= $_SESSION['rata2_hasil_simLR']; ?></td>
                <td><?= $_SESSION['rata2_hasil_realLR']; ?></td>
                <td><?= $_SESSION['rata2_hasil_akurasiLR']; ?></td>     
              </tr>
            </tbody>
          </table>
   </div>
   <div class="modal-footer">
    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
  </div>
</div>
</div>
</div>



