<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# 🧸 Tugas CRUD Boneka Laravel 12 - Nadine

## 📌 Deskripsi
Project ini merupakan aplikasi manajemen inventori boneka berbasis **Laravel 12** yang mengimplementasikan fitur **CRUD** (Create, Read, Update, Delete). Aplikasi ini dirancang untuk memudahkan pendataan stok boneka secara efisien.

## 🛠️ Teknologi yang Digunakan
* **Framework:** Laravel 12
* **Bahasa:** PHP
* **Database:** MySQL
* **Frontend:** Blade Templating (Laravel)

## ⚙️ Fitur Utama
* ✅ **Tambah Koleksi:** Input data boneka baru (Nama, Jenis, Harga, Stok).
* ✅ **Daftar Boneka:** Menampilkan semua koleksi yang tersedia di gudang.
* ✅ **Edit Data:** Memperbarui informasi boneka jika ada perubahan harga atau detail.
* ✅ **Hapus Data:** Menghapus data boneka dari sistem jika sudah tidak diproduksi.

  ## 🚀 Panduan Instalasi

1. **Clone Repository**
   ```bash
   git clone [https://github.com/nadine-username/crud-boneka-nadine.git](https://github.com/nadine-username/crud-boneka-nadine.git)
   cd crud-boneka-nadine

## 📂 Struktur Project (Model & Controller)
```text
app/
├── Http/
│   └── Controllers/
│       └── DollController.php
├── Models/
│   └── Doll.php
├── Database/
│   └── migrations/
│       └── 2026_04_22_xxxxxx_create_dolls_table.php
resources/
└── views/
    └── dolls/
        ├── index.blade.php
        ├── create.blade.php
        ├── edit.blade.php
        └── show.blade.php

