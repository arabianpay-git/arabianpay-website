@php
$isAr = $lang === 'ar';
$headerTitle = $contentModel?->{"title_{$lang}"} ?? ($isAr ? 'رؤيتنا ورسالتنا' : 'Our Vision & Mission');
$headerDes = $contentModel?->{"des_{$lang}"} ?? ($isAr ? 'نسعى لبناء مستقبل مالي أفضل للجميع في المملكة العربية السعودية' : 'We strive to build a better financial future for everyone in Saudi Arabia');
$valuesTitle = $isAr ? 'قيمنا الأساسية' : 'Our Core Values';
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

        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 mb-20">
            @forelse(array_slice($items, 3, 2) as $idx => $item)
                @php
                    $itemTitle = $item["title_{$lang}"] ?? '';
                    $itemDes = $item["des_{$lang}"] ?? '';
                    $icon = $item['icon'] ?? '';
                @endphp
                <div class="bg-neutral-50 rounded-3xl p-10 shadow-lg hover:shadow-xl transition-shadow opacity-0 translate-y-6" data-delay="{{ 100 + ($idx * 100) }}" data-animate>
                    @if($icon)
                        <div class="w-16 h-16 bg-[#0B1140] rounded-2xl flex items-center justify-center mb-6">
                            {!! $icon !!}
                        </div>
                    @else
                        <div class="w-16 h-16 bg-[#0B1140] rounded-2xl flex items-center justify-center mb-6">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                            </svg>
                        </div>
                    @endif
                    <h3 class="text-3xl font-extrabold text-[#0B1140] mb-4 arab">{{ $itemTitle }}</h3>
                    <p class="text-lg text-neutral-700 leading-relaxed" dir="{{ $isAr ? 'rtl' : 'ltr' }}">
                        {{ $itemDes }}
                    </p>
                </div>
            @empty
                <!-- Vision Card -->
                <div class="bg-neutral-50 rounded-3xl p-10 shadow-lg hover:shadow-xl transition-shadow opacity-0 translate-y-6" data-delay="100" data-animate dir="{{ $isAr ? 'rtl' : 'ltr' }}">
                    <div class="w-16 h-16 bg-[#0B1140] rounded-2xl flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                        </svg>
                    </div>
                    <h3 class="text-3xl font-extrabold text-[#0B1140] mb-4 arab">{{ $isAr ? 'رؤيتنا' : 'Our Vision' }}</h3>
                    <p class="text-lg text-neutral-700 leading-relaxed">
                        {{ $isAr ? 'أن نكون المنصة المالية الرائدة في المملكة العربية السعودية والشرق الأوسط، من خلال تقديم حلول مبتكرة تسهل الحياة المالية للجميع.' : 'To be the leading financial platform in Saudi Arabia and the Middle East, by providing innovative solutions that make financial life easier for everyone.' }}
                    </p>
                </div>

                <!-- Mission Card -->
                <div class="bg-neutral-50 rounded-3xl p-10 shadow-lg hover:shadow-xl transition-shadow opacity-0 translate-y-6" data-delay="200" data-animate dir="{{ $isAr ? 'rtl' : 'ltr' }}">
                    <div class="w-16 h-16 bg-[#0B1140] rounded-2xl flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-3xl font-extrabold text-[#0B1140] mb-4 arab">{{ $isAr ? 'رسالتنا' : 'Our Mission' }}</h3>
                    <p class="text-lg text-neutral-700 leading-relaxed" dir="{{ $isAr ? 'rtl' : 'ltr' }}">
                        {{ $isAr ? 'تمكين الأفراد والشركات من خلال حلول دفع وتمويل مرنة وآمنة، تساهم في نمو الاقتصاد وازدهار الأعمال في المملكة.' : 'Empowering individuals and businesses through flexible and secure payment and financing solutions that contribute to economic growth and business prosperity in the Kingdom.' }}
                    </p>
                </div>
            @endforelse
        </div>

        <!-- Values Section -->
        <div class="text-center mb-16 opacity-0 translate-y-6" data-delay="300" data-animate>
            <h2 class="text-4xl lg:text-5xl font-extrabold text-[#0B1140] mb-12 arab">{{ $valuesTitle }}</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @forelse(array_slice($items, 5) as $idx => $item)
                    @php
                        $itemTitle = $item["title_{$lang}"] ?? '';
                        $itemDes = $item["des_{$lang}"] ?? '';
                        $icon = $item['icon'] ?? '';
                    @endphp
                    <div class="bg-neutral-50 rounded-3xl p-8 shadow-lg hover:shadow-xl transition-shadow opacity-0 translate-y-6" data-delay="{{ 400 + ($idx * 100) }}" data-animate>
                        @if($icon)
                            <div class="w-14 h-14 bg-[#0B1140] rounded-2xl flex items-center justify-center mb-6 mx-auto">
                                {!! $icon !!}
                            </div>
                        @else
                            <div class="w-14 h-14 bg-[#0B1140] rounded-2xl flex items-center justify-center mb-6 mx-auto">
                                <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                                </svg>
                            </div>
                        @endif
                        <h3 class="text-2xl font-extrabold text-[#0B1140] mb-4 arab">{{ $itemTitle }}</h3>
                        <p class="text-neutral-600 leading-relaxed" dir="{{ $isAr ? 'rtl' : 'ltr' }}">
                            {{ $itemDes }}
                        </p>
                    </div>
                @empty
                    <!-- Value 1 -->
                    <div class="bg-neutral-50 rounded-3xl p-8 shadow-lg hover:shadow-xl transition-shadow opacity-0 translate-y-6" data-delay="400" data-animate>
                        <div class="w-14 h-14 bg-[#0B1140] rounded-2xl flex items-center justify-center mb-6 mx-auto">
                            <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-extrabold text-[#0B1140] mb-4 arab">{{ $isAr ? 'الأمان' : 'Security' }}</h3>
                        <p class="text-neutral-600 leading-relaxed" dir="{{ $isAr ? 'rtl' : 'ltr' }}">
                            {{ $isAr ? 'نضمن أعلى معايير الأمان لحماية بياناتك ومعاملاتك المالية' : 'We ensure the highest security standards to protect your data and financial transactions' }}
                        </p>
                    </div>

                    <!-- Value 2 -->
                    <div class="bg-neutral-50 rounded-3xl p-8 shadow-lg hover:shadow-xl transition-shadow opacity-0 translate-y-6" data-delay="500" data-animate>
                        <div class="w-14 h-14 bg-[#0B1140] rounded-2xl flex items-center justify-center mb-6 mx-auto">
                            <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-extrabold text-[#0B1140] mb-4 arab">{{ $isAr ? 'السرعة' : 'Speed' }}</h3>
                        <p class="text-neutral-600 leading-relaxed" dir="{{ $isAr ? 'rtl' : 'ltr' }}">
                            {{ $isAr ? 'معالجة فورية لطلباتك مع نظام ذكي يقيّم طلبك خلال دقائق' : 'Instant processing of your requests with a smart system that evaluates your request within minutes' }}
                        </p>
                    </div>

                    <!-- Value 3 -->
                    <div class="bg-neutral-50 rounded-3xl p-8 shadow-lg hover:shadow-xl transition-shadow opacity-0 translate-y-6" data-delay="600" data-animate>
                        <div class="w-14 h-14 bg-[#0B1140] rounded-2xl flex items-center justify-center mb-6 mx-auto">
                            <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-extrabold text-[#0B1140] mb-4 arab">{{ $isAr ? 'الشفافية' : 'Transparency' }}</h3>
                        <p class="text-neutral-600 leading-relaxed" dir="{{ $isAr ? 'rtl' : 'ltr' }}">
                            {{ $isAr ? 'شفافية كاملة في جميع المعاملات والرسوم بدون أي تكاليف مخفية' : 'Complete transparency in all transactions and fees without any hidden costs' }}
                        </p>
                    </div>
                @endforelse
            </div>
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
