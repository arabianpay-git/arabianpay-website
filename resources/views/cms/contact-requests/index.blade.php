@extends('cms.layouts.app')
@section('title', 'طلبات التواصل')
@section('heading', 'طلبات التواصل')
@section('content')
<div class="card wide" style="padding:0;overflow:auto;">
    <table class="d">
        <thead><tr><th>#</th><th>الاسم</th><th>البريد</th><th>الحالة</th><th></th></tr></thead>
        <tbody>
        @foreach ($requests as $r)
            <tr>
                <td>{{ $r->id }}</td>
                <td>{{ $r->name }}</td>
                <td>{{ $r->email }}</td>
                <td>{{ $r->status }}</td>
                <td><a href="{{ route('cp.contact-requests.show', $r) }}">عرض</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
{{ $requests->links() }}
@endsection
