<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="{{ asset('adminlte') }}/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="{{ asset('adminlte') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('adminlte') }}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="{{ asset('adminlte') }}/dist/js/adminlte.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="{{ asset('adminlte') }}/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="{{ asset('adminlte') }}/plugins/raphael/raphael.min.js"></script>
<script src="{{ asset('adminlte') }}/plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="{{ asset('adminlte') }}/plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="{{ asset('adminlte') }}/plugins/chart.js/Chart.min.js"></script>
<!-- Toastr -->
<script src="{{ asset('adminlte') }}/plugins/toastr/toastr.min.js"></script>

<script type="text/javascript" src="{{ asset('DataTables/datatables.min.js') }}"></script>

<!-- AdminLTE for demo purposes -->
{{-- <script src="{{ asset('adminlte') }}/dist/js/demo.js"></script> --}}
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
{{-- <script src="{{ asset('adminlte') }}/dist/js/pages/dashboard2.js"></script> --}}

<script src="{{ asset('js/sweetalert.min.js') }}"></script>

<script type="text/javascript">
    $(function() {


        $(document).ready(function() {
            var flash = "{{ Session::has('sukses') }}";
            if (flash) {
                var pesan = "{{ Session::get('sukses') }}"
                toastr.success("{{ Session::get('sukses') }}")
            }
            var gagal = "{{ Session::has('gagal') }}";
            if (gagal) {
                var pesan = "{{ Session::get('gagal') }}"
                toastr.error("{{ Session::get('gagal') }}")
            }
            var info = "{{ Session::has('info') }}";
            if (info) {
                var pesan = "{{ Session::get('info') }}"
                toastr.info("{{ Session::get('info') }}")
            }
            var peringatan = "{{ Session::has('peringatan') }}";
            if (peringatan) {
                var pesan = "{{ Session::get('peringatan') }}"
                toastr.warning("{{ Session::get('peringatan') }}")
            }

            // btn hapus di klik
            $('body').on('click', '.btn-hapus', function(e) {
                e.preventDefault();
                var url = $(this).attr('href');
                $('#modal-hapus').find('form').attr('action', url);
                $('#modal-hapus').modal();
            });

        });
    })
</script>
