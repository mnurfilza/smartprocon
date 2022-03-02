<table class="table table-hover">
	<thead>
		<tr>
			<th>Nama Customer</th>
			<th>Kota</th>
			<th>SKU</th>
			<th>Nama Produk</th>
			<th>Object</th>
			<th>Quantity</th>
			<th>Harga</th>
			<th>Ongkos Kirim</th>
			<th>Ongkos Pasang</th>
			<th>Total</th>

		</tr>
	</thead>
	<tbody>
		@foreach($data as $row)
		<tr>
			<td class="col-md-1">{{$row['customer']}}</td>
			<td class="col-md-1">{{$row['kota']}}</td>
			<td class="col-md-1">{{ $row['sku'] }}</td>
            <td class="col-md-1">{{ $row['nama_produk'] }}</td>
            <td class="col-md-1">{{ $row['object'] }}</td>
			<td class="col-md-1">{{ $row['qty'] }}</td>
			<td class="col-md-1">{{ $row['harga'] }}</td>
            <td class="col-md-1">{{ $row['ongkir'] }}</td>
            <td class="col-md-1">{{ $row['ongkos_pasang'] }}</td>
            <td class="col-md-1">{{ $row['total'] }}</td>
		</tr>
		@endforeach



</table>
