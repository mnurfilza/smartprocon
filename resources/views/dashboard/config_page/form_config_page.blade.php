@extends('dashboard.layout.dashboard')

@section('section')
<div class="row">
<div class="">

    <h2 class="my-5">Config Page</h2>
    
    <div class="col-lg-8 mx-auto my-5">				

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

        @if (empty($old))
               @include('dashboard.config_page.widgets.form_config_page_create')
        @else
            @include('dashboard.config_page.widgets.form_config_page_update')
        @endif	
        
    </div>
    
</div>
</div>

@endsection
