<?php

namespace App\Http\Controllers;

use App\Http\Requests\PromoRequest;
use App\Models\Promocion;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class PromocionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('promociones.index');
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
    public function store(PromoRequest $request):RedirectResponse
    {
        $servicios = $request->input("servicios");
        $promocion = new Promocion();
        $promocion->nombre_promocion = $request->nombre_promocion;
        $promocion->precio_promocion = $request->precio_promocion;
        $promocion->precio_oferta_promocion = $request->precio_oferta_promocion;
        $promocion->save();
        $promocion->CrearServices($servicios);
        return redirect()->route('promociones.index')->with('exito', 'La promo ha sido creada con exito!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Promocion $promocion)
    {
        //
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $promocion = Promocion::findOrFail($id);
        return view('promociones.editar',compact('promocion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PromoRequest $request, $id):RedirectResponse
    {
        $servicios = $request->input("servicios");
        $promocion = Promocion::findOrFail($id);
        $promocion->nombre_promocion = $request->nombre_promocion;
        $promocion->precio_promocion = $request->precio_promocion;
        $promocion->precio_oferta_promocion = $request->precio_oferta_promocion;
        $promocion->update();
        $promocion->ActualizarServices($servicios);
        return redirect()->route('promociones.index')->with('exito', 'La promo ha sido actualizada con exito!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id):RedirectResponse
    {
        $promocion = Promocion::findOrFail($id);
        Promocion::destroy($promocion->id);
        return redirect()->route('promociones.index')->with('exito', 'La promo ha sido eliminada con exito!');
    }
}
