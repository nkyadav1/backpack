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
    protected $casts = [
        'good_for'=>'array',
        'feature'=>'array',
        'food'=>'array',
        'open_hour_to'=>'array',
        'open_hour_from'=>'array'
    ];
    // protected $primaryKey = 'id';
    // 
    // public $timestamps = false;
    // protected $guarded = ['id'];
    protected $fillable = ['name', 'phone','phone2','email1','email2', 'status', 'is_available', 'address', 'landmark', 'city', 'state', 'description', 'latitude', 'longitude', 'amenities', 'taxno', 'payments_terms', 'localities', 'manager_name', 'manager_phone', 'owner_name', 'owner_phone', 'pincode','cuisine','street1','street2','good_for','food','feature','open_hour_to','open_hour_from'];
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
