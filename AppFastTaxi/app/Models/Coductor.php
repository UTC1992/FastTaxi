<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class Coductor
 * @package App\Models
 * @version June 20, 2018, 2:31 am UTC
 *
 * @property int idconductor
 * @property varchar(45) conductorcol
 */
class Coductor extends Model
{

    public $table = 'coductors';
    

    public $fillable = [
        'idconductor',
        'conductorcol',
        'users_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'idconductor' => 'required',
        'conductorcol' => 'required',
        'users_id' => 'required'
    ];

    
}
