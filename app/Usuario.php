<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table='usuarios';
    public $timestamps=false;
    protected $fillable=[
        'id','imagen', 'nombre', 'email', 'rol_id'
    ];

    protected $primaryKey='id';
}
