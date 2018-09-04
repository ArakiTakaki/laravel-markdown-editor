<?php

use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            'user_id' => 1,
            'title' => 'test記事タイトル',
            'description' => 'テストテキストあいうえお',
            'detail' => 'テストテキストかきくけこさしすせそたちつてと',
            'status' => 'OPEN',
            'created_at' => date('Y/m/d H:i:s')
            ]);
        DB::table('articles')->insert([
            'user_id' => 1,
            'title' => '閉じられた記事',
            'description' => '閉じられた記事です。',
            'detail' => '閉じられた記事を開きました。',
            'status' => 'CLOSE',
            'created_at' => date('Y/m/d H:i:s')
            ]);
        DB::table('articles')->insert([
            'user_id' => 1,
            'title' => '一時保存された記事',
            'description' => '一時的な記事',
            'detail' => '一時的な記事を開きました。',
            'status' => 'TMP',
            'created_at' => date('Y/m/d H:i:s')
            ]);
    }
}
