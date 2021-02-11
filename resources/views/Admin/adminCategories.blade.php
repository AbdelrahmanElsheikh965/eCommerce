@extends('adminlte::page')

@section('content')
    @if(count($categories) > 0)
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="d-sm-flex align-items-center mb-4">
                            <h4 class="card-title mb-sm-0">Categories</h4>
                            <a href="{{route('categories.create')}}" class="btn btn-primary" style="margin-left: 78rem;"> Add Category</a>
                        </div>
                        <div class="table-responsive border rounded p-1">
                            <table class="table">
                    <thead>
                        <th class="font-weight-bold">Category ID</th>
                        <th class="font-weight-bold">Name</th>
                        <th class="font-weight-bold">Edit</th>
                        <th class="font-weight-bold">Delete</th>
                    </thead>
        @foreach($categories as $category)
                <tr>
                    <td>{{$category->id}} </td>
                    <td>{{$category->name}}</td>
                    <td> <a href="{{route('categories.edit', $category->id)}}" class="btn btn-primary" > Edit </a> </td>
                    <form action="{{route('categories.destroy', $category->id)}}" method="post">
                        {{csrf_field()}}
                        <input type="hidden" name="_method" value="Delete">
{{--                        {{method_field('DELETE')}}--}}
                        <td> <button class="btn btn-danger"> Delete </button> </td>
                    </form>
                </tr>
    @endforeach
            </table>
        </div>
    </div>
        {{$categories->links()}}
    @endif
@endsection
