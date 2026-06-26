# Fitur-Fitur Website Berita "Metro Tangerang"

Dokumen ini berisi rencana fitur-fitur yang akan diimplementasikan pada website berita **Metro Tangerang**. Website ini dirancang sebagai portal berita lokal yang modern, cepat, responsif, dan mudah digunakan baik oleh pembaca maupun redaksi (editor/jurnalis).

---

## 1. Halaman Publik (Frontend / Reader Portal)

Halaman yang dapat diakses oleh pengunjung umum untuk membaca berita.

### A. Halaman Beranda (Homepage)
*   **Breaking News Ticker**: Baris teks berjalan di bagian atas untuk berita terkini/mendesak.
*   **Hero / Headline Section**: Area utama untuk menampilkan berita utama terpopuler atau pilihan redaksi dengan visual yang menarik.
*   **Berita Terbaru & Terpopuler**: Daftar berita yang diurutkan berdasarkan waktu rilis dan jumlah pembaca (view count).
*   **Kategori Utama (Section Grid)**: Pembagian berita berdasarkan kategori di homepage (contoh: *Metro, Politik, Ekonomi, Olahraga, Komunitas, Lifestyle*).
*   **Widget Interaktif**:
    *   Informasi Cuaca Kota Tangerang & sekitarnya.
    *   Jadwal Sholat daerah Tangerang.
    *   Kolom Polling opini pembaca.
*   **Ruang Iklan (Ad Spaces)**: Slot iklan banner yang tertata rapi tanpa mengganggu kenyamanan membaca.

### B. Halaman Detail Berita (Article Page)
*   **Konten Berita Terformat**: Dukungan teks kaya (Rich Text), gambar/galeri, kutipan (quotes), dan sematan video (embed YouTube/Instagram/TikTok).
*   **Sistem Komentar**: Kolom komentar bagi pembaca (bisa berbasis akun lokal atau integrasi Disqus/Facebook Comments).
*   **Share Buttons**: Tombol bagikan ke media sosial (WhatsApp, Facebook, X/Twitter, Telegram, Copy Link).
*   **Rekomendasi Berita Terkait**: Menampilkan berita sejenis berdasarkan kesamaan kategori atau tag di bagian bawah artikel.
*   **Fitur "Baca Juga" (In-Article Recommendation)**: Sisipan link berita terkait di tengah-tengah paragraf untuk meningkatkan *bounce rate*.
*   **Estimasi Waktu Membaca**: Penunjuk waktu (misalnya: "Waktu baca: 3 menit").
*   **Ruang Iklan (Ad Spaces)**: Slot iklan banner yang tertata rapi tanpa mengganggu kenyamanan membaca.

### C. Navigasi & Pencarian
*   **Pencarian Berita (Search Engine)**: Pencarian berita berdasarkan kata kunci dengan filter tanggal atau kategori.
*   **Menu Kategori**: Menu navigasi yang dinamis sesuai dengan kategori aktif.
*   **Mode Gelap / Terang (Dark/Light Mode)**: Pengalihan tema tampilan sesuai kenyamanan mata pembaca.
*   **Desain Responsif**: Optimasi penuh untuk perangkat Mobile (Smartphone), Tablet, dan Desktop.

---

## 2. Panel Admin / Ruang Redaksi (CMS - Content Management System)

Panel khusus untuk manajemen konten oleh Admin, Editor, dan Jurnalis.

### A. Autentikasi & Manajemen Pengguna (Role-based Access Control)
*   **Multi-Role**:
    *   **Super Admin**: Akses penuh ke sistem, konfigurasi web, iklan, dan manajemen pengguna.
    *   **Editor**: Mengedit, menyetujui (publish), atau menolak draf berita dari jurnalis/penulis.
    *   **Jurnalis/Writer**: Membuat draf berita dan mengunggah gambar pendukung (hanya bisa mengirim untuk ditinjau editor, tidak langsung terbit).
*   **Profil Pengguna**: Pengaturan profil penulis termasuk foto, bio singkat, dan media sosial untuk ditampilkan di halaman artikel.

### B. Manajemen Berita (Post Management)
*   **Rich Text Editor (WYSIWYG/Block Editor)**: Editor tulisan yang mudah digunakan untuk memformat teks, menyisipkan gambar, dan embed media.
*   **Manajemen Kategori & Tag**: Menambah, mengedit, dan menghapus kategori serta tag untuk pengorganisasian berita.
*   **Status Berita**: Draft, Pending Review (Menunggu Persetujuan), Published (Terbit), dan Archived.
*   **Penjadwalan Rilis (Scheduled Publishing)**: Fitur untuk menerbitkan berita secara otomatis pada waktu tertentu yang telah ditentukan.
*   **Fitur Pilihan (Featured Post Toggle)**: Menandai berita tertentu untuk masuk ke bagian headline atau berita utama.

### C. Manajemen Media (Media Library)
*   **Penyimpanan Gambar/Video**: Galeri media terpusat untuk berkas yang telah diunggah agar bisa digunakan kembali.
*   **Kompresi Gambar Otomatis**: Memperkecil ukuran file gambar saat upload demi performa loading website yang lebih cepat.

### D. Manajemen Komentar & Iklan
*   **Moderasi Komentar**: Halaman untuk menyetujui, menghapus, atau menandai komentar sebagai spam.
*   **Pengatur Iklan (Ad Manager)**: Manajemen penempatan kode iklan/script (seperti Google AdSense atau banner lokal) pada slot yang disediakan.

---

## 3. Fitur Teknis & Optimasi (SEO & Performance)

*   **Ramah SEO (SEO Friendly)**:
    *   URL berita yang ramah mesin pencari (Sitemap / URL slugs otomatis berbasis judul).
    *   Meta tags dinamis (Open Graph dan Twitter Card) agar tampilan sebaran berita di media sosial terlihat menarik.
    *   Dukungan schema markup (Article, Breadcrumbs) untuk optimasi di Google Search.
*   **Keamanan Website**:
    *   Proteksi dari SQL Injection, CSRF, dan XSS.
    *   Pembatasan login (Rate limiting) untuk menghindari brute force attack.
    *   *Opsi*: Fitur penonaktifan klik kanan & inspect element bagi halaman tertentu jika diperlukan keamanan ekstra.
*   **Kecepatan & Performa**:
    *   Sistem caching untuk mempercepat waktu pemuatan halaman berita yang sering diakses.
    *   Lazy Loading untuk gambar agar gambar dimuat hanya saat digulir (scroll) oleh pengguna.
