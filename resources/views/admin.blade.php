@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mt-3">
                <div class="card-header">Contents</div>
                <div class="card-body">
                    <a href="{{route('contents.create')}}" class="btn btn-primary float-right">Create</a>
    
                    @foreach ($contents as $content)
                        
                        <div>
                            <h2><a href="{{route('contents.show', $content)}}">{{$content->title}} - {{$content->typeText}}</a></h2>
                        </div>

                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
