@extends('layouts.admin.master')
@section('content')
@section('title')
Add admin
@stop
<form method="POST" action="{{route('admin.user.list.add')}}"  enctype="multipart/form-data">
    @csrf
@include('admin.user.form')
</form>
@stop