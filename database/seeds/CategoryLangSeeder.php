<?php

use Illuminate\Database\Seeder;

class CategoryLangSeeder extends Seeder
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
            'id' => 1,
            'name' => 'go',
            'description' => 'goole社の開発した言語',
            'created_at' => date('Y/m/d H:i:s')
        ];
        $data[] = [
            'id' => 2,
            'name' => 'Java',
            'description' => 'Oracleがメイン',
            'created_at' => date('Y/m/d H:i:s')
        ];
        $data[] = [
            'id' => 3,
            'name' => 'JavaScript',
            'description' => 'WEB系の人がよくつかっているやつ',
            'created_at' => date('Y/m/d H:i:s')
        ];
        $data[] = [
            'id' => 4,
            'name' => 'PHP',
            'description' => 'このサイトはこの言語で作成されている。',
            'created_at' => date('Y/m/d H:i:s')
        ];

        foreach($data as $value){
            DB::table('category_langs')->insert($value);
        }

    }
}
