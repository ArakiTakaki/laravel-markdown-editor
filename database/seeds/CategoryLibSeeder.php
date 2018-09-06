<?php

use Illuminate\Database\Seeder;

class CategoryLibSeeder extends Seeder
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
            'name' => 'gin',
            'lang_id' => 1,
            'description' => 'WEBアプリケーションフレームワーク',
            'created_at' => date('Y/m/d H:i:s')
        ];
        $data[] = [
            'name' => 'gorm',
            'lang_id' => 1,
            'description' => 'goのORM',
            'created_at' => date('Y/m/d H:i:s')
        ];
        $data[] = [
            'name' => 'ZXing',
            'lang_id' => 2,
            'description' => 'java製のQRコードジェネレータ',
            'created_at' => date('Y/m/d H:i:s')
        ];
        $data[] = [
            'name' => 'React',
            'lang_id' => 3,
            'description' => 'Facebook製のViewライブラリ',
            'created_at' => date('Y/m/d H:i:s')
        ];
        $data[] = [
            'name' => 'Vue',
            'lang_id' => 3,
            'description' => '最近出た仮装DOM',
            'created_at' => date('Y/m/d H:i:s')
        ];
        $data[] = [
            'name' => 'PDO',
            'lang_id' => 4,
            'description' => 'よく使うDBアクセスライブラリ',
            'created_at' => date('Y/m/d H:i:s')
        ];
        foreach($data as $value){
            DB::table('category_libs')->insert($value);
        }
        //
    }
}
