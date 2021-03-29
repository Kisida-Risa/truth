<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
        ]);
        DB::table('item')->insert([
            'name' => 'モーリス　M280',
            'details' => '音が大きい',
            'price' => '30800',
            'image_file_name' => '/image/top/mor-m28.jpeg',
        ]);

        DB::table('item')->insert([
            'name' => 'モーリス M351',
            'details' => '音が大きい',
            'a_details' => '長く使える',
            'price' => '30850',
            'image_file_name' => '/image/top/mor-m35.jpeg',
        ]);

        DB::table('item')->insert([
            'name' => 'ヤマハ FS820',
            'details' => '弾きやすい',
            'price' => '34595',
            'image_file_name' => '/image/top/yam-fs.jpeg',
        ]);

        DB::table('item')->insert([
            'name' => 'ヤマハ FG820',
            'details' => '音が大きい',
            'price' => '32000',
            'image_file_name' => '/image/sub/yam-82.jpg',
        ]);

        DB::table('item')->insert([
            'name' => 'ヤマハ FG830',
            'details' => '音が響きやすい',
            'price' => '40867',
            'image_file_name' => '/image/top/yam-83.jpeg',
        ]);

        DB::table('item')->insert([
            'name' => 'エピフォーン Dove PRO VB ',
            'details' => '音が響きやすい',
            'price' => '36850',
            'image_file_name' => '/image/top/epi-vb.jpg',
        ]);

        DB::table('item')->insert([
            'name' => 'エピフォーン 1963 EJ-45(VS)',
            'details' => '音が大きい',
            'a_details' => '弾きやすい',
            'price' => '26400',
            'image_file_name' => '/image/top/epi-ej.jpeg',
        ]);

        DB::table('item')->insert([
            'name' => 'アイバニーズ AEG10II-NNB ',
            'details' => '弾きやすい',
            'price' => '30000',
            'image_file_name' => '/image/top/iba-aeg.jpeg',
        ]);
        DB::table('item')->insert([
            'name' => 'アイバニーズ Thermo Aged AVC11 Antique',
            'details' => '音が響きやすい',
            'price' => '70950',
            'image_file_name' => '/image/top/iba-av.jpeg',
        ]);

        DB::table('item')->insert([
            'name' => 'ヘッドウェイ HJ-590AS',
            'details' => '音が響きやすい',
            'price' => '58300',
            'image_file_name' => '/image/top/hea-hj.jpeg',
        ]);

        DB::table('item')->insert([
            'name' => 'ヘッドウェイ HJ-OSAMURAISANⅡ',
            'details' => '音が響きやすい',
            'price' => '65780',
            'image_file_name' => '/image/top/hea-sam.jpeg',
        ]);

        DB::table('item')->insert([
            'name' => 'エスヤイリ Limited Series YD-04',
            'details' => '弾きやすい',
            'price' => '16500',
            'image_file_name' => '/image/top/s.jpeg',
        ]);

        DB::table('item')->insert([
            'name' => 'フェンダー CT-60S',
            'details' => '音が響きやすい',
            'a_details' => '長時間弾いても、疲れにくい',
            'price' => '21000',
            'image_file_name' => '/image/top/fen-ct.jpg',
        ]);
    }
}
