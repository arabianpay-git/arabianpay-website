@php
$isAr = $lang === 'ar';
@endphp

<div class="bg-white text-neutral-800">
    <main class="max-w-7xl mx-auto px-6 lg:px-8 py-24">
        <!-- News Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" dir="{{ $isAr ? 'rtl' : 'ltr' }}">
            @forelse($news as $idx => $item)
            <div class="bg-neutral-50 rounded-3xl overflow-hidden shadow-lg hover:shadow-xl transition-shadow opacity-0 translate-y-6"
                data-delay="{{ 100 + ($idx * 100) }}" data-animate>
                @if($item->image)
                <div class="h-48 overflow-hidden">
                    <img src="{{ storage_public_url($item->image) }}" alt="{{ $item->{" title_{$lang}"} }}"
                        class="w-full h-full object-cover">
                </div>
                @endif
                <div class="p-6">
                    <div class="flex items-center gap-2 text-sm text-neutral-500 mb-3">
                        @if($item->published_at)
                        <span>{{ $item->published_at->format('Y-m-d') }}</span>
                        @endif
                        @if($item->{"author_{$lang}"})
                        <span>•</span>
                        <span>{{ $item->{"author_{$lang}"} }}</span>
                        @endif
                        @if($item->views)
                        <span>•</span>
                        <span>{{ $item->views }} {{ $isAr ? 'مشاهدة' : 'views' }}</span>
                        @endif
                    </div>
                    <h3 class="text-xl font-extrabold text-[#0B1140] mb-3 arab line-clamp-2">
                        {{ $item->{"title_{$lang}"} }}
                    </h3>
                    @if($item->{"description_{$lang}"})
                    <p class="text-neutral-600 mb-4 line-clamp-3">
                        {{ \Illuminate\Support\Str::limit($item->{"description_{$lang}"}, 120) }}
                    </p>
                    @endif
                    <a href="{{ \Mcamara\LaravelLocalization\Facades\LaravelLocalization::getLocalizedURL($lang, '/news/' . $item->id) }}"
                        class="inline-flex items-center gap-2 text-[#0B1140] font-semibold hover:underline">
                        {{ $isAr ? 'قراءة المزيد' : 'Read More' }}
                        ...
                    </a>
                </div>
            </div>
            @empty
            <div class="lg:col-span-3 text-center text-neutral-600 opacity-0 translate-y-6" data-animate
                data-delay="100">
                <p class="text-xl">{{ $isAr ? 'لا توجد أخبار متاحة حالياً' : 'No news available at the moment' }}</p>
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