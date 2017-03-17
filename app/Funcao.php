<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Funcao extends Model
{
    protected $table = 'tb_funcao';
    public $timestamps = false;

    protected $fillable = array('nome');

    protected $guarded = ['id'];

    public function colaboradores(){
        return $this->hasMany('App\Colaborador');
    }
}
