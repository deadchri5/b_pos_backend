<?php

namespace App\Models\Providers;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    /**
     * name of the database
     */
    protected $database = 'laravel';

    /**
     * name of the table
     */
    protected $table = 'providers';

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
        'phone',
        'email',
        'last_visit',
        'logo_url',
    ];
}
