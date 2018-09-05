<?php

use Illuminate\Database\Seeder;

class ArticleCategoryLib extends Seeder
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
            'lib_id' => 1
        ];
        $data[] = [
            'article_id' => 1,
            'lib_id' => 2
        ];

        $data[] = [
            'article_id' => 2,
            'lib_id' => 3
        ];

        foreach( $data as $value){
            DB::table('article_category_lib')->insert($value);
        }
    }
}
