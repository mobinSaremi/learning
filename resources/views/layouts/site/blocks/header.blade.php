<div class="topbar" id="top">
    <div class="header exchange-logo">
        <div class="container po-relative">
            <nav class="navbar navbar-expand-lg header-nav-bar">
                <a href="{{ route('index') }}" class="navbar-brand">
                    <img src="{{ asset('assets/upload/' . $setting_site->logo) }}" class="default-logo" alt="Themex">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse hover-dropdown font-14 ml-auto" id="navigation" >
                
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('index') }}">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Category<i class="fa fa-angle-down m-l-5"></i></a>
                            
                            <ul class="dropdown-menu font-14">
                                @foreach($categor as $cat)
                                @if(count($cat->childs) > 0)
                                <li class="dropdown-submenu"> <a class="dropdown-toggle dropdown-item" href="javascript:void(0)"> {{$cat->title}} <i class="fa fa-angle-right ml-auto"></i></a>
                                    <ul class="dropdown-menu menu-right font-14">
                                        @foreach($cat->childs as $child)
                                        <li><a class="dropdown-item" href="{{ route('productdetail') }}">{{ @$child->title }}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                                @else
                                <li><a class="dropdown-item" href="{{ route('productlist') }}">{{ @$cat->title }}</a></li>
                                @endif
                                @endforeach
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('getabout') }}">About us</a>
                        </li>
                        <li class="nav-item">
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div>



