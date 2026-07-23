<?php

namespace App\Models\Products;

use Illuminate\Database\Eloquent\Model;

// use App\Models\Brands\Brands;
use App\Models\Categories\Categories;
use App\Models\Products\Images;
use App\Models\Brand;
use App\Models\Products\Units\Units;
use App\Models\Warehouse\Stock;

class Product extends Model
{
    protected $table = 'products';

    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = [
        'status',
        'sku',
        'name',
        'description',
        'price',
        'upc',
        'provider_id',
        'image_url',
        'category_id',
        'brand_id',
        'unit_id',
    ];

    // public function brand()
    // {
    //     return $this->belongsTo(Brands::class, 'brand_id');
    // }

    public function category()
    {
        return $this->belongsTo(Categories::class, 'category_id');
    }

    public function images()
    {
        return $this->hasMany(Images::class, 'product_id');
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class, 'brand_id');
    }


    public function unit()
    {
        return $this->belongsTo(Units::class, 'unit_id');
    }
    
    public function stocks()
    {
        return $this->hasMany(Stock::class, 'product_id');
    }
}
