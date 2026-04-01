@extends('cms.layouts.app')

@section('title', 'لوحة التحكم')
@section('heading', 'لوحة التحكم')

@section('content')
    <h1>مرحباً {{ auth()->user()->name }}</h1>
    <p class="muted mb">اختر القسم من القائمة الجانبية لتحرير محتوى الصفحات.</p>
    <div class="card">
        <div class="grid2">
            <div><span class="muted">أخبار</span><br><strong style="font-size:1.5rem;">{{ $newsCount }}</strong></div>
            <div><span class="muted">تواصل معلّق</span><br><strong style="font-size:1.5rem;">{{ $contactPending }}</strong></div>
            <div><span class="muted">شكاوى معلّقة</span><br><strong style="font-size:1.5rem;">{{ $complaintsPending }}</strong></div>
        </div>
    </div>
@endsection
