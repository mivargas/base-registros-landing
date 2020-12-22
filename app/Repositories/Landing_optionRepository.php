<?php

namespace App\Repositories;

use App\Models\Landing_option;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class Landing_optionRepository
 * @package App\Repositories
 * @version January 25, 2019, 3:39 am UTC
 *
 * @method Landing_option findWithoutFail($id, $columns = ['*'])
 * @method Landing_option find($id, $columns = ['*'])
 * @method Landing_option first($columns = ['*'])
*/
class Landing_optionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'descripcion'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Landing_option::class;
    }
}
