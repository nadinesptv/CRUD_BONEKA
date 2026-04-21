<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Boneka</title>
    <style>
        { box-sizing: border-box; margin: 0; padding: 0; }
        body { font-family: Arial, sans-serif; background: #ffffff; padding: 40px 20px; }
        .container { max-width: 500px; margin: auto; background: #ffffff; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); overflow: hidden;}
        .container-header { h1 { font-size: 24px; color: #333333; } background: #8eb6cf; color: white; padding: 20px 25px; border-bottom: 1px solid #000000; }
        .detail-item { display: flex; justify-content: space-between;align-items: center; border-bottom: 1px solid #000000; padding: 15px 25px; }
        .container-footer { padding: 15px 25px; background: #ffffff; border-top: 1px solid #000000; border-radius: 0 0 10px 10px; text-align: right; }

    </style>
</head>
<body>
    <div class="container">
        <div class="container-header">
            <h1> Detail Boneka</h1>
        </div>

        <div class="container-body">
            <div class="detail-item">
                <span class="detail-label">Nama</span>
                <span class="detail-value">{{ $boneka->nama }}</span>
            </div>
            <div class="detail-item">
                <span class="detail-label">Jenis</span>
                <span class="detail-value">{{ $boneka->jenis }}</span>
            </div>
            <div class="detail-item">
                <span class="detail-label">Harga</span>
                <span class="badge-harga">Rp {{ number_format($boneka->harga, 0, ',', '.') }}</span>
            </div>
            <div class="detail-item">
                <span class="detail-label">Stok</span>
                <span class="badge-stok">{{ $boneka->stok }} pcs</span>
            </div>
        </div>

        <div class="container-footer">
            <a href="{{ route('boneka.index') }}" class="btn-back">← Kembali</a>
        </div>
    </div>
</body>
</html>