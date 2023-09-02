<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use DateTime;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'kana',
            'email' => '123',
            'email_verified_at' => '2023-09-01',
            'password' => 'aiueo',
            'height' => '153.2',
            'weight' => '43.5',
            'BFP' => '21.2',
            'goal' => '42.1',
            'remember_token' => 'NULL',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);
            //
    }
}
