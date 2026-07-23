<?php

namespace Database\Seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Warehouses extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('warehouses')->insert([
            [
                'name' => 'Topacio GDL',
                'location' => 'Av. Topacio 2698, Bosques de la Victoria CP. 44540, Guadalajara, Jalisco',
                'capacity' => 1000
            ],
            [
                'name' => 'Ciruelo GDL',
                'location' => 'C. Ciruelo 1357, Del Fresno CP. 44900, Guadalajara, Jalisco',
                'capacity' => 500
            ]
        ]);
    }
}
