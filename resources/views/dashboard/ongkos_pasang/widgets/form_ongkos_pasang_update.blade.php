<form action="/ongkos_pasang/{{$old->id}}" method="POST" enctype='multipart/form-data'>
    {{ csrf_field() }}    
    @method("put")
<input type="hidden" class="form-control @error('id') is-invalid @enderror" name="id" value={{$old->id}} >

<div class="form-group">
    <label class="font-weight-bold">Kota</label>
    <select name="id_kota" class="form-control @error('kota') is-invalid @enderror" disabled>
        <option value="">Pilih Kota</option>
        <option value={{$old->id_kota}} selected>{{$old->kota}}</option>
    </select>
</div>

<div class="form-group">
    <label class="font-weight-bold">Tipe Barang</label>
    <select name="type_barang" class="form-control @error('type_barang') is-invalid @enderror" disabled>
        <option value="">Pilih Tipe Barang</option>
        <option value={{$old->type_barang}} selected>{{$old->type_barang}}</option>
    </select>

    
</div>

<div class="form-group">
    <label class="font-weight-bold">Harga</label>
    <input type="text" class="form-control @error('price') is-invalid @enderror" name="harga" value="{{$old->harga}}" placeholder="Masukkan Harga Per kilo">
</div>
<input type="submit" value="Submit" class="btn btn-primary">
</form>
