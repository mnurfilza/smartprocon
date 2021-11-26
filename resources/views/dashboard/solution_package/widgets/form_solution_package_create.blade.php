<form action="/solutions_package" method="POST" enctype='multipart/form-data'>
{{ csrf_field() }}

<div class="form-group">
    <label class="font-weight-bold">Solution</label>
    <select name="nama_solution" class="form-control @error('object') is-invalid @enderror">
        <option value="">Pilih Tipe Barang</option>
        @foreach ($solution as $item )
        <option value={{$item->id}}>{{$item->nama_solution}}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <label class="font-weight-bold">Object</label>
    <select name="nama_object" class="form-control @error('object') is-invalid @enderror">
        <option value="">Pilih Tipe Barang</option>
        @foreach ($object as $item )
        <option value={{$item->id}}>{{$item->nama_object}}</option>
        @endforeach
    </select>
</div>
<input type="submit" value="Submit" class="btn btn-primary">
</form>
