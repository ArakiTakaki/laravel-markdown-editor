<?php

use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tasks')->insert([
            'name' => "テストケース3",
            'user_id' => 1,
            'created_at' => date('Y/m/d H:i:s')
            ]);
        //
    }
}
