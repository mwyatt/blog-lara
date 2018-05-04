@extends('layouts.admin')

@section('content')

<form class="container" method="post" action="{{$formAction}}">
    <a href="{{route('admin')}}" class="btn btn-secondary">Back</a>

    @csrf

    @if ($content->id)
        <input type="hidden" name="_method" value="PUT">
    @endif

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    {{$content->id ? 'Update' : 'Create'}} Content
                </div>
                <div class="card-body">
                    <div class="row">
                        <label class="col-sm-4" for="title">Title</label>
                        <div class="col-sm-8"><input id="title" type="text" name="title" class="form-control js-input-title" data-url="{{route('adminContentGetSlug')}}" value="{{$content->title}}" autofocus required></div>
                    </div>
                    <div class="row mt-3">
                        <label class="col-sm-4" for="slug">Slug</label>
                        <div class="col-sm-8"><input id="slug" type="text" name="slug" class="form-control js-input-slug" value="{{$content->slug}}" required></div>
                    </div>
                    <div class="row mt-3">
                        <label class="col-sm-4" for="shortDesc">Short Description</label>
                        <div class="col-sm-8"><input id="shortDesc" type="text" name="shortDesc" class="form-control" value="{{$content->shortDesc}}"></div>
                    </div>
                    <div class="row mt-3">
                        <label class="col-sm-4" for="type">Type</label>
                        <div class="col-sm-8">
                            <select class="form-control" name="type">

                                @foreach ($content->types() as $key => $value)

                                <option value="{{$key}}" {{$key == $content->type ? 'selected' : ''}}>{{$value}}</option>

                                @endforeach

                            </select>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <label class="col-sm-4" for="status">Status</label>
                        <div class="col-sm-8">
                            <select class="form-control" name="status">

                                @foreach ($content->statuss() as $key => $value)

                                <option value="{{$key}}" {{$key == $content->status ? 'selected' : ''}}>{{$value}}</option>

                                @endforeach

                            </select>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <label class="col-sm-4" for="body">Body</label>
                        <div class="col-sm-8">
                            <textarea class="form-control" name="body" required>{{$content->body}}</textarea>
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
