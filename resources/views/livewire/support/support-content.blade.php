@php
$isAr = $lang === 'ar';
$headerTitle = $content?->{"title_{$lang}"} ?? ($isAr ? 'كيف يمكننا مساعدتك؟' : 'How can we help you?');
$headerDes = $content?->{"des_{$lang}"} ?? ($isAr ? 'اختر الموضوع الذي تحتاج مساعدة فيه' : 'Choose the topic you need help with');
@endphp

<div class="bg-white text-neutral-800">
    <main class="max-w-7xl mx-auto px-6 lg:px-8 py-24">
        <!-- Header -->
        <div class="text-center mb-16 opacity-0 translate-y-6" data-animate data-delay="0">
            <h2 class="text-4xl lg:text-5xl font-extrabold text-[#0B1140] mb-4 arab">{{ $headerTitle }}</h2>
            <p class="text-lg text-neutral-600 max-w-3xl mx-auto" dir="{{ $isAr ? 'rtl' : 'ltr' }}">
                {{ $headerDes }}
            </p>
        </div>

        <div dir="{{ $isAr ? 'rtl' : 'ltr' }}" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-20">
            @forelse($items as $idx => $item)
                @php
                    $itemTitle = $item["title_{$lang}"] ?? '';
                    $itemDes = $item["des_{$lang}"] ?? '';
                    $icon = $item['icon'] ?? '';
                    $link = $item['link'] ?? '#';
                @endphp
                <div class="bg-neutral-50 rounded-3xl p-8 transition-shadow cursor-pointer opacity-0 translate-y-6" data-delay="{{ 100 + ($idx * 100) }}" data-animate>
                    @if($icon)
                        <div class="w-16 h-16 bg-[#0B1140] rounded-2xl flex items-center justify-center mb-6">
                            {!! $icon !!}
                        </div>
                    @else
                        <div class="w-16 h-16 bg-[#0B1140] rounded-2xl flex items-center justify-center mb-6">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                    @endif
                    <h3 class="text-2xl font-extrabold text-[#0B1140] mb-4 arab">{{ $itemTitle }}</h3>
                    <p class="text-neutral-600 leading-relaxed mb-4" dir="{{ $isAr ? 'rtl' : 'ltr' }}">
                        {{ $itemDes }}
                    </p>
                </div>
            @empty
                <!-- Default Cards -->
                <div class="bg-neutral-50 rounded-3xl p-8 shadow-lg transition-shadow cursor-pointer opacity-0 translate-y-6" data-delay="100" data-animate>
                    <div class="w-16 h-16 bg-[#0B1140] rounded-2xl flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-extrabold text-[#0B1140] mb-4 arab">{{ $isAr ? 'الأسئلة الشائعة' : 'FAQ' }}</h3>
                    <p class="text-neutral-600 leading-relaxed mb-4" dir="{{ $isAr ? 'rtl' : 'ltr' }}">
                        {{ $isAr ? 'ابحث عن إجابات للأسئلة الأكثر شيوعاً' : 'Find answers to the most common questions' }}
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
