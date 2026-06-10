```
# Aplikasi Manajemen Tugas Karyawan (UAS_078)

Aplikasi berbasis web untuk mengelola penugasan karyawan, dilengkapi dengan sistem autentikasi multi-role (Admin & Karyawan), dashboard statistik, serta fitur ekspor laporan.

---

## 🚀 Fitur Utama
* **Autentikasi Multi-Role:** Hak akses terpisah antara Admin dan Karyawan.
* **Dashboard Statistik:** Menampilkan total user, admin, karyawan, serta status penugasan secara *real-time*.
* **Manajemen User (CRUD):** Pengelolaan data pengguna beserta jabatannya.
* **Manajemen Tugas (CRUD):** Pembagian tugas ke karyawan yang otomatis mengubah status ketersediaan karyawan (`is_tugas`).
* **Ekspor Laporan:** Fitur cetak data ke format **Excel** (`maatwebsite/excel`) dan **PDF** (`barryvdh/laravel-dompdf`).

---

## 🛠️ Spesifikasi Proyek
* **Framework:** Laravel
* **Database:** MySQL
* **Library Utama:**
    * `maatwebsite/excel`
    * `barryvdh/laravel-dompdf`

---

## 📦 Langkah Instalasi

### 1. Clone Proyek & Masuk ke Folder
```bash
git clone <url-repositori-kamu>
cd UAS_078
```

### 2. Install Dependencies

**Bash**

```
composer install
```

*(Jika ekstensi zip di lokal bermasalah, gunakan perintah yang sebelumnya: `composer require "maatwebsite/excel:^3.1" --ignore-platform-req=ext-zip`)*

### 3. Konfigurasi Environment (.env)

Copy file `.env.example` menjadi `.env`:

**Bash**

```
cp .env.example .env
```

Buka file `.env` dan sesuaikan nama database Anda:

**Cuplikan kode**

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=
```

### 4. Generate Key & Migrasi Database

**Bash**

```
php artisan key:generate
php artisan migrate --seed
```

### 5. Jalankan Aplikasi

Jika menggunakan Laragon, buka `uas_078.test` di browser. Jika menggunakan server bawaan Laravel, jalankan:

**Bash**

```
php artisan serve
```

Akses melalui `http://127.0.0.1:8000`.
