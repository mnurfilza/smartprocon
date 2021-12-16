@extends('dashboard.layout.dashboard')

@section('section')
<div class="row">
    <div class="row">		
        <div class="col-sm-1">
            <button type="submit"  class="btn btn-info btn-sm" data-toggle="modal"   data-keyboard="false" data-target="#myModalHorizontal1">Export Customer</button>
            </div>
    </div>
	<div class="col-md-10 my-5">
        <label> Preview Customer</label>

		@include('dashboard.customer.widgets.result_customer', array('class'=>'table-hover'))
		@include('dashboard.widgets.panel', array('header'=>true, 'as'=>'htable'))
	</div>
</div>
<!-- Modal -->
<div class="modal fade" id="myModalHorizontal1" tabindex="-1" role="dialog" aria-hidden="true">
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
				<form action="/export" method="POST" enctype='multipart/form-data'>
					{{ csrf_field() }}
					@method('POST');
					<div class="header-btn">
						<div id="div-physical">
							<label>
								<input id="rdb_physical" name="startDate" value='{{$old['startDate']}}' disabled type="date" class="validate[required]">
								Start Date
							</label>
						</div>
						<div id="div-physical">
							<label>
								<input id="rdb_physical" name="endDate"  value='{{$old['endDate']}}' disabled type="date" class="validate[required]">
								End Date
							</label>
						</div>

						<div class="form-group">
							<label class="font-weight-bold">Kota</label>
							<input id="rdb_physical" name="kota"  value='{{$old['kota']}}' disabled type="text" class="validate[required]">

						</div>

						<div class="form-group">
							<label class="font-weight-bold">Solution</label>
								@foreach ($solution as $item)
								@if (array_key_exists("solution", $old))
								@foreach ($old['solution'] as $sdl)
								<input type='checkbox' name='solution[]' disabled value='{{ $item->nama_solution  == $sdl ?  'checked="checked"' : ''}}'>{{$item->nama_solution}}<br>
									
								@endforeach
								@else
								<input type='checkbox' name='solution[]' disabled value='{{ $item->nama_solution }}'>{{$item->nama_solution}}<br>

								@endif
								
								@endforeach
						</div>
						<div class="modal-body">
							<div class="modal-footer" id="modal_footer">
							<input id="btnSubmit" name="btnSubmit" value="Export" class="btn btn-default-border-blk" type="submit">
								{{-- <a href="/export" id="btnDonate" class="btn btn-default-border-blk">Donate</a> --}}
							</div>
						</div>
						<button type="submit" class="btn btn-secondary" data-dismiss="modal">Close</button>
				</form>
			
			</div>
		</div>
	</div>
@endsection
