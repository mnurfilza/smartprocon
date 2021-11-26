<form action="/type_object/{{ $old->id}}" method="POST" enctype='multipart/form-data'>
    {{ csrf_field() }}    
    @method("put")
    <div class="form-group">
        <label class="font-weight-bold">Nama Object</label>
        <input type="text" class="form-control @error('nama_solution') is-invalid @enderror" name="nama_object" value='{{ $old->nama_object }}'  placeholder="Masukkan Tipe Barang">
    </div>
    
    <div class="form-group">
        <label class="font-weight-bold">Keterangan</label>
        <input type="text" class="form-control @error('keterangan') is-invalid @enderror" name="keterangan" value='{{ $old->keterangan }}' placeholder="Masukkan Keterangan Barang">
    </div>
<input type="submit" value="Submit" class="btn btn-primary">
</form>
