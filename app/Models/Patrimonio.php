<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Patrimonio extends Model
{
    protected $fillable  = ['categoria', 'computador', 'monitor','monitor2','mesa', 'gaveteiro','cadeira',];
    protected $guarda = ['id', 'created_at', 'update_at'];
    protected $table = 'patrimonios';
    public $timestamps=false;
}
//plenus depois $table->string('plenus');