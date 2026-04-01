<style>
    :root {
        --navy: #060433;
        --muted: rgba(255, 255, 255, 0.75);
        --card-bg-left: #cddbff;
        /* pale lilac */
        --card-bg-right: #dff6ff;
        /* pale cyan */
    }

    .bg-cccc {
        background: var(--navy);
    }

    /* small card image masking to emulate rounded card with inner white panel */
    .card-img-frame {
        background: linear-gradient(180deg, #e6eefc 0%, #f9fbff 100%);
        border-radius: 16px;
    }

</style>
@php
$lang = app()->getLocale();
$items = is_array($hero->jsoning ?? null) ? $hero->jsoning : [];
@endphp
<div class="antialiased bg-cccc text-white">

    <section class="max-w-7xl mx-auto px-6 py-16 opacity-0 translate-y-6" data-animate data-delay="400">
        <!-- header -->
        <div class="text-center mb-12 opacity-0 translate-y-6" data-animate data-delay="100">
            <p class="text-[16px] text-[color:var(--muted)] mb-3">{{ $hero["title_$lang"] ?? '' }}</p>
            <h1 class="text-3xl arab md:text-4xl lg:text-5xl font-extrabold tracking-tight">{{ $hero["sup_$lang"] ?? '' }}</h1>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @if(count($items))
            @foreach($items as $item)
            @php
            $titleKey = 'title_' . $lang;
            $answerKey = 'des_' . $lang;
            $it = is_object($item) ? (array) $item : $item;
            // if files are stored in storage/app/public, use asset('storage/...'). Adjust if you store elsewhere.
            $filePath = isset($it['image']) ? storage_public_url($it['image']) : '';
            @endphp
            <article dir="{{ $lang == 'ar' ? 'rtl' : 'ltr' }}" class="rounded-3xl p-0 h-full flex flex-col opacity-0 translate-y-6" data-delay="{{ 150 + ($loop->index * 50) }}" data-animate>
                <div class="mb-4">
                    <div class="rounded-3xl w-full overflow-hidden">
                        <img class="object-cover w-full h-96 rounded-3xl" src="{{ $filePath }}" alt="">
                    </div>
                </div>

                <div class="mt-2">
                    <h3 class="text-lg font-semibold text-white mb-2 arab">{{ $item[$titleKey] }}</h3>
                    <p class="text-[color:var(--muted)] text-sm leading-relaxed">
                      {{ $item[$answerKey] }}
                    </p>
                </div>
            </article>
            @endforeach
            @endif
        </div>

    </section>

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
