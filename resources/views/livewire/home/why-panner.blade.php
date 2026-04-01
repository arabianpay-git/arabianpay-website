@php
    $locale = app()->getLocale() ?: 'en';
    $isArabic = $locale === 'ar';
    $hero = $hero ?? null;
    $items = is_array($hero->list ?? null) ? $hero->list : [];
@endphp

<div class="bg-white text-neutral-800">
    <main class="max-w-7xl mx-auto px-6 lg:px-8 py-24">
        <!-- layout: two columns on large screens -->
        <div dir="{{ $isArabic ? 'ltr' : 'rtl' }}" class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">

            {{-- Image column.
                 If you want the image to appear after the text on large screens (i.e. swap columns for RTL),
                 keep the conditional class below. Remove the conditional if you always want image first. --}}
            <div class="{{ $isArabic ? 'lg:col-span-6' : 'lg:col-span-6 lg:order-last' }} opacity-0 translate-x-[-30px]" data-animate data-delay="100">
                <div class="bg-neutral-50 rounded-3xl p-10 flex justify-center">
                    <div class="max-w-[320px] w-full">
                        <img src="{{ $hero->image ? storage_public_url($hero->image) : asset('/img/home-marketting/iPhone-mockup.svg') }}"
                             alt="phone mock"
                             class="w-full h-auto object-contain rounded-2xl shadow-sm" />
                    </div>
                </div>
            </div>

            <!-- Right: text block (RTL when Arabic) -->
            <div dir="{{ $isArabic ? 'rtl' : 'ltr' }}"  class="sm:col-span-6">
                <div class="max-w-xl mx-auto lg:mx-0">
                    {{-- headline (prefer storing title_ar/title_en in DB) --}}
                    <h1 class="text-5xl arab max-w-sm lg:text-6xl font-extrabold leading-tight text-[#0B1140] mb-6">
                        {!! $isArabic
                            ? ($hero->title_ar ?? '4 أسباب ذكية ل<br class="hidden md:inline" /> أرابيان باي')
                            : ($hero->title_en ?? '4 smart reasons to choose<br class="hidden md:inline" /> ArabianPay') !!}
                    </h1>

                    {{-- subtext --}}
                    <p class="text-neutral-700 font-semibold max-w-sm text-lg mb-8" data-delay="220">
                        {{ $isArabic
                            ? ($hero->des_ar ?? 'استمتع بتجربة تسوق آمنة، وعمليات دفع سريعة، وطرق دفع مرنة تناسب ميزانيتك.')
                            : ($hero->des_en ?? 'Enjoy secure shopping, fast payments, and flexible payment methods that fit your budget.') }}
                    </p>

                    {{-- checklist: render items from $items if present, otherwise fallback to static list --}}
                    <ul  class="space-y-4 mb-8">
                        @if(count($items))
                            @foreach($items as $item)
                                @php
                                    $titleKey = 'title_' . $locale;
                                    $title = $item[$titleKey] ?? $item['title_en'] ?? $item['title_ar'] ?? '';
                                    $icon = $item['icon'] ?? null;
                                @endphp
                                <li class="flex items-center gap-4">
                                    <span class="flex-none w-10 h-10 rounded-full border-2 border-[#0B1140] flex items-center justify-center font-semibold arab">
                                        @if($icon)
                                            {{-- Render trusted SVG markup. Make sure icons are sanitized on input. --}}
                                            {!! $icon !!}
                                        
                                        @endif
                                    </span>

                                    <span class="text-lg text-neutral-700 font-semibold arab">
                                        {{ $title }}
                                    </span>
                                </li>
                            @endforeach
                            @endif
                    </ul>

                    <!-- CTA -->
                    <div>
                        <a href="{{ ($footerSocial?->google_play_url ?: $footerSocial?->app_store_url) ?: '#' }}" class="inline-flex underline items-center gap-3 text-lg font-medium text-[#0B1140] hover:underline">
                            {{ $isArabic ? ($hero->cta_ar ?? 'ابدأ الآن') : ($hero->cta_en ?? 'Start now') }}
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M19 12H5.00001" stroke="#282828" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M11 18L5.00001 12" stroke="#282828" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M11 6L5.00001 12" stroke="#282828" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </main>
</div>

<script>
    // Scroll-based animation using Intersection Observer
    document.addEventListener('DOMContentLoaded', () => {
        const animatedElements = Array.from(document.querySelectorAll('[data-animate], [data-delay]'))
            .filter(el =>
                el.classList.contains('opacity-0') ||
                el.classList.contains('translate-y-6') ||
                el.classList.contains('translate-x-[-30px]') ||
                el.classList.contains('translate-x-[30px]')
            );

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
                        el.classList.remove('opacity-0', 'translate-y-6', 'translate-x-[-30px]', 'translate-x-[30px]');
                        el.classList.add('opacity-100', 'translate-y-0', 'translate-x-0', 'transition-all', 'duration-700', 'ease-out');
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