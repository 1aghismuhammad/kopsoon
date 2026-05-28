# PROJECT CONTEXT - KOPSOON Laravel Website

## 1. Project Overview

KOPSOON adalah website landing page bisnis untuk produk **Kopi Santan Instan Khas Blora**. Website ini bertujuan menampilkan identitas brand, katalog produk, cara penyajian, promo, program reseller, kontak, dan jalur pemesanan.

Website dikembangkan sebagai landing page promosi yang hangat, modern, semi-premium, dan cocok untuk target audiens anak muda, mahasiswa, pecinta kopi lokal, serta calon reseller.

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

## 5. Current Pages and Routes

Halaman yang saat ini tersedia:

1. Home: `/`
2. About KOPSOON: `/about`
3. Serving Method / Cara Penyajian: `/serving`
4. Reseller / Promo: `/reseller`

Route berada di:

```txt
routes/web.php
```

---

## 6. Current View Structure

Struktur Blade utama:

```txt
resources/views/pages/home.blade.php
resources/views/pages/about.blade.php
resources/views/pages/serving.blade.php
resources/views/pages/reseller.blade.php
resources/views/components/navbar.blade.php
resources/views/components/footer.blade.php
```

---

## 7. Styling Structure

CSS global dan komponen umum:

```txt
public/css/style.css
public/css/navbar.css
public/css/footer.css
```

CSS halaman About:

```txt
public/css/about.css
public/css/about-hero.css
public/css/about-story.css
public/css/about-values.css
public/css/about-team.css
```

CSS halaman Serving:

```txt
public/css/serving-page.css
public/css/serving-hero.css
public/css/serving-methods.css
public/css/serving-hacks.css
```

CSS halaman Reseller:

```txt
public/css/reseller-page.css
public/css/reseller-hero.css
public/css/reseller-deals.css
public/css/reseller-benefits.css
public/css/reseller-packages.css
public/css/reseller-join.css
```

Catatan penting:
- Jangan menaruh style navbar di CSS halaman seperti `about.css`, `serving-page.css`, atau `reseller-page.css`.
- Navbar harus dikontrol dari `public/css/navbar.css` agar ukuran logo, menu, jarak, dan active state konsisten di semua halaman.
- Footer harus dikontrol dari `public/css/footer.css`.

---

## 8. Navigation

Menu utama website:
- Home
- About
- Product
- Serving Method
- Reseller
- Contact

Navigasi dibuat di:

```txt
resources/views/components/navbar.blade.php
```

Arah navigasi saat ini:
- Home menuju `route('home')`
- About menuju `route('about')`
- Product menuju `route('home') . '#produk'`
- Serving Method menuju `route('serving')`
- Reseller menuju `route('reseller')`
- Contact menuju `route('home') . '#contact'`

---

## 9. Assets

Asset gambar utama berada di:

```txt
public/images
```

Gambar yang sudah digunakan:
- `logo.webp`
- `Hero.webp`
- `gambarkopi.webp`
- `product-pack.webp`
- `product-box.webp`
- `product-drink.webp`
- `serving-hot.webp`
- `serving-ice.webp`

---

## 10. Development Rule

Untuk update berikutnya:
- Tambahkan halaman baru melalui Blade page di `resources/views/pages`.
- Pisahkan CSS halaman baru ke beberapa file kecil di `public/css`.
- Tambahkan route secukupnya di `routes/web.php`.
- Update navbar hanya jika halaman baru perlu menjadi menu utama.
- Jangan menyentuh database dan backend tanpa instruksi eksplisit.
