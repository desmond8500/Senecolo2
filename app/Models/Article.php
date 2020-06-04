<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Article
 * @package App\Models
 * @version June 2, 2020, 6:14 pm UTC
 *
 * @property string $article
 * @property string $images
 * @property string $description
 * @property string $quantite
 * @property string $categorie
 * @property string $prix_achat
 * @property string $prix_vente
 */
class Article extends Model
{
    use SoftDeletes;

    public $table = 'articles';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'article',
        'images',
        'description',
        'quantite',
        'categorie',
        'prix_achat',
        'prix_vente'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'article' => 'string',
        'images' => 'string',
        'description' => 'string',
        'quantite' => 'string',
        'categorie' => 'string',
        'prix_achat' => 'string',
        'prix_vente' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];

    public function categories()
    {
        return $this->hasMany('App\Model\Ecommerce_category');
    }


}
