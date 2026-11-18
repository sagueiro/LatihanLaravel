<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::create([
            'title' => 'The Great Gatsby',
            'author' => 'F. Scott Fitzgerald',
            'year' => 1925,
            'publisher' => 'Charles Scribner\'s Sons',
        ]);

        Book::create([
            'title' => 'To Kill a Mockingbird',
            'author' => 'Harper Lee',
            'year' => 1960,
            'publisher' => 'J.B. Lippincott & Co.',
        ]);

        Book::create([
            'title' => '1984',
            'author' => 'George Orwell',
            'year' => 1949,
            'publisher' => 'Secker & Warburg',
        ]);

        Book::create([
            'title' => 'Pride and Prejudice',
            'author' => 'Jane Austen',
            'year' => 1813,
            'publisher' => 'T. Egerton, Whitehall',
        ]);
    }
}
