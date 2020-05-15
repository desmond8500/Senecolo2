<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Message
 * @package App\Models
 * @version May 15, 2020, 7:02 am UTC
 *
 * @property string $objet
 * @property string $email
 * @property string $name
 * @property string $description
 * @property string $status
 */
class Message extends Model
{
    use SoftDeletes;

    public $table = 'messages';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'objet',
        'email',
        'name',
        'description',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'objet' => 'string',
        'email' => 'string',
        'name' => 'string',
        'description' => 'string',
        'status' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
