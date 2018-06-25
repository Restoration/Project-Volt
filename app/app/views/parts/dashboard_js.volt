<!-- jQuery 3 -->
{{ javascript_include('vendor/jquery/dist/jquery.min.js') }}
<!-- jQuery UI 1.11.4 -->
{{ javascript_include('vendor/jquery-ui/jquery-ui.min.js') }}
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
{{ javascript_include('vendor/bootstrap/dist/js/bootstrap.min.js') }}
<!-- Morris.js charts -->
{{ javascript_include('vendor/raphael/raphael.min.js') }}
{{ javascript_include('vendor/morris.js/morris.min.js') }}
<!-- Sparkline -->
{{ javascript_include('vendor/jquery-sparkline/dist/jquery.sparkline.min.js') }}
<!-- jvectormap -->
{{ javascript_include('plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}
{{ javascript_include('plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}
<!-- jQuery Knob Chart -->
{{ javascript_include('vendor/jquery-knob/dist/jquery.knob.min.js') }}
<!-- daterangepicker -->
{{ javascript_include('vendor/moment/min/moment.min.js') }}
{{ javascript_include('vendor/bootstrap-daterangepicker/daterangepicker.js') }}
<!-- datepicker -->
{{ javascript_include('vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}
<!-- Bootstrap WYSIHTML5 -->
{{ javascript_include('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}
<!-- Slimscroll -->
{{ javascript_include('vendor/jquery-slimscroll/jquery.slimscroll.min.js') }}
<!-- FastClick -->
{{ javascript_include('vendor/fastclick/lib/fastclick.js') }}

<!-- AdminLTE App -->
{{ javascript_include('js/adminlte.min.js') }}
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
{{ javascript_include('js/pages/dashboard.js') }}
<!-- AdminLTE for demo purposes -->
{{ javascript_include('js/demo.js') }}
