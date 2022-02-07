@extends('layouts.app')
@section('content')
<form action="{{route('products.update',$product->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    
    <div class="container-fluid">
        
        
       
    <div class="panel panel-defoult">

        <div class="panel-heading">
            <h1>Edit Product</h1>

        </div>
        <div class="panel-body">
            <h5 class="text-left">Name:</h5><br>
            <input type="text" name="name" class="form-control" value="{{$product->name}} " required><br>

            <h5 class="text-left">Description</h5><br>
            <input type="text" name="description" class="form-control" value="{{$product->description}}" required><br><br>

            <h5 class="text-left">Price</h5><br>
            <input type="text" name="price" class="form-control"value="{{$product->price}}" required ><br><br>


            <h5 class="text-left">Image</h5><br>
            <input type="file" name="image" class="form-control"><br><br>

            <input type="submit" value="UPDATE" class="btn btn-success">

        </div>
        <div class="panel-footer">



    
    </div>
    </div>
    </div>


</form>
@endsection