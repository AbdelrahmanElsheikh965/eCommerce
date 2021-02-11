@extends('adminlte::page')

@section('content')

    <h2>edit category here!</h2>
    <br>
    <form action="{{route('products.update', $product->id)}}" method="post">
        <input type="hidden" name="_method" value="put">
        {{csrf_field()}}
        <legend>Edit this Product Bro</legend>
        <div class="form-group">
            <label for="name"></label>
            <input type="text" class="form-control" name="name"         value="{{$product->name}}">
        </div>

        <div class="form-group">
            <label for="name"></label>
            <input type="text" class="form-control" name="description"  value="{{$product->description}}">
        </div>

        <div class="form-group">
            <label for="name"></label>
            <input type="text" class="form-control" name="description"  disabled value="{{$product->image}}">
        </div>

        <div class="form-group">
            <label for="name"></label>
            <input type="text" class="form-control" name="price"        value="{{$product->price}}">
        </div>

        <div class="form-group">
            <label for="name"></label>
            <input type="text" class="form-control" name="cat_id"       value="{{$product->cat_id}}">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>


@endsection
