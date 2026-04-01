@php
    $lang = app()->getLocale();
    $isAr = $lang === 'ar';
    $title = $hero["title_{$lang}"] ?? '';
    $des   = $hero["des_{$lang}"] ?? '';
    $items = is_array($hero->jsoning ?? null) ? $hero->jsoning : [];
@endphp

<div class="py-16 md:py-24 bg-neutral-50 text-right" dir="{{ $isAr ? 'rtl' : 'ltr' }}">

    <div class="max-w-6xl px-4 mx-auto">

        <div class="max-w-3xl mx-auto mb-12 text-center opacity-0 translate-y-6" data-animate data-delay="100">
            <h2 class="text-4xl arab font-extrabold leading-relaxed text-neutral-900 md:text-4xl">
                {{ $title }}
            </h2>
            <p class="mt-4 text-lg text-gray-800">
                {{ $des }}
            </p>
        </div>

        <div dir="{{ $isAr ? 'rtl' : 'ltr' }}" class="flex flex-col items-center justify-center gap-12 mt-16 md:flex-row">
            @forelse($items as $item)
                @php
                    $number = $item['number'] ?? '';
                    $label  = $item["title_{$lang}"] ?? '';
                @endphp
                <div class="flex flex-col items-center opacity-0 translate-y-6" data-animate data-delay="{{ 150 + ($loop->index * 50) }}">
                    <p class="text-3xl font-bold text-neutral-900">{{ $number }}</p>
                    <p class="mt-2 text-sm font-medium text-gray-700">{{ $label }}</p>
                </div>
            @empty
                <div class="flex flex-col items-center opacity-0 translate-y-6" data-animate data-delay="150">
                    <p class="text-3xl font-bold text-neutral-900">20%</p>
                    <p class="mt-2 text-sm font-medium text-gray-700">
                        {{ $isAr ? 'زيادة في التحويل' : 'Conversion uplift' }}
                    </p>
                </div>
            @endforelse
        </div>
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

        animatedElements.forEach(el => observer.observe(el));
    });
</script>
