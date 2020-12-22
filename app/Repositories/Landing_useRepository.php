<?php

namespace App\Repositories;

use App\Models\Landing_use;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class Landing_useRepository
 * @package App\Repositories
 * @version January 25, 2019, 3:07 am UTC
 *
 * @method Landing_use findWithoutFail($id, $columns = ['*'])
 * @method Landing_use find($id, $columns = ['*'])
 * @method Landing_use first($columns = ['*'])
*/
class Landing_useRepository extends BaseRepository
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
        return Landing_use::class;
    }
}
