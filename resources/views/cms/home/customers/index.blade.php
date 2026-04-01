@extends('cms.layouts.app')
@section('title', 'العلامات التجارية')
@section('heading', 'العلامات التجارية')
@section('content')
<div class="mb"><a href="{{ route('cp.home.customers.create') }}" class="btn">إضافة</a></div>
<div class="card wide" style="padding:0;overflow:auto;">
    <table class="d">
        <thead><tr><th>#</th><th>الاسم</th><th>الأيقونة</th><th></th></tr></thead>
        <tbody>
        @foreach ($customers as $c)
            <tr>
                <td>{{ $c->id }}</td>
                <td>{{ $c->name }}</td>
                <td class="muted">{{ $c->icon }}</td>
                <td><a href="{{ route('cp.home.customers.edit', $c) }}">تعديل</a>
                    <form action="{{ route('cp.home.customers.destroy', $c) }}" method="post" style="display:inline;" onsubmit="return confirm('حذف؟');">@csrf @method('DELETE')<button type="submit" style="background:none;border:none;color:#b91c1c;cursor:pointer;">حذف</button></form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
{{ $customers->links() }}
@endsection
