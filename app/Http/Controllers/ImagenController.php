<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ImagenRequest;
use Carbon\Carbon;
use App\Models\Imagen;

class ImagenController extends Controller
{
    //
    public function SubirImagen(ImagenRequest $request){
        
        if($request->imagen != null){
            $image = time().".".$request->imagen->extension();
            $request->imagen->move(public_path("img/trabajos/"), $image);
        }
        $date = Carbon::now();
        $nombre = $request->nombre;
        $imagen = $request->imagen;
        $fecha = $date->isoFormat('dddd D \d\e MMMM \d\e\l Y');
        $hora = $date->toTimeString();
    
        $registro = new Imagen();
        $registro->nombre = $nombre;
        $registro->imagen = $imagen;
        $registro->fecha = $fecha." a las ".$hora;
        $registro->save();
    
        return redirect()->route('admin')->with('exito', 'Imagen subida con exito!');
    }
}
