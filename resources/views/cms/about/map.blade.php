@extends('cms.layouts.app')
@section('title', 'من نحن — الخريطة')
@section('heading', 'كيف تحصل على التمويل (الخريطة والإحصائيات)')
@section('content')
<div class="card wide">
    <form action="{{ route('cp.about.map.update') }}" method="post" enctype="multipart/form-data">
        @csrf @method('PUT')
        <div class="grid2">
            <div><label>عنوان عربي</label><input type="text" name="title_ar" value="{{ old('title_ar', $block->title_ar) }}"></div>
            <div><label>عنوان إنجليزي</label><input type="text" name="title_en" value="{{ old('title_en', $block->title_en) }}"></div>
        </div>
        <div class="grid2">
            <div><label>فقرة 1 عربي</label><textarea name="des_ar">{{ old('des_ar', $block->des_ar) }}</textarea></div>
            <div><label>فقرة 1 إنجليزي</label><textarea name="des_en">{{ old('des_en', $block->des_en) }}</textarea></div>
            <div><label>فقرة 2 عربي</label><textarea name="des2_ar">{{ old('des2_ar', $block->des2_ar) }}</textarea></div>
            <div><label>فقرة 2 إنجليزي</label><textarea name="des2_en">{{ old('des2_en', $block->des2_en) }}</textarea></div>
        </div>
        <div class="mb"><label>JSON إحصائيات</label><textarea name="jsoning_raw" class="code" required>{{ old('jsoning_raw', $jsoning) }}</textarea></div>
        <div class="mb"><label>صورة</label><input type="file" name="image" accept="image/*"><span class="muted">{{ $block->image }}</span></div>
        <button type="submit" class="btn">حفظ</button>
    </form>
</div>
@endsection
