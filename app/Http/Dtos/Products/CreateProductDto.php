<?php

namespace App\Http\Dtos\Products;

use Spatie\LaravelData\Data;

class CreateProductDto extends Data
{
    public function __construct(
        public string $name,
        public string $desc,
        public float $price,
        public int $stock,
        public int $category,
        public string $upc,
        public int $provider,
        public int $unit,
        public int $brand
    ) {}
}