@extends('layouts.main')

@section('content')
    <h2>All Notes</h2>

    <a href="{{ route('note.create') }}">Add note</a>
    <table border="1">
        <tr>
            <th>#</th>
            <th>Title</th>
            <th>content</th>
            <th>Submitted At</th>

        </tr>

        @forelse($notes as $note)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $note->title }}</td>
                <td>{{ $note->content }}</td>
                <td>{{ \Carbon\Carbon::parse($note->created_at)->format('Y-m-d D') }}</td>
            </tr>
        @empty
            <tr>
                <td colspan="6">No Note Found</td>
            </tr>
        @endforelse

    </table>


@endsection