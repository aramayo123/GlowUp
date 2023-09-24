<?php

namespace App\Http\Controllers;

use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;
use App\Http\Requests\ServicioRequest;
use Illuminate\Http\RedirectResponse;
use App\Models\Servicio;
use Illuminate\View\View;

class ServiciosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index():View
    {
        //
        return view('servicios.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ServicioRequest $request):RedirectResponse
    {
        $servicio = new Servicio();
        $servicio->nombre_servicio = $request->nombre_servicio;
        $servicio->save();
        return redirect()->route('servicios.index')->with('exito', 'El servicio ha sido creado con exito!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Servicio $servicio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Servicio $servicio)
    {
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ServicioRequest $request, Servicio $servicio):RedirectResponse
    {
        //
        $servicio->nombre_servicio = $request->nombre_servicio;
        $servicio->update();
        return redirect()->route('servicios.index')->with('exito', 'El servicio ha sido actualizado con exito!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Servicio $servicio):RedirectResponse
    {
        //
        Servicio::destroy($servicio->id);
        return redirect()->route('servicios.index')->with('exito', 'El servicio ha sido eliminado con exito!');
    }
}
