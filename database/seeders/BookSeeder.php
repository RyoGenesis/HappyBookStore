<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $books = [
            ['category_id' => '2', 'title' => 'A Brief History of Time'],
            ['category_id' => '1', 'title' => 'No Longer Human'],
            ['category_id' => '3', 'title' => 'Clean Code: A Handbook of Agile Software Craftsmanship'],
            ['category_id' => '3', 'title' => 'Code: The Hidden Language of Computer Hardware and Software'],
            ['category_id' => '10', 'title' => 'The Undercover Economist'],
            ['category_id' => '1', 'title' => 'Dune'],
            ['category_id' => '7', 'title' => 'Battle Royale'],
            ['category_id' => '1', 'title' => 'Nineteen Eighty-Four (1984)'],
            ['category_id' => '4', 'title' => 'A Game Of Thrones'],
            ['category_id' => '7', 'title' => 'Paprika'],
            ['category_id' => '4', 'title' => 'The Twelve Kingdoms: Sea of Shadow'],
            ['category_id' => '5', 'title' => 'Napoleon: A Life']
        ];

        DB::table('books')->insert($books);
    }
}
