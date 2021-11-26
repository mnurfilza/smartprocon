<form action="/type_barang" method="POST" enctype='multipart/form-data'>
{{ csrf_field() }}
<div class="form-group">
    <label class="font-weight-bold">Tipe Barang</label>
    <input type="text" class="form-control @error('tipe_barang') is-invalid @enderror" name="tipe_barang"  placeholder="Masukkan Tipe Barang">
</div>

<div class="form-group">
    <label class="font-weight-bold">Keterangan</label>
    <input type="text" class="form-control @error('keterangan') is-invalid @enderror" name="keterangan"  placeholder="Masukkan Keterangan Barang">
</div>
<input type="submit" value="Submit" class="btn btn-primary">
</form>
