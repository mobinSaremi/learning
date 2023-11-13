@extends('layouts.site.master')
@section('content')
@section('title')
About us
@stop
<!DOCTYPE html>
<html lang="en">

<body>

	<div class="page-title-wrap pt-img-wrap" style="background:url('{{asset('assets/upload/988.jpg')}}') no-repeat;">
		<div class="container">
			<div class="col-lg-12 col-md-12">
				<div class="pt-caption text-center mt-5">
					<h1>About us</h1>
					<p><a href="{{route('index')}}">Home</a><span class="current-page">About us</span></p>
				</div>
			</div>
		</div>
	</div>
	<section>
		<div class="container">

			<div class="row">

				<div class="col-lg-6 col-md-6">
					<div class="about-content">
						<h2 style="text-align: left;">{{$setting_site->about_us_title}}</h2>
						<p>{!! $setting_site->about_us_description !!}</p>
						<ul class="our-team-profile ts-light-bg">
							<li><a href="https://www.facebook.com/sharer/sharer.php?u={{url()->current()}}"><i class="fa fa-facebook"></i></a></li>
							<li><a href="http://www.twitter.com/share?url={{url()->current()}}"><i class="fa fa-twitter"></i></a></li>
							<li><a href="http://www.linkedin.com/share?url={{url()->current()}}"><i class="fa fa-linkedin"></i></a></li>
							<li><a href="https://www.instagram.com/sharer.php?u={{url()->current()}}"><i class="fa fa-instagram"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-6 col-md-6">
					<img src="{{asset('assets/upload/'.$setting_site->image)}}" class="img-fluid mx-auto" alt="">
				</div>
			</div>
		</div>
	</section>
	</div>
</body>

</html>
@stop