<table class="table {{ $class }}">
	<thead>
		<tr>
			<th>SKU</th>
			<th>Nama Barang</th>
			<th>Nama Paket</th>
			<th>Jumlah</th>
			<th>Ruangan</th>
			<th>Lantai</th>

			<th width="1%">OPSI</th>
		</tr>
	</thead>
	<tbody>
		@foreach($data as $row)
		<tr>
			<td class="col-sm-2">{{$row->sku}}</td>
			<td class="col-sm-3">{{$row->nama_barang}}</td>
			<td class="col-sm-3">{{$row->package}}</td>
			<td >{{$row->jumlah}}</td>
			<td >{{$row->ruangan == '1' ? "true":"false"}}</td>
			<td >{{$row->lantai == '1' ? "true":"false"}}</td>
			<td class="col-sm-2">
				<div class="col-lg-6 my-4">
				<form action="/sub_solution_package/{{$row->id}}" method="POST" enctype='multipart/form-data'>
					@method('delete')
					@csrf
					<input type="submit" value="Delete" class="btn btn-danger btn-sm">

				</form>
				</div>

				<div class="col-lg-6">
					<a href="/sub_solution_package/{{ $row->id }}/edit" class="btn btn-info btn-sm">Show</a>
				</div>

			</td>

		</tr>
		@endforeach


</table>
{{$data->links()}}
