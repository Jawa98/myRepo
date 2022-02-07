@extends('layouts.app')
@section('content')
<table class="table table-bordered table-hover">
    <tr>
        <th>Name</th>
        <th>Description</th>
        <th>Price</th>
        <th>Image</th>
        <th>Action</th>
    </tr>
    @foreach ($products as $product )
        <tr>
            <td><a href="{{route('products.show',$product->id)}}">{{$product->name}}</a></td>
            <td>{{$product->description}}</td>
            <td>{{$product->price}}</td>
            <td><img src="\storage\product_images\{{$product->image}}" width="220px" height="200px"></td>
            <td>
                <br><br>
                <form action="{{route('products.destroy',$product->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" class="btn btn-danger" value="DELETE">
                </form>
                <br>

                <a class="btn btn-primary" href="/products/{{$product->id}}/edit">Update</a></td>



           

        </tr>
    @endforeach
@endsection