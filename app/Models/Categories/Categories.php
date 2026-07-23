<?php

namespace App\Models\Categories;

use Illuminate\Database\Eloquent\Model;
use App\Models\Departments\Departments;
use App\Models\Products\Product;

class Categories extends Model
{
    /**
     * name of the database
     */
    protected $database = 'laravel';

    /**
     * name of the table
     */
    protected $table = 'categories';

    protected $primaryKey = 'id';

    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'id',
        'name',
        'code',
        'description',
        'image_url',
        'departament_id',
    ];

    /**
     * Get the department that owns the category.
     */
    public function department()
    {
        return $this->belongsTo(Departments::class, 'departament_id');
    }

    /**
     * Get the products for the category.
     */
    public function products()
    {
        return $this->hasMany(Product::class, 'category_id');
    }
}
