<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@lang('messages.metatitle') - {{ app()->getLocale() == 'ar' ? 'تفاصيل الخبر' : 'News Detail' }}</title>

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
            src: url('/Bahij_TheSansArabic-SemiBold.ttf') format('opentype');
            font-style: normal;
            font-display: swap;
        }

        .arab {
            font-family: 'Nunito';
            font-weight: 700;
        }
    </style>
</head>
<body class="">
    <!-- Header -->
    @include('includes.appbare')

    @livewire('news.news-detail', ['id' => $id])

    @include('includes.footer')
</body>
</html>

