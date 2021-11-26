<table class="table {{ $class }}">
	<thead>
		<tr>
			<th>Nama</th>
			<th>Kota</th>
			<th>Email</th>
			<th>Phone Number</th>
			<th>Negara</th>
			<th width="1%">OPSI</th>
		</tr>
	</thead>
	<tbody>
		@foreach($data as $row)
		<tr>
			<td>{{$row->name}}</td>
			<td>{{$row->city}}</td>
			<td>{{$row->email}}</td>
			<td>{{$row->phone_number}}</td>
			<td>{{ $row->country }}</td>


			<td class="col-sm-3">
				<div class="col-lg-4">
					<a href="/customer/{{ $row->id }}/edit" class="btn btn-info btn-sm">Show</a>
				</div>
			
			</td>
			
		</tr>
		@endforeach

	
</table>
{{$data->links()}}