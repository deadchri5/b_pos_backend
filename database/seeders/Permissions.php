<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Permissions extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('permissions')->insert([
            [
                'name' => 'admin'
            ],
            [
                'name' => 'gerente'
            ],
            [
                'name' => 'cajero'
            ],
            [
                'name' => 'ventas'
            ],
            [
                'name' => 'inventario'
            ],
            [
                'name' => 'compras'
            ],
            [
                'name' => 'contabilidad'
            ],
        ]);
    }
}
