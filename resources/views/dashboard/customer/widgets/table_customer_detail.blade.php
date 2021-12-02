<div class="col-lg-12">
@foreach($of as $v)
	<h3>{{$v->solution}}</h3>
	<table class="table {{ $class }}">
		<thead>
			<tr>
				<th>SKU</th>
				<th>Produk</th>
				<th>Jumlah</th>
				<th>Ongkos Kirim</th>
				<th>Ongkos Pasang</th>
				<th>Harga</th>
				<th>Total</th>
			</tr>
		</thead>
		<tbody>
			@foreach($offer as $row)
			<tr>
				<td>{{$row->sku}}</td>
				<td>{{$row->nama_produk}}</td>
				<td>{{$row->qty}}</td>
				<td>{{$row->ongkir}}</td>
				<td>{{ $row->ongkos_pasang }}</td>
				<td>{{ $row->harga }}</td>
				<td>{{ $row->total }}</td>
				
			</tr>
			@endforeach

		
	</table>
@endforeach
</div>
{{-- {{$data->links()}} --}}