<?php

namespace App\Repositories;

use App\Models\Ecommerce_panier;
use App\Repositories\BaseRepository;

/**
 * Class Ecommerce_panierRepository
 * @package App\Repositories
 * @version June 4, 2020, 8:14 pm UTC
*/

class Ecommerce_panierRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'product_id'
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
        return Ecommerce_panier::class;
    }
}
