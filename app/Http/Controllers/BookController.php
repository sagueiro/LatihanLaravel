<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BookController extends Controller
{
    public function index(): View
    {
        return view('book', [
            'books' => Book::all(),
        ]);
    }

    public function create(): View
    {
        return view('form');
    }

    public function store(Request $request)
    {
        Book::create([
            'title' => $request->input('title'),
            'author' => $request->input('author'),
            'year' => $request->input('year'),
            'publisher' => $request->input('publisher'),
        ]);

        return redirect()->route('books.index')
            ->with('success', 'Buku berhasil ditambahkan.');
    }

    public function show(Book $book)
    {
        return view('show', [
            'book' => $book,
        ]);
    }

    public function edit(Book $book)
    {
        return view('edit', [
            'book' => $book,
        ]);
    }

    public function update(Request $request, Book $book)
    {
        $book->update([
            'title' => $request->input('title'),
            'author' => $request->input('author'),
            'year' => $request->input('year'),
            'publisher' => $request->input('publisher'),
        ]);

        return redirect()->route('books.index')
            ->with('success', 'Buku berhasil diubah.');
    }

    public function confirmDelete(Book $book)
    {
        return view('delete', [
            'book' => $book,
        ]);
    }

    public function destroy(Book $book)
    {
        $book->delete();

        return redirect()->route('books.index')
            ->with('success', 'Buku berhasil dihapus.');
    }
}
