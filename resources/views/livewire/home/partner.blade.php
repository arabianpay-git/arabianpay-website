<link rel="stylesheet" href="https://unpkg.com/swiper@9/swiper-bundle.min.css" />
<script src="https://unpkg.com/swiper@9/swiper-bundle.min.js"></script>
@php
$lang = app()->getLocale(); // "ar" or "en"
// $hero is passed from Livewire component; ensure it may be null
$images = $hero && $hero->image ? $hero->image : [];
// duplicate slides to help smooth looping — you can duplicate more times if you want
$slides = array_merge($images, $images);
@endphp
<style>
    .logo-card {
        background: #fff;
        border-radius: 1rem;
        width: 100px;
        height: 100px;
        /* box-shadow: 0 10px 30px rgba(11, 17, 64, 0.06); */
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .partner-slide-inner {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 0.35rem;
        max-width: 130px;
    }

    .partner-brand {
        font-size: 0.7rem;
        line-height: 1.25;
        text-align: center;
        color: #0B1140;
        font-weight: 600;
        word-break: break-word;
    }

    /* Make each slide width fit the card (for slidesPerView: 'auto') */
    .swiper-slide {
        width: auto;
        display: flex;
        justify-content: center;
    }

    /* Optional: hide overflow edges */
    .slider-wrap {
        overflow: hidden;
    }

</style>
<div class="bg-white">

    <div class="max-w-7xl mx-auto px-6 lg:px-8 py-20 opacity-0 translate-y-6" data-animate data-delay="60">
        <div class="text-center mb-10 opacity-0 translate-y-6" data-animate data-delay="100">
            <h2 class="text-4xl mx-auto max-w-2xl lg:text-5xl arab font-extrabold text-[#0B1140]"> {{ $lang === 'ar' ? ($hero->title_ar ?? '') : ($hero->title_en ?? '') }}</h2>
            <p dir="rtl" class="mt-4 text-md text-gray-500 underline decoration-1">
                {{-- توريد الآن عبر <span class="font-semibold text-[#0B1140]">ArabianPay</span> --}}
                {{ $lang === 'ar' ? ($hero->link_ar ?? '') : ($hero->link_en ?? '') }}
            </p>
        </div>

        <!-- TOP slider (moves left) -->
        <div class="slider-wrap mb-6 opacity-0 translate-y-6" data-animate data-delay="180">
            <div class="swiper mySwiperTop">
                <div class="swiper-wrapper">
                    @foreach ($slides as $item)
                        @php
                            // $item might be an array/object depending on cast; ensure array
                            $it = is_object($item) ? (array) $item : $item;
                            // if files are stored in storage/app/public, use asset('storage/...'). Adjust if you store elsewhere.
                            $filePath = isset($it['file']) ? storage_public_url($it['file']) : asset('img/company/placeholder.svg');
                            // choose link by lang; default to '#' if missing
                            $link = $hero ? ($lang === 'ar' ? ($hero->link_ar ?? '#') : ($hero->link_en ?? '#')) : '#';
                            $brand = $lang === 'ar'
                                ? ($it['name_ar'] ?? $it['brand_ar'] ?? '')
                                : ($it['name_en'] ?? $it['brand_en'] ?? '');
                        @endphp

                        <div class="swiper-slide">
                            <a href="{{ $link }}" target="_blank" rel="noopener" class="partner-slide-inner">
                                <div class="logo-card">
                                    {{-- SVGs are fine as <img> --}}
                                    <img src="{{ $filePath }}" class="max-h-20" alt="{{ $brand ?: 'partner logo' }}" />
                                </div>
                                @if ($brand !== '')
                                    <span class="partner-brand">{{ $brand }}</span>
                                @endif
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- BOTTOM slider (moves right) -->
        <div class="slider-wrap opacity-0 translate-y-6" data-animate data-delay="220">
            <div class="swiper mySwiperBottom">
                <div class="swiper-wrapper">@foreach ($slides as $item)
                    @php
                    $it = is_object($item) ? (array) $item : $item;
                    $filePath = isset($it['file']) ? storage_public_url($it['file']) : asset('img/company/placeholder.svg');
                    $link = $hero ? ($lang === 'ar' ? ($hero->link_ar ?? '#') : ($hero->link_en ?? '#')) : '#';
                    $brand = $lang === 'ar'
                        ? ($it['name_ar'] ?? $it['brand_ar'] ?? '')
                        : ($it['name_en'] ?? $it['brand_en'] ?? '');
                    @endphp

                    <div class="swiper-slide">
                        <a href="{{ $link }}" target="_blank" rel="noopener" class="partner-slide-inner">
                            <div class="logo-card">
                                <img src="{{ $filePath }}" class="max-h-20" alt="{{ $brand ?: 'partner logo' }}" />
                            </div>
                            @if ($brand !== '')
                                <span class="partner-brand">{{ $brand }}</span>
                            @endif
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

    </div>

    <script>
        // Top slider – leftwards continuous
        const swiperTop = new Swiper('.mySwiperTop', {
            direction: 'horizontal'
            , loop: true
            , slidesPerView: 'auto'
            , spaceBetween: 30
            , freeMode: true, // allow continuous movement
            freeModeMomentum: false
            , speed: 8000, // longer duration = slower movement
            autoplay: {
                delay: 1, // near-zero delay for continuous effect
                disableOnInteraction: false
            }
            , allowTouchMove: true
            , breakpoints: {
                320: {
                    spaceBetween: 16
                }
                , 640: {
                    spaceBetween: 20
                }
                , 1024: {
                    spaceBetween: 24
                }
                , 1280: {
                    spaceBetween: 30
                }
            }
        });

        // Bottom slider – rightwards (reverseDirection true)
        const swiperBottom = new Swiper('.mySwiperBottom', {
            direction: 'horizontal'
            , loop: true
            , slidesPerView: 'auto'
            , spaceBetween: 30
            , freeMode: true
            , freeModeMomentum: false
            , speed: 8000
            , autoplay: {
                delay: 1
                , reverseDirection: true
                , disableOnInteraction: false
            }
            , allowTouchMove: true
            , breakpoints: {
                320: {
                    spaceBetween: 16
                }
                , 640: {
                    spaceBetween: 20
                }
                , 1024: {
                    spaceBetween: 24
                }
                , 1280: {
                    spaceBetween: 30
                }
            }
        });

    </script>

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
</div>
