@extends('voyager::master')

@section('content')

<div class="container-fluid">
        <h1 class="page-title">
            <i class="voyager-people"></i> Relation
        </h1>
         <a href="http://project-start.app/admin/user/create" class="btn btn-success btn-add-new">
                <i class="voyager-people"></i> <span>Add New</span>
        </a>
        <a class="btn btn-danger" id="bulk_delete_btn"><i class="voyager-trash"></i> <span>Bulk delete</span></a>
<div>

<div class="table-responsive">
    <table id="dataTable" class="table table-hover">
        <thead>
            <th>Email</th>
            <th>Full Name</th>
            <th>Avatar</th>
            <th>Role</th>
            <th>Phone</th>
            <th>Level</th>
            <th>Action</th>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{$user->email}}</td>
                    <td>{{$user->full_name}}</td>
                    <td><img src="http://project-start.app/storage/users/default.png" style="width:80px"></td>
                    <td>{{$user->role->name}}</td>
                    <td>{{$user->phone_number}}</td>
                    <td>{{$user->cooperative_level->level_name}}</td>
                    <td>
                       <a href="{{url('admin/personal/'.$user->id)}}" class="btn btn-sm btn-warning">View</a>
                       <a href="" class="btn btn-sm btn-info">Edit</a>
                       <a href="" class="btn btn-sm btn-danger">Delete</a>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
            {{ $users->links() }}
</div>
<h1>Hola</h1>

@endsection