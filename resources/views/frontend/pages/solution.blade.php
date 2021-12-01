@extends('frontend.layouts.app')
@section('content')
<div class="page-solution">
    <section class="banner-jumbo bg-white">
        <div class="container">
            <img src="{{ asset('images/smarthome/bg-solution.webp') }}" class="lazy img-fluid cover-banner" alt="cover">
            <div class="box-title">
                <div class="text-head poppins">Smart Home Solution</div>
                <div class="subhead poppins">
                    Our Smart Home Solutions allow you to control your home according to your needs and preferences.
                    With convenience of a simple tap on your smartphone or tablet, you can adjust lighting, or
                    automate appliances anytime or monitor your home from anywhere. Our Smart Home Solutions
                    ultimately make your home more secured, comfortable and efficient on the energy usage.
                </div>
            </div>
        </div>
    </section>

    <section class="section-one bg-white">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-5">
                    <div class="box-text">
                        <div class="title poppins">Lighting Control</div>
                        <div class="description poppins">
                            Our lighting control solution provides many capabilities including smart and
                            energy-saving lighting fixtures and devices, allowing conveniences such as adjusting
                            lighting levels, scheduling and automation as well as setting the indoor ambience – all
                            from the comfort of tapping on handphones or voice-assisted commands
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-7">
                    <div class="box-img">
                        <img src="{{ asset('images/smarthome/solution-1.webp') }}" class="lazy img-fluid solution"
                            alt="image">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-two">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-7">
                    <div class="box-img">
                        <img src="{{ asset('images/smarthome/solution-2.webp') }}" class="lazy img-fluid solution"
                            alt="image">
                    </div>
                </div>
                <div class="col-12 col-md-5">
                    <div class="box-text">
                        <div class="title poppins">
                            Security & Access Control
                        </div>
                        <div class="description poppins">
                            Wherever you go, your home is always close to you and secured. Using our “Security &
                            Access Control” Solution, you can mmediately monitor your home or get alerted for any
                            security threats. Our solution helps you better protect your property and loved ones as
                            well as saves you time and money, and ultimately gives you peace of mind.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-one bg-white">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-5">
                    <div class="box-text">
                        <div class="title poppins">
                            Audio & Video Control
                        </div>
                        <div class="description poppins">
                            The A&V module allows users to control and automate their entertainment needs and
                            preferences on their fingertips by controlling their existing visual and audio devices.
                            “Scene” settings allows playback of audio and video equipment according to the unique
                            individuals within the home by mood or time to deliver the maximum convenience.
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-7">
                    <div class="box-img">
                        <img src="{{ asset('images/smarthome/solution-3.webp') }}" class="lazy img-fluid solution"
                            alt="image">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-two">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-7">
                    <div class="box-img">
                        <img src="{{ asset('images/smarthome/solution-4.webp') }}" class="lazy img-fluid solution"
                            alt="image">
                    </div>
                </div>
                <div class="col-12 col-md-5">
                    <div class="box-text">
                        <div class="title poppins">
                            Indoor Comfort
                        </div>
                        <div class="description poppins">
                            Indoor Comfort solutions enable you to control or automate optimum levels of natural
                            ambience, lighting, temperature and humidity, based on your preferences and external
                            environment (weather, time, mood) designed to deliver maximum comfort and convenience.
                            Solutions are dynamic and can be smartly automated to tailor to occupants and needs of
                            each rooms within the home.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-one bg-white">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-5">
                    <div class="box-text">
                        <div class="title poppins">
                            Smart Control &
                            Connectivity
                        </div>
                        <div class="description poppins">
                            Our “Control & Connectivity” solution enables you to integrate and operate your
                            multi-platform (Google, Alexa, Apple, Samsung, etc) devices and existing appliances with
                            minimum and seamless smart networking and software upgrade, which allows access to vast
                            services that include secured storage, instant monitoring and powerful cloud-based
                            analytics capabilities.
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-7">
                    <div class="box-img">
                        <img src="{{ asset('images/smarthome/solution-5.webp') }}" class="lazy img-fluid solution"
                            alt="image">
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@stop
