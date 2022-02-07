@extends('layouts.app')
@section('content')
<form action="/assign" method="POST">
    @csrf
    
    <div class="container-fluid">
        
        
       
    <div class="panel panel-defoult">

        <div class="panel-heading">
            <h1>{{$product->name}}</h1>
            <br><br>

        </div>
        <div class="panel-body">
            <input name="product_id" value="{{$product->id}}" hidden>

            <select class="form-control" name="user_id" required >
                <option></option>
                @foreach ($users as $user)
                <option value="{{$user->id}}">{{$user->email}}</option>
                @endforeach
            </select>
            <br><br><br>

            <input type="submit" value="ASSIGN" class="btn btn-success">

        </div>
       
    </div>
    </div>


</form>
@endsection