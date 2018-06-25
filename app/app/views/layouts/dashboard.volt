<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  {% include 'parts/dashboard_css.volt' %}
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    {% include 'parts/main_header.volt' %}

    <!-- Left side column. contains the logo and sidebar -->
    {% include 'parts/main_sidebar.volt' %}

    {{ content() }}

    {% include 'parts/main_footer.volt' %}

    {% include 'parts/control_sidebar.volt' %}

</div>
<!-- ./wrapper -->
{% include 'parts/dashboard_js.volt' %}
</body>
</html>
