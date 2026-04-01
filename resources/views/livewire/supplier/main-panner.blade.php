@php
    $lang = app()->getLocale();
    $isAr = $lang === 'ar';
    $title = $hero["title_{$lang}"] ?? '';
    $des   = $hero["des_{$lang}"] ?? '';
    $btn   = $hero["btn_{$lang}"] ?? '';
    $image = $hero?->image ? storage_public_url($hero->image) : asset('img/supplier/img.svg');
@endphp

<div class="w-full m-4 max-w-7xl mx-auto bg-[#02043A] rounded-[3rem] overflow-hidden flex flex-col md:flex-row items-center">
    <!-- Left Image -->
    <div class="md:w-1/2 mx-3 w-full opacity-0 translate-x-[-30px]" data-animate data-delay="100">
        <img
            src="{{ $image }}"
            alt="supplier hero"
            class="w-full h-full object-cover"
        />
    </div>

    <!-- Right Content -->
    <div dir="{{ $isAr ? 'rtl' : 'ltr' }}" class="md:w-1/2 mx-3 w-full text-white px-8 md:px-16 py-12 space-y-6 opacity-0 translate-x-[30px]" data-animate data-delay="150">

        <h1 class="text-4xl md:text-5xl arab font-extrabold leading-[1.2]">
            {{ $title }}
        </h1>

        <p class="text-lg text-gray-200 leading-relaxed mb-4">
            {{ $des }}
        </p>

        <a href="https://partners.arabianpay.net/register"
            class="bg-white mt-6 text-[#02043A] font-semibold px-10 py-4 rounded-full text-lg shadow-lg hover:bg-gray-100 transition opacity-0 translate-y-6" data-animate data-delay="200">
            {{ $btn ?: ($isAr ? 'انضم الآن' : 'Join now') }}
        </a>

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
