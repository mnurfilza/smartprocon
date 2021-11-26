<form action="/product/update/{{$old->sku}}" method="POST" enctype='multipart/form-data'>
    {{ csrf_field() }}    
    @method("put")
<div class="form-group">
    <label class="font-weight-bold">Nama</label>
    <input type="text" disabled class="form-control @error('price') is-invalid @enderror" name="kode_barang"  placeholder="Masukkan kode barang" value='{{$old->name}}' >
</div>

<div class="form-group">
    <label class="font-weight-bold">Email</label>
    <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama"  placeholder="Masukkan nama barang" value='{{$old->email}}' disabled>
</div>

<div class="form-group">
    <label class="font-weight-bold">Kota</label>
    <input type="text" class="form-control @error('price') is-invalid @enderror" name="berat_barang"  placeholder="Masukkan Berat Barang in Kilogram" value='{{$old->city}}' disabled>
</div>

<div class="form-group">
    <label class="font-weight-bold">Negara</label>
    <input type="text" class="form-control @error('price') is-invalid @enderror" name="garansi"  placeholder="Masukkan Garansi" value='{{$old->country}}' disabled>
</div>

<div class="form-group">
    <label class="font-weight-bold">Phone Number</label>
    <input type="text" class="form-control @error('price') is-invalid @enderror" name="price"  placeholder="Masukkan Harga Per kilo" value='{{$old->phone_number}}' disabled>
</div>
<div class="form-group">
    <label class="font-weight-bold">Create At</label>
    <input type="text" class="form-control @error('price') is-invalid @enderror" name="description"  placeholder="Masukkan Deskripsi produk" value='{{$old->create_at}}' disabled >
</div>
</form>
