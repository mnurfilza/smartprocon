<form action="/sub_solution_package" method="POST" enctype='multipart/form-data'>
{{ csrf_field() }}

<div class="form-group">
    <label class="font-weight-bold">Solution Package Name
    </label>
    <select name="solution_package" class="form-control @error('object') is-invalid @enderror">
        <option value="">Pilih Paket Solusi</option>
        @foreach ($sp as $item )
        <option value={{$item->id}}>{{$item->nama_object}} - {{$item->nama_solution}}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <label class="font-weight-bold">Nama Barang
    </label>
    <select name="nama_barang" class="form-control @error('object') is-invalid @enderror">
        <option value="">Pilih Barang</option>
        @foreach ($barang as $item )
        <option value={{$item->sku}}>{{$item->nama}}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <label class="font-weight-bold">Jumlah</label>
    <input type="number" class="form-control @error('keterangan') is-invalid @enderror" name="jumlah" min="0" placeholder="Masukkan Jumlah Barang">
</div>

<div class="form-group">
    <label class="font-weight-bold">Ruangan</label>
        <input type='checkbox' name='ruangan' value='1' class="switch-input">
        <span> </span>
        <label class="font-weight-bold">Lantai</label>
        <input type='checkbox' name='lantai' value='1'  class="switch-input">
</div>


<input type="submit" value="Submit" class="btn btn-primary">
</form>
