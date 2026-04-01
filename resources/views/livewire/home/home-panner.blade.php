<div class="mb-8">
    <!-- Hero Section -->
    @php
    $lang = app()->getLocale(); // returns "ar" or "en"

    function hero_image_url($value) {
    if (!$value) return null;
    return storage_public_url($value) ?: null;
    }
    @endphp
    @php
    $bg = $hero ? hero_image_url($hero->image ?? null) : null;
    @endphp
    <section class="text-center mt-10" data-animate data-delay="0">
        <h1 class="text-5xl arab max-w-2xl mx-auto font-extrabold leading-snug opacity-0 translate-y-6" data-delay="100">
            {{ $hero["title_$lang"] ?? '' }}
            <br>
        </h1>

        <div class="my-4 mb-6 arab text-neutral-900 max-w-5xl font-extrabold text-5xl mx-auto opacity-0 translate-y-6" data-delay="150">
            <span class="border-b-8 pb-0 border-sky-400">{{ $hero["titleline_$lang"] ?? '' }}</span>
        </div>
        <p dir="{{ $lang == 'ar' ? 'rtl' : 'ltr' }}" class="mt-10 opacity-0 translate-y-6" data-delay="200">
            {{ $hero["des_$lang"] ?? '' }}
        </p>
        <div class="flex justify-center gap-4 mt-6">
            <a href="https://partners.arabianpay.net/register" class="border border-[#020044] px-6 py-3 rounded-full hover:bg-neutral-100 opacity-0 translate-y-6" data-delay="250">
                {{ $lang == 'ar' ? 'سجل كمورد' : 'Register as Supplier' }}
            </a>
            <a href="{{ ($footerSocial?->google_play_url ?: $footerSocial?->app_store_url) ?: '#' }}" class="bg-[#020044] text-white px-6 py-3 rounded-full hover:bg-[#020044ee] opacity-0 translate-y-6" data-delay="300">
                {{ $lang == 'ar' ? 'سجل كعميل' : 'Register as Customer' }}
            </a>
            {{-- {{ $bg }} --}}
        </div>
    </section>

    <!-- Phone Mockup -->

    <section class="relative flex justify-center mt-16">
        <div class="absolute inset-0 bg-center bg-no-repeat opacity-30 blur-lg" style="background-image: url('{{ $bg ?? asset('img/bgmain.png') }}'); background-size: 50%;">
        </div>

        {{-- <div>

        </div> --}}

        <div class="w-80 relative bg-white rounded-3xl p-4 opacity-0 translate-y-6" data-animate data-delay="350">

            <!-- User -->
            <div class="flex justify-between mb-4 opacity-0 translate-y-6" data-delay="400">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#1f1f1f">
                    <path d="M160-200v-80h80v-280q0-83 50-147.5T420-792v-28q0-25 17.5-42.5T480-880q25 0 42.5 17.5T540-820v28q80 20 130 84.5T720-560v280h80v80H160Zm320-300Zm0 420q-33 0-56.5-23.5T400-160h160q0 33-23.5 56.5T480-80ZM320-280h320v-280q0-66-47-113t-113-47q-66 0-113 47t-47 113v280Z" /></svg>
                <div class="flex items-center gap-2">
                    <div class="grid items-center text-right">
                        <h2 class="font-semibold">
                            {{ $lang == 'ar' ? 'Ali Omar' : 'Ali Omar' }}
                        </h2>
                        
                        <span class="font-semibold text-xs">
                            {{ $lang == 'ar' ? '👋صباح الخير' : '👋Good morning' }}
                        </span>
                        
                    </div>
                    <div class="w-8 h-8 bg-neutral-300 rounded-full"></div>
                </div>
            </div>

            <!-- Balance -->
            <div class="bg-[#2E4A92] text-white p-4 rounded-3xl mb-5 w-[137%] left-1/2 relative -translate-x-1/2" data-delay="550">

                <div class="flex justify-between">
                    <!-- Left numbers -->
                    <div class="text-2xl font-bold">
                        <div class="flex items-center gap-1">
                            <span class="icon-saudi_riyal font-normal text-4xl"></span>
                            <span>{{ $hero["number"] ?? '' }}</span>
                        </div>

                        <div class="flex items-center gap-1 text-xs font-normal">
                            <span class="icon-saudi_riyal text-xl"></span>
                            <span class="opacity-80">
                                {{ $lang == 'ar' ? 'المبلغ المستحق 2,100' : 'Amount Due 2,100' }}
                            </span>
                            
                        </div>
                    </div>

                    <!-- Right side -->
                    <div class="flex flex-col items-end gap-1 text-sm">
                        <img class="h-10 object-contain" src="{{ asset('logo-light.png') }}" alt="">

                        <div class="flex items-center mt-2 gap-1">
                            <span class="text-xs">
                                {{ $lang == 'ar' ? 'مستحقة في 04 ابريل' : 'Due on April 04' }}
                            </span>
                            
                            <span class="icon-saudi_riyal text-xl"></span><span>3,493</span>
                            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.4595 2.07444H11.9064V1.55675C11.9064 1.41945 11.8519 1.28778 11.7548 1.19069C11.6577 1.0936 11.526 1.03906 11.3887 1.03906C11.2514 1.03906 11.1198 1.0936 11.0227 1.19069C10.9256 1.28778 10.8711 1.41945 10.8711 1.55675V2.07444H5.69415V1.55675C5.69415 1.41945 5.63961 1.28778 5.54252 1.19069C5.44543 1.0936 5.31376 1.03906 5.17646 1.03906C5.03916 1.03906 4.90748 1.0936 4.8104 1.19069C4.71331 1.28778 4.65877 1.41945 4.65877 1.55675V2.07444H3.10569C2.83109 2.07444 2.56774 2.18353 2.37357 2.3777C2.1794 2.57187 2.07031 2.83523 2.07031 3.10983V13.4636C2.07031 13.7382 2.1794 14.0016 2.37357 14.1958C2.56774 14.3899 2.83109 14.499 3.10569 14.499H13.4595C13.7341 14.499 13.9975 14.3899 14.1916 14.1958C14.3858 14.0016 14.4949 13.7382 14.4949 13.4636V3.10983C14.4949 2.83523 14.3858 2.57187 14.1916 2.3777C13.9975 2.18353 13.7341 2.07444 13.4595 2.07444ZM4.65877 3.10983V3.62752C4.65877 3.76482 4.71331 3.89649 4.8104 3.99358C4.90748 4.09067 5.03916 4.14521 5.17646 4.14521C5.31376 4.14521 5.44543 4.09067 5.54252 3.99358C5.63961 3.89649 5.69415 3.76482 5.69415 3.62752V3.10983H10.8711V3.62752C10.8711 3.76482 10.9256 3.89649 11.0227 3.99358C11.1198 4.09067 11.2514 4.14521 11.3887 4.14521C11.526 4.14521 11.6577 4.09067 11.7548 3.99358C11.8519 3.89649 11.9064 3.76482 11.9064 3.62752V3.10983H13.4595V5.18059H3.10569V3.10983H4.65877ZM13.4595 13.4636H3.10569V6.21597H13.4595V13.4636ZM9.05914 8.54558C9.05914 8.69916 9.0136 8.8493 8.92827 8.977C8.84294 9.1047 8.72166 9.20423 8.57977 9.26301C8.43788 9.32178 8.28174 9.33716 8.13111 9.3072C7.98047 9.27723 7.84211 9.20327 7.73351 9.09467C7.62491 8.98607 7.55095 8.84771 7.52099 8.69707C7.49102 8.54644 7.5064 8.39031 7.56518 8.24841C7.62395 8.10652 7.72348 7.98524 7.85118 7.89991C7.97888 7.81459 8.12902 7.76904 8.2826 7.76904C8.48855 7.76904 8.68607 7.85086 8.8317 7.99649C8.97733 8.14212 9.05914 8.33963 9.05914 8.54558ZM11.9064 8.54558C11.9064 8.69916 11.8609 8.8493 11.7756 8.977C11.6902 9.1047 11.569 9.20423 11.4271 9.26301C11.2852 9.32178 11.129 9.33716 10.9784 9.3072C10.8278 9.27723 10.6894 9.20327 10.5808 9.09467C10.4722 8.98607 10.3983 8.84771 10.3683 8.69707C10.3383 8.54644 10.3537 8.39031 10.4125 8.24841C10.4713 8.10652 10.5708 7.98524 10.6985 7.89991C10.8262 7.81459 10.9763 7.76904 11.1299 7.76904C11.3359 7.76904 11.5334 7.85086 11.679 7.99649C11.8246 8.14212 11.9064 8.33963 11.9064 8.54558ZM6.21184 11.134C6.21184 11.2876 6.1663 11.4378 6.08097 11.5655C5.99564 11.6932 5.87436 11.7927 5.73247 11.8515C5.59058 11.9102 5.43444 11.9256 5.28381 11.8957C5.13318 11.8657 4.99481 11.7917 4.88621 11.6831C4.77761 11.5745 4.70365 11.4362 4.67369 11.2855C4.64372 11.1349 4.6591 10.9788 4.71788 10.8369C4.77665 10.695 4.87618 10.5737 5.00388 10.4884C5.13158 10.403 5.28172 10.3575 5.4353 10.3575C5.64125 10.3575 5.83877 10.4393 5.9844 10.5849C6.13003 10.7306 6.21184 10.9281 6.21184 11.134ZM9.05914 11.134C9.05914 11.2876 9.0136 11.4378 8.92827 11.5655C8.84294 11.6932 8.72166 11.7927 8.57977 11.8515C8.43788 11.9102 8.28174 11.9256 8.13111 11.8957C7.98047 11.8657 7.84211 11.7917 7.73351 11.6831C7.62491 11.5745 7.55095 11.4362 7.52099 11.2855C7.49102 11.1349 7.5064 10.9788 7.56518 10.8369C7.62395 10.695 7.72348 10.5737 7.85118 10.4884C7.97888 10.403 8.12902 10.3575 8.2826 10.3575C8.48855 10.3575 8.68607 10.4393 8.8317 10.5849C8.97733 10.7306 9.05914 10.9281 9.05914 11.134ZM11.9064 11.134C11.9064 11.2876 11.8609 11.4378 11.7756 11.5655C11.6902 11.6932 11.569 11.7927 11.4271 11.8515C11.2852 11.9102 11.129 11.9256 10.9784 11.8957C10.8278 11.8657 10.6894 11.7917 10.5808 11.6831C10.4722 11.5745 10.3983 11.4362 10.3683 11.2855C10.3383 11.1349 10.3537 10.9788 10.4125 10.8369C10.4713 10.695 10.5708 10.5737 10.6985 10.4884C10.8262 10.403 10.9763 10.3575 11.1299 10.3575C11.3359 10.3575 11.5334 10.4393 11.679 10.5849C11.8246 10.7306 11.9064 10.9281 11.9064 11.134Z" fill="#E6E7FF" />
                            </svg>
                        </div>

                        <span class="text-lg opacity-80 cursor-pointer">
                            {{ $lang == 'ar' ? 'ادفع مبكرا' : 'Pay Early' }}
                        </span>
                        
                    </div>
                </div>
                <div class="bg-[#12c0ff22] rounded-full absolute inset-0 bg-center h-24 w-24"></div>
            </div>

            <!-- Categories -->
            <div>
                <div dir="rtl" class="grid grid-cols-3 gap-2">
                    <div class="bg-neutral-100 p-0 rounded-xl text-center opacity-0 translate-y-6" data-delay="550">
                        {{-- <div class="w-12 h-12 bg-neutral-300 mx-auto rounded-lg"></div> --}}
                        <img class="object-contain" src="{{ storage_public_url($hero->imageright) }}" alt="">
                        <p class="pb-4 text-xs">
                            {{ $lang == 'ar' ? 'الاكترونيات' : 'Electronics' }}
                        </p>
                        
                    </div>
                    <div class="bg-neutral-100 p-0 rounded-xl text-center opacity-0 translate-y-6" data-delay="600">
                        {{-- <div class="w-12 h-12 bg-neutral-300 mx-auto rounded-lg"></div> --}}
                        <img class="object-contain" src="{{ storage_public_url($hero->imagemiddle) }}" alt="">
                        <p class="pb-4 text-nowrap text-xs">
                            {{ $lang == 'ar' ? 'مستلزمات المنزل' : 'Home Supplies' }}
                        </p>
                        
                    </div>
                    <div class="bg-neutral-100 p-0 rounded-xl text-center opacity-0 translate-y-6" data-delay="650">
                        {{-- <div class="w-12 h-12 bg-neutral-300 mx-auto rounded-lg"></div> --}}
                        <img class="object-contain" src="{{ storage_public_url($hero->imageletf) }}" alt="">
                        <p class="pb-4 text-xs">
                            {{ $lang == 'ar' ? 'ملابس' : 'Clothing' }}
                        </p>
                        
                    </div>
                </div>
            </div>

            <!-- Offers -->
                <div class="mt-6 opacity-0 translate-y-6" data-delay="700">
                    <div class="flex items-center justify-between text-xs">
                    <h3 class="font-semibold mb-3">
                        {{ $lang == 'ar' ? 'زيارة المتاجر' : 'Visit Stores' }}
                    </h3>
                    
                    <h3 class="font-semibold mb-3">
                        {{ $lang == 'ar' ? 'عرض الكل' : 'View All' }}
                    </h3>
                    
                </div>
                <div dir="rtl" class="bg-teal-700 text-white p-4 rounded-xl opacity-0 translate-y-6" data-delay="750">
                    <p class="font-semibold">
                        {{ $lang == 'ar' ? 'عروض اليوم الوطني' : 'National Day Offers' }}
                    </p>
                    
                    <p class="text-xs text-wrap opacity-80">
                        {{ $lang == 'ar' ? 'احصل على خصم تصل الى 30% من متاجر الامل' : 'Get up to 30% discount from Al-Amal Stores' }}
                    </p>
                    
                </div>
            </div>
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
