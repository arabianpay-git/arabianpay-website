<div dir="rtl" class="relative max-w-7xl mx-auto m-4 w-full p-4 overflow-hidden rounded-3xl md:p-12 lg:p-24" style="background: linear-gradient(135deg, #0B1140 0%, #1e3a8a 50%, #3b82f6 100%);">

    <div class="relative z-10  w-full h-full lg:flex-row-reverse lg:items-center">

        <div class="flex flex-col w-full">

            <h1 class="text-4xl arab font-extrabold  text-wrap max-w-md leading-tight text-white md:text-6xl opacity-0 translate-y-6" data-animate data-delay="100">
                سياسة الخصوصية
            </h1>

            <div class="flex flex-wrap gap-6 mt-8 text-white md:gap-6 md:mt-12">

                <div class="flex flex-col opacity-0 translate-y-6" data-delay="150">
                    <div class="flex space-x-1 space-x-reverse">
                        <span class="text-xl"><svg width="21" height="19" viewBox="0 0 21 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 17.0212L2.3 13.1212C-0.0239997 9.68421 0.874 5.24921 4.4 2.74721C7.926 0.246207 12.99 0.451206 16.245 3.22721C19.5 6.00421 19.94 10.4932 17.274 13.7282C14.608 16.9632 9.659 17.9432 5.7 16.0212L1 17.0212Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </span> <span class="text-lg font-semibold whitespace-nowrap">حماية البيانات</span>
                    </div>
                    <p class="mt-1 text-sm text-gray-300">
                        نحمي معلوماتك الشخصية بأعلى معايير الأمان
                    </p>
                </div>

                <div class="flex flex-col opacity-0 translate-y-6" data-delay="200">
                    <div class="flex space-x-1 space-x-reverse">
                        <span class="text-xl"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.44706 18.846C6.43635 17.9127 3.91372 15.8324 2.42427 13.0545C0.934827 10.2765 0.598174 7.02411 1.48706 4C4.60259 4.14257 7.65123 3.06658 9.98706 1C12.3229 3.06658 15.3715 4.14257 18.4871 4C19.1657 6.30911 19.1344 8.76894 18.3971 11.06" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </span> <span class="text-lg font-semibold whitespace-nowrap">شفافية كاملة</span>
                    </div>
                    <p class="mt-1 text-xs text-gray-300">
                        نوضح لك كيفية استخدام بياناتك بشكل واضح
                    </p>
                </div>

                <div class="flex flex-col opacity-0 translate-y-6" data-delay="250">
                    <div class="flex space-x-1 space-x-reverse">
                        <span class="text-xl"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g opacity="0.5">
                                    <path d="M6 5H18L21 10L12.5 19.5C12.4348 19.5665 12.357 19.6194 12.2712 19.6554C12.1853 19.6915 12.0931 19.7101 12 19.7101C11.9069 19.7101 11.8147 19.6915 11.7288 19.6554C11.643 19.6194 11.5652 19.5665 11.5 19.5L3 10L6 5Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M10 12.0008L8 9.80078L8.6 8.80078" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </g>
                            </svg>
                        </span> <span class="text-lg font-semibold whitespace-nowrap">سيطرة كاملة</span>
                    </div>
                    <p class="mt-1 text-xs text-gray-300">
                        لديك السيطرة الكاملة على بياناتك الشخصية
                    </p>
                </div>

            </div>


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

