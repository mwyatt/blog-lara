@extends('layouts.app')

@section('content')

<a href="{{route('content', $content->slug)}}" class="content text-decoration-none d-block {{$content->slug}}">
    <span class="content-title d-block">{{$content->title}}</span>
    <span class="content-desc d-block">{{$content->shortDesc}}</span>
</a>


@endsection
