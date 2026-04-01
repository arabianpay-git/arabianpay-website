@php
$lang = app()->getLocale();
$isAr = $lang === 'ar';
@endphp

<div dir="{{ $isAr ? 'rtl' : 'ltr' }}" class="relative bg-gray-900 max-w-7xl mx-auto m-4 w-full p-4 overflow-hidden rounded-3xl md:p-12 lg:p-24" style="background: linear-gradient(135deg, #0B1140 0%, #1e3a8a 50%, #3b82f6 100%);">

    <div class="relative z-10 w-full h-full lg:flex-row-reverse lg:items-center">

        <div class="flex flex-col w-full">

            <h1 class="text-4xl arab font-extrabold text-wrap max-w-md leading-tight text-white md:text-6xl opacity-0 translate-y-6" data-animate data-delay="100">
                {{ $isAr ? 'الوظائف المتاحة' : 'Available Jobs' }}
            </h1>

            <p class="text-lg text-gray-300 mt-4 max-w-2xl opacity-0 translate-y-6" data-animate data-delay="150">
                {{ $isAr ? 'انضم إلى فريق أرابيان باي وكن جزءاً من رحلة النمو والنجاح' : 'Join the ArabianPay team and be part of the journey of growth and success' }}
            </p>

        </div>
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
