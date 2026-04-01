<style>
    /* small customizations */
    :root {
        --navy: #F9FAFB;
        /* background close to the image */
        --muted: #060433;
    }

    /* pill input outline */
    .subscribe-pill {
        box-shadow: inset 0 0 0 1px rgba(255, 255, 255, 0.08);
    }

</style>
@php
$lang = app()->getLocale();
@endphp
<div dir="{{ $lang == 'ar' ? 'rtl' : 'ltr' }}" class="bg-[color:var(--navy)] text-[#060433] antialiased">

    <footer class="max-w-[1400px] mx-auto px-6 md:px-12 pb-8 pt-16">
        <!-- top subscribe row -->
        <div dir="{{ $lang == 'ar' ? 'rtl' : 'ltr' }}" class="sm:flex grid w-full ustify-between mb-12">
            <!-- right: small company paragraph and logo -->
            <div class="w-full text-sm text-[color:var(--muted)] leading-relaxed">
                <div class="">
                    <img class="h-14 object-contain" src="{{ asset('logo.png') }}" alt="">
                    <p class="max-w-md mt-2 text-justify">
                        {!! $lang == 'ar'
                            ? 'شركة ارايبان باي سجل تجاري رقم :1010913518 <br>
                            وبرقم ضريبي : 311774268600003 <br>
                            رقم الهاتف الموحد 920031271 <br>
                            الرقم المجاني 8001111063 <br>
                            شارع المعرفة، حي العليا، الرياض <br>
                            الرمز البريدي: 12311، رقم المبنى: 6746، الطابق الثاني، مكتب 201'
                            : 'ArabianPay commercial registration No: 1010913518 <br>
                            tax No: 311774268600003 <br>
                            Unified phone: 920031271 <br>
                            Toll-free: 8001111063 <br>
                            Address: Al-Maarefa Street, Olaya, Riyadh <br>
                            Postal Code: 12311, Building No: 6746, 2nd Floor, Office 201.'
                        !!}
                    </p>
                </div>
            </div>
             <!-- left: subscribe input -->
            <div class="flex items-center gap-4 w-full">
               
                <div class="flex-1">
                    <label class="sr-only">{{ $lang == 'ar' ? 'ادخل بريدك الالكتروني للاشتراك في آخر الأخبار' : 'Enter your email to get the latest news' }}</label>
                    <div class="subscribe-pill rounded-3xl flex items-center overflow-hidden">
                        <input type="email" placeholder="{{ $lang == 'ar' ? 'ادخل بريدك الالكتروني للاشتراك في آخر الأخبار' : 'Enter your email to get the latest news' }}" class="w-full border border-[#060433] rounded-full bg-transparent placeholder:opacity-60 px-6 py-3 text-right focus:outline-none text-sm" />
                    </div>
                </div>
                 <button class="flex-none bg-[#060433] text-[color:var(--navy)] font-semibold px-5 py-2 rounded-full shadow-sm">{{ $lang == 'ar' ? 'اشترك' : 'Subscribe' }}</button>

            </div>

        </div>

        <!-- main columns -->
        <div dir="{{ $lang == 'ar' ? 'ltr' : 'rtl' }}" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-6 gap-10 mb-12">
            <!-- column: app badges / contact -->
            <!-- badges -->
            <div class="space-y-4">
                <!-- App Store badge (simple styled button) -->
                <a dir="{{ $lang == 'ar' ? 'rtl' : 'ltr' }}" href="{{ $footerSocial?->app_store_url ?: '#' }}" @if(! empty($footerSocial?->app_store_url)) target="_blank" rel="noopener noreferrer" @endif class="inline-flex items-center justify-center gap-3 border border-dark rounded-lg px-3 py-2 w-40">
                    <svg width="18" height="22" viewBox="0 0 18 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14.7973 11.5804C14.819 9.89936 15.7217 8.30876 17.1539 7.4283C16.2504 6.13798 14.7371 5.31988 13.1627 5.27062C11.4835 5.09436 9.85552 6.27545 8.99981 6.27545C8.12754 6.27545 6.81004 5.28812 5.39131 5.31731C3.54206 5.37705 1.81809 6.42844 0.918393 8.04518C-1.01561 11.3936 0.426982 16.3146 2.27959 19.0213C3.20649 20.3466 4.28977 21.8271 5.70722 21.7746C7.09428 21.717 7.61232 20.8901 9.28662 20.8901C10.9454 20.8901 11.4314 21.7746 12.8776 21.7412C14.366 21.717 15.3038 20.4099 16.1981 19.072C16.8641 18.1277 17.3766 17.084 17.7166 15.9795C15.9674 15.2397 14.7994 13.4795 14.7973 11.5804Z" fill="black" />
                        <path d="M12.0656 3.49062C12.8772 2.51641 13.277 1.26423 13.1802 0C11.9403 0.13022 10.7951 0.722779 9.97259 1.65961C9.1683 2.57494 8.74975 3.80509 8.82888 5.021C10.0692 5.03377 11.2885 4.45727 12.0656 3.49062Z" fill="black" />
                    </svg>

                    <div class="text-left">
                        <div class="text-[10px] text-[color:var(--muted)]">{{ $lang == 'ar' ? 'تحميل من' : 'Download on the' }}</div>
                        <div class="text-sm">{{ $lang == 'ar' ? 'آب ستور' : 'App Store' }}</div>
                    </div>
                </a>

                <!-- Play Store badge -->
                <a dir="{{ $lang == 'ar' ? 'rtl' : 'ltr' }}" href="{{ $footerSocial?->google_play_url ?: '#' }}" @if(! empty($footerSocial?->google_play_url)) target="_blank" rel="noopener noreferrer" @endif class="inline-flex items-center justify-center gap-3 border border-dark rounded-lg px-3 py-2 w-40">
                    <svg width="24" height="26" viewBox="0 0 24 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g filter="url(#filter0_ii_1322_2971)">
                            <path d="M0.463001 0.397219C0.172001 0.705219 -4.27246e-07 1.18322 -4.27246e-07 1.80222V23.9182C-4.27246e-07 24.5382 0.172001 25.0152 0.463001 25.3232L0.537 25.3952L12.926 13.0062V12.8602V12.7142L0.537 0.324219L0.463001 0.397219Z" fill="url(#paint0_linear_1322_2971)" />
                            <path d="M17.0548 17.1389L12.9258 13.0079V12.8619V12.7159L17.0558 8.58594L17.1488 8.63894L22.0418 11.4189C23.4388 12.2129 23.4388 13.5119 22.0418 14.3069L17.1488 17.0869L17.0548 17.1389Z" fill="url(#paint1_linear_1322_2971)" />
                            <g filter="url(#filter1_i_1322_2971)">
                                <path d="M17.1489 17.0834L12.9249 12.8594L0.462891 25.3224C0.922891 25.8104 1.68389 25.8704 2.54089 25.3844L17.1489 17.0834Z" fill="url(#paint2_linear_1322_2971)" />
                            </g>
                            <path d="M17.1489 8.63608L2.54089 0.336075C1.68389 -0.150925 0.922891 -0.0899245 0.462891 0.398075L12.9259 12.8611L17.1489 8.63608Z" fill="url(#paint3_linear_1322_2971)" />
                        </g>
                        <defs>
                            <filter id="filter0_ii_1322_2971" x="0" y="0" width="23.0898" height="25.7188" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                <feOffset dy="-0.15" />
                                <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1" />
                                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.12 0" />
                                <feBlend mode="normal" in2="shape" result="effect1_innerShadow_1322_2971" />
                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                <feOffset dy="0.15" />
                                <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1" />
                                <feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0.25 0" />
                                <feBlend mode="normal" in2="effect1_innerShadow_1322_2971" result="effect2_innerShadow_1322_2971" />
                            </filter>
                            <filter id="filter1_i_1322_2971" x="0.462891" y="12.8594" width="16.6855" height="12.8594" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                <feOffset dy="-0.15" />
                                <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1" />
                                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.08 0" />
                                <feBlend mode="normal" in2="shape" result="effect1_innerShadow_1322_2971" />
                            </filter>
                            <linearGradient id="paint0_linear_1322_2971" x1="11.8278" y1="1.56822" x2="-4.9542" y2="18.3502" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#00A0FF" />
                                <stop offset="0.0066" stop-color="#00A1FF" />
                                <stop offset="0.2601" stop-color="#00BEFF" />
                                <stop offset="0.5122" stop-color="#00D2FF" />
                                <stop offset="0.7604" stop-color="#00DFFF" />
                                <stop offset="1" stop-color="#00E3FF" />
                            </linearGradient>
                            <linearGradient id="paint1_linear_1322_2971" x1="23.8603" y1="12.8619" x2="-0.335618" y2="12.8619" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#FFE000" />
                                <stop offset="0.4087" stop-color="#FFBD00" />
                                <stop offset="0.7754" stop-color="#FFA500" />
                                <stop offset="1" stop-color="#FF9C00" />
                            </linearGradient>
                            <linearGradient id="paint2_linear_1322_2971" x1="14.855" y1="15.1533" x2="-7.90351" y2="37.9118" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#FF3A44" />
                                <stop offset="1" stop-color="#C31162" />
                            </linearGradient>
                            <linearGradient id="paint3_linear_1322_2971" x1="-2.67571" y1="-6.96412" x2="7.48659" y2="3.19818" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#32A071" />
                                <stop offset="0.0685" stop-color="#2DA771" />
                                <stop offset="0.4762" stop-color="#15CF74" />
                                <stop offset="0.8009" stop-color="#06E775" />
                                <stop offset="1" stop-color="#00F076" />
                            </linearGradient>
                        </defs>
                    </svg>

                    <div class="text-left">
                        <div class="text-[10px] text-[color:var(--muted)]">{{ $lang == 'ar' ? 'الحصول عليه من' : 'GET IT ON' }}</div>
                        <div class="text-sm">{{ $lang == 'ar' ? 'جوجل بلاي' : 'Google Play' }}</div>
                    </div>
                </a>
            </div>
            <div class="space-y-1">

                <!-- contact -->
                <div dir="{{ $lang == 'ar' ? 'rtl' : 'ltr' }}">
                    <h4 class="text-lg mb-3 arab">{{ $lang == 'ar' ? 'اتصل بنا' : 'Contact Us' }}</h4>
                    <a href="{{ \Mcamara\LaravelLocalization\Facades\LaravelLocalization::getLocalizedURL(app()->getLocale(), '/contact') }}" class="text-[color:var(--muted)] text-sm hover:underline block">support@arabianpay.net</a>
                    <a href="tel:920031271" class="text-[color:var(--muted)] text-sm mt-1 hover:underline block">{{ $lang == 'ar' ? '920031271' : '920031271' }}</a>
                    <a href="tel:8001111063" class="text-[color:var(--muted)] text-sm mt-1 hover:underline block">{{ $lang == 'ar' ? '8001111063' : '8001111063' }}</a>
                </div>
            </div>

            <!-- column: support -->
            <div dir="{{ $lang == 'ar' ? 'rtl' : 'ltr' }}">
                <h4 class="text-lg mb-4 arab">{{ $lang == 'ar' ? 'الدعم' : 'Support' }}</h4>
                <ul class="space-y-3 text-[color:var(--muted)] text-sm">
                    <li><a href="{{ \Mcamara\LaravelLocalization\Facades\LaravelLocalization::getLocalizedURL(app()->getLocale(), '/support') }}" class="hover:underline">{{ $lang == 'ar' ? 'الأسئلة الشائعة' : 'FAQ' }}</a></li>
                    <li><a href="{{ \Mcamara\LaravelLocalization\Facades\LaravelLocalization::getLocalizedURL(app()->getLocale(), '/jobs') }}" class="hover:underline">{{ $lang == 'ar' ? 'الوظائف' : 'Jobs' }}</a></li>
                </ul>
            </div>

            <!-- column: provider/suppliers -->
            <div dir="{{ $lang == 'ar' ? 'rtl' : 'ltr' }}">
                <h4 class="text-lg mb-4 arab">{{ $lang == 'ar' ? 'للمورد' : 'For Suppliers' }}</h4>
                
                <ul class="space-y-3 text-[color:var(--muted)] text-sm">
                    <li><a href="{{ \Mcamara\LaravelLocalization\Facades\LaravelLocalization::getLocalizedURL(app()->getLocale(), '/supplier') }}" class="hover:underline">{{ $lang == 'ar' ? 'دليل الموردين' : 'Suppliers guide' }}</a></li>
                    <li><a href="{{ \Mcamara\LaravelLocalization\Facades\LaravelLocalization::getLocalizedURL(app()->getLocale(), '/supplier') }}" class="hover:underline">{{ $lang == 'ar' ? 'التكامل والربط' : 'API Integration' }}</a></li>
                    <li><a href="{{ \Mcamara\LaravelLocalization\Facades\LaravelLocalization::getLocalizedURL(app()->getLocale(), '/supplier') }}" class="hover:underline">{{ $lang == 'ar' ? 'الدفع والتحصيل' : 'Payments & Collections' }}</a></li>
                    <li><a href="{{ \Mcamara\LaravelLocalization\Facades\LaravelLocalization::getLocalizedURL(app()->getLocale(), '/supplier') }}" class="hover:underline">{{ $lang == 'ar' ? 'انضم كمورد' : 'Join as a supplier' }}</a></li>

                </ul>
            </div>

            <!-- column: merchant -->
            <div dir="{{ $lang == 'ar' ? 'rtl' : 'ltr' }}">
                <h4 class="text-lg mb-4 arab">{{ $lang == 'ar' ? 'للعميل' : 'For Clients' }}</h4>
                <ul class="space-y-3 text-[color:var(--muted)] text-sm">
                    <li><a href="{{ \Mcamara\LaravelLocalization\Facades\LaravelLocalization::getLocalizedURL(app()->getLocale(), '/merchant') }}" class="hover:underline">{{ $lang == 'ar' ? 'بماذا نخدمك' : 'How can we help you?' }}</a></li>
                    <li><a href="{{ \Mcamara\LaravelLocalization\Facades\LaravelLocalization::getLocalizedURL(app()->getLocale(), '/merchant') }}" class="hover:underline">{{ $lang == 'ar' ? 'كيفية التسجيل' : 'How to register?' }}</a></li>
                    <li><a href="{{ \Mcamara\LaravelLocalization\Facades\LaravelLocalization::getLocalizedURL(app()->getLocale(), '/merchant') }}" class="hover:underline">{{ $lang == 'ar' ? 'حماية المشتري' : 'Buyer Protection' }}</a></li>
                    <li>
                        <a href="{{ ($footerSocial?->google_play_url ?: $footerSocial?->app_store_url) ?: \Mcamara\LaravelLocalization\Facades\LaravelLocalization::getLocalizedURL(app()->getLocale(), '/merchant') }}"
                           class="hover:underline"
                           @if($footerSocial?->google_play_url || $footerSocial?->app_store_url) target="_blank" rel="noopener noreferrer" @endif>
                            {{ $lang == 'ar' ? 'تحميل التطبيق' : 'Download App' }}
                        </a>
                    </li>
                </ul>
            </div>

            <!-- column: about arabian pay -->
            <div dir="{{ $lang == 'ar' ? 'rtl' : 'ltr' }}">
                <h4 class="text-lg mb-4 arab">{{ $lang == 'ar' ? 'أرابيان باي' : 'ArabianPay' }}</h4>
                <ul class="space-y-3 text-[color:var(--muted)] text-sm">
                    <li><a href="{{ \Mcamara\LaravelLocalization\Facades\LaravelLocalization::getLocalizedURL($lang, '/news') }}" class="hover:underline">{{ $lang == 'ar' ? 'الأخبار' : 'News' }}</a></li>
                    <li><a href="{{ \Mcamara\LaravelLocalization\Facades\LaravelLocalization::getLocalizedURL($lang, '/about') }}" class="hover:underline">{{ $lang == 'ar' ? 'عن أرابيان باي' : 'About ArabianPay' }}</a></li>
                    <li><a href="{{ \Mcamara\LaravelLocalization\Facades\LaravelLocalization::getLocalizedURL($lang, '/terms') }}" class="hover:underline">{{ $lang == 'ar' ? 'الشروط والأحكام' : 'Terms & Conditions' }}</a></li>
                    <li><a href="{{ \Mcamara\LaravelLocalization\Facades\LaravelLocalization::getLocalizedURL($lang, '/policies') }}" class="hover:underline">{{ $lang == 'ar' ? 'سياسة الخصوصية' : 'Privacy policy' }}</a></li>
                </ul>
            </div>
        </div>

        <!-- bottom bar: social + copyright -->
        <div dir="{{ $lang == 'ar' ? 'rtl' : 'ltr' }}" class="sm:flex grid items-center justify-between gap-6 border-t border-white/10 pt-4 text-[color:var(--muted)] text-sm">
            <div class="flex items-center gap-4">
                <!-- social icons placeholders -->
                <a class="p-2 rounded-full bg-[#060433]" href="#" aria-label="tiktok">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_1322_3015)">
                            <path d="M16 8.24537V15.5C16 19.0899 13.0899 22 9.5 22C5.91015 22 3 19.0899 3 15.5C3 11.9101 5.91015 9 9.5 9C10.0163 9 10.5185 9.06019 11 9.17393V12.3368C10.5454 12.1208 10.0368 12 9.5 12C7.567 12 6 13.567 6 15.5C6 17.433 7.567 19 9.5 19C11.433 19 13 17.433 13 15.5V2H16C16 4.76142 18.2386 7 21 7V10C19.1081 10 17.3696 9.34328 16 8.24537Z" fill="#E6E7FF" />
                        </g>
                        <defs>
                            <clipPath id="clip0_1322_3015">
                                <rect width="24" height="24" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>

                </a>
                <a class="p-2 rounded-full bg-[#060433]" href="#" aria-label="instagram">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_1322_3018)">
                            <g clip-path="url(#clip1_1322_3018)">
                                <path d="M13.0271 2C14.1525 2.00186 14.7228 2.00781 15.2156 2.02248L15.4097 2.02883C15.6339 2.0368 15.8551 2.0468 16.1218 2.0593C17.1859 2.10846 17.9118 2.2768 18.5493 2.5243C19.2084 2.77846 19.7651 3.1218 20.3209 3.67763C20.8759 4.23346 21.2193 4.7918 21.4743 5.4493C21.7209 6.08596 21.8893 6.81263 21.9393 7.8768C21.9512 8.14346 21.9608 8.36466 21.9687 8.58891L21.975 8.78299C21.9896 9.27574 21.9963 9.84612 21.9984 10.9715L21.9992 11.7172C21.9993 11.8083 21.9993 11.9023 21.9993 11.9993L21.9992 12.2814L21.9986 13.0271C21.9967 14.1525 21.9908 14.7228 21.9761 15.2156L21.9697 15.4097C21.9618 15.6339 21.9518 15.8551 21.9393 16.1218C21.8901 17.1859 21.7209 17.9118 21.4743 18.5493C21.2201 19.2084 20.8759 19.7651 20.3209 20.3209C19.7651 20.8759 19.2059 21.2193 18.5493 21.4743C17.9118 21.7209 17.1859 21.8893 16.1218 21.9393C15.8551 21.9512 15.6339 21.9608 15.4097 21.9687L15.2156 21.975C14.7228 21.9896 14.1525 21.9963 13.0271 21.9984L12.2814 21.9992C12.1903 21.9993 12.0963 21.9993 11.9993 21.9993L11.7172 21.9992L10.9715 21.9986C9.84612 21.9967 9.27574 21.9908 8.78299 21.9761L8.58891 21.9697C8.36466 21.9618 8.14346 21.9518 7.8768 21.9393C6.81263 21.8901 6.08763 21.7209 5.4493 21.4743C4.79096 21.2201 4.23346 20.8759 3.67763 20.3209C3.1218 19.7651 2.7793 19.2059 2.5243 18.5493C2.2768 17.9118 2.1093 17.1859 2.0593 16.1218C2.04742 15.8551 2.03773 15.6339 2.02988 15.4097L2.02359 15.2156C2.00896 14.7228 2.00229 14.1525 2.00013 13.0271L2 10.9715C2.00186 9.84612 2.00781 9.27574 2.02248 8.78299L2.02883 8.58891C2.0368 8.36466 2.0468 8.14346 2.0593 7.8768C2.10846 6.8118 2.2768 6.0868 2.5243 5.4493C2.77846 4.79096 3.1218 4.23346 3.67763 3.67763C4.23346 3.1218 4.7918 2.7793 5.4493 2.5243C6.0868 2.2768 6.8118 2.1093 7.8768 2.0593C8.14346 2.04742 8.36466 2.03773 8.58891 2.02988L8.78299 2.02359C9.27574 2.00896 9.84612 2.00229 10.9715 2.00013L13.0271 2ZM11.9993 6.9993C9.2364 6.9993 6.9993 9.23883 6.9993 11.9993C6.9993 14.7622 9.23883 16.9993 11.9993 16.9993C14.7622 16.9993 16.9993 14.7597 16.9993 11.9993C16.9993 9.2364 14.7597 6.9993 11.9993 6.9993ZM11.9993 8.9993C13.6562 8.9993 14.9993 10.3419 14.9993 11.9993C14.9993 13.6562 13.6566 14.9993 11.9993 14.9993C10.3424 14.9993 8.9993 13.6566 8.9993 11.9993C8.9993 10.3424 10.3419 8.9993 11.9993 8.9993ZM17.2493 5.4993C16.56 5.4993 15.9993 6.0592 15.9993 6.74845C15.9993 7.43769 16.5592 7.99846 17.2493 7.99846C17.9385 7.99846 18.4993 7.43856 18.4993 6.74845C18.4993 6.0592 17.9376 5.49843 17.2493 5.4993Z" fill="#E6E7FF" />
                            </g>
                        </g>
                        <defs>
                            <clipPath id="clip0_1322_3018">
                                <rect width="24" height="24" fill="white" />
                            </clipPath>
                            <clipPath id="clip1_1322_3018">
                                <rect width="24" height="24" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>

                </a>
                <a class="p-2 rounded-full bg-[#060433]" href="#" aria-label="linkedin">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_1322_3023)">
                            <path d="M18.3352 18.339H15.6697V14.1622C15.6697 13.1662 15.6495 11.8845 14.2807 11.8845C12.891 11.8845 12.6787 12.9683 12.6787 14.0887V18.339H10.0132V9.75H12.5737V10.9207H12.6082C12.966 10.2457 13.836 9.53325 15.1357 9.53325C17.8365 9.53325 18.336 11.3108 18.336 13.6245L18.3352 18.339ZM7.00275 8.57475C6.14475 8.57475 5.4555 7.88025 5.4555 7.026C5.4555 6.1725 6.1455 5.47875 7.00275 5.47875C7.85775 5.47875 8.55075 6.1725 8.55075 7.026C8.55075 7.88025 7.857 8.57475 7.00275 8.57475ZM8.33925 18.339H5.66625V9.75H8.33925V18.339ZM19.6687 3H4.32825C3.594 3 3 3.5805 3 4.29675V19.7033C3 20.4202 3.594 21 4.32825 21H19.6665C20.4 21 21 20.4202 21 19.7033V4.29675C21 3.5805 20.4 3 19.6665 3H19.6687Z" fill="#E6E7FF" />
                        </g>
                        <defs>
                            <clipPath id="clip0_1322_3023">
                                <rect width="24" height="24" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>

                </a>
                <a class="p-2 rounded-full bg-[#060433]" href="#" aria-label="twitter">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_1322_3026)">
                            <g clip-path="url(#clip1_1322_3026)">
                                <path d="M13.516 10.7756L19.468 4H18.0578L12.8873 9.88196L8.76069 4H4L10.2417 12.8953L4 20H5.41025L10.8671 13.787L15.226 20H19.9867L13.516 10.7756ZM11.5838 12.9734L10.9505 12.0871L5.91881 5.04119H8.08525L12.1471 10.7296L12.7778 11.6159L18.0571 19.0096H15.8907L11.5838 12.9734Z" fill="#E6E7FF" />
                            </g>
                        </g>
                        <defs>
                            <clipPath id="clip0_1322_3026">
                                <rect width="24" height="24" fill="white" />
                            </clipPath>
                            <clipPath id="clip1_1322_3026">
                                <rect width="24" height="24" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>

                </a> 
            </div>

            <div class="sm:flex flex-wrap {{ $lang == 'ar' ? 'text-right' : 'text-left' }}">
                <div class="mb-2 mr-5 ml-5">
                    {{ $lang == 'ar'
                        ? '© 2025 أرابيان باي. كل الحقوق محفوظة'
                        : '© 2025 ArabianPay. All rights reserved'
                    }}
                </div>

                <div class="flex flex-wrap gap-4 {{ $lang == 'ar' ? 'justify-end' : 'justify-start' }}">
                    <a href="{{ \Mcamara\LaravelLocalization\Facades\LaravelLocalization::getLocalizedURL(app()->getLocale(), '/policies') }}"
                    class="hover:underline">
                        {{ $lang == 'ar' ? 'سياسة الخصوصية' : 'Privacy Policy' }}
                    </a>

                    <a href="{{ \Mcamara\LaravelLocalization\Facades\LaravelLocalization::getLocalizedURL(app()->getLocale(), '/terms') }}"
                    class="hover:underline">
                        {{ $lang == 'ar' ? 'الشروط والأحكام' : 'Terms & Conditions' }}
                    </a>

                    <a href="#"
                    class="hover:underline">
                        {{ $lang == 'ar' ? 'حماية المستهلك' : 'Consumer Protection' }}
                    </a>
                </div>
            </div>
        </div>
    </footer>

</div>
