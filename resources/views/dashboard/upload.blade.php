@extends('dashboard.layout.dashboard')

@section('section')
<div class="row">
	<div class="">

		<h2 class="text-center my-5">Upload PDF dan VIDEO</h2>
		
		<div class="col-lg-8 mx-auto my-5">	

			

			@if(count($errors) > 0)
			<div class="alert alert-danger">
				@foreach ($errors->all() as $error)
				{{ $error }} <br/>
				@endforeach
			</div>
			@endif

			<form action="/upload/proses" method="POST" enctype='multipart/form-data'>
				{{ csrf_field() }}

				<div class="form-group">
					<b>PDF / Video</b><br/>
					<input type="file" name="file">
				</div>


				<div class="form-group">
					<label class="font-weight-bold">System</label>
					@foreach ($list as $row)
					<input type='checkbox' name='system' value={{ $row->id_modules }}>{{$row->modules}}<br>
						
					@endforeach
			
					<!-- error message untuk category -->
					@error('category')
						<div class="alert alert-danger mt-2">
							{{ $message }}
						</div>
					@enderror

				</div>

				<input type="submit" value="Upload" class="btn btn-primary">
			</form>
			
			<h4 class="my-5">Data</h4>

			<table class="table table-bordered table-striped">
				<thead>
					<tr>
						<th width="1%">File</th>
						<th>Keterangan</th>
						<th width="1%">OPSI</th>
					</tr>
				</thead>
				<tbody>
					@foreach($data as $row)
					<tr>
						<td><img src="{{ base64_decode($row->file) }}" width="100"></td>
						<td>{{ $row->system }}</td>
						<td>
							<a href="/upload/show/{{ $row->id }}" class="btn btn-danger btn-sm">Show</a>
						</td>
					</tr>
					@endforeach
			</table>
		</div>
	</div>
</div>
@endsection
