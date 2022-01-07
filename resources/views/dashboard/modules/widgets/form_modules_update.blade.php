<form action="/modules/{{$old->id}}" method="POST" enctype='multipart/form-data'>
@csrf
    @method("put")
<div class="form-group">
    <label class="font-weight-bold">Solution</label>
    <select name='sltn' class="form-control @error('object') is-invalid @enderror" disabled>
        <option value="">Pilih Solution</option>
        <option value='{{$old->id_solutions}}' selected>{{$old->solutions}}</option>
    </select>
</div>

<div class="form-group">
    <label class="font-weight-bold">Link</label>
    <input type="text" class="form-control @error('keterangan') is-invalid @enderror" value='{{$old->link}}' name='link'  placeholder="Masukkan Keterangan Barang">
</div>

<input type="submit" value="Submit" class="btn btn-primary">
</form>
