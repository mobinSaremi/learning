<!DOCTYPE html>
<html lang="en">
	
@include('layouts.site.blocks.head')
	
    <body>
	@include('layouts.site.blocks.message-swal')
        <div class="preloader" style="display: none;">
            <div class="loader">
                <div class="loader__figure"></div>
                <p class="loader__label">Themex</p>
            </div>
        </div>
        <div id="main-wrapper">
           @include('layouts.site.blocks.header')
			<div class="clearfix"></div>
			@yield('content')
			@include('layouts.site.blocks.footer')
			
			
		</div>
		
		@include('layouts.site.blocks.script')
	</body>

</html>