@extends('adminlte::page')

@section('content')
    @if(count($products) > 0)
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="d-sm-flex align-items-center mb-4">
                            <h4 class="card-title mb-sm-0">Products</h4>
                            <a href="{{route('products.create')}}" class="btn btn-primary" style="margin-left: 78rem;"> Add Product</a>
                        </div>
                        <div class="table-responsive border rounded p-1">
                            <table class="table">
                                <thead>
                                <th class="font-weight-bold">Product ID</th>
                                <th class="font-weight-bold">Name</th>
                                <th class="font-weight-bold">Description</th>
                                <th class="font-weight-bold">Price</th>
                                <th class="font-weight-bold">Image</th>
                                <th class="font-weight-bold">TypedOf</th>
                                <th class="font-weight-bold">Edit</th>
                                <th class="font-weight-bold">Delete</th>
                                </thead>
                                @foreach($products as $product)
                                    <tr>
                                        <td>{{$product->id}} </td>
                                        <td>{{$product->name}}</td>
                                        <td>{{$product->description}}</td>
                                        <td>{{$product->price}}</td>
                                        <td> <img src="{{asset('/storage/uploads/' . $product->image)}}" width="100px;"height="100px; alt="{{$product->image}}"> </td>
                                        <td>{{$product->cat_id}}</td>
                                        <td> <a href="{{route('products.edit', $product->id)}}" class="btn btn-primary" > Edit </a> </td>
                                        <form action="{{route('products.destroy', $product->id)}}" method="post">
                                            {{csrf_field()}}
                                            <input type="hidden" name="_method" value="Delete">
                                            <td> <button class="btn btn-danger"> Delete </button> </td>
                                        </form>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
        {{$products->links()}}
    @endif
@endsection
