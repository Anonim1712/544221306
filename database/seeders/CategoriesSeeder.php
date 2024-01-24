<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Default Category Items
        $categories = [
            'makanan',
            'transportasi',
            'pakaian',
            'minuman',
            'obat',
        ];

        foreach ($categories as $category) {
            DB::table('categories')->insert([
                'name_category' => $category
            ]);
        }
    }
}
