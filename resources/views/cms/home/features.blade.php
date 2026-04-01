@extends('cms.layouts.app')
@section('title', 'نضمن لك')
@section('heading', 'نضمن لك')
@section('content')
<div class="card wide">
    <h1>قسم «مع ارابيان باي نضمن لك»</h1>
    <form action="{{ route('cp.home.features.update') }}" method="post">
        @csrf @method('PUT')
        <div class="grid2">
            <div><label>عنوان عربي</label><input type="text" name="title_ar" value="{{ old('title_ar', $block->title_ar) }}"></div>
            <div><label>عنوان إنجليزي</label><input type="text" name="title_en" value="{{ old('title_en', $block->title_en) }}"></div>
            <div><label>فرعي عربي</label><input type="text" name="sup_ar" value="{{ old('sup_ar', $block->sup_ar) }}"></div>
            <div><label>فرعي إنجليزي</label><input type="text" name="sup_en" value="{{ old('sup_en', $block->sup_en) }}"></div>
        </div>
        <div class="mb"><label>JSON المميزات</label><textarea name="jsoning_raw" class="code" required>{{ old('jsoning_raw', $jsoning) }}</textarea></div>
        <button type="submit" class="btn">حفظ</button>
    </form>
</div>
@endsection
