@extends('cms.layouts.app')
@section('title', 'شكوى #'.$complaint->id)
@section('heading', 'شكوى')
@section('content')
<p class="mb"><a href="{{ route('cp.complaints.index') }}">← القائمة</a></p>
<div class="card wide">
    <p style="white-space:pre-wrap;">{{ $complaint->complaint }}</p>
    <form action="{{ route('cp.complaints.update', $complaint) }}" method="post">
        @csrf @method('PUT')
        <div class="mb"><label>الحالة</label>
            <select name="status">
                @foreach (['pending'=>'معلق','under_review'=>'قيد المراجعة','resolved'=>'محلول','closed'=>'مغلق'] as $k=>$v)
                    <option value="{{ $k }}" @selected(old('status', $complaint->status)==$k)>{{ $v }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb"><label>رد الإدارة</label><textarea name="admin_response">{{ old('admin_response', $complaint->admin_response) }}</textarea></div>
        <button type="submit" class="btn">حفظ</button>
    </form>
</div>
@endsection
