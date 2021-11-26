<form action="/product/update/{{$old->sku}}" method="POST" enctype='multipart/form-data'>
    {{ csrf_field() }}    
    @method("put")
<div class="form-group">
    <label class="font-weight-bold">SKU (Kode Barang)</label>
    <input type="text" disabled class="form-control @error('price') is-invalid @enderror" name="kode_barang"  placeholder="Masukkan kode barang" value='{{$old->sku}}' >
</div>

<div class="form-group">
    <label class="font-weight-bold">Nama Barang</label>
    <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama"  placeholder="Masukkan nama barang" value='{{$old->nama}}'>
</div>

<div class="form-group">
    <label class="font-weight-bold">Berat Barang</label>
    <input type="text" class="form-control @error('price') is-invalid @enderror" name="berat_barang"  placeholder="Masukkan Berat Barang in Kilogram" value='{{$old->berat_barang}}'>
</div>

<div class="form-group">
    <label class="font-weight-bold">Tipe Barang</label>
    <select name="type_barang" class="form-control @error('object') is-invalid @enderror">
        <option value="">Pilih Tipe Barang</option>
        <option value='{{$old->type_barang}}' selected>{{$old->type_barang}}</option>
    </select>
</div>

<div class="form-group">
    <label class="font-weight-bold">Garansi</label>
    <input type="text" class="form-control @error('price') is-invalid @enderror" name="garansi"  placeholder="Masukkan Garansi" value='{{$old->garansi}}'>
</div>

<div class="form-group">
    <label class="font-weight-bold">Harga</label>
    <input type="text" class="form-control @error('price') is-invalid @enderror" name="price"  placeholder="Masukkan Harga Per kilo" value='{{$old->harga_satuan}}'>
</div>
<div class="form-group">
    <label class="font-weight-bold">Deskripsi</label>
    <textarea type="text" class="form-control @error('price') is-invalid @enderror" name="description"  placeholder="Masukkan Deskripsi produk" >{{$old->description}}</textarea>
</div>
<input type="submit" value="Submit" class="btn btn-primary">
</form>
