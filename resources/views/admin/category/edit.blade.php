@extends('layouts.admin.master')
@section('content')
@section('title')
Edit category
@stop
<form method="POST" action="{{route('admin.category.list.edit',['id'=>$data->id])}}"  enctype="multipart/form-data">
    @csrf
@include('admin.category.form')
</form>

@stop