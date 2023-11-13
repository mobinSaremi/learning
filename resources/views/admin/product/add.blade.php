@extends('layouts.admin.master')
@section('content')
@section('title')
Add product 
@stop
<form method="POST" action="{{route('admin.product.list.add')}}"  enctype="multipart/form-data">
    @csrf
@include('admin.product.form')
</form>
@stop
