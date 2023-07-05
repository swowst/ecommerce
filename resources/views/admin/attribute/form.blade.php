
@extends('admin.layout.admin')
@section('content')



    <div class="card">
        <div class="card-body">
            <form action="{{ isset($model) ? route('attribute.update',$model->id) :  route('attribute.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                @isset($model)
                    @method('PUT')
                @endisset
                    <div class="card-body">
                        <div class="tab-content" id="custom-tabs-one-tabContent">
                                    <div class="form-group">
                                        <input type="text" placeholder="Title" name="title"
                                               value="{{old('title', isset($model) ? $model->title : '' )}}" class="form-control">
                                        @error("title")
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                        </div>
                    </div>



                <button class="btn btn-success">Save</button>
            </form>
        </div>
    </div>
@endsection
