@extends('frontend.layouts.app')
@section('content')
<div class="page-home">
    <section class="jumbotron banner">
        <div class="container-fluid">
            <div class="row m-0 mobile">
                <div class="col-12 col-md-4 col-lg-3 box-banner">
                    <div class="desc-banner">
                        <div class="text-head">
                            Design Your
                            Own Smart Home<br>
                            <span>In Few Clicks</span>
                        </div>
                        <div class="text-desc">
                            Our online design tool will give
                            you immediate, ideal and
                            cost-effective solution instantly
                        </div>
                        <div class="box-button">
                            <a class="btn btn-success btn-green" href="{{URL::to('/offering-ges')}}">
                                Start Your Project
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-8 col-lg-9 right-banner">
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <span class="text-banner poppins">
                                    System that ensures<br>
                                    secured home and peace of mind
                                </span>
                                <img src="{{ asset('images/smarthome/banner-4.webp') }}" class="lazy img-fluid cover"
                                    alt="cover">
                                <div class="black-shadow"></div>
                            </div>
                            <div class="swiper-slide">
                                <span class="text-banner poppins">
                                    We design and provide<br>
                                    Smart Home Solution that guarantees<br>Green, Efficient, Secured benefits
                                </span>
                                <img src="{{ asset('images/smarthome/banner-1.webp') }}" class="lazy img-fluid cover"
                                    alt="cover">
                                <div class="black-shadow"></div>
                            </div>
                            <div class="swiper-slide">
                                <span class="text-banner poppins">
                                    Smart Home Green solution that delivers<br>
                                    Energy Saving and Sustainability
                                </span>
                                <img src="{{ asset('images/smarthome/banner-2.webp') }}" class="lazy img-fluid cover"
                                    alt="cover">
                                <div class="black-shadow"></div>
                            </div>
                            <div class="swiper-slide">
                                <span class="text-banner poppins">
                                    Automation that provides<br>
                                    Efficiency and Convenience anytime
                                </span>
                                <img src="{{ asset('images/smarthome/banner-3.webp') }}" class="lazy img-fluid cover"
                                    alt="cover">
                                <div class="black-shadow"></div>
                            </div>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-one py-5">
        <div class="container">
            <div class="box-section poppins">
                <div class="row">
                    <div class="col-12 col-md-4 item-gs">
                        <div class="box-iconic">
                            <img src="{{ asset('images/smarthome/ic-green.png') }}" class="lazy img-fluid" alt="icon">
                            <p class="head-text poppins">Green</p>
                            <p class="desc poppins">
                                Smart Home Green solution that delivers Energy Saving and Sustainability
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 item-gs">
                        <div class="box-iconic">
                            <img src="{{ asset('images/smarthome/ic-efficient.png') }}" class="lazy img-fluid"
                                alt="icon">
                            <p class="head-text poppins">Efficient</p>
                            <p class="desc poppins">
                                Automation that provides Efficiency and Convenience anytime
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 item-gs">
                        <div class="box-iconic">
                            <img src="{{ asset('images/smarthome/ic-secured.png') }}" class="lazy img-fluid" alt="icon">
                            <p class="head-text poppins">Secured</p>
                            <p class="desc poppins">
                                System that ensures Secured home and Peace of mind
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-two py-5">
        <p class="title-head text-center poppins">Why Choose Us?</p>
        <div class="container-fluid p-0">
            <div class="box-section poppins">
                <div class="row">
                    <div class="col-12 col-md-4 item-gs">
                        <div class="box-iconic">
                            <img src="{{ asset('images/smarthome/ic-system.png') }}" class="lazy img-fluid" alt="icon">
                            <p class="head-text poppins">
                                Instant Design Online
                            </p>
                            <p class="desc poppins">
                                By going through our online design tool, you will get instant design and budget of
                                your
                                Smart Home requirement
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 item-gs">
                        <div class="box-iconic">
                            <img src="{{ asset('images/smarthome/ic-design.png') }}" class="lazy img-fluid" alt="icon">
                            <p class="head-text poppins">
                                Cost Effective Offerings
                            </p>
                            <p class="desc poppins">
                                We offer open, latest and cost-effective products and solutions which are compatible
                                with Tuya Smart, Google Assistants,
                                Amazon Alexa.
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 item-gs">
                        <div class="box-iconic">
                            <img src="{{ asset('images/smarthome/ic-idea.png') }}" class="lazy img-fluid" alt="icon">
                            <p class="head-text poppins">Experience and Domain Expertise</p>
                            <p class="desc poppins">
                                Our designers and engineers have extensive projects design and implementation in
                                China
                                and Indonesia in residential, commercial and hospitality segments
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 item-gs">
                        <div class="box-iconic">
                            <img src="{{ asset('images/smarthome/ic-system.png') }}" class="lazy img-fluid" alt="icon">
                            <p class="head-text poppins">Installation and Configuration</p>
                            <p class="desc poppins">
                                Project confirmed online can be
                                implemented immediately by our team
                                based on criteria you set
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 item-gs">
                        <div class="box-iconic">
                            <img src="{{ asset('images/smarthome/ic-design.png') }}" class="lazy img-fluid" alt="icon">
                            <p class="head-text poppins">
                                No Intermediary
                            </p>
                            <p class="desc poppins">
                                The online design and pricing allow you to
                                manage your own Smart Home project
                                without going through a 3rd party
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 item-gs">
                        <div class="box-iconic">
                            <img src="{{ asset('images/smarthome/ic-idea.png') }}" class="lazy img-fluid" alt="icon">
                            <p class="head-text poppins">Positive Customer Experiences</p>
                            <p class="desc poppins">
                                Our Customers spoke about our integrity,
                                commitment and open communication
                                and teamwork that resulted in positive
                                experiences
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-three py-5">
        <img src="{{ asset('images/smarthome/ic-baloon-2.png') }}" class="lazy img-fluid baloon" alt="icon">
        <p class="title-head text-center poppins">Our Customers Testimonials</p>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-6 col-xl-3">
                    <div class="card">
                        <div class="card-header text-center shadow-sm">
                            <img src="{{ asset('images/smarthome/ic-quotes.png') }}" class="lazy img-fluid"
                                alt="quotes">
                            <p class="text-review poppins">
                                ”During the design process, the team has listened to our requirements and translated
                                into the design and system that
                                meet our budgetary and project milestone requirements. They have consistently
                                delivered on what they have committed".
                            </p>
                        </div>
                        <div class="card-body text-center">
                            <div class="card-img">
                                <img src="{{ asset('images/smarthome/yamin.webp') }}" class="lazy img-fluid" alt="user">
                            </div>
                            <p class="card-name poppins fw-bold">Yamin C</p>
                            <p class="card-name job-office poppins">
                                Head of Planning and Design Region 1<br>Summarecon Property Development
                            </p>
                            <img src="{{ asset('images/smarthome/ic-quotes.png') }}" class="lazy img-fluid star-img"
                                alt="star">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-xl-3">
                    <div class="card">
                        <div class="card-header text-center shadow-sm">
                            <img src="{{ asset('images/smarthome/ic-quotes.png') }}" class="lazy img-fluid"
                                alt="quotes">
                            <p class="text-review poppins">
                                ”As an owner of multiple high-end F&B outlets across Asia, I demand that our
                                partners and vendors provide best quality
                                products and services. GES consistently delivered high quality products and services
                                throughout multiple projects we
                                have worked with them.”
                            </p>
                        </div>
                        <div class="card-body text-center">
                            <div class="card-img">
                                <img src="{{ asset('images/smarthome/atshushi.webp') }}" class="lazy img-fluid"
                                    alt="user">
                            </div>
                            <p class="card-name poppins fw-bold">Atshushi Senno</p>
                            <p class="card-name job-office poppins">
                                Founder and Managing Director<br>Juni Group Mgmt. (HK) Ltd.
                            </p>
                            <img src="{{ asset('images/smarthome/ic-quotes.png') }}" class="lazy img-fluid star-img"
                                alt="star">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-xl-3">
                    <div class="card">
                        <div class="card-header text-center shadow-sm">
                            <img src="{{ asset('images/smarthome/ic-quotes.png') }}" class="lazy img-fluid"
                                alt="quotes">
                            <p class="text-review poppins">
                                ”Pengalaman kita sangat positif dari permulaan project development sampai akhir
                                hand-over dimana team GES ini sangat
                                professional dalam expertise di system design, product supply dan installasi.
                                Response time dalam menghadapi project
                                requirement and after-sales issue resolution cukup memuaskan”
                            </p>
                        </div>
                        <div class="card-body text-center">
                            <div class="card-img">
                                <img src="{{ asset('images/smarthome/user-herman.webp') }}" class="lazy img-fluid"
                                    alt="user">
                            </div>
                            <p class="card-name poppins fw-bold">Herman Priyadi</p>
                            <p class="card-name job-office poppins">
                                Business Development <br>Hotel Swissbell Express
                                Cilegon
                            </p>
                            <img src="{{ asset('images/smarthome/ic-quotes.png') }}" class="lazy img-fluid star-img"
                                alt="star">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-xl-3">
                    <div class="card">
                        <div class="card-header text-center shadow-sm">
                            <img src="{{ asset('images/smarthome/ic-quotes.png') }}" class="lazy img-fluid"
                                alt="quotes">
                            <p class="text-review poppins">
                                "As a five-star hotel owner that values unyielding quality services and integrity, it is important to work with partners and suppliers that share our values. GES team has consistently exhibited these values throughout the journey from early design, development, implementation and operation of our Royal Tulip hotel project"
                            </p>
                        </div>
                        <div class="card-body text-center">
                            <div class="card-img">
                                <img src="{{ asset('images/smarthome/ferry.webp') }}" class="lazy img-fluid"
                                    alt="user">
                            </div>
                            <p class="card-name poppins fw-bold">Ferry Sangeroki</p>
                            <p class="card-name job-office poppins">
                                Chairman <br>
                                Hotel Royal Tulip Darmo, Surabaya
                            </p>
                            <img src="{{ asset('images/smarthome/ic-quotes.png') }}" class="lazy img-fluid star-img"
                                alt="star">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="ourWorks" class="section-four py-2">
        <p class="title-head text-center poppins">Our Works</p>
        <div class="container-fluid p-0">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="black-shadow"></div>
                        <img src="{{ asset('images/smarthome/works-1.webp') }}" class="lazy img-fluid cover"
                            alt="cover">
                    </div>
                    <div class="swiper-slide">
                        <div class="black-shadow"></div>
                        <img src="{{ asset('images/smarthome/works-2.webp') }}" class="lazy img-fluid cover"
                            alt="cover">
                    </div>
                    <div class="swiper-slide">
                        <div class="black-shadow"></div>
                        <img src="{{ asset('images/smarthome/works-1.webp') }}" class="lazy img-fluid cover"
                            alt="cover">
                    </div>
                    <div class="swiper-slide">
                        <div class="black-shadow"></div>
                        <video class="video-works" autoplay muted loop>
                            <img src="{{ asset('images/smarthome/works-1.webp') }}" class="lazy img-fluid cover"
                                alt="cover">
                            <source src="{{ asset('videos/works-4.mp4') }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                    <div class="swiper-slide">
                        <div class="black-shadow"></div>
                        <video class="video-works" autoplay muted loop>
                            <source src="{{ asset('videos/works-5.mp4') }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
</div>
@include('frontend.partials.swiper1')
@stop
