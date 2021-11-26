<form action="/type_object" method="POST" enctype='multipart/form-data'>
{{ csrf_field() }}
<div class="form-group">
    <label class="font-weight-bold">Nama Object</label>
    <input type="text" class="form-control @error('nama_solution') is-invalid @enderror" name="nama_object"  placeholder="Masukkan Tipe Barang">
</div>

<div class="form-group">
    <label class="font-weight-bold">Keterangan</label>
    <input type="text" class="form-control @error('keterangan') is-invalid @enderror" name="keterangan"  placeholder="Masukkan Keterangan Barang">
</div>
<input type="submit" value="Submit" class="btn btn-primary">
</form>
