@extends('admin.layout.admin')
@section('content')

    <div class="card my-3">
        <a href="{{ route('product-image.create' ,$productId) }}" style="width: 120px!important" class="btn btn-primary">Add</a>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th style="width: 10px">#</th>
                    <th>Image</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody id="sortable">
                @foreach($models as $model)
                    <tr id="order-{{ $model->id }}">
                        <td>{{ $model->id }}</td>
                        <td><img width="100" class="rounded" src="{{asset('storage/'.$model->image)}}"></td>
{{--                        <td>{{ asset('storage/'. $model->image)  }}</td>--}}
                        <td>
                            <a href="{{ route('product-image.edit', $model->id) }}" class="btn btn-secondary">Edit</a>
                        </td>
                        <td>
                            <form action="{{ route('product-image.destroy', $model->id) }}" method="POST">
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

@push ('js')
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script>
        $(function () {
            $( "#sortable").sortable();
        } );
        $( "#sortable").on('sortstop', function(event, ui){
            $.ajax({
                method: "post",
                url: "{{ route('sort-product-image') }}",
                data: {
                    sortList: $("#sortable").sortable('serialize'),
                    _token: $('meta[name=csrf]').attr('content')
                }
            })
        });
    </script>
@endpush
