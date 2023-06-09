<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)

</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js">
</script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js">
</script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>

<!-- jQuery -->


<!-- Bootstrap 4 -->
<!-- DataTables  & Plugins -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js">
</script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js">
</script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js">
</script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js">
</script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js">
</script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- Page specific script -->
<script>
    $(function () {
        bsCustomFileInput.init();
    });

</script>
@yield('datatables')

<script>
    function save() {
        Swal.fire({
            position: 'center',
            icon: 'success',
            title: 'Data Berhasil Disimpan',
            showConfirmButton: false,
            timer: 1500
        })
    }

    function updatesuccess() {
        Swal.fire({
            position: 'center',
            icon: 'success',
            title: 'Data Berhasil Diedit',
            showConfirmButton: false,
            timer: 1500
        })
    }

    function inputalert() {
        Swal.fire({
            position: 'center',
            icon: 'warning',
            title: 'Isi Form Dengan Benar',
            showConfirmButton: false,
            timer: 1500
        })
    }

    function notfound() {
        Swal.fire({
            position: 'center',
            icon: 'error',
            title: 'Not Found',
            showConfirmButton: false,
            timer: 1500
        })
    }

    function deletesuccess() {
        Swal.fire({
            position: 'center',
            icon: 'success',
            title: 'Data Berhasil Dihapus',
            showConfirmButton: false,
            timer: 1500
        })
    }

    function rupiah(value){
        formatRupiah(value ,'Rp.');
    }
        // var rupiah = $('#harga').keyup();
        // alert(rupiah.value);
        // dengan_rupiah.value = formatRupiah(this.value, 'Rp. ');
    
    



</script>
{{-- <script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
  });
</script> --}}

