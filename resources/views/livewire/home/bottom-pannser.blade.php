@php
$lang = app()->getLocale(); // returns "ar" or "en"
@endphp

<div dir="{{ $lang == 'ar' ? 'rtl' : 'ltr' }}" class="py-20 flex items-center justify-center p-4"
    style="background-image: url('{{ asset('img/pattern/patterns.svg') }}'); background-size: 50%;background-color: #eef2ff">
    <div class="text-center max-w-3xl">
        <h1 class="text-6xl mx-auto max-w-3xl font-extrabold text-[#2a3068] arab mb-8 leading-tight opacity-0 translate-y-6" data-animate data-delay="100">
            {{ $hero["title_$lang"] ?? '' }}
        </h1>

        <p class="text-lg text-[#2a3068] mb-12 px-4 mx-auto max-w-xl md:px-0 opacity-0 translate-y-6" data-delay="150">
            {{ $hero["des_$lang"] ?? '' }}
        </p>

        <div
            class="flex gap-2 flex-col md:flex-row justify-center items-center space-y-4 md:space-y-0 md:space-x-4 space-x-reverse">
            <a
                href="{{ $footerSocial?->app_store_url }}"
                class="flex items-center justify-center bg-[#2a3068] text-white py-3 px-8 rounded-full shadow-lg hover:bg-opacity-90 transition duration-300 w-full md:w-auto text-lg font-bold opacity-0 translate-y-6" data-delay="200">
                <span class="mx-2">
                    <svg width="17" height="20" viewBox="0 0 17 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M15.7633 6.81833C15.6475 6.90833 13.5992 8.0625 13.5992 10.6292C13.5992 13.5975 16.2058 14.6475 16.2833 14.6733C16.2717 14.7375 15.87 16.1117 14.9092 17.5117C14.0533 18.7442 13.1592 19.9742 11.7992 19.9742C10.4392 19.9742 10.0892 19.1842 8.51917 19.1842C6.98833 19.1842 6.44417 20 5.20083 20C3.95667 20 3.08833 18.86 2.09 17.46C0.934167 15.8158 0 13.2617 0 10.8367C0 6.94833 2.52833 4.88667 5.01667 4.88667C6.33833 4.88667 7.44083 5.75417 8.27083 5.75417C9.06083 5.75417 10.2933 4.83417 11.7975 4.83417C12.3675 4.83417 14.415 4.88667 15.7633 6.81833ZM11.0833 3.18833C11.705 2.45 12.145 1.42583 12.145 0.401667C12.145 0.26 12.1333 0.115833 12.1075 0C11.095 0.0383333 9.89083 0.674167 9.165 1.51667C8.595 2.16417 8.0625 3.18833 8.0625 4.22667C8.0625 4.3825 8.08917 4.53833 8.10083 4.58833C8.165 4.60083 8.26917 4.61417 8.3725 4.61417C9.28083 4.61417 10.4225 4.00583 11.0833 3.18833Z"
                            fill="#EDF3FF" />
                    </svg>

                </span>
                {{ $hero["iphone_$lang"] ?? '' }}
            </a>

            <a
                href="{{ $footerSocial?->google_play_url }}"
                class="flex items-center justify-center bg-[#2a3068] text-white py-3 px-8 rounded-full shadow-lg hover:bg-opacity-90 transition duration-300 w-full md:w-auto text-lg font-bold opacity-0 translate-y-6" data-delay="250">
                <span class="mx-2">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M19.945 15.3766L19.94 15.3432C19.8292 14.631 19.6411 13.933 19.3792 13.2616C19.0771 12.4858 18.6796 11.7507 18.1958 11.0732C17.425 9.99039 16.4473 9.07102 15.3192 8.36822L15.325 8.35822L15.33 8.34822L15.6333 7.82572L15.9358 7.30323L16.5275 6.28239C16.67 6.03823 16.8117 5.79323 16.9525 5.54906C17.064 5.33891 17.0898 5.09373 17.0244 4.86498C16.959 4.63624 16.8076 4.44172 16.6018 4.32225C16.3961 4.20278 16.1521 4.16765 15.921 4.22423C15.6899 4.28082 15.4898 4.42472 15.3625 4.62573L14.9375 5.35906L14.3458 6.37989C14.2458 6.55489 14.1442 6.72906 14.0433 6.90323L13.74 7.42573L13.7192 7.46239L13.6742 7.53989L13.6625 7.53489C12.4956 7.07904 11.2536 6.84585 10.0008 6.84739H9.8975C8.68245 6.8589 7.4796 7.091 6.3475 7.53239L6.3225 7.49073L6.28583 7.42573L5.98333 6.90406C5.88214 6.72966 5.78103 6.55522 5.68 6.38073L5.08833 5.35989C4.94583 5.11573 4.80417 4.87073 4.66333 4.62656C4.60255 4.5212 4.5214 4.42899 4.42462 4.3553C4.32784 4.28161 4.21736 4.22793 4.09962 4.19737C3.98188 4.16681 3.85924 4.15999 3.73884 4.1773C3.61844 4.19462 3.50269 4.23573 3.39833 4.29823C3.21877 4.40395 3.08067 4.56779 3.00688 4.76266C2.93308 4.95753 2.92801 5.17175 2.9925 5.36989C3.0125 5.43156 3.03917 5.49156 3.0725 5.54906L3.4975 6.28239L4.05917 7.24989V7.25156L4.09 7.30323C4.19 7.47823 4.29167 7.65239 4.3925 7.82656L4.695 8.34906L4.6975 8.35322L4.7 8.35739C2.46405 9.74709 0.85967 11.9555 0.229167 14.5116C0.160379 14.7937 0.103661 15.0787 0.0591667 15.3657L0.0575 15.3774C0.035 15.5232 0.0158333 15.6699 0 15.8182H20C19.9833 15.6699 19.965 15.5232 19.9425 15.3774H19.9442L19.945 15.3766ZM15.2033 13.0516C15.6033 12.7849 15.6617 12.1682 15.3325 11.6749C15.005 11.1816 14.4142 10.9966 14.0142 11.2632C13.6142 11.5299 13.5558 12.1466 13.8842 12.6399C14.2125 13.1341 14.8033 13.3182 15.2033 13.0516ZM6.005 11.2649C6.405 11.5316 6.46333 12.1482 6.135 12.6416C5.80667 13.1357 5.21583 13.3199 4.81583 13.0541C4.41583 12.7874 4.3575 12.1707 4.68583 11.6774C5.01417 11.1832 5.605 10.9991 6.005 11.2649Z"
                            fill="#EDF3FF" />
                    </svg>

                </span>
                {{ $hero["and_$lang"] ?? '' }}
            </a>
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