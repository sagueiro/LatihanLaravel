@extends('appLayout')

@section('title', 'Book Details')

@section('content')
    <h1>Book Details</h1>

    <p><strong>Title:</strong> {{ $book->title }}</p>
    <p><strong>Author:</strong> {{ $book->author }}</p>
    <p><strong>Year:</strong> {{ $book->year }}</p>
    <p><strong>Publisher:</strong> {{ $book->publisher }}</p>

    <a href="{{ route('books.index') }}">Back to Book List</a>
@endsection
