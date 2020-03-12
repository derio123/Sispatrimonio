<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inventario extends Model
{
   protected $fillable = ['patrimonio', 'descricao', 'tipo','outro_tipo'];
   protected $guarda = ['id', 'created_at', 'update_at'];
   protected $table = 'inventarios'; 
   public $timestamps=false;
}
