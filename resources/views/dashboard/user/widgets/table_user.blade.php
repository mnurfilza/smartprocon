<table class="table {{ $class }}">
	<thead>
		<tr>
			<th>Nama</th>
			<th>Email</th>
			<th>Role</th>

			<th width="1%">OPSI</th>
		</tr>
	</thead>
	<tbody>
		@foreach($data  as $row)
		<tr>
			<td>{{$row->name}}</td>
			<td>{{ $row->email }}</td>
			<td>{{ $row->users_role }}</td>

			<td class="col-lg-2">
				<div class="col-lg-5 my-4">
				<form action="/user/{{$row->id}}" method="POST" enctype='multipart/form-data'>
					@method('delete')
					@csrf
					<input type="submit" value="Delete" class="btn btn-danger btn-sm">

				</form>
				</div>

				<div class="col-lg-3">
					<a href="/user/{{ $row->id }}/edit" class="btn btn-info btn-sm">Show</a>
				</div>
			
			</td>
			
		</tr>
		@endforeach
</table>