<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class TrainingMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('trainingmenus')->insert([
            'title' => '運動メニュー',
            'menu1'=> '腹筋',
            'menu2' => '腕立て伏せ',
            'menu3' => 'スクワット',
            'menu4' => 'プランク',
            'menu5' => 'ヒップリフト',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);
        //
    }
}
