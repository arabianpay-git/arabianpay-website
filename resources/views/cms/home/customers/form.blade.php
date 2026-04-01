@extends('cms.layouts.app')
@php $editing = $customer->exists; @endphp
@section('title', $editing ? 'تعديل علامة' : 'علامة جديدة')
@section('heading', $editing ? 'تعديل' : 'جديد')
@section('content')
<div class="card">
    <form action="{{ $editing ? route('cp.home.customers.update', $customer) : route('cp.home.customers.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        @if($editing) @method('PUT') @endif
        <div class="mb"><label>الاسم</label><input type="text" name="name" value="{{ old('name', $customer->name) }}"></div>
        <div class="mb"><label>أيقونة (صورة)</label><input type="file" name="icon" accept="image/*"><span class="muted">{{ $customer->icon }}</span></div>
        <button type="submit" class="btn">حفظ</button>
        <a href="{{ route('cp.home.customers.index') }}" class="muted" style="margin-inline-start:1rem;">رجوع</a>
    </form>
</div>
@endsection
