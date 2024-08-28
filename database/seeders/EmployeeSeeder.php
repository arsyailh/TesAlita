<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeSeeder extends Seeder
{
    public function run()
    {
        DB::table('employees')->insert([
            ['name' => 'Lily Stark', 'location_code' => 'JKT', 'birth_date' => '2000-12-31'],
            ['name' => 'Evan Roger', 'location_code' => 'JKT', 'birth_date' => '1990-10-01'],
            ['name' => 'George Alvin', 'location_code' => 'JKT', 'birth_date' => '1995-12-23'],
            ['name' => 'Logan Krolak', 'location_code' => 'BDG', 'birth_date' => '1998-02-27'],
            ['name' => 'Scarlet Snow', 'location_code' => 'SRB', 'birth_date' => '1996-06-05'],
            ['name' => 'Robert London', 'location_code' => 'SMG', 'birth_date' => '1978-05-06'],
        ]);
    }
}
