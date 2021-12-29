@extends('frontend.layouts.app')
@section('content')
<div class="page-result">
    <section class="section-one">
        <div class="container">
            <div class="row">
                <div class="col-12 p-0">
                    <div class="box-video">
                        <h1 class="title-section poppins">Result Offering</h1>

                        {{-- List Video Result Offering --}}
                        <video class="video-works img-fluid mb-4" autoplay muted loop>
                            <source src="{{ asset('videos/works-4.mp4') }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                        <video class="video-works img-fluid mb-4" autoplay muted loop>
                            <source src="{{ asset('videos/works-5.mp4') }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-two">
        <div class="container">
            <div class="row">
                <div class="col-12 p-0">
                    <h2 class="title-section poppins">Output Penawaran</h2>
                    <div class="box-result">
                        <p class="name-field poppins">ID Penawaran</p>
                        <p class="value-field poppins">: 123123123</p>
                    </div>
                    <div class="box-result">
                        <p class="name-field poppins">Nama Customer</p>
                        <p class="value-field poppins">: Roni Firman</p>
                    </div>
                    <div class="box-result">
                        <p class="name-field poppins">Telp</p>
                        <p class="value-field poppins">: 081218792890</p>
                    </div>
                    <div class="box-result">
                        <p class="name-field poppins">Kota</p>
                        <p class="value-field poppins">: Bekasi</p>
                    </div>
                    <div class="box-result">
                        <p class="name-field poppins">Solusi Yang Diminta</p>
                        <p class="value-field poppins">: Apartemen</p>
                    </div>
                    <div class="box-result">
                        <p class="name-field poppins">Object</p>
                        <p class="value-field poppins">: Lampu</p>
                    </div>
                    <div class="box-result">
                        <p class="name-field poppins">Jumlah Ruangan</p>
                        <p class="value-field poppins">: 10</p>
                    </div>
                    <div class="box-result">
                        <p class="name-field poppins">Jumlah Lantai</p>
                        <p class="value-field poppins">: 10</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-three">
        <div class="container">
            <div class="row">
                <div class="col-12 p-0">
                    <div class="table-responsive">
                        <table class="table table-bordered poppins">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Kode Produk</th>
                                    <th scope="col">Deskripsi Produk</th>
                                    <th scope="col">Jumlah Barang</th>
                                    <th scope="col">Harga Satuan</th>
                                    <th scope="col">Total Harga</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>123123</td>
                                    <td>Lampu</td>
                                    <td>10</td>
                                    <td>Rp. 100.000</td>
                                    <td>Rp. 1.000.000</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>123123</td>
                                    <td>Lampu</td>
                                    <td>10</td>
                                    <td>Rp. 100.000</td>
                                    <td>Rp. 1.000.000</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>123123</td>
                                    <td>Lampu</td>
                                    <td>10</td>
                                    <td>Rp. 100.000</td>
                                    <td>Rp. 1.000.000</td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>123123</td>
                                    <td>Lampu</td>
                                    <td>10</td>
                                    <td>Rp. 100.000</td>
                                    <td>Rp. 1.000.000</td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td>123123</td>
                                    <td>Lampu</td>
                                    <td>10</td>
                                    <td>Rp. 100.000</td>
                                    <td>Rp. 1.000.000</td>
                                </tr>
                                <tr>
                                    <th scope="row">6</th>
                                    <td>123123</td>
                                    <td>Lampu</td>
                                    <td>10</td>
                                    <td>Rp. 100.000</td>
                                    <td>Rp. 1.000.000</td>
                                </tr>
                                <tr>
                                    <th scope="row">7</th>
                                    <td>123123</td>
                                    <td>Lampu</td>
                                    <td>10</td>
                                    <td>Rp. 100.000</td>
                                    <td>Rp. 1.000.000</td>
                                </tr>
                                <tr>
                                    <th scope="row">8</th>
                                    <td>123123</td>
                                    <td>Lampu</td>
                                    <td>10</td>
                                    <td>Rp. 100.000</td>
                                    <td>Rp. 1.000.000</td>
                                </tr>
                                <tr>
                                    <th scope="row">9</th>
                                    <td>123123</td>
                                    <td>Lampu</td>
                                    <td>10</td>
                                    <td>Rp. 100.000</td>
                                    <td>Rp. 1.000.000</td>
                                </tr>
                                <tr>
                                    <th scope="row">10</th>
                                    <td>123123</td>
                                    <td>Lampu</td>
                                    <td>10</td>
                                    <td>Rp. 100.000</td>
                                    <td>Rp. 1.000.000</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@stop
