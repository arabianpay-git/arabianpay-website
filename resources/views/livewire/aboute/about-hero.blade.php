@php
$isAr = $lang === 'ar';
$title = $panner?->{"title_{$lang}"} ?? ($isAr ? 'عن أرابيان باي' : 'About ArabianPay');
$image = $panner?->{"image_{$lang}"} ? storage_public_url($panner->{"image_{$lang}"}) : asset('/img/merchant/HeroApp.svg');
$btn = $panner?->{"btn_{$lang}"} ?? ($isAr ? 'اعرف المزيد' : 'Learn More');
@endphp

<div dir="{{ $isAr ? 'rtl' : 'ltr' }}" class="relative bg-neutral-5 max-w-7xl mx-auto m-4 w-full p-4 overflow-hidden rounded-3xl md:p-12 lg:p-24" style="background-image: url({{ $image }}); background-size: cover; background-position: center;">

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
                    <p class="mt-1 text-sm text-gray-300">
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
                            <span class="text-lg font-semibold whitespace-nowrap">{{ $isAr ? 'منصة رائدة' : 'Leading Platform' }}</span>
                        </div>
                        <p class="mt-1 text-sm text-gray-300">
                            {{ $isAr ? 'منصة مالية وتمويلية رائدة في المملكة العربية السعودية' : 'Leading financial and financing platform in Saudi Arabia' }}
                        </p>
                    </div>
                @endforelse
            </div>

        </div>
        <a href="{{ ($footerSocial?->google_play_url ?: $footerSocial?->app_store_url) ?: '#' }}" class="px-8 py-3 mt-12 text-lg font-medium text-neutral-800 bg-white w-auto rounded-full transition duration-300 ease-in-out opacity-0 translate-y-6" data-delay="300" data-animate>
            {{ $btn }}
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
