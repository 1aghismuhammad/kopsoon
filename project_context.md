# PROJECT CONTEXT - KOPSOON Laravel Website

## 1. Project Overview

KOPSOON adalah website landing page bisnis untuk produk **Kopi Santan Instan Khas Blora**. Website ini bertujuan untuk menampilkan identitas brand, katalog produk, cara penyajian, promo, program reseller, kontak, dan jalur pemesanan.

Website ini dikembangkan sebagai landing page promosi yang hangat, modern, semi-premium, dan cocok untuk target audiens anak muda, mahasiswa, pecinta kopi lokal, serta calon reseller.

---

## 2. Current Development Focus

Tahap pengerjaan saat ini hanya berfokus pada bagian frontend website Laravel.

Fokus pengerjaan saat ini:
- Membuat tampilan landing page
- Menyusun halaman Blade
- Membuat struktur navigasi website
- Menerapkan styling visual sesuai referensi desain
- Mengintegrasikan asset gambar
- Membuat tampilan responsive
- Menyusun halaman berdasarkan rancangan konten dan desain

Untuk saat ini, jangan mengerjakan backend, database, authentication, admin panel, fitur order aktif, atau penyimpanan form.

---

## 3. Database Rule

Project menggunakan **SQLite**, tetapi pada tahap pengerjaan saat ini database tidak boleh disentuh.

Jangan membuat, mengubah, menghapus, atau menjalankan:
- Migration
- Seeder
- Factory
- Model baru
- Query database
- Struktur tabel
- File `database/database.sqlite`

Jangan menyentuh folder atau file berikut kecuali diminta secara eksplisit:
- `database/migrations`
- `database/seeders`
- `database/factories`
- `database/database.sqlite`
- `app/Models`

Jika ada form seperti order, kontak, atau pendaftaran reseller, cukup buat tampilan frontend-nya saja. Form boleh diarahkan ke placeholder link, WhatsApp, atau `href="#"`. Jangan simpan data ke database dulu.

---

## 4. Tech Stack

Project menggunakan:
- Laravel
- Blade
- CSS 
- SQLite

Catatan:
- Fokus saat ini adalah Blade dan styling.
- Database belum digunakan dalam tahap frontend awal.
- Jangan mengubah konfigurasi `.env`.

---

## 5. Website Pages

Website memiliki halaman utama berikut:

1. Home
2. About KOPSOON
3. Produk
4. Cara Penyajian
5. Promo & Reseller
6. Kontak / Order

---

## 6. Navigation

Menu utama website:

- Home
- About KOPSOON
- Produk
- Cara Penyajian
- Promo & Reseller
- Kontak / Order

Navigasi harus dibuat di file:

```txt
resources/views/components/navbar.blade.php