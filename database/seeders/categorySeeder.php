<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class categorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['cat_name' => 'makanan', 'description' => 'kategori makanan'],
            ['cat_name' => 'minuman', 'description' => 'kategori minuman'],
            ['cat_name' => 'snack', 'description' => 'kategori snack'],
        ];
        DB::table('categories')->insert($categories);
    }
}
