
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="{{asset('dashboard/img/logo-fav.png')}}">
    <title>{{ config('app.name') }} | @yield('title')</title>
    <link rel="stylesheet" type="text/css" href="{{asset('dashboard/lib/perfect-scrollbar/css/perfect-scrollbar.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('dashboard/lib/material-design-icons/css/material-design-iconic-font.min.css')}}"/><!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="{{asset('dashboard/css/style.css')}}" type="text/css"/>
</head>
<body style="background-image: url('../../assets/img/bg.jpg')" class="be-splash-screen">

@yield('content')

<script src="{{asset('dashboard/lib/jquery/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{asset('dashboard/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js')}}" type="text/javascript"></script>
<script src="{{asset('dashboard/js/main.js" type="text/javascript')}}"></script>
<script src="{{asset('dashboard/lib/bootstrap/dist/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function(){
        //initialize the javascript
        App.init();

    });
</script>
</body>
</html>



