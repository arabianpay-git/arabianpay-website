@extends('cms.layouts.app')
@section('title', 'الأخبار')
@section('heading', 'الأخبار')
@section('content')
<div class="mb"><a href="{{ route('cp.news.create') }}" class="btn">خبر جديد</a></div>
<div class="card wide" style="padding:0;overflow:auto;">
    <table class="d">
        <thead><tr><th>#</th><th>عنوان</th><th>نشر</th><th></th></tr></thead>
        <tbody>
        @foreach ($news as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ \Illuminate\Support\Str::limit($item->title_ar, 50) }}</td>
                <td>{{ $item->published_at?->format('Y-m-d') }}</td>
                <td>
                    <a href="{{ route('cp.news.edit', $item) }}">تعديل</a>
                    <form action="{{ route('cp.news.destroy', $item) }}" method="post" style="display:inline;" onsubmit="return confirm('حذف؟');">@csrf @method('DELETE')<button type="submit" style="border:none;background:none;color:#b91c1c;cursor:pointer;">حذف</button></form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
{{ $news->links() }}
@endsection
