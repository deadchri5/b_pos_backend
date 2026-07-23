<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Model;

class Users_pv extends Model
{
    /**
     * name of the database
     */
    protected $database = 'laravel';

    /**
     * name of the table
     */
    protected $table = 'users_pv';

    protected $primaryKey = 'id';

    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'username',
        'password_hash',
        'email',
        'image_url',
        'created_at',
        'updated_at'
    ];

}
