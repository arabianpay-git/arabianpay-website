@extends('cms.layouts.app')
@section('title', 'طلب #'.$requestModel->id)
@section('heading', 'طلب تواصل')
@section('content')
<p class="mb"><a href="{{ route('cp.contact-requests.index') }}">← القائمة</a></p>
<div class="card wide">
    <div class="grid2 mb">
        <div><span class="muted">الاسم</span><br><strong>{{ $requestModel->name }}</strong></div>
        <div><span class="muted">البريد</span><br>{{ $requestModel->email }}</div>
        @if($requestModel->phone)<div><span class="muted">الهاتف</span><br>{{ $requestModel->phone }}</div>@endif
        @if($requestModel->subject)<div><span class="muted">الموضوع</span><br>{{ $requestModel->subject }}</div>@endif
    </div>
    <p><strong>الرسالة:</strong></p>
    <p style="white-space:pre-wrap;">{{ $requestModel->message }}</p>
    <form action="{{ route('cp.contact-requests.update', $requestModel) }}" method="post" class="grid2" style="margin-top:1rem;">
        @csrf @method('PUT')
        <div><label>الحالة</label>
            <select name="status">
                @foreach (['pending'=>'معلق','read'=>'مقروء','replied'=>'تم الرد','closed'=>'مغلق'] as $k=>$v)
                    <option value="{{ $k }}" @selected(old('status', $requestModel->status)==$k)>{{ $v }}</option>
                @endforeach
            </select>
        </div>
        <div><label>ملاحظات</label><textarea name="admin_notes">{{ old('admin_notes', $requestModel->admin_notes) }}</textarea></div>
        <div><button type="submit" class="btn">حفظ</button></div>
    </form>
</div>
@endsection
