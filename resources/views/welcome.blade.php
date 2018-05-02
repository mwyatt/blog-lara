<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    {{-- <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"> --}}
    <link href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800" rel="stylesheet" rel="preload">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet">
    <title>Martin Wyatt</title>
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <div class="feature">
        <div class="feature-mask">
            <div class="menu text-center pt-4">
                <div class="menu-item is-active d-inline-block pl-3 pr-3"><a href="{{route('index')}}" class="menu-item-link pb-1">Projects</a></div>
                <div class="menu-item d-inline-block pl-3 pr-3"><a href="#" class="menu-item-link pb-1">Writing</a></div>
                <div class="menu-item d-inline-block pl-3 pr-3"><a href="#" class="menu-item-link pb-1">Contact</a></div>
            </div>
            <div class="d-table feature-body">
                <div class="d-table-cell text-center">
                    <a href="#" class="logo">@svg('svg/logo.svg', 'Where name?')</a>
                    <div class="feature-name">Martin Wyatt</div>
                    <div class="feature-role">Designer &amp; Developer</div>
                </div>
            </div>
        </div>
    </div>

    <div class="">
        <div class="row no-gutters">
            <div class="col-lg-4"></div>
            <div class="col">
                <div class="row no-gutters">

                    @foreach ($projects as $project)

                    <div class="col-sm-6">
                    <a href="/project" class="project text-decoration-none d-block {{$project->classes}}">
                            <span class="project-title d-block">{{$project->name}}</span>
                            <span class="project-desc d-block">{{$project->shortDesc}}</span>
                        </a>
                    </div>

                    @endforeach

                </div>
                <div class="copy">
                    <p>&copy; Martin Wyatt <?php echo date('Y') ?></p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
