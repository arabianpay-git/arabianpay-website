@extends('cms.layouts.app')
@section('title', 'صفحة اتصل بنا')
@section('heading', 'صفحة اتصل بنا')
@section('content')
<div class="card wide">
    <p class="muted mb">يُطبَّق المحفوظ على المسار <code dir="ltr">/contact</code> (مثل <code dir="ltr">/ar/contact</code>).</p>
    <form action="{{ route('cp.contact-page.update') }}" method="post" enctype="multipart/form-data">
        @csrf @method('PUT')
        <div class="grid2">
            <div><label>عنوان الصفحة (عربي)</label><input type="text" name="title_ar" value="{{ old('title_ar', $block->title_ar) }}" placeholder="مثال: تواصل معنا"></div>
            <div><label>عنوان الصفحة (إنجليزي)</label><input type="text" name="title_en" value="{{ old('title_en', $block->title_en) }}" placeholder="Contact Us"></div>
        </div>
        <div class="mb">
            <label>صورة خلفية الهيدر (بانر)</label>
            <p class="muted" style="font-size:.8rem;margin:.35rem 0 .5rem;">صيغ مقبولة: JPG، PNG، WebP، GIF — حتى 5 ميغابايت. إن لم ترفع صورة يُستخدم التصميم الافتراضي.</p>
            @if($block->hero_image)
                <div class="mb" style="max-width:420px;">
                    <img src="{{ storage_public_url($block->hero_image) }}" alt="" style="max-width:100%;border-radius:8px;border:1px solid var(--line);">
                </div>
                <label style="display:flex;align-items:center;gap:.5rem;font-weight:400;cursor:pointer;">
                    <input type="checkbox" name="remove_hero_image" value="1" {{ old('remove_hero_image') ? 'checked' : '' }}>
                    إزالة الصورة والعودة للصورة الافتراضية
                </label>
            @endif
            <input type="file" name="hero_image" accept="image/*" style="margin-top:.5rem;">
        </div>
        <div class="mb">
            <label>JSON — بطاقات القسم العلوي والعمود الجانبي</label>
            <p class="muted" style="font-size:.8rem;margin:.35rem 0 .75rem;">
                مصفوفة عناصر: للبانر العلوي استخدم <code dir="ltr">title_ar</code>، <code dir="ltr">title_en</code>، <code dir="ltr">des_ar</code>، <code dir="ltr">des_en</code>، <code dir="ltr">icon</code> (HTML).
                لعمود «معلومات التواصل» أضف لكل عنصر <code dir="ltr">title_ar/en</code>، <code dir="ltr">value_ar</code> أو <code dir="ltr">value</code>، واختياري <code dir="ltr">link</code>، <code dir="ltr">type</code> (<code dir="ltr">email</code> | <code dir="ltr">phone</code> | <code dir="ltr">address</code>).
            </p>
            <textarea name="jsoning_raw" class="code" required>{{ old('jsoning_raw', $jsoning) }}</textarea>
        </div>
        <button type="submit" class="btn">حفظ</button>
    </form>
</div>
@endsection
