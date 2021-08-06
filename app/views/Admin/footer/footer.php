</div>
<!--/. container-fluid -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->

<!-- Main Footer -->
<footer class="main-footer">
    <strong>Copyright &copy; 2014-2020 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.1.0-rc
    </div>
</footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<!-- <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script> -->

<!-- <script src="<?= BASEURL, PORT, LOCATION ?>/plugins/jquery/jquery.min.js"></script> -->

<script src="<?= BASEURL, PORT, LOCATION ?>/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>

<!-- Bootstrap -->
<script src="<?= BASEURL, PORT, LOCATION ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?= BASEURL, PORT, LOCATION ?>/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= BASEURL, PORT, LOCATION ?>/dist/js/adminlte.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->

<script src="<?= BASEURL, PORT, LOCATION ?>/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="<?= BASEURL, PORT, LOCATION ?>/plugins/raphael/raphael.min.js"></script>
<script src="<?= BASEURL, PORT, LOCATION ?>/plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="<?= BASEURL, PORT, LOCATION ?>/plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="<?= BASEURL, PORT, LOCATION ?>/plugins/chart.js/Chart.min.js"></script>

<!-- AdminLTE for demo purposes -->
<script src="<?= BASEURL, PORT, LOCATION ?>/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!-- <script src="<?= BASEURL, PORT, LOCATION ?>/dist/js/pages/dashboard2.js"></script> -->
<script src="<?= BASEURL, PORT, LOCATION ?>/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= BASEURL, PORT, LOCATION ?>/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= BASEURL, PORT, LOCATION ?>/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= BASEURL, PORT, LOCATION ?>/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?= BASEURL, PORT, LOCATION ?>/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= BASEURL, PORT, LOCATION ?>/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?= BASEURL, PORT, LOCATION ?>/plugins/jszip/jszip.min.js"></script>
<script src="<?= BASEURL, PORT, LOCATION ?>/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?= BASEURL, PORT, LOCATION ?>/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?= BASEURL, PORT, LOCATION ?>/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?= BASEURL, PORT, LOCATION ?>/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?= BASEURL, PORT, LOCATION ?>/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script>
    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
</script>
<script>
    $(function() {
        bsCustomFileInput.init();
    });
</script>
</body>

</html>