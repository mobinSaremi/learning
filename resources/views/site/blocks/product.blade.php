<section>
				<div class="container">
				
					<div class="row">
						<div class="col text-center">
							<div class="sec-heading mx-auto">
								<h2>{{$setting_site->product_title}}</h2>
								<p>{!! $setting_site->product_description !!}</p>
							</div>
						</div>
					</div>
					<div class="row w-100 m-0">
						@foreach($pro as $product)
					<div class="col-lg-4 col-md-4 mb-4">
							<div class="feature feature-1">
								<img class="img-responsive" src="{{asset('assets/upload/'.$product->image)}}" alt="Image" style="width: -webkit-fill-available; height:300px">
								<div class="feature__body boxed boxed--border">
									<h4>{{$product->title}}</h4>
									<p>
									{!! Illuminate\Support\Str::limit(@$product['description'], 120, $end='...')!!}
									</p>
									<a href="{{route('productdetail',['id'=>$product->id])}}" class="read-more">read more<i class="ti-arrow-right"></i></a>
								</div>
							</div>
						</div>
						@endforeach
						
						
					</div>
					
				</div>
			</section>