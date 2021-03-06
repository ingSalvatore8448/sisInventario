<?php

namespace Inventario;

use Illuminate\Database\Eloquent\Model;

class Mobiliarios extends Model
{
    protected $table="mobiliario";
    protected $primaryKey="idMobiliario";
     public $timestamps=false;

    protected $fillable=[
        'nombre_Mobi',
        'marca_Mobi',
        'serie_Mobi',
        'estado',
        'fecaRe_Mobi',
        'comentario',
        'Departamento_idDepartamento',
        'categoria_idcategoria',
         'imagen',
   

    ];
    public function persona(){
        return $this->hasMany(Inventario/Persona,'idPersona','idMobiliario');
    }
}
