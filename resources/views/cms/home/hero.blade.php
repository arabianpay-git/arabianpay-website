@extends('cms.layouts.app')
@section('title', 'الصفحة الرئيسية — الجزء العلوي')
@section('heading', 'الجزء العلوي (الهيرو)')
@section('content')
<div class="card wide">
    <h1>الهيرو الرئيسي</h1>
    <form action="{{ route('cp.home.hero.update') }}" method="post" enctype="multipart/form-data" class="grid2" style="display:grid;gap:1rem;">
        @csrf @method('PUT')
        <div class="grid2">
            <div><label>العنوان عربي</label><input type="text" name="title_ar" value="{{ old('title_ar', $hero->title_ar) }}"></div>
            <div><label>العنوان إنجليزي</label><input type="text" name="title_en" value="{{ old('title_en', $hero->title_en) }}"></div>
            <div><label>سطر عربي</label><input type="text" name="titleline_ar" value="{{ old('titleline_ar', $hero->titleline_ar) }}"></div>
            <div><label>سطر إنجليزي</label><input type="text" name="titleline_en" value="{{ old('titleline_en', $hero->titleline_en) }}"></div>
        </div>
        <div class="grid2">
            <div><label>وصف عربي</label><textarea name="des_ar">{{ old('des_ar', $hero->des_ar) }}</textarea></div>
            <div><label>وصف إنجليزي</label><textarea name="des_en">{{ old('des_en', $hero->des_en) }}</textarea></div>
        </div>
        <div><label>الرقم</label><input type="text" name="number" value="{{ old('number', $hero->number) }}"></div>
        <div class="grid2">
            <div><label>صورة رئيسية</label><input type="file" name="image" accept="image/*"><span class="muted">{{ $hero->image }}</span></div>
            <div><label>يسار</label><input type="file" name="imageletf" accept="image/*"><span class="muted">{{ $hero->imageletf }}</span></div>
            <div><label>يمين</label><input type="file" name="imageright" accept="image/*"><span class="muted">{{ $hero->imageright }}</span></div>
            <div><label>وسط</label><input type="file" name="imagemiddle" accept="image/*"><span class="muted">{{ $hero->imagemiddle }}</span></div>
        </div>
        <button type="submit" class="btn">حفظ</button>
    </form>
</div>
@endsection
