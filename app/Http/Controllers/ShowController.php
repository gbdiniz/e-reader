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

        $fileName = null;

        if ($title) {
            // Find the Book by title
            $Book = Book::where('title', $title)->first();

            if ($Book) {
                $filePath = public_path($Book->filePath); // Access the correct filePath column
                $fileName = basename($filePath); // Extract the file name
            }
        }

        return view('Read', compact('fileName', 'title'));
    }
}