<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Login Console - Metro Tangerang</title>
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('images/logo-metrotangerang-logo.png') }}">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=JetBrains+Mono:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- FontAwesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <!-- Tailwind CSS Play CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['"Plus Jakarta Sans"', 'sans-serif'],
                        mono: ['"JetBrains Mono"', 'monospace'],
                    }
                }
            }
        }
    </script>

    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #F1F5F9; /* Solid soft slate background */
        }
    </style>
</head>
<body class="h-full antialiased flex items-center justify-center p-4">

    <div class="w-full max-w-md">
        
        <!-- Flat Light Card Container -->
        <div class="bg-white border border-slate-200 rounded-2xl p-8 sm:p-10">

            <!-- Logo & Brand Header -->
            <div class="text-center mb-8">
                <div class="inline-flex items-center justify-center mb-4">
                    <img src="{{ asset('images/logo-metrotangerang-logo.png') }}" alt="Metro Tangerang Logo" class="h-14 w-auto object-contain">
                </div>
                <h1 class="text-xl sm:text-2xl font-black text-slate-900 tracking-tight">Console CMS Login</h1>
                <p class="text-xs text-slate-500 mt-2">Gunakan akun administrator untuk masuk ke panel manajemen</p>
            </div>

            <!-- Login Form -->
            <form action="{{ route('console.login') }}" method="POST" class="space-y-5">
                @csrf

                <!-- Username Input -->
                <div class="space-y-2">
                    <label for="username" class="block font-mono text-[9px] font-bold text-slate-500 uppercase tracking-widest">USERNAME</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-400 text-xs">
                            <i class="fa-solid fa-user"></i>
                        </div>
                        <input type="text" name="username" id="username" value="{{ old('username') }}" required autofocus
                            class="w-full bg-slate-50 border border-slate-200 rounded-xl py-3 pl-10 pr-4 text-xs text-slate-900 placeholder-slate-400 focus:bg-white focus:outline-none focus:border-sky-600 focus:ring-1 focus:ring-sky-600 transition"
                            placeholder="Username">
                    </div>
                    @error('username')
                        <p class="text-rose-600 text-[10px] mt-1.5 font-mono uppercase tracking-wide flex items-center gap-1">
                            <i class="fa-solid fa-circle-exclamation"></i>
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <!-- Password Input -->
                <div class="space-y-2">
                    <label for="password" class="block font-mono text-[9px] font-bold text-slate-500 uppercase tracking-widest">PASSWORD</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-400 text-xs">
                            <i class="fa-solid fa-lock"></i>
                        </div>
                        <input type="password" name="password" id="password" required
                            class="w-full bg-slate-50 border border-slate-200 rounded-xl py-3 pl-10 pr-10 text-xs text-slate-900 placeholder-slate-450 focus:bg-white focus:outline-none focus:border-sky-600 focus:ring-1 focus:ring-sky-600 transition"
                            placeholder="••••••••">
                        <button type="button" onclick="togglePasswordVisibility()" class="absolute inset-y-0 right-0 pr-3.5 flex items-center text-slate-400 hover:text-slate-650 transition text-xs">
                            <i id="password-eye-icon" class="fa-solid fa-eye"></i>
                        </button>
                    </div>
                    @error('password')
                        <p class="text-rose-600 text-[10px] mt-1.5 font-mono uppercase tracking-wide flex items-center gap-1">
                            <i class="fa-solid fa-circle-exclamation"></i>
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <!-- Options Row -->
                <div class="flex items-center justify-between pt-1">
                    <label class="flex items-center cursor-pointer select-none">
                        <input type="checkbox" name="remember" id="remember" 
                            class="w-4 h-4 border-slate-350 bg-white rounded text-sky-600 focus:ring-sky-500 focus:outline-none">
                        <span class="ml-2 text-xs text-slate-550">Ingat saya</span>
                    </label>
                </div>

                <!-- Submit Button -->
                <button type="submit" 
                    class="w-full bg-sky-600 hover:bg-sky-700 text-white font-bold text-xs py-3.5 px-4 rounded-xl transition">
                    Masuk ke Dashboard
                </button>
            </form>
        </div>

        <!-- Footer Back Link -->
        <div class="text-center mt-6">
            <a href="{{ route('home') }}" class="text-xs text-slate-500 hover:text-slate-800 transition flex items-center justify-center gap-1.5">
                <i class="fa-solid fa-arrow-left text-[10px]"></i>
                Kembali ke Portal Berita
            </a>
        </div>
    </div>

    <script>
        function togglePasswordVisibility() {
            const pwdInput = document.getElementById('password');
            const eyeIcon = document.getElementById('password-eye-icon');
            if (pwdInput.type === 'password') {
                pwdInput.type = 'text';
                eyeIcon.classList.remove('fa-eye');
                eyeIcon.classList.add('fa-eye-slash');
            } else {
                pwdInput.type = 'password';
                eyeIcon.classList.remove('fa-eye-slash');
                eyeIcon.classList.add('fa-eye');
            }
        }
    </script>
</body>
</html>
