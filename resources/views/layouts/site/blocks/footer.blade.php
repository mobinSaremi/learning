<footer class="light-footer">
	<div>
		<div class="container">
			<div class="row w-100 m-0">
				<iframe class="w-100 m-0" src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d51855.68483049337!2d51.303452430676245!3d35.677487015973185!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x3f8dfe05732c2e91%3A0xfcbec017befd15f4!2sTehran%20Province%2C%20Tehran%2C%20Azadi%20Sq%2C%20Azadi%20Tower%2C%20Iran!3m2!1d35.6996476!2d51.338056099999996!5e0!3m2!1sen!2s!4v1697634361208!5m2!1sen!2s" width="600" height="450" style="border:2;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="footer-widget">
						<h4 class="widget-title">Services</h4>
						<ul class="footer-menu">
							@foreach($pro as $product)
							<li><a href="{{route('productdetail',['id'=>$product->id])}}">{{$product->title}}</a></li>
							@endforeach
						</ul>
					</div>
				</div>

				<div class="col-lg-4 col-md-6">
					<div class="footer-widget">
						<h4 class="widget-title">Ways of communication</h4>
						<p>Address: {{$setting_site->address}}</p>
						<p>Phone number: {{$setting_site->number_phone}}</p>
					</div>
				</div>

				<div class="col-lg-4 col-md-6">
					<div class="footer-widget">
						<h4 class="widget-title">Contact us</h4>
						<ul class="footer-bottom-social">
							<li><a href="{{$setting_site->facebook_link}}"><i class="fa fa-facebook"></i></a></li>
							<li><a href="{{$setting_site->twitter_link}}"><i class="fa fa-twitter"></i></a></li>
							<li><a href="{{$setting_site->instagram_link}}"><i class="fa fa-instagram"></i></a></li>
							<li><a href="{{$setting_site->linkedin_link}}"><i class="fa fa-linkedin"></i></a></li>
						</ul>


					</div>
				</div>

			</div>

		</div>
	</div>

	<div class="footer-bottom">
		<div class="container">
			<div class="row align-items-center">

				<div class="col-lg-12 col-md-12 text-center">
					<p class="mb-0">© Theme X. Localization by<h style="color: blue;">Themex</h>All rights reserved</p>
				</div>

			</div>
		</div>
	</div>
</footer>