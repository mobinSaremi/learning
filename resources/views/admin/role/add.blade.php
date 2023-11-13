@extends('layouts.admin.master')
@section('content')
@section('title')
Add access level
@stop
<form method="POST" action="{{route('admin.role.list.add')}}"  enctype="multipart/form-data">
    @csrf
@include('admin.role.form')
</form>
@stop