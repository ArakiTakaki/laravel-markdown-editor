<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(TaskSeeder::class);
        $this->call(ArticleSeeder::class);
        $this->call(CategoryLangSeeder::class);
        $this->call(CategoryLibSeeder::class);
        // $this->call(ArticleCategorySeeder::class);
        $this->call(ArticleCategoryLib::class);
        $this->call(ArticleFakerSeeder::class);
        // $this->call(UsersTableSeeder::class);
    }
}
