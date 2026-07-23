<?php

namespace App\Models\Brands;

use Illuminate\Database\Eloquent\Model;

use App\Models\Products\Product;

class Brands extends Model
{
    protected $table = 'brands';

    protected $primaryKey = 'id';

    public $timestamps = true;

    protected $fillable = [
        'name',
        'slug',
        'logo_url',
        'description',
        'country_id',
        'is_active',
    ];

    public function products()
    {
        return $this->hasMany(Product::class, 'brand_id');
    }
}
