<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;

class BooksTableSeeder extends Seeder
{
    /**
     * Seed the books table.
     *
     * @return void
     */
    public function run()
    {
        // Create 50 books
        Book::factory()->count(50)->create();
    }
}
