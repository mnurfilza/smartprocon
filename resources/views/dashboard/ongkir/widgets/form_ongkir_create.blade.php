<form action="/ongkir" method="POST" enctype='multipart/form-data'>
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
    </datalist>
</div>

<div class="form-group">
    <label class="font-weight-bold">Harga</label>
    <input type="text" class="form-control @error('price') is-invalid @enderror" name="price" value='{{ $item->price }}' placeholder="Masukkan Harga Ongkos Kirim Per kilo">
</div>
<input type="submit" value="Submit" class="btn btn-primary">
</form>
