@extends('appLayout')

@section('title', 'Edit Book')

@section('content')
    <h1>Edit Book</h1>

    <form action="{{ route('books.update', $book) }}" method="POST">
        @csrf

        <label for="title">Title</label><br>
        <input id="title" name="title" value="{{ old('title', $book->title) }}" required><br>

        <label for="author">Author</label><br>
        <input id="author" name="author" value="{{ old('author', $book->author) }}" required><br>

        <label for="year">Year</label><br>
        <input id="year" name="year" type="number" value="{{ old('year', $book->year) }}" required><br>

        <label for="publisher">Publisher</label><br>
        <input id="publisher" name="publisher" value="{{ old('publisher', $book->publisher) }}" required><br>

        <button type="submit">Update Book</button>
        <a href="{{ route('books.index') }}">Cancel</a>
    </form>
@endsection
