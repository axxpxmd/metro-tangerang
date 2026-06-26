# Panduan Gaya UI (UI Style Guide) - Metro Tangerang

Dokumen ini berisi panduan gaya UI (User Interface) dan desain sistem yang disesuaikan untuk pengembangan website berita **Metro Tangerang** menggunakan **Tailwind CSS**. Desain ini mengadopsi estetika **"Minimalist Editorial & High-Contrast Light Mode"** dengan latar belakang putih bersih, aksen hitam-putih tegas, tanpa menggunakan gradasi maupun shadow.

---

## 1. Konsep & Estetika Desain

Desain ini menggunakan konsep **"Print-Inspired Modern Editorial"** (Single Theme - Hanya Latar Belakang Putih).

### Prinsip Utama:
1.  **Pure White Foundation**: Latar belakang utama menggunakan putih bersih (`#ffffff`) untuk memberikan kesan halaman koran digital yang bersih, lapang, dan profesional.
2.  **High-Contrast Typography**: Teks berwarna hitam pekat (`#000000`) untuk judul berita utama, memberikan kontras keterbacaan yang sangat tajam dan tegas.
3.  **No Gradients**: Warna diatur menggunakan warna solid tegas (hitam, putih, dan abu-abu neutral) tanpa efek gradasi warna.
4.  **No Shadows**: Semua elemen didesain datar (*flat design*) tanpa menggunakan bayangan (*shadowless*). Struktur tata letak dipisahkan menggunakan garis pembatas tipis yang konsisten (`border-neutral-200`).
5.  **Fine Lines & Grid Borders**: Menggunakan garis pembatas tipis dan tegas untuk menyusun layout berita dan kartu agar terlihat sangat rapi dan tertata dengan baik.

---

## 2. Palet Warna (Tailwind CSS Config)

Aplikasi ini menggunakan tema terang tunggal (statis latar belakang putih).

| Nama Elemen | Kode Hex | Tailwind Class | Penggunaan |
| :--- | :--- | :--- | :--- |
| **Main Background** | `#ffffff` | `bg-white` | Latar belakang halaman utama & dasar website |
| **Card / Section BG**| `#f9f9f9` | `bg-neutral-50` | Latar belakang kartu berita & sidebar widget |
| **Text Primary** | `#000000` | `text-black` | Judul berita, headline, dan teks konten utama |
| **Text Secondary** | `#525252` | `text-neutral-600` | Deskripsi berita singkat, waktu baca, metadata |
| **Borders** | `#e5e5e5` | `border-neutral-200` | Garis pembatas grid, separator, border kartu |
| **Accent Solid** | `#000000` | `bg-black` / `text-white` | Lencana berita utama, tombol aksi utama |

---

## 3. Tipografi (Fonts & Sizes)

Kombinasi font premium yang memadukan font sans-serif geometris modern dengan monospaced untuk elemen teknis/meta.
1.  **UI & Judul Utama**: `Plus Jakarta Sans` atau `Inter` (Sans-serif - tebal, tajam, dengan tracking rapat).
2.  **Isi Berita (Body Copy)**: `Lora` atau `Merriweather` (Serif - memberikan kenyamanan maksimal layaknya membaca koran fisik).
3.  **Meta & Kategori**: `JetBrains Mono` (Monospace - memberikan kesan presisi).

### Skala Tipografi Tailwind:
*   **Headline Utama**: `text-4xl md:text-6xl font-black tracking-tighter text-black leading-none`
*   **Judul Berita (List/Card)**: `text-xl font-bold tracking-tight text-black group-hover:text-neutral-700 transition-colors`
*   **Isi Artikel**: `font-serif text-lg leading-relaxed text-neutral-800`
*   **Tag Kategori**: `font-mono text-xs font-semibold tracking-widest uppercase text-black`
*   **Meta Info (Author/Date)**: `font-mono text-[10px] text-neutral-500 uppercase`

---

## 4. Komponen UI Utama (Implementasi Tailwind)

### A. Navigation Bar (Header) - Flat Clean Sticky
Navigasi putih bersih tanpa shadow, dibatasi garis tipis di bagian bawah.
```html
<header class="sticky top-0 z-50 bg-white/90 backdrop-blur-md border-b border-neutral-200">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-16 flex items-center justify-between">
    <!-- Logo -->
    <a href="#" class="text-xl font-black tracking-tighter text-black flex items-center gap-2">
      METRO<span class="text-neutral-500">TANGERANG</span>
    </a>
    <!-- Menu -->
    <nav class="hidden md:flex space-x-8 font-mono text-xs tracking-wider uppercase text-neutral-600">
      <a href="#" class="hover:text-black transition-colors duration-200">Metro</a>
      <a href="#" class="hover:text-black transition-colors duration-200">Politik</a>
      <a href="#" class="hover:text-black transition-colors duration-200">Ekonomi</a>
      <a href="#" class="hover:text-black transition-colors duration-200">Olahraga</a>
    </nav>
    <!-- Action Button (Live Stream / Watch) -->
    <div class="flex items-center space-x-4">
      <a href="#" class="font-mono text-xs font-bold bg-black text-white px-4 py-2 rounded-full hover:bg-neutral-800 transition">
        LIVE TV
      </a>
    </div>
  </div>
</header>
```

### B. Flat Editorial Berita Card
Kartu berita dengan layout grid minimalis, border super tipis, tanpa shadow, dan hover interaktif yang memunculkan border lebih tegas.
```html
<article class="group relative flex flex-col bg-white rounded-xl overflow-hidden border border-neutral-200 hover:border-neutral-400 transition-all duration-300">
  <!-- Image Container -->
  <div class="relative overflow-hidden aspect-video">
    <img src="news-image.jpg" class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-500" alt="News Image">
  </div>
  
  <!-- Content -->
  <div class="p-6 flex flex-col flex-1">
    <!-- Meta Info -->
    <div class="flex items-center gap-3 mb-3">
      <span class="font-mono text-[10px] font-semibold tracking-wider text-black uppercase">
        METRO
      </span>
      <span class="w-1 h-1 rounded-full bg-neutral-300"></span>
      <span class="font-mono text-[10px] text-neutral-500">
        26 JUN 2026
      </span>
    </div>
    
    <!-- Title -->
    <h3 class="text-xl font-bold tracking-tight text-black leading-snug group-hover:text-neutral-700 transition-colors duration-200 line-clamp-2">
      Rencana Pembangunan Jalur LRT Baru di Kota Tangerang Resmi Disepakati
    </h3>
    
    <!-- Excerpt -->
    <p class="mt-2 text-sm text-neutral-600 leading-relaxed line-clamp-2 flex-1">
      Pemerintah Kota Tangerang bekerja sama dengan Kemenhub menyetujui percepatan proyek LRT koridor barat untuk mengurangi kemacetan.
    </p>
    
    <!-- Action Link -->
    <div class="mt-6 pt-4 border-t border-neutral-200 flex items-center justify-between">
      <span class="font-mono text-[11px] text-neutral-600 group-hover:text-black transition-colors flex items-center gap-1">
        Baca Artikel 
        <svg class="w-3.5 h-3.5 transition-transform group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
      </span>
      <span class="font-mono text-[10px] text-neutral-500">3 MIN READ</span>
    </div>
  </div>
</article>
```
