<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

🚀 Cara Menjalankan Project
Clone Repository

Bash
git clone [https://github.com/username-kamu/tugas-crud-boneka-nadine.git](https://github.com/username-kamu/tugas-crud-boneka-nadine.git)
cd tugas-crud-boneka-nadine
Install Dependency

Bash
composer install
Konfigurasi Environment

Bash
cp .env.example .env
php artisan key:generate
Setup Database

Buat database baru di MySQL dengan nama db_boneka.

Sesuaikan file .env:

Cuplikan kode
DB_DATABASE=db_boneka
DB_USERNAME=root
DB_PASSWORD=
Migrasi Database

Bash
php artisan migrate
Jalankan Server

Bash
php artisan serve
Akses aplikasi di: http://127.0.0.1:8000

👨‍💻 Author
Nama : Nadine

NIM  : [Isi NIM Kamu]

Prodi: Sistem Informasi

TERIMA KASIH - SALAM SISTEM INFORMASI
