<form action="/ongkir" method="POST" enctype='multipart/form-data'>
{{ csrf_field() }}
<div class="form-group">
    <label class="font-weight-bold">Kota</label>
    <select name="kota" class="form-control @error('object') is-invalid @enderror">
        <option value="">Pilih Kategori</option>
        @foreach ($regional as $item)
        <option value={{$item->id}}>{{$item->nama_kota}}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <label class="font-weight-bold">Harga</label>
    <input type="text" class="form-control @error('price') is-invalid @enderror" name="price" value='{{ $item->price }}' placeholder="Masukkan Harga Per kilo">
</div>
<input type="submit" value="Submit" class="btn btn-primary">
</form>
