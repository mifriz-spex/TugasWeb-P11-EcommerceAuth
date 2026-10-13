# Tugas Rutin 11 - E-Commerce DB + Secure Auth

Proyek ini adalah tugas mata kuliah pemrograman web yang berfokus pada perancangan Database E-Commerce, Eloquent ORM, serta implementasi Keamanan dan Autentikasi menggunakan Laravel 13.

## 📌 Bukti Pengerjaan Tugas

Di bawah ini adalah screenshot bukti pengerjaan atau screenshot soal yang direferensikan.
*(Pastikan file `IMG_20261008_103539.jpg` ditaruh di folder yang sama dengan file `README.md` ini supaya gambarnya muncul)*

## 🚀 Fitur Utama

**Bagian A - Database & Eloquent**

* **Migrasi Database:** Terdiri dari 7 tabel saling berelasi (`users`, `categories`, `products`, `orders`, `order_items`, `reviews`, `posts`) lengkap dengan *Foreign Key Constraints*.

* **Eloquent Relationships:** Relasi One-to-Many dan Belongs-To antar model.

* **Local Scope:** Implementasi `scopeLowStock` pada model `Product` untuk memfilter stok yang menipis (< 10).

* **Factory & Seeder:** Men-generate 50+ data produk realistis, kategori, dan 3 akun dengan role berbeda secara otomatis.

**Bagian B - Auth & Security**

* **Authentication:** Menggunakan **Laravel Breeze** (Login, Register, Logout).

* **Role Management:** Multi-role user (Admin, Editor, User Biasa) yang diatur di tingkat database.

* **Custom Middleware:** Proteksi rute khusus menggunakan middleware `role` (contoh: `/admin/dashboard` dan `/editor/dashboard`).

* **Authorization:** Menggunakan `PostPolicy` untuk membatasi aksi edit/delete postingan hanya untuk pemilik asli postingan dan Admin.

## 🛠️ Persyaratan Sistem

* PHP 8.2 atau lebih baru

* Composer

* Node.js (Minimal v20) & NPM

* SQLite (Default) / MySQL

## ⚙️ Cara Instalasi & Menjalankan Proyek

1. **Clone atau Buka terminal** dan arahkan ke direktori proyek ini.

2. **Install dependensi PHP dan Node.js:**

   ```
   composer install
   npm install
   
   ```

3. **Konfigurasi Environment:**
   Copy file `.env.example` menjadi `.env` (Jika belum ada).

   ```
   cp .env.example .env
   php artisan key:generate
   
   ```

   *Jika menggunakan MySQL, sesuaikan pengaturan DB di file `.env`.*

4. **Migrasi dan Seeding Database:**
   Perintah ini akan membuat tabel dan mengisi data awal (termasuk 50 produk, 5 kategori, dan 3 akun user role).

   ```
   php artisan migrate:fresh --seed
   
   ```

5. **Build Asset Frontend (Tailwind & Vite):**

   ```
   npm run build
   
   ```

6. **Jalankan Server Lokal:**

   ```
   php artisan serve
   
   ```

   Akses aplikasi di browser melalui: `http://localhost:8000`

## 🔑 Akun Testing (Hasil Seeder)

Gunakan akun berikut untuk menguji *Role Management* dan *Middleware*:

| Role | Email | Password | Hak Akses | 
| ----- | ----- | ----- | ----- | 
| **Admin** | `admin@tes.com` | `password` | Bebas akses ke rute admin dan bebas by-pass `PostPolicy` | 
| **Editor** | `editor@tes.com` | `password` | Akses ke rute khusus Editor | 
| **User** | `user@tes.com` | `password` | Hanya akses halaman publik / rute khusus user | 

## 🧪 Testing Rute (Mode Incognito)

Untuk menguji keamanan rute (Route Protection), Anda bisa mencoba langkah berikut:

1. Buka browser dalam mode **Incognito / Private**.

2. Login menggunakan akun **User** (`user@tes.com`).

3. Coba akses URL `http://localhost:8000/admin/dashboard` secara manual di *address bar*.

4. Anda akan mendapatkan pesan error **403 Forbidden** (Sesuai dengan ekspektasi tugas).

5. Logout dari akun User.

6. Login kembali menggunakan akun **Admin** (`admin@tes.com`).

7. Akses kembali URL `http://localhost:8000/admin/dashboard`, dan halaman akan berhasil dimuat dengan sukses.

