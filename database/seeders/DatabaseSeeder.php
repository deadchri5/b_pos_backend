<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// Seeders
use Database\Seeders\Countries;
use Database\Seeders\Departments;
use Database\Seeders\Categories;
use Database\Seeders\Brands;
use Database\Seeders\ProductUnits;
use Database\Seeders\PaymentMethods;
use Database\Seeders\Providers;
use Database\Seeders\Warehouses;
use Database\Seeders\ShrinkageReasons;
use Database\Seeders\Permissions;
use Database\Seeders\Clients;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(Countries::class);

        $this->call(PaymentMethods::class);

        $this->call(Departments::class);

        $this->call(Brands::class);

        $this->call(Providers::class);
        
        $this->call(Categories::class);

        $this->call(ProductUnits::class);

        $this->call(Warehouses::class);

        $this->call(ShrinkageReasons::class);

        $this->call(Permissions::class);

        $this->call(Clients::class);

    }
}
