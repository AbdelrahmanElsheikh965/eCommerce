@extends('adminlte::page')

@section('content')

    <h2>edit category here!</h2>
    <br>
    <form action="{{route('categories.update', $category->id)}}" method="post">
        <input type="hidden" name="_method" value="put">
        {{csrf_field()}}
        <legend>Edit this Category Bro</legend>
        <div class="form-group">
            <label for="name"></label>
            <input type="text" class="form-control" name="name" value="{{$category->name}}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>


@endsection
