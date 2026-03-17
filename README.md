<p align="center">
    <a href="https://laravel.com" target="_blank">
        <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
    </a>
</p>

# 🏢 Aplikasi Manajemen Pegawai

Aplikasi berbasis web untuk mengelola data pegawai secara efisien. Proyek ini dibangun menggunakan **Laravel 11**, **Tailwind CSS**, dan berbagai library modern untuk memberikan pengalaman pengguna yang maksimal.

## 🚀 Fitur Utama

- **CRUD Pegawai**: Kelola data (Create, Read, Update, Delete) dengan antarmuka yang bersih.
- **Smart DataTables**: Pencarian dan pagination yang tetap stabil di perangkat mobile.
- **Advanced Filtering**: Filter data berdasarkan rentang tanggal masuk yang responsif.
- **Modern File Upload**: Integrasi **Dropzone.js** untuk unggah foto pegawai yang interaktif.
- **UX/UI Modern
- **Mobile Friendly**: Tabel didesain dengan fitur *horizontal scroll* agar tetap rapi di layar HP tanpa mengganggu navigasi pencarian.

---

## 🛠️ Panduan Instalasi

Ikuti langkah-langkah di bawah ini untuk menjalankan proyek di lingkungan lokal Anda:

### 1. Persyaratan Sistem
Pastikan perangkat Anda telah terpasang:
- **PHP** >= 8.2
- **Composer**
- **Node.js & NPM**
- **MySQL** atau MariaDB

### 2. Kloning Repository
```bash
git clone https://github.com/bayuweda/pegawai.git
cd pegawai
3. Instalasi Dependensi
Instal semua paket PHP melalui Composer dan library JavaScript melalui NPM:

Bash
composer install
npm install
4. Konfigurasi Database
Salin file konfigurasi environment dari contoh yang ada:

Bash
cp .env.example .env
Buka file .env menggunakan text editor (seperti VS Code) dan sesuaikan detail database Anda:

Cuplikan kode
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nama_database_anda
DB_USERNAME=root
DB_PASSWORD=
Pastikan Anda sudah membuat database kosong di phpMyAdmin atau aplikasi database lainnya.

5. Generate Application Key
Jalankan perintah ini untuk mengamankan sesi aplikasi:

Bash
php artisan key:generate
6. Migrasi & Data Dummy (Sangat Disarankan)
Aplikasi ini sudah dilengkapi dengan Seeder untuk mempermudah pengujian. Cukup jalankan satu perintah ini untuk membuat tabel sekaligus mengisi data pegawai secara otomatis:

Bash
php artisan migrate --seed
Info: Dengan menambahkan flag --seed, database Anda akan langsung terisi dengan data dummy (Manager, Staff, dll) sehingga fitur pencarian dan filter bisa langsung dicoba.

7. Link Storage
Agar foto pegawai yang diunggah bisa muncul di browser, buat link ke folder storage:

Bash
php artisan storage:link
8. Menjalankan Aplikasi
Anda perlu menjalankan dua perintah ini di dua terminal yang berbeda:

Terminal 1 (Server PHP):

Bash
php artisan serve
Terminal 2 (Compiler Asset/Vite):

Bash
npm run dev
Akses aplikasi melalui browser di alamat: http://127.0.0.1:8000

📁 Library & Stack yang Digunakan
Backend: Laravel 11

Frontend: Tailwind CSS

Tables: DataTables.net

Pickers: DateRangePicker

Uploads: Dropzone.js



📝 Lisensi
Proyek ini bersifat open-source di bawah lisensi MIT license.

Dibuat dengan ❤️ oleh Bayu Weda
