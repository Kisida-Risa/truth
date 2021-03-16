<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('item')->insert([
            'name' => 'モーリス　F351',
            'details' => '弾きやすい',
            'price' => '30800',
            'image_file_name' => '/image/top/mor-f35.jpeg',
            'image_file_name_sub' => '/image/sub/mor-f35.jpg',
        ]);
        DB::table('item')->insert([
            'name' => 'モーリス　M280',
            'details' => '低音がよく出る。音も大きい',
            'price' => '30800',
            'image_file_name' => '/image/top/mor-m28.jpeg',
            'image_file_name_sub' => '/image/sub/mor-m-28.jpeg',
        ]);

        DB::table('item')->insert([
            'name' => 'モーリス M351',
            'details' => '長く使えるギター。迫力ある音が出る',
            'price' => '30850',
            'image_file_name' => '/image/top/mor-m35.jpeg',
            'image_file_name_sub' => '/image/sub/mor-m35.jpg',
        ]);

        DB::table('item')->insert([
            'name' => 'ヤマハ FS820',
            'details' => '抱えやすく、弾きやすい　中音の音がよく出る',
            'price' => '34595',
            'image_file_name' => '/image/top/yam-fs.jpeg',
            'image_file_name_sub' => '/image/sub/yam-fs.jpg',
        ]);

        DB::table('item')->insert([
            'name' => 'ヤマハ FG820',
            'details' => '迫力ある音が出る。 ライブ向き',
            'price' => '32000',
            'image_file_name' => '/image/sub/yam-82.jpg',
            'image_file_name_sub' => '/image/sub/yam-82.jpg',
        ]);

        DB::table('item')->insert([
            'name' => 'ヤマハ FG830',
            'details' => '中低音の響きが豊か。音がよく伸びる',
            'price' => '40867',
            'image_file_name' => '/image/top/yam-83.jpeg',
            'image_file_name_sub' => '/image/sub/yam-83.jpeg',
        ]);

        DB::table('item')->insert([
            'name' => 'エピフォーン Dove PRO VB ',
            'details' => '音が大きく、アンプに繋いでもいい音が出る',
            'price' => '36850',
            'image_file_name' => '/image/top/epi-vb.jpg',
            'image_file_name_sub' => '/image/sub/Epi-vb.jpg',
        ]);

        DB::table('item')->insert([
            'name' => 'エピフォーン 1963 EJ-45(VS)',
            'details' => '弾きやすく、低音がよく出る',
            'price' => '26400',
            'image_file_name' => '/image/top/epi-ej.jpeg',
            'image_file_name_sub' => '/image/sub/epi-ej.jpg',
        ]);

        DB::table('item')->insert([
            'name' => 'アイバニーズ AEG10II-NNB ',
            'details' => '抱えやすく、弾きやすい',
            'price' => '30000',
            'image_file_name' => '/image/top/iba-aeg.jpeg',
            'image_file_name_sub' => '/image/sub/iba.jpg',
        ]);
        DB::table('item')->insert([
            'name' => 'アイバニーズ Thermo Aged AVC11 Antique',
            'details' => '高音の音が、よく響く',
            'price' => '70950',
            'image_file_name' => '/image/top/iba-av.jpeg',
            'image_file_name_sub' => '/image/sub/iba-a.jpg',
        ]);

        DB::table('item')->insert([
            'name' => 'ヘッドウェイ HJ-590AS',
            'details' => '低音〜高音まで、音がしっかり響く',
            'price' => '58300',
            'image_file_name' => '/image/top/hea-hj.jpeg',
            'image_file_name_sub' => '/image/sub/hea-hj.jpeg',
        ]);

        DB::table('item')->insert([
            'name' => 'ヘッドウェイ HJ-OSAMURAISANⅡ',
            'details' => '音がよく響く',
            'price' => '65780',
            'image_file_name' => '/image/top/hea-sam.jpeg',
            'image_file_name_sub' => '/image/sub/hea-sum.jpeg',
        ]);

        DB::table('item')->insert([
            'name' => 'エスヤイリ Limited Series YD-04',
            'details' => '手が小さい人でも引きやすい',
            'price' => '16500',
            'image_file_name' => '/image/top/s.jpeg',
            'image_file_name_sub' => '/image/sub/s.jpeg',
        ]);

        DB::table('item')->insert([
            'name' => 'フェンダー CT-60S',
            'details' => '音が響きやすく、長時間弾いても疲れにくい',
            'price' => '21000',
            'image_file_name' => '/image/top/fen-ct.jpg',
            'image_file_name_sub' => '/image/sub/fe-ct.jpg',
        ]);
    }
}
