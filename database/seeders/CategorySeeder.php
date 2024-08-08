<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Todo',
                'created_by' => 1,
                'updated_by' => 1
            ],
            [
                'name' => 'InProgress',
                'created_by' => 1,
                'updated_by' => 1
            ],
            [
                'name' => 'Testing',
                'created_by' => 1,
                'updated_by' => 1
            ],
            [
                'name' => 'Done',
                'created_by' => 1,
                'updated_by' => 1
            ],
            [
                'name' => 'Pending',
                'created_by' => 1,
                'updated_by' => 1
            ],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
