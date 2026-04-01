@extends('cms.layouts.app')
@section('title', 'التوظيف — الجزء العلوي')
@section('heading', 'الجزء العلوي (الهيرو)')
@section('content')
<div class="card wide">
    <p class="muted mb">قسم الهيرو في صفحة التوظيف على الموقع يُعرض من القالب الثابت (Blade) وليس من قاعدة البيانات. لتعديل النصوص أو الصور هناك، عدّل ملفات العرض أو الأصول في المشروع.</p>
    <p class="mb">يمكنك من القائمة الجانبية إدارة <strong>التصنيفات</strong> و<strong>الوظائف</strong> (المناصب) المعروضة في الصفحة.</p>
    <p><a href="{{ route('cp.jobs.categories.index') }}" class="btn" style="margin-inline-end:.5rem;">التصنيفات</a>
       <a href="{{ route('cp.jobs.positions.index') }}" class="btn" style="background:#0f172a;">الوظائف</a></p>
</div>
@endsection
