
@extends('admin.layout.admin')
@section('content')



    <div class="card">
        <div class="card-body">
            <form action="{{ isset($hero) ? route('hero.update',$hero->id) :  route('hero.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                @isset($hero)
                    @method('PUT')
                @endisset

                <div class="form-group">
                    <input type="text" name="title" class="form-control"
                           value="{{old('title', isset($hero) ? $hero->title : '')}}"
                           placeholder="Title">
                    @error("title")
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <input type="text" name="text" class="form-control"
                           value="{{old('text', isset($hero) ? $hero->text : '')}}"
                           placeholder="Text">
                    @error("text")
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>



                <div class="form-group">
                    <label>Image</label>
                    @isset($hero)
                        <br>
                        <img width="200" src="{{asset('storage/'.$hero->image)}}">
                    @endisset
                    <input type="file" name="image" class="form-control">
                    @error('image')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>


                <button class="btn btn-success">Save</button>
            </form>
        </div>
    </div>
@endsection



@include('admin.includes.select2')


