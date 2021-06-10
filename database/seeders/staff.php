<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class staff extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('staff')->insert([
            'stfName' => Str::random(10),
            'email' => Str::random(4) . '@gmail.com',
            'password' => Hash::make('123456789'),
            'stfConactNo' => rand(12345678, 999999999),
            'stfGender' => 'M',
            'loginName' => Str::random(10),
            'jobtitles_id' => rand(0, 10),

        ]);
    }
}
