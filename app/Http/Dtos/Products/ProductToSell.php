<?php

namespace App\Http\Dtos\Products;

use Spatie\LaravelData\Data;

class ProductToSell extends Data
{
    public function __construct(
        public int $id_producto,
        public float $cantidad
    ) {
    }
}