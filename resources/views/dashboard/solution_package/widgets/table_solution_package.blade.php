<table class="table {{ $class }}">
	<thead>
		<tr>
			<th>Nama Object</th>
			<th>Nama Solution</th>
			<th width="1%">OPSI</th>
		</tr>
	</thead>
	<tbody>
		@foreach($data as $row)
		<tr>
			<td>{{$row->nama_solution}}</td>
			<td>{{$row->nama_object}}</td>
		


			<td class="col-sm-3">
				<div class="col-lg-4 my-4">
				<form action="/solutions_package/{{$row->id}}" method="POST" enctype='multipart/form-data'>
					@method('delete')
					@csrf
					<input type="submit" value="Delete" class="btn btn-danger btn-sm">

				</form>
				</div>

				<div class="col-lg-4">
					<a href="/solutions_package/{{ $row->id }}/edit" class="btn btn-info btn-sm">Show</a>
				</div>
			
			</td>
			
		</tr>
		@endforeach

	
</table>
{{$data->links()}}