@php
$lang = app()->getLocale();
@endphp
<style>
    :root {
        --accent: #0b0947;
        --muted: #e9eefc;
    }
</style>
<header dir="{{ $lang == 'en' ? 'rtl' : 'ltr' }}" class="w-full py-6 relative">
    <div class="max-w-7xl mx-auto flex justify-between px-4">

        <div class="flex gap-3 items-center">
            <!-- Mobile Menu Button -->
            <button id="mobile-menu-button" class="sm:hidden flex flex-col gap-1.5 p-2"
                aria-label="{{ $lang == 'ar' ? 'القائمة' : 'Menu' }}">
                <span class="w-6 h-0.5 bg-neutral-800 transition-all duration-300" id="menu-line-1"></span>
                <span class="w-6 h-0.5 bg-neutral-800 transition-all duration-300" id="menu-line-2"></span>
                <span class="w-6 h-0.5 bg-neutral-800 transition-all duration-300" id="menu-line-3"></span>
            </button>

            <a href="https://partners.arabianpay.net/register" class="border border-[#020044] px-4 py-2.5 rounded-full hover:bg-neutral-100">
                {{ $lang == 'ar' ? 'انضم الآن' : 'Join Now' }}
            </a>

            @php
            $current = app()->getLocale(); // current locale (e.g. 'ar' or 'en')
            $other = $current === 'ar' ? 'en' : 'ar';
            // build the localized URL for the same current page but different locale
            $switchUrl = \Mcamara\LaravelLocalization\Facades\LaravelLocalization::getLocalizedURL($other, null, [],
            true);
            @endphp

            <a href="{{ $switchUrl }}" class="flex items-center gap-1" rel="alternate" hreflang="{{ $other }}">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                    fill="#1f1f1f">
                    <path
                        d="M480-80q-82 0-155-31.5t-127.5-86Q143-252 111.5-325T80-480q0-83 31.5-155.5t86-127Q252-817 325-848.5T480-880q83 0 155.5 31.5t127 86q54.5 54.5 86 127T880-480q0 82-31.5 155t-86 127.5q-54.5 54.5-127 86T480-80Zm0-82q26-36 45-75t31-83H404q12 44 31 83t45 75Zm-104-16q-18-33-31.5-68.5T322-320H204q29 50 72.5 87t99.5 55Zm208 0q56-18 99.5-55t72.5-87H638q-9 38-22.5 73.5T584-178ZM170-400h136q-3-20-4.5-39.5T300-480q0-21 1.5-40.5T306-560H170q-5 20-7.5 39.5T160-480q0 21 2.5 40.5T170-400Zm216 0h188q3-20 4.5-39.5T580-480q0-21-1.5-40.5T574-560H386q-3 20-4.5 39.5T380-480q0 21 1.5 40.5T386-400Zm268 0h136q5-20 7.5-39.5T800-480q0-21-2.5-40.5T790-560H654q3 20 4.5 39.5T660-480q0 21-1.5 40.5T654-400Zm-16-240h118q-29-50-72.5-87T584-782q18 33 31.5 68.5T638-640Zm-234 0h152q-12-44-31-83t-45-75q-26 36-45 75t-31 83Zm-200 0h118q9-38 22.5-73.5T376-782q-56 18-99.5 55T204-640Z" />
                </svg>

                <span>{{ $current === 'ar' ? 'EN' : 'AR' }}</span>
            </a>


        </div>

        <div class="flex items-center gap-5">
            <!-- Desktop Navigation -->
            <nav dir="{{ $lang == 'en' ? 'ltr' : 'rtl' }}" class="sm:flex hidden gap-6 text-neutral-800" style="direction: {{ $lang == 'en' ? 'ltr' : 'rtl' }} !important">

                <a href="{{ \Mcamara\LaravelLocalization\Facades\LaravelLocalization::getLocalizedURL($lang, '/') }}"
                    class="{{ request()->is($lang . '/') ? 'border-b-2 border-[var(--accent)]' : '' }}">
                    {{ $lang == 'ar' ? 'الرئيسية' : 'Home' }}
                </a>

                <a href="{{ LaravelLocalization::getLocalizedURL($lang, '/merchant') }}"
                    class="{{ request()->is($lang . '/merchant') ? 'border-b-2 border-[var(--accent)]' : '' }}">
                    {{ $lang == 'ar' ? 'العملاء' : 'Clients' }}
                </a>

                <a href="{{ LaravelLocalization::getLocalizedURL($lang, '/supplier') }}"
                    class="{{ request()->is($lang . '/supplier') ? 'border-b-2 border-[var(--accent)]' : '' }}">
                    {{ $lang == 'ar' ? 'الشركاء' : 'Partners' }}
                </a>

                <a href="{{ LaravelLocalization::getLocalizedURL($lang, '/about') }}"
                    class="{{ request()->is($lang . '/about') ? 'border-b-2 border-[var(--accent)]' : '' }}">
                    {{ $lang == 'ar' ? ' أرابيان باي' : 'ArabianPay' }}
                </a>

                <a href="{{ LaravelLocalization::getLocalizedURL($lang, '/news') }}"
                    class="{{ request()->is($lang . '/news') ? 'border-b-2 border-[var(--accent)]' : '' }}">
                    {{ $lang == 'ar' ? 'الأخبار' : 'News' }}
                </a>

                <a href="{{ LaravelLocalization::getLocalizedURL($lang, '/jobs') }}"
                    class="{{ request()->is($lang . '/jobs') ? 'border-b-2 border-[var(--accent)]' : '' }}">
                    {{ $lang == 'ar' ? 'التوظيف' : 'Jobs' }}
                </a>

                <a href="{{ LaravelLocalization::getLocalizedURL($lang, '/support') }}"
                    class="{{ request()->is($lang . '/support') ? 'border-b-2 border-[var(--accent)]' : '' }}">
                    {{ $lang == 'ar' ? 'مركز المساعدة' : 'Help Center' }}
                </a>


                

                

                

                

                

                

            </nav>

            <a href="{{ \Mcamara\LaravelLocalization\Facades\LaravelLocalization::getLocalizedURL($lang, '/') }}">
                <img class="bg-cover h-14" src="{{ asset('logo.png') }}" alt="">
            </a>

        </div>

    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu"
        class="sm:hidden fixed inset-0 bg-white z-50 transform translate-x-full transition-transform duration-300 ease-in-out"
        dir="{{ $lang == 'en' ? 'ltr' : 'rtl' }}">
        <div class="flex flex-col h-full">
            <!-- Header with close button -->
            <div class="flex justify-between items-center p-6 border-b">
                <h2 class="text-xl font-bold text-neutral-800">{{ $lang == 'ar' ? 'القائمة' : 'Menu' }}</h2>
                <button id="mobile-menu-close" class="p-2" aria-label="{{ $lang == 'ar' ? 'إغلاق' : 'Close' }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <!-- Menu Items -->
            <nav class="flex-1 overflow-y-auto p-0 space-y-4">

                <a href="{{ LaravelLocalization::getLocalizedURL($lang, '/contact') }}" class="block py-3 text-lg font-semibold text-neutral-800 px-6 transition-colors
                          {{ request()->is($lang . '/contact') ? ($lang === 'ar' 
                                        ? 'border-l-4 border-[#0b0947] text-[#0b0947]' 
                                        : 'border-t-4 border-[#0b0947] text-[#0b0947]'
                                ) : 'hover:text-[#020044]' }}">
                    {{ $lang == 'ar' ? 'اتصل بنا' : 'Contact' }}
                </a>

                <a href="{{ LaravelLocalization::getLocalizedURL($lang, '/support') }}" class="block py-3 text-lg font-semibold text-neutral-800 px-6 transition-colors
                          {{ request()->is($lang . '/support') ? ($lang === 'ar' 
                                        ? 'border-l-4 border-[#0b0947] text-[#0b0947]' 
                                        : 'border-t-4 border-[#0b0947] text-[#0b0947]'
                                ) : 'hover:text-[#020044]' }}">
                    {{ $lang == 'ar' ? 'مركز المساعدة' : 'Help Center' }}
                </a>

                <a href="{{ LaravelLocalization::getLocalizedURL($lang, '/news') }}" class="block py-3 text-lg font-semibold text-neutral-800 px-6 transition-colors
                          {{ request()->is($lang . '/news') ? ($lang === 'ar' 
                                        ? 'border-l-4 border-[#0b0947] text-[#0b0947]' 
                                        : 'border-t-4 border-[#0b0947] text-[#0b0947]'
                                ) : 'hover:text-[#020044]' }}">
                    {{ $lang == 'ar' ? 'الأخبار' : 'News' }}
                </a>

                <a href="{{ LaravelLocalization::getLocalizedURL($lang, '/jobs') }}" class="block py-3 text-lg font-semibold text-neutral-800 px-6 transition-colors
                          {{ request()->is($lang . '/jobs') ? ($lang === 'ar' 
                                        ? 'border-l-4 border-[#0b0947] text-[#0b0947]' 
                                        : 'border-t-4 border-[#0b0947] text-[#0b0947]'
                                ) : 'hover:text-[#020044]' }}">
                    {{ $lang == 'ar' ? 'الوظائف' : 'Jobs' }}
                </a>

                <a href="{{ LaravelLocalization::getLocalizedURL($lang, '/supplier') }}" class="block py-3 text-lg font-semibold text-neutral-800 px-6 transition-colors
                          {{ request()->is($lang . '/supplier') ? ($lang === 'ar' 
                                        ? 'border-l-4 border-[#0b0947] text-[#0b0947]' 
                                        : 'border-t-4 border-[#0b0947] text-[#0b0947]'
                                ) : 'hover:text-[#020044]' }}">
                    {{ $lang == 'ar' ? 'للمورد' : 'Supplier' }}
                </a>

                <a href="{{ LaravelLocalization::getLocalizedURL($lang, '/merchant') }}" class="block py-3 text-lg font-semibold text-neutral-800 px-6 transition-colors
                        {{ request()->is($lang . '/merchant') 
                                ? ($lang === 'ar' 
                                        ? 'border-l-4 border-[#0b0947] text-[#0b0947]' 
                                        : 'border-t-4 border-[#0b0947] text-[#0b0947]'
                                )
                                : 'hover:text-[#020044]'
                        }}">
                    {{ $lang == 'ar' ? 'التاجر' : 'Merchant' }}
                </a>


                <a href="{{ LaravelLocalization::getLocalizedURL($lang, '/about') }}" class="block py-3 text-lg font-semibold text-neutral-800 px-6 transition-colors
                          {{ request()->is($lang . '/about') ? ($lang === 'ar' 
                                        ? 'border-l-4 border-[#0b0947] text-[#0b0947]' 
                                        : 'border-t-4 border-[#0b0947] text-[#0b0947]'
                                ) : 'hover:text-[#020044]' }}">
                    {{ $lang == 'ar' ? 'أرابيان باي' : 'ArabianPay' }}
                </a>

            </nav>

        </div>
    </div>
</header>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const menuButton = document.getElementById('mobile-menu-button');
        const menuClose = document.getElementById('mobile-menu-close');
        const mobileMenu = document.getElementById('mobile-menu');
        const menuLine1 = document.getElementById('menu-line-1');
        const menuLine2 = document.getElementById('menu-line-2');
        const menuLine3 = document.getElementById('menu-line-3');
        const body = document.body;

        function openMenu() {
            mobileMenu.classList.remove('translate-x-full');
            body.style.overflow = 'hidden';
            // Animate hamburger to X
            menuLine1.classList.add('rotate-45', 'translate-y-2');
            menuLine2.classList.add('opacity-0');
            menuLine3.classList.add('-rotate-45', '-translate-y-2');
        }

        function closeMenu() {
            mobileMenu.classList.add('translate-x-full');
            body.style.overflow = '';
            // Animate X back to hamburger
            menuLine1.classList.remove('rotate-45', 'translate-y-2');
            menuLine2.classList.remove('opacity-0');
            menuLine3.classList.remove('-rotate-45', '-translate-y-2');
        }

        menuButton.addEventListener('click', openMenu);
        menuClose.addEventListener('click', closeMenu);

        // Close menu when clicking on a link
        const menuLinks = mobileMenu.querySelectorAll('a');
        menuLinks.forEach(link => {
            link.addEventListener('click', closeMenu);
        });

        // Close menu on escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && !mobileMenu.classList.contains('translate-x-full')) {
                closeMenu();
            }
        });
    });

</script>