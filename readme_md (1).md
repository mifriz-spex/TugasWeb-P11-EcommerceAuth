# Tugas Rutin 11 — E-Commerce Auth & Tinker Laravel

Proyek ini dibuat untuk memenuhi tugas mata kuliah Pemrograman Web. Proyek ini mengimplementasikan sistem Autentikasi (Auth) dan pengujian model/database menggunakan Laravel Tinker pada studi kasus E-Commerce.

## 🛠️ Langkah Instalasi & Menjalankan Proyek

1. **Clone Repository**
   ```bash
   git clone https://github.com/username/TugasWeb-P11-EcommerceAuth.git
   cd TugasWeb-P11-EcommerceAuth
   ```

2. **Install Dependency Composer & NPM**
   ```bash
   composer install
   npm install
   npm run build
   ```

3. **Konfigurasi File Environment (.env)**
   Salin file `.env.example` menjadi `.env`:
   ```bash
   cp .env.example .env
   ```
   Atur koneksi database pada file `.env`:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=db_tugas_p11
   DB_USERNAME=root
   DB_PASSWORD=
   ```

4. **Generate Application Key, Migrate & Seed**
   ```bash
   php artisan key:generate
   php artisan migrate --seed
   ```

5. **Jalankan Development Server**
   ```bash
   php artisan serve
   ```
   Buka URL `http://127.0.0.1:8000` di browser.

---

## 📸 Hasil Screenshot (SS)

Berikut adalah dokumentasi hasil dari pengerjaan tugas ini, dibagi menjadi dua bagian:

### Bagian A: Pengujian Laravel Tinker
*(Kumpulan screenshot saat melakukan pengujian manipulasi data model menggunakan command line Laravel Tinker)*

**1. Screenshot Tinker 1**
![Tinker 1](screenshoot%20tugas/tinker/Screenshot%20(186).png)

**2. Screenshot Tinker 2**
![Tinker 2](screenshoot%20tugas/tinker/Screenshot%20(187).png)

**3. Screenshot Tinker 3**
![Tinker 3](screenshoot%20tugas/tinker/Screenshot%20(188).png)

**4. Screenshot Tinker 4**
![Tinker 4](screenshoot%20tugas/tinker/Screenshot%20(189).png)

### Bagian B: Tampilan Web (Auth, User & Admin)
*(Kumpulan screenshot antarmuka web, termasuk fitur login/register, halaman user, dan dashboard admin)*

**1. Tampilan Halaman 1**
![Web Tampilan 1](screenshoot%20tugas/tampilan%20user%20&%20admin/Screenshot%20(183).png)

**2. Tampilan Halaman 2**
![Web Tampilan 2](screenshoot%20tugas/tampilan%20user%20&%20admin/Screenshot%20(184).png)

**3. Tampilan Halaman 3**
![Web Tampilan 3](screenshoot%20tugas/tampilan%20user%20&%20admin/Screenshot%20(185).png)

---

## 📂 Struktur Direktori Penting

- **`app/Models/`**: Berisi sekumpulan Model Eloquent (User, Product, Category, Order, Post, Review).
- **`app/Http/Controllers/Auth/`**: Logic untuk menangani autentikasi.
- **`database/migrations/`**: Skema tabel database untuk sistem E-Commerce.
- **`resources/views/`**: File antarmuka blade, termasuk folder `auth/` untuk UI login dan register.
- **`routes/web.php` & `routes/auth.php`**: Routing utama dan routing khusus autentikasi.
- **`screenshoot tugas/`**: Folder dokumentasi tangkapan layar tugas.