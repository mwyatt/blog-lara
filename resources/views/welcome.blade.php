@extends('layouts.app')

@section('content')

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
                    <a href="{{route('content', $project->slug)}}" class="project text-decoration-none d-block {{$project->slug}}">
                        <span class="project-title d-block">{{$project->title}}</span>
                        <span class="project-desc d-block">{{$project->shortDesc}}</span>
                    </a>
                </div>

                @endforeach

            </div>
            <div class="copy">
                <p>&copy; Martin Wyatt {{date('Y')}}</p>
            </div>
        </div>
    </div>
</div>

@endsection