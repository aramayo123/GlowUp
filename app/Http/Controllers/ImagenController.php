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
        
        $imagen = time().".".$request->imagen->extension();
        $request->imagen->move(public_path("img/trabajos/"), $imagen);
        $date = Carbon::now();
        $nombre = $request->nombre;
        $fecha = $date->isoFormat('dddd D \d\e MMMM \d\e\l Y');
        $hora = $date->toTimeString();
        $orden = $request->orden;
    
        $registro = new Imagen();
        $registro->nombre = $nombre;
        $registro->imagen = $imagen;
        $registro->fecha = $fecha." a las ".$hora;
        $registro->orden = $orden;
        $registro->save();
    
        return redirect()->route('admin')->with('exito', 'Imagen subida con exito!');
    }
    public function BorrarImagen($id){
        $imagen = Imagen::findOrFail($id);
        Imagen::destroy($imagen->id);
        return redirect()->route('admin')->with('exito', 'Imagen borrada con exito!');
    }
    public function CambiarOrdenImagen (Request $request, $id){   
        $request->validate([
            'orden' => ['required'],
        ]);
        $imagen = Imagen::findOrFail($id);
        $imagen->orden = $request->orden;
        $imagen->update();
        return redirect()->route('admin')->with('exito', 'Orden de la imagen actualizada con exito!');
    }
}
