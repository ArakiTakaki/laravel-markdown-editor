<?php

use Illuminate\Database\Seeder;

class ArticleCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [];

        $data[] = [
            'article_id' => 1,
            'category_lib_id' => 1
        ];

        $data[] = [
            'article_id' => 2,
            'category_lib_id' => 3
        ];

        foreach( $data as $value){
            DB::table('article_category')->insert($value);
        }
        //
    }
}
