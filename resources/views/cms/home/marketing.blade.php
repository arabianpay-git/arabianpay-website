@extends('cms.layouts.app')
@section('title', 'ليش تختار ارابيان باي')
@section('heading', 'ليش تختار ارابيان باي')
@section('content')
<div class="card wide">
    <h1>قسم التسويق</h1>
    <form action="{{ route('cp.home.marketing.update') }}" method="post" enctype="multipart/form-data">
        @csrf @method('PUT')
        <div class="grid2">
            <div><label>عنوان عربي</label><input type="text" name="title_ar" value="{{ old('title_ar', $block->title_ar) }}"></div>
            <div><label>عنوان إنجليزي</label><input type="text" name="title_en" value="{{ old('title_en', $block->title_en) }}"></div>
        </div>
        <div class="grid2">
            <div><label>وصف عربي</label><textarea name="des_ar">{{ old('des_ar', $block->des_ar) }}</textarea></div>
            <div><label>وصف إنجليزي</label><textarea name="des_en">{{ old('des_en', $block->des_en) }}</textarea></div>
        </div>
        <div class="mb"><label>JSON القائمة</label><textarea name="list_json" class="code" required>{{ old('list_json', $listJson) }}</textarea></div>
        <div class="mb"><label>صورة</label><input type="file" name="image" accept="image/*"><span class="muted">{{ $block->image }}</span></div>
        <button type="submit" class="btn">حفظ</button>
    </form>
</div>
@endsection
