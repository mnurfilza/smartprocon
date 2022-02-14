<table class="table {{ $class }}">
	<thead>
		<tr>
			<th>Provinsi</th>
			<th>Kota</th>
			<th width="1%">OPSI</th>
		</tr>
	</thead>
	<tbody>
		@foreach($data as $row)
		<tr>
			<td>{{$row->provinsi}}</td>
			<td>{{$row->nama_kota}}</td>


			<td class="col-sm-3">
				<div class="col-lg-4 my-4">
				<form action="/product/{{$row->sku}}/delete" method="POST" enctype='multipart/form-data'>
					@method('delete')
					@csrf
					<input type="submit" value="Delete" class="btn btn-danger btn-sm">

				</form>
				</div>
			</td>
			
		</tr>
		@endforeach

	
</table>
{{$data->links()}}