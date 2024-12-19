<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Author;

class AuthorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Author::create([
        'id' => 1,
        'name' =>'daniel',
        'nationality' => 'Colombia',
        'birth_date' =>'2024-12-19',
        ]);

        Author::create([
            'id' => 2,
            'name' =>'Andre',
            'nationality' => 'Colombia',
            'birth_date' =>'2024-12-19',
        ]);
    
    
}
}