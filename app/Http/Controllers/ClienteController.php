<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // //Con este metodo se visualizara los datos de la tabla//
        $clientes=Cliente::all();
        return view('cliente.index',compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $clientes=new Cliente;
        $clientes->nombre=$request->input('nombre');
        $clientes->nombreUsuario=$request->input('nombreUsuario');
        $clientes->nidentificacion=$request->input('nidentificacion');
        $clientes->tipoidentificacion=$request->input('tipoidentificacion');
        $clientes->correo=$request->input('correo');
        $clientes->edad=$request->input('edad');
        $clientes->telefono=$request->input('telfono');
        $clientes->save();
        return redirect()->back();
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Cliente $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($nombre)
    {

        
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $nombre)
    {
        $clientes=Cliente::find($nombre);
        $clientes->nombre=$request->input('nombre');
        $clientes->nombreUsuario=$request->input('nombreUsuario');
        $clientes->nidentificacion=$request->input('nidentificacion');
        $clientes->tipoidentificacion=$request->input('tipoidentificacion');
        $clientes->correo=$request->input('correo');
        $clientes->edad=$request->input('edad');
        $clientes->telefono=$request->input('telfono');
        $clientes->update();
        return redirect()->back();
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($nombre)
    {
        $clientes=Cliente::find($nombre);
        $clientes->delete();
        return redirect()->back();
        //
    }
}
