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
            'name' => '腹筋',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);
        DB::table('trainingmenus')->insert([
            'name' => '腕立て伏せ',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);
        DB::table('trainingmenus')->insert([
            'name' => 'スクワット',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);
         DB::table('trainingmenus')->insert([
            'name' => 'プランク',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);
         DB::table('trainingmenus')->insert([
            'name' => 'ヒップリフト',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);
        //
    }
}
