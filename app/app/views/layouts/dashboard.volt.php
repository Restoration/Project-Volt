<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
<?= $this->tag->stylesheetLink('vendor/bootstrap/dist/css/bootstrap.min.css') ?>
<!-- Font Awesome -->
<?= $this->tag->stylesheetLink('vendor/font-awesome/css/font-awesome.min.css') ?>
<!-- Ionicons -->
<?= $this->tag->stylesheetLink('vendor/Ionicons/css/ionicons.min.css') ?>
<!-- Theme style -->
<?= $this->tag->stylesheetLink('css/AdminLTE.min.css') ?>
<!-- AdminLTE Skins. Choose a skin from the css/skins
     folder instead of downloading all of them to reduce the load. -->
<?= $this->tag->stylesheetLink('css/skins/_all-skins.min.css') ?>
<!-- Morris chart -->
<?= $this->tag->stylesheetLink('vendor/morris.js/morris.css') ?>
<!-- jvectormap -->
<?= $this->tag->stylesheetLink('vendor/jvectormap/jquery-jvectormap.css') ?>
<!-- Date Picker -->
<?= $this->tag->stylesheetLink('vendor/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') ?>
<!-- Daterange picker -->
<?= $this->tag->stylesheetLink('vendor/bootstrap-daterangepicker/daterangepicker.css') ?>
<!-- bootstrap wysihtml5 - text editor -->
<?= $this->tag->stylesheetLink('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') ?>

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<!-- Google Font -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

</head>
<body class="hold-transition skin-blue sidebar-mini">

<?= $this->getContent() ?>

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

</body>
</html>
