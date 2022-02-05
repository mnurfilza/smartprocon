<table class="table  table-striped">
    <thead>
        <tr>
            <th>Kota</th>
            <th>Provinsi</th>
            <th>Tipe Barang</th>
            <th>Harga</th>
            <th>OPSI</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data  as $row)
        <tr>
            <td class="col-md-4">{{$row->kota}}</td>
            <td class="col-md-1">{{$row->provinsi}}</td>
            <td class="col-md-2">{{ $row->type_barang }}</td>
            <td class="col-md-2">@currency($row->harga)</td>
            <td class="col-md-4">
                <div class="col-lg-4">
                <form action="/ongkos_pasang/{{$row->id}}" method="POST" enctype='multipart/form-data'>
                    @method('delete')
                    @csrf
                    <input type="submit" value="Delete" class="btn btn-danger btn-sm">

                </form>
                </div>

                <div class="col-lg-5">
                    <a href="/ongkos_pasang/{{ $row->id }}/edit" class="btn btn-info btn-sm">Show</a>
                </div>

            </td>

        </tr>
        @endforeach
</table>

{{$data->links()}}
