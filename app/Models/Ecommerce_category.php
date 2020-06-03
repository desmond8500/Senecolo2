<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Ecommerce_category
 * @package App\Models
 * @version June 2, 2020, 7:40 pm UTC
 *
 * @property string $categorie
 */
class Ecommerce_category extends Model
{
    use SoftDeletes;

    public $table = 'ecommerce_categories';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'categorie'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'categorie' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
