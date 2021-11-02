<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data Blog - SantriKoding.com</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background: lightgray">

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        @if(count($errors) > 0)
                        <div class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                            {{ $error }} <br/>
                            @endforeach
                        </div>
                        @endif
                        <form action="/offering/proses" method="POST" enctype="multipart/form-data">
                        
                            @csrf

                            <div class="form-group">
                                <label class="font-weight-bold">Option</label>
                                <select name="products" class="form-control @error('option') is-invalid @enderror">
                                    <option value="">Pilih Kategori</option>
                                    <option value="Appartemen">Appartemen</option>
                                    <option value="Commercial Building">Commercial Building</option>
                                    <option value="Residential">Residential</option>
                                    <option value="Other">Other</option>
                                </select>
                            
                                <!-- error message untuk option -->
                                @error('option')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">System</label>
                                @foreach ($data as $row)
                                <input type='checkbox' name='system[]' value={{ $row->id_modules }}>{{$row->modules}}<br>
                                    
                                @endforeach
                        
                                <!-- error message untuk category -->
                                @error('system')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Jumlah Lantai</label>
                                <select name="floor-and-rooms" class="form-control @error('category') is-invalid @enderror">
                                    <option value="">Pilih Kategori</option>
                                    <option value="1-2">1-2</option>
                                    <option value="3-4">3-4</option>
                                    <option value="5-6">5-6</option>
                                </select>
                            
                                <!-- error message untuk category -->
                                @error('category')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Budget</label>
                                <select name="budget" class="form-control @error('budget') is-invalid @enderror">
                                    <option value="">Pilih Kategori</option>
                                    <option value="500$-800$">500$-800$</option>
                                    <option value="500$-800$">500$-800$</option>
                                </select>
                            
                                <!-- error message untuk category -->
                                @error('category')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Nama</label>
                                <input type="text" class="form-control @error('nama') is-invalid @enderror" name="name" value="{{ old('title') }}" placeholder="Masukkan Judul Blog">
                            
                                <!-- error message untuk title -->
                                @error('nama')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Phone</label>
                                <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone_number" value="{{ old('title') }}" placeholder="Masukkan Judul Blog">
                            
                                <!-- error message untuk title -->
                                @error('phone')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Emal</label>
                                <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('title') }}" placeholder="Masukkan Judul Blog">
                            
                                <!-- error message untuk title -->
                                @error('email')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">City</label>
                                <input type="text" class="form-control @error('city') is-invalid @enderror" name="city" value="{{ old('title') }}" placeholder="Masukkan Judul Blog">
                            
                                <!-- error message untuk title -->
                                @error('city')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Country</label>
                                <input type="text" class="form-control @error('country') is-invalid @enderror" name="country" value="{{ old('title') }}" placeholder="Masukkan Judul Blog">
                            
                                <!-- error message untuk title -->
                                @error('country')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            

                            <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                            <button type="reset" class="btn btn-md btn-warning">RESET</button>

                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'content' );
</script>
</body>
</html>