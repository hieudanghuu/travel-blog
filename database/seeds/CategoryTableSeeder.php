<?php

use App\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new Category();
        $category->name = 'ẩm thực';
        $category->save();

        $category = new Category();
        $category->name = 'con người';
        $category->save();

        $category = new Category();
        $category->name = 'cuộc sống';
        $category->save();

        $category = new Category();
        $category->name = 'suy nghĩ';
        $category->save();

    }
}
