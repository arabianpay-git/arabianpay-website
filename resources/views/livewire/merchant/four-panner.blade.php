@php
$lang = app()->getLocale();
$isAr = $lang === 'ar';
$accent = '#0b0947';
$title = $hero["title_{$lang}"] ?? ($isAr ? 'كيف تحصل على التمويل بسهولة؟' : 'How to get financing easily?');
$des = $hero["des_{$lang}"] ?? '';
$sup = $hero["sup_{$lang}"] ?? null;
$btnMain = $hero["btna"] ?? ($isAr ? 'تنزيل أندرويد' : 'Download Android');
$btnSecond = $hero["btng"] ?? ($isAr ? 'تنزيل آيفون' : 'Download iOS');
$ctaTitle = $hero["btnd_{$lang}"] ?? ($isAr ? 'ابدأ الآن' : 'Start now');
$ctaSub = $hero["subdes_{$lang}"] ?? '';
$steps = is_array($hero->jsoning ?? null) ? $hero->jsoning : [];
@endphp

<style>
    :root {
        --accent: #0b0947;
        --muted: #e9eefc;
    }

</style>
<div class="bg-neutral-50 text-neutral-900">

    <div class="max-w-7xl mx-auto px-6 py-16">

        <!-- Header -->
        <div dir="{{ $isAr ? 'rtl' : 'ltr' }}" class="mb-10">
            <h1 class="text-5xl arab md:text-5xl font-extrabold text-[var(--accent)] leading-tight">{{ $title }}</h1>
            <p class="mt-3 text-lg text-neutral-900 text-md max-w-2xl">
                {{ $des }}
                @if($sup)
                <span class="font-semibold text-[var(--accent)]">{{ $sup }}</span>
                @endif
            </p>
        </div>

        <!-- Big Card: two columns -->
        <div class="bg-white rounded-3xl grid grid-cols-1 md:grid-cols-2 items-stretch">

            <!-- Left content -->
            <div dir="{{ $isAr ? 'rtl' : 'ltr' }}" class="p-10 flex flex-col justify-center">
                <div class="grid items-center gap-3 mb-4">
                    <div class="w-6 h-6 rounded-full border-2 border-neutral-500 flex items-center justify-center text-sm font-medium text-[var(--accent)]">
                        {{ $hero->number ?? 1 }}
                    </div>
                    <h2 class="text-2xl md:text-3xl arab font-extrabold text-[var(--accent)]">
                        {{ $hero["title_{$lang}"] ?? ($isAr ? 'حمل تطبيق ArabianPay' : 'Download ArabianPay app') }}
                    </h2>
                </div>
                <p class="text-neutral-900 text-md mb-6">
                    {{ $hero["des_{$lang}"] ?? ($isAr ? 'ابدأ بتحميل التطبيق وابدأ رحلتك التمويلية.' : 'Download the app and start your financing journey.') }}
                </p>

                <div class="space-y-3 mx-auto w-full max-w-lg">
                    <a href="{{ $footerSocial?->google_play_url ?: '#' }}" @if($footerSocial?->google_play_url) target="_blank" rel="noopener noreferrer" @endif class="flex items-center justify-center gap-3 w-full border border-[var(--accent)] rounded-full py-3 px-5 text-[var(--accent)] font-semibold hover:bg-[var(--accent)] hover:text-white transition">
                        <span class="text-xl">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_1127_34777)">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M23.932 18.4503L23.926 18.4103C23.7931 17.5557 23.5674 16.7181 23.253 15.9123C22.8906 14.9814 22.4136 14.0993 21.833 13.2863C20.9081 11.9869 19.7348 10.8837 18.381 10.0403L18.388 10.0283L18.394 10.0163L18.758 9.38931L19.121 8.76231L19.831 7.53731C20.002 7.24431 20.172 6.95031 20.341 6.65731C20.4749 6.40513 20.5058 6.11091 20.4273 5.83642C20.3489 5.56193 20.1671 5.3285 19.9202 5.18513C19.6734 5.04177 19.3805 4.99961 19.1033 5.06751C18.826 5.13542 18.5858 5.3081 18.433 5.54931L17.923 6.42931L17.213 7.65431C17.093 7.86431 16.971 8.07331 16.85 8.28231L16.486 8.90931L16.461 8.95331L16.407 9.04631L16.393 9.04031C14.9928 8.49329 13.5024 8.21346 11.999 8.21531H11.875C10.417 8.22911 8.97356 8.50763 7.61505 9.03731L7.58505 8.98731L7.54105 8.90931L7.17805 8.28331C7.05661 8.07403 6.93528 7.8647 6.81405 7.65531L6.10405 6.43031C5.93305 6.13731 5.76305 5.84331 5.59405 5.55031C5.5211 5.42387 5.42373 5.31322 5.30759 5.2248C5.19145 5.13637 5.05888 5.07195 4.91759 5.03528C4.77631 4.99861 4.62913 4.99042 4.48465 5.0112C4.34017 5.03198 4.20127 5.08131 4.07605 5.15631C3.86057 5.28317 3.69485 5.47979 3.6063 5.71363C3.51775 5.94747 3.51166 6.20454 3.58905 6.44231C3.61305 6.51631 3.64505 6.58831 3.68505 6.65731L4.19505 7.53731L4.86905 8.69831V8.70031L4.90605 8.76231C5.02605 8.97231 5.14805 9.18131 5.26905 9.39031L5.63205 10.0173L5.63505 10.0223L5.63805 10.0273C2.9549 11.695 1.02965 14.3451 0.273047 17.4123C0.190501 17.7509 0.122439 18.0929 0.0690469 18.4373L0.0670469 18.4513C0.0400469 18.6263 0.0170469 18.8023 -0.00195312 18.9803H23.998C23.978 18.8023 23.956 18.6263 23.929 18.4513H23.931L23.932 18.4503ZM18.242 15.6603C18.722 15.3403 18.792 14.6003 18.397 14.0083C18.004 13.4163 17.295 13.1943 16.815 13.5143C16.335 13.8343 16.265 14.5743 16.659 15.1663C17.053 15.7593 17.762 15.9803 18.242 15.6603ZM7.20405 13.5163C7.68405 13.8363 7.75405 14.5763 7.36005 15.1683C6.96605 15.7613 6.25705 15.9823 5.77705 15.6633C5.29705 15.3433 5.22705 14.6033 5.62105 14.0113C6.01505 13.4183 6.72405 13.1973 7.20405 13.5163Z" fill="#19194D" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_1127_34777">
                                        <rect width="24" height="24" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </span>
                        {{ $btnMain }}
                    </a>
                    <a href="{{ $footerSocial?->app_store_url ?: '#' }}" @if($footerSocial?->app_store_url) target="_blank" rel="noopener noreferrer" @endif class="flex items-center justify-center gap-3 w-full border border-[var(--accent)] rounded-full py-3 px-5 text-[var(--accent)] font-semibold hover:bg-[var(--accent)] hover:text-white transition">
                        <span class="text-xl">
                            <svg width="20" height="24" viewBox="0 0 20 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M18.916 8.182C18.777 8.29 16.319 9.675 16.319 12.755C16.319 16.317 19.447 17.577 19.54 17.608C19.526 17.685 19.044 19.334 17.891 21.014C16.864 22.493 15.791 23.969 14.159 23.969C12.527 23.969 12.107 23.021 10.223 23.021C8.386 23.021 7.733 24 6.241 24C4.748 24 3.706 22.632 2.508 20.952C1.121 18.979 0 15.914 0 13.004C0 8.338 3.034 5.864 6.02 5.864C7.606 5.864 8.929 6.905 9.925 6.905C10.873 6.905 12.352 5.801 14.157 5.801C14.841 5.801 17.298 5.864 18.916 8.182ZM13.3 3.826C14.046 2.94 14.574 1.711 14.574 0.482C14.574 0.312 14.56 0.139 14.529 0C13.314 0.046 11.869 0.809 10.998 1.82C10.314 2.597 9.675 3.826 9.675 5.072C9.675 5.259 9.707 5.446 9.721 5.506C9.798 5.521 9.923 5.537 10.047 5.537C11.137 5.537 12.507 4.807 13.3 3.826Z" fill="#19194D" />
                            </svg>

                        </span>
                        {{ $btnSecond }}
                    </a>
                </div>
            </div>

            <!-- Right visual panel -->
            <div class="bg-[#C4D3FF] rounded-3xl p-10 flex items-center justify-center">
                <div class="space-y-6 text-center">
                    <a href="{{ $footerSocial?->app_store_url ?: '#' }}" @if($footerSocial?->app_store_url) target="_blank" rel="noopener noreferrer" @endif class="rounded-xl flex gap-2 justify-center items-center bg-[#020044] text-white px-6 py-4 text-lg font-semibold shadow-lg w-60 mx-auto">
                        <svg width="29" height="25" viewBox="0 0 49 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M40.5084 16.9118C40.5379 14.681 41.1448 12.4937 42.2727 10.5535C43.4007 8.61327 45.013 6.98311 46.9596 5.81469C45.723 4.09039 44.0915 2.67136 42.1949 1.67031C40.2982 0.66926 38.1886 0.11376 36.0336 0.0479336C31.4366 -0.423171 26.98 2.73351 24.6374 2.73351C22.2495 2.73351 18.6428 0.094709 14.7589 0.172712C12.2468 0.251953 9.79844 0.965165 7.65253 2.24286C5.50662 3.52055 3.73631 5.31915 2.51408 7.4634C-2.78022 16.4126 1.16886 29.5649 6.24045 36.7989C8.77789 40.3411 11.7434 44.2978 15.6238 44.1575C19.4209 44.0038 20.8391 41.7936 25.4226 41.7936C29.9635 41.7936 31.294 44.1575 35.2531 44.0683C39.3277 44.0038 41.8948 40.5104 44.3432 36.9346C46.1664 34.4106 47.5693 31.6211 48.5 28.6693C46.1328 27.6919 44.1127 26.0557 42.6916 23.9649C41.2704 21.874 40.5112 19.4211 40.5084 16.9118Z" fill="white" />
                        </svg>
                        <span>App Store</span>
                    </a>
                    <a href="{{ $footerSocial?->google_play_url ?: '#' }}" @if($footerSocial?->google_play_url) target="_blank" rel="noopener noreferrer" @endif class="flex items-center gap-2 justify-center rounded-xl bg-[#020044] text-white px-6 py-4 text-lg font-semibold shadow-lg w-60 mx-auto">
                        <svg width="31" height="30" viewBox="0 0 51 59" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M23.7762 27.7938L0.216797 53.3636C0.21901 53.3681 0.219009 53.3749 0.221222 53.3794C0.944799 56.1559 3.42311 58.1992 6.3661 58.1992C7.54329 58.1992 8.64746 57.8734 9.59453 57.3031L9.66977 57.2579L36.1876 41.6105L23.7762 27.7938Z" fill="#EA4335" />
                            <path d="M47.6095 23.4412L47.5874 23.4254L36.1385 16.6392L23.2402 28.3764L36.185 41.6094L47.5719 34.8911C49.5678 33.7868 50.9242 31.6349 50.9242 29.1548C50.9242 26.6884 49.5877 24.5478 47.6095 23.4412Z" fill="#FBBC04" />
                            <path d="M0.216852 4.8327C0.0752343 5.36673 0 5.9279 0 6.50718V51.6911C0 52.2703 0.0752343 52.8315 0.219065 53.3633L24.5861 28.4474L0.216852 4.8327Z" fill="#4285F4" />
                            <path d="M23.951 29.1016L36.1434 16.6357L9.65649 0.931789C8.69393 0.341196 7.56984 0.00177383 6.36831 0.00177383C3.42532 0.00177383 0.942585 2.04962 0.219008 4.82836C0.219008 4.83062 0.216797 4.83288 0.216797 4.83514L23.951 29.1016Z" fill="#34A853" />
                        </svg>
                        <span>Google Play</span>
                    </a>
                    <div class="text-[var(--accent)] font-semibold">
                        {{ $ctaTitle }}
                        <div class="text-sm text-[var(--accent)]">{{ $ctaSub }}</div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Steps grid -->
        <div dir="{{ $isAr ? 'rtl' : 'ltr' }}" class="mt-10 grid grid-cols-1 md:grid-cols-3 gap-6">
            @forelse($steps as $idx => $item)
            @php
            $stepNum = $item['number'] ?? ($idx + 2);
            $stepTitle = $item["title_{$lang}"] ?? '';
            $stepDes = $item["des_{$lang}"] ?? '';
            @endphp
            <div class="bg-white p-8 rounded-3xl border border-transparent hover:shadow-md transition text-right opacity-0 translate-y-6" data-animate data-delay="{{ 250 + ($idx * 50) }}">
                <div class="grid items-start gap-4">
                    <div class="w-6 h-6 rounded-full border-2 border-neutral-500 flex items-center justify-center text-sm font-medium text-[var(--accent)]">{{ $stepNum }}</div>
                    <div>
                        <h3 class="text-3xl arab font-extrabold text-[var(--accent)] mb-2">{{ $stepTitle }}</h3>
                        <p class="text-neutral-900 text-md">{{ $stepDes }}</p>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-span-3 text-center text-neutral-600 opacity-0 translate-y-6" data-animate data-delay="250">
                {{ $isAr ? 'لا توجد خطوات بعد' : 'No steps yet' }}
            </div>
            @endforelse
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
            threshold: 0.1
            , rootMargin: '0px 0px -50px 0px'
        });

        animatedElements.forEach(el => observer.observe(el));
    });

</script>
