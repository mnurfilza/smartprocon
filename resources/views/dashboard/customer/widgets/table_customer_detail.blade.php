<div class="col-lg-12">
	@php
		$total = 0;	
	@endphp
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
			@if($row->offering_id != $v->id)
				@continue
			@endif
			<tr>
				<td>{{$row->sku}}</td>
				<td>{{$row->nama_produk}}</td>
				<td>{{$row->qty}}</td>
				<td>@currency($row->ongkir)</td>
				<td>@currency($row->ongkos_pasang)</td>
				<td>@currency($row->harga)</td>
				<td>@currency($row->total)</td>
				
			</tr>	
			@if($row->offering_id == $v->id)
				@php
					$total += $row->total;
				@endphp
			@endif	
			@endforeach

			
	</table>
	
	
@endforeach

<br>
<h4> Grand Total : <b>@currency($total)</b></h4>

</div>
{{-- {{$data->links()}} --}}