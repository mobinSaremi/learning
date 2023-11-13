@extends('layouts.admin.master')
@section('content')
@section('title')
Edit product
@stop
<form method="POST" action="{{route('admin.product.list.edit',['id'=>$data->id])}}"  enctype="multipart/form-data">
    @csrf
@include('admin.product.form')
</form>

@stop