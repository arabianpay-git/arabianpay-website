<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- <link rel="shortcut icon" type="image/x-icon" href="{{ asset('logo.png') }}"> --}}
    <title>@lang('messages.metatitle')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Arabic:wght@400;500;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cairo&family=Mozilla+Text:wght@200..700&family=Noto+Color+Emoji&family=Roboto:ital,wght@0,100..900;1,100..900&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@emran-alhaddad/saudi-riyal-font/index.css" />

    <link rel="stylesheet" href="https://unpkg.com/swiper@9/swiper-bundle.min.css" />
    <script src="https://unpkg.com/swiper@9/swiper-bundle.min.js"></script>
    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
    <style>
        body {
            font-family: "Nunito", "Arial", "Noto Sans Arabic", sans-serif;
        }

    </style>
    @endif

    <style>
        body {
            font-family: "Nunito", "Arial", "Noto Sans Arabic", sans-serif;
        }

        @font-face {
            font-family: 'Nunito';
            src: url('/Bahij_TheSansArabic-SemiBold.ttf');
            font-style: normal;
            font-display: swap;
            /* ensures text appears quickly */
        }

        .arab {
            font-family: 'Nunito';
            font-weight: 400;
        }

    </style>
    @livewireStyles
</head>
<body class="">
    <!-- Header -->
    @include('includes.appbare')

    @livewire('home.home-panner')

    {{-- @include('livewire.home.marketting-panner') --}}
    @livewire('home.marketting-panner')
    @livewire('home.why-panner')

    @livewire('home.partner')
    @livewire('home.brand-marquee')
    @livewire('home.faq-panner')

    @livewire('home.bottom-pannser')

    @include('includes.footer')

</body>
<script>
    // Intersection Observer animation: fade-in + slide-up
    document.addEventListener('DOMContentLoaded', () => {
        const animatedElements = Array.from(
            document.querySelectorAll('[data-animate], [data-delay]')
        ).filter(el =>
            el.classList.contains('opacity-0') ||
            el.classList.contains('translate-y-6') ||
            el.classList.contains('translate-x-[-30px]') ||
            el.classList.contains('translate-x-[30px]')
        );

        animatedElements.sort((a, b) => {
            const da = parseInt(a.getAttribute('data-delay') || '0', 10);
            const db = parseInt(b.getAttribute('data-delay') || '0', 10);
            return da - db;
        });

        // Require the element to be داخل الإطار بنسبة كافية قبل التحريك
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (!entry.isIntersecting || entry.intersectionRatio < 0.35) return;

                const el = entry.target;
                const delayAttr = parseInt(el.getAttribute('data-delay') || '0', 10);
                const baseStagger = 100;
                const index = animatedElements.indexOf(el);
                const finalDelay = delayAttr || (index * baseStagger);

                setTimeout(() => {
                    el.classList.remove('opacity-0', 'translate-y-6', 'translate-x-[-30px]', 'translate-x-[30px]');
                    el.classList.add('opacity-100', 'translate-y-0', 'translate-x-0', 'transition-all', 'duration-700', 'ease-out');
                }, finalDelay);

                observer.unobserve(el);
            });
        }, {
            threshold: 0.35,
            rootMargin: '0px 0px 0px 0px'
        });

        animatedElements.forEach(el => observer.observe(el));
    });
</script>
@livewireScripts
</html>
