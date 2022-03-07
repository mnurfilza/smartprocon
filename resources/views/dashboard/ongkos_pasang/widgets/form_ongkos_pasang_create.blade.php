<form action="/ongkos_pasang" method="POST" enctype='multipart/form-data'>
{{ csrf_field() }}
<div class="form-group">
    <label class="font-weight-bold">Kota</label>
    <input name="kota" class="form-control poppins @error('object') is-invalid @enderror"
           list="datalistOptions" id="inputCity" placeholder="Please enter your city">
    <datalist id="datalistOptions">
        @foreach ($regional as $item)
            <option value="{{$item->id}}-{{$item->nama_kota}}">{{$item->nama_kota}}</option>
        @endforeach

        @error('option')
        <div class="alert alert-danger mt-2">
            {{ $message }}
        </div>
    @enderror
</div>

<div class="form-group">
    <label class="font-weight-bold">Tipe Barang</label>
    <select name="type_barang" class="form-control @error('object') is-invalid @enderror">
        <option value="">Pilih Tipe Barang</option>
        @foreach ($type_barang as $item)
        <option value={{$item->type_barang}}>{{$item->type_barang}}</option>
        @endforeach
    </select>


</div>


<div class="form-group">
    <label class="font-weight-bold">Harga</label>
    <input placeholder='Masukkan Ongkos Pasang' type="text" class="form-control @error('price') is-invalid @enderror" name="price" value={{ $item->price	}} >


</div>
<input type="submit" value="Submit" class="btn btn-primary">
</form>
