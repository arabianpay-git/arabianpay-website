@php
$isAr = $lang === 'ar';
$title = $map?->{"title_{$lang}"} ?? ($isAr ? 'حضورنا في المملكة' : 'Our Presence in the Kingdom');
$des1 = $map?->{"des_{$lang}"} ?? ($isAr ? 'أرابيان باي موجودة في جميع أنحاء المملكة العربية السعودية، نقدم خدماتنا للموردين والتجار في جميع المدن والمناطق.' : 'ArabianPay is present throughout Saudi Arabia, providing services to suppliers and merchants in all cities and regions.');
$des2 = $map?->{"des2_{$lang}"} ?? ($isAr ? 'نحن ملتزمون بتوسيع نطاق خدماتنا لتغطية جميع أنحاء المملكة، مع ضمان تقديم نفس مستوى الجودة والتميز في كل مكان.' : 'We are committed to expanding our services to cover all parts of the Kingdom, while ensuring the same level of quality and excellence everywhere.');
$mapImage = $map?->image ? storage_public_url($map->image) : asset('img/ImagesWeb/ImagMapSa.svg');
@endphp

<div class="bg-white text-neutral-800">
    <main class="max-w-7xl mx-auto px-6 lg:px-8 py-24">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            <!-- Left: Text Content -->
            <div dir="{{ $isAr ? 'rtl' : 'ltr' }}" class="lg:col-span-6 opacity-0 translate-x-[-30px]" data-animate data-delay="0">
                <div class="max-w-xl mx-auto lg:mx-0">
                    <h2 class="text-5xl arab lg:text-6xl font-extrabold leading-tight text-[#0B1140] mb-6">
                        {{ $title }}
                    </h2>
                    <p class="text-neutral-700 font-semibold text-lg mb-6" dir="{{ $isAr ? 'rtl' : 'ltr' }}">
                        {{ $des1 }}
                    </p>
                    <p class="text-lg text-neutral-600 leading-relaxed mb-8" dir="{{ $isAr ? 'rtl' : 'ltr' }}">
                        {{ $des2 }}
                    </p>
                    
                    <!-- Stats -->
                    <div class="grid grid-cols-2 gap-6 mt-8">
                        @forelse($stats as $idx => $stat)
                            @php
                                $number = $stat['number'] ?? '0+';
                                $label = $stat["label_{$lang}"] ?? '';
                            @endphp
                            <div class="bg-neutral-50 rounded-3xl p-6 shadow-lg opacity-0 translate-y-6" data-delay="{{ 200 + ($idx * 50) }}" data-animate>
                                <div class="text-4xl font-extrabold text-[#0B1140] mb-2 arab">{{ $number }}</div>
                                <div class="text-neutral-600 font-semibold" dir="{{ $isAr ? 'rtl' : 'ltr' }}">{{ $label }}</div>
                            </div>
                        @empty
                            <div class="bg-neutral-50 rounded-3xl p-6 shadow-lg opacity-0 translate-y-6" data-delay="200" data-animate>
                                <div class="text-4xl font-extrabold text-[#0B1140] mb-2 arab">1000+</div>
                                <div class="text-neutral-600 font-semibold" dir="{{ $isAr ? 'rtl' : 'ltr' }}">{{ $isAr ? 'مورد نشط' : 'Active Supplier' }}</div>
                            </div>
                            <div class="bg-neutral-50 rounded-3xl p-6 shadow-lg opacity-0 translate-y-6" data-delay="250" data-animate>
                                <div class="text-4xl font-extrabold text-[#0B1140] mb-2 arab">5000+</div>
                                <div class="text-neutral-600 font-semibold" dir="{{ $isAr ? 'rtl' : 'ltr' }}">{{ $isAr ? 'تاجر مسجل' : 'Registered Merchant' }}</div>
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>

            <!-- Right: Map Image -->
            <div class="lg:col-span-6 opacity-0 translate-x-[30px]" data-delay="100" data-animate>
                <div class="bg-neutral-50 rounded-3xl p-10 flex justify-center">
                    <img src="{{ $mapImage }}" 
                         alt="{{ $isAr ? 'خريطة السعودية' : 'Saudi Arabia Map' }}" 
                         class="w-full h-auto object-contain rounded-2xl shadow-sm"
                         onerror="this.src='{{ asset('img/ImagesWeb/bg.svg') }}';">
                </div>
            </div>
        </div>
    </main>
</div>

<script>
    // Scroll-based animation using Intersection Observer
    document.addEventListener('DOMContentLoaded', () => {
        const animatedElements = Array.from(document.querySelectorAll('[data-animate], [data-delay]'))
            .filter(el => el.classList.contains('opacity-0') || el.classList.contains('translate-x-[-30px]') || el.classList.contains('translate-x-[30px]') || el.classList.contains('translate-y-6'));

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
                        el.classList.remove('opacity-0', 'translate-x-[-30px]', 'translate-x-[30px]', 'translate-y-6');
                        el.classList.add('opacity-100', 'translate-x-0', 'translate-y-0', 'transition-all', 'duration-700', 'ease-out');
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
