@extends('admin.layout.admin')
@section('content')
    <div class="card my-3">
        <a href="{{ route('menu.create') }}" style="width: 120px!important" class="btn btn-primary">Add</a>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th style="width: 10px">#</th>
                    <th>Title</th>
                    <th>Url</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach($models as $model)
                    <tr>
                        <td>{{ $model->id }}</td>
                        <td>{{ $model->title }}</td>
                        <td>{{ $model->url }}</td>
                        <td>
                            <a href="{{ route('menu.edit', $model->id) }}" class="btn btn-secondary">Edit</a>
                        </td>
                        <td>
                            <form action="{{ route('menu.destroy', $model->id) }}" method="POST">
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
