<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    // https://laravel.com/docs/9.x/eloquent#generating-model-classes

    /**
     * The table associated with the model.
     * OPTIONAL
     * @var string
     */
    // protected $table = 'companies';

    /**
     * The database connection that should be used by the model.
     * OPTIONAL
     * @var string
     */
    // protected $connection = 'mysql';

    /**
     * The attributes that are mass assignable.
     * INCLUDE
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'address',
        'country_code'
    ];

    /**
     * The attributes that aren't mass assignable.
     * OPTIONAL
     * @var array
     */
    // protected $guarded = [];

    /**
     * The model's default values for attributes.
     * OPTIONAL
     * @var array
     */
    protected $attributes = [
        'country_code' => 'AUS',
    ];

    // Relationships...

}
