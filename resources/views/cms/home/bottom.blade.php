@extends('cms.layouts.app')
@section('title', 'الجزء الأسفل — الرئيسية')
@section('heading', 'الجزء السفلي')
@section('content')
<div class="card wide">
    <form action="{{ route('cp.home.bottom.update') }}" method="post">
        @csrf @method('PUT')
        <div class="grid2">
            <div><label>عنوان عربي</label><input type="text" name="title_ar" value="{{ old('title_ar', $block->title_ar) }}"></div>
            <div><label>عنوان إنجليزي</label><input type="text" name="title_en" value="{{ old('title_en', $block->title_en) }}"></div>
            <div><label>وصف عربي</label><textarea name="des_ar">{{ old('des_ar', $block->des_ar) }}</textarea></div>
            <div><label>وصف إنجليزي</label><textarea name="des_en">{{ old('des_en', $block->des_en) }}</textarea></div>
            <div><label>آيفون عربي</label><input type="text" name="iphone_ar" value="{{ old('iphone_ar', $block->iphone_ar) }}"></div>
            <div><label>آيفون إنجليزي</label><input type="text" name="iphone_en" value="{{ old('iphone_en', $block->iphone_en) }}"></div>
            <div><label>أندرويد عربي</label><input type="text" name="and_ar" value="{{ old('and_ar', $block->and_ar) }}"></div>
            <div><label>أندرويد إنجليزي</label><input type="text" name="and_en" value="{{ old('and_en', $block->and_en) }}"></div>
        </div>
        <button type="submit" class="btn">حفظ</button>
    </form>
</div>
@endsection
