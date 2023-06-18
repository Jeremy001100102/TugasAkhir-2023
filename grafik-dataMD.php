
<div class="modal fade" id="grafikMD" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog mw-100 w-75" role="document">
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





<?php
if (isset($_SESSION['grafik_hasil_MD'])) {

  $data_hasilMD = $_SESSION['grafik_hasil_MD'];
  $data_realMD =  $_SESSION['grafik_hasil_datarealMD'];
  $tahun_data_realMD = $_SESSION['grafik_tahun_data_realMD'];
  $tahun_data_hasilMD = $_SESSION['grafik_tahun_hasilMD'];
  $nilaiMax_MD = max($data_hasilMD) >= max($data_realMD) ?(int) max($data_hasilMD) : (int) max($data_realMD);
  $max_sumbuY_MD = $nilaiMax_MD % 2 == 0 ? $nilaiMax_MD + 4 : $nilaiMax_MD + 3;    
  
}


?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/chartjs-plugin-annotation/0.5.7/chartjs-plugin-annotation.min.js"></script>

<?php if (isset($_SESSION['grafik_hasil_MD'])) : ?>
<script>
  let yHasilMD = <?=  json_encode($data_hasilMD); ?>;
  let yRealMD = <?=   json_encode($data_realMD); ?>;
  let max_sumbuyMD = <?= json_encode($max_sumbuY_MD); ?>;
  let tahun_hasilMD = <?= json_encode($tahun_data_hasilMD); ?>;
  let tahun_realMD = <?= json_encode($tahun_data_realMD); ?>;
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
            max: max_sumbuyMD,
            min: 0
          }
        }],
        xAxes: [{
         id: 'x-axis-1'

       }]
      },
      annotation: {
        drawTime: "afterDraw",
        annotations: [{
         id: 'box1',
         type: 'box',
         xScaleID: 'x-axis-1',
         xMin: '',
         xMax: 'Januari',
         backgroundColor: 'rgba(75, 192, 192, 0.2)',
         borderColor: 'rgba(100, 100, 100, 0.2)',
         content: ['Musim Hujan'],
         font: {
          size: 18
        }
      },
      {
       id: 'box2',
       type: 'box',
       xScaleID: 'x-axis-1',
       xMin: 'Januari',
       xMax: 'Mei',
       backgroundColor: 'rgba(75, 192, 192, 0.2)',
       borderColor: 'rgba(100, 100, 100, 0.2)'
     },
     {
       id: 'box3',
       type: 'box',
       xScaleID: 'x-axis-1',
       xMin: 'Mei',
       xMax: 'November',
       backgroundColor:  'rgba(255, 99, 132, 0.2)',
       borderColor: 'rgba(100, 100, 100, 0.2)'
     },
     {
       id: 'box5',
       type: 'box',
       xScaleID: 'x-axis-1',
       xMin: 'November',
       xMax: 'Desember',
       backgroundColor: 'rgba(75, 192, 192, 0.2)',
       borderColor: 'rgba(100, 100, 100, 0.2)'
     },
     {
       id: 'box6',
       type: 'box',
       xScaleID: 'x-axis-1',
       xMin: 'Desember',
       xMax: '',
       backgroundColor: 'rgba(75, 192, 192, 0.2)',
       borderColor: 'rgba(100, 100, 100, 0.2)'
     }
     ]
      }      
    }
  });
</script>
<?php   endif; ?>