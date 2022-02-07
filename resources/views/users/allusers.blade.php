@extends('layouts.app')
@section('content')
<table class="table table-bordered table-hover">
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Action</th>
    </tr>
    @foreach ($allusers as $alluser )
        <tr>
            <td>{{$alluser->name}}</td>
            <td>{{$alluser->email}}</td>
            <td><a class="btn btn-danger" href="/deleteuser/{{$alluser->id}}">Delete</a> 
                <a class="btn btn-success" href="/upgradeuser/{{$alluser->id}}">Upgrade</a>
                <a class="btn btn-primary" href="/showupdate/{{$alluser->id}}">Update</a></td>
                

        </tr>
    @endforeach
@endsection