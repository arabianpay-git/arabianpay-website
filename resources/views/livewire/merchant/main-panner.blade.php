@php
    $lang = app()->getLocale();
    $isAr = $lang === 'ar';
    $title = $hero["title_{$lang}"] ?? '';
    $des   = $hero["des_{$lang}"] ?? '';
    $btn   = $hero["btn_{$lang}"] ?? '';
    $image = $hero?->image ? storage_public_url($hero->image) : asset('/img/merchant/HeroApp.svg');
    $features = is_array($hero->jsoning ?? null) ? $hero->jsoning : [];
@endphp

<div dir="{{ $isAr ? 'rtl' : 'ltr' }}" class="relative bg-neutral-5 max-w-7xl mx-auto m-4 w-full p-4 overflow-hidden rounded-3xl md:p-12 lg:p-24" style="background-image: url({{ $image }}); background-size: cover; background-position: center;">

    <div class="relative z-10 w-full h-full lg:flex-row-reverse lg:items-center">

        <div class="flex flex-col w-full mb-6">

            <h1 class="text-4xl arab font-extrabold text-wrap max-w-md leading-tight text-white md:text-6xl opacity-0 translate-y-6" data-animate data-delay="100">
                {{ $title }}
            </h1>

            <p class="mt-4 max-w-xl text-white/90 opacity-0 translate-y-6" data-animate data-delay="150">
                {{ $des }}
            </p>

            <div class="flex flex-wrap gap-6 mt-8 text-white md:gap-6 md:mt-12">
                @forelse($features as $item)
                    @php
                        $ftTitle = $item["title_{$lang}"] ?? '';
                        $ftDes   = $item["des_{$lang}"] ?? '';
                    @endphp
                    <div class="flex flex-col opacity-0 translate-y-6" data-animate data-delay="200">
                        <div class="flex space-x-1 space-x-reverse items-center">
                            <span class="text-lg font-semibold whitespace-nowrap">{{ $ftTitle }}</span>
                        </div>
                        <p class="mt-1 text-xs text-gray-200">
                            {{ $ftDes }}
                        </p>
                    </div>
                @empty
                    <div class="flex flex-col opacity-0 translate-y-6" data-animate data-delay="200">
                        <div class="flex space-x-1 space-x-reverse items-center">
                            <span class="text-lg font-semibold whitespace-nowrap">
                                {{ $isAr ? 'تمويل فوري' : 'Instant financing' }}
                            </span>
                        </div>
                        <p class="mt-1 text-xs text-gray-200">
                            {{ $isAr ? 'ابدأ تجربتك مباشرة' : 'Start instantly with ease' }}
                        </p>
                    </div>
                @endforelse
            </div>

        </div>
        <a href="{{ ($footerSocial?->google_play_url ?: $footerSocial?->app_store_url) ?: '#' }}" class="px-8 py-3 mt-6 text-lg font-medium text-neutral-800 bg-white w-auto rounded-full transition duration-300 ease-in-out opacity-0 translate-y-6" data-animate data-delay="250">
            {{ $btn ?: ($isAr ? 'انضم إلى أرابيان باي الآن' : 'Join ArabianPay now') }}
        </a>
    </div>
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

                    observer.unobserve(el);
                }
            });
        }, {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        });

        animatedElements.forEach(el => {
            observer.observe(el);
        });
    });
</script>
