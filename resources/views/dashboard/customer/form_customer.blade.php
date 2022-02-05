@extends('dashboard.layout.dashboard')

@section('section')
    <div class="container-fluid">

        <h2 class="my-5">Detail Customer</h2>

        @if(count($errors) > 0)
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    {{ $error }} <br/>
                @endforeach
            </div>
        @endif

        @if(session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif
        @include('dashboard.customer.widgets.form_customer_update')


        <div class="row">
            <div class="col-sm-12">
                @include('dashboard.customer.widgets.table_customer_detail', array('class'=>'table-hover'))
            </div>
        </div>
    </div>



@endsection
