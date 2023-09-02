<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class RecordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('records')->insert([
            'date' => '2023-09-01',
            'weight' => '43.5',
            'BFP' => '21.2',
            'body' => '頑張った',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'trainingmenu_id' => 1,
            'user_id' => 1,
            ]);//
    }
}
