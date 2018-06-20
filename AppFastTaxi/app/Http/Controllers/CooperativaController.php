<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cooperativa;

class CooperativaController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cooperativas = Cooperativa::getAll();
        return view('/cooperativa/index', compact('cooperativas'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function new()
    {
        return view('/cooperativa/new');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $cooperativa = new Cooperativa;
        $cooperativa->nombre_coperativa = $request->nombre;
        $cooperativa->direccion = $request->direccion;
        $cooperativa->telefono = $request->telefono;
        $cooperativa->razon_social = $request->razonsocial;
        $cooperativa->save();

        return redirect()->route('cooperativa.index');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cooperativa = Cooperativa::find($id);
        return view('/cooperativa/edit', compact('cooperativa'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //$cooperativa = Cooperativa::where('idcooperativa', $id)->first();
        $cooperativa = Cooperativa::find($id);
        $cooperativa->nombre_coperativa = $request->nombre;
        $cooperativa->direccion = $request->direccion;
        $cooperativa->telefono = $request->telefono;
        $cooperativa->razon_social = $request->razonsocial;
        $cooperativa->save();

        return redirect()->route('cooperativa.index');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $cooperativa = Cooperativa::find($id);
        $cooperativa->delete();
        
        return redirect()->route('cooperativa.index');
    }
}
