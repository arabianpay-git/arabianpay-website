@extends('cms.layouts.app')
@section('title', 'الأحكام والشروط')
@section('heading', 'الأحكام والشروط')
@section('content')
<div class="card wide">
    <form action="{{ route('cp.terms.update') }}" method="post">
        @csrf @method('PUT')
        <div class="grid2">
            <div><label>عنوان عربي</label><input type="text" name="title_ar" value="{{ old('title_ar', $terms->title_ar) }}"></div>
            <div><label>عنوان إنجليزي</label><input type="text" name="title_en" value="{{ old('title_en', $terms->title_en) }}"></div>
        </div>
        <div class="grid2">
            <div><label>مقدمة عربي</label><textarea name="intro_ar">{{ old('intro_ar', $terms->intro_ar) }}</textarea></div>
            <div><label>مقدمة إنجليزي</label><textarea name="intro_en">{{ old('intro_en', $terms->intro_en) }}</textarea></div>
        </div>
        <div class="grid2">
            <div><label>نص عربي</label><textarea name="text_ar">{{ old('text_ar', $terms->text_ar) }}</textarea></div>
            <div><label>نص إنجليزي</label><textarea name="text_en">{{ old('text_en', $terms->text_en) }}</textarea></div>
        </div>
        <div class="mb"><label>JSON الهيرو</label><textarea name="jsoning_hero_raw" class="code" required>{{ old('jsoning_hero_raw', $jsoning_hero) }}</textarea></div>
        <div class="mb"><label>JSON المحتوى</label><textarea name="jsoning_content_raw" class="code" required>{{ old('jsoning_content_raw', $jsoning_content) }}</textarea></div>
        <button type="submit" class="btn">حفظ</button>
    </form>
</div>
@endsection
