<?php

use App\Tag;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $tag = new Tag();
        $tag->name = 'sakura';
        $tag->save();

        $tag = new Tag();
        $tag->name = 'sasumi';
        $tag->save();

        $tag = new Tag();
        $tag->name = 'sushi';
        $tag->save();

        $tag = new Tag();
        $tag->name = 'visa';
        $tag->save();

        $tag = new Tag();
        $tag->name = 'ẩm thực';
        $tag->save();

        $tag = new Tag();
        $tag->name = 'cuộc sống';
        $tag->save();

        $tag = new Tag();
        $tag->name = 'con người';
        $tag->save();

        $tag = new Tag();
        $tag->name = 'du lịch';
        $tag->save();

        $tag = new Tag();
        $tag->name = 'bốn mùa';
        $tag->save();
    }
}
