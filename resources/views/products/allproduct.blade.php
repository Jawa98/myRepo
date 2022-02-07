@extends('layouts.app')
@section('content')
<table class="table table-bordered table-hover">
    <tr>
        <th>Name</th>
        <th>Description</th>
        <th>Price</th>
        <th>Image</th>
        <th>Writen By</th>
        @if(Auth::user()!=null)
        @if(Auth::user()->role=='admain')
        <th>Actions</th>
        @endif
        @endif

        
    </tr>
    @foreach ($products as $product )
        <tr>
            <td><a href="{{route('products.show',$product->id)}}">{{$product->name}}</a></td>
            <td>{{$product->description}}</td>
            <td>{{$product->price}}</td>
            <td><img src="\storage\product_images\{{$product->image}}" width="220px" height="200px"></td>
            <td>{{$product->user->name}}</td>
            @if(Auth::user()!=null)
            @if(Auth::user()->role=='admain')
            <td>
                <br><br><br>
            <a class="btn btn-primary" href="/assignto/{{$product->id}}">ASSIGN TO </a>
            </td>

            @endif
            @endif



        </tr>
    @endforeach
@endsection