<!DOCTYPE html>
<html>
<head>
    <title>My Application</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="container">
    
@yield('content')

</div>
<script type="text/javascript" src="{{URL::asset('js/app.js')}}"></script>
</body>
</html>
 