@extends('layouts.site.master')
@section('content')
@section('title')
Services
@stop

<body>
    <div class="preloader" style="display: none;">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Themex</p>
        </div>
    </div>
    <div id="main-wrapper">

        <div class="page-title-wrap pt-img-wrap" style="background:url('{{asset('assets/upload/988.jpg')}}') no-repeat;">
            <div class="container">
                <div class="col-lg-12 col-md-12">
                    <div class="pt-caption text-center mt-5">
                        <h1>Sample services</h1>
                        <p><a href="{{route('index')}}">Home</a><span class="current-page">Sample services</span></p>
                    </div>
                </div>
            </div>
        </div>

        <section id="portfolio">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-md-12 col-xs-12">
                        <div class="row portfolio-gallary">
                            @foreach($products as $product)
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 port-item design development">
                                <div class="portfolio-wrap portfolio-inner">
                                    <img src="{{asset('assets/upload/'.$product->image)}}" alt="project" style="width: 350px;height:400px">
                                    <div class="label">
                                        <div class="label-text">
                                            <a href="{{route('productdetail',['id'=>$product->id])}}" class="text-title"> {{$product->title}}</a>
                                            <!-- <span class="lead-i"> {{number_format($product->price)}} تومان</span> -->
                                        </div>
                                    </div>
                                    <div class="zoom">
                                        <a href="{{asset('assets/upload/'.$product->image)}}" class="popup-box" data-lightbox="image" data-title="Project">
                                            <i class="ti-zoom-in"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <div class="clearfix"></div>
    </div>
</body>
@stop