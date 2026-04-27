<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# 🧸 Project CRUD Doll Inventory - Nadine

## 📌 Deskripsi
Project ini merupakan aplikasi manajemen inventori boneka berbasis **Laravel 12** yang mengimplementasikan fitur **CRUD** (Create, Read, Update, Delete). Aplikasi ini dirancang untuk memudahkan pendataan stok boneka, mulai dari penambahan koleksi hingga pemantauan data secara efisien.

---

## 🛠️ Teknologi yang Digunakan
* **Framework:** Laravel 12
* **Bahasa:** PHP 8.x
* **Database:** MySQL
* **Frontend:** Blade Templating (Laravel)

## ⚙️ Fitur Utama
* ✅ **Add Doll Data:** Menambahkan koleksi boneka baru ke dalam sistem.
* ✅ **Inventory List:** Menampilkan tabel lengkap koleksi boneka beserta detailnya.
* ✅ **Modify Information:** Mengubah detail boneka (seperti nama, kategori, atau harga).
* ✅ **Remove Data:** Menghapus data boneka dari daftar inventori.

---

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
│       └── 2026_04_22_000000_create_dolls_table.php
resources/
└── views/
    └── dolls/
        ├── index.blade.php
        ├── create.blade.php
        ├── edit.blade.php
        └── show.blade.php

🚀 Panduan Instalasi
Clone Repository

Bash
git clone [https://github.com/nadine-username/crud-boneka-nadine.git](https://github.com/nadine-username/crud-boneka-nadine.git)
cd crud-boneka-nadine
Install Dependencies

Bash
composer install
npm install && npm run dev
Environment Setup

Bash
cp .env.example .env
php artisan key:generate
Database Configuration
Buka file .env dan sesuaikan dengan database lokal kamu:

Cuplikan kode
DB_DATABASE=db_koleksi_nadine
DB_USERNAME=root
DB_PASSWORD=
Run Migration

Bash
php artisan migrate
Start Application

Bash
php artisan serve
Buka di browser: http://127.0.0.1:8000

📄 Lisensi
Project ini dibuat untuk tujuan akademik dan pengembangan skill pemrograman web.

👩‍💻 Author
Nama : Nadine [Isi Nama Lengkap]

NIM  : [Isi NIM Kamu]

Prodi: Sistem Informasi
        └── show.blade.php

