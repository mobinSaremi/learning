@extends('layouts.admin.master')
@section('content')
<form method="POST" action="{{route('admin.image.list.add')}}"  enctype="multipart/form-data">
    @csrf
@include('admin.productimage.form')
</form>

@stop