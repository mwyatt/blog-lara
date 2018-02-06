<!DOCTYPE html>
<html>
<head>
    <title></title>
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> --}}
    <!-- 
         _   _  _ _ _ 
        | \_/ || | | |
        | \_/ || V V |
        |_| |_| \_n_/ 
        Welcome fellow developers!
    -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
</head>
<body>
    <div class="container">
        
        @yield('content')

    </div>
    <script type="text/javascript" src="{{URL::asset('js/app.js')}}"></script>
</body>
</html>
