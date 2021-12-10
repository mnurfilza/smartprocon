<table class="table  table-striped">
    <thead>
        <tr>
            <th>Kota</th>
            <th>Provinsi</th>
            <th>Tipe Barang</th>
            <th>Harga</th>
            <th width="1%">OPSI</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data  as $row)
        <tr>
            <td>{{$row->kota}}</td>
            <td>{{$row->provinsi}}</td>
            <td>{{ $row->type_barang }}</td>
            <td>@currency($row->harga)</td>
            <td>
                <div class="col-lg-9">
                <form action="/ongkos_pasang/{{$row->id}}" method="POST" enctype='multipart/form-data'>
                    @method('delete')
                    @csrf
                    <input type="submit" value="Delete" class="btn btn-danger btn-sm">

                </form>
                </div>

                <div class="col-lg-4">
                    <a href="/ongkos_pasang/{{ $row->id }}/edit" class="btn btn-info btn-sm">Show</a>
                </div>
            
            </td>
            
        </tr>
        @endforeach
</table>

{{$data->links()}}