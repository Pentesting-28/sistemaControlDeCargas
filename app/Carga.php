<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carga extends Model
{
    protected $table = 'cargas';

    //Codigo para el control de la asignación masiva de datos.
    
    protected $fillable = ['Orden',
                           'Ret_ID',
                           'Motivo',
                           'Valor_Facial',
                           'Desde',
                           'Hasta',
                           'Fecha',
                           'Observacion'];
                          
    //para que no se cambie directamente los campos
}
