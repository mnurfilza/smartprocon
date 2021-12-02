@extends('dashboard.layout.dashboard')

@section('section')
<div class="row">
<div class="">

    <h2 class="my-5">Detail Customer</h2>
    
    <div class="col-sm-3 mx-auto my-5">				

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

        
    </div>
    <div class="col-lg-9 mx-auto my-5">				

    @include('dashboard.customer.widgets.table_customer_detail', array('class'=>'table-hover'))
    </div>
</div>
</div>

@endsection
