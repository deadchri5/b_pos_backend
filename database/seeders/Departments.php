<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Departments extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('departments')->insert(
            [
                [
                    'id' => 1,
                    'name' => 'Bebidas',
                    'code' => 'BEB',
                ],
                [
                    'id' => 2,
                    'name' => 'Lácteos',
                    'code' => 'LAC',
                ],
                [
                    'id' => 3,
                    'name' => 'Panadería',
                    'code' => 'PAN',
                ],
                [
                    'id' => 4,
                    'name' => 'Botanas y Dulces',
                    'code' => 'BOT',
                ],
                [
                    'id' => 5,
                    'name' => 'Abarrotes',
                    'code' => 'ABA',
                ],
                [
                    'id' => 6,
                    'name' => 'Cereales y Café',
                    'code' => 'CYC',
                ],
                [
                    'id' => 7,
                    'name' => 'Carnes y Embutidos',
                    'code' => 'CAR',
                ],
                [
                    'id' => 8,
                    'name' => 'Frutas y Verduras',
                    'code' => 'FYV',
                ],
                [
                    'id' => 9,
                    'name' => 'Congelados',
                    'code' => 'CON',
                ],
                [
                    'id' => 10,
                    'name' => 'Limpieza',
                    'code' => 'LIM',
                ],
                [
                    'id' => 11,
                    'name' => 'Higiene Personal',
                    'code' => 'HIG',
                ],
                [
                    'id' => 12,
                    'name' => 'Farmacia',
                    'code' => 'FAR',
                ],
            ]
        );
    }
}
