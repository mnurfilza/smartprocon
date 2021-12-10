<form action="/modules/{{$old->id}}" method="POST" enctype='multipart/form-data'>
    {{ csrf_field() }}    
    @method("put")
<div class="form-group">
    <label class="font-weight-bold">Solution</label>
    <select disabled name="solution" class="form-control @error('object') is-invalid @enderror">
        <option value="">Pilih Tipe Barang</option>
        @foreach ($solution as $item )
        <option value="{{$item->id}}" {{$item->id == $old->id_solutions ? 'selected="selected"':''}}>{{$item->nama_solution}}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <label class="font-weight-bold">Link</label>
    <input type="text" class="form-control @error('keterangan') is-invalid @enderror" value='{{$old->link}}' name='link'  placeholder="Masukkan Keterangan Barang">
</div>

<input type="submit" value="Submit" class="btn btn-primary">
</form>
