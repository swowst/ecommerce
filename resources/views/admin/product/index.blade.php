@extends('admin.layout.admin')
@section('content')
    <div class="card my-3">
        <a href="{{ route('product.create') }}" style="width: 120px!important" class="btn btn-primary">Add</a>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th style="width: 10px">#</th>
                    <th>Title</th>
                    <th>Slug</th>
                    <th>Category</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach($models as $model)
                    <tr>
                        <td>{{ $model->id }}</td>
                        <td>{{ $model->title }}</td>
                        <td>{{ $model->slug }}</td>
                        <td>{{ $model->category->title ?? 'Parent Category' }}</td>
                        <td>
                            <a href="{{ route('product.edit', $model->id) }}" class="btn btn-secondary">Edit</a>
                            <a href="{{ route('product-image.index', $model->id) }}" class="btn btn-secondary">Images</a>

                        </td>
                        <td>
                            <form action="{{ route('product.destroy', $model->id) }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
