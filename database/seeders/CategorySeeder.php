<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = ['Makanan', 'Obat', 'Peralatan', 'Mainan'];

        foreach ($categories as $name) {
            Category::create(['name' => $name]);
        }
    }
}
