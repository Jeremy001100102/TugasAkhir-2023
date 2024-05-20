<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js"></script> -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/chartjs-plugin-annotation/0.5.7/chartjs-plugin-annotation.min.js"></script> -->

<!-- Meningga Dunia -->
<div class="modal fade" id="grafikMD" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
<div class="modal fade" id="grafikLB" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
<div class="modal fade" id="grafikLR" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
  $tahun_data_hasilMD = $_SESSION['tahun_Prediksi_MD'];
  $max_sumbuY_MD = max($data_hasilMD) % 2 == 0 ? max($data_hasilMD) + 4 : max($data_hasilMD) + 3;    
  
  

?>


<script>

  let yHasilMD = <?=  json_encode($data_hasilMD); ?>;
  let max_sumbuyMD = <?= json_encode($max_sumbuY_MD); ?>;
  let tahun_hasilMD = <?= json_encode($tahun_data_hasilMD); ?>;
  
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
      }]
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
  $tahun_data_hasilLB = $_SESSION['tahun_Prediksi_LB'];
  $max_sumbuY_LB = max($data_hasilLB) % 2 == 0 ? max($data_hasilLB) + 4 : max($data_hasilLB) + 3;    
  
  

?>


<script>

  let yHasilLB = <?=  json_encode($data_hasilLB); ?>;
  let max_sumbuyLB = <?= json_encode($max_sumbuY_LB); ?>;
  let tahun_hasilLB = <?= json_encode($tahun_data_hasilLB); ?>;
  
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
      }]
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
  $tahun_data_hasilLR = $_SESSION['tahun_Prediksi_LR'];
  $max_sumbuY_LR = max($data_hasilLR) % 2 == 0 ? max($data_hasilLR) + 4 : max($data_hasilLR) + 3;    
  
  

?>


<script>

  let yHasilLR = <?=  json_encode($data_hasilLR); ?>;
  let max_sumbuyLR = <?= json_encode($max_sumbuY_LR); ?>;
  let tahun_hasilLR = <?= json_encode($tahun_data_hasilLR); ?>;
  
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
      }]
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