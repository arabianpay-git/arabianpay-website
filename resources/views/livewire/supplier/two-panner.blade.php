@php
$lang = app()->getLocale();
$isAr = $lang === 'ar';
$items = is_array($hero->jsoning ?? null) ? $hero->jsoning : [];

$bgImage = $hero?->side_image ? storage_public_url($hero->side_image) : asset('img/supplier/3.png');
$mainImage = $hero?->main_image ? storage_public_url($hero->main_image) : asset('img/supplier/mock.svg');
$description = $hero["des_{$lang}"] ?? '';
@endphp

<!-- حاوية رئيسية -->
<div class="w-full bg-white py-16 px-6 md:px-20">
    <div dir="{{ $lang == 'ar' ? 'rtl' : 'ltr' }}" class="max-w-7xl mx-auto relative flex flex-col md:flex-row items-center gap-8">
        <!-- يمين: النص والأرقام -->
        <div class="md:w-1/2 w-full flex flex-col space-y-6">
            <p dir="{{ $isAr ? 'rtl' : 'ltr' }}" class="text-sm md:text-base text-[#222] max-w-lg leading-relaxed ">
                {{ $description }}
            </p>

            <div dir="{{ $isAr ? 'rtl' : 'ltr' }}" class="w-full flex flex-col gap-8 mt-4">
                @forelse($items as $item)
                @php
                $titleKey = $item['title_aar'] ?? null; // stored typo in form
                $title = $item["title_{$lang}"] ?? $titleKey ?? '';
                $number = $item['number'] ?? '';
                @endphp
                <div class="flex items-center justify-between gap-6 ">
                    <div class="">
                        <div class="text-[72px] md:text-[96px] font-extrabold leading-none text-[#2B32B2]">
                            {{ $number }}%
                        </div>
                        <div class="text-sm md:text-base font-medium text-[#555] mt-2">
                            {{ $title }}
                        </div>
                    </div>
                </div>
                @empty

                @endforelse
            </div>
        </div>

        <!-- يسار: منطقة الصورة (هاتف + خلفية مبهمة) -->
        <div class="md:w-1/2 w-full flex justify-center items-center relative">
            {{-- <div class="absolute {{ $isAr ? '-left-32 md:-left-56' : '-right-32 md:-right-56 ' }} top-0 bottom-0 w-[75%] md:w-[90%]">
                <img src="{{ $bgImage }}" alt="bg blurred" class="w-full h-full object-cover rounded-2xl filter blur-xs" />
            </div> --}}

            <div class="relative z-10 w-[200px] sm:w-[260px] md:w-[320px]">
                <img src="{{ $mainImage }}" alt="phone mock" class="w-full h-auto object-contain rounded-3xl" />
                <div class="absolute inset-0 pointer-events-none rounded-3xl"></div>
            </div>
        </div>



    </div>
</div>

<script>
    // Scroll-based animation using Intersection Observer
    document.addEventListener('DOMContentLoaded', () => {
        const observerOptions = {
            root: null
            , rootMargin: '-50px'
            , threshold: 0.1
        };

        const observer = new IntersectionObserver((entries, obs) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const el = entry.target;
                    const delayAttr = parseInt(el.getAttribute('data-delay') || '0', 10);
                    const finalDelay = delayAttr;

                    setTimeout(() => {
                        el.classList.remove('opacity-0', 'translate-y-6', 'translate-x-[-30px]', 'translate-x-[30px]');
                        el.classList.add('opacity-100', 'translate-y-0', 'translate-x-0', 'transition-all', 'duration-700', 'ease-out');
                    }, finalDelay);

                    obs.unobserve(el);
                }
            });
        }, observerOptions);

        document.querySelectorAll('[data-animate], [data-delay]').forEach(el => {
            observer.observe(el);
        });
    });

</script>
