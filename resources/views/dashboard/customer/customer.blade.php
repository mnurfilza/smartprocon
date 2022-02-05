@extends('dashboard.layout.dashboard')

@section('section')
<div class="col-lg-12 mx-7 my-7">
<div class="container-fluid">
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
        <br>
		<div class="row">
			<div class="col-md-6">
				<button type="submit"  class="btn btn-info btn-sm" data-toggle="modal"  data-backdrop="static" data-keyboard="false" data-target="#myModalHorizontal">Export Customer</button>
			</div>

            <div class="form-group col-md-6">
                <form class="form-inline" method="GET" action="/filter_customer">
                    <input type="text" class="form-control" id="filter" name="filter" placeholder="Search..." value="">
                    <button type="submit" class="btn btn-default mb-2">Filter</button>
                </form>
            </div>
		</div>


	</div>
<div class="row">


		@section ('htable_panel_title','Table Customer')
    <div class="col-md-10 my-5">
		@section ('htable_panel_body')
		@include('dashboard.customer.widgets.table_customer', array('class'=>'table-hover'))
		@endsection
		@include('dashboard.widgets.panel', array('header'=>true, 'as'=>'htable'))
	</div>
</div>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="myModalHorizontal" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<!-- Modal Header -->
			<div class="modal-header" style="background: orange">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="ion-android-close"></span></button>
				<h4 class="modal-title" id="myModalLabel" style="color: whitesmoke;">Export Customer To Excell</h4>
			</div>            <!-- Modal Body -->
			<div class="modal-body">
				<div>
					Export
				</div>
				<form action="/preview" method="GET">
					<div class="header-btn">
						<div id="div-physical">
							<label>
								<input id="rdb_physical" name="startDate"  type="date" class="validate[required]">
								Start Date
							</label>
						</div>
						<div id="div-physical">
							<label>
								<input id="rdb_physical" name="endDate"  type="date" class="validate[required]">
								End Date
							</label>
						</div>

						<div class="form-group">
							<label class="font-weight-bold">Kota</label>
							<select name="kota" class="form-control @error('object') is-invalid @enderror">
								<option value="">Pilih Kota</option>
								@foreach ($regional as $item)
								<option value='{{$item->nama_kota}}'>{{$item->nama_kota}}</option>
								@endforeach
							</select>
						</div>

						<div class="form-group">
							<label class="font-weight-bold">Solution</label>
                            <div class="row">
                                <div class="col-md-4">
                                    @foreach ($solution as $item)
                                        <input type='checkbox' name='solution[]' value='{{ $item->nama_solution }}'>{{$item->nama_solution}}<br>
                                    @endforeach
                                </div>

                            </div>

						</div>
						<div class="modal-body">
							<div class="modal-footer" id="modal_footer">
                                <button type="submit" class="btn btn-primary">Preview</button>
								{{-- <a href="/export" id="btnDonate" class="btn btn-default-border-blk">Donate</a> --}}
							</div>
						</div>
						<button type="submit" class="btn btn-secondary" data-dismiss="modal">Close</button>
				</form>

			</div>
		</div>
	</div>


@endsection

