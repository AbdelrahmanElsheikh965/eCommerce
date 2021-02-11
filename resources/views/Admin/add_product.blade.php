@extends('adminlte::page')

@section('content')

    <h2>Add A New Product here!</h2>
    <br>
    <form action="{{route('products.store')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="form-group">
            <legend>Name</legend>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="form-group">
            <legend>Description</legend>
            <input type="text" class="form-control" name="description">
        </div>
        <div class="form-group">
            <legend>Price</legend>
            <input type="number" class="form-control" name="price">
        </div>
        <div class="form-group">
            <select class="form-control" name="category">
                @if(count($categories) > 0)
                    @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                @endif
            </select>
        </div>
        <div class="form-group">
            <legend>Image</legend>
            <input type="file" name="imageFile">
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>


@endsection
