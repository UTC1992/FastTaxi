<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConductorController extends Model
{
    //
    protected $table = 'conductor';
    protected $primaryKey = 'idconductor';

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
