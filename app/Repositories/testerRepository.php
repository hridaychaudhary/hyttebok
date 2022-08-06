<?php

namespace App\Repositories;

use App\Models\tester;
use App\Repositories\BaseRepository;

/**
 * Class testerRepository
 * @package App\Repositories
 * @version July 3, 2022, 2:31 pm +07
*/

class testerRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'fieldq',
        'field2'
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
        return tester::class;
    }
}
