<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="{{asset('assets/plugins/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="{{asset('assets/dist/css/adminlte.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}">
    @yield('style')
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        
            <section class="content mt-5">
                <div class="container">
                @yield('content')
                
            </section>
        </div>
        
    </div>


    <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/dist/js/adminlte.js') }}"></script>
    <script src="{{ asset('assets/plugins/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('assets/dist/js/demo.js') }}"></script>
    @yield('script')

</body>

</html>