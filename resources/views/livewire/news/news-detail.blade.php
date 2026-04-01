@php
$lang = app()->getLocale();
$isAr = $lang === 'ar';
@endphp

@if(!$news)
    <div class="bg-white text-neutral-800">
        <main class="max-w-7xl mx-auto px-6 lg:px-8 py-24">
            <div class="text-center">
                <h1 class="text-4xl font-extrabold text-[#0B1140] mb-4 arab">{{ $isAr ? 'الخبر غير موجود' : 'News Not Found' }}</h1>
                <a href="{{ \Mcamara\LaravelLocalization\Facades\LaravelLocalization::getLocalizedURL($lang, '/news') }}" class="inline-block px-8 py-3 bg-[#0B1140] text-white rounded-full font-semibold hover:bg-opacity-90 transition-all">
                    {{ $isAr ? 'العودة إلى الأخبار' : 'Back to News' }}
                </a>
            </div>
        </main>
    </div>
@else
<div class="bg-white text-neutral-800">
    <main class="max-w-5xl mx-auto px-6 lg:px-8 py-16" dir="{{ $isAr ? 'rtl' : 'ltr' }}">
        <!-- Back Button -->
        <div class="mb-6 opacity-0 translate-y-6" data-animate data-delay="0">
            <a href="{{ \Mcamara\LaravelLocalization\Facades\LaravelLocalization::getLocalizedURL($lang, '/news') }}" class="inline-flex items-center gap-2 text-[#0B1140] hover:underline">
                <svg class="w-5 h-5 {{ $isAr ? 'rotate-180' : '' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                </svg>
                <span>{{ $isAr ? 'العودة إلى الأخبار' : 'Back to News' }}</span>
            </a>
        </div>

        <!-- Header -->
        <header class="mb-8">
            <h1 class="text-4xl lg:text-5xl font-extrabold text-[#0B1140] mb-4 arab opacity-0 translate-y-6" data-animate data-delay="100">
                {{ $news->{"title_{$lang}"} }}
            </h1>
            <div class="flex flex-wrap items-center gap-3 text-sm text-neutral-500 opacity-0 translate-y-6" data-animate data-delay="150">
                @if($news->published_at)
                    <span>{{ $news->published_at->format('Y-m-d') }}</span>
                @endif
                @if($news->{"author_{$lang}"} )
                    <span>•</span>
                    <span>{{ $news->{"author_{$lang}"} }}</span>
                @endif
                @if($news->views)
                    <span>•</span>
                    <span>{{ $news->views }} {{ $isAr ? 'مشاهدة' : 'views' }}</span>
                @endif
            </div>
        </header>

        <!-- Image -->
        @if($news->image)
            <div class="mb-8 rounded-3xl overflow-hidden shadow-lg opacity-0 translate-y-6" data-animate data-delay="200">
                <img src="{{ storage_public_url($news->image) }}" alt="{{ $news->{"title_{$lang}"} }}" class="w-full h-auto object-contain">
            </div>
        @endif

        <!-- Description -->
        @if($news->{"description_{$lang}"} )
            <p class="text-lg text-neutral-700 leading-relaxed mb-6 opacity-0 translate-y-6" data-animate data-delay="250">
                {{ $news->{"description_{$lang}"} }}
            </p>
        @endif

        <!-- Content -->
        @if($news->{"content_{$lang}"} )
            <div class="prose max-w-none text-neutral-800 opacity-0 translate-y-6" data-animate data-delay="300">
                {!! nl2br(e($news->{"content_{$lang}"})) !!}
            </div>
        @endif
    </main>
</div>

<script>
    // Scroll-based animation using Intersection Observer
    document.addEventListener('DOMContentLoaded', () => {
        const animatedElements = Array.from(document.querySelectorAll('[data-animate], [data-delay]'))
            .filter(el => el.classList.contains('opacity-0') || el.classList.contains('translate-y-6'));

        // Sort by delay
        animatedElements.sort((a, b) => {
            const da = parseInt(a.getAttribute('data-delay') || '0', 10);
            const db = parseInt(b.getAttribute('data-delay') || '0', 10);
            return da - db;
        });

        // Create Intersection Observer
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const el = entry.target;
                    const delayAttr = parseInt(el.getAttribute('data-delay') || '0', 10);
                    const baseStagger = 100;
                    const index = animatedElements.indexOf(el);
                    const finalDelay = delayAttr || (index * baseStagger);

                    setTimeout(() => {
                        el.classList.remove('opacity-0', 'translate-y-6');
                        el.classList.add('opacity-100', 'translate-y-0', 'transition-all', 'duration-700', 'ease-out');
                    }, finalDelay);

                    // Unobserve after animation starts
                    observer.unobserve(el);
                }
            });
        }, {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        });

        // Observe all animated elements
        animatedElements.forEach(el => {
            observer.observe(el);
        });
    });
</script>
@endif
