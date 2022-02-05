<table class="table {{ $class }}">
	<thead>
		<tr>
			<th>Kota</th>
			<th>Harga</th>
			<th>OPSI</th>
		</tr>
	</thead>
	<tbody>
		@foreach($data  as $row)
		<tr>
			<td class="col-md-6">{{$row->kota}}</td>
			<td class="col-md-3">@currency($row->price)</td>
			<td class="col-md-3">
				<div class="col-lg-4 my-4">
				<form action="/ongkir/{{$row->id}}" method="POST" enctype='multipart/form-data'>
					@method('delete')
					@csrf
					<input type="submit" value="Delete" class="btn btn-danger btn-sm">

				</form>
				</div>

				<div class="col-lg-4">
					<a href="/ongkir/{{ $row->id }}/edit" class="btn btn-info btn-sm">Show</a>
				</div>

			</td>

		</tr>
		@endforeach


</table>
{{$data->links()}}
