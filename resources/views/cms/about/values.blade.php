@extends('cms.layouts.app')
@section('title', 'من نحن — القيم')
@section('heading', 'اختارها ندفعها (القيم)')
@section('content')
<div class="card wide">
    <form action="{{ route('cp.about.values.update') }}" method="post">
        @csrf @method('PUT')
        <div class="grid2">
            <div><label>عنوان عربي</label><input type="text" name="title_ar" value="{{ old('title_ar', $block->title_ar) }}"></div>
            <div><label>عنوان إنجليزي</label><input type="text" name="title_en" value="{{ old('title_en', $block->title_en) }}"></div>
            <div><label>وصف عربي</label><input type="text" name="des_ar" value="{{ old('des_ar', $block->des_ar) }}"></div>
            <div><label>وصف إنجليزي</label><input type="text" name="des_en" value="{{ old('des_en', $block->des_en) }}"></div>
        </div>
        <div class="mb"><label>JSON</label><textarea name="jsoning_raw" class="code" required>{{ old('jsoning_raw', $jsoning) }}</textarea></div>
        <button type="submit" class="btn">حفظ</button>
    </form>
</div>
@endsection
