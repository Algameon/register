<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="{{{ asset('favicon.png') }}}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- TITLE -->
    <title>{{ config('app.name', 'Register') }}</title>
    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!--Datatables and jquerry-->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>

    <!--X-editable-->
    <link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>
    <script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js"></script>

    <link href="{{asset('css/bootstrap-editable.css')}}" rel="stylesheet">
    <script src="{{asset('js/bootstrap-editable.js')}}"></script>
</head>

<body>
    @include('inc.navbar')
    <div class="container" id="app">

        @yield('content')
    </div>
    <br>
    <script>

    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip(); //To enable Bootstrap tooltips
    });
</script>
    <script>
        $(document).ready( function () {
            $('#table_id').DataTable({
                "bPaginate": false,
                "bLengthChange": false,
                "bFilter": true,
                "bInfo": false,
                "bAutoWidth": false }); //To enable the data tables TODO Maybe move away from main layout?
        } );
    </script>
</body>
</html>
