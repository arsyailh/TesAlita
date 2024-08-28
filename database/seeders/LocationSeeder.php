<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocationSeeder extends Seeder
{
    public function run()
    {
        DB::table('locations')->insert([
            ['code' => 'JKT', 'name' => 'Jakarta'],
            ['code' => 'BDG', 'name' => 'Bandung'],
            ['code' => 'SMG', 'name' => 'Semarang'],
            ['code' => 'SRB', 'name' => 'Surabaya'],
        ]);
    }
}