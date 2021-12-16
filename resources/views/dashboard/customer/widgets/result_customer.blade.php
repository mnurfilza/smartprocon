<table class="table table-hover">
	<thead>
		<tr>
			<th>Nama Customer</th>
			<th>Phone Number</th>
			<th>Kota</th>
			<th>SKU</th>
			<th>Nama Produk</th>
            <th>Solution</th>
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
			<td>{{$row['customer']}}</td>
			<td>{{$row['phone_number']}}</td>
			<td>{{$row['kota']}}</td>
			<td>{{ $row['sku'] }}</td>
            <td>{{ $row['nama_produk'] }}</td>
            <td>{{ $row['solution'] }}</td>
            <td>{{ $row['object'] }}</td>
			<td>{{ $row['qty'] }}</td>
			<td>{{ $row['harga'] }}</td>
            <td>{{ $row['ongkir'] }}</td>
            <td>{{ $row['ongkos_pasang'] }}</td>
            <td>{{ $row['total'] }}</td>			
		</tr>
		@endforeach


	
</table>
