@extends('cms.layouts.app')
@section('title', 'مركز المساعدة — التواصل')
@section('heading', 'التواصل')
@section('content')
<div class="card wide">
    <form action="{{ route('cp.support.contact.update') }}" method="post">
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
            <div><label>البريد</label><input type="email" name="email" value="{{ old('email', $block->email) }}"></div>
            <div><label>الهاتف</label><input type="text" name="phone" value="{{ old('phone', $block->phone) }}"></div>
            <div><label>عنوان عربي</label><input type="text" name="address_ar" value="{{ old('address_ar', $block->address_ar) }}"></div>
            <div><label>عنوان إنجليزي</label><input type="text" name="address_en" value="{{ old('address_en', $block->address_en) }}"></div>
        </div>
        <div class="mb"><label>JSON</label><textarea name="jsoning_raw" class="code" required>{{ old('jsoning_raw', $jsoning) }}</textarea></div>
        <button type="submit" class="btn">حفظ</button>
    </form>
</div>
@endsection
