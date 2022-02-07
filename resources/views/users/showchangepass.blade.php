@extends('layouts.app')
@section('content')
<form action="/changepass" method="POST">
    @csrf
    
    <div class="container-fluid">
        
        
       
    <div class="panel panel-defoult">

        <div class="panel-heading">
            <h1>change your password</h1>

        </div>
        <div class="panel-body">
            <h5 class="text-left">Old password:</h5><br>
            <input required type="password" name="oldpassword"  class="form-control"  ><br>

            <h5 class="text-left">New Passeord:</h5><br>
            <input required type="password" name="newpassword"  class="form-control" ><br><br>

            <input type="submit" value="CHANGE" class="btn btn-success"><br><br>

        </div>
        <div class="panel-footer">

        All Right Reserved


    
    </div>
    </div>
    </div>


</form>
@endsection