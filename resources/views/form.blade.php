@extends('appLayout')

@section('title', 'Add New Book')

@section('content')
    <h1>Add New Book</h1>

    <form action="{{ route('books.store') }}" method="POST">
        @csrf

        <label for="title">Title</label><br>
        <input id="title" name="title" value="{{ old('title') }}" required><br>

        <label for="author">Author</label><br>
        <input id="author" name="author" value="{{ old('author') }}" required><br>

        <label for="year">Year</label><br>
        <input id="year" name="year" type="number" value="{{ old('year') }}" required><br>

        <label for="publisher">Publisher</label><br>
        <input id="publisher" name="publisher" value="{{ old('publisher') }}" required><br>

        <button type="submit">Save Book</button>
        <a href="{{ route('books.index') }}">Cancel</a>
    </form>
@endsection
