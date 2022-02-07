@extends('layouts.app')
@section('content')
<h1>Your Information</h1>
<h4>Name : {{$user->name}}</h4>
<hr><br>
<h4>email : {{$user->email}}</h4>
@endsection