<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            ['category' => 'Fiction'],
            ['category' => 'Science'],
            ['category' => 'Computer'],
            ['category' => 'Fantasy'],
            ['category' => 'History'],
            ['category' => 'Mystery'],
            ['category' => 'Thriller'],
            ['category' => 'Slice Of Life'],
            ['category' => 'Adventure'],
            ['category' => 'Economic']
        ];

        DB::table('categories')->insert($categories);
    }
}
