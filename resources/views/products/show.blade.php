@extends('layouts.app')
@section('content')
<div>
    <img src="\storage\product_images\{{$product->image}}" width="300px" height="350px"><br><br>
    <h4>Name : {{$product->name}}</h4>
    <hr><br>
    <h4><font color="grey">Description : </font>{{$product->description}}</h4>
    <br>
    <h4><font color="grey">price :</font> {{$product->price}}</h4>
    <br>
    <h4><font color="grey">Created at :</font> {{$product->created_at}}</h4>
    <br>
    <h4><font color="grey">Written by :</font> {{$product->user->name}}</h4>
</div>

@endsection