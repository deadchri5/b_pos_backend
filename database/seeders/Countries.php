<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Countries extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('country')->insert([
            [
                'name' => 'Afganistán',
                'iso_code' => 'AF',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            ['name' => 'Alemania', 'iso_code' => 'DE', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Argentina', 'iso_code' => 'AR', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Australia', 'iso_code' => 'AU', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Austria', 'iso_code' => 'AT', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Bélgica', 'iso_code' => 'BE', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Bolivia', 'iso_code' => 'BO', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Brasil', 'iso_code' => 'BR', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Canadá', 'iso_code' => 'CA', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Chile', 'iso_code' => 'CL', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'China', 'iso_code' => 'CN', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Colombia', 'iso_code' => 'CO', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Corea del Sur', 'iso_code' => 'KR', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Costa Rica', 'iso_code' => 'CR', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Cuba', 'iso_code' => 'CU', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Dinamarca', 'iso_code' => 'DK', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Ecuador', 'iso_code' => 'EC', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Egipto', 'iso_code' => 'EG', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'El Salvador', 'iso_code' => 'SV', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Emiratos Árabes Unidos', 'iso_code' => 'AE', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'España', 'iso_code' => 'ES', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Estados Unidos', 'iso_code' => 'US', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Filipinas', 'iso_code' => 'PH', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Finlandia', 'iso_code' => 'FI', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Francia', 'iso_code' => 'FR', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Grecia', 'iso_code' => 'GR', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Guatemala', 'iso_code' => 'GT', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Honduras', 'iso_code' => 'HN', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'India', 'iso_code' => 'IN', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Indonesia', 'iso_code' => 'ID', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Irlanda', 'iso_code' => 'IE', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Israel', 'iso_code' => 'IL', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Italia', 'iso_code' => 'IT', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Japón', 'iso_code' => 'JP', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'México', 'iso_code' => 'MX', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Noruega', 'iso_code' => 'NO', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Nueva Zelanda', 'iso_code' => 'NZ', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Países Bajos', 'iso_code' => 'NL', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Panamá', 'iso_code' => 'PA', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Paraguay', 'iso_code' => 'PY', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Perú', 'iso_code' => 'PE', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Polonia', 'iso_code' => 'PL', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Portugal', 'iso_code' => 'PT', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Reino Unido', 'iso_code' => 'GB', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'República Checa', 'iso_code' => 'CZ', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'República Dominicana', 'iso_code' => 'DO', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Rumania', 'iso_code' => 'RO', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Rusia', 'iso_code' => 'RU', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Sudáfrica', 'iso_code' => 'ZA', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Suecia', 'iso_code' => 'SE', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Suiza', 'iso_code' => 'CH', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Tailandia', 'iso_code' => 'TH', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Turquía', 'iso_code' => 'TR', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Ucrania', 'iso_code' => 'UA', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Uruguay', 'iso_code' => 'UY', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Venezuela', 'iso_code' => 'VE', 'created_at' => now(), 'updated_at' => now()],
    ]);
    }
}
