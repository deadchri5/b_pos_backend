<?php

namespace App\Http\Dtos\Warehouse;

use Spatie\LaravelData\Data;

class StockDto extends Data
{
    public function __construct(
        public int $id,
        public string $name,
        public string $sku,
        public string $department,
        public float $price,
        public string $unit_code,
        public float $selected_wh_stock,
        public float $total_stock
    ) {}
}