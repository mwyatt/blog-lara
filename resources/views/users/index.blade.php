@extends ('layout')
@section('content')

@foreach ($users as $user)
    
<div>
    <a href="{{action('UsersController@show', $user)}}">{{$user->name}}</a> - {{$user->created_at->diffForHumans()}}
</div>

@endforeach
