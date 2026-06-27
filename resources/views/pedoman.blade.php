@extends('layouts.app')

@section('title', 'Pedoman Pemberitaan Media Siber - Metro Tangerang')

@section('content')
<div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    
    <!-- Breadcrumbs -->
    <nav class="font-mono text-[10px] text-slate-500 uppercase tracking-wider mb-6 flex items-center gap-2">
        <a href="{{ route('home') }}" class="hover:text-sky-750 transition">Beranda</a>
        <span>/</span>
        <span class="text-slate-400">Pedoman Siber</span>
    </nav>

    <!-- Header Section -->
    <div class="border-b border-slate-200 pb-8 mb-10">
        <span class="font-mono text-[10px] font-bold text-sky-700 bg-sky-50 border border-sky-200/85 px-3 py-1 rounded-full uppercase tracking-widest block w-fit mb-3">
            REGULASI & ETIKA
        </span>
        <h1 class="text-3xl md:text-5xl font-black tracking-tight text-black uppercase leading-tight">
            PEDOMAN PEMBERITAAN MEDIA SIBER
        </h1>
        <p class="mt-4 text-xs md:text-sm text-slate-550 font-mono uppercase tracking-wide">
            Metro Tangerang • Kepatuhan Terhadap Standar Dewan Pers Indonesia
        </p>
    </div>

    <!-- Main Content Split Grid -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-10">
        
        <!-- Left Column: Table of Contents (Sticky on Desktop) -->
        <aside class="lg:col-span-4 lg:sticky lg:top-24 self-start order-2 lg:order-1">
            <div class="border border-slate-200 rounded-xl p-6 bg-slate-50/50">
                <h3 class="font-mono text-[10px] font-bold tracking-widest text-slate-800 uppercase mb-4 pb-2 border-b border-slate-200 flex items-center gap-2">
                    <i class="fa-solid fa-list-ul text-sky-700"></i>
                    DAFTAR ISI PEDOMAN
                </h3>
                <nav class="space-y-2.5 font-mono text-[10px] uppercase font-bold text-slate-500">
                    <a href="#ruang-lingkup" class="block hover:text-sky-700 transition flex items-center gap-2">
                        <span class="w-1.5 h-1.5 rounded-full bg-slate-300"></span>
                        1. Ruang Lingkup
                    </a>
                    <a href="#verifikasi-keberimbangan" class="block hover:text-sky-700 transition flex items-center gap-2">
                        <span class="w-1.5 h-1.5 rounded-full bg-slate-300"></span>
                        2. Verifikasi & Keberimbangan
                    </a>
                    <a href="#user-content" class="block hover:text-sky-700 transition flex items-center gap-2">
                        <span class="w-1.5 h-1.5 rounded-full bg-slate-300"></span>
                        3. Isi Buatan Pengguna (UGC)
                    </a>
                    <a href="#ralat-koreksi" class="block hover:text-sky-700 transition flex items-center gap-2">
                        <span class="w-1.5 h-1.5 rounded-full bg-slate-300"></span>
                        4. Ralat, Koreksi & Hak Jawab
                    </a>
                    <a href="#pencabutan-berita" class="block hover:text-sky-700 transition flex items-center gap-2">
                        <span class="w-1.5 h-1.5 rounded-full bg-slate-300"></span>
                        5. Pencabutan Berita
                    </a>
                    <a href="#iklan-advertorial" class="block hover:text-sky-700 transition flex items-center gap-2">
                        <span class="w-1.5 h-1.5 rounded-full bg-slate-300"></span>
                        6. Iklan & Advertorial
                    </a>
                    <a href="#hak-cipta" class="block hover:text-sky-700 transition flex items-center gap-2">
                        <span class="w-1.5 h-1.5 rounded-full bg-slate-300"></span>
                        7. Hak Cipta
                    </a>
                    <a href="#pengawasan-sengketa" class="block hover:text-sky-700 transition flex items-center gap-2">
                        <span class="w-1.5 h-1.5 rounded-full bg-slate-300"></span>
                        8. Pengawasan & Sengketa
                    </a>
                </nav>
                
                <div class="mt-6 pt-6 border-t border-slate-200 text-[10px] text-slate-400 font-serif leading-relaxed">
                    Pedoman Pemberitaan Media Siber ini ditandatangani oleh Dewan Pers dan organisasi pers di Jakarta pada tanggal 3 Februari 2012.
                </div>
            </div>
        </aside>

        <!-- Right Column: Guidelines Content -->
        <article class="lg:col-span-8 space-y-10 order-1 lg:order-2 font-serif text-slate-800 text-sm md:text-base leading-relaxed">
            
            <p class="font-sans text-xs md:text-sm text-slate-500 leading-relaxed mb-6">
                Kemerdekaan berpendapat, kemerdekaan berekspresi, dan kemerdekaan pers adalah hak asasi manusia yang dilindungi Pancasila, Undang-Undang Dasar 1945, dan Deklarasi Universal Hak Asasi Manusia PBB. Keberadaan media siber di Indonesia juga merupakan bagian dari kemerdekaan berpendapat, kemerdekaan berekspresi, dan kemerdekaan pers.
            </p>

            <!-- 1. Ruang Lingkup -->
            <section id="ruang-lingkup" class="space-y-4 pt-6 first:pt-0">
                <h2 class="text-sm font-mono font-bold tracking-widest text-sky-800 uppercase flex items-center gap-2 border-b border-slate-200 pb-2">
                    1. RUANG LINGKUP
                </h2>
                <div class="space-y-3">
                    <p>
                        Media Siber adalah segala bentuk media yang menggunakan sarana internet dan melaksanakan kegiatan jurnalistik, serta memenuhi persyaratan Undang-Undang Pers dan Standar Perusahaan Pers yang ditetapkan Dewan Pers.
                    </p>
                    <p>
                        Isi Buatan Pengguna (User Generated Content) adalah segala isi yang dibuat dan atau diunggah oleh pengguna media siber, antara lain berupa artikel, gambar, komentar, suara, video atau berbagai bentuk unggahan yang melekat pada media siber, seperti blog, forum, komentar pembaca atau pemirsa.
                    </p>
                </div>
            </section>

            <!-- 2. Verifikasi dan Keberimbangan Berita -->
            <section id="verifikasi-keberimbangan" class="space-y-4 pt-6">
                <h2 class="text-sm font-mono font-bold tracking-widest text-sky-800 uppercase flex items-center gap-2 border-b border-slate-200 pb-2">
                    2. VERIFIKASI DAN KEBERIMBANGAN BERITA
                </h2>
                <div class="space-y-3">
                    <p>
                        <strong>a.</strong> Pada prinsipnya setiap berita harus melalui verifikasi sebelum dipublikasikan demi akurasi dan kredibilitas informasi.
                    </p>
                    <p>
                        <strong>b.</strong> Berita yang dapat merugikan pihak lain memerlukan verifikasi pada berita yang sama (kombinasi konfirmasi) untuk memenuhi prinsip keberimbangan dan keadilan.
                    </p>
                    <p>
                        <strong>c.</strong> Pengecualian prinsip verifikasi dapat dilakukan dengan syarat:
                    </p>
                    <ul class="list-disc pl-5 space-y-1 font-serif text-xs md:text-sm text-slate-700">
                        <li>Isi berita benar-benar mengandung kepentingan publik yang mendesak;</li>
                        <li>Sumber berita pertama adalah narasumber yang jelas identitasnya, kredibel, dan kompeten;</li>
                        <li>Subjek berita yang harus dikonfirmasi belum dapat dihubungi dan/atau tidak dapat ditemui;</li>
                        <li>Media memberikan penjelasan kepada pembaca bahwa berita tersebut masih memerlukan verifikasi lebih lanjut yang akan diupayakan dalam waktu secepatnya. Penjelasan itu dimuat di bagian akhir berita yang sama.</li>
                    </ul>
                </div>
            </section>

            <!-- 3. Isi Buatan Pengguna (User Generated Content) -->
            <section id="user-content" class="space-y-4 pt-6">
                <h2 class="text-sm font-mono font-bold tracking-widest text-sky-800 uppercase flex items-center gap-2 border-b border-slate-200 pb-2">
                    3. ISI BUATAN PENGGUNA (USER GENERATED CONTENT)
                </h2>
                <div class="space-y-3">
                    <p>
                        <strong>a.</strong> Media siber wajib mencantumkan syarat dan ketentuan mengenai Isi Buatan Pengguna yang tidak bertentangan dengan Undang-Undang No. 40 Tahun 1999 tentang Pers dan Kode Etik Jurnalistik, yang ditempatkan secara terang dan jelas.
                    </p>
                    <p>
                        <strong>b.</strong> Media siber mewajibkan setiap pengguna untuk melakukan registrasi keanggotaan dan log-in terlebih dahulu untuk dapat memuat segala bentuk Isi Buatan Pengguna.
                    </p>
                    <p>
                        <strong>c.</strong> Dalam hal Isi Buatan Pengguna dinilai melanggar hukum, menyebarkan fitnah, mengandung unsur SARA, pornografi, maupun kekerasan, Metro Tangerang berhak dan wajib segera melakukan tindakan penyuntingan atau penghapusan sesaat setelah menerima laporan keluhan.
                    </p>
                </div>
            </section>

            <!-- 4. Ralat, Koreksi, dan Hak Jawab -->
            <section id="ralat-koreksi" class="space-y-4 pt-6">
                <h2 class="text-sm font-mono font-bold tracking-widest text-sky-800 uppercase flex items-center gap-2 border-b border-slate-200 pb-2">
                    4. RALAT, KOREKSI, DAN HAK JAWAB
                </h2>
                <div class="space-y-3">
                    <p>
                        <strong>a.</strong> Ralat, koreksi, dan hak jawab dilakukan merujuk pada Undang-Undang Pers, Kode Etik Jurnalistik, dan Pedoman Perilaku Penyiaran yang ditetapkan Dewan Pers.
                    </p>
                    <p>
                        <strong>b.</strong> Ralat, koreksi, dan atau hak jawab wajib ditautkan pada berita yang diralat, dikoreksi atau yang diberi hak jawab dengan judul penanda ralat yang jelas.
                    </p>
                    <p>
                        <strong>c.</strong> Pada setiap berita yang diralat, dikoreksi, atau diberi hak jawab wajib dicantumkan waktu pembaruan (update) ralat tersebut dilakukan lengkap dengan alasan perubahan di bagian bawah artikel.
                    </p>
                </div>
            </section>

            <!-- 5. Pencabutan Berita -->
            <section id="pencabutan-berita" class="space-y-4 pt-6">
                <h2 class="text-sm font-mono font-bold tracking-widest text-sky-800 uppercase flex items-center gap-2 border-b border-slate-200 pb-2">
                    5. PENCABUTAN BERITA
                </h2>
                <div class="space-y-3">
                    <p>
                        <strong>a.</strong> Berita yang sudah dipublikasikan tidak dapat dicabut karena alasan penyensoran dari pihak luar redaksi, kecuali terkait masalah SARA, masa depan anak korban kekerasan seksual, kehormatan pribadi yang dibuktikan dengan keputusan hukum tetap, atau atas rekomendasi resmi Dewan Pers.
                    </p>
                    <p>
                        <strong>b.</strong> Pencabutan berita wajib disertai pengumuman pencabutan yang diletakkan pada URL tautan yang sama dengan berita yang dicabut tersebut.
                    </p>
                </div>
            </section>

            <!-- 6. Iklan dan Advertorial -->
            <section id="iklan-advertorial" class="space-y-4 pt-6">
                <h2 class="text-sm font-mono font-bold tracking-widest text-sky-800 uppercase flex items-center gap-2 border-b border-slate-200 pb-2">
                    6. IKLAN DAN ADVERTORIAL
                </h2>
                <div class="space-y-3">
                    <p>
                        <strong>a.</strong> Media siber wajib membedakan dengan tegas dan jelas antara produk berita (editorial) dan produk komersial (iklan/advertorial).
                    </p>
                    <p>
                        <strong>b.</strong> Setiap materi berbayar atau promosi komersial wajib diberi identifikasi yang jelas seperti label "Iklan", "Advertorial", "Sponsor", atau "Paid Promotion" agar pembaca tidak keliru membedakannya dengan konten berita biasa.
                    </p>
                </div>
            </section>

            <!-- 7. Hak Cipta -->
            <section id="hak-cipta" class="space-y-4 pt-6">
                <h2 class="text-sm font-mono font-bold tracking-widest text-sky-800 uppercase flex items-center gap-2 border-b border-slate-200 pb-2">
                    7. HAK CIPTA
                </h2>
                <div class="space-y-3">
                    <p>
                        Media siber wajib menghormati hak cipta sebagaimana diatur dalam peraturan perundang-undangan yang berlaku di Republik Indonesia. Pengutipan teks, gambar, infografis, maupun video dari media lain wajib mencantumkan sumber asli secara jelas dan tertulis.
                    </p>
                </div>
            </section>

            <!-- 8. Pengawasan dan Sengketa -->
            <section id="pengawasan-sengketa" class="space-y-4 pt-6">
                <h2 class="text-sm font-mono font-bold tracking-widest text-sky-800 uppercase flex items-center gap-2 border-b border-slate-200 pb-2">
                    8. PENGAWASAN DAN SENGKETA
                </h2>
                <div class="space-y-3">
                    <p>
                        Penilaian akhir atas pelaksanaan Pedoman Pemberitaan Media Siber ini dilakukan oleh Dewan Pers. Segala bentuk sengketa yang timbul akibat pemuatan berita di portal **Metro Tangerang** akan diselesaikan melalui mekanisme musyawarah dan mediasi Dewan Pers sesuai UU No. 40 Tahun 1999 tentang Pers.
                    </p>
                </div>
            </section>

            <!-- Press Council Footer Box -->
            <section class="pt-8 border-t border-slate-200">
                <div class="bg-sky-50/50 border border-sky-200/60 rounded-xl p-6 text-slate-700 space-y-3">
                    <div class="flex items-center gap-2 text-sky-850 font-bold text-sm uppercase">
                        <i class="fa-solid fa-scale-balanced"></i>
                        <span>DEWAN PERS REPUBLIK INDONESIA</span>
                    </div>
                    <p class="text-xs leading-relaxed font-serif">
                        Pedoman ini disusun sebagai panduan operasional bagi jurnalis Metro Tangerang dalam menjaga etika komunikasi digital yang sehat, akurat, berimbang, serta mengedepankan hak jawab masyarakat demi terwujudnya jurnalisme lokal yang mendidik dan membebaskan.
                    </p>
                </div>
            </section>

        </article>

    </div>

</div>
@endsection
