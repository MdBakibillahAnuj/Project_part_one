@extends('admin.master')
@section('title')
    Edit Menu Item
@endsection
@section('body')

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="card col-md-10 mx-auto">
                    <div class="card-header bg-success">
                        <h3 class="text-center text-center">Manage Food Items</h3>
                    </div>
                    @if(Session::has('message'))
                        <p class="alert alert-success">{{ Session::get('message') }}</p>
                    @endif
                    <div class="card-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Menu Name</th>
                                <th>Category</th>
                                <th>Price</th>
                                <th>Image</th>
                                <th>Description</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($foods as $food)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $food->menu_name }}</td>
                                    <td>{{ $food->cat->category_name }}</td>
                                    <td>BDT: {{ $food->price }}</td>
                                    <td>
                                        <img src="{{ asset($food->image) }}" style="height: 120px; width: 110px; border: 2px solid black" alt="">
                                    </td>
                                    <td>{!! $food->description !!}</td>
                                    <td>{{ $food->status == 1 ? 'Published' : 'Unpublished' }}</td>

                                    <td>
                                        <a href="{{ route('delete-food', ['id'=>$food->id]) }}" class="btn btn-sm btn-danger"><i class="fa-solid fa-trash-can"></i></a>
                                        <a href="{{ route('edit-food', ['id'=>$food->id]) }}" class="btn btn-sm btn-success"><i class="fa fa-pencil-square"></i></a>
                                        <a href="{{ route('status-food', ['id'=>$food->id]) }}" class="btn btn-sm btn-{{ $food->status == 1 ? 'info' : 'warning' }}"><i class="fa fa-exchange"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

