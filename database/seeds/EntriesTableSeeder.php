<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EntriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('entries')->insert([
            'title'=>'それは九月初旬のある蒸し暑い晩のことであった。',
            'content'=>'私は、Ｄ坂の大通りの中程にある、白梅軒(はくばいけん)という、行きつけのカフェで、冷しコーヒーを啜すすっていた。',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('entries')->insert([
            'title'=>'学校を出たばかりで、',
            'content'=>'まだこれという職業もなく、下宿屋にゴロゴロして本でも読んでいるか、それに飽ると、当てどもなく散歩に出て、あまり費用のかからぬカフェ廻りをやる位が、毎日の日課だった。',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('entries')->insert([
            'title'=>'この白梅軒というのは、',
            'content'=>'下宿屋から近くもあり、どこへ散歩するにも、必ずその前を通る様な位置にあったので、随(したが)って一番よく出入した訳であったが、私という男は悪い癖で、カフェに入るとどうも長尻(ながっちり)になる。',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('entries')->insert([
            'title'=>'それも、元来食慾の少い方なので、',
            'content'=>'一つは嚢中(のうちゅう)の乏しいせいもあってだが、洋食一皿注文するでなく、安いコーヒーを二杯も三杯もお代りして、一時間も二時間もじっとしているのだ。',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('entries')->insert([
            'title'=>'そうかといって、別段、',
            'content'=>'ウエトレスに思召(おぼしめ)しがあったり、からかったりする訳ではない。まあ、下宿より何となく派手で、居心地がいいのだろう。私はその晩も、例によって、一杯の冷しコーヒーを十分もかかって飲みながら、いつもの往来に面したテーブルに陣取って、ボンヤリ窓の外を眺めていた。',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
