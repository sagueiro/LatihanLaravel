@extends('appLayout')

@section('title', 'Book List')

@section('content')
    <h1>Book List</h1>

    <p>
        <a class="button button-add" href="{{ route('books.create') }}">Add New Book</a>
    </p>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Title</th>
                <th>Author</th>
                <th>Year</th>
                <th>Publisher</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($books as $book)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->author }}</td>
                    <td>{{ $book->year }}</td>
                    <td>{{ $book->publisher }}</td>
                    <td>
                        <div class="action-buttons">
                            <a class="button button-edit" href="{{ route('books.edit', $book) }}">Edit</a>
                            <a class="button button-delete" href="{{ route('books.confirmDelete', $book) }}">Delete</a>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6">Belum ada buku.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
