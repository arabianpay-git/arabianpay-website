<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'لوحة المحتوى') — ArabianPay</title>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        :root { --navy:#0B1140; --line:#e2e8f0; --muted:#64748b; --bg:#f8fafc; }
        * { box-sizing: border-box; }
        body { margin:0; font-family:'Tajawal',sans-serif; background:var(--bg); color:#0f172a; min-height:100vh; }
        a { color:#2563eb; text-decoration:none; }
        .shell { display:flex; min-height:100vh; }
        .side { width:280px; flex-shrink:0; background:linear-gradient(180deg,var(--navy),#121a5c); color:#fff; padding:1rem 0; overflow-y:auto; max-height:100vh; }
        .brand { padding:0 1rem 1rem; border-bottom:1px solid rgba(255,255,255,.12); margin-bottom:.75rem; }
        .brand strong { display:block; font-size:1.05rem; }
        .brand small { opacity:.75; font-size:.78rem; }
        details.nav-g { margin:.15rem 0; }
        details.nav-g > summary {
            list-style:none; cursor:pointer; padding:.55rem 1rem; font-size:.88rem; font-weight:700;
            color:rgba(255,255,255,.92); user-select:none;
        }
        details.nav-g > summary::-webkit-details-marker { display:none; }
        details.nav-g > summary::before { content:'▸ '; display:inline-block; transition:transform .15s; }
        details.nav-g[open] > summary::before { transform:rotate(90deg); }
        .sub a {
            display:block; padding:.4rem .85rem .4rem 1.5rem; font-size:.84rem; color:rgba(255,255,255,.82);
            border-inline-start:3px solid transparent;
        }
        .sub a:hover, .sub a.active { background:rgba(255,255,255,.07); border-inline-start-color:#60a5fa; color:#fff; }
        .main { flex:1; display:flex; flex-direction:column; min-width:0; }
        .top { background:#fff; border-bottom:1px solid var(--line); padding:.75rem 1.25rem; display:flex; justify-content:space-between; align-items:center; }
        .content { padding:1.25rem; flex:1; }
        .card { background:#fff; border:1px solid var(--line); border-radius:12px; padding:1.25rem; max-width:920px; }
        .card.wide { max-width:1100px; }
        h1 { margin:0 0 1rem; font-size:1.2rem; }
        label { display:block; font-size:.82rem; color:var(--muted); margin-bottom:.3rem; font-weight:500; }
        input[type=text],input[type=email],input[type=password],input[type=date],input[type=number],textarea,select {
            width:100%; padding:.5rem .65rem; border:1px solid var(--line); border-radius:8px; font:inherit;
        }
        textarea { min-height:90px; resize:vertical; }
        textarea.code { min-height:200px; font-family:ui-monospace,monospace; font-size:.78rem; direction:ltr; text-align:left; }
        .grid2 { display:grid; gap:1rem; }
        @media(min-width:700px){ .grid2 { grid-template-columns:1fr 1fr; } }
        .btn { display:inline-flex; align-items:center; padding:.5rem 1rem; border-radius:8px; border:none; font:inherit; font-weight:600; cursor:pointer; background:#2563eb; color:#fff; }
        .btn:hover { filter:brightness(1.05); }
        .alert { padding:.65rem 1rem; border-radius:8px; margin-bottom:1rem; }
        .ok { background:#ecfdf5; color:#065f46; border:1px solid #a7f3d0; }
        .err { background:#fef2f2; color:#991b1b; border:1px solid #fecaca; }
        .muted { color:var(--muted); font-size:.88rem; }
        table.d { width:100%; border-collapse:collapse; font-size:.88rem; }
        table.d th, table.d td { padding:.5rem .6rem; border-bottom:1px solid var(--line); text-align:start; }
        .mb { margin-bottom:1rem; }
    </style>
    @stack('head')
</head>
<body>
<div class="shell">
    <aside class="side">
        <div class="brand">
            <strong>ArabianPay</strong>
            <small>لوحة محتوى الموقع</small>
        </div>

        <nav>
            <a href="{{ route('cp.dashboard') }}" class="sub" style="padding:.55rem 1rem;font-weight:600;">الرئيسية</a>

            <details class="nav-g" open>
                <summary>الرئيسية (الموقع)</summary>
                <div class="sub">
                    <a href="{{ route('cp.home.hero') }}" class="{{ request()->routeIs('cp.home.hero*') ? 'active' : '' }}">الجزء العلوي</a>
                    <a href="{{ route('cp.home.features') }}" class="{{ request()->routeIs('cp.home.features*') ? 'active' : '' }}">نضمن لك</a>
                    <a href="{{ route('cp.home.marketing') }}" class="{{ request()->routeIs('cp.home.marketing*') ? 'active' : '' }}">ليش تختار ارابيان باي</a>
                    <a href="{{ route('cp.home.partners') }}" class="{{ request()->routeIs('cp.home.partners*') ? 'active' : '' }}">الموردين</a>
                    <a href="{{ route('cp.home.customers.index') }}" class="{{ request()->routeIs('cp.home.customers*') ? 'active' : '' }}">العلامات التجارية</a>
                    <a href="{{ route('cp.home.qa') }}" class="{{ request()->routeIs('cp.home.qa*') ? 'active' : '' }}">الأسئلة الشائعة</a>
                    <a href="{{ route('cp.home.bottom') }}" class="{{ request()->routeIs('cp.home.bottom*') ? 'active' : '' }}">الجزء الأسفل</a>
                    <a href="{{ route('cp.home.footer') }}" class="{{ request()->routeIs('cp.home.footer*') ? 'active' : '' }}">الفوتر (تواصل)</a>
                </div>
            </details>

            <details class="nav-g" open>
                <summary>العملاء</summary>
                <div class="sub">
                    <a href="{{ route('cp.clients.merchant') }}" class="{{ request()->routeIs('cp.clients.merchant*') ? 'active' : '' }}">الجزء العلوي</a>
                    <a href="{{ route('cp.clients.merchant') }}" class="{{ request()->routeIs('cp.clients.merchant*') ? 'active' : '' }}">منصة تفهمك</a>
                    <a href="{{ route('cp.clients.motivation') }}" class="{{ request()->routeIs('cp.clients.motivation*') ? 'active' : '' }}">اختارها ندفعها</a>
                    <a href="{{ route('cp.clients.steps') }}" class="{{ request()->routeIs('cp.clients.steps*') ? 'active' : '' }}">كيف تحصل على التمويل</a>
                </div>
            </details>

            <details class="nav-g" open>
                <summary>الشركاء</summary>
                <div class="sub">
                    <a href="{{ route('cp.partners.hero') }}" class="{{ request()->routeIs('cp.partners.hero*') ? 'active' : '' }}">الجزء العلوي</a>
                    <a href="{{ route('cp.partners.middle') }}" class="{{ request()->routeIs('cp.partners.middle*') ? 'active' : '' }}">منصة تفهمك</a>
                    <a href="{{ route('cp.partners.middle') }}" class="{{ request()->routeIs('cp.partners.middle*') ? 'active' : '' }}">اختارها ندفعها</a>
                    <a href="{{ route('cp.partners.bottom') }}" class="{{ request()->routeIs('cp.partners.bottom*') ? 'active' : '' }}">كيف تحصل على التمويل</a>
                </div>
            </details>

            <details class="nav-g" open>
                <summary>ارابيان باي</summary>
                <div class="sub">
                    <a href="{{ route('cp.about.banner') }}" class="{{ request()->routeIs('cp.about.banner*') ? 'active' : '' }}">الجزء العلوي</a>
                    <a href="{{ route('cp.about.vision') }}" class="{{ request()->routeIs('cp.about.vision*') ? 'active' : '' }}">منصة تفهمك</a>
                    <a href="{{ route('cp.about.values') }}" class="{{ request()->routeIs('cp.about.values*') ? 'active' : '' }}">اختارها ندفعها</a>
                    <a href="{{ route('cp.about.map') }}" class="{{ request()->routeIs('cp.about.map*') ? 'active' : '' }}">كيف تحصل على التمويل</a>
                </div>
            </details>

            <details class="nav-g" open>
                <summary>الأخبار</summary>
                <div class="sub">
                    <a href="{{ route('cp.news.index') }}" class="{{ request()->routeIs('cp.news.*') ? 'active' : '' }}">قائمة الأخبار</a>
                    <a href="{{ route('cp.news.create') }}">خبر جديد</a>
                </div>
            </details>

            <details class="nav-g" open>
                <summary>التوظيف</summary>
                <div class="sub">
                    <a href="{{ route('cp.jobs.hero') }}" class="{{ request()->routeIs('cp.jobs.hero') ? 'active' : '' }}">الجزء العلوي</a>
                    <a href="{{ route('cp.jobs.categories.index') }}" class="{{ request()->routeIs('cp.jobs.categories*') ? 'active' : '' }}">منصة تفهمك (التصنيفات)</a>
                    <a href="{{ route('cp.jobs.positions.index') }}" class="{{ request()->routeIs('cp.jobs.positions*') ? 'active' : '' }}">اختارها ندفعها (الوظائف)</a>
                    <a href="{{ route('cp.jobs.positions.create') }}">كيف تحصل على التمويل (إضافة وظيفة)</a>
                </div>
            </details>

            <details class="nav-g" open>
                <summary>مركز المساعدة</summary>
                <div class="sub">
                    <a href="{{ route('cp.support.hero') }}" class="{{ request()->routeIs('cp.support.hero*') ? 'active' : '' }}">الجزء العلوي</a>
                    <a href="{{ route('cp.support.content') }}" class="{{ request()->routeIs('cp.support.content*') ? 'active' : '' }}">منصة تفهمك</a>
                    <a href="{{ route('cp.support.categories.index') }}" class="{{ request()->routeIs('cp.support.categories*') ? 'active' : '' }}">اختارها ندفعها (التصنيفات)</a>
                    <a href="{{ route('cp.support.contact') }}" class="{{ request()->routeIs('cp.support.contact*') ? 'active' : '' }}">كيف تحصل على التمويل (تواصل)</a>
                </div>
            </details>

            <details class="nav-g">
                <summary>أخرى</summary>
                <div class="sub">
                    <a href="{{ route('cp.contact-page.edit') }}" class="{{ request()->routeIs('cp.contact-page.*') ? 'active' : '' }}">صفحة اتصل بنا</a>
                    <a href="{{ route('cp.terms.edit') }}">الأحكام والشروط</a>
                    <a href="{{ route('cp.contact-requests.index') }}">طلبات التواصل</a>
                    <a href="{{ route('cp.complaints.index') }}">الشكاوى</a>
                    <a href="{{ url('/') }}" target="_blank" rel="noopener">عرض الموقع</a>
                    <form action="{{ route('cp.logout') }}" method="post" style="margin:.5rem 0 0;">@csrf<button type="submit" class="btn" style="width:100%;background:transparent;border:1px solid rgba(255,255,255,.3);color:#fff;">خروج</button></form>
                </div>
            </details>
        </nav>
    </aside>
    <div class="main">
        <header class="top">
            <span class="muted">@yield('heading', '')</span>
            <span class="muted">{{ auth()->user()->name ?? '' }}</span>
        </header>
        <main class="content">
            @if (session('success'))<div class="alert ok">{{ session('success') }}</div>@endif
            @if ($errors->any())
                <div class="alert err"><ul style="margin:0;padding-inline-start:1.1rem;">@foreach ($errors->all() as $e)<li>{{ $e }}</li>@endforeach</ul></div>
            @endif
            @yield('content')
        </main>
    </div>
</div>
@stack('scripts')
</body>
</html>
