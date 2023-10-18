<!--

=========================================================
* Spaces - Bootstrap Directory Listing Template
=========================================================

* Product Page: https://themes.getbootstrap.com/product/spaces/
* Copyright 2020 Themesberg EULA (https://themes.getbootstrap.com/licenses/)

* Coded by https://themesberg.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- Primary Meta Tags -->
<title>{{setting()->title}}</title>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="title" content="Spaces - Sign in">
<meta name="author" content="Themesberg">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="description" content="Premium Directory Listing Bootstrap 4 Template featuring 37 hand-crafted pages, a dashboard an Mapbox integration. Spaces also comes with a complete UI Kit featuring over 700 components by Themesberg.">
<meta name="keywords" content="bootstrap, bootstrap 4 template, directory listing bootstrap, bootstrap 4 listing, bootstrap listing, bootstrap 4 directory listing template, vector map, leaflet js template, mapbox theme, mapbox template, dashboard, themesberg, user dashboard bootstrap, dashboard bootstrap, ui kit, bootstrap ui kit, premium bootstrap theme" />
<link rel="canonical" href="https://themesberg.s3.us-east-2.amazonaws.com/public/products/spaces/thumbnail.jpg">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="https://demo.themesberg.com/pixel-pro">
<meta property="og:title" content="Spaces - Sign in">
<meta property="og:description" content="Premium Directory Listing Bootstrap 4 Template featuring 37 hand-crafted pages, a dashboard an Mapbox integration. Spaces also comes with a complete UI Kit featuring over 700 components by Themesberg.">
<meta property="og:image" content="https://themesberg.s3.us-east-2.amazonaws.com/public/products/spaces/thumbnail.jpg">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="https://demo.themesberg.com/pixel-pro">
<meta property="twitter:title" content="Spaces - Sign in">
<meta property="twitter:description" content="Premium Directory Listing Bootstrap 4 Template featuring 37 hand-crafted pages, a dashboard an Mapbox integration. Spaces also comes with a complete UI Kit featuring over 700 components by Themesberg.">
<meta property="twitter:image" content="https://themesberg.s3.us-east-2.amazonaws.com/public/products/spaces/thumbnail.jpg">

<!-- Favicon -->
<link rel="apple-touch-icon" sizes="120x120" href="{{asset('plantilla_dashboard/assets/img/favicon/apple-touch-icon.png')}}">
<link rel="icon" type="image/png" sizes="32x32" href="{{asset('plantilla_dashboard/assets/img/favicon/favicon-32x32.png')}}">
<link rel="icon" type="image/png" sizes="16x16" href="{{asset('plantilla_dashboard/assets/img/favicon/favicon-16x16.png')}}">
<link rel="manifest" href="{{asset('plantilla_dashboard/assets/img/favicon/site.webmanifest')}}">
<link rel="mask-icon" href="{{asset('plantilla_dashboard/assets/img/favicon/safari-pinned-tab.svg')}}" color="#ffffff">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="theme-color" content="#ffffff">

<!-- Fontawesome -->
<link type="text/css" href="{{asset('plantilla_dashboard/vendor/@fortawesome/fontawesome-free/css/all.min.css')}}" rel="stylesheet">

<!-- Leaflet JS -->
<link type="text/css" href="{{asset('plantilla_dashboard/vendor/leaflet/dist/leaflet.css')}}" rel="stylesheet">

<!-- Fancybox -->
<link rel="stylesheet" href="{{asset('plantilla_dashboard/vendor/@fancyapps/fancybox/dist/jquery.fancybox.min.css')}}">

<!-- VectorMap -->
<link rel="stylesheet" href="{{asset('plantilla_dashboard/vendor/jqvmap/dist/jqvmap.min.css')}}">

<!-- Main CSS -->
<link type="text/css" href="{{asset('plantilla_dashboard/css/spaces.css')}}" rel="stylesheet">

<!-- NOTICE: You can use the _analytics.html partial to include production code specific code & trackers -->
<link rel="stylesheet" href="{{asset('css/dashboard.css')}}">
@yield('estilos')
</head>

<body>
    <main>

        <div class="preloader bg-dark flex-column justify-content-center align-items-center">
    <div class="position-relative">
        <img src="{{asset('plantilla_dashboard/assets/img/brand/light-without-letter.svg')}}" alt="Logo loader">
        <img src="{{asset('plantilla_dashboard/assets/img/brand/letter.svg')}}" class="rotate-letter" alt="Letter loader">
    </div>
</div>

        <!-- Section -->
        <section class="min-vh-100 d-flex align-items-center section-image overlay-soft-dark py-5 py-lg-0" data-background="{{asset('plantilla_dashboard/assets/img/form-image.jpg')}}">
            <div class="container">
                @yield('contenido')
            </div>
        </section>
    </main>

    <!-- Core -->
<script src="{{asset('plantilla_dashboard/vendor/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('plantilla_dashboard/vendor/popper.js/dist/umd/popper.min.js')}}"></script>
<script src="{{asset('plantilla_dashboard/vendor/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script src="{{asset('plantilla_dashboard/vendor/headroom.js/dist/headroom.min.js')}}"></script>
<script src="{{asset('plantilla_dashboard/vendor/onscreen/dist/on-screen.umd.min.js')}}"></script>

<!-- NoUISlider -->
<script src="{{asset('plantilla_dashboard/vendor/nouislider/distribute/nouislider.min.js')}}"></script>

<!-- Bootstrap Datepicker -->
<script src="{{asset('plantilla_dashboard/vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>

<!-- jQuery Waypoints -->
<script src="{{asset('plantilla_dashboard/vendor/waypoints/lib/jquery.waypoints.min.js')}}"></script>

<!-- Owl acrousel -->
<script src="{{asset('plantilla_dashboard/vendor/owl.carousel/dist/owl.carousel.min.js')}}"></script>

<!-- Smooth scroll -->
<script src="{{asset('plantilla_dashboard/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js')}}"></script>

<!-- Fancybox -->
<script src="{{asset('plantilla_dashboard/vendor/@fancyapps/fancybox/dist/jquery.fancybox.min.js')}}"></script>

<!-- Sticky sidebar -->
<script src="{{asset('plantilla_dashboard/vendor/sticky-sidebar/dist/sticky-sidebar.min.js')}}"></script>

<!-- Mapbox & Leaflet.js -->
<script src="{{asset('plantilla_dashboard/vendor/leaflet/dist/leaflet.js')}}"></script>

<!-- Chartist -->
<script src="{{asset('plantilla_dashboard/vendor/chartist/dist/chartist.min.js')}}"></script>
<script src="{{asset('plantilla_dashboard/vendor/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js')}}"></script>

<!-- Vector Maps -->
<script src="{{asset('plantilla_dashboard/vendor/jqvmap/dist/jquery.vmap.min.js')}}"></script>
<script src="{{asset('plantilla_dashboard/vendor/jqvmap/dist/maps/jquery.vmap.usa.js')}}"></script>

<!-- Sliderform -->
<script src="{{asset('plantilla_dashboard/assets/js/jquery.slideform.js')}}"></script>

<!-- Spaces custom Javascript -->
<script src="{{asset('plantilla_dashboard/assets/js/spaces.js')}}"></script>

@yield('scripts')
</body>

</html>
