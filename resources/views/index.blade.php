<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial Membuat Pencarian Pada Laravel – www.malasngoding.com</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Custom CSS */
        .search-form {
            margin-bottom: 20px;
        }
        .pagination {
            justify-content: center;
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <h2 class="text-center"><a href="https://www.malasngoding.com" class="text-dark">www.malasngoding.com</a></h2>
    <h3 class="text-center mb-4">Data Pegawai</h3>

    <!-- Search Form -->
    <form class="search-form" action="/pegawai/cari" method="GET">
        <div class="input-group mb-3">
            <input type="text" name="cari" class="form-control" placeholder="Cari Pegawai ..." value="{{ old('cari') }}">
            <div class="input-group-append">
                <button class="btn btn-primary" type="submit">CARI</button>
            </div>
        </div>
    </form>

    <!-- Table -->
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Jabatan</th>
                    <th>Umur</th>
                    <th>Alamat</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pegawai as $p)
                <tr>
                    <td>{{ $p->pegawai_nama }}</td>
                    <td>{{ $p->pegawai_jabatan }}</td>
                    <td>{{ $p->pegawai_umur }}</td>
                    <td>{{ $p->pegawai_alamat }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Pagination -->
    <div class="d-flex justify-content-center">
        {{ $pegawai->links() }}
    </div>

    <!-- Pagination Info -->
    <div class="text-center mt-3">
        <p>Halaman : {{ $pegawai->currentPage() }}</p>
        <p>Jumlah Data : {{ $pegawai->total() }}</p>
        <p>Data Per Halaman : {{ $pegawai->perPage() }}</p>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
