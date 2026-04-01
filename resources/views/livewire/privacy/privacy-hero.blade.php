@php
$lang = app()->getLocale();
$isAr = $lang === 'ar';
$title = $polices?->{"title_{$lang}"} ?? ($isAr ? 'سياسة الخصوصية' : 'Privacy Policy');
$cards = is_array($polices->jsoning_hero ?? null) ? $polices->jsoning_hero : [];
@endphp

<div dir="{{ $isAr ? 'rtl' : 'ltr' }}" class="relative max-w-7xl mx-auto m-4 w-full p-4 overflow-hidden rounded-3xl md:p-12 lg:p-24" style="background: linear-gradient(135deg, #0B1140 0%, #1e3a8a 50%, #3b82f6 100%);">

    <div class="relative z-10  w-full h-full lg:flex-row-reverse lg:items-center">

        <div class="flex flex-col w-full">

            <h1 class="text-4xl arab font-extrabold  text-wrap max-w-md leading-tight text-white md:text-6xl opacity-0 translate-y-6" data-animate data-delay="100">
                {{ $title }}
            </h1>

            <div class="flex flex-wrap gap-6 mt-8 text-white md:gap-6 md:mt-12">
                @forelse($cards as $idx => $card)
                    @php
                        $cardTitle = $card["title_{$lang}"] ?? '';
                        $cardDes = $card["des_{$lang}"] ?? '';
                        $icon = $card['icon'] ?? '';
                    @endphp
                    <div class="flex flex-col opacity-0 translate-y-6" data-delay="{{ 150 + ($idx * 50) }}" data-animate>
                        <div class="flex space-x-1 space-x-reverse">
                            @if($icon)
                                <span class="text-xl">{!! $icon !!}</span>
                            @else
                                <span class="text-xl"><svg width="21" height="19" viewBox="0 0 21 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 17.0212L2.3 13.1212C-0.0239997 9.68421 0.874 5.24921 4.4 2.74721C7.926 0.246207 12.99 0.451206 16.245 3.22721C19.5 6.00421 19.94 10.4932 17.274 13.7282C14.608 16.9632 9.659 17.9432 5.7 16.0212L1 17.0212Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>
                            @endif
                            <span class="text-lg font-semibold whitespace-nowrap">{{ $cardTitle }}</span>
                        </div>
                        <p class="mt-1 {{ $idx === 0 ? 'text-sm' : 'text-xs' }} text-gray-300">
                            {{ $cardDes }}
                        </p>
                    </div>
                @empty
                    <div class="flex flex-col opacity-0 translate-y-6" data-delay="150" data-animate>
                        <div class="flex space-x-1 space-x-reverse">
                            <span class="text-xl"><svg width="21" height="19" viewBox="0 0 21 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 17.0212L2.3 13.1212C-0.0239997 9.68421 0.874 5.24921 4.4 2.74721C7.926 0.246207 12.99 0.451206 16.245 3.22721C19.5 6.00421 19.94 10.4932 17.274 13.7282C14.608 16.9632 9.659 17.9432 5.7 16.0212L1 17.0212Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </span>
                            <span class="text-lg font-semibold whitespace-nowrap">{{ $isAr ? 'حماية البيانات' : 'Data Protection' }}</span>
                        </div>
                        <p class="mt-1 text-sm text-gray-300">
                            {{ $isAr ? 'نحمي معلوماتك الشخصية بأعلى معايير الأمان' : 'We protect your personal information with the highest security standards' }}
                        </p>
                    </div>
                @endforelse
            </div>
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
