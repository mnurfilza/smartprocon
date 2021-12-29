<form action="/user" method="POST" enctype='multipart/form-data'>
{{ csrf_field() }}
<div class="form-group">
    <label class="font-weight-bold">Nama</label>
    <input type="text" class="form-control @error('nama') is-invalid @enderror" name="name"  placeholder="Masukkan Nama">
</div>

<div class="form-group">
    <label class="font-weight-bold">Email</label>
    <input type="text" class="form-control @error('email') is-invalid @enderror" name="email"  placeholder="Masukkan Email">
</div>

<div class="form-group">
    <label class="font-weight-bold">Password</label>
    <input type="text" class="form-control @error('password') is-invalid @enderror" name="password"  placeholder="Masukkan Password">
</div>
<input type="submit" value="Submit" class="btn btn-primary">
</form>
