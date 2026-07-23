<?php

namespace App\Models\Products\Units;

use Illuminate\Database\Eloquent\Model;
use App\Models\Products\Product;

class Units extends Model
{
    /**
     * name of the database
     */
    protected $database = 'laravel';

    /**
     * name of the table
     */
    protected $table = 'product_unit';

    protected $primaryKey = 'id';

    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'id',
        'name',
        'code',
        'type',
        'is_active',
    ];
}
