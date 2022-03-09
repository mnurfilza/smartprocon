<form action="/modules" method="POST" enctype='multipart/form-data'>
{{ csrf_field() }}

<div class="form-group">
    <label class="font-weight-bold">Solution</label>
    <select name="solution" class="form-control @error('object') is-invalid @enderror">
        <option value="">Pilih Tipe Solusi</option>
        @foreach ($solution as $item )
        <option value={{$item->id}}>{{$item->nama_solution}}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <label class="font-weight-bold">Link</label>
    <input type="text" class="form-control @error('keterangan') is-invalid @enderror" name="link"  placeholder="Masukkan Link Video">
</div>
<input type="submit" value="Submit" class="btn btn-primary">
</form>
