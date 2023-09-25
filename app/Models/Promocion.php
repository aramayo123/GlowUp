<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Servicio;
use App\Models\Servicio_y_Promocion;
use Illuminate\Support\Facades\Log;

class Promocion extends Model
{
    use HasFactory;
    protected $table = 'promociones';

    
    protected $fillable = [
        'nombre_promocion',
        'precio_promocion',
        'precio_oferta_promocion',
    ];

    public function CrearServices($input_servicios){
        foreach ($input_servicios as $input) {
            $nuevo = new Servicio_y_Promocion();
            $nuevo->id_servicio = $input;
            $nuevo->id_promocion = $this->id;
            $nuevo->active = 1;
            $nuevo->save();
        }
        $servicios = Servicio::all();
        foreach($servicios as $servicio){
            $servicio_promo = Servicio_y_Promocion::where('id_servicio', $servicio->id)->where('id_promocion', $this->id)->get();
            //Log::debug($servicio_promo);
            if(!count($servicio_promo)){
                $nuevo = new Servicio_y_Promocion();
                $nuevo->id_servicio = $servicio->id;
                $nuevo->id_promocion = $this->id;
                $nuevo->active = 0;
                $nuevo->already_modify = 0;
                $nuevo->save();
            }
        }
    }
    public function MostrarServices(){
        $servicios = Servicio_y_Promocion::where('id_promocion', $this->id)->get();
        return $servicios;
    }
    public function ActualizarServices($input_servicios){
        foreach ($input_servicios as $input) {
            $nuevo = Servicio_y_Promocion::findOrFail($input);
            $nuevo->active = 1;
            $nuevo->already_modify = 1;
            $nuevo->update();
        }
        $registros = Servicio_y_Promocion::all();
        foreach($registros as $registro){
            Log::debug("servicio en :".$registro->already_modify);
            if(!$registro->already_modify){
                $registro->active = 0;
                $registro->update();
                Log::debug("se paso a desactivo el servicio y promocion con id: ".$registro->id);
            }
        }

        foreach($registros as $registro){
            $registro->already_modify = 0;
            $registro->update();
            Log::debug("se reseteo el servicio y promocion con id: ".$registro->id);
        }
    }
}
