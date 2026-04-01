@extends('cms.layouts.app')
@php $editing = $category->exists; @endphp
@section('title', $editing ? 'تعديل تصنيف' : 'تصنيف جديد')
@section('heading', $editing ? 'تعديل تصنيف' : 'تصنيف جديد')
@section('content')
<div class="card wide">
    <form action="{{ $editing ? route('cp.jobs.categories.update', $category) : route('cp.jobs.categories.store') }}" method="post">
        @csrf @if($editing) @method('PUT') @endif
        <div class="grid2">
            <div><label>اسم عربي</label><input type="text" name="name_ar" value="{{ old('name_ar', $category->name_ar) }}" required></div>
            <div><label>اسم إنجليزي</label><input type="text" name="name_en" value="{{ old('name_en', $category->name_en) }}" required></div>
        </div>
        <button type="submit" class="btn">حفظ</button>
        <a href="{{ route('cp.jobs.categories.index') }}" class="muted" style="margin-inline-start:1rem;">رجوع</a>
    </form>
</div>
@endsection
