<!-- jQuery 3 -->
<?= $this->tag->javascriptInclude('vendor/jquery/dist/jquery.min.js') ?>
<!-- jQuery UI 1.11.4 -->
<?= $this->tag->javascriptInclude('vendor/jquery-ui/jquery-ui.min.js') ?>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<?= $this->tag->javascriptInclude('vendor/bootstrap/dist/js/bootstrap.min.js') ?>
<!-- Morris.js charts -->
<?= $this->tag->javascriptInclude('vendor/raphael/raphael.min.js') ?>
<?= $this->tag->javascriptInclude('vendor/morris.js/morris.min.js') ?>
<!-- Sparkline -->
<?= $this->tag->javascriptInclude('vendor/jquery-sparkline/dist/jquery.sparkline.min.js') ?>
<!-- jvectormap -->
<?= $this->tag->javascriptInclude('plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') ?>
<?= $this->tag->javascriptInclude('plugins/jvectormap/jquery-jvectormap-world-mill-en.js') ?>
<!-- jQuery Knob Chart -->
<?= $this->tag->javascriptInclude('vendor/jquery-knob/dist/jquery.knob.min.js') ?>
<!-- daterangepicker -->
<?= $this->tag->javascriptInclude('vendor/moment/min/moment.min.js') ?>
<?= $this->tag->javascriptInclude('vendor/bootstrap-daterangepicker/daterangepicker.js') ?>
<!-- datepicker -->
<?= $this->tag->javascriptInclude('vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') ?>
<!-- Bootstrap WYSIHTML5 -->
<?= $this->tag->javascriptInclude('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') ?>
<!-- Slimscroll -->
<?= $this->tag->javascriptInclude('vendor/jquery-slimscroll/jquery.slimscroll.min.js') ?>
<!-- FastClick -->
<?= $this->tag->javascriptInclude('vendor/fastclick/lib/fastclick.js') ?>

<!-- AdminLTE App -->
<?= $this->tag->javascriptInclude('js/adminlte.min.js') ?>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<?= $this->tag->javascriptInclude('js/pages/dashboard.js') ?>
<!-- AdminLTE for demo purposes -->
<?= $this->tag->javascriptInclude('js/demo.js') ?>
