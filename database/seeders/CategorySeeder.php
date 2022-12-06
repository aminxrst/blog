<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category=[
            [
                'title' => 'کودک',
                'parent' => 0
            ],
            [
                'title' => 'نوجوان',
                'parent' => 0
            ],
            [
                'title' => 'بزرگسال',
                'parent' => 0
            ]
        ];

        foreach ($category as $cat){
            Category::create([
                'title' => $cat['title'],
                'parent' => $cat['parent']
            ]);
        }

    }
}
