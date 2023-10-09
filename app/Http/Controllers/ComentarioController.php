<?php

namespace App\Http\Controllers;

use App\Http\Requests\ComentarioRequest;
use Illuminate\Http\Request;
use App\Models\Comentario;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Response;
use Illuminate\Http\RedirectResponse;
use Throwable;

class ComentarioController extends Controller
{
    public function CrearComentario(Request $request){
        $validator = Validator::make($request->all(),[
            'autor' => 'required|min:5',
            'comentario' => 'required|min:10',
            'estrellas' => 'required'
        ]);
        if ($validator->fails()) {
            $response['status'] = 404; 
            $response['errors'] = $validator->errors(); 
            return Response::json($response);
        }
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
        $response['status'] = 200;
        $response['message'] = "Gracias por comentar!!";
        return Response::json($response);
    }
    public function LoadComentarios(){
        $reversed = Comentario::all();
        $comentarios = $reversed->reverse();
        $comentarios->all();
        return Response::json($comentarios);
    }
    public function EliminarComentario(Comentario $comentario):RedirectResponse
    {
        Comentario::destroy($comentario->id);
        return redirect()->route('productos.show')->with('exito', 'Comentario eliminado con exito!');
    }

}
