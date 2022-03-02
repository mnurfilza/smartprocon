<form action="/paramconfig/{{$old->id}}" method="POST" enctype='multipart/form-data'>
    {{ csrf_field() }}    
    @method("put")

    <input type="hidden"  class="form-control @error('price') is-invalid @enderror" name="id_config"  placeholder="Masukkan kode barang" value='{{$old->id}}' >

<div class="form-group">
    <label class="font-weight-bold">Description</label>
    <input type="text" disabled class="form-control @error('price') is-invalid @enderror" name="kode_barang"  placeholder="Masukkan kode barang" value='{{$old->desc}}' >
</div>

<div class="form-group">
    <label class="font-weight-bold">Value</label>
    <input type="text" class="form-control @error('nama') is-invalid @enderror" name="value"  placeholder="Masukkan nama barang" value='{{$old->value}}'>
</div>

<input type="submit" value="Submit" class="btn btn-primary">
</form>
