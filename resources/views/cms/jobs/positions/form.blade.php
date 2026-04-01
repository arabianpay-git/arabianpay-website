@extends('cms.layouts.app')
@php $editing = $position->exists; @endphp
@section('title', $editing ? 'تعديل وظيفة' : 'وظيفة جديدة')
@section('heading', $editing ? 'تعديل وظيفة' : 'وظيفة جديدة')
@section('content')
<div class="card wide">
    <form action="{{ $editing ? route('cp.jobs.positions.update', $position) : route('cp.jobs.positions.store') }}" method="post">
        @csrf @if($editing) @method('PUT') @endif
        <div class="mb">
            <label>التصنيف</label>
            <select name="jobcategory" required>
                <option value="">— اختر —</option>
                @foreach ($categories as $cat)
                    <option value="{{ $cat->id }}" @selected(old('jobcategory', $position->jobcategory) == $cat->id)>{{ $cat->name_ar }}</option>
                @endforeach
            </select>
        </div>
        <div class="grid2">
            <div><label>المسمى عربي</label><input type="text" name="name_ar" value="{{ old('name_ar', $position->name_ar) }}"></div>
            <div><label>المسمى إنجليزي</label><input type="text" name="name_en" value="{{ old('name_en', $position->name_en) }}"></div>
            <div><label>الموقع عربي</label><input type="text" name="location_ar" value="{{ old('location_ar', $position->location_ar) }}"></div>
            <div><label>الموقع إنجليزي</label><input type="text" name="location_en" value="{{ old('location_en', $position->location_en) }}"></div>
        </div>
        <div class="grid2">
            <div><label>الوصف عربي</label><textarea name="description_ar">{{ old('description_ar', $position->description_ar) }}</textarea></div>
            <div><label>الوصف إنجليزي</label><textarea name="description_en">{{ old('description_en', $position->description_en) }}</textarea></div>
        </div>
        <div class="grid2">
            <div><label>المتطلبات عربي</label><textarea name="requirements_ar">{{ old('requirements_ar', $position->requirements_ar) }}</textarea></div>
            <div><label>المتطلبات إنجليزي</label><textarea name="requirements_en">{{ old('requirements_en', $position->requirements_en) }}</textarea></div>
        </div>
        <div class="grid2">
            <div><label>الراتب عربي</label><input type="text" name="salary_ar" value="{{ old('salary_ar', $position->salary_ar) }}"></div>
            <div><label>الراتب إنجليزي</label><input type="text" name="salary_en" value="{{ old('salary_en', $position->salary_en) }}"></div>
            <div><label>النوع عربي</label><input type="text" name="type_ar" value="{{ old('type_ar', $position->type_ar) }}"></div>
            <div><label>النوع إنجليزي</label><input type="text" name="type_en" value="{{ old('type_en', $position->type_en) }}"></div>
            <div><label>الخبرة عربي</label><input type="text" name="experience_ar" value="{{ old('experience_ar', $position->experience_ar) }}"></div>
            <div><label>الخبرة إنجليزي</label><input type="text" name="experience_en" value="{{ old('experience_en', $position->experience_en) }}"></div>
        </div>
        <button type="submit" class="btn">حفظ</button>
        <a href="{{ route('cp.jobs.positions.index') }}" class="muted" style="margin-inline-start:1rem;">رجوع</a>
    </form>
</div>
@endsection
