@extends('layouts.admin.master')
@section('content')
@section('title')
Edit access level@stop
<form method="POST" action="{{route('admin.role.list.edit',['id'=>$data->id])}}"  enctype="multipart/form-data">
    @csrf
@include('admin.role.form')
</form>

@stop