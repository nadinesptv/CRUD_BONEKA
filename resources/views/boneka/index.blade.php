<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD-BONEKA</title>
    <style>
        * { margin: 15; padding: 30; box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            padding: 20px;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            background: white;
            padding: 20px;
            border-radius: 5px;
        }
        h1 {
            margin-bottom: 24px;
        }
        .btn {
            display: inline-block;
            padding: 8px 15px;
            text-decoration: none;
            border: none;
            cursor: pointer;
            border-radius: 3px;
        }
        .btn-primary {
            background: blue;
            color: white;
        }
        .btn-success {
            background: green;
            color: white;
        }
        .btn-danger {
            background: red;
            color: white;
        }
        .btn-warning {
            background: orange;
            color: white;
        }
        .btn-info {
            background: lightblue;
            color: black;
        }
        .alert {
            background: lightgreen;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 3px;
        }
    </style>

</head>
<body>
    <div class="container">
        <h1>Data Boneka</h1>
        <a href="{{ route('boneka.create') }}" class="btn btn-primary">Tambah Boneka</a>

        @if (session('success'))
            <div class="alert">
                {{ session('success') }}
            </div>
        @endif

        <table border="1" cellpadding="10" cellspacing="0">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($bonekas as $boneka)
                    <tr>
                        <td>{{ $boneka->id }}</td>
                        <td>{{ $boneka->nama }}</td>
                        <td>{{ $boneka->harga }}</td>
                        <td>{{ $boneka->stok }}</td>
                        <td>
                            <a href="{{ route('boneka.edit', $boneka->id) }}" class="btn btn-warning">Edit</a>

                            <form action="{{ route('boneka.destroy', $boneka->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                            </form>

                            <a href="{{ route('boneka.show', $boneka->id) }}" class="btn btn-info">Show</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>
</html>