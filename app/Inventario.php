<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventario extends Model
{
    protected $fillable = [
        'patrimoniogabinete', 'cod_gabinete', 'patrimoniomonitor',
        'patrimoniomonitor2', 'cod_monitor', 'cod_monitor2', 'descricaoInfo',
        'patrimonioMesa', 'cod_Mesa', 'patrimonioCadeira', 'cod_Cadeira',
        'patrimonioOutro', 'cod_Outro', 'descricaoMoveis', 'sala'
     ];
  
     protected $guarda = ['id', 'created_at', 'update_at'];
     protected $table = 'inventarios';
     public $timestamps = false;
}
