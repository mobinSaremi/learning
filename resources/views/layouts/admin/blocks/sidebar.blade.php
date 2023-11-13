<div id="kt_app_sidebar" class="app-sidebar flex-column" data-kt-drawer="true" data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="225px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
	<!--begin::Logo-->
	<div class="app-sidebar-logo px-6" id="kt_app_sidebar_logo">
		<!--begin::Logo image-->
		<a href="../../demo1/dist/index.html">
			<img alt="Logo" src="{{asset('assets/admin/media/logos/default-dark.svg')}}" class="h-25px app-sidebar-logo-default" />
			<img alt="Logo" src="{{('assets/admin/media/logos/default-small.svg')}}" class="h-20px app-sidebar-logo-minimize" />
		</a>
		<!--end::Logo image-->
		<!--begin::Sidebar toggle-->

		<!--end::Sidebar toggle-->
	</div>
	<!--end::Logo-->
	<!--begin::sidebar menu-->
	<div class="app-sidebar-menu overflow-hidden flex-column-fluid">
		<!--begin::Menu wrapper-->
		<div id="kt_app_sidebar_menu_wrapper" class="app-sidebar-wrapper hover-scroll-overlay-y my-5" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer" data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px" data-kt-scroll-save-state="true">
			<!--begin::Menu-->
			<div class="menu menu-column menu-rounded menu-sub-indention px-3" id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false">
				<!--begin:Menu item-->
				<div data-kt-menu-trigger="click" class="menu-item here show menu-accordion">
					<!--begin:Menu link-->

					<!--end:Menu link-->
					<!--begin:Menu sub-->
					@if(auth()->user()->hasPermission('admin.index'))
					<div class="menu-item">
						<!--begin:Menu link-->
						<a class="menu-link " href="{{route('admin.index')}}">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">Dashboard</span>
						</a>
						<!--end:Menu link-->
					</div>
					@endif
					<!--begin:Menu item-->
					@if(auth()->user()->hasPermission('admin.category.list'))
					<div class="menu-item">
						<!--begin:Menu link-->
						<a class="menu-link " href="{{route('admin.category.list')}}">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">Category</span>
						</a>
						<!--end:Menu link-->
					</div>
					@endif
					<!--end:Menu item-->
					<!--begin:Menu item-->
					@if(auth()->user()->hasPermission('admin.product.list'))
					<div class="menu-item">
						<!--begin:Menu link-->
						<a class="menu-link" href="{{route('admin.product.list')}}">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">Services</span>
						</a>
						<!--end:Menu link-->
					</div>
					@endif
				
					@if(auth()->user()->hasPermission('admin.slider.list'))
					<div class="menu-item">
						<!--begin:Menu link-->
						<a class="menu-link" href="{{route('admin.slider.list')}}">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">Slider</span>
						</a>
						<!--end:Menu link-->
					</div>
					@endif
					
					@if(auth()->user()->hasPermission('admin.user.list'))
					<div class="menu-item">
						<!--begin:Menu link-->
						<a class="menu-link" href="{{route('admin.user.list')}}">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">Admin</span>
						</a>
						<!--end:Menu link-->
					</div>
					@endif
					@if(auth()->user()->hasPermission('admin.role.list'))
					<div class="menu-item">
						<!--begin:Menu link-->
						<a class="menu-link" href="{{route('admin.role.list')}}">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">Access level</span>
						</a>
						<!--end:Menu link-->
					</div>
					@endif
					@if(auth()->user()->hasPermission('admin.setting.list.admin'))
					<div class="menu-item">
						<!--begin:Menu link-->
						<a class="menu-link" href="{{route('admin.setting.list.admin',['id'=>1])}}">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">Setting</span>
						</a>
						<!--end:Menu link-->
					</div>

                  @endif

				</div>
				<!--end::Menu-->
			</div>

		</div>

	</div>