@extends('admin.master')
@section('title')
    Edit Menu Item
@endsection
@section('body')
    <section class="py-3">
        <div class="container">
            <div class="row">
                <div class="card col-md-8 mx-auto">
                    <div class="card-header bg-success">
                        <h3 class="text-center text-center">Edit Menu Item</h3>
                    </div>
                    <div class="card-body">
                        @if(Session::has('message'))
                            <p class="alert alert-success">{{ Session::get('message') }}</p>
                        @endif

                        <form action="{{ route('update-food', ['id' => $foods->id]) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label for="" class="col-md-4">Menu Name</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="menu_name" value="{{$foods->menu_name}}"/>
                                </div>
                            </div>
                            <div class="form-group row mt-3">
                                <label for="" class="col-md-4">Category Name</label>
                                <div class="col-md-8">
                                    <select name="category" id="">
                                        <option value="" disabled selected><---Select a Category---></option>
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}" {{$foods->category == $category->id ? 'selected' : ''}}>{{ $category->category_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row mt-3">
                                <label for="" class="col-md-4">Menu Price</label>
                                <div class="col-md-8">
                                    <input type="number" class="form-control" name="price" value="{{$foods->price}}"/>
                                </div>
                            </div>
                            <div class="form-group row mt-3">
                                <label for="" class="col-md-4">Menu Image</label>
                                <div class="col-md-8">
                                    <input type="file" class="form-control-file" name="image"/>
                                    <img src="{{asset($foods->image)}}" alt="" style="height: 100px; width: 100px;">
                                </div>
                            </div>
                            <div class="form-group row mt-3">
                                <label for="" class="col-md-4">Menu Description</label>
                                <div class="col-md-8">
                                    <textarea name="description" id="editor" cols="5" rows="20" class="form-control">{{$foods->description}}</textarea>
                                </div>
                            </div>
                            <div class="form-group row mt-3">
                                <label for="" class="col-md-4">Status</label>
                                <div class="col-md-8">
                                    <label for=""><input type="radio" name="status" value="1" checked>Published</label>
                                    <label for=""><input type="radio" name="status" value="0">Unpublished</label>
                                </div>
                            </div>
                            <div>
                                <input type="submit" class="btn btn-primary my-3" value="Update Menu InFo"/>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


