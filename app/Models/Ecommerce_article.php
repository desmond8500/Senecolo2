<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Ecommerce_article
 * @package App\Models
 * @version June 2, 2020, 7:58 pm UTC
 *
 * @property string $article
 * @property string $description
 * @property string $prix_achat
 * @property string $prix_vente
 * @property string $quantite
 * @property string $category
 * @property string $images
 */
class Ecommerce_article extends Model
{
    use SoftDeletes;

    public $table = 'ecommerce_articles';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'article',
        'description',
        'prix_achat',
        'prix_vente',
        'quantite',
        'category',
        'images',
        'type'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'article' => 'string',
        'description' => 'string',
        'prix_achat' => 'string',
        'prix_vente' => 'string',
        'quantite' => 'string',
        'category' => 'string',
        'images' => 'string',
        'type' => 'string',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];


}
