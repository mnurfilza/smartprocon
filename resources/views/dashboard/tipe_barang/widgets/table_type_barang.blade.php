<table class="table {{ $class }}">
	<thead>
		<tr>
			<th>Tipe Barang</th>
			<th>Keterangan</th>
			<th width="1%">OPSI</th>
		</tr>
	</thead>
	<tbody>
		@foreach($data  as $row)
		<tr>
			<td>{{$row->type_barang}}</td>
			<td>{{ $row->keterangan }}</td>
			<td class="col-lg-2">
				<div class="col-lg-5 my-4">
				<form action="/type_barang/{{$row->id}}" method="POST" enctype='multipart/form-data'>
					@method('delete')
					@csrf
					<input type="submit" value="Delete" class="btn btn-danger btn-sm">

				</form>
				</div>

				<div class="col-lg-3">
					<a href="/type_barang/{{ $row->id }}/edit" class="btn btn-info btn-sm">Show</a>
				</div>
			
			</td>
			
		</tr>
		@endforeach
</table>