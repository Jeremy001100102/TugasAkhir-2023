
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

if (isset($_SESSION['grafik_hasil_LR'])) {
 $data_hasilLR = $_SESSION['grafik_hasil_LR'];
 $data_realLR =  $_SESSION['grafik_hasil_datarealLR'];
 $tahun_data_realLR = $_SESSION['grafik_tahun_data_realLR'];
 $tahun_data_hasilLR = $_SESSION['grafik_tahun_hasilLR'];
 $nilaiMax_LR = max($data_hasilLR) >= max($data_realLR) ?(int) max($data_hasilLR) : (int) max($data_realLR);
 $max_sumbuY_LR = $nilaiMax_LR % 2 == 0 ? $nilaiMax_LR + 4 : $nilaiMax_LR + 3; 
}    


?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/chartjs-plugin-annotation/0.5.7/chartjs-plugin-annotation.min.js"></script>

<?php if (isset($_SESSION['grafik_hasil_LR'])) : ?>
<script>

  let yHasilLR = <?=  json_encode($data_hasilLR); ?>;
  let yRealLR = <?=   json_encode($data_realLR); ?>;
  let max_sumbuyLR = <?= json_encode($max_sumbuY_LR); ?>;
  let tahun_hasilLR = <?= json_encode($tahun_data_hasilLR); ?>;
  let tahun_realLR = <?= json_encode($tahun_data_realLR); ?>;
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
            max: max_sumbuyLR,
            min: 0
          }
        }],
        xAxes: [{
         id: 'x-axis-1'

       }]
      },
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
     //  }      
    }
  });
</script>

<?php endif; ?>