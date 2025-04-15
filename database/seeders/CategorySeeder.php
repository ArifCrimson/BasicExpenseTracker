<?php

namespace Database\Seeders;

use App\Models\Categories;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data =[
            ['type' => 'Technology'],
            ['type' => 'Fashion'],
            ['type' => 'Sports'],
            ['type' => 'Music'],
            ['type' => 'Art'],
            ['type' => 'Gaming'],
            ['type' => 'Travel'],
            ['type' => 'Food'],
            ['type' => 'Health'],
            ['type' => 'Business'],
        ];

        Categories::insert($data);
    }
}
