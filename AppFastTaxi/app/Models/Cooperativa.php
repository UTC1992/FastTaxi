<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\Controller;

class Cooperativa extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'cooperativa';
    /**para utilizar un id con otro nombre se puede especificarlo asi 
    * de esta forma cuando se aga una busqueda con find u otra funcion
    * laravel va a entender que estas buscando tu id con el nombre especificado
    */
    protected $primaryKey = 'idcooperativa';

    public $fillable = [
        'nombre_coperativa',
        'direccion',
        'razon_social',
        'telefono',
        'users_id'
    ];

    /**
     * Create a new flight instance.
     *
     * @param  Request  $request
     * @return Response
     */
    public static function getAll()
    {
        $result = Cooperativa::all();
        return $result;
    }
}
