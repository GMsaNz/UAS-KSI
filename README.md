# 📚 Aplikasi Pendaftaran Seminar Online

Aplikasi ini dikembangkan menggunakan Laravel 12 dan Filament v3 untuk memudahkan mahasiswa dalam melakukan pendaftaran seminar secara online. Terdapat dua role utama: **Admin** dan **User**.

---

## 🧰 Fitur Aplikasi

### 🔐 Autentikasi & Role:
- Registrasi dan login untuk mahasiswa (User)
- Role-based access control: Admin vs User

### 👩‍💻 Admin:
- Kelola daftar seminar (CRUD)
- Lihat daftar peserta seminar

### 👨‍🎓 User:
- Melihat daftar seminar yang tersedia
- Mendaftar ke seminar (1 user hanya 1 pendaftaran per seminar)

---

## 🛡️ Keamanan Sistem

Aplikasi ini dirancang dengan memperhatikan **tiga pilar utama keamanan informasi**:

### 🔒 Confidentiality
- Password dienkripsi dengan `bcrypt`
- CSRF token aktif di semua form
- Data sensitif seperti NIM dan email dibatasi aksesnya menggunakan kontrol role

### 📑 Integrity
- Validasi input menggunakan Laravel dan Filament
- Hindari SQL Injection dengan Eloquent ORM
- Cegah XSS dengan escaping otomatis pada view

### ⚙️ Availability
- Proteksi session menggunakan `secure`, `http_only`, dan `same_site`
- Session timeout diatur untuk menghindari penyalahgunaan
- Sistem dirancang untuk tetap responsif saat beban akses tinggi

---

## ⚠️ Potensi Kerentanan & Solusi

| Kerentanan                       | Solusi                                                                 |
|----------------------------------|------------------------------------------------------------------------|
| Session Cookie tanpa Secure flag| Aktifkan `SESSION_SECURE_COOKIE=true` dan gunakan HTTPS               |
| Akses admin tidak dibatasi       | Gunakan middleware dan role checking di setiap fitur admin            |
| XSS dan input tidak tervalidasi | Validasi setiap field, escape output                                 |
| Mass Assignment                 | Gunakan `$fillable` di model Laravel                                  |
| CSRF Attack                     | CSRF token Laravel sudah aktif secara default                         |

---

## 📦 Teknologi & Tools

- **Laravel 12** — Framework backend PHP
- **Filament v3** — Admin dashboard & CRUD panel otomatis
- **MySQL** — Basis data relasional
- **GitHub** — Version control
- **Vega Scanner** — Analisis kerentanan aplikasi web

---

## 🧪 Cara Menjalankan Aplikasi

```bash
git clone https://github.com/username/seminar-online.git
cd seminar-online

composer install
cp .env.example .env
php artisan key:generate

# Sesuaikan kredensial database di .env
php artisan migrate --seed

php artisan serve
```

---

## 👤 Developer

- Nama: **Wahyu Cahya Bagus Pamungkas**
- NIM: 20230801035
- Mata Kuliah: CIE406 – Keamanan Informasi
- Dosen Pengampu: Dr. Hani Dewi Ariessanti, S.Kom., M.Kom.

---

## 📃 Lisensi

Proyek ini dikembangkan sebagai tugas akademik dan tidak untuk tujuan komersial.