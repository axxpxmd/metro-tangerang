@extends('layouts.app')

@section('title', 'Hubungi Kami - Metro Tangerang')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    
    <!-- Breadcrumbs -->
    <nav class="font-mono text-[10px] text-slate-500 uppercase tracking-wider mb-6 flex items-center gap-2">
        <a href="{{ route('home') }}" wire:navigate class="hover:text-sky-755 transition">Beranda</a>
        <span>/</span>
        <span class="text-slate-400">Kontak Kami</span>
    </nav>

    <!-- Header Section -->
    <div class="border-b border-slate-200 pb-8 mb-10">
        <span class="font-mono text-[10px] font-bold text-sky-700 bg-sky-50 border border-sky-200/85 px-3 py-1 rounded-full uppercase tracking-widest block w-fit mb-3">
            HUBUNGI REDAKSI
        </span>
        <h1 class="text-3xl md:text-5xl font-black tracking-tight text-black uppercase leading-none">
            KONTAK KAMI
        </h1>
        <p class="mt-4 text-xs md:text-sm text-slate-500 font-mono uppercase tracking-wide">
            Hubungi kami untuk kirim berita, info iklan, kerjasama, atau kritik dan saran
        </p>
    </div>

    <!-- Main Grid Layout -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
        
        <!-- Left Column: Contact Form (7 Columns) -->
        <div class="lg:col-span-7 bg-white border border-slate-200 rounded-xl p-6 md:p-8">
            <h2 class="text-base font-bold text-black uppercase mb-6 flex items-center gap-2">
                <span class="w-2.5 h-2.5 bg-sky-700 rounded-sm"></span>
                Kirim Pesan Langsung
            </h2>

            @if(session('success'))
                <div class="mb-6 p-4 text-xs font-mono text-emerald-800 bg-emerald-50 border border-emerald-200 rounded-lg">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('contact.store') }}" method="POST" class="space-y-4 font-sans text-xs">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <!-- Name Input -->
                    <div>
                        <label for="contact-name" class="block font-mono text-[9px] font-bold text-slate-500 uppercase tracking-widest mb-2">NAMA LENGKAP *</label>
                        <input type="text" id="contact-name" name="name" value="{{ old('name') }}" class="w-full bg-slate-50 border border-slate-200 rounded-lg p-3 text-xs focus:ring-1 focus:ring-sky-500 focus:outline-none placeholder-slate-400 text-slate-800 @error('name') border-rose-500 @enderror" placeholder="Masukkan nama lengkap Anda" required>
                        @error('name')
                            <p class="text-rose-500 text-[10px] mt-1 font-mono uppercase">{{ $message }}</p>
                        @enderror
                    </div>
                    <!-- Email Input -->
                    <div>
                        <label for="contact-email" class="block font-mono text-[9px] font-bold text-slate-500 uppercase tracking-widest mb-2">EMAIL AKTIF *</label>
                        <input type="email" id="contact-email" name="email" value="{{ old('email') }}" class="w-full bg-slate-50 border border-slate-200 rounded-lg p-3 text-xs focus:ring-1 focus:ring-sky-500 focus:outline-none placeholder-slate-400 text-slate-800 @error('email') border-rose-500 @enderror" placeholder="Masukkan email aktif Anda" required>
                        @error('email')
                            <p class="text-rose-500 text-[10px] mt-1 font-mono uppercase">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <!-- Telephone Input -->
                    <div>
                        <label for="contact-phone" class="block font-mono text-[9px] font-bold text-slate-500 uppercase tracking-widest mb-2">NOMOR TELEPON / WA</label>
                        <input type="tel" id="contact-phone" name="phone" value="{{ old('phone') }}" class="w-full bg-slate-50 border border-slate-200 rounded-lg p-3 text-xs focus:ring-1 focus:ring-sky-500 focus:outline-none placeholder-slate-400 text-slate-800 @error('phone') border-rose-500 @enderror" placeholder="Contoh: 08123456789">
                        @error('phone')
                            <p class="text-rose-500 text-[10px] mt-1 font-mono uppercase">{{ $message }}</p>
                        @enderror
                    </div>
                    <!-- Subject/Category Dropdown -->
                    <div>
                        <label for="contact-subject" class="block font-mono text-[9px] font-bold text-slate-500 uppercase tracking-widest mb-2">TUJUAN HUBUNGAN *</label>
                        <select id="contact-subject" name="subject" class="w-full bg-slate-50 border border-slate-200 rounded-lg p-3 text-xs focus:ring-1 focus:ring-sky-500 focus:outline-none text-slate-700 @error('subject') border-rose-500 @enderror" required>
                            <option value="">-- Pilih Kategori --</option>
                            <option value="redaksi" {{ old('subject') === 'redaksi' ? 'selected' : '' }}>Kirim Rilis Berita / Liputan</option>
                            <option value="ads" {{ old('subject') === 'ads' ? 'selected' : '' }}>Info Pasang Iklan / Sponsorship</option>
                            <option value="partnership" {{ old('subject') === 'partnership' ? 'selected' : '' }}>Kerjasama Kemitraan (Partnership)</option>
                            <option value="feedback" {{ old('subject') === 'feedback' ? 'selected' : '' }}>Kritik, Saran & Aduan Pembaca</option>
                            <option value="other" {{ old('subject') === 'other' ? 'selected' : '' }}>Keperluan Lainnya</option>
                        </select>
                        @error('subject')
                            <p class="text-rose-500 text-[10px] mt-1 font-mono uppercase">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <!-- Message Box -->
                <div>
                    <label for="contact-message" class="block font-mono text-[9px] font-bold text-slate-500 uppercase tracking-widest mb-2">ISI PESAN *</label>
                    <textarea id="contact-message" name="message" rows="6" class="w-full bg-slate-50 border border-slate-200 rounded-lg p-3 text-xs focus:ring-1 focus:ring-sky-500 focus:border-sky-500 focus:outline-none placeholder-slate-400 text-slate-800 @error('message') border-rose-500 @enderror" placeholder="Tuliskan pesan lengkap Anda secara jelas di sini..." required>{{ old('message') }}</textarea>
                    @error('message')
                        <p class="text-rose-500 text-[10px] mt-1 font-mono uppercase">{{ $message }}</p>
                    @enderror
                </div>

                <!-- CAPTCHA -->
                <div>
                    <label for="contact-captcha" class="block font-mono text-[9px] font-bold text-slate-500 uppercase tracking-widest mb-2">VERIFIKASI KEAMANAN: BERAPA {{ $num1 }} + {{ $num2 }}? *</label>
                    <input type="number" id="contact-captcha" name="captcha" class="w-full bg-slate-50 border border-slate-200 rounded-lg p-3 text-xs focus:ring-1 focus:ring-sky-500 focus:outline-none placeholder-slate-400 text-slate-800 @error('captcha') border-rose-500 @enderror" placeholder="Masukkan hasil penjumlahan" required>
                    @error('captcha')
                        <p class="text-rose-500 text-[10px] mt-1 font-mono uppercase">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Submit Button -->
                <div class="pt-2">
                    <button type="submit" id="btn-contact-submit" class="bg-sky-900 text-white font-mono text-xs font-bold px-8 py-3.5 rounded-full hover:bg-sky-800 transition uppercase tracking-wider">
                        KIRIM PESAN &rarr;
                    </button>
                </div>
            </form>
        </div>

        <!-- Right Column: Info Details & Map (5 Columns) -->
        <div class="lg:col-span-5 space-y-6">
            
            <!-- Address and Details Block -->
            <div class="border border-slate-200 rounded-xl p-6 bg-white space-y-6">
                <h2 class="text-base font-bold text-black uppercase flex items-center gap-2">
                    <span class="w-2.5 h-2.5 bg-sky-700 rounded-sm"></span>
                    Informasi Redaksi
                </h2>
                
                <div class="space-y-4 text-xs font-mono">
                    <!-- Office Location -->
                    <div class="flex gap-3">
                        <div class="w-8 h-8 rounded-lg bg-sky-50 text-sky-700 flex items-center justify-center flex-shrink-0">
                            <i class="fa-solid fa-building"></i>
                        </div>
                        <div>
                            <span class="text-slate-400 block uppercase tracking-wide text-[9px]">KANTOR REDAKSI UTAMA</span>
                            <p class="text-slate-800 font-bold font-sans text-xs mt-1">
                                Gedung Pers Metro Tangerang, Lantai 2<br>
                                Jl. Daan Mogot No. 120, Sukasari, Kec. Tangerang, Kota Tangerang, Banten 15111
                            </p>
                        </div>
                    </div>
                    
                    <!-- Email Grid -->
                    <div class="flex gap-3">
                        <div class="w-8 h-8 rounded-lg bg-sky-50 text-sky-700 flex items-center justify-center flex-shrink-0">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <div>
                            <span class="text-slate-400 block uppercase tracking-wide text-[9px]">KORESPONDENSI EMAIL</span>
                            <div class="mt-1 space-y-1 font-sans text-xs">
                                <p><span class="font-mono text-[9px] text-slate-500 uppercase">Umum/Kerjasama:</span> <a href="mailto:info@metrotangerang.com" class="text-sky-700 font-bold hover:underline">info@metrotangerang.com</a></p>
                                <p><span class="font-mono text-[9px] text-slate-500 uppercase">Iklan & Sponsor:</span> <a href="mailto:ads@metrotangerang.com" class="text-sky-700 font-bold hover:underline">ads@metrotangerang.com</a></p>
                            </div>
                        </div>
                    </div>

                    <!-- Hotline -->
                    <div class="flex gap-3">
                        <div class="w-8 h-8 rounded-lg bg-sky-50 text-sky-700 flex items-center justify-center flex-shrink-0">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <div>
                            <span class="text-slate-400 block uppercase tracking-wide text-[9px]">HOTLINE WHATSAPP</span>
                            <a href="https://wa.me/6281234567890" class="text-sky-700 font-bold font-sans text-sm block mt-1">+62 812-3456-7890</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Map Mock Container -->
            <div class="bg-slate-50 border border-slate-200 rounded-xl p-6 flex flex-col justify-center items-center text-center aspect-[16/10]">
                <div class="w-12 h-12 rounded-full bg-white flex items-center justify-center text-sky-700 border border-slate-200 shadow-sm mb-3">
                    <i class="fa-solid fa-map-location-dot text-lg"></i>
                </div>
                <h3 class="text-xs font-bold text-slate-800 uppercase mb-1">Peta Lokasi Gedung Redaksi</h3>
                <p class="text-[10px] text-slate-450 leading-relaxed max-w-xs font-mono uppercase">
                    Terletak strategis di pusat Kota Tangerang, dekat dengan Stasiun Tangerang dan Kawasan Pemkot.
                </p>
            </div>

        </div>
    </div>

</div>
@endsection
