<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Ecommerce_panier
 * @package App\Models
 * @version June 4, 2020, 8:14 pm UTC
 *
 * @property string $user_id
 * @property string $product_id
 */
class Ecommerce_panier extends Model
{
    use SoftDeletes;

    public $table = 'ecommerce_paniers';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'user_id',
        'product_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'string',
        'product_id' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
