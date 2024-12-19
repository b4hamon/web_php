<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::create([
            'id' => 3,
                'title' =>'Andrea',
                'published_at' => '2024-12-19',
                'genre' =>'Terror',
            ]);
    
            Book::create([
                'id' => 2,
                'title' =>'Andrea',
                'published_at' => '2024-12-19',
                'genre' =>'Terror',
            ]);
    }
}
