@extends('cms.layouts.app')
@php $editing = $news->exists; @endphp
@section('title', $editing ? 'تعديل خبر' : 'خبر جديد')
@section('heading', $editing ? 'تعديل خبر' : 'خبر جديد')
@section('content')
<div class="card wide">
    <form action="{{ $editing ? route('cp.news.update', $news) : route('cp.news.store') }}" method="post" enctype="multipart/form-data">
        @csrf @if($editing) @method('PUT') @endif
        <div class="grid2">
            <div><label>عنوان عربي</label><input type="text" name="title_ar" value="{{ old('title_ar', $news->title_ar) }}" required></div>
            <div><label>عنوان إنجليزي</label><input type="text" name="title_en" value="{{ old('title_en', $news->title_en) }}" required></div>
        </div>
        <div class="grid2">
            <div><label>وصف عربي</label><textarea name="description_ar">{{ old('description_ar', $news->description_ar) }}</textarea></div>
            <div><label>وصف إنجليزي</label><textarea name="description_en">{{ old('description_en', $news->description_en) }}</textarea></div>
        </div>
        <div class="grid2">
            <div><label>محتوى عربي</label><textarea name="content_ar" style="min-height:180px;">{{ old('content_ar', $news->content_ar) }}</textarea></div>
            <div><label>محتوى إنجليزي</label><textarea name="content_en" style="min-height:180px;">{{ old('content_en', $news->content_en) }}</textarea></div>
        </div>
        <div class="grid2">
            <div><label>مؤلف عربي</label><input type="text" name="author_ar" value="{{ old('author_ar', $news->author_ar) }}"></div>
            <div><label>مؤلف إنجليزي</label><input type="text" name="author_en" value="{{ old('author_en', $news->author_en) }}"></div>
            <div><label>تاريخ النشر</label><input type="date" name="published_at" value="{{ old('published_at', $news->published_at?->format('Y-m-d')) }}"></div>
            <div><label><input type="checkbox" name="is_published" value="1" {{ old('is_published', $news->is_published) ? 'checked' : '' }}> منشور</label></div>
        </div>
        <div class="mb"><label>صورة</label><input type="file" name="image" accept="image/*"><span class="muted">{{ $news->image }}</span></div>
        <button type="submit" class="btn">حفظ</button>
        <a href="{{ route('cp.news.index') }}" class="muted" style="margin-inline-start:1rem;">رجوع</a>
    </form>
</div>
@endsection
