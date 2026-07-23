<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Categories extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                'name' => 'Refrescos',
                'code' => 'REF',
                'description' => 'Bebidas carbonatadas y no carbonatadas',
                'departament_id' => 1,
            ],
            [
                'name' => 'Agua Embotellada',
                'code' => 'AGU',
                'description' => 'Agua natural y mineral',
                'departament_id' => 1,
            ],
            [
                'name' => 'Jugos',
                'code' => 'JUG',
                'description' => 'Jugos y néctares',
                'departament_id' => 1,
            ],
            [
                'name' => 'Bebidas Energéticas',
                'code' => 'ENE',
                'description' => 'Bebidas energizantes',
                'departament_id' => 1,
            ],
            [
                'name' => 'Bebidas Isotónicas',
                'code' => 'ISO',
                'description' => 'Bebidas deportivas e hidratantes',
                'departament_id' => 1,
            ],
            [
                'name' => 'Cerveza',
                'code' => 'CER',
                'description' => 'Cervezas nacionales e importadas',
                'departament_id' => 1,
            ],
            [
                'name' => 'Vinos',
                'code' => 'VIN',
                'description' => 'Vinos tintos, blancos y rosados',
                'departament_id' => 1,
            ],
            [
                'name' => 'Licores',
                'code' => 'LIC',
                'description' => 'Bebidas alcohólicas y destilados',
                'departament_id' => 1,
            ],
            [
                'name' => 'Leche',
                'code' => 'LEC',
                'description' => 'Leche y bebidas lácteas',
                'departament_id' => 2,
            ],
            [
                'name' => 'Yogurt',
                'code' => 'YOG',
                'description' => 'Yogurts y probióticos',
                'departament_id' => 2,
            ],
            [
                'name' => 'Quesos',
                'code' => 'QUE',
                'description' => 'Quesos frescos y maduros',
                'departament_id' => 2,
            ],
            [
                'name' => 'Crema',
                'code' => 'CRE',
                'description' => 'Crema y derivados lácteos',
                'departament_id' => 2,
            ],
            [
                'name' => 'Mantequilla',
                'code' => 'MAN',
                'description' => 'Mantequilla y margarina',
                'departament_id' => 2,
            ],
            [
                'name' => 'Pan de Caja',
                'code' => 'PCA',
                'description' => 'Pan blanco e integral',
                'departament_id' => 3,
            ],
            [
                'name' => 'Pan Dulce',
                'code' => 'PDU',
                'description' => 'Pan dulce y bollería',
                'departament_id' => 3,
            ],
            [
                'name' => 'Tortillas',
                'code' => 'TOR',
                'description' => 'Tortillas de maíz y harina',
                'departament_id' => 3,
            ],
            [
                'name' => 'Galletas',
                'code' => 'GAL',
                'description' => 'Galletas dulces y saladas',
                'departament_id' => 3,
            ],
            [
                'name' => 'Pasteles',
                'code' => 'PAS',
                'description' => 'Pasteles y repostería',
                'departament_id' => 3,
            ],
            [
                'name' => 'Botanas',
                'code' => 'BOT',
                'description' => 'Papas fritas y snacks',
                'departament_id' => 4,
            ],
            [
                'name' => 'Cacahuates',
                'code' => 'CAC',
                'description' => 'Cacahuates y semillas',
                'departament_id' => 4,
            ],
            [
                'name' => 'Chocolate',
                'code' => 'CHO',
                'description' => 'Chocolates y golosinas',
                'departament_id' => 4,
            ],
            [
                'name' => 'Dulces',
                'code' => 'DUL',
                'description' => 'Caramelos y confitería',
                'departament_id' => 4,
            ],
            [
                'name' => 'Chicles',
                'code' => 'CHI',
                'description' => 'Chicles y mentas',
                'departament_id' => 4,
            ],
            [
                'name' => 'Arroz',
                'code' => 'ARR',
                'description' => 'Arroz de diferentes variedades',
                'departament_id' => 5,
            ],
            [
                'name' => 'Frijoles',
                'code' => 'FRI',
                'description' => 'Frijoles secos y enlatados',
                'departament_id' => 5,
            ],
            [
                'name' => 'Azúcar',
                'code' => 'AZU',
                'description' => 'Azúcar refinada y mascabado',
                'departament_id' => 5,
            ],
            [
                'name' => 'Sal',
                'code' => 'SAL',
                'description' => 'Sal de mesa y marina',
                'departament_id' => 5,
            ],
            [
                'name' => 'Aceite',
                'code' => 'ACE',
                'description' => 'Aceites vegetales y de cocina',
                'departament_id' => 5,
            ],
            [
                'name' => 'Pasta',
                'code' => 'PAS',
                'description' => 'Pastas y fideos',
                'departament_id' => 5,
            ],
            [
                'name' => 'Sopas Instantáneas',
                'code' => 'SOP',
                'description' => 'Sopas y ramen instantáneo',
                'departament_id' => 5,
            ],
            [
                'name' => 'Atún',
                'code' => 'ATU',
                'description' => 'Atún enlatado',
                'departament_id' => 5,
            ],
            [
                'name' => 'Sardinas',
                'code' => 'SAR',
                'description' => 'Sardinas y mariscos enlatados',
                'departament_id' => 5,
            ],
            [
                'name' => 'Mayonesa',
                'code' => 'MAY',
                'description' => 'Mayonesas y aderezos',
                'departament_id' => 5,
            ],
            [
                'name' => 'Catsup',
                'code' => 'CAT',
                'description' => 'Catsup y salsas de tomate',
                'departament_id' => 5,
            ],
            [
                'name' => 'Mostaza',
                'code' => 'MOS',
                'description' => 'Mostaza y complementos',
                'departament_id' => 5,
            ],
            [
                'name' => 'Salsas Picantes',
                'code' => 'SPI',
                'description' => 'Salsas mexicanas y picantes',
                'departament_id' => 5,
            ],
            [
                'name' => 'Especias',
                'code' => 'ESP',
                'description' => 'Condimentos y especias',
                'departament_id' => 5,
            ],
            [
                'name' => 'Harina',
                'code' => 'HAR',
                'description' => 'Harina de trigo y maíz',
                'departament_id' => 5,
            ],
            [
                'name' => 'Cereal',
                'code' => 'CER',
                'description' => 'Cereales para desayuno',
                'departament_id' => 6,
            ],
            [
                'name' => 'Avena',
                'code' => 'AVE',
                'description' => 'Avena y granola',
                'departament_id' => 6,
            ],
            [
                'name' => 'Mermeladas',
                'code' => 'MER',
                'description' => 'Mermeladas y cajetas',
                'departament_id' => 6,
            ],
            [
                'name' => 'Miel',
                'code' => 'MIE',
                'description' => 'Miel y endulzantes',
                'departament_id' => 6,
            ],
            [
                'name' => 'Huevos',
                'code' => 'HUE',
                'description' => 'Huevos blancos y rojos',
                'departament_id' => 6,
            ],
            [
                'name' => 'Café',
                'code' => 'CAF',
                'description' => 'Café molido e instantáneo',
                'departament_id' => 6,
            ],
            [
                'name' => 'Té',
                'code' => 'TEA',
                'description' => 'Tés e infusiones',
                'departament_id' => 6,
            ],
            [
                'name' => 'Carnes Frías',
                'code' => 'CFR',
                'description' => 'Jamón, salchicha y embutidos',
                'departament_id' => 7,
            ],
            [
                'name' => 'Pollo',
                'code' => 'POL',
                'description' => 'Pollo fresco y congelado',
                'departament_id' => 7,
            ],
            [
                'name' => 'Res',
                'code' => 'RES',
                'description' => 'Carne de res',
                'departament_id' => 7,
            ],
            [
                'name' => 'Cerdo',
                'code' => 'CER',
                'description' => 'Carne de cerdo',
                'departament_id' => 7,
            ],
            [
                'name' => 'Pescados y Mariscos',
                'code' => 'PMA',
                'description' => 'Productos del mar',
                'departament_id' => 7,
            ],
            [
                'name' => 'Frutas',
                'code' => 'FRU',
                'description' => 'Frutas frescas',
                'departament_id' => 8,
            ],
            [
                'name' => 'Verduras',
                'code' => 'VER',
                'description' => 'Verduras y vegetales frescos',
                'departament_id' => 8,
            ],
            [
                'name' => 'Hierbas Aromáticas',
                'code' => 'HIE',
                'description' => 'Hierbas y especias frescas',
                'departament_id' => 8,
            ],
            [
                'name' => 'Congelados',
                'code' => 'CON',
                'description' => 'Productos congelados',
                'departament_id' => 9,
            ],
            [
                'name' => 'Helados',
                'code' => 'HEL',
                'description' => 'Helados y postres congelados',
                'departament_id' => 9,
            ],
            [
                'name' => 'Paletas',
                'code' => 'PAL',
                'description' => 'Paletas de hielo y crema',
                'departament_id' => 9,
            ],
            [
                'name' => 'Detergente',
                'code' => 'DET',
                'description' => 'Detergentes para ropa',
                'departament_id' => 10,
            ],
            [
                'name' => 'Suavizantes',
                'code' => 'SUA',
                'description' => 'Suavizantes de telas',
                'departament_id' => 10,
            ],
            [
                'name' => 'Cloro',
                'code' => 'CLO',
                'description' => 'Cloro y blanqueadores',
                'departament_id' => 10,
            ],
            [
                'name' => 'Limpiadores',
                'code' => 'LIM',
                'description' => 'Limpiadores multiusos',
                'departament_id' => 10,
            ],
            [
                'name' => 'Jabón de Baño',
                'code' => 'JAB',
                'description' => 'Jabones corporales',
                'departament_id' => 11,
            ],
            [
                'name' => 'Shampoo',
                'code' => 'SHA',
                'description' => 'Shampoo y cuidado capilar',
                'departament_id' => 11,
            ],
            [
                'name' => 'Papel Higiénico',
                'code' => 'PHI',
                'description' => 'Papel higiénico y servilletas',
                'departament_id' => 11,
            ],
            [
                'name' => 'Pañales',
                'code' => 'PAN',
                'description' => 'Pañales para bebé',
                'departament_id' => 11,
            ],
            [
                'name' => 'Toallas Femeninas',
                'code' => 'TOF',
                'description' => 'Productos de higiene femenina',
                'departament_id' => 11,
            ],
            [
                'name' => 'Cepillos Dentales',
                'code' => 'CEP',
                'description' => 'Cepillos y cuidado dental',
                'departament_id' => 11,
            ],
            [
                'name' => 'Pasta Dental',
                'code' => 'PDE',
                'description' => 'Pastas dentales',
                'departament_id' => 11,
            ],
            [
                'name' => 'Desodorantes',
                'code' => 'DES',
                'description' => 'Desodorantes y antitranspirantes',
                'departament_id' => 11,
            ],
            [
                'name' => 'Rastrillos',
                'code' => 'RAS',
                'description' => 'Rastrillos y afeitadoras',
                'departament_id' => 11,
            ],
            [
                'name' => 'Medicamentos OTC',
                'code' => 'MED',
                'description' => 'Medicamentos de libre venta',
                'departament_id' => 12,
            ],
            [
                'name' => 'Vitaminas',
                'code' => 'VIT',
                'description' => 'Vitaminas y suplementos',
                'departament_id' => 12,
            ],
            [
                'name' => 'Curitas',
                'code' => 'CUR',
                'description' => 'Vendajes y primeros auxilios',
                'departament_id' => 12,
            ],
        ]);

    }
}
