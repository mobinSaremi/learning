@extends('layouts.site.master')
@section('content')
@section('title')
 {{$setting_site->title_seo}} 
@stop
<!-- ============================ Banner Video Start ================================== -->
@include('site.blocks.slider')
			<!-- ============================ Banner Video End ================================== -->
			
			<!-- ============================ What We Do Start ================================== -->
			
			<div class="clearfix"></div>
			<!-- ============================ What We Do End ================================== -->
			
			<!-- ============================ Image Block Start ================================== -->
			<section class="pt-1">
				<div class="container-fluid p-0">
					<div class="imagebg height-70" data-overlay="5">
						<div class="bg-img-holder" style="background: url('{{asset('assets/site/img/858.jpg')}}'); opacity: 1;">
							<img alt="background" src="{{asset('assets/site/img/bn7.jpg')}}">
						</div>
						<div class="container pos-vertical-center">
							<div class="row text-center justify-content-center">
								<div class="col-md-10">
									<blockquote>The charging station for electric vehicles, which is also called ECS or EVSE, is actually a supplier of energy for electric vehicles, including PLUG-IN hybrids and all-electric ones. These charging stations, like gas stations, do not need to be located in a special place and do not require a lot of peripheral equipment.</blockquote>
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- ============================ Image Block End ================================== -->
			
			<!-- ============================ Our Team Start ================================== -->
		
			<div class="clearfix"></div>
			<!-- ============================ Our Team End ================================== -->
			
			<!-- ============================ Our Prices Start ================================== -->
			@include('site.blocks.product')
			<div class="clearfix"></div>
			<!-- ============================ Our Prices End ================================== -->
			
			<!-- ============================ Our Testimonial Start ================================== -->
			
			<div class="clearfix"></div>
			<!-- ============================ Our Testimonial End ================================== -->