@extends('cms.layouts.app')
@section('title', 'كيف تحصل على التمويل')
@section('heading', 'خطوات التمويل')
@section('content')
<div class="card wide">
    <form action="{{ route('cp.clients.steps.update') }}" method="post">
        @csrf @method('PUT')
        <div class="grid2">
            <div><label>عنوان عربي</label><input type="text" name="title_ar" value="{{ old('title_ar', $block->title_ar) }}"></div>
            <div><label>عنوان إنجليزي</label><input type="text" name="title_en" value="{{ old('title_en', $block->title_en) }}"></div>
        </div>
        <div class="grid2">
            <div><label>وصف عربي</label><textarea name="des_ar">{{ old('des_ar', $block->des_ar) }}</textarea></div>
            <div><label>وصف إنجليزي</label><textarea name="des_en">{{ old('des_en', $block->des_en) }}</textarea></div>
        </div>
        <div class="grid2">
            <div><label>فرعي عربي</label><input type="text" name="sup_ar" value="{{ old('sup_ar', $block->sup_ar) }}"></div>
            <div><label>فرعي إنجليزي</label><input type="text" name="sup_en" value="{{ old('sup_en', $block->sup_en) }}"></div>
            <div><label>رقم</label><input type="text" name="number" value="{{ old('number', $block->number) }}"></div>
        </div>
        <div class="grid2">
            <div><label>btna</label><input type="text" name="btna" value="{{ old('btna', $block->btna) }}"></div>
            <div><label>btng</label><input type="text" name="btng" value="{{ old('btng', $block->btng) }}"></div>
            <div><label>زر D عربي</label><input type="text" name="btnd_ar" value="{{ old('btnd_ar', $block->btnd_ar) }}"></div>
            <div><label>زر D إنجليزي</label><input type="text" name="btnd_en" value="{{ old('btnd_en', $block->btnd_en) }}"></div>
        </div>
        <div class="grid2">
            <div><label>وصف فرعي عربي</label><textarea name="subdes_ar">{{ old('subdes_ar', $block->subdes_ar) }}</textarea></div>
            <div><label>وصف فرعي إنجليزي</label><textarea name="subdes_en">{{ old('subdes_en', $block->subdes_en) }}</textarea></div>
        </div>
        <div class="mb"><label>JSON</label><textarea name="jsoning_raw" class="code" required>{{ old('jsoning_raw', $jsoning) }}</textarea></div>
        <button type="submit" class="btn">حفظ</button>
    </form>
</div>
@endsection
