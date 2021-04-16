<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}"/>
    </head>
    <body>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col lg-6">
                    <div class="card mt-5">
                        <div class="card-body">
                            <h3 class="text-center">Tambah Mahasiswa</h3>
                            
                            @if(count($errors) > 0)
                                <div class="alert alert-danger">
                                    @foreach($errors->all() as $e)
                                        <ul>
                                            <li>{{ $e }}</li>
                                        </ul>
                                    @endforeach
                                </div>
                            @endif
                            <br/>

                            <form method="POST" action="/mhsstore">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="nim">NIM :</label>
                                    <input type="number" name="nim" class="form-control" value="{{ old('nim') }}"/>
                                </div>
                                <div class="form-group">
                                    <label for="nama">Nama :</label>
                                    <input type="text" name="nama" class="form-control" value="{{ old('nama') }}"/>
                                </div>
                                <div class="form-group">
                                    <label for="prod">Prodi :</label>
                                    <input type="text" name="prod" class="form-control" value="{{ old('prod') }}"/>
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat :</label>
                                    <textarea name="alamat" class="form-control">{{ old('alamat') }}</textarea>
                                </div>
                                <br/>
                                <div class="form-group">
                                    <input type="submit" name="submit" class="btn btn-primary"/>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>


