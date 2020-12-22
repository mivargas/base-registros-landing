<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Landing_option
 * @package App\Models
 * @version January 25, 2019, 3:39 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection UserContent
 * @property string descripcion
 */
class Landing_option extends Model
{
    use SoftDeletes;

    public $table = 'landing_options';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'descripcion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'descripcion' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function userContents()
    {
        return $this->hasMany(\App\Models\UserContent::class);
    }
}
