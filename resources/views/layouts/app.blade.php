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
    {!! Html::style('public/css/buttons.bootstrap.min.css') !!}
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
    {!! Html::script('public/js/dataTables.buttons.min.js') !!}
    {!! Html::script('public/js/buttons.bootstrap.min.js') !!}
    {!! Html::script('public/js/jszip.min.js') !!}
    {!! Html::script('public/js/pdfmake.min.js') !!}
    {!! Html::script('public/js/vfs_fonts.js') !!}
    {!! Html::script('public/js/buttons.html5.min.js') !!}
    {!! Html::script('public/js/buttons.print.min.js') !!}
    {!! Html::script('public/js/buttons.colVis.min.js') !!}
    <script type="text/javascript">
      $(document).ready(function() {
        var table = $('#datatable').DataTable(
        {
          lengthChange: false,
          buttons: [ 'copy', 'excel', 'pdf', 'colvis' ]
      });
        table.buttons().container()
        .appendTo('#datatable_wrapper .col-sm-6:eq(0)' );

        });
    </script>
  </body>
</html>