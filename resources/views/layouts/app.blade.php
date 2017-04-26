<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Go Rewards</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    {!! Html::style('public/bootstrap/css/bootstrap.min.css') !!}
    {!! Html::style('public/css/dataTables.bootstrap.min.css') !!}
  </head>
  <body>
    @include('include.navbar')
    <div class="container">
        @yield('content')
    </div>
    {!! Html::script('public/js/jquery.min.js') !!}
    {!! Html::script('public/bootstrap/js/bootstrap.min.js') !!}
    {!! Html::script('public/js/jquery.dataTables.min.js') !!}
    {!! Html::script('public/js/dataTables.bootstrap.min.js') !!}
    <script type="text/javascript">
      $(document).ready(function() {
        $('.datatables').DataTable();
      });
    </script>
  </body>
</html>