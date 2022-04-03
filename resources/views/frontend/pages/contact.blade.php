@extends('frontend.layouts.nofooter')
@section('content')
<div class="page-contact">
    <section class="banner-jumbo bg-white">
        <div class="container">
            <img src="{{ asset('images/smarthome/bg-contact.webp') }}" class="lazy img-fluid cover-banner" alt="cover">
            <div class="box-title">
                <div class="text-head poppins">Contact Us</div>
                <div class="box-office">
                    <p class="subhead poppins">Shanghai Office :</p>
                    <p class="subhead two poppins">
                        Room 443, No.1, An‘yuan Road, Jing’an District,<br>
                        Shanghai 200040, China<br>
                        Email : inquiry@greenergyintl.com
                    </p>
                </div>
                <div class="box-office">
                    <p class="subhead poppins">Indonesia Office :</p>
                    <p class="subhead two poppins">
                        PT. Graha Smart Indonesia<br>
                        South Quarter Office Tower A, 18th Floor<br>
                        Jl. R.A. Kartini Kav 8. Cilandak Barat<br>
                        Jakarta Selatan, Indonesia 12430<br>
                        Email : inquiry@grahasmartindo.com
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- <section class="section-one bg-white">
        <img src="{{ asset('images/smarthome/ic-baloon-1.png') }}" class="lazy img-fluid baloon" alt="icon">
        <img src="{{ asset('images/smarthome/ic-baloon-2.png') }}" class="lazy img-fluid baloon-2" alt="icon">
        <div class="container">
            <div class="about text-center">
                <p class="title-office poppins">Shanghai Office :</p>
                <p class="text-desc two poppins">
                    Room 443, No.1, An‘yuan Road, Jing’an District,<br>
                    Shanghai 200040, China<br>
                    Email : inquiry@greenergyintl.com
                </p>
            </div>

            <div class="about text-center">
                <p class="title-office poppins">Indonesia Office :</p>
                <p class="text-desc three poppins">
                    PT. Graha Smart Indonesia<br>
                    South Quarter Office Tower A, 18th Floor<br>
                    Jl. R.A. Kartini Kav 8. Cilandak Barat<br>
                    Jakarta Selatan, Indonesia 12430<br>
                    Email : inquiry@grahasmartindo.com
                </p>
            </div>
        </div>
    </section> --}}
</div>
@stop