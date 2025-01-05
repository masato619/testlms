<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'inquiry' => '選択してください',
        ];
        DB::table('inquiry')->insert($param);
        $param = [
            'inquiry' => '商品のお届けについて',
        ];
        DB::table('inquiry')->insert($param);
        $param = [
            'inquiry' => '商品の交換について',
        ];
        DB::table('inquiry')->insert($param);
        $param = [
            'inquiry' => '商品トラブル',
        ];
        DB::table('inquiry')->insert($param);
        $param = [
            'inquiry' => 'ショップへのお問い合わせ',
        ];
        DB::table('inquiry')->insert($param);
        $param = [
            'inquiry' => 'その他',
        ];
        DB::table('inquiry')->insert($param);
    }
}
