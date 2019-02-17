<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class Restaurant extends Model
{
    use CrudTrait;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'restaurants';
    // protected $primaryKey = 'id';
    // 
    // public $timestamps = false;
    // protected $guarded = ['id'];
    protected $fillable = ['name', 'phone', 'status', 'is_available', 'address', 'landmark', 'city', 'state', 'description', 'latitude', 'longitude', 'amenities', 'taxno', 'payments_terms', 'localities', 'manager_name', 'manager_phone', 'owner_name', 'owner_phone', 'pincode','cuisine'];
    // protected $hidden = [];
    // protected $dates = [];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | ACCESORS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
}
