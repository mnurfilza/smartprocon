<table class="table {{ $class }}">
	<thead>
		<tr>
			<th>SKU</th>
			<th>Nama</th>
			<th>Harga Satuan</th>
			<th>Garansi</th>
			<th>Berat Barang</th>
			<th width="1%">OPSI</th>
		</tr>
	</thead>
	<tbody>
		@foreach($data as $row)
		<tr>
			<td class="col-md-2">{{$row->sku}}</td>
			<td class="col-md-3">{{$row->nama}}</td>
			<td class="col-md-2">@currency($row->harga_satuan)</td>
			<td>{{$row->garansi}}</td>
			<td class="col-md-2">{{$row->berat_barang}}kg</td>


			<td class="col-sm-2">
				<div class="col-lg-5 my-4">
				<form action="/product/{{$row->sku}}/delete" method="POST" enctype='multipart/form-data'>
					@method('delete')
					@csrf
					<input type="submit" value="Delete" class="btn btn-danger btn-sm">

				</form>
				</div>

				<div class="col-lg-5">
					<a href="/product/detail/{{ $row->sku }}" class="btn btn-info btn-sm">Show</a>
				</div>

			</td>

		</tr>
		@endforeach


</table>
{{$data->links()}}
