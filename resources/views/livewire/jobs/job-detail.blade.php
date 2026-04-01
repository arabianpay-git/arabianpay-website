@php
$lang = app()->getLocale();
$isAr = $lang === 'ar';
@endphp

@if(!$job)
    <div class="bg-white text-neutral-800">
        <main class="max-w-7xl mx-auto px-6 lg:px-8 py-24">
            <div class="text-center">
                <h1 class="text-4xl font-extrabold text-[#0B1140] mb-4 arab">{{ $isAr ? 'الوظيفة غير موجودة' : 'Job Not Found' }}</h1>
                <a href="{{ \Mcamara\LaravelLocalization\Facades\LaravelLocalization::getLocalizedURL($lang, '/jobs') }}" class="inline-block px-8 py-3 bg-[#0B1140] text-white rounded-full font-semibold hover:bg-opacity-90 transition-all">
                    {{ $isAr ? 'العودة إلى الوظائف' : 'Back to Jobs' }}
                </a>
            </div>
        </main>
    </div>
@else
<div class="bg-white text-neutral-800">
    <main class="max-w-7xl mx-auto px-6 lg:px-8 py-24">
        <!-- Back Button -->
        <div class="mb-8 opacity-0 translate-y-6" data-animate data-delay="0" dir="{{ $isAr ? 'rtl' : 'ltr' }}">
            <a href="{{ \Mcamara\LaravelLocalization\Facades\LaravelLocalization::getLocalizedURL($lang, '/jobs') }}" class="inline-flex items-center gap-2 text-[#0B1140] hover:underline">
                <svg class="w-5 h-5 {{ $isAr ? 'rotate-180' : '' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                </svg>
                <span>{{ $isAr ? 'العودة إلى الوظائف' : 'Back to Jobs' }}</span>
            </a>
        </div>

        <!-- Job Header -->
        <div class="bg-neutral-50 rounded-3xl p-8 mb-8 opacity-0 translate-y-6" data-animate data-delay="100" dir="{{ $isAr ? 'rtl' : 'ltr' }}">
            <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                <div class="flex-1">
                    <h1 class="text-4xl font-extrabold text-[#0B1140] mb-4 arab">
                        {{ $job->{"name_{$lang}"} ?? ($isAr ? 'وظيفة' : 'Job') }}
                    </h1>
                    @if($job->category)
                        <span class="inline-block px-4 py-2 bg-[#0B1140] text-white text-sm rounded-full mb-3">
                            {{ $job->category->{"name_{$lang}"} }}
                        </span>
                    @endif
                    <div class="flex flex-wrap gap-4 mt-4">
                        @if($job->{"location_{$lang}"})
                            <div class="flex items-center gap-2 text-neutral-600">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                                <span>{{ $job->{"location_{$lang}"} }}</span>
                            </div>
                        @endif
                        @if($job->{"type_{$lang}"})
                            <div class="flex items-center gap-2 text-neutral-600">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                <span>{{ $job->{"type_{$lang}"} }}</span>
                            </div>
                        @endif
                        @if($job->{"experience_{$lang}"})
                            <div class="flex items-center gap-2 text-neutral-600">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                                <span>{{ $job->{"experience_{$lang}"} }}</span>
                            </div>
                        @endif
                        @if($job->{"salary_{$lang}"})
                            <div class="flex items-center gap-2 text-[#0B1140] font-semibold">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                <span>{{ $job->{"salary_{$lang}"} }}</span>
                            </div>
                        @endif
                    </div>
                </div>
                <div>
                    <button class="px-8 py-4 bg-[#0B1140] text-white rounded-full font-semibold text-lg hover:bg-opacity-90 transition-all">
                        {{ $isAr ? 'تقديم طلب' : 'Apply Now' }}
                    </button>
                </div>
            </div>
        </div>

        <!-- Job Description -->
        @if($job->{"description_{$lang}"})
            <div class="mb-8 opacity-0 translate-y-6" data-animate data-delay="200" dir="{{ $isAr ? 'rtl' : 'ltr' }}">
                <h2 class="text-3xl font-extrabold text-[#0B1140] mb-4 arab">{{ $isAr ? 'وصف الوظيفة' : 'Job Description' }}</h2>
                <div class="bg-neutral-50 rounded-3xl p-8">
                    <div class="text-neutral-700 leading-relaxed whitespace-pre-line">
                        {{ $job->{"description_{$lang}"} }}
                    </div>
                </div>
            </div>
        @endif

        <!-- Job Requirements -->
        @if($job->{"requirements_{$lang}"})
            <div class="mb-8 opacity-0 translate-y-6" data-animate data-delay="300" dir="{{ $isAr ? 'rtl' : 'ltr' }}">
                <h2 class="text-3xl font-extrabold text-[#0B1140] mb-4 arab">{{ $isAr ? 'المتطلبات' : 'Requirements' }}</h2>
                <div class="bg-neutral-50 rounded-3xl p-8">
                    <div class="text-neutral-700 leading-relaxed whitespace-pre-line">
                        {{ $job->{"requirements_{$lang}"} }}
                    </div>
                </div>
            </div>
        @endif

        <!-- Apply Button -->
        <div class="text-center opacity-0 translate-y-6" data-animate data-delay="400" dir="{{ $isAr ? 'rtl' : 'ltr' }}">
            <button class="px-12 py-4 bg-[#0B1140] text-white rounded-full font-semibold text-lg hover:bg-opacity-90 transition-all transform hover:scale-105">
                {{ $isAr ? 'تقديم طلب للوظيفة' : 'Apply for this Job' }}
            </button>
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
@endif
