<?php

namespace App\Repositories;

use App\Models\Categorie;
use App\Repositories\BaseRepository;

/**
 * Class CategorieRepository
 * @package App\Repositories
 * @version May 15, 2020, 7:53 am UTC
*/

class CategorieRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'mother',
        'name',
        'link'
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
        return Categorie::class;
    }
}
