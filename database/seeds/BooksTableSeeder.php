<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'title' => 'Java se8 Silver問題集',
            'publisher' => '株式会社ソキウスジャパン',
            'author' => '志賀澄人',
        ];
        DB::table('books')->insert($param);

        $param = [
            'title' => 'PHPフレームワークLaravel入門',
            'publisher' => '秀和システム',
            'author' => '掌田津耶乃',
        ];
        DB::table('books')->insert($param);

        $param = [
            'title' => 'WordPressオリジナル制作入門',
            'publisher' => '技術評論社',
            'author' => '清水由規、清水久美子、鈴木力哉、西岡由美',
        ];
        DB::table('books')->insert($param);

        $param = [
            'title' => '確かな力が身につくPHP「超」入門',
            'publisher' => 'SBクリエイティブ株式会社',
            'author' => '松浦健一郎、司ゆき',
        ];
        DB::table('books')->insert($param);
    }
}
