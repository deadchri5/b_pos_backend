<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentMethods extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('payment_method')->insert([
            [
                'name' => 'Credit Card',
                'description' => 'Pago con tarjeta de crédito.',
                'key' => 'CR',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Cash',
                'description' => 'Pago en efectivo.',
                'key' => 'EF',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Bank Transfer',
                'description' => 'Pago mediante transferencia bancaria.',
                'key' => 'TB',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Mixed',
                'description' => 'Pago utilizando una combinación de métodos.',
                'key' => 'MIX',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Pending',
                'description' => 'Pago pendiente.',
                'key' => 'PEND',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Promotion Active',
                'description' => 'Pago utilizando una promoción activa.',
                'key' => 'PA',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Gift Card',
                'description' => 'Pago usando saldo a favor.',
                'key' => 'SF',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
