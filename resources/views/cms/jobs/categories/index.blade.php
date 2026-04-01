@extends('cms.layouts.app')
@section('title', 'تصنيفات الوظائف')
@section('heading', 'تصنيفات الوظائف')
@section('content')
<div class="mb"><a href="{{ route('cp.jobs.categories.create') }}" class="btn">تصنيف جديد</a></div>
<div class="card wide" style="padding:0;overflow:auto;">
    <table class="d">
        <thead><tr><th>#</th><th>اسم عربي</th><th>اسم إنجليزي</th><th></th></tr></thead>
        <tbody>
        @foreach ($categories as $c)
            <tr>
                <td>{{ $c->id }}</td>
                <td>{{ $c->name_ar }}</td>
                <td>{{ $c->name_en }}</td>
                <td>
                    <a href="{{ route('cp.jobs.categories.edit', $c) }}">تعديل</a>
                    <form action="{{ route('cp.jobs.categories.destroy', $c) }}" method="post" style="display:inline;" onsubmit="return confirm('حذف؟');">@csrf @method('DELETE')<button type="submit" style="border:none;background:none;color:#b91c1c;cursor:pointer;">حذف</button></form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
{{ $categories->links() }}
@endsection
