<form action="/regional" method="POST" enctype='multipart/form-data'>
{{ csrf_field() }}

<div class="form-group">
    <label class="font-weight-bold">Provinsi</label>
    <select name="provinsi" class="form-control @error('object') is-invalid @enderror">
        <option value="">Pilih Tipe Barang</option>
        @foreach ($data as $item )
        <option value={{$item->id}}>{{$item->nama}}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <label class="font-weight-bold">Kota</label>
    <input type="text" class="form-control @error('price') is-invalid @enderror" name="nama_kota"  placeholder="Masukkan Nama Kota">
</div>

<input type="submit" value="Submit" class="btn btn-primary">
</form>
