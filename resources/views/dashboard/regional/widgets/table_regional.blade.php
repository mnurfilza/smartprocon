<table class="table {{ $class }}">
	<thead>
		<tr>
			<th>Provinsi</th>
			<th>Kota</th>
		</tr>
	</thead>
	<tbody>
		@foreach($data as $row)
		<tr>
			<td>{{$row->provinsi}}</td>
			<td>{{$row->nama_kota}}</td>		
			
		</tr>
		@endforeach

	
</table>
{{$data->links()}}