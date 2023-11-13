@extends('layouts.admin.master')
@section('content')
@section('title')
Add category
@stop
<form method="POST" action="{{route('admin.category.list.add')}}"  enctype="multipart/form-data">
    @csrf
@include('admin.category.form')
</form>

@stop