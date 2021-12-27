@extends('frontend.layouts.app')
@section('content')
<div class="page-about">
    <section class="banner-jumbo bg-white">
        <div class="container">
            <img src="{{ asset('images/smarthome/bg-about.webp') }}" class="lazy img-fluid cover-banner" alt="cover">
            <div class="box-title">
                <div class="text-head poppins">About Us</div>
            </div>
        </div>
    </section>

    <section class="section-one bg-white">
        <img src="{{ asset('images/smarthome/ic-baloon-1.png') }}" class="lazy img-fluid baloon" alt="icon">
        <div class="container">
            <div class="about text-center">
                <p class="text-desc poppins">
                    Green Energy Solutions (GES) International is a professional and technological system integrator
                    company specialized in
                    Smart Building and Energy Saving systems with ultimate goals of providing Green, Efficient and
                    Secured solutions for our
                    customers.
                </p>
            </div>
        </div>
    </section>

    <section class="section-two py-5">
        <img src="{{ asset('images/smarthome/ic-baloon-1.png') }}" class="lazy img-fluid baloon" alt="icon">
        <div class="container">
            <p class="title-head text-center poppins">Why Choose Us?</p>
            <div class="box-section poppins">
                <div class="row">
                    <div class="col-12 col-md-6 item-gs">
                        <div class="box-iconic">
                            <img src="{{ asset('images/smarthome/ic-system.png') }}" class="lazy img-fluid" alt="icon">
                            <p class="head-text poppins">System and Product Offering</p>
                            <p class="desc poppins">
                                We offer a complete, state of the art, and affordable Smart Home systems and devices
                                to
                                cover wide range of aspects of
                                residential and commercial applications: including Security & Control, Lighting &
                                Energy
                                and Entertainment categories.
                                Our philosophy of product offerings adhere to the principals of open application,
                                simplicity of installation (including
                                plug-and-play) and connectivity to major global Smart Home platforms like Amazon
                                Alexa,
                                Google Assistants, etc.
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 item-gs">
                        <div class="box-iconic">
                            <img src="{{ asset('images/smarthome/ic-design.png') }}" class="lazy img-fluid" alt="icon">
                            <p class="head-text poppins">
                                Design, System Integration and Technical Support
                            </p>
                            <p class="desc poppins">
                                Our team of certified and experience system engineers can perform a comprehensive
                                assessment of your automation
                                requirement, and ultimately design and propose smart home system and devices which
                                meet
                                your needs and budgetary
                                consideration.
                                In addition, we offer installation, testing and commissioning services as well as
                                application support to ensure your
                                ultimate delight in the experience of Smart Home.
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 item-gs">
                        <div class="box-iconic">
                            <img src="{{ asset('images/smarthome/ic-idea.png') }}" class="lazy img-fluid" alt="icon">
                            <p class="head-text poppins">Experiences and Domain Expertise</p>
                            <p class="desc poppins">
                                Our team of system designers and support engineers located in China and Indonesia
                                have
                                extensive experiences in serving
                                customers, designing and implementing (#) projects in hospitality, food and
                                beverage,
                                residential, commercial and public
                                sectors.
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 item-gs">
                        <div class="box-iconic">
                            <img src="{{ asset('images/smarthome/ic-positive.png') }}" class="lazy img-fluid"
                                alt="icon">
                            <p class="head-text poppins">Positive Customer Experiences</p>
                            <p class="desc poppins">
                                Our customers value and speak about our integrity, our commitment and open
                                communication
                                and teamwork – these attributes
                                are core to our company values
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
                                "As a five-star hotel owner that values unyielding quality services and integrity, it is important to work with partners and suppliers that share our values. GES team has consistently exhibited these values throughout the journey from early design,development, implementation and operation of our Royal Tulip hotel project"
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

    {{-- <section class="section-three py-5">
        <img src="{{ asset('images/smarthome/ic-baloon-2.png') }}" class="lazy img-fluid baloon" alt="icon">
        <div class="container">
            <p class="title-head text-center poppins">What Customer Saying</p>
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="card mb-4">
                            <img src="{{ asset('images/smarthome/ic-quotes.png') }}" class="lazy img-fluid quotes"
                                alt="icon">
                            <div class="text-review poppins">
                                We offer a complete, state of the art, and affordable Smart Home systems and devices
                                to
                                cover wide range
                            </div>
                            <div class="card-body">
                                <img src="{{ asset('images/smarthome/user-herman.png') }}" class="lazy img-fluid user"
                                    alt="user">
                                <p class="card-name poppins bold">
                                    Herman Priyadi
                                </p>
                                <p class="card-position poppins">
                                    Business Development - PT. Binamandiri Asri
                                    Lestari Hotel Swissbell Express Cilegon
                                </p>
                                <img src="{{ asset('images/smarthome/bg-wave-1.png') }}" class="lazy img-fluid wave"
                                    alt="wave">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card mb-4">
                            <img src="{{ asset('images/smarthome/ic-quotes.png') }}" class="lazy img-fluid quotes"
                                alt="icon">
                            <div class="text-review poppins">
                                We offer a complete, state of the art, and affordable Smart Home systems and devices
                                to
                                cover wide range
                            </div>
                            <div class="card-body">
                                <img src="{{ asset('images/smarthome/user-natasha.png') }}" class="lazy img-fluid user"
                                    alt="user">
                                <p class="card-name poppins bold">
                                    Natasha Wilson
                                </p>
                                <p class="card-position poppins">
                                    Chairman - Hotel Royal Tulip Darmo
                                    Surabaya Jawa Timur
                                </p>
                                <img src="{{ asset('images/smarthome/bg-wave-2.png') }}" class="lazy img-fluid wave"
                                    alt="wave">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card mb-4">
                            <img src="{{ asset('images/smarthome/ic-quotes.png') }}" class="lazy img-fluid quotes"
                                alt="icon">
                            <div class="text-review poppins">
                                We offer a complete, state of the art, and affordable Smart Home systems and devices
                                to
                                cover wide range
                            </div>
                            <div class="card-body">
                                <img src="{{ asset('images/smarthome/user-angela.png') }}" class="lazy img-fluid user"
                                    alt="user">
                                <p class="card-name poppins bold">
                                    Anggela Santos
                                </p>
                                <p class="card-position poppins">
                                    Founder & Managing Director - Juni
                                    Group Jakarta
                                </p>
                                <img src="{{ asset('images/smarthome/bg-wave-3.png') }}" class="lazy img-fluid wave"
                                    alt="wave">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card mb-4">
                            <img src="{{ asset('images/smarthome/ic-quotes.png') }}" class="lazy img-fluid quotes"
                                alt="icon">
                            <div class="text-review poppins">
                                We offer a complete, state of the art, and affordable Smart Home systems and devices
                                to
                                cover wide range
                            </div>
                            <div class="card-body">
                                <img src="{{ asset('images/smarthome/user-herman.png') }}" class="lazy img-fluid user"
                                    alt="user">
                                <p class="card-name poppins bold">
                                    Herman Priyadi 2
                                </p>
                                <p class="card-position poppins">
                                    Business Development - PT. Binamandiri Asri
                                    Lestari Hotel Swissbell Express Cilegon
                                </p>
                                <img src="{{ asset('images/smarthome/bg-wave-1.png') }}" class="lazy img-fluid wave"
                                    alt="wave">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card mb-4">
                            <img src="{{ asset('images/smarthome/ic-quotes.png') }}" class="lazy img-fluid quotes"
                                alt="icon">
                            <div class="text-review poppins">
                                We offer a complete, state of the art, and affordable Smart Home systems and devices
                                to
                                cover wide range
                            </div>
                            <div class="card-body">
                                <img src="{{ asset('images/smarthome/user-natasha.png') }}" class="lazy img-fluid user"
                                    alt="user">
                                <p class="card-name poppins bold">
                                    Natasha Wilson 2
                                </p>
                                <p class="card-position poppins">
                                    Chairman - Hotel Royal Tulip Darmo
                                    Surabaya Jawa Timur
                                </p>
                                <img src="{{ asset('images/smarthome/bg-wave-2.png') }}" class="lazy img-fluid wave"
                                    alt="wave">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card mb-4">
                            <img src="{{ asset('images/smarthome/ic-quotes.png') }}" class="lazy img-fluid quotes"
                                alt="icon">
                            <div class="text-review poppins">
                                We offer a complete, state of the art, and affordable Smart Home systems and devices
                                to
                                cover wide range
                            </div>
                            <div class="card-body">
                                <img src="{{ asset('images/smarthome/user-angela.png') }}" class="lazy img-fluid user"
                                    alt="user">
                                <p class="card-name poppins bold">
                                    Anggela Santos 2
                                </p>
                                <p class="card-position poppins">
                                    Founder & Managing Director - Juni
                                    Group Jakarta
                                </p>
                                <img src="{{ asset('images/smarthome/bg-wave-3.png') }}" class="lazy img-fluid wave"
                                    alt="wave">
                            </div>
                        </div>
                    </div>

                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section> --}}
</div>
@include('frontend.partials.swiper2')
@endsection
