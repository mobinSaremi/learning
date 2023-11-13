@extends('layouts.admin.master')
@section('content')
@section('title')
Add slider 
@stop
<form method="POST" action="{{route('admin.slider.list.add')}}"  enctype="multipart/form-data">
    @csrf
@include('admin.slider.form')
</form>

@stop