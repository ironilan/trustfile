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
    <title>{{ setting()->title }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="title" content="Spaces - All items list">
    <meta name="author" content="Themesberg">
    <meta name="description"
        content="Premium Directory Listing Bootstrap 4 Template featuring 37 hand-crafted pages, a dashboard an Mapbox integration. Spaces also comes with a complete UI Kit featuring over 700 components by Themesberg.">
    <meta name="keywords"
        content="bootstrap, bootstrap 4 template, directory listing bootstrap, bootstrap 4 listing, bootstrap listing, bootstrap 4 directory listing template, vector map, leaflet js template, mapbox theme, mapbox template, dashboard, themesberg, user dashboard bootstrap, dashboard bootstrap, ui kit, bootstrap ui kit, premium bootstrap theme" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="canonical" href="https://themesberg.s3.us-east-2.amazonaws.com/public/products/spaces/thumbnail.jpg">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://demo.themesberg.com/pixel-pro">
    <meta property="og:title" content="Spaces - All items list">
    <meta property="og:description"
        content="Premium Directory Listing Bootstrap 4 Template featuring 37 hand-crafted pages, a dashboard an Mapbox integration. Spaces also comes with a complete UI Kit featuring over 700 components by Themesberg.">
    <meta property="og:image"
        content="https://themesberg.s3.us-east-2.amazonaws.com/public/products/spaces/thumbnail.jpg">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://demo.themesberg.com/pixel-pro">
    <meta property="twitter:title" content="Spaces - All items list">
    <meta property="twitter:description"
        content="Premium Directory Listing Bootstrap 4 Template featuring 37 hand-crafted pages, a dashboard an Mapbox integration. Spaces also comes with a complete UI Kit featuring over 700 components by Themesberg.">
    <meta property="twitter:image"
        content="https://themesberg.s3.us-east-2.amazonaws.com/public/products/spaces/thumbnail.jpg">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="120x120"
        href="{{ asset('plantilla_dashboard/assets/img/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32"
        href="{{ asset('plantilla_dashboard/assets/img/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16"
        href="{{ asset('plantilla_dashboard/assets/img/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('plantilla_dashboard/assets/img/favicon/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('plantilla_dashboard/assets/img/favicon/safari-pinned-tab.svg') }}" color="#ffffff">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

    <!-- Fontawesome -->
    <link type="text/css" href="{{ asset('plantilla_dashboard/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}"
        rel="stylesheet">

    <!-- Leaflet JS -->
    <link type="text/css" href="{{ asset('plantilla_dashboard/vendor/leaflet/dist/leaflet.css') }}" rel="stylesheet">

    <!-- Fancybox -->
    <link rel="stylesheet" href="{{ asset('plantilla_dashboard/vendor/@fancyapps/fancybox/dist/jquery.fancybox.min.css') }}">

    <!-- VectorMap -->
    <link rel="stylesheet" href="{{ asset('plantilla_dashboard/vendor/jqvmap/dist/jqvmap.min.css') }}">

    <!-- Main CSS -->
    <link type="text/css" href="{{ asset('plantilla_dashboard/css/spaces.css') }}" rel="stylesheet">

    <!-- NOTICE: You can use the _analytics.html partial to include production code specific code & trackers -->
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <style>
        .navbar .navbar-nav .dropdown-megamenu-sm{
            min-width: 199px;
        }
    </style>
    @yield('estilos')
</head>

<body>
    @if (App\Models\User::isAdmin())
        @include('frontend.components.header_admin')
    @else
        @include('frontend.components.header')
    @endif
    <main>

        @include('frontend.components.preloader')
        <!-- Hero -->
        @include('frontend.components.breadcrump')


        @yield('contenido')
    </main>

    <!-- Modal Content -->
    <div class="modal fade" id="map-listings" tabindex="-1" role="dialog" aria-labelledby="map-listings"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-full" role="document">
            <div class="modal-content position-relative">
                <div class="preloadermap bg-dark flex-column justify-content-center align-items-center">
                    <div class="position-relative">
                        <img src="../assets/img/brand/light-without-letter.svg" alt="Logo loader">
                        <img src="../assets/img/brand/letter.svg" class="rotate-letter" alt="Letter loader">
                    </div>
                </div>
                <div class="modal-header border-0 pb-1 d-block">
                    <div class="d-flex justify-content-end d-lg-none mb-2">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i class="fas fa-times"></i></span>
                        </button>
                    </div>
                    <form action="#" class="row align-items-center">
                        <div class="col-12 col-lg-3">
                            <div class="form-group m-lg-0">
                                <div class="input-group input-group-md mb-2 m-lg-0">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-search"></i></span>
                                    </div>
                                    <input id="search-location-map" type="text" class="form-control autocomplete"
                                        placeholder="Search location" tabindex="1" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-3">
                            <div class="input-group input-group-md mb-3 m-lg-0">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                </div>
                                <input class="form-control datepicker" placeholder="Select date" type="text"
                                    required>
                            </div>
                        </div>
                        <div class="col-12 col-lg-2 mb-2 mb-lg-0">
                            <button class="btn btn-primary btn-block m-0 animate-up-2" type="submit">Find a
                                desk</button>
                        </div>
                        <div class="col-lg-2 d-flex align-items-center">
                            <p class="m-0 font-small">Showing 13 results</p>
                        </div>
                        <div class="d-none col-lg-2 d-lg-block">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true"><i class="fas fa-times"></i></span>
                            </button>
                        </div>
                    </form>
                </div>
                <div class="modal-body overflow-hidden d-flex py-4">
                    <div class="row h-100">
                        <div class="d-none d-xl-block col-12 col-lg-5 overflow-auto h-100">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card border-light mb-4 animate-up-5">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col-12 col-lg-6 col-xl-5">
                                                <a href="./single-space.html">
                                                    <img src="../assets/img/private-office.jpg" alt="private office"
                                                        class="card-img p-2 rounded-xl">
                                                </a>
                                            </div>
                                            <div class="col-12 col-lg-6 col-xl-7">
                                                <div class="card-body px-3 py-2">
                                                    <a href="./single-space.html">
                                                        <h4 class="h6">Collaborative Workspace</h4>
                                                    </a>
                                                    <div class="d-flex my-2 small">
                                                        <span class="star fas fa-star text-warning"></span>
                                                        <span class="star fas fa-star text-warning"></span>
                                                        <span class="star fas fa-star text-warning"></span>
                                                        <span class="star fas fa-star text-warning"></span>
                                                        <span class="star fas fa-star text-warning"></span>
                                                        <span
                                                            class="badge badge-pill small badge-primary ml-2">5.0</span>
                                                    </div>
                                                    <div class="d-flex justify-content-between">
                                                        <div class="col pl-0">
                                                            <span class="text-muted small d-block mb-1">Monthly</span>
                                                            <span
                                                                class="h5 small text-dark font-weight-bold">500$</span>
                                                        </div>
                                                        <div class="col">
                                                            <span class="text-muted small d-block mb-1">People</span>
                                                            <span class="h5 small text-dark font-weight-bold">12</span>
                                                        </div>
                                                        <div class="col pr-0">
                                                            <span class="text-muted small d-block mb-1">Sq.Ft</span>
                                                            <span
                                                                class="h5 small text-dark font-weight-bold">600</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="card border-light mb-4 animate-up-5">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col-12 col-lg-6 col-xl-5">
                                                <a href="./single-space.html">
                                                    <img src="../assets/img/meeting-office.jpg" alt="private office"
                                                        class="card-img p-2 rounded-xl">
                                                </a>
                                            </div>
                                            <div class="col-12 col-lg-6 col-xl-7">
                                                <div class="card-body px-3 py-2">
                                                    <a href="./single-space.html">
                                                        <h4 class="h6">Meeting Office</h4>
                                                    </a>
                                                    <div class="d-flex my-2 small">
                                                        <span class="star fas fa-star text-warning"></span>
                                                        <span class="star fas fa-star text-warning"></span>
                                                        <span class="star fas fa-star text-warning"></span>
                                                        <span class="star fas fa-star text-warning"></span>
                                                        <span class="star fas fa-star-half text-warning"></span>
                                                        <span
                                                            class="badge badge-pill small badge-primary ml-2">4.7</span>
                                                    </div>
                                                    <div class="d-flex justify-content-between">
                                                        <div class="col pl-0">
                                                            <span class="text-muted small d-block mb-1">Monthly</span>
                                                            <span
                                                                class="h5 small text-dark font-weight-bold">200$</span>
                                                        </div>
                                                        <div class="col">
                                                            <span class="text-muted small d-block mb-1">People</span>
                                                            <span class="h5 small text-dark font-weight-bold">40</span>
                                                        </div>
                                                        <div class="col pr-0">
                                                            <span class="text-muted small d-block mb-1">Sq.Ft</span>
                                                            <span
                                                                class="h5 small text-dark font-weight-bold">1200</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="card border-light mb-4 animate-up-5">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col-12 col-lg-6 col-xl-5">
                                                <a href="./single-space.html">
                                                    <img src="../assets/img/lifestyle-office.jpg" alt="private office"
                                                        class="card-img p-2 rounded-xl">
                                                </a>
                                            </div>
                                            <div class="col-12 col-lg-6 col-xl-7">
                                                <div class="card-body px-3 py-2">
                                                    <a href="./single-space.html">
                                                        <h4 class="h6">Lifestyle Office</h4>
                                                    </a>
                                                    <div class="d-flex my-2 small">
                                                        <span class="star fas fa-star text-warning"></span>
                                                        <span class="star fas fa-star text-warning"></span>
                                                        <span class="star fas fa-star text-warning"></span>
                                                        <span class="star fas fa-star text-warning"></span>
                                                        <span class="star fas fa-star text-warning"></span>
                                                        <span
                                                            class="badge badge-pill small badge-primary ml-2">5.0</span>
                                                    </div>
                                                    <div class="d-flex justify-content-between">
                                                        <div class="col pl-0">
                                                            <span class="text-muted small d-block mb-1">Monthly</span>
                                                            <span
                                                                class="h5 small text-dark font-weight-bold">500$</span>
                                                        </div>
                                                        <div class="col">
                                                            <span class="text-muted small d-block mb-1">People</span>
                                                            <span
                                                                class="h5 small text-dark font-weight-bold">10-50</span>
                                                        </div>
                                                        <div class="col pr-0">
                                                            <span class="text-muted small d-block mb-1">Sq.Ft</span>
                                                            <span
                                                                class="h5 small text-dark font-weight-bold">900</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="card border-light mb-4 animate-up-5">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col-12 col-lg-6 col-xl-5">
                                                <a href="./single-space.html">
                                                    <img src="../assets/img/conference-office.jpg"
                                                        alt="private office" class="card-img p-2 rounded-xl">
                                                </a>
                                            </div>
                                            <div class="col-12 col-lg-6 col-xl-7">
                                                <div class="card-body px-3 py-2">
                                                    <a href="./single-space.html">
                                                        <h4 class="h6">Conference Office</h4>
                                                    </a>
                                                    <div class="d-flex my-2 small">
                                                        <span class="star fas fa-star text-warning"></span>
                                                        <span class="star fas fa-star text-warning"></span>
                                                        <span class="star fas fa-star text-warning"></span>
                                                        <span class="star fas fa-star text-warning"></span>
                                                        <span class="star fas fa-star text-warning"></span>
                                                        <span
                                                            class="badge badge-pill small badge-primary ml-2">5.0</span>
                                                    </div>
                                                    <div class="d-flex justify-content-between">
                                                        <div class="col pl-0">
                                                            <span class="text-muted small d-block mb-1">Monthly</span>
                                                            <span
                                                                class="h5 small text-dark font-weight-bold">500$</span>
                                                        </div>
                                                        <div class="col">
                                                            <span class="text-muted small d-block mb-1">People</span>
                                                            <span
                                                                class="h5 small text-dark font-weight-bold">10-50</span>
                                                        </div>
                                                        <div class="col pr-0">
                                                            <span class="text-muted small d-block mb-1">Sq.Ft</span>
                                                            <span
                                                                class="h5 small text-dark font-weight-bold">900</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="extraContent" style="display: none">
                                    <div class="col-12">
                                        <div class="card border-light mb-4 animate-up-5">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-12 col-lg-6 col-xl-5">
                                                    <a href="./single-space.html">
                                                        <img src="../assets/img/meeting-office.jpg"
                                                            alt="private office" class="card-img p-2 rounded-xl">
                                                    </a>
                                                </div>
                                                <div class="col-12 col-lg-6 col-xl-7">
                                                    <div class="card-body px-3 py-2">
                                                        <a href="./single-space.html">
                                                            <h4 class="h6">Meeting Office</h4>
                                                        </a>
                                                        <div class="d-flex my-2 small">
                                                            <span class="star fas fa-star text-warning"></span>
                                                            <span class="star fas fa-star text-warning"></span>
                                                            <span class="star fas fa-star text-warning"></span>
                                                            <span class="star fas fa-star text-warning"></span>
                                                            <span class="star fas fa-star-half text-warning"></span>
                                                            <span
                                                                class="badge badge-pill small badge-primary ml-2">4.7</span>
                                                        </div>
                                                        <div class="d-flex justify-content-between">
                                                            <div class="col pl-0">
                                                                <span
                                                                    class="text-muted small d-block mb-1">Monthly</span>
                                                                <span
                                                                    class="h5 small text-dark font-weight-bold">200$</span>
                                                            </div>
                                                            <div class="col">
                                                                <span
                                                                    class="text-muted small d-block mb-1">People</span>
                                                                <span
                                                                    class="h5 small text-dark font-weight-bold">40</span>
                                                            </div>
                                                            <div class="col pr-0">
                                                                <span
                                                                    class="text-muted small d-block mb-1">Sq.Ft</span>
                                                                <span
                                                                    class="h5 small text-dark font-weight-bold">1200</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="card border-light mb-4 animate-up-5">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-12 col-lg-6 col-xl-5">
                                                    <a href="./single-space.html">
                                                        <img src="../assets/img/lifestyle-office.jpg"
                                                            alt="private office" class="card-img p-2 rounded-xl">
                                                    </a>
                                                </div>
                                                <div class="col-12 col-lg-6 col-xl-7">
                                                    <div class="card-body px-3 py-2">
                                                        <a href="./single-space.html">
                                                            <h4 class="h6">Lifestyle Office</h4>
                                                        </a>
                                                        <div class="d-flex my-2 small">
                                                            <span class="star fas fa-star text-warning"></span>
                                                            <span class="star fas fa-star text-warning"></span>
                                                            <span class="star fas fa-star text-warning"></span>
                                                            <span class="star fas fa-star text-warning"></span>
                                                            <span class="star fas fa-star text-warning"></span>
                                                            <span
                                                                class="badge badge-pill small badge-primary ml-2">5.0</span>
                                                        </div>
                                                        <div class="d-flex justify-content-between">
                                                            <div class="col pl-0">
                                                                <span
                                                                    class="text-muted small d-block mb-1">Monthly</span>
                                                                <span
                                                                    class="h5 small text-dark font-weight-bold">500$</span>
                                                            </div>
                                                            <div class="col">
                                                                <span
                                                                    class="text-muted small d-block mb-1">People</span>
                                                                <span
                                                                    class="h5 small text-dark font-weight-bold">10-50</span>
                                                            </div>
                                                            <div class="col pr-0">
                                                                <span
                                                                    class="text-muted small d-block mb-1">Sq.Ft</span>
                                                                <span
                                                                    class="h5 small text-dark font-weight-bold">900</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="card border-light mb-4 animate-up-5">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-12 col-lg-6 col-xl-5">
                                                    <a href="./single-space.html">
                                                        <img src="../assets/img/conference-office.jpg"
                                                            alt="private office" class="card-img p-2 rounded-xl">
                                                    </a>
                                                </div>
                                                <div class="col-12 col-lg-6 col-xl-7">
                                                    <div class="card-body px-3 py-2">
                                                        <a href="./single-space.html">
                                                            <h4 class="h6">Conference Office</h4>
                                                        </a>
                                                        <div class="d-flex my-2 small">
                                                            <span class="star fas fa-star text-warning"></span>
                                                            <span class="star fas fa-star text-warning"></span>
                                                            <span class="star fas fa-star text-warning"></span>
                                                            <span class="star fas fa-star text-warning"></span>
                                                            <span class="star fas fa-star text-warning"></span>
                                                            <span
                                                                class="badge badge-pill small badge-primary ml-2">5.0</span>
                                                        </div>
                                                        <div class="d-flex justify-content-between">
                                                            <div class="col pl-0">
                                                                <span
                                                                    class="text-muted small d-block mb-1">Monthly</span>
                                                                <span
                                                                    class="h5 small text-dark font-weight-bold">500$</span>
                                                            </div>
                                                            <div class="col">
                                                                <span
                                                                    class="text-muted small d-block mb-1">People</span>
                                                                <span
                                                                    class="h5 small text-dark font-weight-bold">10-50</span>
                                                            </div>
                                                            <div class="col pr-0">
                                                                <span
                                                                    class="text-muted small d-block mb-1">Sq.Ft</span>
                                                                <span
                                                                    class="h5 small text-dark font-weight-bold">900</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 mt-2 mb-4 text-center">
                                    <button id="loadOnClick"
                                        class="btn btn-primary shadow-soft border-soft btn-loading-overlay mr-2 mb-2"
                                        type="button">
                                        <span class="spinner">
                                            <span class="spinner-border spinner-border-sm" role="status"
                                                aria-hidden="true"></span>
                                        </span>
                                        <span class="ml-1 btn-inner-text">Show more</span>
                                    </button>
                                    <p id="allLoadedText" style="display: none;">That's all, Sparky!</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-7">
                            <div id="mapListings"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Modal Content -->

    <footer class="footer py-6 bg-primary text-white">
        <div class="container">


            <div class="row">
                <div class="col mb-md-0">
                    <a href="https://themesberg.com" target="_blank" class="d-flex justify-content-center">
                        <img src="{{Storage::url(setting()->logo)}}" style="width: 150px" class="mb-3" alt="Themesberg Logo">
                    </a>
                    <div class="d-flex text-center justify-content-center align-items-center" role="contentinfo">
                        <p class="font-weight-normal font-small mb-0">Copyright © Copeco
                            <span class="current-year">{{date('Y')}}</span>. All rights reserved.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Core -->
    <script src="{{ asset('plantilla_dashboard/vendor/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('plantilla_dashboard/vendor/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('plantilla_dashboard/vendor/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('plantilla_dashboard/vendor/headroom.js/dist/headroom.min.js') }}"></script>
    <script src="{{ asset('plantilla_dashboard/vendor/onscreen/dist/on-screen.umd.min.js') }}"></script>

    <!-- NoUISlider -->
    <script src="{{ asset('plantilla_dashboard/vendor/nouislider/distribute/nouislider.min.js') }}"></script>

    <!-- Bootstrap Datepicker -->
    <script src="{{ asset('plantilla_dashboard/vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>

    <!-- jQuery Waypoints -->
    <script src="{{ asset('plantilla_dashboard/vendor/waypoints/lib/jquery.waypoints.min.js') }}"></script>

    <!-- Owl acrousel -->
    <script src="{{ asset('plantilla_dashboard/vendor/owl.carousel/dist/owl.carousel.min.js') }}"></script>

    <!-- Smooth scroll -->
    <script src="{{ asset('plantilla_dashboard/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js') }}"></script>

    <!-- Fancybox -->
    <script src="{{ asset('plantilla_dashboard/vendor/@fancyapps/fancybox/dist/jquery.fancybox.min.js') }}"></script>

    <!-- Sticky sidebar -->
    <script src="{{ asset('plantilla_dashboard/vendor/sticky-sidebar/dist/sticky-sidebar.min.js') }}"></script>

    <!-- Mapbox & Leaflet.js -->
    <script src="{{ asset('plantilla_dashboard/vendor/leaflet/dist/leaflet.js') }}"></script>

    <!-- Chartist -->
    <script src="{{ asset('plantilla_dashboard/vendor/chartist/dist/chartist.min.js') }}"></script>
    <script src="{{ asset('plantilla_dashboard/vendor/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js') }}"></script>

    <!-- Vector Maps -->
    <script src="{{ asset('plantilla_dashboard/vendor/jqvmap/dist/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('plantilla_dashboard/vendor/jqvmap/dist/maps/jquery.vmap.usa.js') }}"></script>

    <!-- Sliderform -->
    <script src="{{ asset('plantilla_dashboard/assets/js/jquery.slideform.js') }}"></script>

    <!-- Spaces custom Javascript -->
    <script src="{{ asset('plantilla_dashboard/assets/js/spaces.js') }}"></script>

    @yield('scripts')
</body>

</html>
