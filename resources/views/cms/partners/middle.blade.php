@extends('cms.layouts.app')
@section('title', 'الشركاء — الوسط')
@section('heading', 'منصة تفهمك / اختارها ندفعها (سجل واحد)')
@section('content')
<div class="card wide">
    <p class="muted mb">القسمان الثاني والثالث في صفحة الشركاء يستخدمان نفس السجل.</p>
    <form action="{{ route('cp.partners.middle.update') }}" method="post" enctype="multipart/form-data">
        @csrf @method('PUT')
        <div class="grid2">
            <div><label>وصف عربي</label><textarea name="des_ar">{{ old('des_ar', $block->des_ar) }}</textarea></div>
            <div><label>وصف إنجليزي</label><textarea name="des_en">{{ old('des_en', $block->des_en) }}</textarea></div>
        </div>
        <div class="grid2">
            <div><label>صورة رئيسية</label><input type="file" name="main_image" accept="image/*"><span class="muted">{{ $block->main_image }}</span></div>
            <div><label>صورة جانبية</label><input type="file" name="side_image" accept="image/*"><span class="muted">{{ $block->side_image }}</span></div>
        </div>
        <div class="mb"><label>JSON</label><textarea name="jsoning_raw" class="code" required>{{ old('jsoning_raw', $jsoning) }}</textarea></div>
        <button type="submit" class="btn">حفظ</button>
    </form>
</div>
@endsection
