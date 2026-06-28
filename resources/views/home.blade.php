@extends('layouts.app')

@section('title', 'Metro Tangerang - Suara Terpercaya Tangerang Raya')

@section('content')
<!-- Breaking News Ticker -->
@include('home.partials.breaking-news')

<!-- Trending Hashtags -->
@include('home.partials.trending-tags')

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    
    <!-- Hero / Headline Section -->
    @include('home.partials.hero')

    <!-- Ad Space (Ruang Iklan Banner Utama) -->
    @include('home.partials.ad-banner')

    <!-- Section: Laporan Utama (Modern Overlay Cards) -->
    @include('home.partials.laporan-utama')

    <!-- Main Content Grid -->
    @include('home.partials.main-grid')
</div>

<script>
(function() {
    let currentSlide = 1;
    const totalSlides = 3;

    window.setSlide = function(slideIndex) {
        // Hide all slides
        for (let i = 1; i <= totalSlides; i++) {
            const slide = document.getElementById(`slide-${i}`);
            const dot = document.getElementById(`carousel-dot-${i}`);
            if (slide) {
                if (i === slideIndex) {
                    slide.classList.remove('hidden');
                    // Fade in transition effect
                    setTimeout(() => {
                        slide.classList.remove('opacity-0');
                        slide.classList.add('opacity-100');
                    }, 50);
                } else {
                    slide.classList.add('hidden');
                    slide.classList.remove('opacity-100');
                    slide.classList.add('opacity-0');
                }
            }
            if (dot) {
                if (i === slideIndex) {
                    dot.classList.remove('bg-neutral-200');
                    dot.classList.add('bg-black');
                } else {
                    dot.classList.remove('bg-black');
                    dot.classList.add('bg-neutral-200');
                }
            }
        }
        currentSlide = slideIndex;
    }

    window.nextSlide = function() {
        if (!document.getElementById('slide-1')) {
            if (window.carouselInterval) {
                clearInterval(window.carouselInterval);
                window.carouselInterval = null;
            }
            return;
        }
        let next = currentSlide + 1;
        if (next > totalSlides) next = 1;
        window.setSlide(next);
    }

    window.prevSlide = function() {
        let prev = currentSlide - 1;
        if (prev < 1) prev = totalSlides;
        window.setSlide(prev);
    }

    // Auto transition every 8 seconds
    if (window.carouselInterval) {
        clearInterval(window.carouselInterval);
    }
    window.carouselInterval = setInterval(window.nextSlide, 8000);
})();
</script>
@endsection
