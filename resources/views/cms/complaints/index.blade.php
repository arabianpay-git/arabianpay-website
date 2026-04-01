@extends('cms.layouts.app')
@section('title', 'الشكاوى')
@section('heading', 'الشكاوى')
@section('content')
<div class="card wide" style="padding:0;overflow:auto;">
    <table class="d">
        <thead><tr><th>#</th><th>الاسم</th><th>الموضوع</th><th>الحالة</th><th></th></tr></thead>
        <tbody>
        @foreach ($complaints as $c)
            <tr>
                <td>{{ $c->id }}</td>
                <td>{{ $c->name }}</td>
                <td>{{ \Illuminate\Support\Str::limit($c->subject, 40) }}</td>
                <td>{{ $c->status }}</td>
                <td><a href="{{ route('cp.complaints.show', $c) }}">عرض</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
{{ $complaints->links() }}
@endsection
