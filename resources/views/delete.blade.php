@extends('appLayout')

@section('title', 'Delete Book')

@section('content')
    <h1>Delete Book</h1>

    <p>Yakin ingin menghapus buku "{{ $book->title }}"?</p>

    <form action="{{ route('books.destroy', $book) }}" method="POST">
        @csrf
        <button type="submit">Yes, Delete Book</button>
        <a href="{{ route('books.index') }}">Cancel</a>
    </form>
@endsection
