@extends('layouts.console')

@section('title', 'Tambah Pengguna - Metro Tangerang Console')
@section('page_title', 'Tambah Pengguna')

@section('content')
<div class="space-y-6 max-w-4xl mx-auto">
    
    <!-- Top Action Bar -->
    <div class="flex items-center justify-between bg-white dark:bg-console-900 p-5 rounded-xl border border-slate-200 dark:border-console-800">
        <div>
            <h2 class="text-sm font-bold text-slate-900 dark:text-white uppercase tracking-wider">Tambah Pengguna Baru</h2>
            <p class="text-xs text-slate-500 dark:text-console-400 mt-1">Daftarkan personil baru dan tentukan level akses mereka.</p>
        </div>
        <a href="{{ route('console.users.index') }}" class="bg-slate-100 hover:bg-slate-200 text-slate-700 dark:bg-console-800 dark:text-white dark:hover:bg-console-700 font-semibold text-xs px-4 py-2 rounded-lg transition">
            Kembali
        </a>
    </div>

    <!-- Form Box -->
    <div class="bg-white dark:bg-console-900 border border-slate-200 dark:border-console-800 rounded-xl p-6">
        <form action="{{ route('console.users.store') }}" method="POST" class="space-y-6">
            @csrf

            <!-- Section 1: Akun CMS -->
            <div>
                <h3 class="text-xs font-bold text-slate-900 dark:text-white uppercase tracking-wider mb-4 flex items-center gap-2">
                    <span class="w-1.5 h-3 bg-blue-600 rounded-sm"></span>
                    Informasi Akun CMS
                </h3>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <!-- Nama Lengkap -->
                    <div>
                        <label for="name" class="block font-mono text-[9px] font-bold text-slate-500 uppercase tracking-widest mb-2">Nama Lengkap *</label>
                        <input type="text" name="name" id="name" value="{{ old('name') }}" required
                            class="w-full bg-slate-50 border border-slate-200 rounded-lg p-2.5 text-xs text-slate-900 focus:bg-white focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500 @error('name') border-rose-500 @enderror">
                        @error('name')
                            <p class="text-rose-600 text-[10px] mt-1 font-mono uppercase">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Username -->
                    <div>
                        <label for="username" class="block font-mono text-[9px] font-bold text-slate-500 uppercase tracking-widest mb-2">Username *</label>
                        <input type="text" name="username" id="username" value="{{ old('username') }}" required
                            class="w-full bg-slate-50 border border-slate-200 rounded-lg p-2.5 text-xs text-slate-900 focus:bg-white focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500 @error('username') border-rose-500 @enderror">
                        @error('username')
                            <p class="text-rose-600 text-[10px] mt-1 font-mono uppercase">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Email -->
                    <div>
                        <label for="email" class="block font-mono text-[9px] font-bold text-slate-500 uppercase tracking-widest mb-2">Alamat Email *</label>
                        <input type="email" name="email" id="email" value="{{ old('email') }}" required
                            class="w-full bg-slate-50 border border-slate-200 rounded-lg p-2.5 text-xs text-slate-900 focus:bg-white focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500 @error('email') border-rose-500 @enderror">
                        @error('email')
                            <p class="text-rose-600 text-[10px] mt-1 font-mono uppercase">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Role -->
                    <div>
                        <label for="role" class="block font-mono text-[9px] font-bold text-slate-500 uppercase tracking-widest mb-2">Role Akses *</label>
                        <select name="role" id="role" required
                            class="w-full bg-slate-50 border border-slate-200 rounded-lg p-2.5 text-xs text-slate-900 focus:bg-white focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500">
                            <option value="editor" {{ old('role') === 'editor' ? 'selected' : '' }}>Editor</option>
                            <option value="verifikator" {{ old('role') === 'verifikator' ? 'selected' : '' }}>Verifikator</option>
                            <option value="admin" {{ old('role') === 'admin' ? 'selected' : '' }}>Administrator</option>
                        </select>
                        @error('role')
                            <p class="text-rose-600 text-[10px] mt-1 font-mono uppercase">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Password -->
                    <div>
                        <label for="password" class="block font-mono text-[9px] font-bold text-slate-500 uppercase tracking-widest mb-2">Password *</label>
                        <input type="password" name="password" id="password" required
                            class="w-full bg-slate-50 border border-slate-200 rounded-lg p-2.5 text-xs text-slate-900 focus:bg-white focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500 @error('password') border-rose-500 @enderror">
                        @error('password')
                            <p class="text-rose-600 text-[10px] mt-1 font-mono uppercase">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Confirm Password -->
                    <div>
                        <label for="password_confirmation" class="block font-mono text-[9px] font-bold text-slate-500 uppercase tracking-widest mb-2">Konfirmasi Password *</label>
                        <input type="password" name="password_confirmation" id="password_confirmation" required
                            class="w-full bg-slate-50 border border-slate-200 rounded-lg p-2.5 text-xs text-slate-900 focus:bg-white focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500">
                    </div>

                    <!-- Status -->
                    <div>
                        <label for="status" class="block font-mono text-[9px] font-bold text-slate-500 uppercase tracking-widest mb-2">Status Akun *</label>
                        <select name="status" id="status" required
                            class="w-full bg-slate-50 border border-slate-200 rounded-lg p-2.5 text-xs text-slate-900 focus:bg-white focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500">
                            <option value="active" {{ old('status') === 'active' ? 'selected' : '' }}>Aktif</option>
                            <option value="inactive" {{ old('status') === 'inactive' ? 'selected' : '' }}>Nonaktif</option>
                        </select>
                        @error('status')
                            <p class="text-rose-600 text-[10px] mt-1 font-mono uppercase">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>

            <!-- Section 2: Data Pribadi -->
            <div class="pt-6 border-t border-slate-200 dark:border-console-800">
                <h3 class="text-xs font-bold text-slate-900 dark:text-white uppercase tracking-wider mb-4 flex items-center gap-2">
                    <span class="w-1.5 h-3 bg-emerald-600 rounded-sm"></span>
                    Informasi Data Pribadi
                </h3>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <!-- Nomor Telepon -->
                    <div>
                        <label for="phone" class="block font-mono text-[9px] font-bold text-slate-500 uppercase tracking-widest mb-2">Nomor Telepon</label>
                        <input type="text" name="phone" id="phone" value="{{ old('phone') }}"
                            class="w-full bg-slate-50 border border-slate-200 rounded-lg p-2.5 text-xs text-slate-900 focus:bg-white focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500 @error('phone') border-rose-500 @enderror"
                            placeholder="Contoh: 0812XXXXXXXX">
                        @error('phone')
                            <p class="text-rose-600 text-[10px] mt-1 font-mono uppercase">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Tanggal Lahir -->
                    <div>
                        <label for="birth_date" class="block font-mono text-[9px] font-bold text-slate-500 uppercase tracking-widest mb-2">Tanggal Lahir</label>
                        <input type="date" name="birth_date" id="birth_date" value="{{ old('birth_date') }}"
                            class="w-full bg-slate-50 border border-slate-200 rounded-lg p-2.5 text-xs text-slate-900 focus:bg-white focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500 @error('birth_date') border-rose-500 @enderror">
                        @error('birth_date')
                            <p class="text-rose-600 text-[10px] mt-1 font-mono uppercase">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Bio Singkat -->
                    <div class="md:col-span-2">
                        <label for="bio" class="block font-mono text-[9px] font-bold text-slate-500 uppercase tracking-widest mb-2">Biografi Singkat</label>
                        <textarea name="bio" id="bio" rows="3"
                            class="w-full bg-slate-50 border border-slate-200 rounded-lg p-2.5 text-xs text-slate-900 focus:bg-white focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500 @error('bio') border-rose-500 @enderror"
                            placeholder="Biografi singkat mengenai personil pengguna...">{{ old('bio') }}</textarea>
                        @error('bio')
                            <p class="text-rose-600 text-[10px] mt-1 font-mono uppercase">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>

            <!-- Submit buttons -->
            <div class="pt-6 border-t border-slate-200 dark:border-console-800 flex items-center justify-end gap-3">
                <a href="{{ route('console.users.index') }}" class="bg-slate-100 hover:bg-slate-200 text-slate-700 font-semibold text-xs px-5 py-2.5 rounded-lg transition">
                    Batalkan
                </a>
                <button type="submit" class="bg-blue-500 text-white font-semibold text-xs px-5 py-2.5 rounded-lg transition active:scale-[0.98]">
                    Simpan Pengguna
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
