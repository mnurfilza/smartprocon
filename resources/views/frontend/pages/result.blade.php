@extends('frontend.layouts.app')
@section('content')
<div class="page-result">
    <section class="section-one">
        <div class="container">
            <div class="row">
                <div class="col-12 p-0">
                    @foreach ($module as $item)
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

    @if ($isOffering== 1)
    <section class="section-three">
        <div class="container">
            <div class="row">
                <div class="col-12 p-0">
                    <div class="table-responsive">
                        <table class="table table-bordered poppins">
                            <thead>
                                <tr>
                                    <th scope="col">Kode Produk</th>
                                    <th scope="col">Deskripsi Produk</th>
                                    <th scope="col">Jumlah Barang</th>
                                    <th scope="col">Harga Satuan</th>
                                    <th scope="col">Total Harga</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($offering as $item)
                                <tr>
                                    <td>{{$item->sku}}</td>
                                    <td>{{$item->nama_produk}}</td>
                                    <td>{{$item->qty}}</td>
                                    <td>@currency($item->harga)</td>
                                    <td>@currency($item->total)</td>
                                </tr>
                                @endforeach


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @else
    @endif
</div>



@stop
