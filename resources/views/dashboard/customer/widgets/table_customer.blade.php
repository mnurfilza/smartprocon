<table class="table {{ $class }}">
    <thead>
    <tr>
        <th>Nama</th>
        <th>Kota</th>
        <th>Email</th>
        <th>Phone Number</th>
        <th>Negara</th>
        <th>OPSI</th>
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

            <td>
                <a href="/customer/{{ $row->id }}/edit" class="btn btn-info btn-sm">Show</a>
            </td>


        </tr>
    @endforeach


</table>
{{$data->links()}}
