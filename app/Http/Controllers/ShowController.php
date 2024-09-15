<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class ShowController extends Controller
{
    public function showAllBooks()
    {
        // Fetch all books
        $books = Book::all();
        return view('Home', compact('books'));
    }

    public function readBook(Request $request)
    {
        $title = $request->query('title'); // Get the title from the query string

        $book = null;

        if ($title) {
            // Find the Book by title
            $book = Book::where('title', $title)->first();
        }

        if (!$book) {
            return abort(404, 'Book not found');
        }

        return view('Read', [
            'pdfPath' => asset('storage/uploads/pdfs/' . basename($book->filePath)),
            'coverImage' => asset('storage/uploads/covers/' . basename($book->coverImage)),
            'title' => $book->title
        ]);
    }
}
