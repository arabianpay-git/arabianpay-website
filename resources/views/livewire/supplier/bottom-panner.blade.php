@php
    $lang = app()->getLocale();
    $isAr = $lang === 'ar';
    $title = $hero["title_{$lang}"] ?? '';
    $des   = $hero["des_{$lang}"] ?? '';
    $items = is_array($hero->jsoning ?? null) ? $hero->jsoning : [];
@endphp

<div dir="{{ $isAr ? 'rtl' : 'ltr' }}" class="py-20 flex items-center justify-center p-4"
    style="background-image: url('{{ asset('img/pattern/patterns.svg') }}'); background-size: 50%;background-color: #eef2ff">
    <div class="text-center max-w-5xl">
        <h1 class="text-5xl md:text-6xl mx-auto max-w-2xl font-extrabold text-[#2a3068] arab mb-6 leading-tight opacity-0 translate-y-6" data-animate data-delay="100">
            {{ $title }}
        </h1>

        <p class="text-lg text-[#2a3068] mb-12 px-4 md:px-0 opacity-0 translate-y-6" data-animate data-delay="150">
            {{ $des }}
        </p>

        <div class="grid gap-6 md:grid-cols-2">
            @forelse($items as $item)
                @php
                    $cardTitle = $item["title_{$lang}"] ?? '';
                    $cardDes   = $item["des_{$lang}"] ?? '';
                    $bg        = $item['bg_color'] ?? '#ffffff';
                    $image     = isset($item['image']) ? storage_public_url($item['image']) : null;
                    $topBtn    = $item["topbtn_{$lang}"] ?? null;
                    $bottomBtn = $item["bootombtn_{$lang}"] ?? null;
                @endphp
                <div class="rounded-3xl shadow-sm p-6 text-left opacity-0 translate-y-6" data-animate data-delay="{{ 200 + ($loop->index * 80) }}" style="background-color: {{ $bg }}">
                    @if($image)
                        <div class="w-full mb-4">
                            <img src="{{ $image }}" alt="" class="w-full h-48 object-cover rounded-2xl">
                        </div>
                    @endif
                    <h3 class="text-2xl font-bold text-[#2a3068] arab mb-3">{{ $cardTitle }}</h3>
                    <p class="text-[#2a3068] text-sm leading-relaxed mb-4">{{ $cardDes }}</p>
                    <div class="flex flex-wrap gap-2">
                        @if($topBtn)
                            <span class="inline-flex items-center px-4 py-2 rounded-full bg-white text-[#2a3068] border border-[#2a3068]/20 text-sm font-semibold">
                                {{ $topBtn }}
                            </span>
                        @endif
                        @if($bottomBtn)
                            <span class="inline-flex items-center px-4 py-2 rounded-full bg-[#2a3068] text-white text-sm font-semibold">
                                {{ $bottomBtn }}
                            </span>
                        @endif
                    </div>
                </div>
            @empty
                <div class="col-span-2 text-center text-[#2a3068] opacity-0 translate-y-6" data-animate data-delay="200">
                    {{ $isAr ? 'لا توجد بيانات بعد' : 'No content yet' }}
                </div>
            @endforelse
        </div>
    </div>
</div>

<script>
    // Scroll-based animation using Intersection Observer
    document.addEventListener('DOMContentLoaded', () => {
        const observerOptions = {
            root: null,
            rootMargin: '-50px',
            threshold: 0.1
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
