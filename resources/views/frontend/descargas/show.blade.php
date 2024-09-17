@extends('layouts.dashboard')
@section('breadcrumb')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb breadcrumb-transparent justify-content-center mb-4">
        <li class="breadcrumb-item text-secondary"><a href="/home">Home</a></li>
        <li class="breadcrumb-item text-secondary"><a href="/dashboard/descargas">Documentos</a>
        </li>
        <li class="breadcrumb-item text-white active" aria-current="page">nombre original</li>
    </ol>
</nav>
<h1 class="mb-4">nombre original</h1>
<div class="d-block d-md-flex justify-content-center">
    <span class="h6 font-weight-light"><span
            class="fas fa-check-circle mr-1 pr-1"></span>Verified</span>
    <span class="lh-120 ml-md-4"><i class="fas fa-map-marker-alt mr-1 pr-1"></i>26,
        Vancouver, BC, Canada - 324578
        <a data-fancybox
            href="https://www.google.com/maps/place/New+York,+NY,+USA/@40.6971494,-74.2598683,10z/data=!3m1!4b1!4m5!3m4!1s0x89c24fa5d33f083b:0xc80b8f06e177fe62!8m2!3d40.7127753!4d-74.0059728"
            class="ml-md-3">See Location</a>
    </span>
</div>
@endsection

@section('contenido')

    <div class="section section-lg pt-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <!-- Tab -->
                    <nav>
                        <div class="nav nav-tabs flex-column flex-md-row border-light mb-3" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-about-tab" data-toggle="tab" href="#nav-about"
                                role="tab" aria-controls="nav-about" aria-selected="true"><span
                                    class="far fa-address-card mr-2"></span>About</a>
                            <a class="nav-item nav-link" id="nav-video-tab" data-toggle="tab" href="#nav-video"
                                role="tab" aria-controls="nav-video" aria-selected="false"><span
                                    class="far fa-play-circle mr-2"></span>Video</a>
                            <a class="nav-item nav-link" id="nav-amenities-tab" data-toggle="tab" href="#nav-amenities"
                                role="tab" aria-controls="nav-amenities" aria-selected="false"><span
                                    class="fas fa-cubes mr-2"></span>Amenities</a>
                            <a class="nav-item nav-link" id="nav-reviews-tab" data-toggle="tab" href="#nav-reviews"
                                role="tab" aria-controls="nav-reviews" aria-selected="false"><span
                                    class="far fa-star mr-2"></span>Reviews</a>
                            <a class="nav-item nav-link" id="nav-location-tab" data-toggle="tab" href="#nav-location"
                                role="tab" aria-controls="nav-location" aria-selected="false"><span
                                    class="fas fa-map-marker-alt mr-2"></span>Location</a>
                        </div>
                    </nav>
                    <!-- About Tab -->
                    <div class="tab-content mt-5 mb-3" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-about" role="tabpanel"
                            aria-labelledby="nav-about-tab">
                            <div class="row mb-5">
                                <div class="col-12">
                                    <div class="fancy-gallery mb-5">
                                        <div class="row">
                                            <a href="../assets/img/conference-office.jpg"
                                                class="mb-4 col-6 col-sm-4 img-fluid" data-fancybox="images"
                                                data-caption="Conference Space">
                                                <img class="rounded" src="../assets/img/conference-office.jpg"
                                                    alt="" />
                                            </a>
                                            <a href="../assets/img/cowork-office.jpg" class="mb-4 col-6 col-sm-4 img-fluid"
                                                data-fancybox="images" data-caption="Cowork Office">
                                                <img class="rounded" src="../assets/img/cowork-office.jpg"
                                                    alt="" />
                                            </a>
                                            <a href="../assets/img/lifestyle-office.jpg"
                                                class="mb-4 col-6 col-sm-4 img-fluid" data-fancybox="images"
                                                data-caption="Lifestyle Space">
                                                <img class="rounded" src="../assets/img/lifestyle-office.jpg"
                                                    alt="" />
                                            </a>
                                            <a href="../assets/img/image-office.jpg" class="mb-4 col-6 col-sm-4 img-fluid"
                                                data-fancybox="images" data-caption="Conference Space">
                                                <img class="rounded" src="../assets/img/image-office.jpg"
                                                    alt="" />
                                            </a>
                                            <a href="../assets/img/meeting-office.jpg"
                                                class="mb-4 col-6 col-sm-4 img-fluid" data-fancybox="images"
                                                data-caption="Meeting Office">
                                                <img class="rounded" src="../assets/img/meeting-office.jpg"
                                                    alt="" />
                                            </a>
                                            <a href="../assets/img/private-office.jpg"
                                                class="mb-4 col-6 col-sm-4 img-fluid" data-fancybox="images"
                                                data-caption="Private Space">
                                                <img class="rounded" src="../assets/img/private-office.jpg"
                                                    alt="" />
                                            </a>
                                        </div>
                                    </div>
                                    <p><span class="font-weight-bold">L'atelier</span> is the brainchild of 3
                                        innovative
                                        guys that want to create a working hub for the local community. The plan is
                                        to
                                        offer a cool place to hang out with other creative souls and let the
                                        brainwaves go
                                        berserk.
                                    </p>
                                    <p>The guys were the group behind the Startup Weekend Vancouver, Startup Pirates
                                        Vancouver and Startup Coffee Vancouver, so they are no fools and have plenty
                                        of
                                        experience in startups and community growth. This project is another notch
                                        into
                                        creating Vancouver as a regional startup hub.
                                    </p>
                                    <p>Cowork Vancouver is aiming to attract the techies, the freelance developers
                                        or
                                        anyone wishing to get involved in the startup scene - really there are no
                                        exclusions of bodies who may want a desk - the founders just want a
                                        community of
                                        entrepreneurs and geeks to mingle with.
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="card card-body bg-soft border-light p-2">
                                        <div class="card-group bg-soft">
                                            <div class="card mb-0">
                                                <div class="card-body text-center px-0 px-md-3">
                                                    <div class="icon icon-secondary">
                                                        <span class="far fa-calendar-alt"></span>
                                                    </div>
                                                    <!-- Heading -->
                                                    <div class="h5 mt-3 mb-0">
                                                        1 Year
                                                    </div>
                                                    <!-- Text -->
                                                    <span class="text-muted h6 font-weight-normal mb-0">
                                                        Minimum term
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="card mb-0 border-left">
                                                <div class="card-body text-center px-0 px-md-3">
                                                    <div class="icon icon-secondary">
                                                        <span class="fas fa-ruler-combined"></span>
                                                    </div>
                                                    <!-- Heading -->
                                                    <div class="h5 mt-3 mb-0">
                                                        180SqFt
                                                    </div>
                                                    <!-- Text -->
                                                    <span class="text-muted h6 font-weight-normal mb-0">
                                                        Space size
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="card mb-0 border-left">
                                                <div class="card-body text-center px-0 px-md-3">
                                                    <div class="icon icon-secondary">
                                                        <span class="fas fa-users"></span>
                                                    </div>
                                                    <!-- Heading -->
                                                    <div class="h5 mt-3 mb-0">
                                                        10-30
                                                    </div>
                                                    <!-- Text -->
                                                    <span class="text-muted h6 font-weight-normal mb-0">
                                                        Peoples
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="card mb-0 border-left">
                                                <div class="card-body text-center px-0 px-md-3">
                                                    <div class="icon icon-secondary">
                                                        <span class="fas fa-couch"></span>
                                                    </div>
                                                    <!-- Heading -->
                                                    <div class="h5 mt-3 mb-0">
                                                        Meeting
                                                    </div>
                                                    <!-- Text -->
                                                    <span class="text-muted h6 font-weight-normal mb-0">
                                                        Space type
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End of About Tab -->
                        <!-- Video Tab -->
                        <div class="tab-pane fade" id="nav-video" role="tabpanel" aria-labelledby="nav-video-tab">
                            <div class="video-poster overlay-dark position-relative rounded">
                                <a data-fancybox href="https://vimeo.com/40842620">
                                    <span class="icon icon-white icon-xl"><span class="fas fa-play-circle"></span></span>
                                </a>
                                <img src="../assets/img/lifestyle-office.jpg" alt="Image">
                            </div>
                        </div>
                        <!-- End of Video Tab -->
                        <!-- Amenities Tab -->
                        <div class="tab-pane fade" id="nav-amenities" role="tabpanel"
                            aria-labelledby="nav-amenities-tab">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="card border-bottom rounded-0 p-4">
                                        <h2 class="h5">Basic</h2>
                                        <ul class="list-unstyled mb-0">
                                            <li class="d-flex py-1">
                                                <span class="icon icon-xs icon-primary">
                                                    <span class="fas fa-check-circle mr-2"></span>
                                                </span>
                                                <span>High-Speed WiFi</span>
                                            </li>
                                            <li class="d-flex py-1">
                                                <span class="icon icon-xs icon-primary">
                                                    <span class="fas fa-check-circle mr-2"></span>
                                                </span>
                                                <span>Air Conditioning</span>
                                            </li>
                                            <li class="d-flex py-1">
                                                <span class="icon icon-xs icon-primary">
                                                    <span class="fas fa-check-circle mr-2"></span>
                                                </span>
                                                <span>Heating</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="card border-bottom rounded-0 p-4">
                                        <h2 class="h5">Seating</h2>
                                        <ul class="list-unstyled mb-0">
                                            <li class="d-flex py-1">
                                                <span class="icon icon-xs icon-primary">
                                                    <span class="fas fa-check-circle mr-2"></span>
                                                </span>
                                                <span>Standing Desks</span>
                                            </li>
                                            <li class="d-flex py-1">
                                                <span class="icon icon-xs icon-primary">
                                                    <span class="fas fa-check-circle mr-2"></span>
                                                </span>
                                                <span>Ergonomic Chairs</span>
                                            </li>
                                            <li class="d-flex py-1">
                                                <span class="icon icon-xs icon-primary">
                                                    <span class="fas fa-check-circle mr-2"></span>
                                                </span>
                                                <span>Beanbags</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="card border-bottom rounded-0 p-4">
                                        <h2 class="h5">Community</h2>
                                        <ul class="list-unstyled mb-0">
                                            <li class="d-flex py-1">
                                                <span class="icon icon-xs icon-primary">
                                                    <span class="fas fa-check-circle mr-2"></span>
                                                </span>
                                                <span>Events</span>
                                            </li>
                                            <li class="d-flex py-1">
                                                <span class="icon icon-xs icon-primary">
                                                    <span class="fas fa-check-circle mr-2"></span>
                                                </span>
                                                <span>Community Lunches</span>
                                            </li>
                                            <li class="d-flex py-1">
                                                <span class="icon icon-xs icon-primary">
                                                    <span class="fas fa-check-circle mr-2"></span>
                                                </span>
                                                <span>Workshops</span>
                                            </li>
                                            <li class="d-flex py-1">
                                                <span class="icon icon-xs icon-primary">
                                                    <span class="fas fa-check-circle mr-2"></span>
                                                </span>
                                                <span>Community Drinks</span>
                                            </li>
                                            <li class="d-flex py-1">
                                                <span class="icon icon-xs icon-primary">
                                                    <span class="fas fa-check-circle mr-2"></span>
                                                </span>
                                                <span>Facebook Group for Members</span>
                                            </li>
                                            <li class="d-flex py-1">
                                                <span class="icon icon-xs icon-primary">
                                                    <span class="fas fa-check-circle mr-2"></span>
                                                </span>
                                                <span>Mentorship Programs</span>
                                            </li>
                                            <li class="d-flex py-1">
                                                <span class="icon icon-xs icon-primary">
                                                    <span class="fas fa-check-circle mr-2"></span>
                                                </span>
                                                <span>Pitching events</span>
                                            </li>
                                            <li class="d-flex py-1">
                                                <span class="icon icon-xs icon-primary">
                                                    <span class="fas fa-check-circle mr-2"></span>
                                                </span>
                                                <span>Accelerator programs</span>
                                            </li>
                                            <li class="d-flex py-1">
                                                <span class="icon icon-xs icon-primary">
                                                    <span class="fas fa-check-circle mr-2"></span>
                                                </span>
                                                <span>Toastmasters</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="card border-bottom rounded-0 p-4">
                                        <h2 class="h5">Facilities</h2>
                                        <ul class="list-unstyled mb-0">
                                            <li class="d-flex py-1">
                                                <span class="icon icon-xs icon-primary">
                                                    <span class="fas fa-check-circle mr-2"></span>
                                                </span>
                                                <span>Kitchen</span>
                                            </li>
                                            <li class="d-flex py-1">
                                                <span class="icon icon-xs icon-primary">
                                                    <span class="fas fa-check-circle mr-2"></span>
                                                </span>
                                                <span>Skype Room</span>
                                            </li>
                                            <li class="d-flex py-1">
                                                <span class="icon icon-xs icon-primary">
                                                    <span class="fas fa-check-circle mr-2"></span>
                                                </span>
                                                <span>Nearby Restaurants</span>
                                            </li>
                                            <li class="d-flex py-1">
                                                <span class="icon icon-xs icon-primary">
                                                    <span class="fas fa-check-circle mr-2"></span>
                                                </span>
                                                <span>Makerspace</span>
                                            </li>
                                            <li class="d-flex py-1">
                                                <span class="icon icon-xs icon-primary">
                                                    <span class="fas fa-check-circle mr-2"></span>
                                                </span>
                                                <span>Personal Lockers</span>
                                            </li>
                                            <li class="d-flex py-1">
                                                <span class="icon icon-xs icon-primary">
                                                    <span class="fas fa-check-circle mr-2"></span>
                                                </span>
                                                <span>Phone Booth</span>
                                            </li>
                                            <li class="d-flex py-1">
                                                <span class="icon icon-xs icon-primary">
                                                    <span class="fas fa-check-circle mr-2"></span>
                                                </span>
                                                <span>Event Space For Rent</span>
                                            </li>
                                            <li class="d-flex py-1">
                                                <span class="icon icon-xs icon-primary">
                                                    <span class="fas fa-check-circle mr-2"></span>
                                                </span>
                                                <span>Nearby Airbnb</span>
                                            </li>
                                            <li class="d-flex py-1">
                                                <span class="icon icon-xs icon-primary">
                                                    <span class="fas fa-check-circle mr-2"></span>
                                                </span>
                                                <span>Onsite Airbnb</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="card border-bottom rounded-0 p-4">
                                        <h2 class="h5">Equipment</h2>
                                        <ul class="list-unstyled mb-0">
                                            <li class="d-flex py-1">
                                                <span class="icon icon-xs icon-primary">
                                                    <span class="fas fa-check-circle mr-2"></span>
                                                </span>
                                                <span>Printer</span>
                                            </li>
                                            <li class="d-flex py-1">
                                                <span class="icon icon-xs icon-primary">
                                                    <span class="fas fa-check-circle mr-2"></span>
                                                </span>
                                                <span>3D Printer</span>
                                            </li>
                                            <li class="d-flex py-1">
                                                <span class="icon icon-xs icon-primary">
                                                    <span class="fas fa-check-circle mr-2"></span>
                                                </span>
                                                <span>Projector</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="card border-bottom rounded-0 p-4">
                                        <h2 class="h5">Transportation</h2>
                                        <ul class="list-unstyled mb-0">
                                            <li class="d-flex py-1">
                                                <span class="icon icon-xs icon-primary">
                                                    <span class="fas fa-check-circle mr-2"></span>
                                                </span>
                                                <span>5 Minute Walk From Public Transit</span>
                                            </li>
                                            <li class="d-flex py-1">
                                                <span class="icon icon-xs icon-primary">
                                                    <span class="fas fa-check-circle mr-2"></span>
                                                </span>
                                                <span>10 Minute Walk From Metro Station</span>
                                            </li>
                                            <li class="d-flex py-1">
                                                <span class="icon icon-xs icon-primary">
                                                    <span class="fas fa-check-circle mr-2"></span>
                                                </span>
                                                <span>Bike Parking</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="card border-bottom rounded-0 p-4">
                                        <h2 class="h5">Relax Zones</h2>
                                        <ul class="list-unstyled mb-0">
                                            <li class="d-flex py-1">
                                                <span class="icon icon-xs icon-primary">
                                                    <span class="fas fa-check-circle mr-2"></span>
                                                </span>
                                                <span>Outdoor Terrace</span>
                                            </li>
                                            <li class="d-flex py-1">
                                                <span class="icon icon-xs icon-primary">
                                                    <span class="fas fa-check-circle mr-2"></span>
                                                </span>
                                                <span>Lounge / Chill-out Area</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="card border-bottom rounded-0 p-4">
                                        <h2 class="h5">Caffeine Fix</h2>
                                        <ul class="list-unstyled mb-0">
                                            <li class="d-flex py-1">
                                                <span class="icon icon-xs icon-primary">
                                                    <span class="fas fa-check-circle mr-2"></span>
                                                </span>
                                                <span>Free Tea</span>
                                            </li>
                                            <li class="d-flex py-1">
                                                <span class="icon icon-xs icon-primary">
                                                    <span class="fas fa-check-circle mr-2"></span>
                                                </span>
                                                <span>Free Coffee</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End of Amenities Tab -->
                        <!-- Reviews Tab -->
                        <div class="tab-pane fade" id="nav-reviews" role="tabpanel" aria-labelledby="nav-reviews-tab">
                            <div class="card bg-white border border-light p-4 mb-4">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <div>
                                        <a href="./profile.html" class="h5">Awesome place</a>
                                        <ul class="list-unstyled d-flex mt-1 mb-0">
                                            <li class="list-item small mr-3">by Margaret Mead</li>
                                            <li class="list-item small">2 weeks ago</li>
                                        </ul>
                                    </div>
                                    <div class="d-flex justify-content-end">
                                        <span class="d-flex justify-content-center">
                                            <i class="star fa-star fas text-warning mr-2"></i>
                                            <i class="star fa-star fas text-warning mr-2"></i>
                                            <i class="star fa-star fas text-warning mr-2"></i>
                                            <i class="star fa-star  fas text-warning  mr-2"></i>
                                            <i class="star far fa-star text-gray"></i>
                                        </span>
                                    </div>
                                </div>
                                <p class="m-0">Always remember that you are absolutely unique. Just like everyone
                                    else.</p>
                            </div>
                            <div class="card bg-white border border-light p-4 mb-4">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <div>
                                        <a href="./profile.html" class="h5">Great working environment</a>
                                        <ul class="list-unstyled d-flex mt-1 mb-0">
                                            <li class="list-item small mr-3">by Neil Sims</li>
                                            <li class="list-item small">2 weeks ago</li>
                                        </ul>
                                    </div>
                                    <div class="d-flex justify-content-end">
                                        <span class="d-flex justify-content-center">
                                            <i class="star fa-star fas text-warning mr-2"></i>
                                            <i class="star fa-star fas text-warning mr-2"></i>
                                            <i class="star fa-star fas text-warning mr-2"></i>
                                            <i class="star fa-star  fas text-warning  mr-2"></i>
                                            <i class="star far fa-star text-gray"></i>
                                        </span>
                                    </div>
                                </div>
                                <p class="m-0">Your time is limited, so don't waste it living someone else's life.
                                    Don't be trapped by dogma -- which is living with the results of other people's
                                    thinking.</p>
                            </div>
                            <div class="card bg-white border border-light p-4 mb-4">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <div>
                                        <a href="./profile.html" class="h5">Not only a place to work, but also to
                                            connect!</a>
                                        <ul class="list-unstyled d-flex mt-1 mb-0">
                                            <li class="list-item small mr-3">by Jose Leos</li>
                                            <li class="list-item small">2 weeks ago</li>
                                        </ul>
                                    </div>
                                    <div class="d-flex justify-content-end">
                                        <span class="d-flex justify-content-center">
                                            <i class="star fa-star fas text-warning mr-2"></i>
                                            <i class="star fa-star fas text-warning mr-2"></i>
                                            <i class="star fa-star fas text-warning mr-2"></i>
                                            <i class="star fa-star  fas text-warning  mr-2"></i>
                                            <i class="star far fa-star text-gray"></i>
                                        </span>
                                    </div>
                                </div>
                                <p class="m-0">The future belongs to those who believe in the beauty of their
                                    dreams.</p>
                            </div>
                            <form method="post">
                                <div class="d-flex justify-content-between align-items-center mb-3 mt-5">
                                    <h2 class="h5 m-0">Add a review</h2>
                                    <span class="d-flex justify-content-center stars-rating">
                                        <i class="star far fa-star text-gray mr-2" data-rating-value="1"></i>
                                        <i class="star far fa-star text-gray mr-2" data-rating-value="2"></i>
                                        <i class="star far fa-star text-gray mr-2" data-rating-value="3"></i>
                                        <i class="star far fa-star text-gray mr-2" data-rating-value="4"></i>
                                        <i class="star far fa-star text-gray" data-rating-value="5"></i>
                                    </span>
                                </div>
                                <textarea name="description" class="form-control border" placeholder="Add a review" rows="6"
                                    data-bind-characters-target="#charactersRemaining" maxlength="1000" required></textarea>
                                <div class="d-flex justify-content-between mt-3">
                                    <small class="font-weight-light">
                                        <span id="charactersRemaining">1000</span> characters remaining</small>
                                    <button type="submit" class="btn btn-primary animate-up-2">Add review</button>
                                </div>
                            </form>
                        </div>
                        <!-- End of Reviews Tab -->
                        <div class="tab-pane fade" id="nav-location" role="tabpanel" aria-labelledby="nav-location-tab">
                            <div class="row">
                                <div class="col-12">
                                    <iframe class="map rounded" id="gmap_canvas"
                                        src="https://maps.google.com/maps?q=san%20francisco&t=&z=8&ie=UTF8&iwloc=&output=embed"></iframe>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- End of tab -->
                </div>
                <aside class="col-12 col-lg-4 mt-3 mt-lg-0">
                    <div class="card bg-soft border-light p-3">
                        <div class="d-flex align-items-baseline">
                            Lista de diapositivas
                        </div>
                    </div>
                    <div class="card border-light mt-4 p-3">
                        <button class="btn btn-primary availability" value="06/20/2018">Booking
                            Availability</button>
                    </div>
                    <div class="card border-light mt-4 p-3">
                        <h5 class="font-weight-normal">Property Owner</h5>
                        <div class="media d-flex align-items-center my-3">
                            <a href="./profile.html" class="avatar-lg mr-2" data-toggle="tooltip" data-placement="top"
                                title="More details">
                                <img class="img-fluid rounded-circle" src="../assets/img/team/profile-picture-1.jpg"
                                    alt="avatar">
                            </a>
                            <div class="avatar-name"><a class="text-gray" href="./profile.html" data-toggle="tooltip"
                                    data-placement="top" title="More details">Jose Leos</a>
                            </div>
                        </div>
                        <!-- Button Modal -->
                        <button type="button" class="btn btn-block btn-secondary mb-3" data-toggle="modal"
                            data-target="#modal-form">Contact Host</button>
                        <!-- Modal Content -->
                        <div class="modal fade" id="modal-form" tabindex="-1" role="dialog"
                            aria-labelledby="modal-form" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-md" role="document">
                                <div class="modal-content">
                                    <div class="modal-body p-0">
                                        <div class="card shadow-md border-0">
                                            <div class="card-body position-relative">
                                                <button type="button" class="close mb-2" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                                <form class="mt-3">
                                                    <div class="form-group">
                                                        <div class="input-group mb-4">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i
                                                                        class="far fa-user"></i></span>
                                                            </div>
                                                            <input class="form-control" placeholder="Name" type="text"
                                                                required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="input-group mb-4">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i
                                                                        class="far fa-envelope"></i></span>
                                                            </div>
                                                            <input class="form-control" placeholder="Email"
                                                                type="email" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <textarea class="form-control" placeholder="Write message" id="message-2" rows="4" required></textarea>
                                                    </div>
                                                    <div class="text-center">
                                                        <button type="submit" class="btn btn-block btn-primary mt-4">Send
                                                            Message</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End of Modal Content -->
                    </div>
                    <div class="card border-light mt-4 p-3">
                        <h5 class="font-weight-normal">Request Desk</h5>
                        <form class="mt-3">
                            <div class="form-group">
                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="far fa-user"></i></span>
                                    </div>
                                    <input class="form-control" placeholder="Name" type="text" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="far fa-envelope"></i></span>
                                    </div>
                                    <input class="form-control" placeholder="Email" type="email" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-mobile"></i></span>
                                    </div>
                                    <input class="form-control" placeholder="Phone" type="number" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" placeholder="Write short message to host" id="message" rows="4" required></textarea>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-block btn-primary mt-4">Send Request</button>
                            </div>
                        </form>
                    </div>
                </aside>
            </div>
        </div>
    </div>
@endsection

@section('librerias_css')
    <link rel="stylesheet" href="{{ asset('frontend/css/vendor/dropzone.min.css') }}">
@endsection

@section('librerias')
    <script src="{{ asset('frontend/js/cs/dropzone.templates.js') }}"></script>
    <script src="{{ asset('frontend/js/forms/controls.dropzone.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/sjcl.js') }}"></script>
@endsection

@section('scripts')
    <script>
        $('#btnGenerarPdf').click(function() {
            let url = "/dashboard/admin/documentos/generarPdf";
            let token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
            let id = $('#idDocumento').val();
            let data = {
                _token: token,
                id
            };
            $.ajax({
                type: "post",
                url: url,
                data: data,
                success: function(response) {
                    $('#btnGenerarPdf').hide();
                    $('#btnDescargarPdf').attr('data-url', response.url);
                    $('#btnDescargarPdf').show();
                }
            });
        });

        $('#btnDescargarPdf').click(function() {
            let url = $(this).data('url');
            window.open(url, '_blank');
        });

        /**
         * Hassheamos el documento
         */

        function string_to_256digest(str) {
            var hex_str = [];
            var hex;
            for (var n = 0, l = str.length; n < l; n++) {
                15 / 16
                var a = Number(str.charCodeAt(n));
                if (a < 16) {
                    hex = "0" + a.toString(16);
                } else {
                    hex = a.toString(16);
                }
                hex_str.push(hex);
            }
            var text_hex_str = hex_str.join('');
            var text_bit_array = sjcl.codec.hex.toBits(text_hex_str);
            var digest_sha256_bit_array = sjcl.hash.sha256.hash(text_bit_array);
            var digest_sha256 = sjcl.codec.hex.fromBits(digest_sha256_bit_array);
            return (digest_sha256.toUpperCase());
        }

        function onloadend_file(text) {
            var the_digest = string_to_256digest(text);
            // document.getElementById('digest').innerHTML = "SHA256 DIGEST " + the_digest;
            document.getElementById('hash').value = the_digest;
            document.getElementById('btnEnviarBlockChain').disabled = false;
        }

        function handleFileSelect(evt) {
            evt.stopPropagation();
            evt.preventDefault();
            if (typeof(evt.dataTransfer) == "undefined") {
                event_obj = evt.target;
            } else {
                event_obj = evt.dataTransfer;
            }
            f = event_obj.files[0];
            var reader = new FileReader();
            reader.readAsBinaryString(f);
            reader.onloadend = () => onloadend_file(reader.result);
        }
        document.getElementById('archivo').addEventListener('input', handleFileSelect, false);


        /**
         * Enviamos el archivo a blockchain
         */
        $('#formEnviarBlockchain').submit(function(e) {
            e.preventDefault();
            let url = "/dashboard/documentos/enviarBlockchain";
            let token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
            let id = $('#idDocumento').val();
            let hash = $('#hash').val();
            let data = {
                _token: token,
                id,
                hash
            };
            $.ajax({
                type: "post",
                url: url,
                data: data,
                success: function(response) {
                    $('#btnGenerarPdf').hide();
                    $('#btnDescargarPdf').attr('data-url', response.url);
                    $('#btnDescargarPdf').show();
                }
            });
        });
    </script>
@endsection
