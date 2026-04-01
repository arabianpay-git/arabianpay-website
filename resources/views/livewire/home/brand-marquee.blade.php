@if ($brands->isNotEmpty())
@php
    $slides = $brands->concat($brands);
@endphp
<style>
    .brand-marquee-wrap .brand-logo-card {
        background: #fff;
        border-radius: 1rem;
        width: 100px;
        height: 100px;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .brand-marquee-wrap .swiper-slide {
        width: auto;
        display: flex;
        justify-content: center;
    }
    .brand-marquee-wrap .brand-slider-wrap {
        overflow: hidden;
    }
</style>
<div class="bg-white brand-marquee-wrap">
    {{-- الشريط يبقى ظاهراً دون انتظار intersection (ارتفاع صغير قد لا يحقق threshold 0.35 في welcome.blade) --}}
    <div class="max-w-7xl mx-auto px-6 lg:px-8 pt-4 pb-16">
        <div class="text-center mb-8">
            <h2 class="text-3xl md:text-4xl arab font-extrabold text-[#0B1140]">
                @lang('messages.home_brands_title')
            </h2>
        </div>
        <div class="brand-slider-wrap">
            <div class="swiper mySwiperBrands">
                <div class="swiper-wrapper">
                    @foreach ($slides as $customer)
                        @php
                            $iconPath = $customer->iconPublicUrl();
                        @endphp
                        <div class="swiper-slide">
                            <div class="brand-logo-card">
                                <img src="{{ $iconPath }}" class="max-h-20 object-contain" alt="{{ $customer->name }}" />
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const el = document.querySelector('.mySwiperBrands');
            if (!el || typeof Swiper === 'undefined') return;
            new Swiper('.mySwiperBrands', {
                direction: 'horizontal',
                loop: true,
                slidesPerView: 'auto',
                spaceBetween: 30,
                freeMode: true,
                freeModeMomentum: false,
                speed: 8000,
                autoplay: {
                    delay: 1,
                    disableOnInteraction: false,
                    reverseDirection: true
                },
                allowTouchMove: true,
                breakpoints: {
                    320: { spaceBetween: 16 },
                    640: { spaceBetween: 20 },
                    1024: { spaceBetween: 24 },
                    1280: { spaceBetween: 30 }
                }
            });
        });
    </script>
</div>
@endif
