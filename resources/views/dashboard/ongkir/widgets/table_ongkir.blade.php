<table class="table {{ $class }}">
	<thead>
		<tr>
			<th>Kota</th>
			<th>Harga</th>
			<th width="1%">OPSI</th>
		</tr>
	</thead>
	<tbody>
		@foreach($data  as $row)
		<tr>
			<td>{{$row->kota}}</td>
			<td>Rp. {{ $row->price }}</td>
			<td class="col-lg-2">
				<div class="col-lg-5 my-4">
				<form action="/ongkir/{{$row->id}}" method="POST" enctype='multipart/form-data'>
					@method('delete')
					@csrf
					<input type="submit" value="Delete" class="btn btn-danger btn-sm">

				</form>
				</div>

				<div class="col-lg-3">
					<a href="/ongkir/{{ $row->id }}/edit" class="btn btn-info btn-sm">Show</a>
				</div>
			
			</td>
			
		</tr>
		@endforeach

	
</table>
{{$data->links()}}