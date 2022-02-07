@extends('layouts.app')
@section('content')
<form action="/update" method="POST">
    @csrf
    
    <div class="container-fluid">
        
        
       
    <div class="panel panel-defoult">

        <div class="panel-heading">
            <h1>update eser information</h1>

        </div>
        <div class="panel-body">
            <input name="id" value="{{$userinfo->id}}" hidden>
            <h5 class="text-left">Name:</h5><br>
            <input class="form-control" type="text" name="name" value="{{$userinfo->name}}" ><br>
            <input type="submit" value="UPDATE" class="btn btn-success">

        </div>
        <div class="panel-footer">

        All Right Reserved


    
    </div>
    </div>
    </div>


</form>
@endsection