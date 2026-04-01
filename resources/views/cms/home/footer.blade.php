@extends('cms.layouts.app')
@section('title', 'الفوتر — بيانات التواصل')
@section('heading', 'روابط وأرقام الفوتر (جدول socials)')
@section('content')
<div class="card wide">
    <p class="muted mb">يُحفظ في جدول <code>socials</code>. روابط المتاجر تُستخدم في الفوتر، وصفحة العملاء (أزرار التحميل)، ورابط «تحميل التطبيق» في القائمة.</p>
    <form action="{{ route('cp.home.footer.update') }}" method="post">
        @csrf @method('PUT')
        <div class="grid2">
            <div><label>هاتف 1</label><input type="text" name="phonea1" value="{{ old('phonea1', $row->phonea1) }}"></div>
            <div><label>هاتف 2</label><input type="text" name="phonea2" value="{{ old('phonea2', $row->phonea2) }}"></div>
            <div><label>سناب / آخر</label><input type="text" name="phonesana" value="{{ old('phonesana', $row->phonesana) }}"></div>
            <div><label>واتساب رقم</label><input type="text" name="phonewhats" value="{{ old('phonewhats', $row->phonewhats) }}"></div>
            <div><label>بريد</label><input type="email" name="mail" value="{{ old('mail', $row->mail) }}"></div>
            <div><label>رابط واتساب</label><input type="text" name="whatslink" value="{{ old('whatslink', $row->whatslink) }}"></div>
            <div><label>فيسبوك</label><input type="text" name="facelink" value="{{ old('facelink', $row->facelink) }}"></div>
            <div><label>تويتر / X</label><input type="text" name="twitterlink" value="{{ old('twitterlink', $row->twitterlink) }}"></div>
            <div><label>إنستغرام</label><input type="text" name="instegramlink" value="{{ old('instegramlink', $row->instegramlink) }}"></div>
            <div><label>WeChat</label><input type="text" name="wechatlink" value="{{ old('wechatlink', $row->wechatlink) }}"></div>
            <div><label>رابط App Store (آب ستور)</label><input type="url" name="app_store_url" placeholder="https://apps.apple.com/..." value="{{ old('app_store_url', $row->app_store_url) }}"></div>
            <div><label>رابط Google Play (جوجل بلاي)</label><input type="url" name="google_play_url" placeholder="https://play.google.com/..." value="{{ old('google_play_url', $row->google_play_url) }}"></div>
        </div>
        <button type="submit" class="btn">حفظ</button>
    </form>
</div>
@endsection
