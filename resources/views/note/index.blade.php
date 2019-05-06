@extends('layouts.main')

@section('content')
    <h2>All Notes</h2>

    <a href="{{ route('note.create') }}">Add note</a>
    <table border="1">
        <tr>
            <th>#</th>
            <th>Title</th>
            <th>content</th>

        </tr>

        @forelse($notes as $note)
            <tr>

                <td>{{ $note->title }}</td>
                <td>{{ $note->content }}</td>
            </tr>
        @empty
            <tr>
                <td colspan="6">No Note Found</td>
            </tr>
        @endforelse

    </table>


@endsection