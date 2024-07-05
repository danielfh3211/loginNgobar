# LOGIN PAGE DAN TODO LIST LARAVEL 11

## Deskripsi Singkat
Tutor singkat membuat login page dengan template dan todo list sederhana.

## Persyaratan
Sebelum menginstal dan menjalankan proyek ini, pastikan Anda telah menginstal persyaratan berikut:
- [Git](https://git-scm.com/downloads)
- [Composer](https://getcomposer.org/download/)
- [XAMPP PHP Version >=8.2++](https://www.apachefriends.org/download.html)
- [Node.js dan NPM](https://nodejs.org/en)

## Langkah-langkah untuk membuat Login page 
Berikut adalah langkah-langkah untuk mengkloning repository dan menginstal dependensi:

### Install Laravel atau Kloning Repository 
```bash
composer create-project laravel/laravel nama projek
git clone https://github.com/username/nama-proyek.git
cd nama-proyek
composer install
```

### Instal Dependensi NPM (Opsional)
Jika proyek menggunakan Laravel Vite untuk mengelola aset frontend, instal dependensi NPM:
```bash
npm install
```
Kemudian jalankan npm yang sudah kita install dengan perintah berikut 
```npm run dev
npm run build
```

### Salin File Environment (Jika melakukan Clone)
Salin file `.env.example` menjadi `.env`:
```bash
cp .env.example .env
```

### Generate Application Key (Jika melakukan clone)
Generate application key:
```bash
php artisan key:generate
```

### Konfigurasi Environment
Buka file `.env` dan sesuaikan konfigurasi sesuai kebutuhan Anda, seperti pengaturan database:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nama_database
DB_USERNAME=username
DB_PASSWORD=
```

### Menginstall template tampilan login
```
composer require laravel/breeze --dev
php artisan breeze:install
npm install && npm run dev
```

### Migrasi Database
Jalankan migrasi untuk membuat tabel di database:
```bash
php artisan migrate
```

## Menjalankan Aplikasi
Untuk menjalankan aplikasi Laravel, gunakan perintah artisan:
```bash
php artisan serve
```


