<form action="/user/{{ $old->id}}" method="POST" enctype='multipart/form-data'>
    {{ csrf_field() }}    
    @method("put")
<input type="hidden" class="form-control @error('id') is-invalid @enderror" name="id" value={{$old->id}} >
<div class="form-group">
    <label class="font-weight-bold">Nama</label>
    <input type="text" class="form-control @error('nama') is-invalid @enderror" name="name" value='{{ $old->name }}' placeholder="Masukkan Tipe Barang">
</div>

<div class="form-group">
    <label class="font-weight-bold">Email</label>
    <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value='{{ $old->email }}' placeholder="Masukkan Keterangan Barang">
</div>

<div class="form-group">
    <label class="font-weight-bold">Password</label>
    <input type="text" class="form-control @error('password') is-invalid @enderror" name="password" value='{{ $old->password }}' placeholder="Masukkan Keterangan Barang">
</div>
<input type="submit" value="Submit" class="btn btn-primary">
</form>
