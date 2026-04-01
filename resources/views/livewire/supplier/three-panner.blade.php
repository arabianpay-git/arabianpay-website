@php
    $lang = app()->getLocale();
    $isAr = $lang === 'ar';
    $items = is_array($hero->jsoning ?? null) ? array_values($hero->jsoning) : [];

    // helper to fetch localized title/desc with fallbacks
    $getTitle = fn($idx, $default) => $items[$idx]["title_{$lang}"] ?? ($items[$idx]['title_aar'] ?? $default ?? '');
    $getDesc  = fn($idx, $default) => $items[$idx]["des_{$lang}"] ?? $default ?? '';
@endphp

<div dir="{{ $isAr ? 'rtl' : 'ltr' }}" class="w-full">

    <section class="max-w-7xl mx-auto text-center py-12 px-4">
      <h2 class="text-3xl arab md:text-4xl font-extrabold text-[#0C0B3A]">
        {{ $getTitle(0, $isAr ? 'نموك يبدأ من هنا' : 'Your growth starts here') }}
      </h2>
      <p class="mt-2 text-sm text-[#6B6B7A]">
        {{ $getDesc(0, $isAr ? '' : '') }}
      </p>
    </section>

    <section class="bg-[#05050a] text-white py-16">
      <div class="max-w-7xl mx-auto px-4 grid grid-cols-1 md:grid-cols-12 gap-8 items-center">
        <div class="md:col-span-7 flex justify-center md:justify-start">
          <div class="w-full max-w-xl rounded-2xl overflow-hidden shadow-2xl">
            <img src="{{ asset('img/supplier/1.svg') }}" alt="image 1" class="w-full h-auto object-cover"/>
          </div>
        </div>

        <div class="md:col-span-5 text-right px-4">
          <div class="inline-block px-3 py-1 border rounded-full text-xs bg-transparent border-white/40">
            {{ $isAr ? 'أرابيان باي للأعمال' : 'ArabianPay for Business' }}
          </div>
          <h3 class="mt-6 text-3xl md:text-4xl font-extrabold leading-tight arab text-[#4bb1e0]">
            {{ $getTitle(1, $isAr ? 'خيارات دفع مرنة تناسب كل عميل' : 'Flexible payments for every customer') }}
          </h3>
          <p class="mt-4 text-sm text-white/90 max-w-md" >
            {{ $getDesc(1, $isAr ? '' : '') }}
          </p>
        </div>
      </div>
    </section>

    <section class="text-[#0C0B3A] bg-neutral-100 py-16">
      <div class="max-w-7xl mx-auto px-4 grid grid-cols-1 md:grid-cols-12 gap-8 items-center">
        <div class="md:col-span-6 text-right md:px-12">
          <div class="inline-block px-3 py-1 border rounded-full text-xs bg-white/10 border-neutral-400">
            {{ $isAr ? 'شراكة تساعدك على النمو' : 'Partnership to grow' }}
          </div>
          <h3 class="mt-6 text-3xl md:text-4xl font-extrabold leading-tight arab">
            {{ $getTitle(2, $isAr ? 'شراكة تساعدك على النمو' : 'Partnership that scales') }}
          </h3>
          <p class="mt-4 text-sm max-w-md">
            {{ $getDesc(2, $isAr ? 'نظامنا يمنحك تجربة سلسة.' : 'Fast, reliable flows for your customers.') }}
          </p>
        </div>

        <div class="md:col-span-6 flex justify-center md:justify-end">
          <div class="w-full max-w-md rounded-2xl overflow-hidden bg-white">
            <img src="{{ asset('img/supplier/2.svg') }}" alt="image 2" class="w-full h-auto object-cover"/>
          </div>
        </div>
      </div>
    </section>

    <section class="bg-[#05050a] text-white py-16">
      <div class="max-w-7xl mx-auto px-4 grid grid-cols-1 md:grid-cols-12 gap-8 items-center">
        <div class="md:col-span-7 flex justify-center md:justify-start">
          <div class="w-full max-w-xl rounded-2xl overflow-hidden shadow-2xl">
            <img src="{{ asset('img/supplier/3.svg') }}" alt="image 3" class="w-full h-auto object-cover"/>
          </div>
        </div>

        <div class="md:col-span-5 text-right px-4">
          <div class="inline-block px-3 py-1 border rounded-full text-xs bg-transparent border-white/20">
            {{ $isAr ? 'أرابيان باي للأعمال' : 'ArabianPay for Business' }}
          </div>
          <h3 class="mt-6 text-3xl md:text-4xl font-extrabold leading-tight arab text-[#4bb1e0]">
            {{ $getTitle(3, $isAr ? 'زيادة في المبيعات والطلب' : 'Boost sales and demand') }}
          </h3>
          <p class="mt-4 text-sm text-white/90 max-w-md">
            {{ $getDesc(3, $isAr ? 'تجربة سريعة وموثوقة لعملائك.' : 'Fast, trusted experience for your shoppers.') }}
          </p>
        </div>
      </div>
    </section>

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