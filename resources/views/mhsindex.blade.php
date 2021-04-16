<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Data Mahasiswa</title>
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}"/>
    </head>
    <body>
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <h3>Data Mahasiswa</h3>
                    <a href="/mahasiswa/tambah">+ Tambah Mahasiswa</a>
                    <br/>
                    <br/>

                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>Prodi</th>
                            <th>Alamat</th>
                            <th>Opsi</th>
                        </tr>
                        @foreach($mhs as $m)
                            <tr>
                                <td>{{ $m->nim }}</td>
                                <td>{{ $m->nama }}</td>
                                <td>{{ $m->prod }}</td>
                                <td>{{ $m->alamat }}</td>
                                <td>
                                    <a href="/mahasiswa/edit/{{ $m->id }}" class="btn btn-warning btn-sm">Edit</a>
                                    |
                                    <a href="/mahasiswa/delete/{{ $m->id }}" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                </table>
                <br/>

                <p>Halaman : {{ $mhs->currentPage() }}</p>
                <p>Jumlah Data : {{ $mhs->total() }}</p>
                <p>Data per Halaman : {{ $mhs->perPage() }}</p>
                <br/>

                {{ $mhs->links() }}
                </div>
            </div>
        </div>
    </body>
</html>
