@extends('layouts.site.master')
@section('content')
@section('title')
Service details
@stop

<body>
	<div class="page-title-wrap pt-img-wrap" style="background:url('{{asset('assets/upload/988.jpg')}}') no-repeat;">
		<div class="container">
			<div class="col-lg-12 col-md-12">
				<div class="pt-caption text-center mt-5">
					<h1>{{@$product->title}}</h1>
					<p><a href="{{route('index')}}">Home</a><span class="current-page"></span></p>
				</div>
			</div>
		</div>
	</div>
	<section>
		<div class="container">

			<div class="row mb-4">
				<div class="col-lg-7 col-md-6 col-sm-12">
					@foreach($image as $img)
					<img src="{{asset('assets/upload/'.$img->image)}}" class="img-fluid mx-auto mb-2" alt="" />

					@endforeach
				</div>
				<div class="col-lg-5 col-md-6 col-sm-12">
					<div class="portfolio-detail-caption">
						<div class="portfolio-detail-caption-header">
							<h3>{{@$product->title}}</h3>
						</div>
						<!-- <div class="portfolio-detail-caption-overview">

							<ul class="port-metas mb-3">
								<li><strong>Category:</strong>{{@$product->category->title}}</li>
								<li><strong>price:</strong>{{number_format(@$product->price)}} $</li>
							</ul>
							@if(Auth::check())
							<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">خرید محصول</button>
							<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="exampleModalLabel">خرید</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
											<form method="Post" action="{{route('checkout')}}" enctype="multipart/form-data">
												@csrf
												<input type="hidden" name="product_id" value="{{$product->id}}">
												<input type="hidden" name="payment" value="{{$product->price}}">
												<input type="hidden" name="user_id" value="{{Auth::user()->id}}">
												<div class="row m-0  w-100">
													<div class=" col-6 form-group">
														<label for="recipient-name" class="col-form-label">نام گیرنده:</label>
														<input type="text" name="fullname" class="form-control" id="recipient-name">
													</div>
													<div class="col-6 form-group">
														<label for="recipient-name" class="col-form-label">شماره تماس :</label>
														<input type="text" name="phone_number" class="form-control" id="recipient-name">
													</div>
												</div>
												<div class="row m-0  w-100">
													<div class="col-12 d-flex">
														<h5>نحوه ارسال:</h5>
														<select class="form-select form-select-lg mb-3 mx-4" name="send">
															<option selected>نحوه ارسال را انتخاب کنید</option>
															<option value="delivery">پیک</option>
															<option value="post	">پست</option>
														</select>
													</div>
												</div>
												<div class="row m-0 w-100">
													<div class="col-12">
														<div class="form-group">
															<label for="message-text" class="col-form-label">آدرس:</label>
															<textarea class="form-control" name="address" id="message-text"></textarea>
														</div>
													</div>
												</div>
												<div class="modal-footer d-flex  justify-content-between">
													<div class="box">
														<button type="button" class="btn btn-secondary mx-1" data-dismiss="modal">لغو</button>
														<button type="submit" class="btn btn-primary"> پرداخت</button>
														
													</div>
													<div class="box2  d-flex ">
														<h6>price:</h6>
															{{number_format(@$product->price)}} $
														</div>

												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
							@else
							<a href="{{url('/site/register?product_id='.$product->id)}}" class="btn btn-primary" data-whatever="@getbootstrap">خرید محصول</a>
							@endif
						</div> -->
					</div>
				</div>
			</div>
			<div class="row mb-5">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<p>{!! @$product->description !!}</p>
				</div>
			</div>
			<div class="row w-100 m-0">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<h3>More Services</h3>
				</div>
			</div>
			<div class="row w-100 m-0" id="portfolio">
				<!-- Single Project -->
				@foreach($pro as $product)
				<div class="col-lg-4 col-md-4 col-sm-12 mb-3">
					<div class="project portfolio-inner">
						<img  src="{{asset('assets/upload/'.$product->image)}}" alt="Image" style="width: 300px; height:300px">
						<div class="label">
							<div class="label-text"> <a href="{{route('productdetail',['id'=>$product->id])}}" class="text-title">{{$product->title}}</a> </div>
							<div class="label-bg"></div>
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</section>
	</div>
</body>
@stop