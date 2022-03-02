<table class="table {{ $class }}">
	<thead>
		<tr>
			<th>Name</th>
			<th>Value</th>
			<th>Actions</th>
		</tr>
	</thead>
	<tbody>
		@foreach($data as $row)
		<tr>
			<td class="col-md-2">{{$row->desc}}</td>
			<td class="col-md-3">{{$row->value }}</td>
			

			<td class="col-sm-2">

				<div class="col-lg-5">
					<a href="/paramconfig/{{ $row->id }}/edit" class="btn btn-info btn-sm">Edit</a>
				</div>

			</td>

		</tr>
		@endforeach


</table>
{{$data->links()}}
