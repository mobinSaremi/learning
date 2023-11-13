<!DOCTYPE html>
<!-- saved from url=(0090)https://preview.keenthemes.com/metronic8/demo1/authentication/layouts/overlay/sign-in.html -->
<html lang="en" dir="rtl" direction="rtl" style="direction:rtl;" data-theme="light">
<!--begin::Head-->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>login themex</title>
    <meta name="description" content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 100,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Rails, Spring, Blazor, Django, Flask &amp; Laravel versions. Grab your copy now and get life-time updates for free.">
    <meta name="keywords" content="metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Rails, Spring, Blazor, Django, Flask &amp; Laravel starter kits, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="article">
    <meta property="og:title" content="Metronic | Bootstrap HTML, VueJS, React, Angular, Asp.Net Core, Rails, Spring, Blazor, Django, Flask &amp; Laravel Admin Dashboard Theme">
    <meta property="og:url" content="https://keenthemes.com/metronic">
    <meta property="og:site_name" content="Keenthemes | Metronic">
    <link rel="canonical" href="https://preview.keenthemes.com/metronic8">
    <link rel="shortcut icon" href="https://preview.keenthemes.com/metronic8/demo1/assets/media/logos/favicon.ico">
    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="{{asset('assets/admin/css/style.css')}}">
    <!--end::Fonts-->
    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="{{asset('assets/admin/css/plugins.bundle.rtl.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/admin/css/style.bundle.rtl.css')}}" rel="stylesheet" type="text/css">
    <!--end::Global Stylesheets Bundle-->
    <!--Begin::Google Tag Manager -->
    <script src="{{asset('assets/admin/js/sweetalert.min.js')}}"></script>
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-5FS8GGP');
    </script>
    <!--End::Google Tag Manager -->
    <meta http-equiv="origin-trial" content="A751Xsk4ZW3DVQ8WZng2Dk5s3YzAyqncTzgv+VaE6wavgTY0QHkDvUTET1o7HanhuJO8lgv1Vvc88Ij78W1FIAAAAAB7eyJvcmlnaW4iOiJodHRwczovL3d3dy5nb29nbGV0YWdtYW5hZ2VyLmNvbTo0NDMiLCJmZWF0dXJlIjoiUHJpdmFjeVNhbmRib3hBZHNBUElzIiwiZXhwaXJ5IjoxNjgwNjUyNzk5LCJpc1RoaXJkUGFydHkiOnRydWV9">
    <script type="text/javascript" async="" src="./login-deconed_files/f.txt"></script>
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="app-blank bgi-size-cover bgi-position-center bgi-no-repeat">
    @include('layouts.admin.blocks.message-swal')

    <div class="d-flex flex-column flex-root" id="kt_app_root">

        <!--begin::Authentication - Sign-in -->
        <div class="d-flex flex-column flex-lg-row flex-column-fluid">
            <!--begin::Aside-->
            <div class="d-flex flex-lg-row-fluid">
                <!--begin::Content-->
                <div class="d-flex flex-column flex-center pb-0 pb-lg-10 p-10 w-100">
                    <!--begin::Image-->
                    <img class="theme-light-show mx-auto mw-100 w-150px w-lg-300px mb-10 mb-lg-20" src="./login-deconed_files/agency.png" alt="">
                    <img class="theme-dark-show mx-auto mw-100 w-150px w-lg-300px mb-10 mb-lg-20" src="./login-deconed_files/agency-dark.png" alt="">
                    <!--end::Image-->
                    <!--begin::Title-->
                    <h1 class="text-gray-800 fs-2qx fw-bold text-center mb-7">welcom to themex site :)</h1>

                </div>
                <!--end::Content-->
            </div>
            <!--begin::Aside-->
            <!--begin::Body-->
            <div class="d-flex flex-column-fluid flex-lg-row-auto justify-content-center justify-content-lg-end p-12">
                <!--begin::Wrapper-->
                <div class="bg-body d-flex flex-center rounded-4 w-md-600px p-10">
                    <!--begin::Content-->
                    <div class="w-md-400px">
                        <!--begin::Form-->
                        
                        <form class="form w-100 fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate" id="kt_sign_in_form" method="POST" data-kt-redirect-url="/metronic8/demo1/../demo1/index.html" action="{{route('login')}}">

                            @csrf

                            <!--begin::Heading-->
                            <div class="text-center mb-11">
                                <!--begin::Title-->
                                <h1 class="text-dark fw-bolder mb-3">Admin</h1>

                            </div>
                            <!--begin::Heading-->
                            <!--begin::Login options-->

                            <!--end::Login options-->
                            <!--begin::Separator-->
                            <div class="separator separator-content my-14">
                                <span class="w-125px text-gray-500 fw-semibold fs-7">Enter your details</span>
                            </div>


                            <!--end::Separator-->
                            <!--begin::Input group=-->
                            <div class="fv-row mb-8 fv-plugins-icon-container">
                                <!--begin::Email-->
                                <input type="email" placeholder="email" name="email" autocomplete="off" class="form-control bg-transparent">
                                <!--end::Email-->
                                <div class="fv-plugins-message-container invalid-feedback"></div>
                            </div>
                            <!--end::Input group=-->
                            <div class="fv-row mb-3 fv-plugins-icon-container">
                                <!--begin::Password-->
                                <input type="password" placeholder="password" name="password" autocomplete="off" class="form-control bg-transparent" style="text-align: left;">
                                <!--end::Password-->
                                <div class="fv-plugins-message-container invalid-feedback"></div>
                            </div>
                            <!--end::Input group=-->
                            <!--begin::Wrapper-->

                            <!--end::Wrapper-->
                            <!--begin::Submit button-->
                            <div class="d-grid mb-10">
                                <button type="submit" id="kt_sign_in_submit" class="btn btn-primary">
                                    <!--begin::Indicator label-->
                                    <span class="indicator-label">log in</span>
                                    <!--end::Indicator label-->
                                    <!--begin::Indicator progress-->
                                    <span class="indicator-progress">Please wait...
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                    <!--end::Indicator progress-->
                                </button>
                            </div>
                            <!--end::Submit button-->

                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Content-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Body-->
        </div>
        <!--end::Authentication - Sign-in-->
    </div>
    <!--end::Root-->
    <!--begin::Javascript-->
    <script>
        var hostUrl = "/metronic8/demo1/assets/";
    </script>
    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
    <script src="./login-deconed_files/plugins.bundle.js.download"></script>
    <script src="./login-deconed_files/scripts.bundle.js.download"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Custom Javascript(used for this page only)-->
    <script src="./login-deconed_files/general.js.download"></script>
    <!--end::Custom Javascript-->
    <!--end::Javascript-->


    <svg id="SvgjsSvg1001" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;">
        <defs id="SvgjsDefs1002"></defs>
        <polyline id="SvgjsPolyline1003" points="0,0"></polyline>
        <path id="SvgjsPath1004" d="M0 0 "></path>
    </svg>
    <script type="text/javascript" id="">
        ! function(b, e, f, g, a, c, d) {
            b.fbq || (a = b.fbq = function() {
                    a.callMethod ? a.callMethod.apply(a, arguments) : a.queue.push(arguments)
                }, b._fbq || (b._fbq = a), a.push = a, a.loaded = !0, a.version = "2.0", a.queue = [], c = e
                .createElement(f), c.async = !0, c.src = g, d = e.getElementsByTagName(f)[0], d.parentNode
                .insertBefore(c, d))
        }(window, document, "script", "https://connect.facebook.net/en_US/fbevents.js");
        fbq("init", "738802870177541");
        fbq("track", "PageView");
    </script>
    <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=738802870177541&amp;ev=PageView&amp;noscript=1"></noscript>
    <script type="text/javascript" id="">
        try {
            (function() {
                var a = google_tag_manager["GTM-5FS8GGP"].macro(6);
                a = "undefined" == typeof a ? google_tag_manager["GTM-5FS8GGP"].macro(7) : a;
                var b = new Date;
                b.setTime(b.getTime() + 18E5);
                var c = "gtm-session-start";
                b = b.toGMTString();
                var d = "/",
                    e = ".keenthemes.com";
                document.cookie = c + "\x3d" + a + "; Expires\x3d" + b + "; domain\x3d" + e + "; Path\x3d" + d
            })()
        } catch (a) {};
    </script>
    <script type="text/javascript" id="">
        (function() {
            var a = google_tag_manager["GTM-5FS8GGP"].macro(8) - 0 + 1,
                b = ".keenthemes.com";
            document.cookie = "damlPageCount\x3d" + a + ";domain\x3d" + b + ";path\x3d/;"
        })();
    </script>
</body>
<!--end::Body-->

</html>