@extends('layouts.admin.master')
@section('content')
@section('title')
Edit admin
@stop
<form method="POST" action="{{route('admin.user.list.edit',['id'=>$data->id])}}"  enctype="multipart/form-data">
    @csrf
@include('admin.user.form')
</form>

@stop