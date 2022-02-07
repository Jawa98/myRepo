@extends('layouts.app')
@section('content')
<form action="/updateinfo" method="POST">
    @csrf
    
    <div class="container-fluid">    
       
    <div class="panel panel-defoult">

        <div class="panel-heading">
            <h1>update your information</h1>

        </div>
        <div class="panel-body">
            <h5 class="text-left">Name:</h5><br>
            <input type="text" name="name" value="{{$user->name}}" class="form-control"><br>

            <h5 class="text-left">Email:</h5><br>
            <input type="email" name="email" value="{{$user->email}}" class="form-control"><br><br>

            <input type="submit" value="UPDATE" class="btn btn-success">
            
            <a class="btn btn-primary" href="/showchangepass">Change Password</a><br><br>

        </div>
        <div class="panel-footer">

        All Right Reserved


    
    </div>
    </div>
    </div>


</form>
@endsection