@php
$lang = app()->getLocale();
$isAr = $lang === 'ar';
$currentUrl = \Mcamara\LaravelLocalization\Facades\LaravelLocalization::getLocalizedURL($lang, '/jobs');
@endphp

<div class="bg-white text-neutral-800">
    <main class="max-w-7xl mx-auto px-6 lg:px-8 py-24">
        <!-- Categories Filter -->
        <div class="mb-12 opacity-0 translate-y-6" data-animate data-delay="0" dir="{{ $isAr ? 'rtl' : 'ltr' }}">
            <h2 class="text-3xl font-extrabold text-[#0B1140] mb-6 arab">{{ $isAr ? 'الفئات' : 'Categories' }}</h2>
            <div class="flex flex-wrap gap-4">
                <a 
                    href="{{ $currentUrl }}"
                    class="px-6 py-3 rounded-full font-semibold transition-all {{ !$selectedCategory ? 'bg-[#0B1140] text-white' : 'bg-neutral-100 text-neutral-700 hover:bg-neutral-200' }}"
                >
                    {{ $isAr ? 'الكل' : 'All' }}
                </a>
                @foreach($categories as $category)
                    <a 
                        href="{{ $currentUrl }}?category={{ $category->id }}"
                        class="px-6 py-3 rounded-full font-semibold transition-all {{ $selectedCategory == $category->id ? 'bg-[#0B1140] text-white' : 'bg-neutral-100 text-neutral-700 hover:bg-neutral-200' }}"
                    >
                        {{ $category->{"name_{$lang}"} }}
                    </a>
                @endforeach
            </div>
        </div>

        <!-- Jobs List -->
        <div class="space-y-6" dir="{{ $isAr ? 'rtl' : 'ltr' }}">
            @forelse($jobs as $idx => $job)
                <div class="bg-neutral-50 rounded-3xl p-8 opacity-0 translate-y-6" data-delay="{{ 100 + ($idx * 50) }}" data-animate>
                    <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                        <div class="flex-1">
                            <h3 class="text-2xl font-extrabold text-[#0B1140] mb-2 arab">
                                {{ $job->{"name_{$lang}"} }}
                            </h3>
                            @if($job->category)
                                <span class="inline-block px-4 py-1 bg-[#0B1140] text-white text-sm rounded-full mb-3">
                                    {{ $job->category->{"name_{$lang}"} }}
                                </span>
                            @endif
                            @if($job->{"location_{$lang}"})
                                <div class="flex items-center gap-2 text-neutral-600 mt-2">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    </svg>
                                    <span>{{ $job->{"location_{$lang}"} }}</span>
                                </div>
                            @endif
                        </div>
                        <div>
                            <a href="{{ \Mcamara\LaravelLocalization\Facades\LaravelLocalization::getLocalizedURL($lang, '/jobs/' . $job->id) }}" class="inline-block px-8 py-3 bg-[#0B1140] text-white rounded-full font-semibold hover:bg-opacity-90 transition-all">
                                {{ $isAr ? 'التفاصيل' : 'View Details' }}
                            </a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="bg-neutral-50 rounded-3xl p-12 text-center opacity-0 translate-y-6" data-delay="100" data-animate>
                    <p class="text-xl text-neutral-600">
                        {{ $isAr ? 'لا توجد وظائف متاحة حالياً' : 'No jobs available at the moment' }}
                    </p>
                </div>
            @endforelse
        </div>
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
