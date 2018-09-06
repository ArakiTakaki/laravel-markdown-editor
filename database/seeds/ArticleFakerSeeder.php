<?php

use Illuminate\Database\Seeder;

class ArticleFakerSeeder extends Seeder
{
    private $count = 50;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < $this->count ; $i++ ) DB::table('articles')->insert($this->articleFaker() );
        for ($i = 0; $i < 200; $i++ ) DB::table('article_category_lib')->insert($this->categorySeeder() );

    }
    private function articleFaker(){
        $faker = Faker\Factory::create('ja_JP');
        $text = $faker->text;
        return [
            'user_id' => 1,
            'title' => $faker->name,
            'description' => substr($text,0,20),
            'detail' => $text,
            'status' => 'OPEN',
            'created_at' => $faker->date,
            'updated_at' => $faker->date
        ];
    }

    private function categorySeeder(){
        return [
            'article_id' => rand(1,$this->count),
            'lib_id' => rand(1,6)
        ];
    }
}
