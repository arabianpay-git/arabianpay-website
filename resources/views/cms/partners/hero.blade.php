@extends('cms.layouts.app')
@section('title', 'الشركاء — الجزء العلوي')
@section('heading', 'هيرو صفحة الشركاء')
@section('content')
<div class="card wide">
    <form action="{{ route('cp.partners.hero.update') }}" method="post" enctype="multipart/form-data">
        @csrf @method('PUT')
        <div class="grid2">
            <div><label>عنوان عربي</label><input type="text" name="title_ar" value="{{ old('title_ar', $hero->title_ar) }}"></div>
            <div><label>عنوان إنجليزي</label><input type="text" name="title_en" value="{{ old('title_en', $hero->title_en) }}"></div>
        </div>
        <div class="grid2">
            <div><label>وصف عربي</label><textarea name="des_ar">{{ old('des_ar', $hero->des_ar) }}</textarea></div>
            <div><label>وصف إنجليزي</label><textarea name="des_en">{{ old('des_en', $hero->des_en) }}</textarea></div>
            <div><label>زر عربي</label><input type="text" name="btn_ar" value="{{ old('btn_ar', $hero->btn_ar) }}"></div>
            <div><label>زر إنجليزي</label><input type="text" name="btn_en" value="{{ old('btn_en', $hero->btn_en) }}"></div>
        </div>
        <div class="mb"><label>صورة</label><input type="file" name="image" accept="image/*"><span class="muted">{{ $hero->image }}</span></div>
        <button type="submit" class="btn">حفظ</button>
    </form>
</div>
@endsection
