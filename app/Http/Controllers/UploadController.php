<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
    public function createForm(){
        return view('Upload');
    } 
    
    public function bookUpload(Request $req){
        $req->validate([
            'book' => 'required|mimes:jpeg,png,pdf|max:2048', 
        ]);

        $book = new Book;

        if ($req->hasFile('book')) {
            // Generate a unique file name for the uploaded book
            $fileName = time().'_'.$req->file('book')->getClientOriginalName();
            
            // Store the uploaded book
            $filePath = $req->file('book')->storeAs('uploads', $fileName, 'public');
            
            // Save book details to the database
            $book->title = $fileName;
            $book->filePath = '/storage/' . $filePath;
            $book->save();

            return back()
                ->with('success', 'Your book has been uploaded.')
                ->with('book', $fileName);
        } else {
            return back()->with('error', 'No file uploaded.');
        }
    }
}

