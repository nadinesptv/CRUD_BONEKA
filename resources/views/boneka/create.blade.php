<!DOCTYPE html>
<html>
<head>
    <title>Tambah Boneka</title>
    <style>
        body { font-family: Arial; padding: 20px; }
        .container { max-width: 500px; margin: auto; background: #f9f9f9; padding: 20px; border-radius: 5px; }
        input, button { width: 100%; padding: 10px; margin: 5px 0; }
        input { border: 1px solid #ddd; border-radius: 3px; }
        button { background: green; color: white; border: none; cursor: pointer; }
        .error { color: red; font-size: 12px; }
    </style>
</head>
<body>

<div class="container">
    <h1>Tambah Boneka Baru</h1>

    {{-- Pesan error --}}
    @if($errors->any())
        <div class="error">
            @foreach($errors->all() as $error)
                {{ $error }}<br>
            @endforeach
        </div>
    @endif

    {{-- FORM TAMBAH BONEKA --}}
    <form action="{{ route('boneka.store') }}" method="POST">
        @csrf

        <label>Nama Boneka:</label>
        <input type="text" name="nama" required>

        <label>Jenis Boneka:</label>
        <input type="text" name="jenis" required>

        <label>Harga (Rp):</label>
        <input type="number" name="harga" required>

        <label>Stok:</label>
        <input type="number" name="stok" required>

        <button type="submit">SIMPAN</button>
        <a href="{{ route('boneka.index') }}">Kembali</a>
    </form>
</div>

</body>
</html>