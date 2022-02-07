@extends('layouts.app')
@section('content')
<form action="{{route('products.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    
    <div class="container-fluid">
        
        
       
    <div class="panel panel-defoult">

        <div class="panel-heading">
            <h1>Add Product</h1>

        </div>
        <div class="panel-body">
            <h5 class="text-left">Name:</h5><br>
            <input type="text" name="name" class="form-control"><br>

            <h5 class="text-left">Description</h5><br>
            <input type="text" name="description" class="form-control"><br><br>

            <h5 class="text-left">Price</h5><br>
            <input type="text" name="price" class="form-control"><br><br>


            <h5 class="text-left">Image</h5><br>
            <input type="file" name="image" class="form-control"><br><br>

            <input type="submit" value="ADD" class="btn btn-success">

        </div>
        <div class="panel-footer">



    
    </div>
    </div>
    </div>


</form>
@endsection