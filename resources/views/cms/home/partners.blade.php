@extends('cms.layouts.app')
@section('title', 'الموردين')
@section('heading', 'قسم الموردين')
@section('content')
<div class="card wide">
    <h1>شركاء / موردين</h1>
    <form action="{{ route('cp.home.partners.update') }}" method="post">
        @csrf @method('PUT')
        <div class="grid2">
            <div><label>عنوان عربي</label><input type="text" name="title_ar" value="{{ old('title_ar', $block->title_ar) }}"></div>
            <div><label>عنوان إنجليزي</label><input type="text" name="title_en" value="{{ old('title_en', $block->title_en) }}"></div>
            <div><label>رابط عربي</label><input type="text" name="link_ar" value="{{ old('link_ar', $block->link_ar) }}"></div>
            <div><label>رابط إنجليزي</label><input type="text" name="link_en" value="{{ old('link_en', $block->link_en) }}"></div>
        </div>
        <div class="mb"><label>JSON الصور (مصفوفة كما في قاعدة البيانات)</label>
            <p class="muted mb" style="font-size:.82rem;">لكل عنصر: <code>file</code>، <code>position</code> (top/bottom)، واختياريًا <code>name_ar</code> و<code>name_en</code> للعلامة التجارية أسفل اللوجو.</p>
            <textarea name="images_json" class="code" required>{{ old('images_json', json_encode($block->image ?? [], JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT)) }}</textarea>
        </div>
        <button type="submit" class="btn">حفظ</button>
    </form>
</div>
@endsection
