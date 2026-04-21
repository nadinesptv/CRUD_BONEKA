<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Boneka</title>
    <style>
        body { font-family: Arial; padding: 20px; }
        .container { max-width: 500px; margin: auto; background: #f9f9f9; padding: 20px; border-radius: 5px; }
        input, button { width: 100%; padding: 10px; margin: 5px 0; }
        input { border: 1px solid #ddd; border-radius: 3px; }
        button { background: green; color: white; border: none; cursor: pointer; }
        .error { color: red; font-size: 12px; }
        .alert-danger { background: #f8d7da; color: #721c24; padding: 10px; border-radius: 5px; margin-bottom: 15px; }
        .alert-danger ul { margin: 0; padding-left: 20px; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Edit Boneka</h1>

        @if ($errors->any())
            <div class="alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('boneka.update', $boneka->id) }}" method="POST">
            @csrf
            @method('PUT')
            
            <p>Nama:</p>
            <input type="text" name="nama" value="{{ $boneka->nama }}">

            <p>Jenis:</p>
            <input type="text" name="jenis" value="{{ $boneka->jenis }}">

            <p>Harga:</p>
            <input type="number" name="harga" value="{{ $boneka->harga }}">

            <p>Stok:</p>
            <input type="number" name="stok" value="{{ $boneka->stok }}">

            <br><br>
            <button type="submit">Update</button>
        </form>
    </div>
</body>
</html>