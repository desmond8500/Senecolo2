<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Categorie
 * @package App\Models
 * @version May 15, 2020, 7:53 am UTC
 *
 * @property string $mother
 * @property string $name
 * @property string $link
 */
class Categorie extends Model
{
    use SoftDeletes;

    public $table = 'categories';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'mother',
        'name',
        'link'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'mother' => 'string',
        'name' => 'string',
        'link' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'mother' => 'required',
        'name' => 'required',
        'link' => 'required'
    ];

    
}
