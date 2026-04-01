@php
    $lang = app()->getLocale();
    $isAr = $lang === 'ar';
    $des   = $hero["des_{$lang}"] ?? '';
    $btn   = $hero["btn_{$lang}"] ?? ($isAr ? 'حمل التطبيق الآن' : 'Download the app');
    $items = is_array($hero->jsoning ?? null) ? $hero->jsoning : [];
@endphp

<div class="relative max-w-7xl mx-auto my-12 p-8 md:p-16 bg-[#F4F9FF] rounded-3xl overflow-hidden">

    <div class="grid grid-cols-1 md:grid-cols-3 gap-12">

        <div class="md:col-span-2 space-y-8  max-w-2xl opacity-0 translate-x-[-30px]" data-animate data-delay="100">

            <p class="text-xl text-gray-700" dir="{{ $isAr ? 'rtl' : 'ltr' }}">
                {{ $des }}
            </p>

            <hr class="border-t border-gray-200">

            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 space-y-3">
                @forelse($items as $item)
                    @php
                        $title = $item["title_{$lang}"] ?? '';
                        $desc  = $item["des_{$lang}"] ?? '';
                    @endphp
                    <div class="flex space-x-4 space-x-reverse opacity-0 translate-y-6" data-animate data-delay="150" dir="{{ $isAr ? 'rtl' : 'ltr' }}">
                        <div class="p-3 rounded-full text-indigo-600">
                            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5 13l4 4L19 7" stroke="#383838" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-lg text-gray-800 font-medium">
                                {{ $title }}
                            </p>
                            <p class="text-sm text-gray-600">
                                {{ $desc }}
                            </p>
                        </div>
                    </div>
                @empty
                    <div class="flex space-x-4 space-x-reverse opacity-0 translate-y-6" data-animate data-delay="150" dir="{{ $isAr ? 'rtl' : 'ltr' }}">
                        <div class="p-3 rounded-full text-indigo-600">
                            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5 13l4 4L19 7" stroke="#383838" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <p class="text-lg text-gray-800 font-medium">
                            {{ $isAr ? 'ميزة افتراضية' : 'Default feature' }}
                        </p>
                    </div>
                @endforelse
            </div>

        </div>

        <div class="md:col-span-1 flex flex-col items-end justify-between min-h-[300px] opacity-0 translate-x-[30px]" data-animate data-delay="150">

            <h1 class="text-7xl arab md:text-8xl font-extrabold text-[#111827] leading-none" dir="{{ $isAr ? 'rtl' : 'ltr' }}">
                {{ $hero["title_{$lang}"] ?? ($isAr ? "إختارها...\nأدفعها." : "Choose it...\nPay it.") }}
            </h1>

            <a href="{{ ($footerSocial?->google_play_url ?: $footerSocial?->app_store_url) ?: '#' }}" @if($footerSocial?->google_play_url || $footerSocial?->app_store_url) target="_blank" rel="noopener noreferrer" @endif class="inline-block px-8 py-3 mt-8 bg-[#020044] text-white text-lg font-semibold rounded-full hover:bg-[#020044e6] transition duration-300" dir="{{ $isAr ? 'rtl' : 'ltr' }}">
                {{ $btn }}
            </a>

        </div>

    </div>

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

                    observer.unobserve(el);
                }
            });
        }, {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        });

        animatedElements.forEach(el => observer.observe(el));
    });
</script>
