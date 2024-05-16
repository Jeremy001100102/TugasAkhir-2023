
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





<?php

if (isset($_SESSION['grafik_hasil_LB'])) {
  $data_hasilLB = $_SESSION['grafik_hasil_LB'];
  $data_realLB =  $_SESSION['grafik_hasil_datarealLB'];
  $tahun_data_realLB = $_SESSION['grafik_tahun_data_realLB'];
  $tahun_data_hasilLB = $_SESSION['grafik_tahun_hasilLB'];
  $nilaiMax_LB = max($data_hasilLB) >= max($data_realLB) ?(int) max($data_hasilLB) : (int) max($data_realLB);
  $max_sumbuY_LB = $nilaiMax_LB % 2 == 0 ? $nilaiMax_LB + 4 : $nilaiMax_LB + 3;    

}


?>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script> -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js"></script> -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/chartjs-plugin-annotation/0.5.7/chartjs-plugin-annotation.min.js"></script> -->

<?php if (isset($_SESSION['grafik_hasil_LB'])) : ?>
<script>

  let yHasilLB = <?=  json_encode($data_hasilLB); ?>;
  let yRealLB = <?=   json_encode($data_realLB); ?>;
  let max_sumbuyLB = <?= json_encode($max_sumbuY_LB); ?>;
  let tahun_hasilLB = <?= json_encode($tahun_data_hasilLB); ?>;
  let tahun_realLB = <?= json_encode($tahun_data_realLB); ?>;
  const xValuesLB = ["Januari","Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"]; 

  const ctxLB = document.getElementById('grafikHasilLB').getContext("2d");
  const chart = new Chart(ctxLB, {
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
            max: max_sumbuyLB,
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
<?php   endif; ?>