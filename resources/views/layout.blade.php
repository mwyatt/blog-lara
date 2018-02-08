<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>{{$metaTitle}}</title>

@if ($metaKeywords)
    
<meta name="keywords" content="{{$metaKeywords}}">

@endif
@if ($metaDescription)
    
<meta name="description" content="{{$metaDescription}}">

@endif

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

{{-- <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'> --}}
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<link rel="icon" type="image/png" href="asset/favicon.png">

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', '{{$googleAnalyticsTrackingId}}', 'auto');
  ga('send', 'pageview');

</script>

</head>
<body>
    <!--[if lt IE 7]>
        <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
    <![endif]-->
    <!-- 
         _   _  _ _ _ 
        | \_/ || | | |
        | \_/ || V V |
        |_| |_| \_n_/ 

        Welcome fellow developers!

     -->

{{asset('storage/test.txt')}}

<div id="top"></div>
<a href="#top" class="to-top js-smooth-scroll"><span class="to-top-image">@svg('arrow-up', 'Arrow up')</span></a>
<div class="site-wrap site-max-width">
    <header class="header header-bar js-header">
        <div class="header-bar-inner site-max-width clearfix">   
        <div class="header-logo-container">
            <a href="" class="header-logo">@svg('logo', 'Logo')</a>
        </div>

@if (isset($menuPrimary))

        <div class="menu-primary-container js-toggle-menu">
            <span class="menu-toggle js-menu-toggle"><span class="middle"></span></span>
            <nav class="menu-primary js-menu-primary">

    @foreach ($menuPrimary as $menuItem)
        
                <a href="{{$menuItem->url}}" class="menu-primary-item <?php echo empty($menuItem->classes) ? ''  : implode(' ', $menuItem->classes) ?>" <?php echo empty($menuItem->target) ? '' : 'target="' . $menuItem->target . '"' ?>><?php echo $menuItem->name ?></a>

    @endforeach

            </nav>
        </div>

@endif

        </div>
    </header>
    <div class="page-container">











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
