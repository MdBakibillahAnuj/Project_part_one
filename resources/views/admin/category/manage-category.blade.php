@extends('admin.master')

@section('title')
    Manage Category
@endsection
@section('body')

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="card col-md-8 mx-auto">
                    <div class="card-header bg-success">
                        <h3 class="text-center text-center">Manage Category</h3>
                    </div>
                    @if(Session::has('message'))
                        <p class="alert alert-success">{{ Session::get('message') }}</p>
                    @endif
                    <div class="card-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Category Name</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($category as $category)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $category->category_name }}</td>
                                    <td>
                                        <a href="{{ route('delete-category',['id' => $category->id]) }}" class="btn btn-sm btn-danger alert-danger">Delete</a>
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

