# Portfolio Backend (Laravel API)

REST API backend untuk website portfolio pribadi. Menyediakan data project, about, sertifikat, serta sistem autentikasi admin (login OTP + JWT) dan pengelolaan pesan dari contact form.

Repo frontend (Vue): [portfolio-frontend](https://github.com/Abrahamazka/portfolio-frontend)

---

##  Tech Stack

- **Laravel** — REST API
- **JWT (tymon/jwt-auth)** — autentikasi admin panel
- **MySQL** — database
- **Cloudinary** — penyimpanan gambar (project, sertifikat)
- **Resend / Brevo** — pengiriman email OTP (production)

##  Fitur

- API publik untuk data Projects, About, Education Timeline, Certificates
- Contact form (pesan masuk ke admin panel, bukan email)
- Login admin dengan OTP via email + token JWT
- CRUD admin untuk Projects, About, Education, Certificates
- Konten mendukung 2 bahasa (Indonesia & English)

##  Struktur Tabel Utama

| Tabel | Keterangan |
|---|---|
| `projects` | Data project portfolio (judul & deskripsi dalam ID/EN) |
| `about` / `profile` | Bio singkat pemilik portfolio |
| `education_timeline` | Riwayat pendidikan |
| `certificates` | Sertifikat/pencapaian |
| `admin` / `users` | Akun admin |
| `otp_codes` | Kode OTP untuk login |
| `messages` | Pesan dari contact form |

##  Cara Menjalankan di Lokal

1. Clone repository ini
   ```bash
   git clone https://github.com/USERNAME/portfolio-backend.git
   cd portfolio-backend
   ```

2. Install dependencies
   ```bash
   composer install
   ```

3. Copy file environment dan sesuaikan isinya
   ```bash
   cp .env.example .env
   ```
   Isi konfigurasi database, mail (SMTP), dan Cloudinary di file `.env`.

4. Generate application key & JWT secret
   ```bash
   php artisan key:generate
   php artisan jwt:secret
   ```

5. Jalankan migration
   ```bash
   php artisan migrate
   ```

6. Jalankan server lokal
   ```bash
   php artisan serve
   ```

##  Endpoint API

> Akan dilengkapi setelah endpoint selesai dibangun.

| Method | Endpoint | Keterangan | Akses |
|---|---|---|---|
| GET | `/api/projects` | List semua project | Publik |
| GET | `/api/projects/{id}` | Detail project | Publik |
| GET | `/api/about` | Data about, timeline, sertifikat | Publik |
| POST | `/api/contact` | Kirim pesan contact form | Publik |
| POST | `/api/auth/send-otp` | Kirim kode OTP ke email admin | Publik |
| POST | `/api/auth/verify-otp` | Verifikasi OTP, return token JWT | Publik |
| CRUD | `/api/admin/projects` | Kelola data project | Admin (JWT) |
| CRUD | `/api/admin/about` | Kelola data about/education/certificates | Admin (JWT) |
| GET/PATCH | `/api/admin/messages` | Kelola pesan masuk | Admin (JWT) |

##  Live API

> Akan diisi setelah deploy ke Railway.

##  Author

Dibuat oleh siswa Abraham azka rizky putra hardianto, sebagai project portfolio pribadi.
