<form action="/ongkir/{{ $old->id}}" method="POST" enctype='multipart/form-data'>
    {{ csrf_field() }}    
    @method("put")
<input type="hidden" class="form-control @error('price') is-invalid @enderror" name="price" value={{$old->id}} >
<div class="form-group">
    <label class="font-weight-bold">Kota</label>
    <select name="id_kota" class="form-control @error('object') is-invalid @enderror" disabled>
        <option value="">Pilih Kategori</option>
        <option value={{$old->id_kota}} selected>{{$old->kota}}</option>
    </select>
</div>

<div class="form-group">
    <label class="font-weight-bold">Harga</label>
    <input  placeholder='Masukkan Harga Per kilo' type="text" class="form-control @error('price') is-invalid @enderror" name="price" value="{{$old->price}}" >

</div>
<input type="submit" value="Submit" class="btn btn-primary">
</form>
