@extends ('layout')
@section('content')

<form method="post" action="{{action('UsersController@store')}}">
    {{csrf_field()}}
    <input type="hidden" name="id" value="{{$user->id}}">

    @include('errors')

    <div class="form-group">
        <input type="text" class="form-control" name="name" value="{{old('name')}}{{$user->name}}" placeholder="Name">
    </div>
    <div class="form-group">
        <input type="text" class="form-control" name="email" value="{{old('email')}}{{$user->email}}" placeholder="Email">
    </div>
    <div class="form-group">
        <input type="text" class="form-control" name="password" value="{{old('password')}}{{$user->password}}" placeholder="Password">
    </div>
    <button class="btn btn-primary">Save</button>
    <h2>Metas</h2>
    <ul>

        @foreach ($user->metas as $meta)
        
        <li>{{$meta->name}} - {{$meta->value}}</li>

        @endforeach

    </ul>
</form>

@endsection
