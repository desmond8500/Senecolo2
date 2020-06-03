<?php

namespace App\Repositories;

use App\Models\Ecommerce_category;
use App\Repositories\BaseRepository;

/**
 * Class Ecommerce_categoryRepository
 * @package App\Repositories
 * @version June 2, 2020, 7:40 pm UTC
*/

class Ecommerce_categoryRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'categorie'
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
        return Ecommerce_category::class;
    }
}
