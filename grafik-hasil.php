<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js"></script> -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/chartjs-plugin-annotation/0.5.7/chartjs-plugin-annotation.min.js"></script> -->

<!-- Meningga Dunia -->
<div class="modal fade" id="grafik_MD" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog modal-lg mw-100 w-75" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <div class="modal-title text-center w-100 fw-bold fs-4">Grafik Meninggal Dunia</div>
      <button class="close" type="button" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
      </button>
    </div>
    <div class="modal-body">
     <canvas id="grafikHasilMD" width="200" height="100"></canvas>
   </div>
   <div class="modal-footer">
    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
  </div>
</div>
</div>
</div>

<!-- Luka Berat -->
<div class="modal fade" id="grafik_LB" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog mw-100 w-75" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <div class="modal-title text-center w-100 fw-bold fs-4">Grafik Luka Berat</div>
      <button class="close" type="button" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
      </button>
    </div>
    <div class="modal-body">
     <canvas id="grafikHasilLB" width="200" height="100"></canvas>
   </div>
   <div class="modal-footer">
    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
  </div>
</div>
</div>
</div>

<!-- Luka Ringan -->
<div class="modal fade" id="grafik_LR" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog mw-100 w-75" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <div class="modal-title text-center w-100 fw-bold fs-4">Grafik Luka Ringan</div>
      <button class="close" type="button" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
      </button>
    </div>
    <div class="modal-body">
     <canvas id="grafikHasilLR" width="200" height="100"></canvas>
   </div>
   <div class="modal-footer">
    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
  </div>
</div>
</div>
</div>





  


<?php
if (isset($_SESSION['hasilS_MD']))  :
  

  $data_hasilMD = array_values($_SESSION['hasilS_MD']);
  $data_realMD =  array_values($_SESSION['frek_MD']);
  $tahun_data_realMD = $_SESSION['tahun_uji_MD'];
  $tahun_data_hasilMD = $_SESSION['tahun_uji_MD'];
  $nilaiMax_MD = max($data_hasilMD) >= max($data_realMD) ?(int) max($data_hasilMD) : (int) max($data_realMD);
  $max_sumbuY_MD = $nilaiMax_MD % 2 == 0 ? $nilaiMax_MD + 4 : $nilaiMax_MD + 3;    
  

?>


<script>

  let yHasilMD = <?=  json_encode($data_hasilMD); ?>;
  let yRealMD = <?=   json_encode($data_realMD); ?>;
  let max_sumbuyMD = <?= json_encode($max_sumbuY_MD); ?>;
  let tahun_hasilMD = <?= json_encode($tahun_data_hasilMD); ?>;
  let tahun_realMD = <?= json_encode($tahun_data_realMD); ?>;
 console.log(yHasilMD);
  const xValuesMD = ["Januari","Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"]; 

  const ctxMD = document.getElementById('grafikHasilMD').getContext("2d");
  const chartMD = new Chart(ctxMD, {
    type: 'bar', 
    data: {
      labels: xValuesMD,
      datasets: [{
        label:'Data Hasil Simulasi ' + tahun_hasilMD,
        data: yHasilMD,
        borderColor: 'white',
        backgroundColor: 'rgba(21, 60, 200, 0.59)',
        borderWidth: 1
      },
      {
        label:'Data Real ' + tahun_realMD,
        data: yRealMD,
        borderColor: 'white',
        backgroundColor: 'rgba(72, 226, 146, 0.68)',
        borderWidth: 1
      }
      ]
    },
    options: {
      responsive: true ,
      scales: {
        yAxes: [{
          display: true,
          ticks: {
            beginAtZero: true,
            min: 0
          }
        }],
        xAxes: [{
         id: 'x-axis-1'

       }]
      }
     //  annotation: {
     //    drawTime: "afterDraw",
     //    annotations: [{
     //     id: 'box1',
     //     type: 'box',
     //     xScaleID: 'x-axis-1',
     //     xMin: '',
     //     xMax: 'Januari',
     //     backgroundColor: 'rgba(75, 192, 192, 0.2)',
     //     borderColor: 'rgba(100, 100, 100, 0.2)',
     //     content: ['Musim Hujan'],
     //     font: {
     //      size: 18
     //    }
     //  },
     //  {
     //   id: 'box2',
     //   type: 'box',
     //   xScaleID: 'x-axis-1',
     //   xMin: 'Januari',
     //   xMax: 'Mei',
     //   backgroundColor: 'rgba(75, 192, 192, 0.2)',
     //   borderColor: 'rgba(100, 100, 100, 0.2)'
     // },
     // {
     //   id: 'box3',
     //   type: 'box',
     //   xScaleID: 'x-axis-1',
     //   xMin: 'Mei',
     //   xMax: 'November',
     //   backgroundColor:  'rgba(255, 99, 132, 0.2)',
     //   borderColor: 'rgba(100, 100, 100, 0.2)'
     // },
     // {
     //   id: 'box5',
     //   type: 'box',
     //   xScaleID: 'x-axis-1',
     //   xMin: 'November',
     //   xMax: 'Desember',
     //   backgroundColor: 'rgba(75, 192, 192, 0.2)',
     //   borderColor: 'rgba(100, 100, 100, 0.2)'
     // },
     // {
     //   id: 'box6',
     //   type: 'box',
     //   xScaleID: 'x-axis-1',
     //   xMin: 'Desember',
     //   xMax: '',
     //   backgroundColor: 'rgba(75, 192, 192, 0.2)',
     //   borderColor: 'rgba(100, 100, 100, 0.2)'
     // }
     // ]
      // }      
    }
  });
</script>
<?php endif ?>


<?php
if (isset($_SESSION['hasilS_LB']))  :
  

  $data_hasilLB = array_values($_SESSION['hasilS_LB']);
  $data_realLB =  array_values($_SESSION['frek_LB']);
  $tahun_data_realLB = $_SESSION['tahun_uji_LB'];
  $tahun_data_hasilLB = $_SESSION['tahun_uji_LB'];
  $nilaiMax_LB = max($data_hasilLB) >= max($data_realLB) ?(int) max($data_hasilLB) : (int) max($data_realLB);
  $max_sumbuY_LB = $nilaiMax_LB % 2 == 0 ? $nilaiMax_LB + 4 : $nilaiMax_LB + 3;    
  

?>


<script>

  let yHasilLB = <?=  json_encode($data_hasilLB); ?>;
  let yRealLB = <?=   json_encode($data_realLB); ?>;
  let max_sumbuyLB = <?= json_encode($max_sumbuY_LB); ?>;
  let tahun_hasilLB = <?= json_encode($tahun_data_hasilLB); ?>;
  let tahun_realLB = <?= json_encode($tahun_data_realLB); ?>;
 console.log(yHasilLB);
  const xValuesLB = ["Januari","Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"]; 

  const ctxLB = document.getElementById('grafikHasilLB').getContext("2d");
  const chartLB = new Chart(ctxLB, {
    type: 'bar', 
    data: {
      labels: xValuesLB,
      datasets: [{
        label:'Data Hasil Simulasi ' + tahun_hasilLB,
        data: yHasilLB,
        borderColor: 'white',
        backgroundColor: 'rgba(21, 60, 200, 0.59)',
        borderWidth: 1
      },
      {
        label:'Data Real ' + tahun_realLB,
        data: yRealLB,
        borderColor: 'white',
        backgroundColor: 'rgba(72, 226, 146, 0.68)',
        borderWidth: 1
      }
      ]
    },
    options: {
      responsive: true ,
      scales: {
        yAxes: [{
          display: true,
          ticks: {
            beginAtZero: true,
            min: 0
          }
        }],
        xAxes: [{
         id: 'x-axis-1'

       }]
      }
     //  annotation: {
     //    drawTime: "afterDraw",
     //    annotations: [{
     //     id: 'box1',
     //     type: 'box',
     //     xScaleID: 'x-axis-1',
     //     xMin: '',
     //     xMax: 'Januari',
     //     backgroundColor: 'rgba(75, 192, 192, 0.2)',
     //     borderColor: 'rgba(100, 100, 100, 0.2)',
     //     content: ['Musim Hujan'],
     //     font: {
     //      size: 18
     //    }
     //  },
     //  {
     //   id: 'box2',
     //   type: 'box',
     //   xScaleID: 'x-axis-1',
     //   xMin: 'Januari',
     //   xMax: 'Mei',
     //   backgroundColor: 'rgba(75, 192, 192, 0.2)',
     //   borderColor: 'rgba(100, 100, 100, 0.2)'
     // },
     // {
     //   id: 'box3',
     //   type: 'box',
     //   xScaleID: 'x-axis-1',
     //   xMin: 'Mei',
     //   xMax: 'November',
     //   backgroundColor:  'rgba(255, 99, 132, 0.2)',
     //   borderColor: 'rgba(100, 100, 100, 0.2)'
     // },
     // {
     //   id: 'box5',
     //   type: 'box',
     //   xScaleID: 'x-axis-1',
     //   xMin: 'November',
     //   xMax: 'Desember',
     //   backgroundColor: 'rgba(75, 192, 192, 0.2)',
     //   borderColor: 'rgba(100, 100, 100, 0.2)'
     // },
     // {
     //   id: 'box6',
     //   type: 'box',
     //   xScaleID: 'x-axis-1',
     //   xMin: 'Desember',
     //   xMax: '',
     //   backgroundColor: 'rgba(75, 192, 192, 0.2)',
     //   borderColor: 'rgba(100, 100, 100, 0.2)'
     // }
     // ]
      // }      
    }
  });
</script>
<?php endif ?>


<?php
if (isset($_SESSION['hasilS_LR']))  :
  

  $data_hasilLR = array_values($_SESSION['hasilS_LR']);
  $data_realLR =  array_values($_SESSION['frek_LR']);
  $tahun_data_realLR = $_SESSION['tahun_uji_LR'];
  $tahun_data_hasilLR = $_SESSION['tahun_uji_LR'];
  $nilaiMax_LR = max($data_hasilLR) >= max($data_realLR) ?(int) max($data_hasilLR) : (int) max($data_realLR);
  $max_sumbuY_LR = $nilaiMax_LR % 2 == 0 ? $nilaiMax_LR + 4 : $nilaiMax_LR + 3;    
  

?>


<script>

  let yHasilLR = <?=  json_encode($data_hasilLR); ?>;
  let yRealLR = <?=   json_encode($data_realLR); ?>;
  let max_sumbuyLR = <?= json_encode($max_sumbuY_LR); ?>;
  let tahun_hasilLR = <?= json_encode($tahun_data_hasilLR); ?>;
  let tahun_realLR = <?= json_encode($tahun_data_realLR); ?>;
 console.log(yHasilLR);
  const xValuesLR = ["Januari","Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"]; 

  const ctxLR = document.getElementById('grafikHasilLR').getContext("2d");
  const chartLR = new Chart(ctxLR, {
    type: 'bar', 
    data: {
      labels: xValuesLR,
      datasets: [{
        label:'Data Hasil Simulasi ' + tahun_hasilLR,
        data: yHasilLR,
        borderColor: 'white',
        backgroundColor: 'rgba(21, 60, 200, 0.59)',
        borderWidth: 1
      },
      {
        label:'Data Real ' + tahun_realLR,
        data: yRealLR,
        borderColor: 'white',
        backgroundColor: 'rgba(72, 226, 146, 0.68)',
        borderWidth: 1
      }
      ]
    },
    options: {
      responsive: true ,
      scales: {
        yAxes: [{
          display: true,
          ticks: {
            beginAtZero: true,
            min: 0
          }
        }],
        xAxes: [{
         id: 'x-axis-1'

       }]
      }
     //  annotation: {
     //    drawTime: "afterDraw",
     //    annotations: [{
     //     id: 'box1',
     //     type: 'box',
     //     xScaleID: 'x-axis-1',
     //     xMin: '',
     //     xMax: 'Januari',
     //     backgroundColor: 'rgba(75, 192, 192, 0.2)',
     //     borderColor: 'rgba(100, 100, 100, 0.2)',
     //     content: ['Musim Hujan'],
     //     font: {
     //      size: 18
     //    }
     //  },
     //  {
     //   id: 'box2',
     //   type: 'box',
     //   xScaleID: 'x-axis-1',
     //   xMin: 'Januari',
     //   xMax: 'Mei',
     //   backgroundColor: 'rgba(75, 192, 192, 0.2)',
     //   borderColor: 'rgba(100, 100, 100, 0.2)'
     // },
     // {
     //   id: 'box3',
     //   type: 'box',
     //   xScaleID: 'x-axis-1',
     //   xMin: 'Mei',
     //   xMax: 'November',
     //   backgroundColor:  'rgba(255, 99, 132, 0.2)',
     //   borderColor: 'rgba(100, 100, 100, 0.2)'
     // },
     // {
     //   id: 'box5',
     //   type: 'box',
     //   xScaleID: 'x-axis-1',
     //   xMin: 'November',
     //   xMax: 'Desember',
     //   backgroundColor: 'rgba(75, 192, 192, 0.2)',
     //   borderColor: 'rgba(100, 100, 100, 0.2)'
     // },
     // {
     //   id: 'box6',
     //   type: 'box',
     //   xScaleID: 'x-axis-1',
     //   xMin: 'Desember',
     //   xMax: '',
     //   backgroundColor: 'rgba(75, 192, 192, 0.2)',
     //   borderColor: 'rgba(100, 100, 100, 0.2)'
     // }
     // ]
      // }      
    }
  });
</script>
<?php endif ?>