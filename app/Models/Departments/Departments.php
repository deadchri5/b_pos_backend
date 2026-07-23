<?php

namespace App\Models\Departments;

use Illuminate\Database\Eloquent\Model;
use App\Models\Categories\Categories;

class Departments extends Model
{
    /**
     * name of the database
     */
    protected $database = 'laravel';

    /**
     * name of the table
     */
    protected $table = 'departments';

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
    ];

    /**
     * Get the categories for the department.
     */
    public function categories()
    {
        return $this->hasMany(Categories::class, 'department_id');
    }
}