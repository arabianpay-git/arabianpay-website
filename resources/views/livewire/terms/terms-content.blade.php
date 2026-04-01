@php
$isAr = $lang === 'ar';
$intro1 = $condition?->{"intro_{$lang}"} ?? '';
$intro2 = $condition?->{"text_{$lang}"} ?? '';
@endphp

<div class="bg-white text-neutral-800">
    <main class="max-w-7xl mx-auto px-6 lg:px-8 py-24">
        <!-- Introduction -->
        @if($intro1 || $intro2)
            <div class="mb-16 opacity-0 translate-y-6" data-animate data-delay="0" dir="{{ $isAr ? 'rtl' : 'ltr' }}">
                @if($intro1)
                    <p class="text-lg text-neutral-700 leading-relaxed mb-6 max-w-4xl">
                        {!! nl2br(e($intro1)) !!}
                    </p>
                @endif
                @if($intro2)
                    <p class="text-lg text-neutral-700 leading-relaxed max-w-4xl">
                        {!! nl2br(e($intro2)) !!}
                    </p>
                @endif
            </div>
        @endif

        <!-- Content Sections -->
        <div class="space-y-12" dir="{{ $isAr ? 'rtl' : 'ltr' }}">
            @forelse($sections as $idx => $section)
                @php
                    $sectionTitle = $section["title_{$lang}"] ?? '';
                    $sectionContent = $section["content_{$lang}"] ?? '';
                    $sectionItems = $section['items'] ?? [];
                @endphp
                <div class="bg-white p-8 opacity-0 translate-y-6" data-delay="{{ 100 + ($idx * 100) }}" data-animate>
                    @if($sectionTitle)
                        <h3 class="text-3xl font-extrabold text-[#0B1140] mb-6 arab">{{ $sectionTitle }}</h3>
                    @endif
                    @if($sectionContent)
                        <div class="text-neutral-700 leading-relaxed space-y-4">
                            {!! nl2br(e($sectionContent)) !!}
                        </div>
                    @endif
                    @if(count($sectionItems))
                        <ul class="list-disc list-inside text-neutral-700 space-y-2 {{ $isAr ? 'mr-4' : 'ml-4' }} mt-4">
                            @foreach($sectionItems as $item)
                                <li>{{ $item["text_{$lang}"] ?? $item }}</li>
                            @endforeach
                        </ul>
                    @endif
                </div>
            @empty
                <!-- Default Sections -->
                <div class="bg-white p-8 opacity-0 translate-y-6" data-delay="100" data-animate>
                    <h3 class="text-3xl font-extrabold text-[#0B1140] mb-6 arab">{{ $isAr ? '1. مقدمة' : '1. Introduction' }}</h3>
                    <p class="text-neutral-700 leading-relaxed mb-4">
                        {{ $isAr ? 'مرحباً بك في منصة ArabianPay. نحن ملتزمون بحماية خصوصيتك وضمان أمان معلوماتك الشخصية والمالية.' : 'Welcome to ArabianPay platform. We are committed to protecting your privacy and ensuring the security of your personal and financial information.' }}
                    </p>
                </div>
            @endforelse
        </div>

        <!-- Last Updated -->
        <div class="mt-16 text-center opacity-0 translate-y-6" data-delay="1000" data-animate>
            {{-- <p class="text-neutral-600" dir="{{ $isAr ? 'rtl' : 'ltr' }}">
                {{ $isAr ? 'آخر تحديث:' : 'Last Updated:' }} {{ date('Y-m-d') }}
            </p> --}}
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
