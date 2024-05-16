 
</div>
</div>
<!-- /.container-fluid -->

<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Jeremy Bessiesura 2023</span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>


<!-- Bootstrap core JavaScript-->

<script src="./vendor/jquery/jquery.min.js"></script>
<script src="./vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="./vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="./js/sb-admin-2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<!-- <script src="./bootstrap-5.2.3/dist/js/bootstrap.js"></script> -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/chartjs-plugin-annotation/0.5.7/chartjs-plugin-annotation.min.js"></script>

</body>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<script>    

 var hash = window.location.hash;
        if(hash){
            $(hash).collapse('show');
        }
        window.onload = function() {
            var bookmarks = window.location.hash.split('#');

            for (var i = 1; i < bookmarks.length; i++) {
                var bookmark = bookmarks[i];

            // Buka collapse dengan menggunakan identifikasi bookmark
                var collapse = document.getElementById(bookmark);
                if (collapse) {
                    collapse.classList.add('show');
                }
            }
        };


        $('.icon').click(function() {
            $(this).find('i').toggleClass('fa-solid fa-caret-down fa-solid fa-caret-up')
        });

</script>








</body>

</html>