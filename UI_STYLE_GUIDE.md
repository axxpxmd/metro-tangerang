# Panduan Gaya UI (UI Style Guide) - Metro Tangerang

Dokumen ini berisi panduan gaya UI (User Interface) dan desain sistem yang disesuaikan untuk pengembangan website berita **Metro Tangerang** menggunakan **Tailwind CSS**. Desain ini mengadopsi estetika premium, futuristik, dan kontras tinggi yang terinspirasi oleh **Mux.com**, dengan latar belakang hitam pekat dan aksen warna-warni dinamis.

---

## 1. Konsep & Estetika Desain (Mux-Inspired Style)

Desain ini menggunakan konsep **"Futuristic Editorial & High-Contrast Dark Mode"** (Single Theme - Hanya Latar Belakang Hitam).

### Prinsip Utama:
1.  **True Black Foundation**: Latar belakang utama menggunakan hitam pekat (`#000000`) untuk memberikan kedalaman visual dan membuat konten visual (gambar/video) lebih menonjol.
2.  **High-Contrast Typography**: Teks berwarna putih bersih (`#ffffff`) dengan variasi abu-abu terang untuk informasi sekunder, memberikan keterbacaan yang sangat tajam.
3.  **Neon & Gradient Accents**: Sentuhan aksen gradasi dinamis (warna-warni neon khas video/streaming) untuk kategori berita, lencana penting, atau efek hover tombol, mirip dengan identitas visual Mux.
4.  **Fine Lines & Grid Borders**: Menggunakan garis pembatas yang sangat tipis dan halus (`border-neutral-800` atau `border-neutral-900`) untuk struktur tata letak (grid) guna menciptakan kesan terorganisir dan premium.

---

## 2. Palet Warna (Tailwind CSS Config)

Aplikasi ini menggunakan tema gelap tunggal (tidak menyediakan opsi toggle light mode).

| Nama Elemen | Kode Hex | Tailwind Class | Penggunaan |
| :--- | :--- | :--- | :--- |
| **Main Background** | `#000000` | `bg-black` | Latar belakang halaman utama & dasar website |
| **Card / Section BG**| `#0d0d0d` | `bg-neutral-950` | Latar belakang kartu berita & sidebar widget |
| **Text Primary** | `#ffffff` | `text-white` | Judul berita, headline, dan teks konten utama |
| **Text Secondary** | `#a3a3a3` | `text-neutral-400` | Deskripsi berita singkat, waktu baca, metadata |
| **Accent Gradient** | Gradient | `bg-gradient-to-r from-pink-500 via-purple-500 to-indigo-500` | Lencana headline, garis dekorasi, hover state |
| **Accent Solid** | `#ec4899` | `text-pink-500` / `bg-pink-500` | Kategori berita penting / penanda "LIVE" |
| **Borders** | `#262626` | `border-neutral-800` | Garis pembatas grid, separator, border kartu |

---

## 3. Tipografi (Fonts & Sizes)

Kombinasi font premium yang memadukan font sans-serif geometris modern dengan monospaced untuk elemen teknis/meta.
1.  **UI & Judul Utama**: `Plus Jakarta Sans` atau `Inter` (Sans-serif - tebal, tajam, dengan kerning/tracking rapat).
2.  **Isi Berita (Body Copy)**: `Inter` (Sans-serif) atau `Merriweather` (Serif) untuk artikel panjang demi kenyamanan mata.
3.  **Meta & Kategori**: `JetBrains Mono` atau `Fira Code` (Monospace - memberikan kesan presisi dan modern ala Mux).

### Skala Tipografi Tailwind:
*   **Headline Utama**: `text-4xl md:text-6xl font-black tracking-tighter text-white leading-none`
*   **Judul Berita (List/Card)**: `text-xl font-bold tracking-tight text-white group-hover:text-neutral-300 transition-colors`
*   **Isi Artikel**: `font-serif text-lg leading-relaxed text-neutral-200`
*   **Tag Kategori**: `font-mono text-xs font-semibold tracking-widest uppercase text-pink-500`
*   **Meta Info (Author/Date)**: `font-mono text-[10px] text-neutral-500 uppercase`

---

## 4. Komponen UI Utama (Implementasi Tailwind)

### A. Navigation Bar (Header) - Ultra Clean Sticky
Navigasi hitam pekat tanpa blur yang berlebihan, dibatasi garis tipis di bagian bawah.
```html
<header class="sticky top-0 z-50 bg-black/90 backdrop-blur-md border-b border-neutral-900">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-16 flex items-center justify-between">
    <!-- Logo -->
    <a href="#" class="text-xl font-black tracking-tighter text-white flex items-center gap-2">
      METRO<span class="bg-gradient-to-r from-pink-500 via-purple-500 to-indigo-500 bg-clip-text text-transparent">TANGERANG</span>
    </a>
    <!-- Menu -->
    <nav class="hidden md:flex space-x-8 font-mono text-xs tracking-wider uppercase text-neutral-400">
      <a href="#" class="hover:text-white transition-colors duration-200">Metro</a>
      <a href="#" class="hover:text-white transition-colors duration-200">Politik</a>
      <a href="#" class="hover:text-white transition-colors duration-200">Ekonomi</a>
      <a href="#" class="hover:text-white transition-colors duration-200">Olahraga</a>
    </nav>
    <!-- Action Button (Live Stream / Watch) -->
    <div class="flex items-center space-x-4">
      <a href="#" class="font-mono text-xs font-bold bg-white text-black px-4 py-2 rounded-full hover:bg-neutral-200 transition">
        LIVE TV
      </a>
    </div>
  </div>
</header>
```

### B. Mux-Inspired Berita Card
Kartu berita dengan layout grid minimalis, sudut melengkung tajam (*rounded-lg*), border super tipis, dan hover interaktif yang memunculkan aksen gradasi.
```html
<article class="group relative flex flex-col bg-neutral-950 rounded-xl overflow-hidden border border-neutral-900 hover:border-neutral-800 transition-all duration-300">
  <!-- Glowing top border on hover -->
  <div class="absolute top-0 left-0 w-full h-[2px] bg-gradient-to-r from-pink-500 via-purple-500 to-indigo-500 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>

  <!-- Image Container -->
  <div class="relative overflow-hidden aspect-video">
    <img src="news-image.jpg" class="w-full h-full object-cover grayscale group-hover:grayscale-0 group-hover:scale-102 transition-all duration-500" alt="News Image">
  </div>
  
  <!-- Content -->
  <div class="p-6 flex flex-col flex-1">
    <!-- Meta Info -->
    <div class="flex items-center gap-3 mb-3">
      <span class="font-mono text-[10px] font-semibold tracking-wider text-pink-500 uppercase">
        METRO
      </span>
      <span class="w-1 h-1 rounded-full bg-neutral-800"></span>
      <span class="font-mono text-[10px] text-neutral-500">
        26 JUN 2026
      </span>
    </div>
    
    <!-- Title -->
    <h3 class="text-xl font-bold tracking-tight text-white leading-snug group-hover:text-neutral-200 transition-colors duration-200 line-clamp-2">
      Rencana Pembangunan Jalur LRT Baru di Kota Tangerang Resmi Disepakati
    </h3>
    
    <!-- Excerpt -->
    <p class="mt-2 text-sm text-neutral-400 leading-relaxed line-clamp-2 flex-1">
      Pemerintah Kota Tangerang bekerja sama dengan Kemenhub menyetujui percepatan proyek LRT koridor barat untuk mengurangi kemacetan.
    </p>
    
    <!-- Action Link -->
    <div class="mt-6 pt-4 border-t border-neutral-900 flex items-center justify-between">
      <span class="font-mono text-[11px] text-neutral-400 group-hover:text-white transition-colors flex items-center gap-1">
        Baca Artikel 
        <svg class="w-3.5 h-3.5 transition-transform group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
      </span>
      <span class="font-mono text-[10px] text-neutral-600">3 MIN READ</span>
    </div>
  </div>
</article>
```

---

## 5. Rencana Penerapan

1.  **Setup Tailwind config**: Setel `theme.extend.colors` untuk custom neutral/black agar performa dark theme bawaan optimal.
2.  **No Theme Toggle**: CSS root disetel statis dengan warna dasar latar belakang gelap (`html, body { background-color: #000000; color: #ffffff; }`).
3.  **Media Assets Filter**: Efek transisi *grayscale* ke warna asli pada gambar hover untuk memperkuat estetika bersih & minimalis khas platform modern.
