@extends('layouts.admin.master')
@section('content')
@section('title')
 Edit slider
@stop
<form method="POST" action="{{route('admin.slider.list.edit',['id'=>$data->id])}}"  enctype="multipart/form-data">
    @csrf
@include('admin.slider.form')
</form>

@stop