@extends('layouts.admin.master')
@section('content')
@section('title')
Dashboard
@stop

<!-- <div class="container ">
    <div class="box mt-3">
        <div class="row m-0 w-100   justify-content-center">
            <?php $num_order = App\Models\Order::count(); ?>
            <div class="col-4  m-3" style="background:#aac ;padding:20px ;border-radius: 20px;">
                <h3>فاکتورها</h3>
                <p>({{$num_order}})</p>
            </div>
            <?php $num_contact = App\Models\ContactUs::where('status', 1)->count(); ?>
            <div class="col-4  m-3" style="background:#aaa ;padding:20px ;border-radius: 20px;">
                <h3>تماس باما</h3>
                <p>({{$num_contact}})</p>
            </div>
        </div>
        <?php $num_newecomment = App\Models\Comment::where('status', 1)->count(); ?>
        <div class="row m-0  w-100  justify-content-center">
            <div class="col-4 m-3" style="background:#bbc ;padding:20px ;border-radius: 20px;">
                <h3>نظرات </h3>
                <p>({{$num_newecomment}})</p>
            </div>
        </div>
    </div> -->





</div>




@stop