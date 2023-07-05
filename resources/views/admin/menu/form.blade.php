
@extends('admin.layout.admin')
@section('content')



    <div class="card">
        <div class="card-body">
            <form action="{{ isset($menu) ? route('menu.update',$menu->id) :  route('menu.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                @isset($menu)
                    @method('PUT')
                @endisset

                <div class="form-group">
                    <input type="text" name="title" class="form-control"
                           value="{{old('title', isset($menu) ? $menu->title : '')}}"
                           placeholder="Title">
                    @error("title")
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <input type="text" name="url" class="form-control"
                           value="{{old('url', isset($menu) ? $menu->url : '')}}"
                           placeholder="Url">
                    @error("url")
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <button class="btn btn-success">Save</button>
            </form>
        </div>
    </div>
@endsection



@include('admin.includes.select2')


