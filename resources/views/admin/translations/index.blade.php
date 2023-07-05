@extends('admin.layout.admin')
@section('content')
    <div class="card my-3">
        <a href="{{ route('translations.create') }}" style="width: 120px!important" class="btn btn-primary">Add</a>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th style="width: 10px">#</th>
                    <th>Key</th>
                    <th>Value</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach($translations as $translation)
                    <tr>
                        <td>{{ $translation->id }}</td>
                        <td>{{ $translation->key }}</td>
                        <td>{{ $translation->value }}</td>
                        <td>
                            <a href="{{ route('translations.edit', $translation->id) }}" class="btn btn-secondary">Edit</a>
                        </td>
                        <td>
                            <form action="{{ route('translations.destroy', $translation->id) }}" method="POST">
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
