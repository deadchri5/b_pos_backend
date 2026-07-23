<?php

namespace App\Models\Warehouse;

use Illuminate\Database\Eloquent\Model;
use App\Models\Warehouse\Stock;

class Warehouse extends Model
{
    protected $table = 'warehouses';

    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = [
        'name',
        'location',
        'capacity',
    ];

    public function stocks()
    {
        return $this->hasMany(Stock::class, 'warehouse_id');
    }

}
