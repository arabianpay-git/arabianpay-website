@extends('cms.layouts.app')
@section('title', 'الوظائف')
@section('heading', 'الوظائف')
@section('content')
<div class="mb"><a href="{{ route('cp.jobs.positions.create') }}" class="btn">وظيفة جديدة</a></div>
<div class="card wide" style="padding:0;overflow:auto;">
    <table class="d">
        <thead><tr><th>#</th><th>المسمى</th><th>التصنيف</th><th></th></tr></thead>
        <tbody>
        @foreach ($positions as $p)
            <tr>
                <td>{{ $p->id }}</td>
                <td>{{ $p->name_ar ?: $p->name_en ?: '—' }}</td>
                <td>{{ $p->category?->name_ar ?? '—' }}</td>
                <td>
                    <a href="{{ route('cp.jobs.positions.edit', $p) }}">تعديل</a>
                    <form action="{{ route('cp.jobs.positions.destroy', $p) }}" method="post" style="display:inline;" onsubmit="return confirm('حذف؟');">@csrf @method('DELETE')<button type="submit" style="border:none;background:none;color:#b91c1c;cursor:pointer;">حذف</button></form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
{{ $positions->links() }}
@endsection
