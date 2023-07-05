
@extends('admin.layout.admin')
@section('content')



    <div class="card">
        <div class="card-body">
            <form action="{{ isset($model) ? route('attribute-value.update',$model->id) :  route('attribute-value.store')}}" method="POST" enctype="multipart/form-data">
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
                        <input type="hidden" name="attribute_id" value="{{ $attributeId ?? $model->attribute_id}}">
                        <div class="tab-content" id="custom-tabs-one-tabContent">
                            <div class="form-group">
                                <input type="text" placeholder="Value" name="value"
                                       value="{{old('value', isset($model) ? $model->value : '' )}}" class="form-control">
                                @error("value")
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
