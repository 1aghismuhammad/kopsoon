# PROJECT CONTEXT - KOPSOON Laravel Website

## 1. Project Overview

KOPSOON adalah website landing page bisnis untuk produk **Kopi Santan Instan Khas Blora**. Website ini bertujuan menampilkan identitas brand, katalog produk, cara penyajian, promo, program reseller, kontak, dan jalur pemesanan.

Website dikembangkan sebagai landing page promosi yang hangat, modern, semi-premium, dan cocok untuk target audiens anak muda, mahasiswa, pecinta kopi lokal, serta calon reseller.

---

## 2. Current Development Focus

Tahap pengerjaan saat ini hanya berfokus pada bagian frontend website Laravel.

Fokus pengerjaan saat ini:
- Membuat dan merapikan tampilan landing page
- Menyusun halaman Blade
- Membuat struktur navigasi website
- Menerapkan styling visual sesuai referensi desain
- Mengintegrasikan asset gambar berbasis WebP dan SVG
- Membuat tampilan responsive
- Menyusun halaman berdasarkan rancangan konten dan desain
- Menjaga konsistensi warna, font, struktur halaman, navbar, footer, transisi, dan parallax

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

Jika ada form seperti order, kontak, atau pendaftaran reseller, cukup buat tampilan frontend-nya saja. Form boleh diarahkan ke placeholder link, WhatsApp, marketplace, atau `href="#"`. Jangan simpan data ke database dulu.

---

## 4. Tech Stack

Project menggunakan:
- Laravel 11
- Blade
- CSS manual di folder `public/css`
- JavaScript manual di folder `public/js`
- SQLite sebagai konfigurasi database bawaan project

Catatan:
- Fokus saat ini adalah Blade, styling, interaksi frontend, parallax, dan transisi halaman.
- Database belum digunakan dalam tahap frontend awal.
- Jangan mengubah konfigurasi `.env`.
- Jangan menambahkan dependency baru tanpa instruksi eksplisit.

---

## 5. Current Pages and Routes

Halaman yang saat ini tersedia:

1. Home: `/`
2. Product: `/product`
3. About KOPSOON: `/about`
4. Serving Method / Cara Penyajian: `/serving`
5. Reseller / Promo: `/reseller`
6. Contact: `/contact`

Route berada di:

```txt
routes/web.php
```

Route aktual:

```txt
route('home')      => /
route('product')   => /product
route('about')     => /about
route('serving')   => /serving
route('reseller')  => /reseller
route('contact')   => /contact
```

---

## 6. Current View Structure

Struktur Blade utama:

```txt
resources/views/pages/home.blade.php
resources/views/pages/product.blade.php
resources/views/pages/about.blade.php
resources/views/pages/serving.blade.php
resources/views/pages/reseller.blade.php
resources/views/pages/contact.blade.php
resources/views/components/navbar.blade.php
resources/views/components/footer.blade.php
resources/views/components/page-transition.blade.php
```

Catatan:
- `navbar.blade.php` digunakan sebagai komponen navigasi global.
- `footer.blade.php` digunakan sebagai komponen footer global.
- `page-transition.blade.php` digunakan untuk elemen transisi halaman.

---

## 7. Styling Structure

CSS global dan komponen umum:

```txt
public/css/style.css
public/css/navbar.css
public/css/footer.css
public/css/page-transition.css
public/css/kopsoon-text-palette.css
```

CSS halaman Home:

```txt
public/css/uvp.css
public/css/product-options.css
public/css/servings.css
public/css/promo-reseller.css
public/css/order-section.css
public/css/home-parallax.css
```

CSS halaman Product:

```txt
public/css/product-page.css
```

CSS halaman About:

```txt
public/css/about.css
public/css/about-hero.css
public/css/about-story.css
public/css/about-values.css
public/css/about-team.css
public/css/about-parallax.css
```

CSS halaman Serving:

```txt
public/css/serving-page.css
public/css/serving-hero.css
public/css/serving-methods.css
public/css/serving-hacks.css
public/css/serving-parallax.css
```

CSS halaman Reseller:

```txt
public/css/reseller-page.css
public/css/reseller-hero.css
public/css/reseller-deals.css
public/css/reseller-benefits.css
public/css/reseller-packages.css
public/css/reseller-join.css
public/css/reseller-parallax.css
```

CSS halaman Contact:

```txt
public/css/contact-page.css
public/css/contact-parallax.css
public/css/contact-marketplace-cards.css
```

Catatan penting:
- Jangan menaruh style navbar di CSS halaman seperti `about.css`, `serving-page.css`, `reseller-page.css`, `product-page.css`, atau `contact-page.css`.
- Navbar harus dikontrol dari `public/css/navbar.css` agar ukuran logo, menu, jarak, dan active state konsisten di semua halaman.
- Footer harus dikontrol dari `public/css/footer.css`.
- Efek transisi halaman harus dikontrol dari `public/css/page-transition.css` dan `public/js/page-transition.js`.
- Efek parallax halaman harus tetap dipisahkan pada file parallax masing-masing halaman.

---

## 8. JavaScript Structure

JavaScript frontend berada di:

```txt
public/js
```

File JavaScript yang digunakan:

```txt
public/js/page-transition.js
public/js/home-parallax.js
public/js/about-parallax.js
public/js/serving-parallax.js
public/js/reseller-parallax.js
public/js/contact-parallax.js
public/js/product-page.js
```

Catatan:
- Script transisi halaman dipakai lintas halaman.
- Script parallax dipisahkan sesuai halaman.
- Jangan menggabungkan semua JavaScript ke satu file besar kecuali ada instruksi refactor khusus.

---

## 9. Navigation

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
- Product menuju `route('product')`
- Serving Method menuju `route('serving')`
- Reseller menuju `route('reseller')`
- Contact menuju `route('contact')`

Active state navbar menggunakan `request()->routeIs(...)`.

---

## 10. Assets

Asset gambar utama berada di:

```txt
public/images
```

Asset gambar dan logo yang tersedia saat ini:

```txt
logo.webp
hero.webp
gambarkopi.webp
product-pack.webp
product-box.webp
product-drink.webp
serving-hot.webp
serving-ice.webp
kopi1.webp
kopi2.webp
kopi3.webp
kopi4.webp
kopi5.webp
aghis.webp
akmal.webp
khalid.webp
kiki.webp
nico.webp
shopee.svg
tokopedia.svg
tiktok.svg
```

Catatan penting asset:
- Gunakan `hero.webp`, bukan `Hero.webp` atau `Hero.png`.
- File PNG lama dan dummy marketplace lama sudah tidak menjadi acuan.
- Gunakan asset WebP untuk gambar utama agar ukuran project tetap ringan.
- Gunakan SVG marketplace yang tersedia untuk logo marketplace.

---

## 11. Current Frontend Features

Fitur frontend yang sudah ada:
- Halaman Home dengan hero, produk, serving highlight, reseller promo, dan order section.
- Halaman Product mandiri.
- Halaman About dengan story, values, dan team section.
- Halaman Serving Method.
- Halaman Reseller.
- Halaman Contact dengan marketplace cards.
- Navbar global responsive.
- Footer global.
- Page transition.
- Parallax per halaman.
- Asset utama menggunakan WebP dan SVG.

---

## 12. Known Boundaries

Batas pengerjaan saat ini:
- Jangan membuat sistem login.
- Jangan membuat admin panel.
- Jangan membuat CRUD produk.
- Jangan membuat penyimpanan form kontak atau reseller.
- Jangan mengubah database.
- Jangan menjalankan migration.
- Jangan mengubah struktur backend kecuali diminta eksplisit.
- Jangan menghapus file asset tanpa audit referensi terlebih dahulu.

---

## 13. Development Rule

Untuk update berikutnya:
- Tambahkan halaman baru melalui Blade page di `resources/views/pages`.
- Pisahkan CSS halaman baru ke beberapa file kecil di `public/css`.
- Tambahkan route secukupnya di `routes/web.php`.
- Update navbar hanya jika halaman baru perlu menjadi menu utama.
- Gunakan komponen navbar, footer, dan page transition yang sudah ada.
- Jaga konsistensi warna, font, spacing, dan struktur visual antar halaman.
- Jangan menyentuh database dan backend tanpa instruksi eksplisit.

---

## 14. Current Clean State Notes

Patch terakhir membersihkan mismatch path asset hero.

Status asset hero:

```txt
public/images/hero.webp
```

Semua referensi CSS harus memakai:

```css
url('../images/hero.webp')
```

Tidak boleh lagi memakai:

```css
url('../images/Hero.webp')
```
