@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    Welcome
                </div>
            </div>
            <div class="card">
                <div class="card-header">Contents</div>
                <div class="card-body">
                    <a href="{{route('contents.create')}}" class="btn btn-primary">Create</a>
    
                    @foreach ($contents as $content)
                        
                        <div>
                            <a href="{{route('contents.show')}}">{{$content->title}}</a>
                        </div>

                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
