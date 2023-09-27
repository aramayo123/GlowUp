<?php

namespace App\Http\Controllers;

use App\Http\Requests\ComentarioRequest;
use Illuminate\Http\Request;
use App\Models\Comentario;
use Illuminate\Http\RedirectResponse;

class ComentarioController extends Controller
{
    public function EliminarComentario(Comentario $comentario):RedirectResponse
    {
        Comentario::destroy($comentario->id);
        return redirect()->route('productos.show')->with('exito', 'Comentario eliminado con exito!');
    }
    public function CrearComentario(ComentarioRequest $request)
    {
        $comentario = new Comentario();
        $comentario->autor = $request->autor;
        $random = rand(1,5);
        $avatar = '';
        switch($random){
            case 1:
                $avatar = "barber_female.png";
                break;
            case 3:
                $avatar = "female.png";
                break;
            default:
                $avatar = "barber.png";
                break;
        }
        $comentario->avatar = $avatar;
        $comentario->comentario = $request->comentario;
        $comentario->estrellas = $request->estrellas;
        $comentario->save();

        return redirect()->route('home')->with('exito', 'Gracias por comentar!!');
    }
}
