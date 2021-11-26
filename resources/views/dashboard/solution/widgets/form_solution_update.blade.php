<form action="/solution/{{ $old->id}}" method="POST" enctype='multipart/form-data'>
    {{ csrf_field() }}    
    @method("put")
<input type="hidden" class="form-control @error('id') is-invalid @enderror" name="id" value={{$old->id}} >
<div class="form-group">
    <label class="font-weight-bold">Nama Solution</label>
    <input type="text" class="form-control @error('type_barang') is-invalid @enderror" name="nama_solution" value='{{ $old->nama_solution }}' placeholder="Masukkan Tipe Barang">
</div>

<div class="form-group">
    <label class="font-weight-bold">Keterangan</label>
    <input type="text" class="form-control @error('keterangan') is-invalid @enderror" name="keterangan" value='{{ $old->keterangan }}' placeholder="Masukkan Keterangan Barang">
</div>
<input type="submit" value="Submit" class="btn btn-primary">
</form>
