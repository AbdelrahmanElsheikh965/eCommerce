@extends('adminlte::page')

@section('content')

    <h2>Add A New category here!</h2>
    <br>
    <form action="{{route('categories.store')}}" method="post">
        {{csrf_field()}}
        <legend>Add this Category Bro</legend>
        <div class="form-group">
            <label for="name"></label>
            <input type="text" class="form-control" name="name">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>


@endsection
