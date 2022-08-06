<?php

namespace App\Repositories\Admin;

use App\Models\Admin\HomeSliderImage;
use App\Repositories\BaseRepository;

/**
 * Class RoleRepository
 * @package App\Repositories\Admin
 * @version July 18, 2022, 5:54 pm UTC
*/

class HomeSliderImageRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'title',
        'description'
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
        return HomeSliderImage::class;
    }
}
