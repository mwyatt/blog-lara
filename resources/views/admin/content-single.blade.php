@extends('layouts.app')

@section('content')

<form class="container" method="post" action="{{route('contents.store')}}">
    
    @csrf

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Create Content
                </div>
                <div class="card-body">
                    <div class="row">
                        <label class="col-sm-4" for="title">Title</label>
                        <div class="col-sm-8"><input id="title" type="text" name="title" class="form-control" value="{{$content->title}}" autofocus></div>
                    </div>
                    <div class="row mt-3">
                        <label class="col-sm-4" for="slug">Slug</label>
                        <div class="col-sm-8"><input id="slug" type="text" name="slug" disabled class="form-control" value="{{$content->slug}}" autofocus></div>
                    </div>
                </div>
                <div class="mt-5 text-right m-3">
                    <button class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div>
</form>

@endsection
