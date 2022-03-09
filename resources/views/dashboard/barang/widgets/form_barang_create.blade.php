<form action="/product" method="POST" enctype='multipart/form-data'>
{{ csrf_field() }}

<div class="form-group">
    <label class="font-weight-bold">SKU (Kode Barang)</label>
    <input type="text" class="form-control @error('price') is-invalid @enderror" name="kode_barang"  placeholder="Masukkan kode barang">
</div>

<div class="form-group">
    <label class="font-weight-bold">Nama Barang</label>
    <input type="text" class="form-control @error('price') is-invalid @enderror" name="nama_barang"  placeholder="Masukkan nama barang">
</div>

<div class="form-group">
    <label class="font-weight-bold">Berat Barang</label>
    <input type="text" class="form-control @error('price') is-invalid @enderror" name="berat_barang"  placeholder="Masukkan Berat Barang in Kilogram">
</div>

<div class="form-group">
    <label class="font-weight-bold">Tipe Barang</label>
    <select name="tipe_barang" class="form-control @error('object') is-invalid @enderror">
        <option value="">Pilih Tipe Barang</option>
        @foreach ($type_barang as $item )
        <option value={{$item->id}}>{{$item->type_barang}}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <label class="font-weight-bold">Garansi</label>
    <input type="text" class="form-control @error('price') is-invalid @enderror" name="garansi"  placeholder="Masukkan Garansi">
</div>

<div class="form-group">
    <label class="font-weight-bold">Harga</label>
    <input type="text" class="form-control @error('price') is-invalid @enderror" name="price"  placeholder="Masukkan Harga Barang">
</div>
<div class="form-group">
    <label class="font-weight-bold">Deskripsi</label>
    <textarea type="text" class="form-control @error('price') is-invalid @enderror" name="description"  placeholder="Masukkan Deskripsi produk"></textarea>
</div>
<input type="submit" value="Submit" class="btn btn-primary">
</form>
