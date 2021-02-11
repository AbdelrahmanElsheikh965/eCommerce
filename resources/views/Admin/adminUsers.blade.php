@extends('adminlte::page')

@section('content')
    @if(count($users) > 0)
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="d-sm-flex align-items-center mb-4">
                            <h4 class="card-title mb-sm-0">Users</h4>
                        </div>
                        <div class="table-responsive border rounded p-1">
                            <table class="table">
                                <thead>
                                <th class="font-weight-bold">Category ID</th>
                                <th class="font-weight-bold">Name</th>
                                <th class="font-weight-bold">Email</th>
                                <th class="font-weight-bold">Delete</th>
                                </thead>

                                @foreach($users as $user)
                                    <tr>
                                        <td>{{$user->id}} </td>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                        <form action="{{route('users.destroy', $user->id)}}" method="post">
                                            {{csrf_field()}}
                                            <input type="hidden" name="_method" value="Delete">
                                            <td> <button class="btn btn-danger"> Delete </button> </td>
                                        </form>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
        {{$users->links()}}
    @endif
@endsection
