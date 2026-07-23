<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Providers extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('providers')->insert(
            [
                ['name' => 'Proveedora Local'],
                ['name' => 'Surtido Propio'],
                ['name' => 'Grupo Bimbo'],
                ['name' => 'PepsiCo'],
                ['name' => 'The Coca-Cola Company'],
                ['name' => 'Nestlé'],
                ['name' => 'Grupo Lala'],
                ['name' => 'Alpura'],
                ['name' => 'Danone'],
                ['name' => 'Grupo Herdez'],
                ['name' => 'Conagra Brands'],
                ['name' => 'Unilever'],
                ['name' => 'Procter & Gamble'],
                ['name' => 'Colgate-Palmolive'],
                ['name' => 'Kimberly-Clark'],
                ['name' => 'Johnson & Johnson'],
                ['name' => 'Mondelēz International'],
                ['name' => 'Kellanova (kellogg\'s)'],
                ['name' => 'Quaker Oats Company'],
                ['name' => 'Sigma Alimentos'],
                ['name' => 'Sukarne'],
                ['name' => 'Pilgrim’s'],
                ['name' => 'McCormick & Company'],
                ['name' => 'La Costeña'],
                ['name' => 'Del Monte Foods'],
                ['name' => 'La Moderna'],
                ['name' => 'Verde Valle'],
                ['name' => 'Zulka'],
                ['name' => 'Mazola'],
                ['name' => 'Aceites del Mayo'],
                ['name' => 'Bonafont'],
                ['name' => 'Grupo Jumex'],
                ['name' => 'Red Bull GmbH'],
                ['name' => 'Monster Beverage'],
                ['name' => 'Heineken México'],
                ['name' => 'Grupo Modelo'],
                ['name' => 'Bacardí'],
                ['name' => 'José Cuervo'],
                ['name' => 'Ferrero'],
                ['name' => 'Mars Incorporated'],
                ['name' => 'Hershey’s'],
                ['name' => 'Barcel'],
                ['name' => 'Sabritas'],
                ['name' => 'Quala'],
                ['name' => 'SC Johnson'],
                ['name' => 'Clorox'],
                ['name' => 'Reckitt'],
                ['name' => 'Henkel'],
                ['name' => 'Beiersdorf'],
                ['name' => 'Essity'],
                ['name' => '3M'],
                ['name' => 'Bayer'],
                ['name' => 'Sanofi'],
                ['name' => 'Pfizer'],
                ['name' => 'Genomma Lab'],
                ['name' => 'Omnilife'],
                ['name' => 'Great Value']
            ]
        );
    }
}
