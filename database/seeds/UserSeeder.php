<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $testUser = [
            'name' => 'adminhogehoge',
            'email' => 'admin@admin.com',
            'password' => '$2y$10$J3Td6Wuulb5JLJFaQ/Q9R.oaxJcYwhcVYiPXJt6cA1jvLqijQvNoi',
            'remember_token' => 'q6aqau41DA12eLgeQcd3aCYOAVkAmzjxkCUgTBlMEP2rzCHuzuEnAydyzaiy',
            'created_at' => '2018-09-04 08:16:08',
            'updated_at' => '2018-09-04 08:16:08 '
        ];
        DB::table('users')->insert($testUser);
    }
}
