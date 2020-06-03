<?php

namespace App\Repositories;

use App\Models\Ecommerce_article;
use App\Repositories\BaseRepository;

/**
 * Class Ecommerce_articleRepository
 * @package App\Repositories
 * @version June 2, 2020, 7:58 pm UTC
*/

class Ecommerce_articleRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'article',
        'description',
        'prix_achat',
        'prix_vente',
        'quantite',
        'category',
        'images'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Ecommerce_article::class;
    }
}
