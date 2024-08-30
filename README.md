# TesAlita
# Sistem Manajemen Karyawan

Ini adalah Sistem Manajemen Karyawan yang dibangun menggunakan Laravel. Sistem ini memungkinkan pengguna untuk mengelola data karyawan, termasuk menambah, mengedit, menghapus, dan memfilter karyawan berdasarkan usia dan lokasi. Sistem ini juga menyediakan dashboard dengan fitur pencarian dan filter.

## Daftar Isi

- [Fitur](#fitur)
- [Struktur Aplikasi](#struktur-aplikasi)
- [Instalasi](#instalasi)


## Fitur

- Menambah, Mengedit, Menghapus, dan Melihat Karyawan
- Menambah, Mengedit, Menghapus, dan Melihat Lokasi
- Memfilter karyawan berdasarkan usia dan lokasi di dashboard
  
### Folder Utama:
- **app/Models/**: Berisi model Eloquent untuk `Employee` dan `Location`.
- **app/Http/Controllers/**: Berisi controller yang mengatur logika untuk setiap resource.
- **resources/views/**: Berisi template Blade untuk UI.
- **public/css/**: CSS kustom untuk styling tambahan.
- **routes/web.php**: Mendefinisikan rute web untuk aplikasi.

## Instalasi
Untuk menjalankan program ini pastikan anda telah menginstal composer, xampp.
- aktifkan Apache dan MySql di XAMPP.
- perbarui file .env
- buka terminal diproject tersebut
- jalankan 'php artisan key:generate'
- lalu jalankan 'php artisan migrate' untuk migrasi database
- jalankan aplikasi dengan 'php artisan migrate'
- setelah aplikasi berjalan dapat mengakses dashboard di 'http://localhost:8000/dashboard'.
