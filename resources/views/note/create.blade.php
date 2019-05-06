@extends('layouts.main')


@section('content')
    <h2>Create New Note</h2>

    <form method="POST" action="{{ route('note.store') }}">
        @csrf

        Title
        <input type="text" name="title" />
        <br>
        <br>
       content
        <input type="text" name="content" />
        <br>
        <br>
        Details
        <textarea name="details">
        </textarea>
        <br>
        <br>
        <input type="submit" value="Add note" />
    </form>


@endsection