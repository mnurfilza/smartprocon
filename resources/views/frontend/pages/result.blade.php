@extends('frontend.layouts.app')
@section('content')
<div class="page-result">
    <section class="section-one">
        <div class="container">
            <div class="row">
                <div class="col-md-12 p-0 d-flex justify-content-center">
                    <div class="box-video">
                        <h1 class="title-section poppins">Result Offering</h1>
                         @foreach ($module as $item)
                        {{-- List Video Result Offering --}}

                            <iframe class="video-works " width="514" height="315" src={{$item->link}} allow='autoplay' muted loop frameborder="0" allowfullscreen>
                                Your browser does not support the video tag.
                            </iframe>


                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    @php
        $grandtotal = 0;
    @endphp
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

                                @php
                                    $grandtotal += $item->total;
                                @endphp

                                @endforeach

                              
                            </tbody>
                        </table>
                        <p>Total : <b>@currency($grandtotal)</b></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @else
    @endif
</div>



@stop
