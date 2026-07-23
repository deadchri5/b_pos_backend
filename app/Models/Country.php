<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    /**
     * name of the table
     */
    protected $table = 'country';

    protected $primaryKey = 'id';

    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'iso_code',
    ];

    /**
     * Get the brands for the country.
     */
    public function brands()
    {
        return $this->hasMany(Brand::class, 'country_id');
    }
}